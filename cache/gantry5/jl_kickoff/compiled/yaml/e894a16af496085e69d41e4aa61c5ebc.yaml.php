<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:/XAMPP/htdocs/CAIM2/templates/jl_kickoff/particles/jlfooterinfo.yaml',
    'modified' => 1686729426,
    'data' => [
        'name' => 'JL Footer Info',
        'description' => 'Display a horizontal contact info navigation.',
        'type' => 'particle',
        'icon' => 'fa-list',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_content' => [
                            'label' => 'Content',
                            'fields' => [
                                'image' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'Image Logo',
                                    'description' => 'Select desired logo image.'
                                ],
                                'image_alt' => [
                                    'type' => 'input.text',
                                    'label' => 'Image ALT',
                                    'description' => 'Input logo description text.',
                                    'placeholder' => 'Image ALT'
                                ],
                                'url' => [
                                    'type' => 'input.text',
                                    'label' => 'Url',
                                    'description' => 'Url for the image. Leave empty to go to home page.',
                                    'placeholder' => 'http://'
                                ],
                                'target' => [
                                    'type' => 'select.select',
                                    'label' => 'Target',
                                    'description' => 'Target browser window when logo is clicked.',
                                    'placeholder' => 'Select...',
                                    'default' => '_self',
                                    'options' => [
                                        '_self' => 'Same Frame (default)',
                                        '_parent' => 'Parent Frame',
                                        '_blank' => 'New Window or Tab'
                                    ]
                                ],
                                'content' => [
                                    'overridable' => false,
                                    'type' => 'textarea.textarea',
                                    'label' => 'Content',
                                    'description' => 'Customize the content.',
                                    'placeholder' => 'Enter content'
                                ],
                                'html' => [
                                    'type' => 'textarea.textarea',
                                    'label' => 'Custom HTML',
                                    'description' => 'Enter custom HTML into here.',
                                    'overridable' => false
                                ],
                                'twig' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Process Twig',
                                    'description' => 'Enable Twig template processing in the content. Twig will be processed before shortcodes.',
                                    'default' => '0'
                                ],
                                'filter' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Process shortcodes',
                                    'description' => 'Enable shortcode processing / filtering in the content.',
                                    'default' => '0'
                                ],
                                'module_id' => [
                                    'type' => 'gantry.module',
                                    'label' => 'Module Id',
                                    'class' => 'g-urltemplate input-small',
                                    'picker_label' => 'Pick a Module',
                                    'description' => 'Enter module Id.',
                                    'pattern' => '\\d+',
                                    'overridable' => false
                                ],
                                'chrome' => [
                                    'type' => 'input.text',
                                    'label' => 'Chrome',
                                    'description' => 'Module chrome.',
                                    'placeholder' => 'gantry'
                                ],
                                'items' => [
                                    'overrideable' => false,
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Social Links',
                                    'description' => 'Create each item to appear in the content row.',
                                    'value' => 'name',
                                    'ajax' => true,
                                    'fields' => [
                                        '.icon' => [
                                            'type' => 'input.icon',
                                            'label' => 'Icon',
                                            'default' => 'fab fa-facebook-f'
                                        ],
                                        '.text' => [
                                            'type' => 'input.text',
                                            'label' => 'Text'
                                        ],
                                        '.title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title'
                                        ],
                                        '.link' => [
                                            'type' => 'input.text',
                                            'label' => 'Link',
                                            'description' => 'Specify the link. <br/>Scroll smoothly added automatically to internal link that contains a URL fragment to add the smooth scrolling behavior.',
                                            'placeholder' => 'http://'
                                        ]
                                    ]
                                ],
                                'image_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Logo Settings'
                                ],
                                'image_loading' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Load image eagerly',
                                    'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
                                    'default' => false
                                ],
                                'image_width' => [
                                    'type' => 'input.number',
                                    'label' => 'Width',
                                    'description' => 'Set the width of the image.',
                                    'min' => 0,
                                    'placeholder' => 'auto'
                                ],
                                'image_height' => [
                                    'type' => 'input.number',
                                    'label' => 'Height',
                                    'description' => 'Set the height of the image.',
                                    'min' => 0,
                                    'placeholder' => 'auto'
                                ],
                                'social_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Style Settings'
                                ],
                                'social_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Social Style',
                                    'description' => 'Select the social style.',
                                    'default' => 'button',
                                    'options' => [
                                        '' => 'None',
                                        'button' => 'Button',
                                        'link' => 'Link',
                                        'muted' => 'Link Muted',
                                        'text' => 'Link Text',
                                        'reset' => 'Link Reset'
                                    ]
                                ],
                                'social_gutter' => [
                                    'type' => 'select.select',
                                    'label' => 'Social Gutter',
                                    'description' => 'Set the grid gutter width.',
                                    'default' => 'small',
                                    'options' => [
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        '' => 'Default',
                                        'large' => 'Large'
                                    ]
                                ],
                                'social_margin_top' => [
                                    'type' => 'select.select',
                                    'label' => 'Social Margin Top',
                                    'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'remove' => 'None'
                                    ]
                                ],
                                'social_target' => [
                                    'type' => 'select.select',
                                    'label' => 'Social Target',
                                    'description' => 'Target browser window when item is clicked.',
                                    'placeholder' => 'Select...',
                                    'default' => '_self',
                                    'options' => [
                                        '_self' => 'Self',
                                        '_blank' => 'New Window'
                                    ]
                                ],
                                'display' => [
                                    'type' => 'input.radios',
                                    'label' => 'Social Display',
                                    'description' => 'How to display the Social Icons',
                                    'default' => 'icons_only',
                                    'options' => [
                                        'icons_only' => 'Icons Only',
                                        'text_only' => 'Text Only',
                                        'both' => 'Both'
                                    ]
                                ],
                                'content_margin_top' => [
                                    'type' => 'select.select',
                                    'label' => 'Content Margin Top',
                                    'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'remove' => 'None'
                                    ]
                                ],
                                'class' => [
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Classes',
                                    'description' => 'CSS class name for the particle.'
                                ]
                            ]
                        ],
                        '_tab_general' => [
                            'label' => 'General',
                            'overridable' => false,
                            'fields' => [
                                'particle_title_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Particle Title Style'
                                ],
                                'particle_title' => [
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Add an optional particle title.',
                                    'placeholder' => 'Enter particle title'
                                ],
                                'particle_title_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
                                    'default' => 'h3',
                                    'options' => [
                                        'default' => 'None',
                                        'text-meta' => 'Text Meta',
                                        'text-lead' => 'Text Lead',
                                        'text-small' => 'Text Small',
                                        'text-large' => 'Text Large',
                                        'heading-2xlarge' => 'Heading 2X-Large',
                                        'heading-xlarge' => 'Heading X-Large',
                                        'heading-large' => 'Heading Large',
                                        'heading-medium' => 'Heading Medium',
                                        'heading-small' => 'Heading Small',
                                        'h1' => 'Heading H1',
                                        'h2' => 'Heading H2',
                                        'h3' => 'Heading H3',
                                        'h4' => 'Heading H4',
                                        'h5' => 'Heading H5',
                                        'h6' => 'Heading H6'
                                    ]
                                ],
                                'particle_title_decoration' => [
                                    'type' => 'select.select',
                                    'label' => 'Decoration',
                                    'description' => 'Decorate the headline with a divider, bullet or a line that is vertically centered to the heading.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'divider' => 'Divider',
                                        'bullet' => 'Bullet',
                                        'line' => 'Line'
                                    ]
                                ],
                                'particle_title_align' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment',
                                    'description' => 'Center, left and right alignment for Particle title.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Inherit',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'particle_predefined_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Predefined Color',
                                    'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'None',
                                        'muted' => 'Muted',
                                        'emphasis' => 'Emphasis',
                                        'primary' => 'Primary',
                                        'secondary' => 'Secondary',
                                        'success' => 'Success',
                                        'warning' => 'Warning',
                                        'danger' => 'Danger',
                                        'background' => 'Background'
                                    ]
                                ],
                                'particle_title_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Custom Color',
                                    'description' => 'Customize the title color instead using predefined color mode. Set the Predefined color to None before using this color customization mode.'
                                ],
                                'particle_title_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'description' => 'Customize the particle title font size.',
                                    'min' => 0
                                ],
                                'particle_title_text_transform' => [
                                    'type' => 'select.select',
                                    'label' => 'Transform',
                                    'description' => 'The following options will transform text into uppercased, capitalized or lowercased characters.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'uppercase' => 'UPPERCASE',
                                        'capitalize' => 'Capitalize',
                                        'lowercase' => 'lowercase'
                                    ]
                                ],
                                'particle_title_font_weight' => [
                                    'type' => 'select.select',
                                    'label' => 'Font weight',
                                    'description' => 'Add one of the following classes to modify the font weight of your text.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'light' => 'Light',
                                        'normal' => 'Normal',
                                        'bold' => 'Bold',
                                        'lighter' => 'Lighter',
                                        'bolder' => 'Bolder'
                                    ]
                                ],
                                'particle_title_element' => [
                                    'type' => 'select.select',
                                    'label' => 'HTML Element',
                                    'description' => 'Choose one of the elements to fit your semantic structure.',
                                    'default' => 'h3',
                                    'options' => [
                                        'h1' => 'h1',
                                        'h2' => 'h2',
                                        'h3' => 'h3',
                                        'h4' => 'h4',
                                        'h5' => 'h5',
                                        'h6' => 'h6',
                                        'div' => 'div'
                                    ]
                                ],
                                'general_content_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'General Particle Settings'
                                ],
                                'align' => [
                                    'type' => 'select.select',
                                    'label' => 'Text Alignment',
                                    'description' => 'Center, left and right alignment may depend on a breakpoint and require a fallback.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment Breakpoint',
                                    'description' => 'Define the device width from which the alignment will apply.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'fallback' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment Fallback',
                                    'description' => 'Define an alignment fallback for device widths below the breakpoint.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'g_maxwidth' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width',
                                    'description' => 'Set the maximum content width.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        '2xlarge' => '2X-Large'
                                    ]
                                ],
                                'g_maxwidth_alignment' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width Alignment',
                                    'description' => 'Define the alignment in case the container exceeds the element\'s max-width.',
                                    'default' => 'left',
                                    'options' => [
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right'
                                    ]
                                ],
                                'g_maxwidth_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width Breakpoint',
                                    'description' => 'Define the device width from which the element\'s max-width will apply.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'margin' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin',
                                    'description' => 'Set the vertical margin.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Keep existing',
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'remove-vertical' => 'None'
                                    ]
                                ],
                                'visibility' => [
                                    'type' => 'select.select',
                                    'label' => 'Visibility',
                                    'description' => 'Display the element only on this device width and larger.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Always',
                                        's' => 'Visible Small (Phone Landscape)',
                                        'm' => 'Visible Medium (Tablet Landscape)',
                                        'l' => 'Visible Large (Desktop)',
                                        'xl' => 'Visible X-Large (Large Screens)',
                                        'hidden-s' => 'Hidden Small (Phone Landscape)',
                                        'hidden-m' => 'Hidden Medium (Tablet Landscape)',
                                        'hidden-l' => 'Hidden Large (Desktop)',
                                        'hidden-xl' => 'Hidden X-Large (Large Screens)'
                                    ]
                                ],
                                'general_animation_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Animation Settings'
                                ],
                                'animation' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation',
                                    'description' => 'Apply an animation to particles once they enter the viewport. This will animate all particles inside the section.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'fade' => 'Fade',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down',
                                        'slide-top-small' => 'Slide Top Small',
                                        'slide-bottom-small' => 'Slide Bottom Small',
                                        'slide-left-small' => 'Slide Left Small',
                                        'slide-right-small' => 'Slide Right Small',
                                        'slide-top-medium' => 'Slide Top Medium',
                                        'slide-bottom-medium' => 'Slide Bottom Medium',
                                        'slide-left-medium' => 'Slide Left Medium',
                                        'slide-right-medium' => 'Slide Right Medium',
                                        'slide-top' => 'Slide Top 100%',
                                        'slide-bottom' => 'Slide Bottom 100%',
                                        'slide-left' => 'Slide Left 100%',
                                        'slide-right' => 'Slide Right 100%'
                                    ]
                                ],
                                'animation_delay' => [
                                    'type' => 'input.number',
                                    'label' => 'Animation Delay',
                                    'description' => 'Set the delay animations for particle. Delay time in ms.',
                                    'min' => 0,
                                    'placeholder' => 200
                                ],
                                'animation_repeat' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation Repeat',
                                    'description' => 'Repeat an animation to particle once it enter the viewport.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Footer Info <strong>Version: 2.2.6</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/footer-info-particle/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
