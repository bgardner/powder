(function () {
	'use strict';

	const root = document.documentElement;
	const body = document.body;

	if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
		return;
	}

	let lastY = window.scrollY;
	let ticking = false;

	const threshold = 40;
	const directionDelta = 5;

	function update() {
		const y = window.scrollY;

		if (Math.abs(y - lastY) < directionDelta) {
			lastY = y;
			ticking = false;
			return;
		}

		if (y > threshold) {
			if (y > lastY) {
				body.classList.add('scroll-down');
				body.classList.remove('scroll-up');
			} else if (y < lastY) {
				body.classList.add('scroll-up');
				body.classList.remove('scroll-down');
			}
		} else {
			body.classList.remove('scroll-up', 'scroll-down');
		}

		lastY = y;
		ticking = false;
	}

	function onScroll() {
		if (ticking) return;
		ticking = true;
		window.requestAnimationFrame(update);
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	root.classList.add('scroll-reveal');
	update();
})();
