// Flag JavaScript enabled.
document.documentElement.classList.add('js');

(function () {
	'use strict';

	// Exit unsupported browsers.
	if (!('IntersectionObserver' in window)) return;

	// Run after DOM ready.
	const onReady = (fn) => (
		document.readyState === 'loading'
			? document.addEventListener('DOMContentLoaded', fn)
			: fn()
	);

	onReady(() => {
		const elements = document.querySelectorAll('[data-motion]');
		if (!elements.length) return;

		// Create intersection observer.
		const observer = new IntersectionObserver((entries) => {
			for (const entry of entries) {
				if (!entry.isIntersecting) continue;

				const el = entry.target;
				const motion = el.getAttribute('data-motion') || 'fadeInUp';
				const delay = Math.max(0, (parseFloat(el.getAttribute('data-offset')) || 0) * 1000);
				const duration = Math.max(0, parseFloat(el.getAttribute('data-duration')) || 0.5);

				// Apply animation duration.
				el.style.animationDuration = `${duration}s`;

				// Trigger motion class.
				setTimeout(() => {
					el.classList.add(`motion-${motion}`);
				}, delay);

				observer.unobserve(el);
			}
		}, { threshold: 0.15 });

		elements.forEach((el) => {
			const distance = parseInt(el.getAttribute('data-distance') || 20, 10);

			// Hide before animation.
			el.style.opacity = '0';

			// Set motion distance.
			el.style.setProperty('--powder-motion-distance', `${distance}px`);

			// Observe element.
			observer.observe(el);
		});
	});

})();
