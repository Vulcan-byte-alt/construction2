<?php
/**
 * Template Part: About — redesigned light editorial layout
 * White/off-white bg, asymmetric magazine spread, minimalist inline stats.
 */
?>

<section id="about-editorial" class="roca-about" aria-label="Who We Are">

	<!-- ── Top: eyebrow + headline ── -->
	<div class="roca-about__headline-wrap">
		<div class="roca-about__headline-inner">
			<span class="roca-about__eyebrow" data-animate="fade-up">Who We Are</span>
			<h2 class="roca-about__heading" data-animate="fade-up">
				Built on legacy.<br><em>Driven by innovation.</em>
			</h2>
		</div>
	</div>

	<!-- ── Middle: asymmetric body + image ── -->
	<div class="roca-about__body-wrap">

		<!-- Left: copy column -->
		<div class="roca-about__copy" data-animate="fade-up">

			<p class="roca-about__lead">
				Founded on the belief that great construction begins with great relationships, Roca Group has spent two decades delivering landmark residential and commercial projects across the country.
			</p>

			<blockquote class="roca-about__pull">
				We self-perform where others subcontract. We stay accountable where others disappear.
			</blockquote>

			<p class="roca-about__body">
				From bespoke private residences to large-scale commercial developments, every project we undertake is treated as a legacy piece — designed to endure, built to impress, and delivered with integrity.
			</p>

			<a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="roca-about__link">
				Our story
				<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<path d="M1 13L13 1M13 1H3M13 1V11" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>

		</div>

		<!-- Right: architectural image, bleeds slightly, no overlay -->
		<div class="roca-about__image-wrap" data-about-image>
			<img
				class="roca-about__img"
				src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=1000&q=85"
				alt="Roca Group — precision construction"
				loading="lazy"
			>
			<!-- Thin gold accent rule on left edge of image -->
			<div class="roca-about__img-accent" aria-hidden="true"></div>
		</div>

	</div><!-- /.roca-about__body-wrap -->

	<!-- ── Bottom: minimalist stats row ── -->
	<div class="roca-about__stats">
		<div class="roca-about__stats-inner">

			<div class="roca-stat" data-animate="fade-up">
				<span class="roca-stat__num stat-number" data-target="150" data-suffix="+">0+</span>
				<span class="roca-stat__label">Projects Delivered</span>
			</div>

			<div class="roca-stat" data-animate="fade-up">
				<span class="roca-stat__num stat-number" data-target="20" data-suffix="+">0+</span>
				<span class="roca-stat__label">Years of Experience</span>
			</div>

			<div class="roca-stat" data-animate="fade-up">
				<span class="roca-stat__num stat-number" data-target="8" data-suffix="">0</span>
				<span class="roca-stat__label">Industry Sectors</span>
			</div>

			<div class="roca-stat" data-animate="fade-up">
				<span class="roca-stat__num stat-number" data-target="100" data-suffix="%">0%</span>
				<span class="roca-stat__label">Client Satisfaction</span>
			</div>

		</div>
	</div>

</section><!-- /#about-editorial -->
