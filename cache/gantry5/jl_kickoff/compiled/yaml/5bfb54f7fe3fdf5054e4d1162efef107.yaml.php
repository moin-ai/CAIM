<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:\\XAMPP\\htdocs\\CAIM2/templates/jl_kickoff/particles/jlcookieconsent.yaml',
    'modified' => 1686729426,
    'data' => [
        'name' => 'JL Cookie Consent',
        'description' => 'The Cookie Consent atom for Gantry5 lets you display a cookie (or other legal) notice on your Joomla website',
        'type' => 'atom',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                'message' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Content',
                    'description' => 'Enter the cookie consent message. The default text serves as illustration. Please adjust it according to the cookie laws of your country.',
                    'default' => 'This website uses cookies to ensure you get the best experience on our website.',
                    'placeholder' => 'This website uses cookies to ensure you get the best experience on our website.'
                ],
                'dismiss' => [
                    'type' => 'input.text',
                    'label' => 'Dismiss',
                    'description' => 'Customize the dismiss button text.',
                    'default' => 'Got it!'
                ],
                'readmore' => [
                    'type' => 'input.text',
                    'label' => 'Read more',
                    'description' => 'Customize the read more button text.',
                    'default' => 'More info'
                ],
                'policy' => [
                    'type' => 'input.text',
                    'label' => 'Link',
                    'description' => 'If you already have a cookie policy page, enter it here (Optional).',
                    'placeholder' => 'http://'
                ],
                'cookie_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Style'
                ],
                'position' => [
                    'type' => 'select.selectize',
                    'label' => 'Position',
                    'description' => 'Position is used to describe where on the screen your popup should display.',
                    'default' => 'bottom-left',
                    'options' => [
                        'default' => 'Banner Bottom',
                        'top' => 'Banner Top',
                        'top2' => 'Banner Top (Push Down)',
                        'bottom-left' => 'Floating Left',
                        'bottom-right' => 'Floating Right'
                    ]
                ],
                'layout' => [
                    'type' => 'select.selectize',
                    'label' => 'Layout',
                    'description' => 'Choose the theme for cookie consent.',
                    'default' => 'default',
                    'options' => [
                        'default' => 'Block',
                        'classic' => 'Classic',
                        'edgeless' => 'Edgeless',
                        'wire' => 'Wire'
                    ]
                ],
                'color.banner' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Color',
                    'description' => 'Customize the banner background color.'
                ],
                'color.bannertext' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Content Color',
                    'description' => 'Customize the banner text color.'
                ],
                'color.button' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Button Background',
                    'description' => 'Customize the button background color.'
                ],
                'color.buttontext' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Button Color',
                    'description' => 'Customize the button text color.'
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Cookie Consent <strong>Version: 2.2.6</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/cookie-consent-atom-documentation" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
