<header class="header">
    <div class="container">
        <a href="<?php bloginfo('url'); ?>" class="identity">
            <?php 
                //the_custom_logo();
            ?>

            <img class="logo-dark" src="<?php bloginfo('template_url'); ?>/assets/images/prometeo-logo.png" alt="Prometeo">
            <img class="logo-light" src="<?php bloginfo('template_url'); ?>/assets/images/prometeo-logo-i.png" alt="Prometeo">

        </a>

        <nav class="nav">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'Header',
                        'container'       => false,
                        'menu_class'      => 'nav_menu',
                    )
                );
            ?>
        </nav>
        
        <button class="btn-menu block md:hidden">
        	<span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>