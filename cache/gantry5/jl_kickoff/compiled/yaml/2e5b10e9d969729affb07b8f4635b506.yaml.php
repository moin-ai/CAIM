<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:\\XAMPP\\htdocs\\CAIM2/templates/jl_kickoff/blueprints/styles/bottom.yaml',
    'modified' => 1686729425,
    'data' => [
        'name' => 'Bottom Styles',
        'description' => 'Bottom styles for the theme',
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
                ]
            ]
        ]
    ]
];
