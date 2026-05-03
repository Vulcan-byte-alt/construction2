<?php
/**
 * Template Part: Our Approach Strip
 * Homepage teaser — three-column editorial section on same dark field as hero.
 */

$img  = get_template_directory_uri() . '/assets/images/';
$avif = get_template_directory_uri() . '/assets/images/avif/';
?>

<section id="approach-strip" class="roca-approach" aria-label="Our Approach">

	<!-- Asymmetric header: heading left, intro paragraph right -->
	<div class="roca-approach__header">

		<div class="roca-approach__header-left" data-approach-header="left">
			<span class="roca-approach__eyebrow">Our Approach</span>
			<h2 class="roca-approach__heading">
				Built differently.<br>
				<em>On purpose.</em>
			</h2>
		</div>

		<div class="roca-approach__header-right" data-approach-header="right">
			<p class="roca-approach__intro">
				We don't operate like a typical contractor. Every engagement is structured around accountability, transparency, and craft — from the first conversation to final handover.
			</p>
		</div>

	</div>

	<!-- Full-width thin rule -->
	<div class="roca-approach__divider" aria-hidden="true"></div>

	<!-- Three process columns -->
	<div class="roca-approach__columns">

		<div class="roca-approach__col" data-approach-col>
			<span class="roca-approach__col-num">01</span>
			<div class="roca-approach__col-img-wrap">
				<picture>
					<source srcset="<?php echo esc_url( $avif . 'approach-listen.avif' ); ?>" type="image/avif">
					<img
						class="roca-approach__col-img roca-approach__col-img--landscape"
						src="<?php echo esc_url( $img . 'approach-listen.jpg' ); ?>"
						alt="Client consultation"
						loading="lazy"
					>
				</picture>
			</div>
			<h3 class="roca-approach__col-title">We Listen</h3>
			<p class="roca-approach__col-desc">Every project starts with understanding your constraints, not ours.</p>
		</div>

		<div class="roca-approach__col" data-approach-col>
			<span class="roca-approach__col-num">02</span>
			<div class="roca-approach__col-img-wrap">
				<picture>
					<source srcset="<?php echo esc_url( $avif . 'approach-plan.avif' ); ?>" type="image/avif">
					<img
						class="roca-approach__col-img"
						src="<?php echo esc_url( $img . 'approach-plan.jpg' ); ?>"
						alt="Project planning and blueprints"
						loading="lazy"
					>
				</picture>
			</div>
			<h3 class="roca-approach__col-title">We Plan</h3>
			<p class="roca-approach__col-desc">Precision scheduling and transparent costings before a single foundation is laid.</p>
		</div>

		<div class="roca-approach__col" data-approach-col>
			<span class="roca-approach__col-num">03</span>
			<div class="roca-approach__col-img-wrap">
				<picture>
					<source srcset="<?php echo esc_url( $avif . 'approach-execute.avif' ); ?>" type="image/avif">
					<img
						class="roca-approach__col-img"
						src="<?php echo esc_url( $img . 'approach-execute.jpg' ); ?>"
						alt="Construction in progress"
						loading="lazy"
					>
				</picture>
			</div>
			<h3 class="roca-approach__col-title">We Execute</h3>
			<p class="roca-approach__col-desc">Self-performed where it matters. On site, accountable, until the day of handover.</p>
		</div>

	</div>

	<!-- CTA row: link left, extending line right -->
	<div class="roca-approach__cta">
		<a href="/our-approach" class="roca-approach__link" data-approach-cta>
			Read our full methodology
			<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
				<path d="M1 13L13 1M13 1H3M13 1V11" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</a>
		<div class="roca-approach__cta-line" aria-hidden="true"></div>
	</div>

</section>
