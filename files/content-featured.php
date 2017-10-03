<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
				<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-xs-12 col-sm-4">
				<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
			</div>
		
		<?php endif; ?>
    
    <?php the_title(sprintf('<h1 classs="entry-title"><a href="%s">',esc_url( get_permalink() ) ), '</a></h1>' ); ?>

</article>