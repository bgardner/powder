document.documentElement.classList.add('js');

(function () {
	'use strict';

	if (!('IntersectionObserver' in window)) return;

	const onReady = (fn) => (
		document.readyState === 'loading'
			? document.addEventListener('DOMContentLoaded', fn)
			: fn()
	);

	onReady(() => {
		const elements = document.querySelectorAll('[data-motion]');
		if (!elements.length) return;

		const observer = new IntersectionObserver((entries) => {
			for (const entry of entries) {
				if (!entry.isIntersecting) continue;

				const el = entry.target;
				const motion = el.getAttribute('data-motion') || 'fadeInUp';
				const delay = Math.max(0, (parseFloat(el.getAttribute('data-offset')) || 0) * 1000);
				const duration = Math.max(0, parseFloat(el.getAttribute('data-duration')) || 0.5);

				el.style.animationDuration = `${duration}s`;

				setTimeout(() => {
					el.classList.add(`motion-${motion}`);
				}, delay);

				observer.unobserve(el);
			}
		}, { threshold: 0.15 });

		elements.forEach((el) => {
			const distance = parseInt(el.getAttribute('data-distance') || 20, 10);

			el.style.opacity = '0';
			el.style.setProperty('--powder-motion-distance', `${distance}px`);

			observer.observe(el);
		});
	});
})();
