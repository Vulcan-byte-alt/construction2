<footer id="site-footer" class="roca-footer" aria-label="Site footer">

	<!-- Top: large logo + tagline -->
	<div class="roca-footer__top">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="roca-footer__logo" aria-label="Roca Group — Home">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/roca-logo.png' ); ?>"
				alt="Roca Group"
			>
		</a>
		<p class="roca-footer__tagline">Building with intention.<br><em>Delivering beyond expectation.</em></p>
	</div>

	<!-- Divider -->
	<div class="roca-footer__rule"></div>

	<!-- Mid: nav columns + contact -->
	<div class="roca-footer__mid">

		<div class="roca-footer__col">
			<span class="roca-footer__col-label">Navigate</span>
			<ul class="roca-footer__nav">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li><a href="<?php echo esc_url( home_url( '/our-approach' ) ); ?>">Our Approach</a></li>
				<li><a href="<?php echo esc_url( home_url( '/our-sectors' ) ); ?>">Our Sectors</a></li>
				<li><a href="<?php echo esc_url( home_url( '/our-projects' ) ); ?>">Our Projects</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact Us</a></li>
			</ul>
		</div>

		<div class="roca-footer__col">
			<span class="roca-footer__col-label">Sectors</span>
			<ul class="roca-footer__nav">
				<li><a href="<?php echo esc_url( home_url( '/our-sectors' ) ); ?>">Residential</a></li>
				<li><a href="<?php echo esc_url( home_url( '/our-sectors' ) ); ?>">Commercial</a></li>
				<li><a href="<?php echo esc_url( home_url( '/our-sectors' ) ); ?>">Industrial</a></li>
				<li><a href="<?php echo esc_url( home_url( '/our-sectors' ) ); ?>">Healthcare</a></li>
				<li><a href="<?php echo esc_url( home_url( '/our-sectors' ) ); ?>">Hospitality</a></li>
			</ul>
		</div>

		<div class="roca-footer__col">
			<span class="roca-footer__col-label">Get in Touch</span>
			<address class="roca-footer__address">
				<p>123 Construction Avenue<br>Dubai, UAE</p>
				<a href="mailto:hello@rocagroup.com">hello@rocagroup.com</a>
				<a href="tel:+97141234567">+971 4 123 4567</a>
			</address>
		</div>

		<div class="roca-footer__col roca-footer__col--social">
			<span class="roca-footer__col-label">Follow</span>
			<ul class="roca-footer__social">
				<li>
					<a href="#" aria-label="LinkedIn">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<rect x="2" y="9" width="4" height="12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<circle cx="4" cy="4" r="2" stroke="currentColor" stroke-width="1.5"/>
						</svg>
						LinkedIn
					</a>
				</li>
				<li>
					<a href="#" aria-label="Instagram">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="2" y="2" width="20" height="20" rx="5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.5"/>
							<circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/>
						</svg>
						Instagram
					</a>
				</li>
				<li>
					<a href="#" aria-label="Houzz">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3 9.5L12 3l9 6.5V21H3V9.5z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Houzz
					</a>
				</li>
			</ul>
		</div>

	</div>

	<!-- Bottom bar -->
	<div class="roca-footer__bottom">
		<span class="roca-footer__copy">&copy; <?php echo date( 'Y' ); ?> Roca Group. All rights reserved.</span>
		<span class="roca-footer__legal">
			<a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a>
			<span aria-hidden="true">·</span>
			<a href="<?php echo esc_url( home_url( '/terms' ) ); ?>">Terms</a>
		</span>
	</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
