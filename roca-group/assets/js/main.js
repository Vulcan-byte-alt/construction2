/* ─── Roca Group — main.js ───────────────────────────────────────────────────
   Vanilla JS + GSAP. No jQuery.
   ─────────────────────────────────────────────────────────────────────────── */

(function () {
	'use strict';

	// ── Header: frosted glass + hide-on-scroll-down / show-on-scroll-up ────────
	const header = document.getElementById('site-header');

	if (header) {
		const hero       = document.querySelector('.roca-hero');
		let lastScrollY  = window.scrollY;

		const onScroll = () => {
			const currentY   = window.scrollY;
			const heroBottom = hero ? hero.offsetTop + hero.offsetHeight : window.innerHeight;

			// Dark bg + white logo only once hero has scrolled out from behind header
			header.classList.toggle('scrolled', currentY > heroBottom - header.offsetHeight);

			// Hide on scroll down past the hero; reveal on any upward scroll
			if (currentY > lastScrollY && currentY > heroBottom) {
				header.classList.add('is-hidden');
			} else if (currentY < lastScrollY) {
				header.classList.remove('is-hidden');
			}

			lastScrollY = currentY;
		};

		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	}

	// ── GSAP animations ───────────────────────────────────────────────────────
	if (typeof gsap !== 'undefined') {

		if (typeof ScrollTrigger !== 'undefined') {
			gsap.registerPlugin(ScrollTrigger);
		}

		// Hero: staggered fade-up on each [data-hero] element in DOM order
		const heroEls = document.querySelectorAll('[data-hero]');
		if (heroEls.length) {
			gsap.from(heroEls, {
				opacity: 0,
				y: 40,
				duration: 0.9,
				stagger: 0.15,
				ease: 'power3.out',
				delay: 0.25,
				clearProps: 'all',
			});
		}

		// Generic scroll-triggered fade-up for any [data-animate="fade-up"]
		if (typeof ScrollTrigger !== 'undefined') {
			gsap.utils.toArray('[data-animate="fade-up"]').forEach((el) => {
				gsap.from(el, {
					scrollTrigger: {
						trigger: el,
						start: 'top 85%',
						toggleActions: 'play none none none',
					},
					opacity: 0,
					y: 50,
					duration: 0.8,
					ease: 'power3.out',
				});
			});
		}

		// About: image — subtle scroll parallax scale
		if (typeof ScrollTrigger !== 'undefined') {
			const aboutImg = document.querySelector('[data-about-image] .roca-about__img');
			if (aboutImg) {
				gsap.fromTo(aboutImg,
					{ scale: 1.05 },
					{
						scale: 1,
						scrollTrigger: {
							trigger: '#about-editorial',
							start: 'top 80%',
							end: 'center 20%',
							scrub: 1.4,
						},
						ease: 'none',
					}
				);
			}
		}

	}

	// ── Projects: full-width slideshow ──────────────────────────────────────
	const projectsStage = document.querySelector('[data-projects-stage]');

	if (projectsStage) {
		const slides   = Array.from(projectsStage.querySelectorAll('[data-projects-slide]'));
		const dotsWrap = document.querySelector('[data-projects-dots]');
		const counter  = document.querySelector('[data-projects-counter]');
		const bar      = document.querySelector('[data-projects-bar]');
		const btnPrev  = projectsStage.querySelector('[data-projects-prev]');
		const btnNext  = projectsStage.querySelector('[data-projects-next]');
		const total    = slides.length;
		let   current  = 0;

		// Build dot nav
		if (dotsWrap) {
			slides.forEach((_, i) => {
				const dot = document.createElement('button');
				dot.className = 'roca-projects__dot' + (i === 0 ? ' is-active' : '');
				dot.setAttribute('aria-label', `Go to project ${i + 1}`);
				dot.addEventListener('click', () => goTo(i));
				dotsWrap.appendChild(dot);
			});
		}

		function goTo(index) {
			slides[current].classList.remove('is-active');
			slides[current].setAttribute('aria-hidden', 'true');
			current = (index + total) % total;
			slides[current].classList.add('is-active');
			slides[current].setAttribute('aria-hidden', 'false');
			syncNav();
		}

		function syncNav() {
			const dots = dotsWrap ? dotsWrap.querySelectorAll('.roca-projects__dot') : [];
			dots.forEach((d, i) => d.classList.toggle('is-active', i === current));
			if (counter) {
				counter.textContent =
					String(current + 1).padStart(2, '0') + ' / ' + String(total).padStart(2, '0');
			}
			if (bar) {
				bar.style.width = ((current + 1) / total * 100) + '%';
			}
			if (btnPrev) btnPrev.disabled = current === 0;
			if (btnNext) btnNext.disabled = current === total - 1;
		}

		if (btnPrev) btnPrev.addEventListener('click', () => { if (current > 0) goTo(current - 1); });
		if (btnNext) btnNext.addEventListener('click', () => { if (current < total - 1) goTo(current + 1); });

		// Keyboard arrow navigation when stage is focused
		projectsStage.addEventListener('keydown', (e) => {
			if (e.key === 'ArrowLeft' && current > 0)          goTo(current - 1);
			if (e.key === 'ArrowRight' && current < total - 1) goTo(current + 1);
		});

		syncNav();
	}

	// ── Testimonials slider ───────────────────────────────────────────────────
	const tStage = document.querySelector('[data-t-stage]');

	if (tStage) {
		const tSlides  = Array.from(tStage.querySelectorAll('[data-t-slide]'));
		const tCounter = document.querySelector('[data-t-counter]');
		const tPrev    = document.querySelector('[data-t-prev]');
		const tNext    = document.querySelector('[data-t-next]');
		const tTotal   = tSlides.length;
		let   tCurrent = 0;

		function tGoTo(index) {
			tSlides[tCurrent].classList.remove('is-active');
			tSlides[tCurrent].setAttribute('aria-hidden', 'true');
			tCurrent = (index + tTotal) % tTotal;
			tSlides[tCurrent].classList.add('is-active');
			tSlides[tCurrent].setAttribute('aria-hidden', 'false');
			tSyncNav();
		}

		function tSyncNav() {
			if (tCounter) {
				tCounter.textContent =
					String(tCurrent + 1).padStart(2, '0') + ' / ' + String(tTotal).padStart(2, '0');
			}
			if (tPrev) tPrev.disabled = tCurrent === 0;
			if (tNext) tNext.disabled = tCurrent === tTotal - 1;
		}

		if (tPrev) tPrev.addEventListener('click', () => { if (tCurrent > 0) tGoTo(tCurrent - 1); });
		if (tNext) tNext.addEventListener('click', () => { if (tCurrent < tTotal - 1) tGoTo(tCurrent + 1); });

		// Keyboard support
		tStage.addEventListener('keydown', (e) => {
			if (e.key === 'ArrowLeft'  && tCurrent > 0)          tGoTo(tCurrent - 1);
			if (e.key === 'ArrowRight' && tCurrent < tTotal - 1) tGoTo(tCurrent + 1);
		});

		tSyncNav();
	}

	// ── Sector bg images: lazy-load, AVIF + JPG via image-set() ─────────────
	const bgEls = document.querySelectorAll('[data-bg]');
	if (bgEls.length) {
		const bgObserver = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					const el       = entry.target;
					const avifSrc  = el.dataset.bg;
					const jpgSrc   = el.dataset.bgFallback;
					el.style.backgroundImage = jpgSrc
						? `image-set(url('${avifSrc}') type('image/avif'), url('${jpgSrc}') type('image/jpeg'))`
						: `url('${avifSrc}')`;
					bgObserver.unobserve(el);
				}
			});
		}, { rootMargin: '200px' });
		bgEls.forEach(el => bgObserver.observe(el));
	}

	// ── Stats: count-up animation ─────────────────────────────────────────────
	const counters = document.querySelectorAll('.stat-number');
	const observer = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
			if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
				entry.target.classList.add('counted');
				const target = parseInt(entry.target.dataset.target);
				const suffix = entry.target.dataset.suffix || '';
				let current = 0;
				const increment = target / 80;
				const timer = setInterval(() => {
					current += increment;
					if (current >= target) {
						current = target;
						clearInterval(timer);
					}
					entry.target.textContent = Math.floor(current) + suffix;
				}, 18);
			}
		});
	}, { threshold: 0.3 });
	counters.forEach(c => observer.observe(c));

})();
