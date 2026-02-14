(function () {
	'use strict';

	document.documentElement.classList.add('scroll-reveal');

	let lastScrollY = 0;
	let ticking = false;
	const threshold = 40;

	function updateScrollState() {
		const currentY = window.scrollY || document.documentElement.scrollTop;

		if (currentY > threshold) {
			if (currentY > lastScrollY) {
				document.body.classList.add('scroll-down');
				document.body.classList.remove('scroll-up');
			} else {
				document.body.classList.add('scroll-up');
				document.body.classList.remove('scroll-down');
			}
		} else {
			document.body.classList.remove('scroll-up', 'scroll-down');
		}

		lastScrollY = currentY > 0 ? currentY : 0;
		ticking = false;
	}

	function onScroll() {
		if (ticking) return;

		window.requestAnimationFrame(updateScrollState);
		ticking = true;
	}

	window.addEventListener('scroll', onScroll, { passive: true });
})();
