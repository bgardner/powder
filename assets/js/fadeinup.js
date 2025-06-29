document.addEventListener( 'DOMContentLoaded', () => {
	// Add body class when JS is enabled.
	document.body.classList.add( 'js-enabled' );

	// Set up observer for fadeinup elements.
	const io = new IntersectionObserver( (entries, observer) => {
		entries.forEach( entry => {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'fadeinup--active' );
				observer.unobserve( entry.target );
			}
		} );
	}, {
		threshold: 0.1
	} );

	// Get all fadeinup elements.
	const fadeinupElements = document.querySelectorAll( '.wp-block-group.is-style-fadeinup' );

	// Check for elements in viewport.
	fadeinupElements.forEach( el => {
		const rect = el.getBoundingClientRect();
		const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
		
		if ( isVisible ) {
			// Add class for elements in viewport.
			el.classList.add( 'fadeinup--in-viewport' );
		} else {
			// Observe elements that are not visible.
			io.observe( el );
		}
	} );
} );