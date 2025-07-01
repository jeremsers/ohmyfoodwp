<footer>
    <div class="logo">
        <p>logo</p>
    </div>
    <nav>
        <ul class="nav-container">
            <?php
            $nav_menu = get_legals_menu();
            if ($nav_menu) {
                foreach ($nav_menu as $post):
                    ?>
                    <li class="items <?= $post->post_name === 'se-connecter' ? 'items-button' : '' ?>">
                        <a href="<?= $post->url ?>">
                            <?= $post->title ?>
                        </a>
                    </li>
                    <?php
                endforeach;
            } else {
                ?>
                <h1> Nav menu could not be retrieved</h1>
                <?php
            }

            ?>
        </ul>
    </nav>
        </footer>