wp.domReady( () => {
	wp.blocks.registerBlockVariation(
		'core/group', {
			name: 'row-switcher',
			title: 'Row Switcher',
			category: 'design',
			scope: [ 'block', 'inserter', 'transform' ],
			keywords: [ 'row', 'columns', 'group' ],
			attributes: {
				layout: {
					type: 'flex'
				},
				className: 'is-style-row-switcher',
			},
		},
	);
	wp.blocks.registerBlockVariation(
		'core/group', {
			name: 'column-stack',
			title: 'Column Stack',
			category: 'design',
			scope: [ 'block', 'inserter', 'transform' ],
			keywords: [ 'row', 'columns', 'group' ],
			attributes: {
				layout: {
					type: 'flex'
				},
				className: 'is-style-column-stack',
			},
		},
	);
} );