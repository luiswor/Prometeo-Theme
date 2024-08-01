<?php
/*
Template Name: Página de Servicios
Template Post Type: page
*/

    get_header();
    
    get_template_part('template-parts/header', 'hero'); 
?>

<section class="page_content">
    <div class="container container_leftright">
        <article class="page_left content">
            <?php the_content(); ?>
        </article>
        <aside class="page_right">
            <div class="page_right_content">

                <h2 class="h4 f-p">Otros servicios</h2>
               
                <ul class="wp-block-latest-posts">
                    <?php
                    global $id;
                    wp_list_pages( array(
                        'title_li'    => '',
                        'child_of'    => '79',
                        'exclude'     => $id,
                        'show_date'   => 'modified',
                        'date_format' => $date_format
                    ) );
                    ?>
                </ul>
            </div>
        </aside>
    </div>
</section>
<?php get_footer();?>