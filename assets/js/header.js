(function () {
	'use strict';

	// Flag motion support.
	document.documentElement.classList.add('has-motion');

	let lastScrollY = 0; // Track last scroll.
	let ticking = false; // Prevent frame spam.

	const threshold = 40; // Define scroll offset.

	function updateScrollState() {
		const currentY = window.scrollY || document.documentElement.scrollTop;

		if (currentY > threshold) {
			if (currentY > lastScrollY) {
				// Apply scroll-down state.
				document.body.classList.add('scroll-down');
				document.body.classList.remove('scroll-up');
			} else {
				// Apply scroll-up state.
				document.body.classList.add('scroll-up');
				document.body.classList.remove('scroll-down');
			}
		} else {
			// Reset near top.
			document.body.classList.remove('scroll-up', 'scroll-down');
		}

		// Clamp scroll value.
		lastScrollY = currentY > 0 ? currentY : 0;
		ticking = false;
	}

	function onScroll() {
		if (ticking) return;

		window.requestAnimationFrame(updateScrollState);
		ticking = true;
	}

	// Attach passive listener.
	window.addEventListener('scroll', onScroll, { passive: true });

})();
