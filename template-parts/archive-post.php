
<section>
	<h1>
		EVENTOS
	</h1>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
           <article class="post_card">
                <div class="post_card_img">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="post_card_info">
                    <p class="post_card_date"> 
                        <em>Publicada </em>
                        <?php echo get_the_date();?>
                         |
                         <em>por</em>
                        <?php the_author();?>
                    </p>
                    <h2 class="post_card_title">
                        <?php echo get_the_title();?>
                    </h2>
                    <p class="post_card_excerpt">
                        <?php echo get_the_excerpt();?>
                    </p>
                    <a href="">

                    </a>
                </div>
           </article>

    <?php
        endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;

    ?>
</section>
