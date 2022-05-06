//register a block variation
wp.blocks.registerBlockVariation(
    'core/buttons', {
        name: 'wide-button',
        title: 'Wide Buttons',
        attributes: {
            className: 'is-wide'
        },
    }, {
        name: 'full-button',
        title: 'Full Buttons',
        attributes: {
            className: 'is-full'
        },
    }
);