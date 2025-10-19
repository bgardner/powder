// Add a class to indicate JavaScript is enabled.
document.documentElement.classList.add('js');

(function () {
	'use strict';
	if (!('IntersectionObserver' in window)) return; // Skip if browser doesn't support IntersectionObserver.

	// Run function once DOM is fully ready.
	const onReady = (fn) => document.readyState === 'loading'
		? document.addEventListener('DOMContentLoaded', fn)
		: fn();

	onReady(() => {
		const els = document.querySelectorAll('[data-motion]');
		if (!els.length) return;

		// Create observer to trigger animations when elements enter viewport.
		const io = new IntersectionObserver((entries) => {
			for (const entry of entries) {
				if (!entry.isIntersecting) continue;

				const el = entry.target;
				const motion = el.getAttribute('data-motion') || 'fadeInUp';
				const delay = Math.max(0, (parseFloat(el.getAttribute('data-offset')) || 0) * 1000);
				const duration = Math.max(0, parseFloat(el.getAttribute('data-duration')) || 0.5);

				// Apply inline animation duration.
				el.style.animationDuration = `${duration}s`;

				// Apply motion class after optional delay.
				setTimeout(() => el.classList.add('motion-' + motion), delay);

				io.unobserve(el);
			}
		}, { threshold: 0.15 });

		// Prepare each element with initial state and CSS variables.
		els.forEach((el) => {
			const motion = el.getAttribute('data-motion') || 'fadeInUp';
			const distance = parseInt(el.getAttribute('data-distance') || 20, 10);

			// Hide element until animation begins.
			el.style.opacity = '0';

			// Set CSS variable for dynamic distance (used by keyframes).
			el.style.setProperty('--powder-motion-distance', `${distance}px`);

			// Observe element for intersection trigger.
			io.observe(el);
		});
	});
})();
