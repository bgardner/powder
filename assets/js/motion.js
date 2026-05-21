document.documentElement.classList.add('js');

(function () {
	'use strict';

	const EFFECTS = ['fadeIn', 'fadeInUp'];

	const DEFAULTS = {
		effect: 'fadeIn',
		delay: 0,
		distance: 20
	};

	const LIMITS = {
		delay: { min: 0, max: 0.6 },
		distance: { min: 20, max: 60 }
	};

	const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

	const onReady = (fn) => {
		if (document.readyState === 'loading') {
			document.addEventListener('DOMContentLoaded', fn);
			return;
		}
		fn();
	};

	const clamp = (value, min, max) => Math.min(Math.max(value, min), max);

	const parseNumber = (value, fallback) => {
		const parsed = parseFloat(value);
		return Number.isNaN(parsed) ? fallback : parsed;
	};

	const getEffect = (value) => (
		EFFECTS.includes(value) ? value : DEFAULTS.effect
	);

	const getDelay = (value) => (
		clamp(parseNumber(value, DEFAULTS.delay), LIMITS.delay.min, LIMITS.delay.max)
	);

	const getDistance = (value) => (
		clamp(parseNumber(value, DEFAULTS.distance), LIMITS.distance.min, LIMITS.distance.max)
	);

	const revealImmediately = (elements) => {
		elements.forEach((el) => {
			el.classList.add('motion-ready');
		});
	};

	onReady(() => {
		const elements = Array.from(document.querySelectorAll('[data-motion]'));

		if (!elements.length) {
			return;
		}

		if (prefersReducedMotion.matches) {
			revealImmediately(elements);
			return;
		}

		const observer = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) {
					return;
				}

				const el = entry.target;
				const effect = getEffect(el.getAttribute('data-motion'));
				const delay = getDelay(el.getAttribute('data-delay'));
				const distance = getDistance(el.getAttribute('data-distance'));

				el.style.setProperty('--powder-motion-delay', `${delay}s`);
				el.style.setProperty('--powder-motion-distance', `${distance}px`);

				el.classList.add('motion-ready', `motion-${effect}`);
				observer.unobserve(el);
			});
		}, {
			threshold: 0.15
		});

		elements.forEach((el) => {
			observer.observe(el);
		});
	});
})();
