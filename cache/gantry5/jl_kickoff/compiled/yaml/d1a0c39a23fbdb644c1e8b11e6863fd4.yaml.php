<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:\\XAMPP\\htdocs\\CAIM2/templates/jl_kickoff/particles/jlsocialshare.yaml',
    'modified' => 1686729426,
    'data' => [
        'name' => 'JL Social Share',
        'description' => 'Create custom social share icons for your website.',
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
                                'items' => [
                                    'overrideable' => false,
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Items',
                                    'description' => 'Create each item to appear in the content row.',
                                    'value' => 'name',
                                    'ajax' => true,
                                    'fields' => [
                                        '.network' => [
                                            'type' => 'select.select',
                                            'label' => 'Network',
                                            'default' => 'twitter',
                                            'options' => [
                                                'twitter' => 'Twitter',
                                                'facebook' => 'Facebook',
                                                'linkedin' => 'Linkedin',
                                                'mail' => 'Email',
                                                'whatsapp' => 'Whatsapp',
                                                'telegram' => 'Telegram',
                                                'pinterest' => 'Pinterest',
                                                'tumblr' => 'Tumblr',
                                                'reddit' => 'Reddit',
                                                'vk' => 'VK',
                                                'xing' => 'Xing',
                                                'digg' => 'Digg',
                                                'weibo' => 'Weibo',
                                                'renren' => 'Renren',
                                                'skype' => 'Skype'
                                            ]
                                        ],
                                        '.data_title' => [
                                            'type' => 'input.text',
                                            'label' => 'Data Title',
                                            'description' => 'Customize the data title (Optional for Twitter, WhatsApp, Telegram, Email, Tumblr, VK)',
                                            'placeholder' => 'Share on Twitter'
                                        ]
                                    ]
                                ],
                                'button_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Icon Type',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'showall' => 'Show On Hover',
                                        'showclick' => 'Show on Click'
                                    ]
                                ],
                                'icon_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Icon Style',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'color' => 'Color'
                                    ]
                                ],
                                'data_width' => [
                                    'type' => 'input.number',
                                    'label' => 'Popup Width',
                                    'description' => 'Enter the Popup\'s width.',
                                    'min' => 0,
                                    'placeholder' => 640
                                ],
                                'data_height' => [
                                    'type' => 'input.number',
                                    'label' => 'Popup Height',
                                    'description' => 'Enter the Popup\'s height.',
                                    'placeholder' => 480,
                                    'min' => 0
                                ],
                                'tooltip' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Tooltip On Hover',
                                    'overridable' => false,
                                    'default' => false
                                ],
                                'hover_animation' => [
                                    'type' => 'select.select',
                                    'label' => 'Hover Animation',
                                    'description' => 'Apply an animation on hover button share (Depend Icon Type:Show on Hover).',
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
                                'hover_position' => [
                                    'type' => 'select.select',
                                    'label' => 'Hover Position',
                                    'default' => 'right-center',
                                    'options' => [
                                        'right-top' => 'Right Top',
                                        'right-center' => 'Right Center',
                                        'right-bottom' => 'Right Bottom',
                                        'left-top' => 'Left Top',
                                        'left-center' => 'Left Center',
                                        'left-bottom' => 'Left Bottom',
                                        'top-left' => 'Top Left',
                                        'top-center' => 'Top Center',
                                        'top-right' => 'Top Right',
                                        'top-justify' => 'Top Justify',
                                        'bottom-left' => 'Bottom Left',
                                        'bottom-center' => 'Bottom Center',
                                        'bottom-right' => 'Bottom Right',
                                        'bottom-justify' => 'Bottom Justify'
                                    ]
                                ],
                                'button' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Button Icon',
                                    'default' => true
                                ],
                                'social_icon_gap' => [
                                    'type' => 'select.select',
                                    'label' => 'Icons Gap',
                                    'description' => 'Set the size of the gap between the social icons.',
                                    'default' => 'small',
                                    'options' => [
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        '' => 'Default',
                                        'large' => 'Large',
                                        'collapse' => 'Collapse'
                                    ]
                                ],
                                'hover_animation_item' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Item Animation',
                                    'description' => 'Check this to apply the animation on hover for social items.',
                                    'default' => false
                                ],
                                'class' => [
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Classes',
                                    'description' => 'CSS class name for the particle.'
                                ]
                            ]
                        ],
                        '_tab_attributes' => [
                            'label' => 'Attributes',
                            'overridable' => false,
                            'fields' => [
                                'twitter_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Twitter'
                                ],
                                'twitter_hashtags' => [
                                    'type' => 'input.text',
                                    'label' => 'Data Hashtags',
                                    'description' => 'Custom the Twitter Hashtags (separated by comma).'
                                ],
                                'facebook_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Facebook'
                                ],
                                'facebook_hashtags' => [
                                    'type' => 'input.text',
                                    'label' => 'Data Hashtags',
                                    'description' => 'Custom the Facebook Hashtags (separated by comma).'
                                ],
                                'email_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Email'
                                ],
                                'email_datato' => [
                                    'type' => 'input.text',
                                    'label' => 'Data To',
                                    'description' => 'Custom the email data to.',
                                    'placeholder' => 'hello@example.com'
                                ],
                                'email_datasubject' => [
                                    'type' => 'input.text',
                                    'label' => 'Data Subject',
                                    'description' => 'Custom the email data subject.',
                                    'placeholder' => 'Hey! Check out that URL'
                                ],
                                'telegram_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Telegram'
                                ],
                                'telegram_data' => [
                                    'type' => 'input.text',
                                    'label' => 'Data To',
                                    'description' => 'Custom the data to (Phone number).'
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
                                    'description' => 'Customize the title color instead using predefined color mode. Note:Set the Predefined color to None before using this color customization mode.'
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
                    'content' => 'JL Social Share <strong>Version: 2.2.6</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/social-share-particle/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
