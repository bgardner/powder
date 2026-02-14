(function () {
	'use strict';

	const root = document.documentElement;

	const els = document.querySelectorAll('.is-style-fadeinup');
	if (!els.length) return;

	if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

	if (!('IntersectionObserver' in window)) return;

	root.classList.add('has-motion');

	const io = new IntersectionObserver((entries) => {
		for (const entry of entries) {
			if (!entry.isIntersecting) continue;
			entry.target.classList.add('is-inview');
			io.unobserve(entry.target);
		}
	}, { threshold: 0.15 });

	els.forEach(el => io.observe(el));
})();
