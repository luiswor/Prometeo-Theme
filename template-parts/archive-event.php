<?php
    get_template_part('template-parts/header', 'hero'); 
?>
<section class="archive">
    <div class="container row py-20">

        <?php
		
		// The Query.
		$eventos = array(
			'post_type' => 'event',
			'meta_key' => 'event_date',
			'orderby'=>'meta_value_num',
			'order' => 'ASC',
		);

		$miseventos = new WP_Query( $eventos );
		
    	if ($miseventos->have_posts() ) :
        while ( $miseventos->have_posts() ) : $miseventos->the_post(); ?>
           <article class="post_event w-12/12 lg:w-6/12 px-10 my-10">
			   <div class="">
				   
			   </div>
               <div class="post_event_img">
                    <?php	
                    	if (has_post_thumbnail()){
                    		the_post_thumbnail('large');
                    	}
                    ?>
			   </div>
			   <div class="post_event_info">
				   <p class="post_card_date"> 
					   <em>El </em>
					   <strong>
					   <?php echo the_field('event_date');?>
					   </strong>
					   desde las <strong><?php echo the_field('event_time_from');?></strong>
					   hasta las <strong><?php echo the_field('event_time_to');?></strong> 
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
					   Ir al Evento
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