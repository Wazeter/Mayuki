wp.domReady( () => {
	wp.blocks.registerBlockVariation(
		'core/group', {
			name: 'group-switcher',
			title: __( 'Column/Row Switcher' ),
			category: 'design',
			scope: [ 'block', 'inserter', 'transform' ],
			keywords: [ 'row', 'columns', 'group' ],
			attributes: {
				layout: {
					type: 'flex'
				},
				className: 'is-style-group-switcher',
			},
			isActive: ( blockAttributes ) =>
				blockAttributes.layout?.type === 'flex',
		},
	)
} );