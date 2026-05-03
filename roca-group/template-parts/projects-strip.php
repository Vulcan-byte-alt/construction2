<?php
/**
 * Template Part: Featured Projects Strip
 * Full-width cinematic slideshow — one project per frame.
 */

$projects = new WP_Query( [
	'post_type'      => 'project',
	'posts_per_page' => 6,
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC',
	'meta_query'     => [
		[
			'key'     => '_thumbnail_id',
			'compare' => 'EXISTS',
		],
	],
] );
?>

<section id="projects-strip" class="roca-projects" aria-label="Our Projects">

	<!-- Section header -->
	<div class="roca-projects__header">
		<div>
			<span class="roca-projects__eyebrow">Our Projects</span>
			<h2 class="roca-projects__heading">Work that<br><em>speaks for itself.</em></h2>
		</div>
		<div class="roca-projects__header-right">
			<p class="roca-projects__sub">Every project we take on becomes a benchmark. Here is a selection of the work we're proud to put our name to.</p>
			<a href="<?php echo esc_url( get_post_type_archive_link( 'project' ) ); ?>" class="roca-projects__view-all">
				View all projects
				<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<path d="M1 13L13 1M13 1H3M13 1V11" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>
	</div>

	<?php if ( $projects->have_posts() ) :
		$total = $projects->post_count;
	?>

	<!-- Full-width cinematic frame -->
	<div class="roca-projects__frame" data-projects-stage>

		<!-- Slides -->
		<?php $slide_index = 0; while ( $projects->have_posts() ) : $projects->the_post();
			$slide_index++;
			$slide_num = str_pad( $slide_index, 2, '0', STR_PAD_LEFT );
			$sector    = get_field( 'sector' );
			$location  = get_field( 'location' );
		?>
		<div class="roca-projects__slide<?php echo $slide_index === 1 ? ' is-active' : ''; ?>"
		     data-projects-slide
		     aria-hidden="<?php echo $slide_index === 1 ? 'false' : 'true'; ?>">

			<!-- Image -->
			<div class="roca-projects__slide-img">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'full', [ 'class' => 'roca-projects__slide-photo', 'loading' => $slide_index === 1 ? 'eager' : 'lazy' ] ); ?>
				<?php else : ?>
					<div class="roca-projects__slide-placeholder"></div>
				<?php endif; ?>
				<div class="roca-projects__slide-grad" aria-hidden="true"></div>
			</div>

			<!-- Info bar at bottom of frame -->
			<div class="roca-projects__slide-info">
				<div class="roca-projects__slide-meta">
					<span class="roca-projects__slide-num"><?php echo esc_html( $slide_num ); ?></span>
					<?php if ( $sector ) : ?>
						<span class="roca-projects__slide-sector"><?php echo esc_html( $sector ); ?></span>
					<?php endif; ?>
					<h3 class="roca-projects__slide-title"><?php the_title(); ?></h3>
					<?php if ( $location ) : ?>
						<span class="roca-projects__slide-location"><?php echo esc_html( $location ); ?></span>
					<?php endif; ?>
				</div>
				<a href="<?php the_permalink(); ?>" class="roca-projects__slide-link">
					View Project
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<path d="M2 14L14 2M14 2H4M14 2V12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
			</div>

		</div><!-- /.roca-projects__slide -->
		<?php endwhile; wp_reset_postdata(); ?>

		<!-- Prev / Next arrows — flanking the frame -->
		<button class="roca-projects__arrow roca-projects__arrow--prev"
		        data-projects-prev
		        aria-label="Previous project">
			<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
				<path d="M14 4L8 11L14 18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</button>
		<button class="roca-projects__arrow roca-projects__arrow--next"
		        data-projects-next
		        aria-label="Next project">
			<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
				<path d="M8 4L14 11L8 18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</button>

	</div><!-- /.roca-projects__frame -->

	<!-- Progress bar + counter -->
	<div class="roca-projects__nav">
		<div class="roca-projects__progress">
			<div class="roca-projects__progress-track">
				<div class="roca-projects__progress-fill" data-projects-bar></div>
			</div>
			<span class="roca-projects__counter" data-projects-counter aria-live="polite">
				01 / <?php echo str_pad( $total, 2, '0', STR_PAD_LEFT ); ?>
			</span>
		</div>
		<div class="roca-projects__dots" data-projects-dots aria-label="Project navigation"></div>
	</div>

	<?php else : ?>
		<p class="roca-projects__empty">Projects coming soon.</p>
	<?php endif; ?>

</section>
