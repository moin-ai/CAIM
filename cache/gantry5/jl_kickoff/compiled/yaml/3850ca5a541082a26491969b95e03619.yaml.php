<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:\\XAMPP\\htdocs\\CAIM2/templates/jl_kickoff/blueprints/styles/navigation.yaml',
    'modified' => 1686729425,
    'data' => [
        'name' => 'Navigation Styles',
        'description' => 'Navigation styles for the theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => ''
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'default' => '#868585'
                ],
                'overlay' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Overlay',
                    'description' => 'Set the color of the page overlay when the certain menu modes are active.',
                    'default' => 'rgba(0, 0, 0, 0.4)'
                ]
            ]
        ]
    ]
];
