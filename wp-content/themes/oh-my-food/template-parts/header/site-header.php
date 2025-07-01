<header>
    <div class="logo">
        <a class='logo-link' href="http://ohmyfood.local">
            <img alt="logo"
                src="http://ohmyfood.local/wp-content/uploads/2025/06/cropped-Ohmyfood__8_-removebg-preview.png">
        </a>
    </div>
    <nav>
        <ul class="nav-container">
            <?php
            $nav_menu = get_nav_menu();
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
</header>