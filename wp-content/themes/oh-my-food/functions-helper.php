<?php
function _dump_styles()
{
    static $styled = false;
    if (!$styled) {
        echo '
        <style>
            .sf-dump-container {
                background-color: #18171B;
                color: #FF8400;
                padding: 10px;
                border-radius: 5px;
                font-family: "SFMono-Regular", "Consolas", "Liberation Mono", "Menlo", monospace;
                font-size: 14px;
                line-height: 1.6;
                white-space: pre-wrap;
                word-wrap: break-word;
                margin-bottom: 15px;
                display: block;
                text-align: left;
            }
            .sf-dump-meta { color: #AEAEAE; } /* Type, size */
            .sf-dump-str { color: #A0C25F; } /* String */
            .sf-dump-int { color: #66C2CD; } /* Integer */
            .sf-dump-float { color: #66C2CD; } /* Float */
            .sf-dump-bool { color: #CF65C0; } /* Boolean */
            .sf-dump-null { color: #CF65C0; } /* NULL */
            .sf-dump-key { color: #E3E3E3; } /* Array/Object key */
            .sf-dump-visibility { color: #9B9B9B; } /* protected, private */
        </style>';
        $styled = true;
    }
}

/**
 * Fonction récursive pour afficher une variable de manière formatée.
 *
 * @param mixed $data La variable à dumper.
 * @param int $indentation Le niveau d'indentation actuel.
 */
function _dump_recursive($data, int $indentation = 0)
{
    $indentStr = str_repeat('  ', $indentation);
    $type = gettype($data);

    switch ($type) {
        case 'string':
            echo $indentStr . '<span class="sf-dump-meta">string(' . strlen($data) . ')</span> <span class="sf-dump-str">"' . htmlspecialchars($data) . '"</span>' . "\n";
            break;
        case 'integer':
            echo $indentStr . '<span class="sf-dump-meta">int</span>(<span class="sf-dump-int">' . $data . '</span>)' . "\n";
            break;
        case 'double':
            echo $indentStr . '<span class="sf-dump-meta">float</span>(<span class="sf-dump-float">' . $data . '</span>)' . "\n";
            break;
        case 'boolean':
            echo $indentStr . '<span class="sf-dump-meta">bool</span>(<span class="sf-dump-bool">' . ($data ? 'true' : 'false') . '</span>)' . "\n";
            break;
        case 'NULL':
            echo $indentStr . '<span class="sf-dump-null">NULL</span>' . "\n";
            break;
        case 'array':
            echo $indentStr . '<span class="sf-dump-meta">array(' . count($data) . ')</span> {' . "\n";
            foreach ($data as $key => $value) {
                echo str_repeat('  ', $indentation + 1) . '<span class="sf-dump-key">' . (is_string($key) ? '"'.$key.'"' : $key) . '</span> => ';
                _dump_recursive($value, $indentation + 1);
            }
            echo $indentStr . '}' . "\n";
            break;
        case 'object':
            $className = get_class($data);
            $reflection = new ReflectionObject($data);
            $properties = $reflection->getProperties();

            echo $indentStr . '<span class="sf-dump-meta">object</span>(' . $className . ') {' . "\n";
            foreach ($properties as $prop) {
                $prop->setAccessible(true); // Permet de lire les propriétés private/protected
                $value = $prop->getValue($data);
                $visibility = $prop->isPublic() ? 'public' : ($prop->isProtected() ? 'protected' : 'private');

                echo str_repeat('  ', $indentation + 1);
                echo '<span class="sf-dump-visibility">' . $visibility . '</span> ';
                echo '<span class="sf-dump-key">$' . $prop->getName() . '</span>: ';
                _dump_recursive($value, $indentation + 1);
            }
            echo $indentStr . '}' . "\n";
            break;
        default:
            // Pour les types non gérés comme les ressources
            echo $indentStr . '<span class="sf-dump-meta">' . $type . '</span>' . "\n";
            break;
    }
}

/**
 * Affiche des informations lisibles sur une ou plusieurs variables, à la manière de dump() de Symfony.
 */
function dump(...$vars)
{
    _dump_styles();
    foreach ($vars as $var) {
        echo '<pre class="sf-dump-container">';
        _dump_recursive($var);
        echo '</pre>';
    }
}

/**
 * Affiche des informations sur une ou plusieurs variables et termine l'exécution du script.
 */
function dd(...$vars)
{
    dump(...$vars);
    die;
}