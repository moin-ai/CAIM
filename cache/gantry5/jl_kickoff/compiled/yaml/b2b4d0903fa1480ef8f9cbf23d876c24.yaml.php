<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:\\XAMPP\\htdocs\\CAIM2/templates/jl_kickoff/particles/jlnotification.yaml',
    'modified' => 1686729426,
    'data' => [
        'name' => 'JL Notification',
        'description' => 'Create toggleable notifications that fade out automatically.',
        'type' => 'particle',
        'icon' => 'fa-cog',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                'type' => [
                    'type' => 'select.select',
                    'label' => 'Type',
                    'description' => 'Choose between an attached bar or a notification.',
                    'default' => 'notification',
                    'options' => [
                        'notification' => 'Notification',
                        'bar' => 'Bar'
                    ]
                ],
                'message' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Message',
                    'description' => 'Customize your notification message.',
                    'default' => 'By using this website, you agree to the use of cookies as described in our Privacy Policy.'
                ],
                'button' => [
                    'type' => 'input.text',
                    'label' => 'Button',
                    'description' => 'Enter the text for the button.',
                    'placeholder' => 'Ok'
                ],
                'button_styles' => [
                    'type' => 'select.select',
                    'label' => 'Button Style',
                    'description' => 'Set the button style.',
                    'default' => 'icon',
                    'options' => [
                        'icon' => 'Close Icon',
                        'default' => 'Button Default',
                        'primary' => 'Button Primary',
                        'secondary' => 'Button Secondary',
                        'danger' => 'Button Danger',
                        'text' => 'Button Text'
                    ]
                ],
                'reject_button' => [
                    'type' => 'input.text',
                    'label' => 'Reject Button Text',
                    'description' => 'Enter the text for the button.',
                    'placeholder' => 'No, Thanks'
                ],
                'expires' => [
                    'type' => 'input.text',
                    'label' => 'Expires',
                    'description' => 'Appearance duration after click close button, default 365 days.',
                    'placeholder' => 365,
                    'default' => 365
                ],
                'notification_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Notification Type'
                ],
                'position' => [
                    'type' => 'select.select',
                    'label' => 'Position',
                    'description' => 'Select a different position for this notification.',
                    'default' => 'bottom-left',
                    'options' => [
                        'top-left' => 'Top Left',
                        'top-center' => 'Top Center',
                        'top-right' => 'Top Right',
                        'bottom-left' => 'Bottom Left',
                        'bottom-center' => 'Bottom Center',
                        'bottom-right' => 'Bottom Right'
                    ]
                ],
                'style' => [
                    'type' => 'select.select',
                    'label' => 'Style',
                    'description' => 'Adding a status to the message to indicate a primary, success, warning or a danger status.',
                    'default' => 'default',
                    'options' => [
                        'default' => 'Default',
                        'primary' => 'Primary',
                        'success' => 'Success',
                        'warning' => 'Warning',
                        'danger' => 'Danger'
                    ]
                ],
                'bar_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Bar Type'
                ],
                'bar_position' => [
                    'type' => 'select.select',
                    'label' => 'Position',
                    'description' => 'The bar at the top pushes the content down while the bar at the bottom is fixed above the content.',
                    'default' => 'bottom',
                    'options' => [
                        'top' => 'Top',
                        'bottom' => 'Bottom'
                    ]
                ],
                'bar_style' => [
                    'type' => 'select.select',
                    'label' => 'Style',
                    'description' => 'Select bar notification style.',
                    'default' => 'muted',
                    'options' => [
                        'default' => 'Default',
                        'muted' => 'Muted',
                        'primary' => 'Primary',
                        'secondary' => 'Secondary'
                    ]
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Notification <strong>Version: 2.2.6</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/jl-notification-gantry-5-particle/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
