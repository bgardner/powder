(function () {
	// Store the last scroll position.
	let lastScrollTop = 0;
	
	// Flag to prevent excessive calls.
	let ticking = false;
	
	// Handle scroll direction and toggle classes.
	function handleScroll() {
		const st = window.scrollY || document.documentElement.scrollTop;
	
		// Only run logic after scroll threshold.
		if (st > 40) {
			// Check scroll direction.
			if (st > lastScrollTop) {
				// User is scrolling down.
				document.body.classList.add('scroll-down');
				document.body.classList.remove('scroll-up');
			} else {
				// User is scrolling up.
				document.body.classList.add('scroll-up');
				document.body.classList.remove('scroll-down');
			}
		} else {
			// Remove scroll direction classes near top.
			document.body.classList.remove('scroll-up', 'scroll-down');
		}
	
		// Update last scroll position, preventing negative values.
		lastScrollTop = st <= 0 ? 0 : st;
		ticking = false;
	}
	
	// Listen for scroll events with throttling.
	window.addEventListener('scroll', function () {
		if (!ticking) {
			window.requestAnimationFrame(handleScroll);
			ticking = true;
		}
	}, false);
})();
