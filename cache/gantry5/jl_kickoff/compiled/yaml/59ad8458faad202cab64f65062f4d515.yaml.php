<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:/XAMPP/htdocs/CAIM2/templates/jl_kickoff/particles/jlaccordion.yaml',
    'modified' => 1686729426,
    'data' => [
        'name' => 'JL Accordion',
        'description' => 'Create a list of items that can be shown individually by clicking an item\'s header.',
        'type' => 'particle',
        'icon' => 'fa-bars',
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
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_content' => [
                            'label' => 'Content',
                            'fields' => [
                                'accordion' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Items',
                                    'overridable' => false,
                                    'description' => 'Create each item to appear in the content row.',
                                    'value' => 'name',
                                    'ajax' => true,
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title',
                                            'description' => 'A text field used for title.'
                                        ],
                                        '.content' => [
                                            'type' => 'textarea.textarea',
                                            'label' => 'Content',
                                            'description' => 'A text field for the main text blocks.'
                                        ],
                                        '.image' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Image',
                                            'description' => 'An image field with an image picker.',
                                            'placeholder' => 'Pick an image'
                                        ],
                                        '.image_alt' => [
                                            'type' => 'input.text',
                                            'label' => 'Image ALT',
                                            'description' => 'Enter the image\'s alt attribute.',
                                            'placeholder' => 'Image Alt'
                                        ],
                                        '.buttonlink' => [
                                            'type' => 'input.text',
                                            'label' => 'Link',
                                            'description' => 'Specify the link for button.',
                                            'placeholder' => 'http://'
                                        ],
                                        '.item_class' => [
                                            'type' => 'input.selectize',
                                            'label' => 'CSS Classes',
                                            'description' => 'Specify the CSS class name for item.'
                                        ]
                                    ]
                                ],
                                'behavior_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Behavior'
                                ],
                                'icon_type' => [
                                    'type' => 'select.select',
                                    'label' => 'Icon Type',
                                    'default' => '',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        '' => 'Default',
                                        'nav' => 'Nav'
                                    ]
                                ],
                                'multiple' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Multiple open items',
                                    'default' => false
                                ],
                                'closed' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'All items to be closed',
                                    'default' => true
                                ],
                                'icon_alignment' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Left icon alignment',
                                    'default' => false
                                ],
                                'dividers' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Dividers',
                                    'default' => false
                                ],
                                'icon_inverse' => [
                                    'type' => 'select.select',
                                    'label' => 'Inverse Color',
                                    'description' => 'Set light or dark color mode for nav icon, buttons and controls.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => '- Use Default -',
                                        'light' => 'Light',
                                        'dark' => 'Dark'
                                    ]
                                ],
                                'class' => [
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Classes',
                                    'description' => 'CSS class name for the particle.'
                                ]
                            ]
                        ],
                        '_tab_style' => [
                            'label' => 'Style',
                            'overridable' => false,
                            'fields' => [
                                'acc_title_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Title Settings'
                                ],
                                'title_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Color',
                                    'description' => 'Customize the title color.'
                                ],
                                'title_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'min' => 0,
                                    'description' => 'Customize the title text font size'
                                ],
                                'title_text_transform' => [
                                    'type' => 'select.select',
                                    'label' => 'Text Transform',
                                    'description' => 'The following options will transform text into uppercased, capitalized or lowercased characters.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'uppercase' => 'UPPERCASE',
                                        'capitalize' => 'Capitalize',
                                        'lowercase' => 'lowercase'
                                    ]
                                ],
                                'title_font_weight' => [
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
                                'title_background_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'description' => 'Customize the title background color.'
                                ],
                                'title_padding' => [
                                    'type' => 'input.number',
                                    'label' => 'Padding',
                                    'description' => 'Customize the padding for title if background color is selected.',
                                    'min' => 0,
                                    'placeholder' => 15
                                ],
                                'acc_content_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Content Settings'
                                ],
                                'content_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Select a predefined meta text style, including color, size and font-family.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'None',
                                        'lead' => 'Lead',
                                        'meta' => 'Meta'
                                    ]
                                ],
                                'content_dropcap' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Enable drop cap',
                                    'description' => 'Display the first letter of the paragraph as a large initial.',
                                    'default' => false
                                ],
                                'content_column' => [
                                    'type' => 'select.select',
                                    'label' => 'Columns',
                                    'description' => 'Set the number of list columns.',
                                    'default' => '',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        '' => 'None',
                                        '1-2' => 'Halves',
                                        '1-3' => 'Thirds',
                                        '1-4' => 'Quarters',
                                        '1-5' => 'Fifths',
                                        '1-6' => 'Sixths'
                                    ]
                                ],
                                'content_column_divider' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Show dividers',
                                    'description' => 'Show a divider between list columns.',
                                    'default' => false
                                ],
                                'content_column_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Columns Breakpoint',
                                    'description' => 'Set the device width from which the list columns should apply.',
                                    'default' => 'm',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        '' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'subtitle_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Color',
                                    'description' => 'Customize the content color.'
                                ],
                                'subtitle_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'min' => 0,
                                    'description' => 'Customize the content font size'
                                ],
                                'content_text_transform' => [
                                    'type' => 'select.select',
                                    'label' => 'Text transform',
                                    'description' => 'The following options will transform text into uppercased, capitalized or lowercased characters.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'uppercase' => 'UPPERCASE',
                                        'capitalize' => 'Capitalize',
                                        'lowercase' => 'lowercase'
                                    ]
                                ],
                                'content_font_weight' => [
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
                                'content_background_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'description' => 'Customize the content background color.'
                                ],
                                'content_padding' => [
                                    'type' => 'input.number',
                                    'label' => 'Padding',
                                    'description' => 'Customize the padding for content.',
                                    'min' => 0,
                                    'placeholder' => 15
                                ],
                                'remove_spacing' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Remove title spacing',
                                    'description' => 'Remove the title and content spacing.',
                                    'default' => false
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
                                'content_margin_top' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin Top',
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
                                'image_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Image Settings'
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
                                    'description' => 'Enter the image\'s width',
                                    'min' => 0,
                                    'placeholder' => 'auto'
                                ],
                                'image_height' => [
                                    'type' => 'input.number',
                                    'label' => 'Height',
                                    'description' => 'Enter the image\'s height',
                                    'min' => 0,
                                    'placeholder' => 'auto'
                                ],
                                'border' => [
                                    'type' => 'select.select',
                                    'label' => 'Border',
                                    'description' => 'Select the image\'s border style.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'circle' => 'Circle',
                                        'rounded' => 'Rounded',
                                        'pill' => 'Pill'
                                    ]
                                ],
                                'box_shadow' => [
                                    'type' => 'select.select',
                                    'label' => 'Box Shadow',
                                    'description' => 'Select the image\'s box shadow size.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large'
                                    ]
                                ],
                                'link_image' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Link image',
                                    'description' => 'Link the image if a link exists.',
                                    'default' => false
                                ],
                                'image_transition' => [
                                    'type' => 'select.select',
                                    'label' => 'Hover Transition',
                                    'description' => 'Select a hover transition for a linked image.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down'
                                    ]
                                ],
                                'box_shadow_hover' => [
                                    'type' => 'select.select',
                                    'label' => 'Hover Box Shadow',
                                    'description' => 'Select the image\'s box shadow size on hover.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large'
                                    ]
                                ],
                                'image_alignment' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment',
                                    'description' => 'Align the image to the top,left, right or place it between the title and the content.',
                                    'default' => 'top',
                                    'options' => [
                                        'top' => 'Top',
                                        'bottom' => 'Bottom',
                                        'between' => 'Between',
                                        'left' => 'Left',
                                        'right' => 'Right'
                                    ]
                                ],
                                'image_grid_width' => [
                                    'type' => 'select.select',
                                    'label' => 'Grid Width',
                                    'description' => 'Define the width of the image within the grid. Choose between percent and fixed widths or expands columns to the width of their content. This option won\'t have any effect unless Image Alignment \'LEFT\' or \'RIGHT\' is selected.',
                                    'default' => '1-2',
                                    'options' => [
                                        'auto' => 'Auto',
                                        '4-5' => '80%',
                                        '3-4' => '75%',
                                        '2-3' => '66%',
                                        '3-5' => '60%',
                                        '1-2' => '50%',
                                        '2-5' => '40%',
                                        '1-3' => '33%',
                                        '1-4' => '25%',
                                        '1-5' => '20%',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        '2xlarge' => '2X-Large'
                                    ]
                                ],
                                'image_grid_column_gap' => [
                                    'type' => 'select.select',
                                    'label' => 'Grid Column Gap',
                                    'description' => 'Set the size of the gap between the image and the content.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'default' => 'Default',
                                        'large' => 'Large',
                                        'collapse' => 'None'
                                    ]
                                ],
                                'image_grid_row_gap' => [
                                    'type' => 'select.select',
                                    'label' => 'Grid Row Gap',
                                    'description' => 'Set the size of the gap if the grid items stack.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'default' => 'Default',
                                        'large' => 'Large',
                                        'collapse' => 'None'
                                    ]
                                ],
                                'image_grid_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Grid Breakpoint',
                                    'description' => 'Set the breakpoint from which grid cells will stack.',
                                    'default' => 'm',
                                    'options' => [
                                        'default' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'image_vertical_alignment' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Vertical Alignment',
                                    'description' => 'Vertically center grid cells.',
                                    'default' => false
                                ],
                                'image_margin_top' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin Top',
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
                                'acc_link_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Link Settings'
                                ],
                                'buttontarget' => [
                                    'type' => 'select.selectize',
                                    'label' => 'Target',
                                    'description' => 'Open the link in a same or new window.',
                                    'placeholder' => 'Select...',
                                    'default' => '_self',
                                    'options' => [
                                        '_self' => 'Self',
                                        '_blank' => 'New Window'
                                    ]
                                ],
                                'buttontext' => [
                                    'type' => 'input.text',
                                    'label' => 'Link Text',
                                    'description' => 'Specify the button label.',
                                    'default' => 'Read more'
                                ],
                                'buttonclass' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Set the button style.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Button Default',
                                        'primary' => 'Button Primary',
                                        'secondary' => 'Button Secondary',
                                        'danger' => 'Button Danger',
                                        'text' => 'Button Text',
                                        'link' => 'Link',
                                        'link-muted' => 'Link Muted',
                                        'link-text' => 'Link Text'
                                    ]
                                ],
                                'link_button_size' => [
                                    'type' => 'select.select',
                                    'label' => 'Button Size',
                                    'description' => 'Set the button size.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'large' => 'Large'
                                    ]
                                ],
                                'btn_text_transform' => [
                                    'type' => 'select.select',
                                    'label' => 'Text transform',
                                    'description' => 'The following options will transform text into uppercased, capitalized or lowercased characters.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'uppercase' => 'UPPERCASE',
                                        'capitalize' => 'Capitalize',
                                        'lowercase' => 'lowercase'
                                    ]
                                ],
                                'btn_font_weight' => [
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
                                'link_margin_top' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin Top',
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
                                    'description' => 'Heading styles differ in font-size but may also come with a predefined color, size and font.',
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
                                    'content' => 'General Settings'
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
                                    'description' => 'Apply an animation to particles once they enter the viewport.',
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
                                        'slide-right' => 'Slide Right 100%',
                                        'parallax' => 'Parallax'
                                    ]
                                ],
                                'animation_delay' => [
                                    'type' => 'input.number',
                                    'label' => 'Delay',
                                    'description' => 'Set the delay animations for particle. Delay time in ms.',
                                    'min' => 0,
                                    'placeholder' => 300
                                ],
                                'animation_repeat' => [
                                    'type' => 'select.select',
                                    'label' => 'Repeat',
                                    'description' => 'Repeat an animation to particle once it enter the viewport.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'delay_element_animations' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Animate items',
                                    'description' => 'Delay item animations so that animations are slightly delayed and don\'t play all at the same time.',
                                    'default' => false
                                ]
                            ]
                        ],
                        '_tab_parallax_animation' => [
                            'label' => 'Parallax',
                            'overridable' => false,
                            'fields' => [
                                'parallax_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Customize the parallax animation, make sure the animation is set to <i>Parallax</i> in <i>General</i> tab. <a href="https://joomlead.com/gantry-5-particles/particles-documentation/#parallax-settings" target="_blank">Learn more</a>'
                                ],
                                'pa_horizontal_start' => [
                                    'type' => 'input.text',
                                    'label' => 'Horizontal Start',
                                    'description' => 'Animate the horizontal position. Optional units are %, vw and vh',
                                    'pattern' => '^-?\\d+(\\.\\d+){0,1}(|vw|vh|%)'
                                ],
                                'pa_horizontal_end' => [
                                    'type' => 'input.text',
                                    'label' => 'Horizontal End',
                                    'description' => 'Animate the horizontal position. Optional units are %, vw and vh',
                                    'pattern' => '^-?\\d+(\\.\\d+){0,1}(|vw|vh|%)'
                                ],
                                'pa_vertical_start' => [
                                    'type' => 'input.text',
                                    'label' => 'Vertical Start',
                                    'description' => 'Animate the vertical position. Optional units are %, vw and vh',
                                    'pattern' => '^-?\\d+(\\.\\d+){0,1}(|vw|vh|%)'
                                ],
                                'pa_vertical_end' => [
                                    'type' => 'input.text',
                                    'label' => 'Vertical End',
                                    'description' => 'Animate the vertical position. Optional units are %, vw and vh',
                                    'pattern' => '^-?\\d+(\\.\\d+){0,1}(|vw|vh|%)'
                                ],
                                'scale_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Scale Start',
                                    'description' => 'Animate the scaling vector, e.g. 2 is 200% and 0.5 is 50% scale.',
                                    'min' => 0.5,
                                    'max' => 2,
                                    'step' => 0.1
                                ],
                                'scale_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Scale End',
                                    'description' => 'Animate the scaling vector, e.g. 2 is 200% and 0.5 is 50% scale.',
                                    'min' => 0.5,
                                    'max' => 2,
                                    'step' => 0.1
                                ],
                                'rotate_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Rotate Start',
                                    'description' => 'Animate the rotation clockwise in degrees. Min 0 and Max 360',
                                    'min' => 0,
                                    'max' => 360
                                ],
                                'rotate_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Rotate End',
                                    'description' => 'Animate the rotation clockwise in degrees. Min 0 and Max 360',
                                    'min' => 0,
                                    'max' => 360
                                ],
                                'opacity_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Opacity Start',
                                    'description' => 'Animate the opacity, e.g. 0 is 0% and 1 is 100% opacity.',
                                    'min' => 0,
                                    'max' => 1,
                                    'step' => 0.1
                                ],
                                'opacity_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Opacity End',
                                    'description' => 'Animate the opacity, e.g. 0 is 0% and 1 is 100% opacity.',
                                    'min' => 0,
                                    'max' => 1,
                                    'step' => 0.1
                                ],
                                'parallax_transform_origin' => [
                                    'type' => 'select.select',
                                    'label' => 'Transform Origin',
                                    'description' => 'Define the origin of the element\'s transformation when scaling or rotating the element.',
                                    'default' => 'center-center',
                                    'options' => [
                                        'top-left' => 'Top Left',
                                        'top-center' => 'Top Center',
                                        'top-right' => 'Top Right',
                                        'center-left' => 'Center Left',
                                        'center-center' => 'Center Center',
                                        'center-right' => 'Center Right',
                                        'bottom-left' => 'Bottom Left',
                                        'bottom-center' => 'Bottom Center',
                                        'bottom-right' => 'Bottom Right'
                                    ]
                                ],
                                'easing' => [
                                    'type' => 'input.number',
                                    'label' => 'Easing',
                                    'description' => 'Set the animation easing. Zero transitions at an even speed, a negative value starts off quickly while a positive value starts off slowly.',
                                    'min' => -2,
                                    'max' => 2,
                                    'step' => 0.1
                                ],
                                'parallax_start' => [
                                    'type' => 'input.text',
                                    'label' => 'Start',
                                    'description' => 'The animation starts when the element enters the viewport and ends when it leaves the viewport. Optionally, set a start and end offset, e.g. <code>100px</code>, <code>50vh</code> or <code>50vh + 50%</code>. Percent relates to the target\'s height.'
                                ],
                                'parallax_end' => [
                                    'type' => 'input.text',
                                    'label' => 'End',
                                    'description' => 'The animation starts when the element enters the viewport and ends when it leaves the viewport. Optionally, set a start and end offset, e.g. <code>100px</code>, <code>50vh</code> or <code>50vh + 50%</code>. Percent relates to the target\'s height.'
                                ],
                                'pa_z_index' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Higher stacking order.',
                                    'description' => 'Set a higher stacking order.',
                                    'default' => false
                                ],
                                'pa_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Breakpoint',
                                    'description' => 'Display the parallax effect only on this device width and larger.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_parallax' => [
                            'label' => 'Background',
                            'overridable' => false,
                            'fields' => [
                                'parallax_bg_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Customize the background image, add a parallax effect or fix the background with regard to the viewport while scrolling. <a href="https://joomlead.com/gantry-5-particles/particles-documentation/#parallax-background-settings" target="_blank">Learn more</a>'
                                ],
                                'parallax_image' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'Background Image',
                                    'placeholder' => 'Pick an image'
                                ],
                                'bg_image_loading' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Load image eagerly',
                                    'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
                                    'default' => false
                                ],
                                'background_image_size' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Size',
                                    'description' => 'Determine whether the image will fit the section dimensions by clipping it or by filling the empty areas with the background color.',
                                    'default' => 'auto',
                                    'options' => [
                                        'auto' => 'Auto',
                                        'cover' => 'Cover',
                                        'contain' => 'Contain',
                                        'width-1-1' => 'Width 100%',
                                        'height-1-1' => 'Height 100%'
                                    ]
                                ],
                                'background_image_position' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Position',
                                    'description' => 'Set the initial background position, relative to the section layer.',
                                    'default' => 'center-center',
                                    'options' => [
                                        'top-left' => 'Top Left',
                                        'top-center' => 'Top Center',
                                        'top-right' => 'Top Right',
                                        'center-left' => 'Center Left',
                                        'center-center' => 'Center Center',
                                        'center-right' => 'Center Right',
                                        'bottom-left' => 'Bottom Left',
                                        'bottom-center' => 'Bottom Center',
                                        'bottom-right' => 'Bottom Right'
                                    ]
                                ],
                                'bg_image_effect' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Effect',
                                    'description' => 'Add a parallax effect or fix the background with regard to the viewport while scrolling.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'None',
                                        'parallax' => 'Parallax',
                                        'fixed' => 'Fixed'
                                    ]
                                ],
                                'bg_image_effect_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-warning',
                                    'content' => 'Set the animation while scrolling if the <code>Parallax</code> Image effect is selected.'
                                ],
                                'horizontal_start' => [
                                    'type' => 'input.text',
                                    'label' => 'Horizontal Start',
                                    'description' => 'Animate the horizontal position. Optional units are %, vw and vh',
                                    'pattern' => '^-?\\d+(\\.\\d+){0,1}(|vw|vh|%)'
                                ],
                                'horizontal_end' => [
                                    'type' => 'input.text',
                                    'label' => 'Horizontal End',
                                    'description' => 'Animate the horizontal position. Optional units are %, vw and vh',
                                    'pattern' => '^-?\\d+(\\.\\d+){0,1}(|vw|vh|%)'
                                ],
                                'vertical_start' => [
                                    'type' => 'input.text',
                                    'label' => 'Vertical Start',
                                    'description' => 'Animate the vertical position. Optional units are %, vw and vh',
                                    'pattern' => '^-?\\d+(\\.\\d+){0,1}(|vw|vh|%)'
                                ],
                                'vertical_end' => [
                                    'type' => 'input.text',
                                    'label' => 'Vertical End',
                                    'description' => 'Animate the vertical position. Optional units are %, vw and vh',
                                    'pattern' => '^-?\\d+(\\.\\d+){0,1}(|vw|vh|%)'
                                ],
                                'parallax_easing' => [
                                    'type' => 'input.number',
                                    'label' => 'Parallax Easing',
                                    'description' => 'Set the animation easing. Zero transitions at an even speed, a negative value starts off quickly while a positive value starts off slowly.',
                                    'min' => -2,
                                    'max' => 2,
                                    'step' => 0.1
                                ],
                                'parallax_bg_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Parallax Breakpoint',
                                    'description' => 'Display the parallax effect only on this device width and larger.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'parallax_bg_visibility' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Visibility',
                                    'description' => 'Display the image only on this device width and larger.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'parallax_bg_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background Color',
                                    'description' => 'Use the background color in combination with blend modes, a transparent image or to fill the area, if the image doesn\'t cover the whole section.'
                                ],
                                'blendmode' => [
                                    'type' => 'select.select',
                                    'label' => 'Blend Mode',
                                    'description' => 'Determine how the image will blend with the background color.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Normal',
                                        'multiply' => 'Multiply',
                                        'screen' => 'Screen',
                                        'overlay' => 'Overlay',
                                        'darken' => 'Darken',
                                        'lighten' => 'Lighten',
                                        'color-dodge' => 'Color-dodge',
                                        'color-burn' => 'Color-burn',
                                        'hard-light' => 'Hard-light',
                                        'soft-light' => 'Soft-light',
                                        'difference' => 'Difference',
                                        'exclusion' => 'Exclusion',
                                        'hue' => 'Hue',
                                        'saturation' => 'Saturation',
                                        'color' => 'Color',
                                        'luminosity' => 'Luminosity'
                                    ]
                                ],
                                'parallax_bg_overlay' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Overlay Color',
                                    'description' => 'Set an additional transparent overlay to soften the image.'
                                ],
                                'container_maxwidth' => [
                                    'type' => 'select.select',
                                    'label' => 'Container Width',
                                    'description' => 'Remove the container for parent section then use this option to define the container width within the section.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'auto' => 'Auto',
                                        'small' => 'Small',
                                        'large' => 'Large',
                                        'xlarge' => 'XLarge',
                                        'expand' => 'Expand',
                                        'custom' => 'Custom'
                                    ]
                                ],
                                'container_maxwidth_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-warning',
                                    'content' => 'The <code>Large Desktop</code> value from breakpoint\'s configuration will be added automatically if no value is set.'
                                ],
                                'bg_container_width' => [
                                    'type' => 'input.text',
                                    'label' => 'Custom Width',
                                    'description' => 'Define the container width within the section in rem, em, or px unit values.',
                                    'placeholder' => '80rem',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                                ],
                                'viewport_height' => [
                                    'type' => 'select.select',
                                    'label' => 'Height',
                                    'description' => 'Enabling viewport height on a section that directly follows the header will subtract the header\'s height from it. On short pages, a section can be expanded to fill the browser window.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'full' => 'Viewport',
                                        'percent' => 'Viewport (Minus 20%)',
                                        'section' => 'Viewport (Minus 50%)',
                                        'expand' => 'Expand'
                                    ]
                                ],
                                'padding' => [
                                    'type' => 'select.select',
                                    'label' => 'Padding',
                                    'description' => 'Set the vertical padding.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'xsmall' => 'X-Small',
                                        'small' => 'Small',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'none' => 'None'
                                    ]
                                ],
                                'vertical_alignment' => [
                                    'type' => 'select.select',
                                    'label' => 'Vertical Alignment',
                                    'description' => 'Align the section content vertically, if the section height is larger than the content itself.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'Top',
                                        'middle' => 'Middle',
                                        'bottom' => 'Bottom'
                                    ]
                                ],
                                'parallax_text_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Inverse Color',
                                    'description' => 'Set light or dark color mode for text, buttons and controls.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'None',
                                        'light' => 'Light',
                                        'dark' => 'Dark'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Accordion <strong>Version: 2.2.6</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/accordion/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
