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

	// Observe each styled Group block.
	document
		.querySelectorAll( '.wp-block-group.is-style-fadeinup' )
		.forEach( el => io.observe( el ) );
} );
