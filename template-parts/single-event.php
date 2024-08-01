<?php
    /**
     * Prometeo
     * The Page file
    */
    
    get_template_part('template-parts/header', 'hero'); 
?>


<section class="page_content">
    <div class="container container_leftright">
        <article class="page_left content">
            <?php the_content(); ?>
        </article>
        <aside class="page_right">
            <div class="page_right_content">

                <h2 class="h4 f-p">Otros Eventos</h2>
				
				<?php
				  // The Query.
				    global $id;
					$exclude_ids = array( $id );
					
					$eventos = array(
						'post_type' => 'event',
						'order' => 'ASC',
						
						'post__not_in' => $exclude_ids
					);

					$miseventos = new WP_Query( $eventos );


					if ( $miseventos->have_posts() ) :
						while ( $miseventos->have_posts() ) : $miseventos->the_post(); ?>
						   <article class="post-event-aside flex flex-col sm:flex-row justify-start items-start sm:items-center my-16">
								<div class="post-event-aside_img w-4/12 mr-3 bg-light">
									<?php the_post_thumbnail();?>
								</div>
								<div class="post-event-aside_info w-full sm:w-8/12">
									<span class="post_card_date flex items-center"> 
										<svg id='calendar-event_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>
											<g transform="matrix(1 0 0 1 12 12)" >
											<g style="" >
											<g transform="matrix(1 0 0 1 0 0)" >
											<path style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z" stroke-linecap="round" />
											</g>
											<g transform="matrix(1 0 0 1 -0.25 0.75)" >
											<rect style="stroke: rgb(0,0,0); stroke-width: 1.5; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" x="-8" y="-8" rx="2" ry="2" width="16" height="16" />
											</g>
											<g transform="matrix(1 0 0 1 3.75 -7.25)" >
											<line style="stroke: rgb(0,0,0); stroke-width: 1.5; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" x1="0" y1="-2" x2="0" y2="2" />
											</g>
											<g transform="matrix(1 0 0 1 -4.25 -7.25)" >
											<line style="stroke: rgb(0,0,0); stroke-width: 1.5; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" x1="0" y1="-2" x2="0" y2="2" />
											</g>
											<g transform="matrix(1 0 0 1 -0.25 -1.25)" >
											<line style="stroke: rgb(0,0,0); stroke-width: 1.5; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" x1="-8" y1="0" x2="8" y2="0" />
											</g>
											<g transform="matrix(1 0 0 1 -3.25 3.75)" >
											<rect style="stroke: rgb(0,0,0); stroke-width: 1.5; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" x="-1" y="-1" rx="0" ry="0" width="2" height="2" />
											</g>
											</g>
											</g>
										</svg>
										
										<strong>
											<?php 
												echo the_field('event_date');
											?>
										</strong>
									</span>
									<h2 class="post_card_title">
									  <a href="<?php echo get_the_permalink();?>">
										<?php echo get_the_title();?>
									  </a>
									</h2>
								</div>
						   </article>

					<?php
						endwhile;
					else :
						_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
					endif;

					?>
				
                <ul class="wp-block-latest-posts">

                </ul>
            </div>
        </aside>
    </div>
</section>