<?php
/**
 * Template Part: Hero
 * Full-viewport hero: background image fills section with diagonal clip-path,
 * ticker follows immediately so both fit in one viewport without scrolling.
 */

$bg_url        = get_theme_mod( 'roca_hero_bg_image', get_template_directory_uri() . '/assets/images/hero.png' );
$headline_l1   = get_theme_mod( 'roca_hero_headline_line1', 'Building Excellence,' );
$headline_l2   = get_theme_mod( 'roca_hero_headline_line2', 'Defining Skylines.' );
$subtext       = get_theme_mod( 'roca_hero_subtext', 'Roca Group delivers bespoke residential and commercial construction — from concept to handover, on time and to the highest standard.' );
$cta1_label    = get_theme_mod( 'roca_hero_cta_label', 'View Our Projects' );
$cta1_url      = get_theme_mod( 'roca_hero_cta_url', '/projects' );
$cta2_label    = get_theme_mod( 'roca_hero_cta2_label', 'Our Approach' );
$cta2_url      = get_theme_mod( 'roca_hero_cta2_url', '/our-approach' );

$ticker_items = [
	'Custom Home Builds',
	'Commercial Construction',
	'Renovations & Extensions',
	'Project Management',
	'Design & Build',
	'Structural Works',
];
?>

<section class="roca-hero" aria-label="Hero">

	<!-- Background image + diagonal clip — kept separate so layout box is unaffected -->
	<div
		class="roca-hero__bg"
		style="background-image: url('<?php echo esc_url( $bg_url ); ?>');"
		aria-hidden="true"
	>
		<div class="roca-hero__overlay"></div>
	</div>

	<!-- Text content sits above the bg, in the unclipped section layout -->
	<div class="roca-hero__content">
		<div class="roca-hero__text">

			<span class="roca-hero__eyebrow" data-hero="eyebrow">
				Premium Construction
			</span>

			<h1 class="roca-hero__h1" data-hero="h1">
				<span class="roca-hero__h1-l1"><?php echo esc_html( $headline_l1 ); ?></span><br>
				<span class="roca-hero__h1-l2"><?php echo esc_html( $headline_l2 ); ?></span>
			</h1>

			<p class="roca-hero__sub" data-hero="sub">
				<?php echo esc_html( $subtext ); ?>
			</p>

			<div class="roca-hero__ctas" data-hero="ctas">
				<a href="#projects" class="btn-primary">
					VIEW OUR PROJECTS
					<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:inline-block; vertical-align:middle;">
						<path d="M1 11L11 1M11 1H3M11 1V9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
				<a href="<?php echo esc_url( $cta2_url ); ?>" class="btn-ghost">
					<?php echo esc_html( $cta2_label ); ?>
				</a>
			</div>

		</div>
	</div>

</section>

<!-- ── Ticker Banner ─────────────────────────────────────────────────────────
     Sits directly below the hero. Section height + ticker height = 100vh,
     so both are visible without scrolling.
──────────────────────────────────────────────────────────────────────────── -->
<div class="roca-ticker" aria-hidden="true" role="presentation">
	<div class="roca-ticker__track">
		<?php
		// Two identical sets → CSS translateX(-50%) creates seamless loop
		for ( $i = 0; $i < 2; $i++ ) :
			foreach ( $ticker_items as $item ) : ?>
				<span class="roca-ticker__item"><?php echo esc_html( $item ); ?></span>
				<span class="roca-ticker__sep">&#9670;</span>
			<?php endforeach;
		endfor;
		?>
	</div>
</div>
