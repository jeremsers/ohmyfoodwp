<?php
$menu_items =
    [
        'image' => 'http://ohmyfood.local/wp-content/uploads/2025/06/plat-min.webp',
        'title' => 'Nom du plat',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        'price' => '10€'
    ]
    ?>
<section class="menu">
    <div class="entrees-container">
        <h2 class="section-title">Entrées</h2>
        <div class="menu-container">
            <?php for ($i = 0; $i < 7; $i++) { ?>
                <div class="menu-item">
                    <img class="menu-item-image" src="<?php echo $menu_items['image']; ?>"
                        alt="<?php echo $menu_items['title']; ?>" height="150" width="150">
                    <div class="menu-item-content">
                        <h3 class="menu-item-title"><?php echo $menu_items['title']; ?></h3>
                        <p class="menu-item-description"><?php echo $menu_items['description']; ?></p>
                    </div>
                 
                        <p class="menu-item-price"><?php echo $menu_items['price']; ?></p>
                 
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="plats-container">
        <h2 class="section-title">Plats</h2>
        <div class="menu-container">
            <?php for ($i = 0; $i < 8; $i++) { ?>
                <div class="menu-item">
                    <img class="menu-item-image" src="<?php echo $menu_items['image']; ?>"
                        alt="<?php echo $menu_items['title']; ?>" height="150" width="150">
                    <div class="menu-item-content">
                        <h3 class="menu-item-title"><?php echo $menu_items['title']; ?></h3>
                        <p class="menu-item-description"><?php echo $menu_items['description']; ?></p>
                    </div>
                    <p class="menu-item-price"><?php echo $menu_items['price']; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="desserts-container">
        <h2 class="section-title">Desserts</h2>
        <div class="menu-container">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="menu-item">
                    <img class="menu-item-image" src="<?php echo $menu_items['image']; ?>"
                        alt="<?php echo $menu_items['title']; ?>" height="150" width="150">
                    <div class="menu-item-content">
                        <h3 class="menu-item-title"><?php echo $menu_items['title']; ?></h3>
                        <p class="menu-item-description"><?php echo $menu_items['description']; ?></p>
                    </div>
                    <p class="menu-item-price"><?php echo $menu_items['price']; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <button class="restaurant-button">Réserver une table</button>
</section>