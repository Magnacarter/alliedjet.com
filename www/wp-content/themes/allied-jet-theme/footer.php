			</div> <!--page content wrap from header.php-->
			<footer>

				<style type="text/css">
					footer {
						background-color: <?php the_field( 'footer_color', 'options' ) ?>;
					}
				</style>

				<section class="footer-content grid-container">

					<div class="aj-footer-menu grid-20 tablet-grid-100">
						<?php
							$defaults = array(
								'theme_location'  => '',
								'menu'            => 'footer-nav',
								'container'       => 'div',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);
							wp_nav_menu( $defaults )
						?>
					</div>

					<div class="footer-logo grid-55 tablet-grid-100">
						<h4><a href="<?php echo esc_url( get_home_url() ) ?>"><img src="<?php the_field( 'nav_logo', 'options' ) ?>"/></a></h4>
					</div>

					<div class="footer-contact grid-25 tablet-grid-100">
						<a href="<?php echo esc_url( get_home_url() ) ?>/contact-us"><h3 class="footer-contact-us">Contact Us</h3>

						<div class="contact-info-wrap">

							<h3 class="footer-phone-number"><?php the_field( 'phone_number', 'options' ) ?></h3>

							<ul class="footer-location-list">
								<li class="footer-location-one"><?php the_field( 'header_location_1', 'options' ) ?></li>

								<li class="footer-location-two"><?php the_field( 'header_location_2', 'options' ) ?></li>

								<li class="footer-location-three"><?php the_field( 'header_location_3', 'options' ) ?></li>
							</ul>

						</div>
					</div>

				</section>

				<div class="copyright-wrap grid-container">
					<div class="copyright grid-100">
						<h5>&copy;<?php echo date('Y ') ?><a href="<?php echo esc_url( get_home_url() ) ?>"><?php echo esc_html( get_bloginfo( 'name' ) ) ?></a></h5>
					</div>
				</div>

			</footer>

		<?php wp_footer() ?>

	</body>

</html>