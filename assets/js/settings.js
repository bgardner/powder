( function( wp ) {
	const { useState, createElement: el, createRoot, Fragment } = wp.element;
	const { Button, ToggleControl } = wp.components;
	const { __, sprintf } = wp.i18n;
	const apiFetch = wp.apiFetch;
	const settings = window.PowderSettings || {};

	if ( settings.nonce ) {
		apiFetch.use(
			apiFetch.createNonceMiddleware( settings.nonce )
		);
	}

	function App() {
		const [ disabled, setDisabled ] = useState( settings.disabledPatternCategories || [] );
		const [ saving, setSaving ] = useState( false );
		const [ message, setMessage ] = useState( '' );
		const [ error, setError ] = useState( false );
		const categories = settings.categories || {};
		const entries = Object.entries( categories );
		const enabledCount = entries.length - disabled.length;

		const toggleCategory = ( slug ) => {
			setMessage( '' );
			setError( false );

			setDisabled( ( current ) => {
				return current.includes( slug )
					? current.filter( ( item ) => item !== slug )
					: [ ...current, slug ];
			} );
		};

		const save = () => {
			if ( ! settings.restPath ) {
				setError( true );
				setMessage( __( 'Pattern settings could not be saved.', 'powder' ) );
				return;
			}

			setSaving( true );
			setMessage( '' );
			setError( false );

			apiFetch( {
				path: settings.restPath,
				method: 'POST',
				data: { disabledPatternCategories: disabled },
			} )
				.then( ( response ) => {
					setDisabled( response.disabledPatternCategories || [] );
					setMessage( __( 'Powder settings saved.', 'powder' ) );
				} )
				.catch( () => {
					setError( true );
					setMessage( __( 'Pattern settings could not be saved.', 'powder' ) );
				} )
				.finally( () => {
					setSaving( false );
				} );
		};

		const disableAll = () => {
			setMessage( '' );
			setError( false );
			setDisabled( entries.map( ( [ slug ] ) => slug ) );
		};

		const enableAll = () => {
			setMessage( '' );
			setError( false );
			setDisabled( [] );
		};

		return el(
			Fragment,
			null,
			el(
				'div',
				{ className: 'powder-settings-section-header' },
				el(
					'div',
					null,
					el( 'h2', null, __( 'Patterns', 'powder' ) ),
					el( 'p', null, __( 'Choose which patterns to display in the Block Inserter and Site Editor.', 'powder' ) )
				),
				el(
					'span',
					{ className: 'powder-settings-count' },
					sprintf(
						/* translators: 1: enabled count, 2: total count. */
						__( '%1$d / %2$d enabled', 'powder' ),
						enabledCount,
						entries.length
					)
				)
			),
			el(
				'div',
				{ className: 'powder-settings-table' },
				entries.length
					? el(
						'div',
						{ className: 'powder-settings-list' },
						entries.map( ( [ slug, category ] ) => {
							const enabled = ! disabled.includes( slug );

							return el(
								'div',
								{ className: 'powder-settings-row', key: slug },
								el(
									'div',
									{ className: 'powder-settings-content' },
									el( 'h3', null, category.label ),
									el( 'p', null, category.description )
								),
								el(
									'div',
									{ className: 'powder-settings-toggle' },
									el( ToggleControl, {
										checked: enabled,
										label: enabled ? __( 'Enabled', 'powder' ) : __( 'Disabled', 'powder' ),
										onChange: () => toggleCategory( slug ),
									} )
								)
							);
						} )
					)
					: el(
						'p',
						{ className: 'powder-settings-empty' },
						__( 'No pattern categories were found.', 'powder' )
					)
			),
			el(
				'div',
				{ className: 'powder-settings-actions' },
				el(
					Button,
					{
						variant: 'primary',
						isBusy: saving,
						disabled: saving || ! entries.length,
						onClick: save,
					},
					__( 'Save Changes', 'powder' )
				),
				el(
					Button,
					{
						variant: 'link',
						disabled: ! entries.length,
						onClick: enabledCount === entries.length ? disableAll : enableAll,
					},
					enabledCount === entries.length ? __( 'Disable All', 'powder' ) : __( 'Enable All', 'powder' )
				),
				message && el(
					'span',
					{ className: error ? 'powder-settings-message is-error' : 'powder-settings-message' },
					message
				)
			)
		);
	}

	const root = document.getElementById( 'powder-settings-app' );

	if ( root && createRoot ) {
		createRoot( root ).render(
			el( App )
		);
	}
} )( window.wp );