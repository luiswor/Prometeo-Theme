<?php
    /**
     * Prometeo
     * The General Page File
    */
    
        get_template_part('template-parts/header', 'hero'); 

?>
<section class="page_content">
    <div class="container">
        <?php the_content(); ?>
    </div>
</section>