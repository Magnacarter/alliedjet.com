<article>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>

	<HR WIDTH="100%" COLOR="#ee6930" SIZE="2">

	<div class="post-thumbnail">
		<?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail( array( 'medium' ) );
			}
		?>
	</div>

	<ul class="info">
		<li>Posted in: <?php the_category( ', ' ) ?></li>
		<li>Written by: <a href="<?php echo esc_url( get_bloginfo( 'siteurl' ) ) ?>/about/"><?php the_author() ?></a></li>
		<li>On: <?php the_time( 'F j, Y' ) ?></li>
	</ul>

	<div class="excerpt">

		<?php if ( is_single() ) : ?>

			 <?php the_post_thumbnail( 'medium' ) ?>

			<?php the_content() ?>

			<?php comments_template() ?>

		<?php else : ?>

			<?php the_excerpt() ?>

			<p><a class="post-link" href="<?php echo esc_url( get_permalink() ) ?>">Continue Reading &rarr;</a></p>

		<?php endif ?>

	</div>

</article>