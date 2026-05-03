<?php
/**
 * Template Part: Our Sectors Strip
 * Homepage bento-grid — white section, background image fades in on hover.
 */

$img     = get_template_directory_uri() . '/assets/images/';
$imgDir  = get_template_directory()     . '/assets/images/';
$avif    = get_template_directory_uri() . '/assets/images/avif/';
$avifDir = get_template_directory()     . '/assets/images/avif/';

// Helper: only return AVIF uri if the file actually exists on disk
function roca_avif( $avifDir, $avif, $slug ) {
	$file = $avifDir . 'sector-' . $slug . '.avif';
	return file_exists( $file ) ? $avif . 'sector-' . $slug . '.avif' : '';
}

$sectors = [
	[
		'num'   => '01',
		'title' => 'Residential',
		'desc'  => 'Custom homes & extensions',
		'img'   => $img . 'sector-residential.jpg',
		'avif'  => roca_avif( $avifDir, $avif, 'residential' ),
		'href'  => '/our-sectors/residential',
	],
	[
		'num'   => '02',
		'title' => 'Commercial',
		'desc'  => 'Offices, retail & mixed-use',
		'img'   => $img . 'sector-commercial.jpg',
		'avif'  => roca_avif( $avifDir, $avif, 'commercial' ),
		'href'  => '/our-sectors/commercial',
	],
	[
		'num'   => '03',
		'title' => 'Industrial',
		'desc'  => 'Warehouses & logistics facilities',
		'img'   => $img . 'sector-industrial.jpg',
		'avif'  => roca_avif( $avifDir, $avif, 'industrial' ),
		'href'  => '/our-sectors/industrial',
	],
	[
		'num'   => '04',
		'title' => 'Healthcare',
		'desc'  => 'Medical & aged-care builds',
		'img'   => $img . 'sector-healthcare.jpg',
		'avif'  => roca_avif( $avifDir, $avif, 'healthcare' ),
		'href'  => '/our-sectors/healthcare',
	],
	[
		'num'   => '05',
		'title' => 'Education',
		'desc'  => 'Schools, colleges & campuses',
		'img'   => $img . 'sector-education.jpg',
		'avif'  => roca_avif( $avifDir, $avif, 'education' ),
		'href'  => '/our-sectors/education',
	],
	[
		'num'   => '06',
		'title' => 'Hospitality',
		'desc'  => 'Hotels, restaurants & leisure',
		'img'   => $img . 'sector-hospitality.jpg',
		'avif'  => roca_avif( $avifDir, $avif, 'hospitality' ),
		'href'  => '/our-sectors/hospitality',
	],
];
?>

<section id="sectors-strip" class="roca-sectors" aria-label="Our Sectors">

	<!-- Section header -->
	<div class="roca-sectors__header">
		<div class="roca-sectors__header-inner">
			<span class="roca-sectors__eyebrow" data-sectors-header>Our Sectors</span>
			<h2 class="roca-sectors__heading" data-sectors-header>
				Where we build.
			</h2>
		</div>
		<p class="roca-sectors__sub" data-sectors-header>
			From bespoke residential builds to large-scale commercial and industrial projects — Roca Group delivers across every sector with the same standard of precision.
		</p>
	</div>

	<!-- Bento grid -->
	<div class="roca-sectors__grid-wrap">
	<div class="roca-sectors__grid">

		<?php foreach ( $sectors as $sector ) : ?>
			<a
				href="<?php echo esc_url( $sector['href'] ); ?>"
				class="roca-sector-cell"
				data-sector-cell
				aria-label="<?php echo esc_attr( $sector['title'] ); ?>"
			>
				<!-- Background image — lazy loaded, AVIF+JPG when AVIF exists, else JPG only -->
				<div
					class="roca-sector-cell__bg"
					data-bg="<?php echo esc_url( $sector['avif'] ?: $sector['img'] ); ?>"
					<?php if ( $sector['avif'] ) : ?>
					data-bg-fallback="<?php echo esc_url( $sector['img'] ); ?>"
					<?php endif; ?>
					aria-hidden="true"
				></div>

				<!-- Content -->
				<div class="roca-sector-cell__content">
					<span class="roca-sector-cell__num"><?php echo esc_html( $sector['num'] ); ?></span>
					<div>
						<h3 class="roca-sector-cell__title"><?php echo esc_html( $sector['title'] ); ?></h3>
						<p class="roca-sector-cell__desc"><?php echo esc_html( $sector['desc'] ); ?></p>
					</div>
					<span class="roca-sector-cell__arrow" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4 16L16 4M16 4H6M16 4V14" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</span>
				</div>

			</a>
		<?php endforeach; ?>

	</div>
	</div><!-- /.roca-sectors__grid-wrap -->

</section>
