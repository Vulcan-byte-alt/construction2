<?php
/**
 * Template Part: Testimonials — white section, multi-slide, client photos
 */

$testimonials = [
	[
		'quote'   => 'Roca Group delivered our new headquarters on time and under budget. Their on-site accountability and transparency at every stage was unlike anything we had experienced before.',
		'name'    => 'James Hartley',
		'role'    => 'CEO',
		'company' => 'Hartley Capital Group',
		'photo'   => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?fit=crop&w=160&h=160&q=80',
	],
	[
		'quote'   => 'We\'ve partnered with many contractors over the years. None have brought the level of precision and genuine craft that Roca Group delivers on every single project.',
		'name'    => 'Sarah Mitchell',
		'role'    => 'Project Director',
		'company' => 'Meridian Property Group',
		'photo'   => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?fit=crop&w=160&h=160&q=80',
	],
	[
		'quote'   => 'From first brief to final handover, the Roca Group team were proactive, honest, and completely invested in our vision. The result exceeded every expectation we had set.',
		'name'    => 'David Chen',
		'role'    => 'Managing Director',
		'company' => 'Apex Developments',
		'photo'   => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?fit=crop&w=160&h=160&q=80',
	],
	[
		'quote'   => 'Outstanding workmanship on a highly complex brief. Roca Group handled every challenge with confidence and delivered a facility we\'re proud to put our name on.',
		'name'    => 'Rebecca Torres',
		'role'    => 'Operations Manager',
		'company' => 'Torres Logistics',
		'photo'   => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?fit=crop&w=160&h=160&q=80',
	],
];

$total = count( $testimonials );
?>

<section id="testimonials" class="roca-testimonials" aria-label="Client testimonials">

	<div class="roca-testimonials__inner">

		<!-- Left: heading + nav -->
		<div class="roca-testimonials__left" data-animate="fade-up">

			<span class="roca-testimonials__eyebrow">Client Testimonials</span>
			<h2 class="roca-testimonials__heading">
				Trusted by those who<br><em>demand the best.</em>
			</h2>

			<p class="roca-testimonials__sub">
				Relationships built on trust, results built on precision.
			</p>

			<nav class="roca-testimonials__nav" aria-label="Testimonial navigation">
				<button class="roca-testimonials__arrow roca-testimonials__arrow--prev"
				        data-t-prev aria-label="Previous testimonial">
					<svg width="16" height="16" viewBox="0 0 18 18" fill="none" aria-hidden="true">
						<path d="M11 3L5 9L11 15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</button>

				<span class="roca-testimonials__counter" data-t-counter aria-live="polite">
					01 / <?php echo str_pad( $total, 2, '0', STR_PAD_LEFT ); ?>
				</span>

				<button class="roca-testimonials__arrow roca-testimonials__arrow--next"
				        data-t-next aria-label="Next testimonial">
					<svg width="16" height="16" viewBox="0 0 18 18" fill="none" aria-hidden="true">
						<path d="M7 3L13 9L7 15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</button>
			</nav>

		</div>

		<!-- Right: quote cards -->
		<div class="roca-testimonials__stage" data-t-stage>
			<div class="roca-testimonials__slides">
				<?php foreach ( $testimonials as $i => $t ) : ?>
				<div class="roca-testimonials__slide<?php echo $i === 0 ? ' is-active' : ''; ?>"
				     data-t-slide
				     aria-hidden="<?php echo $i === 0 ? 'false' : 'true'; ?>">

					<div class="roca-testimonials__card">

						<!-- Decorative opening quote -->
						<span class="roca-testimonials__deco" aria-hidden="true">&ldquo;</span>

						<blockquote class="roca-testimonials__quote">
							<?php echo esc_html( $t['quote'] ); ?>
						</blockquote>

						<footer class="roca-testimonials__author">
							<img
								class="roca-testimonials__photo"
								src="<?php echo esc_url( $t['photo'] ); ?>"
								alt="<?php echo esc_attr( $t['name'] ); ?>"
								width="56" height="56"
								loading="<?php echo $i === 0 ? 'eager' : 'lazy'; ?>"
							>
							<div class="roca-testimonials__meta">
								<cite class="roca-testimonials__name"><?php echo esc_html( $t['name'] ); ?></cite>
								<span class="roca-testimonials__role">
									<?php echo esc_html( $t['role'] . ', ' . $t['company'] ); ?>
								</span>
							</div>
						</footer>

					</div>

				</div>
				<?php endforeach; ?>
			</div>
		</div>

	</div>

</section><!-- /#testimonials -->


<!-- ── Certifications strip — stays dark ── -->
<section class="roca-certs" aria-label="Industry accreditations">
	<div class="roca-certs__inner">

		<span class="roca-certs__eyebrow">Industry Accreditations</span>

		<ul class="roca-certs__list" role="list">
			<li class="roca-cert-item">
				<img
					class="roca-cert-item__logo"
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/certs/iso-9001.png' ); ?>"
					alt="ISO 9001:2015 Certified"
					loading="lazy"
				>
				<span class="roca-cert-item__sub">Quality Management</span>
			</li>
			<li class="roca-cert-item">
				<img
					class="roca-cert-item__logo"
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/certs/master-builders.png' ); ?>"
					alt="Master Builders Association Member"
					loading="lazy"
				>
				<span class="roca-cert-item__sub">Association Member</span>
			</li>
			<li class="roca-cert-item">
				<img
					class="roca-cert-item__logo"
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/certs/hia-member.png' ); ?>"
					alt="HIA Member — Housing Industry Association"
					loading="lazy"
				>
				<span class="roca-cert-item__sub">Housing Industry Association</span>
			</li>
			<li class="roca-cert-item">
				<img
					class="roca-cert-item__logo"
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/certs/safework.png' ); ?>"
					alt="Safe Work Accredited Contractor"
					loading="lazy"
				>
				<span class="roca-cert-item__sub">Accredited Contractor</span>
			</li>
		</ul>

	</div>
</section>
