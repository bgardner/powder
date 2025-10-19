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
			powderOffset: { type: 'string', default: '' } // Optional delay (seconds).
		});
		return settings;
	}
	addFilter('blocks.registerBlockType', 'powder/motion/attributes', addMotionAttributes);

	// Create sidebar controls for motion settings.
	const withMotionControls = hoc(function (BlockEdit) {
		return function (props) {
			if (!supportedBlocks.includes(props.name)) return el(BlockEdit, props); // Limit to supported blocks.
			const { attributes, setAttributes, isSelected } = props;
			const { powderMotion, powderMotionEffect = 'fadeInUp' } = attributes;
			let powderOffset = Number(attributes.powderOffset || 0);
			if (Number.isNaN(powderOffset)) powderOffset = 0; // Sanitize invalid values.

			return el(
				Fragment,
				null,
				el(BlockEdit, props), // Render default block editor UI.
				isSelected && el( // Display panel only when block is selected.
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: 'Motion', initialOpen: false },
						el(ToggleControl, {
							label: 'Enable motion', // Main on/off toggle.
							checked: !!powderMotion,
							onChange: (val) => setAttributes({ powderMotion: !!val })
						}),
						powderMotion && el(SelectControl, {
							label: 'Effect', // Dropdown for motion type.
							value: powderMotionEffect,
							options: [
								{ label: 'Fade In', value: 'fadeIn' },
								{ label: 'Fade In Up', value: 'fadeInUp' },
								{ label: 'Fade In Down', value: 'fadeInDown' }
							],
							onChange: (val) => setAttributes({ powderMotionEffect: val })
						}),
						powderMotion && el(RangeControl, {
							label: 'Offset (seconds)', // Slider for animation delay.
							value: powderOffset,
							onChange: (val) => setAttributes({ powderOffset: String(val) }),
							min: 0,
							max: 0.5,
							step: 0.05
						})
					)
				)
			);
		};
	}, 'withMotionControls');

	addFilter('editor.BlockEdit', 'powder/motion/controls', withMotionControls);

	// Add data attributes to block output when motion is active.
	function applyExtraProps(extraProps, blockType, attributes) {
		if (!supportedBlocks.includes(blockType.name) || !attributes?.powderMotion) return extraProps; // Skip unrelated blocks.

		extraProps['data-motion'] = attributes.powderMotionEffect || 'fadeInUp'; // Assign motion type.
		if (attributes.powderOffset) extraProps['data-offset'] = attributes.powderOffset; // Assign delay if set.

		return extraProps;
	}
	addFilter('blocks.getSaveContent.extraProps', 'powder/motion/save-props', applyExtraProps);
})(window.wp || {}); // Run safely within WordPress environment.
