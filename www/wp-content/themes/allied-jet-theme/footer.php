			<footer>

				<HR WIDTH="100%" COLOR="white" SIZE="1">

				<style type="text/css">
					footer {
						background-color: <?php the_field( 'footer_color', 'options' ) ?>;
					}
				</style>

				<div class="footer-content grid-container">

					<div class="company-name grid-50">
						<h4><a href="<?php echo esc_url( get_home_url() ) ?>"><?php echo esc_html( get_bloginfo( 'name' ) ) ?></a></h4>
					</div>

					<div id="social-links" class="ss-icon grid-50">
						<a href="<?php the_field( 'facebook_link', 'options' ) ?>" target="_blank">&#xF610;</a>
						<a href="<?php the_field( 'twitter_link', 'options' ) ?>" target="_blank">&#xF611;</a>
						<a href="<?php the_field( 'linkedin_link', 'options' ) ?>" target="_blank">&#xF612;</a>
						<a href="<?php the_field( 'instagram_link', 'options' ) ?>" target="_blank">&#xF641;</a>
					</div>

				</div>

				<div class="copyright-wrap grid-container">
					<div class="copyright grid-50">
						<h5>&copy;<?php echo date('Y ') ?><a href="<?php echo esc_url( get_home_url() ) ?>"><?php echo esc_html( get_bloginfo( 'name' ) ) ?></a></h5>
					</div>

					<div class="footer-description-wrap grid-50">
						<h5><?php echo esc_html( get_bloginfo( 'description' ) )?></h5>
					</div>
				</div>

			</footer>

		<?php wp_footer() ?>

	</body>

</html>