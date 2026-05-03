<?php
/**
 * Template Part: Contact CTA Strip
 * Homepage — full-width dark section just before the footer.
 */
?>

<section id="contact-cta" class="roca-cta" aria-label="Get in touch">

	<!-- Background image — right half bleeds in -->
	<div class="roca-cta__bg" aria-hidden="true">
		<img
			class="roca-cta__bg-img"
			src="https://images.unsplash.com/photo-1541976590-713941681591?w=1400&q=85"
			alt=""
		>
		<!-- Gradient: charcoal → transparent, left to right, so image dissolves into the dark bg -->
		<div class="roca-cta__bg-fade"></div>
	</div>

	<div class="roca-cta__inner">
		<div class="roca-cta__content" data-animate="fade-up">
			<span class="roca-cta__eyebrow">Start a Conversation</span>
			<h2 class="roca-cta__heading">
				Let's build something<br><em>great together.</em>
			</h2>
			<p class="roca-cta__sub">
				Ready to bring your vision to life? Tell us about your project and our team will be in touch within 24 hours.
			</p>
			<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="roca-cta__btn">
				Get in Touch
				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<path d="M2 14L14 2M14 2H4M14 2V12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>
	</div>

</section><!-- /#contact-cta -->
