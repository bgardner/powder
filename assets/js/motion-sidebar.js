(function (wp) {
	'use strict';

	if (
		!wp ||
		!wp.hooks ||
		!wp.compose ||
		!wp.element ||
		!wp.blockEditor ||
		!wp.components
	) {
		return;
	}

	const { addFilter } = wp.hooks;
	const { createHigherOrderComponent } = wp.compose;
	const { createElement: el, Fragment } = wp.element;
	const { InspectorControls } = wp.blockEditor;
	const { PanelBody, ToggleControl, RangeControl, SelectControl } = wp.components;

	const SUPPORTED_BLOCKS = [
		'core/group',
		'core/columns',
		'core/column',
		'core/image'
	];

	const EFFECTS = [
		{ label: 'Fade In', value: 'fadeIn', directional: false },
		{ label: 'Fade In Up', value: 'fadeInUp', directional: true }
	];

	const DEFAULTS = {
		powderMotion: false,
		powderMotionEffect: 'fadeIn',
		powderDelay: 0,
		powderMotionDistance: 20
	};

	const LIMITS = {
		delay: { min: 0, max: 0.6, step: 0.1 },
		distance: { min: 20, max: 60, step: 10 }
	};

	const clamp = (value, min, max) => Math.min(Math.max(value, min), max);

	const sanitizeNumber = (value, fallback, min, max) => {
		const parsed = typeof value === 'number' ? value : parseFloat(value);
		if (Number.isNaN(parsed)) {
			return fallback;
		}
		return clamp(parsed, min, max);
	};

	const isSupportedBlock = (name) => SUPPORTED_BLOCKS.includes(name);

	const getEffect = (value) => {
		const match = EFFECTS.find((effect) => effect.value === value);
		return match ? match.value : DEFAULTS.powderMotionEffect;
	};

	const isDirectionalEffect = (value) => {
		const match = EFFECTS.find((effect) => effect.value === value);
		return !!match?.directional;
	};

	function addMotionAttributes(settings, name) {
		if (!isSupportedBlock(name)) {
			return settings;
		}

		settings.attributes = {
			...settings.attributes,
			powderMotion: { type: 'boolean', default: DEFAULTS.powderMotion },
			powderMotionEffect: { type: 'string', default: DEFAULTS.powderMotionEffect },
			powderDelay: { type: 'number', default: DEFAULTS.powderDelay },
			powderMotionDistance: { type: 'number', default: DEFAULTS.powderMotionDistance }
		};

		return settings;
	}

	addFilter(
		'blocks.registerBlockType',
		'powder/motion/attributes',
		addMotionAttributes
	);

	const withMotionControls = createHigherOrderComponent((BlockEdit) => {
		return (props) => {
			if (!isSupportedBlock(props.name)) {
				return el(BlockEdit, props);
			}

			const { attributes, setAttributes } = props;

			const powderMotion = !!attributes.powderMotion;
			const powderMotionEffect = getEffect(attributes.powderMotionEffect);

			const powderDelay = sanitizeNumber(
				attributes.powderDelay,
				DEFAULTS.powderDelay,
				LIMITS.delay.min,
				LIMITS.delay.max
			);

			const powderMotionDistance = sanitizeNumber(
				attributes.powderMotionDistance,
				DEFAULTS.powderMotionDistance,
				LIMITS.distance.min,
				LIMITS.distance.max
			);

			const showDistance = isDirectionalEffect(powderMotionEffect);

			return el(
				Fragment,
				null,
				el(BlockEdit, props),
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: 'Motion', initialOpen: false },

						el(ToggleControl, {
							label: 'Enable motion',
							checked: powderMotion,
							onChange: (value) => {
								if (!value) {
									setAttributes({ ...DEFAULTS });
									return;
								}
								setAttributes({ powderMotion: true });
							}
						}),

						powderMotion && el(SelectControl, {
							label: 'Effect',
							value: powderMotionEffect,
							options: EFFECTS.map(({ label, value }) => ({ label, value })),
							onChange: (value) => {
								const nextEffect = getEffect(value);
								const nextAttributes = {
									powderMotionEffect: nextEffect
								};

								if (!isDirectionalEffect(nextEffect)) {
									nextAttributes.powderMotionDistance = DEFAULTS.powderMotionDistance;
								}

								setAttributes(nextAttributes);
							}
						}),

						powderMotion && showDistance && el(RangeControl, {
							label: 'Distance (px)',
							value: powderMotionDistance,
							onChange: (value) => setAttributes({
								powderMotionDistance: sanitizeNumber(
									value,
									DEFAULTS.powderMotionDistance,
									LIMITS.distance.min,
									LIMITS.distance.max
								)
							}),
							min: LIMITS.distance.min,
							max: LIMITS.distance.max,
							step: LIMITS.distance.step
						}),

						powderMotion && el(RangeControl, {
							label: 'Delay (seconds)',
							value: powderDelay,
							onChange: (value) => setAttributes({
								powderDelay: sanitizeNumber(
									value,
									DEFAULTS.powderDelay,
									LIMITS.delay.min,
									LIMITS.delay.max
								)
							}),
							min: LIMITS.delay.min,
							max: LIMITS.delay.max,
							step: LIMITS.delay.step
						})
					)
				)
			);
		};
	}, 'withMotionControls');

	addFilter(
		'editor.BlockEdit',
		'powder/motion/controls',
		withMotionControls
	);

	function applyExtraProps(extraProps, blockType, attributes) {
		if (!isSupportedBlock(blockType.name) || !attributes?.powderMotion) {
			return extraProps;
		}

		const effect = getEffect(attributes.powderMotionEffect);

		extraProps['data-motion'] = effect;
		extraProps['data-delay'] = attributes.powderDelay;

		if (isDirectionalEffect(effect)) {
			extraProps['data-distance'] = attributes.powderMotionDistance;
		}

		return extraProps;
	}

	addFilter(
		'blocks.getSaveContent.extraProps',
		'powder/motion/save-props',
		applyExtraProps
	);
})(window.wp || {});
