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
		const els = document.querySelectorAll('[data-motion]'); // Select all elements with motion data attribute.
		if (!els.length) return; // Exit if no motion elements exist.

		// Create observer to trigger animations when elements enter viewport.
		const io = new IntersectionObserver((entries) => {
			for (const entry of entries) {
				if (!entry.isIntersecting) continue; // Ignore elements not visible yet.

				const el = entry.target;
				const motion = el.getAttribute('data-motion') || 'fadeInUp'; // Get motion type or default.
				const delay = Math.max(0, (parseFloat(el.getAttribute('data-offset')) || 0) * 1000); // Convert delay (sec → ms).

				// Apply motion class after optional delay.
				setTimeout(() => el.classList.add('motion-' + motion), delay);

				io.unobserve(el); // Stop observing once animation starts.
			}
		}, { threshold: 0.15 }); // Trigger when 15% of element is visible.

		// Prepare each element with initial opacity and position.
		els.forEach((el) => {
			const motion = el.getAttribute('data-motion') || 'fadeInUp';
			el.style.opacity = '0'; // Hide until animated.

			// Set starting transform for directional effects.
			if (motion === 'fadeInUp') el.style.transform = 'translateY(20px)';
			if (motion === 'fadeInDown') el.style.transform = 'translateY(-20px)';

			io.observe(el); // Begin observing each motion element.
		});
	});
})();
