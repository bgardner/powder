// Add 'js-enabled' class to <body> when JavaScript is detected.
document.addEventListener('DOMContentLoaded', () => {
	document.body.classList.add('js-enabled');
});

// Cache header element to reduce DOM queries.
const powderHeader = document.querySelector(".site-header");

// Store last scroll position.
let powderLastScrollTop = 0;

// Handle scroll events.
function handleScroll() {
	if (powderHeader) { 
		const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

		// Toggle header visibility based on scroll direction.
		powderHeader.style.top = scrollTop > powderLastScrollTop ? "-100%" : "0";

		// Update last scroll position.
		powderLastScrollTop = scrollTop;
	}
}

// Throttle scroll event for performance.
let isThrottled = false;
const powderThrottleDuration = 100; // Throttle duration in milliseconds.

window.addEventListener("scroll", () => {
	if (!isThrottled) {
		handleScroll();
		isThrottled = true;

		// Un-throttle after duration.
		setTimeout(() => {
			isThrottled = false;
		}, powderThrottleDuration);
	}
});
