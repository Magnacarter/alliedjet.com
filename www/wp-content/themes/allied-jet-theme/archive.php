<?php
/*
 * Template Name: Archives
 */
get_header() ?>

<section id="gallery-page" class="grid-container">

	<div class="gallery-categories grid-100">

		<?php
		 $args = array(
			'show_option_all'    => '',
			'orderby'            => 'name',
			'order'              => 'ASC',
			'style'              => 'list',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'use_desc_for_title' => 1,
			'child_of'           => 0,
			'feed'               => '',
			'feed_type'          => '',
			'feed_image'         => '',
			'exclude'            => '',
			'exclude_tree'       => '',
			'include'            => '',
			'hierarchical'       => 1,
			'title_li'           => __( '' ),
			'show_option_none'   => __( '' ),
			'number'             => null,
			'echo'               => 1,
			'depth'              => 0,
			'current_category'   => 0,
			'pad_counts'         => 0,
			'taxonomy'           => 'category',
			'walker'             => null
			);
		?>
		<ul>
			<?php wp_list_categories( $args ) ?>
		</ul>
	</div>

	<?php get_template_part( 'gallery' ) ?>

</section>

<?php get_footer() ?>