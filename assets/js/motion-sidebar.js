(function (wp) {
	'use strict';
	if (!wp || !wp.hooks || !wp.compose || !wp.element || !(wp.blockEditor || wp.editor) || !wp.components) return; // Exit if core WordPress modules are unavailable.

	// Destructure required WordPress utilities.
	const { addFilter } = wp.hooks;
	const { createHigherOrderComponent: hoc } = wp.compose;
	const { createElement: el, Fragment } = wp.element;
	const { InspectorControls } = wp.blockEditor || wp.editor;
	const { PanelBody, ToggleControl, RangeControl, SelectControl } = wp.components;

	// Supported block types for motion.
	const supportedBlocks = [ 'core/group', 'core/columns', 'core/column', 'core/image' ];

	// Add custom motion attributes to supported blocks.
	function addMotionAttributes(settings, name) {
		if (!supportedBlocks.includes(name)) return settings; // Apply only to supported blocks.

		settings.attributes = Object.assign({}, settings.attributes, {
			powderMotion: { type: 'boolean', default: false }, // Toggle motion on/off.
			powderMotionEffect: { type: 'string', default: 'fadeIn' }, // Default motion type.
			powderOffset: { type: 'string', default: '' }, // Optional delay (seconds).
			powderDuration: { type: 'number', default: 0.5 }, // Animation duration (seconds).
			powderMotionDistance: { type: 'string', default: '20' } // Distance (px) for directional motion.
		});
		return settings;
	}
	addFilter('blocks.registerBlockType', 'powder/motion/attributes', addMotionAttributes);

	// Create sidebar controls for motion settings.
	const withMotionControls = hoc(function (BlockEdit) {
		return function (props) {
			if (!supportedBlocks.includes(props.name)) return el(BlockEdit, props); // Limit to supported blocks.

			const { attributes, setAttributes, isSelected } = props;
			const {
				powderMotion,
				powderMotionEffect = 'fadeInUp',
				powderOffset,
				powderDuration,
				powderMotionDistance = '20'
			} = attributes;

			let offsetVal = Number(powderOffset || 0);
			if (Number.isNaN(offsetVal)) offsetVal = 0;

			let distanceVal = parseInt(powderMotionDistance, 10);
			if (Number.isNaN(distanceVal)) distanceVal = 20;

			return el(
				Fragment,
				null,
				el(BlockEdit, props),
				isSelected && el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: 'Motion', initialOpen: false },
						el(ToggleControl, {
							label: 'Enable motion',
							checked: !!powderMotion,
							onChange: (val) => {
								if (!val) {
									// Reset all motion-related attributes when toggled off.
									setAttributes({
										powderMotion: false,
										powderMotionEffect: 'fadeIn',
										powderOffset: '0',
										powderDuration: 0.5,
										powderMotionDistance: '20'
									});
								} else {
									setAttributes({ powderMotion: true });
								}
							}
						}),
						powderMotion && el(SelectControl, {
							label: 'Effect',
							value: powderMotionEffect,
							options: [
								{ label: 'Fade In', value: 'fadeIn' },
								{ label: 'Fade In Up', value: 'fadeInUp' },
								{ label: 'Fade In Down', value: 'fadeInDown' }
							],
							onChange: (val) => setAttributes({ powderMotionEffect: val })
						}),
						powderMotion && el(RangeControl, {
							label: 'Offset (seconds)',
							value: offsetVal,
							onChange: (val) => setAttributes({ powderOffset: String(val) }),
							min: 0,
							max: 0.5,
							step: 0.05
						}),
						powderMotion && el(RangeControl, {
							label: 'Duration (seconds)',
							value: powderDuration,
							onChange: (val) => setAttributes({ powderDuration: val }),
							min: 0,
							max: 1.0,
							step: 0.1
						}),
						powderMotion && (powderMotionEffect === 'fadeInUp' || powderMotionEffect === 'fadeInDown') && el(RangeControl, {
							label: 'Distance (px)',
							value: distanceVal,
							onChange: (val) => setAttributes({ powderMotionDistance: String(val) }),
							min: 20,
							max: 60,
							step: 10
						})
					)
				)
			);
		};
	}, 'withMotionControls');

	addFilter('editor.BlockEdit', 'powder/motion/controls', withMotionControls);

	// Add data attributes to block output when motion is active.
	function applyExtraProps(extraProps, blockType, attributes) {
		if (!supportedBlocks.includes(blockType.name) || !attributes?.powderMotion) return extraProps;

		extraProps['data-motion'] = attributes.powderMotionEffect || 'fadeInUp';
		if (attributes.powderOffset) extraProps['data-offset'] = attributes.powderOffset;
		if (attributes.powderDuration) extraProps['data-duration'] = attributes.powderDuration;
		if (attributes.powderMotionDistance) extraProps['data-distance'] = attributes.powderMotionDistance;

		return extraProps;
	}
	addFilter('blocks.getSaveContent.extraProps', 'powder/motion/save-props', applyExtraProps);

})(window.wp || {});
