		<footer>

			<div class="footer-form grid-container">
				<div class="turn-key grid-55">
					<h2>Let's Talk Turnkey</h2>
					<HR WIDTH="100%" COLOR="#f1552a" SIZE="2">
					<p>Have questions comments or just want to say "hi"? Just fill out the boxes on the right and we'll be on our way to some great work!</p>
				</div>
				<div class="email-form grid-45">
					<?php the_field( 'email_form', 'options' ) ?>
				</div>
			</div>
			<div class="footer-section grid-container">
				<div class="copyright grid-55">
					<h5>&copy;<?php echo date('Y'); ?> Lauren Black</h5>
				</div>
				<div class="icons">
					<div class="icon-header grid-15">
						<h4>Follow me on:</h4>
					</div>
					<div class="ss-icon grid-15">
						<a href="">&#xF641;</a>
						<a href="">&#xF650;</a>
						<a href="">&#xF612;</a>
						<a href="">&#xF661;</a>
					</div>
				</div>
			</div>

		</footer>

	<?php wp_footer(); ?>

	</body>

</html>