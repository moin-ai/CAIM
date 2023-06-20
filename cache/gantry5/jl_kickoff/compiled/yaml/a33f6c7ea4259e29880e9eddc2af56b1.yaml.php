<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:\\XAMPP\\htdocs\\CAIM2/templates/jl_kickoff/particles/jlheadroom.yaml',
    'modified' => 1686729426,
    'data' => [
        'name' => 'JL Headroom',
        'description' => 'Headroom(.js) allows you to bring elements into view when appropriate, and give focus to your content the rest of the time.',
        'type' => 'atom',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'section' => [
                    'type' => 'input.text',
                    'label' => 'Section',
                    'description' => 'Define the ID or class of the section that you want to set as fixed.',
                    'placeholder' => '#g-navigation'
                ],
                'custombg' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Custom Background',
                    'default' => '#ffffff'
                ],
                'style' => [
                    'type' => 'select.selectize',
                    'label' => 'Style',
                    'description' => 'Select an animated headroom styling.',
                    'default' => 'slide',
                    'options' => [
                        'slide' => 'Slide',
                        'swing' => 'Swing',
                        'flip' => 'Flip',
                        'bounce' => 'Bounce'
                    ]
                ],
                'offset' => [
                    'type' => 'input.number',
                    'label' => 'Offset',
                    'description' => 'Vertical offset in px before element is first unpinned.',
                    'min' => 0,
                    'placeholder' => 0
                ],
                'tolerance' => [
                    'type' => 'input.number',
                    'label' => 'Tolerance',
                    'description' => 'Scroll tolerance in px before state changes.',
                    'min' => 0,
                    'placeholder' => 0
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Headroom Atom <strong>Version: 2.2.6</strong> by <a href="https://joomlead.com/" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/headroom-atom-documentation" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
