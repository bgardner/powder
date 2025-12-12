(function () {
	'use strict';

	// Feature flag class.
	document.documentElement.classList.add('has-motion');

	let lastScrollY = 0; // Track scroll position.
	let ticking = false; // Throttle flag.
	const threshold = 40; // Scroll offset.

	function updateScrollState() {
		const currentY = window.scrollY || document.documentElement.scrollTop;

		if (currentY > threshold) {
			if (currentY > lastScrollY) {
				// Scrolling down.
				document.body.classList.add('scroll-down');
				document.body.classList.remove('scroll-up');
			} else {
				// Scrolling up.
				document.body.classList.add('scroll-up');
				document.body.classList.remove('scroll-down');
			}
		} else {
			// Near page top.
			document.body.classList.remove('scroll-up', 'scroll-down');
		}

		// Clamp scroll value.
		lastScrollY = currentY > 0 ? currentY : 0;
		ticking = false;
	}

	function onScroll() {
		if (!ticking) {
			window.requestAnimationFrame(updateScrollState);
			ticking = true;
		}
	}

	// Passive scroll listener.
	window.addEventListener('scroll', onScroll, { passive: true });
})();
