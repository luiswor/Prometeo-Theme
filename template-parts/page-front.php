<?php

?>

<section class="hero_start">
    <div class="hero_start_content">
        <p class="f-l t-center prename">
                Bienvenido a  
        </p>
        <div class="hero_start_logo">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-tea.png" alt="Prometeo">
            <h1 class="hero_start_title f-l bold t-center">
                <span class="namehead">
                    Proyecto
                </span>
                <span class="name f-ld">
                    PROMETEO
                </span>
            </h1>
        </div>
        <p class="hero_start_excerpt color-light t-center max">
            Un mundo de posibilidades a su alcance
        </p>
    </div>


    <div class='planet-container planet-y'>
        <div class='night'></div>
        <div class='day'></div>
        <div class='clouds'></div>
        <div class='inner-shadow'></div>
    </div>

    <div class="custom-shape-divider-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 1920 219.7" style="enable-background:new 0 0 1920 219.7;" xml:space="preserve">
            <style type="text/css">
                .wpcv{
                    width: 100%;
                    fill:#fff;
                }
            </style>
            <g>
                <path class="wpcv" d="M960,198.7C617.5,198.7,292.4,127.6,0,0v219.7h1920V0C1627.6,127.6,1302.5,198.7,960,198.7z"/>
            </g>
        </svg>
    </div>
</section>



<?php the_content();?>