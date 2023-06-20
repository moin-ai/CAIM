<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:/XAMPP/htdocs/CAIM2/templates/jl_kickoff/blueprints/styles/font.yaml',
    'modified' => 1686729425,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Heading Font',
                    'default' => 'Heebo, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-menu' => [
                    'type' => 'input.fonts',
                    'label' => 'Menu Font',
                    'default' => 'Inter'
                ],
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'Inter, Tahoma, Geneva, Arial, sans-serif'
                ]
            ]
        ]
    ]
];
