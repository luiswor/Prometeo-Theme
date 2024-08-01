<?php
    get_template_part('template-parts/header', 'hero'); 
?>





<section class="archive">
    <div class="container archive_container">

        <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
           <article class="post_card">
               <div class="post_card_img">
                    <?php	
                    	if (has_post_thumbnail()){
                    		the_post_thumbnail('medium');
                    	}
                    ?>
                    </div>
                    <div class="post_card_info">
                        <p class="post_card_date"> 
                          <em>Publicada el</em>
                          <?php echo get_the_date();?>
                          |
                          <em>por</em>
                          <strong>
                            <?php the_author();?>
                          </strong>
                        </p>
                    
                        
                        <h2 class="post_card_title h3 f-p">
                            <a href="<?php echo get_the_permalink();?>" title="<?php the_title(); ?>">
                                <?php echo get_the_title();?>
                            </a>
                        </h2>
                        <p class="post_card_excerpt">
                            <?php echo get_the_excerpt();?>
                        </p>
                        <a class="btn-link" href="<?php echo get_the_permalink();?>">
                            Leer Artículo
                        </a>
                    </div>
                </article>
                
                <?php
        endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
        
        ?>
    </div>
</section>