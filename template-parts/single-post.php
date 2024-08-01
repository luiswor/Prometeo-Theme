<?php
    /**
     * Prometeo
     * The Post file
    */
    
    get_template_part('template-parts/header', 'hero'); 
?>


<section class="post_content">
    <div class="container">
        <article class="post_body content">
            <?php the_content(); ?>
        </article>

        <aside class="post_aside">
          <div class="post_aside_content">

         			  
			  			<?php
 			                 if(is_active_sidebar('sidebara')):
            	        ?>
                		<?php dynamic_sidebar('sidebara'); ?>
                		<?php endif;?>	
                
          </div>
        </aside>
    </div>

</section>