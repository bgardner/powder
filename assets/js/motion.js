(() => {
	document.documentElement.classList.add('powder-motion');

	const els = document.querySelectorAll('.is-style-fadein, .is-style-fadeinup');
	if (!els.length || !('IntersectionObserver' in window)) {
		els.forEach(el => {
			el.style.opacity = '1';
			el.style.transform = 'none';
		});
		return;
	}

	const io = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
			if (!entry.isIntersecting) return;
			entry.target.classList.add('is-inview');
			io.unobserve(entry.target);
		});
	}, { threshold: 0.15 });

	els.forEach(el => io.observe(el));
})();
