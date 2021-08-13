<nav>
    <div id="menuContainer" class="hidden">
            <?php
            $menuArgs = array(
                "theme_location" => "main-menu",
                "container" => ""
            );
            wp_nav_menu($menuArgs);
            ?>
    </div>
</nav>