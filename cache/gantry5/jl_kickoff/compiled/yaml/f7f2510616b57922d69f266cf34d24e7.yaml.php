<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:\\XAMPP\\htdocs\\CAIM2/templates/jl_kickoff/particles/jlnavbar.yaml',
    'modified' => 1686729426,
    'data' => [
        'name' => 'JL Navbar',
        'description' => 'Create a navigation bar that can be used for your main site navigation.',
        'type' => 'particle',
        'icon' => 'fa-joomla',
        'configuration' => [
            'caching' => [
                'type' => 'menu'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the menu particle.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_logo' => [
                            'label' => 'Logo',
                            'fields' => [
                                'url' => [
                                    'type' => 'input.text',
                                    'label' => 'Url',
                                    'description' => 'Url for the image. Leave empty to go to home page.'
                                ],
                                'text' => [
                                    'type' => 'input.text',
                                    'label' => 'Logo Text',
                                    'description' => 'The logo text will be used, if no logo image has been picked.'
                                ],
                                'image' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'Logo Image',
                                    'description' => 'Select your logo image.'
                                ],
                                'svg_support' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Svg Support',
                                    'description' => 'Inject inline SVG images into the page markup and style them with CSS.',
                                    'default' => false
                                ],
                                'height' => [
                                    'type' => 'input.text',
                                    'label' => 'Maximum Height',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                                ],
                                'mobile_logo_image' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'Mobile Logo (Optional)',
                                    'description' => 'Select an alternative logo, which will be used on small devices.'
                                ],
                                'image_height' => [
                                    'type' => 'input.text',
                                    'label' => 'Mobile Max Height',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                                ]
                            ]
                        ],
                        '_tab_content' => [
                            'label' => 'Menu',
                            'fields' => [
                                'menu' => [
                                    'type' => 'menu.list',
                                    'label' => 'Menu',
                                    'description' => 'Select menu to be used with the particle.',
                                    'default' => '',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        '' => 'Use Default Menu',
                                        '-active-' => 'Use Active Menu'
                                    ]
                                ],
                                'base' => [
                                    'type' => 'menu.item',
                                    'label' => 'Base Item',
                                    'description' => 'Select a menu item to always be used as the base for the menu display.',
                                    'default' => '/',
                                    'options' => [
                                        '/' => 'Active'
                                    ]
                                ],
                                'startLevel' => [
                                    'type' => 'input.text',
                                    'label' => 'Start Level',
                                    'description' => 'Set the start level of the menu.',
                                    'default' => 1
                                ],
                                'maxLevels' => [
                                    'type' => 'input.text',
                                    'label' => 'Max Levels',
                                    'description' => 'Set the maximum number of menu levels to display.',
                                    'default' => 0
                                ],
                                'renderTitles' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Render Titles',
                                    'description' => 'Renders the titles/tooltips of the Menu Items for accessibility.',
                                    'default' => 0
                                ],
                                'hoverExpand' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Expand on Hover',
                                    'description' => 'Allows to enable / disable the ability to expand menu items by hover or click only',
                                    'default' => 1
                                ],
                                'parrentIcon' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Enable Parent Icon',
                                    'default' => 1
                                ],
                                'forceTarget' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Force Target Attribute',
                                    'description' => 'Adds \'target=&quot;_self&quot;\' attribute to all menu links instead of omitting the default value. Fixes an issue with pinned tabs in Firefox where external links always open in a new tab.',
                                    'default' => 0
                                ]
                            ]
                        ],
                        '_tab_canvas' => [
                            'label' => 'Mobile',
                            'overridable' => false,
                            'fields' => [
                                'menu_visibility' => [
                                    'type' => 'select.select',
                                    'label' => 'Breakpoint',
                                    'description' => 'Select the device size that will replace the default header with the mobile header.',
                                    'default' => 'm',
                                    'overridable' => false,
                                    'options' => [
                                        's' => 'Small',
                                        'm' => 'Medium',
                                        'l' => 'Large'
                                    ]
                                ],
                                'm_sticky_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Sticky'
                                ],
                                'm_sticky' => [
                                    'type' => 'select.selectize',
                                    'label' => 'Navbar',
                                    'description' => 'Let the navbar stick at the top of the viewport while scrolling or only when scrolling up.',
                                    'default' => '',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        '' => 'Static',
                                        'sticky' => 'Sticky',
                                        'stickyonscroll' => 'Sticky on scroll up'
                                    ]
                                ],
                                'ms_top' => [
                                    'type' => 'input.number',
                                    'label' => 'Top',
                                    'description' => 'The top offset from where the element should be stick.',
                                    'min' => 0,
                                    'placeholder' => 0
                                ],
                                'ms_offset' => [
                                    'type' => 'input.number',
                                    'label' => 'Offset',
                                    'description' => 'The offset the Sticky should be fixed to.',
                                    'min' => 0,
                                    'placeholder' => 0
                                ],
                                'mobile_logo' => [
                                    'type' => 'select.select',
                                    'label' => 'Logo',
                                    'description' => 'Select the alignment of the logo.',
                                    'default' => 'center',
                                    'overridable' => false,
                                    'options' => [
                                        '' => 'Hide',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right'
                                    ]
                                ],
                                'mobile_menu_toggle' => [
                                    'type' => 'select.select',
                                    'label' => 'Menu Toggle',
                                    'description' => 'Select the alignment of the menu toggle icon.',
                                    'default' => 'left',
                                    'overridable' => false,
                                    'options' => [
                                        'left' => 'Left',
                                        'right' => 'Right'
                                    ]
                                ],
                                'toggle_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Toggle'
                                ],
                                'menu_text' => [
                                    'type' => 'input.text',
                                    'label' => 'Text',
                                    'description' => 'Show the text label Menu next to the hamburger icon.',
                                    'placeholder' => 'Menu'
                                ],
                                'toggle_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Color',
                                    'description' => 'Customize the toggle color if needed.'
                                ],
                                'toggle_color_hover' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover Color'
                                ],
                                'toggle_text_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'min' => 0,
                                    'description' => 'Customize the toggle text font size.'
                                ],
                                'animation_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Animation (Offcanvas only)'
                                ],
                                'menu_animation' => [
                                    'type' => 'select.select',
                                    'label' => 'Type',
                                    'description' => 'Select the menu type displayed in the mobile position.',
                                    'default' => 'offcanvas',
                                    'overridable' => false,
                                    'options' => [
                                        'offcanvas' => 'Offcanvas'
                                    ]
                                ],
                                'close_button' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Show Close Icon',
                                    'description' => 'Use this option to create a close button and enable its functionality.',
                                    'default' => true,
                                    'overridable' => false
                                ],
                                'offcanvas_inverse' => [
                                    'type' => 'select.select',
                                    'label' => 'Inverse Color',
                                    'description' => 'Set light or dark color mode for nav icon, buttons and controls.',
                                    'default' => '',
                                    'options' => [
                                        '' => '- Use Default -',
                                        'light' => 'Light',
                                        'dark' => 'Dark'
                                    ]
                                ],
                                'offcanvas_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Off-canvas'
                                ],
                                'overlay' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Overlay',
                                    'description' => 'Use this option to add an overlay, blanking out the page.',
                                    'default' => true
                                ],
                                'animation_mode' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation modes',
                                    'description' => 'Choose between Slide, Reveal and Push offcanvas animations.',
                                    'default' => 'slide',
                                    'options' => [
                                        'slide' => 'Slide',
                                        'push' => 'Push',
                                        'reveal' => 'Reveal',
                                        'none' => 'None'
                                    ]
                                ],
                                'flip_offcanvas' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Display on the right',
                                    'default' => 1
                                ],
                                'dropdown_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Dropdown (Pro)'
                                ],
                                'nav_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Nav Settings'
                                ],
                                'nav_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Menu Style',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Default',
                                        'primary' => 'Primary',
                                        'secondary' => 'Secondary'
                                    ]
                                ],
                                'nav_divider' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Show dividers',
                                    'default' => 0
                                ],
                                'nav_center' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Center horizontally',
                                    'default' => 0
                                ],
                                'modal_vertically' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Center vertically',
                                    'default' => false
                                ],
                                'customize_bar_background' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'description' => 'Customize the background color.'
                                ],
                                'nav_cv_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Nav Color',
                                    'description' => 'Customize the nav item color if needed.'
                                ],
                                'nav_color_active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Active Color',
                                    'description' => 'Customize the nav item hover/active color if needed.'
                                ],
                                'nav_color_header' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Nav Header Color'
                                ],
                                'info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'To edit the Module please use the <a href="index.php?option=com_modules" target="_blank">Joomla\'s Module Manager</a>'
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
                                'html_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Html (Pro)'
                                ]
                            ]
                        ],
                        '_tab_style' => [
                            'label' => 'Style',
                            'overridable' => false,
                            'fields' => [
                                'navbar_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Navbar'
                                ],
                                'navbar_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Navbar Style',
                                    'description' => 'Select the menu navbar style.',
                                    'default' => 'extended',
                                    'options' => [
                                        '' => 'Simple',
                                        'extended' => 'Extended'
                                    ]
                                ],
                                'transparent_header' => [
                                    'type' => 'select.select',
                                    'label' => 'Transparent',
                                    'description' => 'Make the header transparent and overlay the page background.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'None',
                                        'light' => 'Overlay (Light)',
                                        'dark' => 'Overlay (Dark)'
                                    ]
                                ],
                                'nav_bg_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'description' => 'Customize the navbar background color.'
                                ],
                                'logo_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Logo Color',
                                    'description' => 'Customize the logo text color.'
                                ],
                                'mobile_text_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Mobile Color',
                                    'description' => 'Customize the mobile logo text color.'
                                ],
                                'nav_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Nav Item'
                                ],
                                'navbar_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Color',
                                    'description' => 'Customize the nav item color.'
                                ],
                                'navbar_fontsize' => [
                                    'type' => 'input.text',
                                    'label' => 'Font Size',
                                    'description' => 'Customize the nav item font size in rem, em, px.',
                                    'placeholder' => '16px',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                                ],
                                'navbar_text_transform' => [
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
                                'navbar_hover_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover Color',
                                    'description' => 'Customize the Nav item hover color.'
                                ],
                                'navbar_active_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Active Color',
                                    'description' => 'Customize the Nav item active color.'
                                ],
                                'dropdown_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Dropdown'
                                ],
                                'dropdown_bg' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'description' => 'Customize the Dropdown background color.'
                                ],
                                'dropdown_border_radius' => [
                                    'type' => 'input.text',
                                    'label' => 'Border Radius',
                                    'description' => 'Customize the Dropdown border radius in rem, em, px.',
                                    'placeholder' => '0px',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                                ],
                                'dropdown_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Color',
                                    'description' => 'Customize the Dropdown color.'
                                ],
                                'dropdown_padding' => [
                                    'type' => 'input.text',
                                    'label' => 'Padding',
                                    'placeholder' => '20px',
                                    'description' => 'Customize the nav item font size in rem, em, px.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                                ],
                                'dropdown_zindex' => [
                                    'type' => 'input.number',
                                    'label' => 'Z-index',
                                    'placeholder' => 1020
                                ],
                                'dropdown_offset' => [
                                    'type' => 'input.number',
                                    'label' => 'Offset',
                                    'description' => 'To define a custom offset between the dropdown and its parent item, add the offset option with a value in pixels.'
                                ],
                                'dropdown_alignment' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right'
                                    ]
                                ],
                                'navbar_dropdown_animation' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation',
                                    'default' => '',
                                    'description' => 'Apply animations to the dropdown.',
                                    'options' => [
                                        '' => 'Default',
                                        'jl-animation-scale-up' => 'Scale Up',
                                        'jl-animation-scale-down' => 'Scale Down',
                                        'jl-animation-slide-top-small' => 'Slide Top Small',
                                        'jl-animation-slide-bottom-small' => 'Slide Bottom Small',
                                        'jl-animation-slide-left-small' => 'Slide Left Small',
                                        'jl-animation-slide-right-small' => 'Slide Right Small',
                                        'slide-top' => 'Slide Top',
                                        'slide-bottom' => 'Slide Bottom',
                                        'slide-left' => 'Slide Left',
                                        'slide-right' => 'Slide Right',
                                        'reveal-top' => 'Reveal Top',
                                        'reveal-bottom' => 'Reveal Bottom',
                                        'reveal-left' => 'Reveal Left',
                                        'reveal-right' => 'Reveal Right'
                                    ]
                                ],
                                'dropdown_stretch' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Stretch',
                                    'default' => 0,
                                    'description' => 'Stretch dropdown on x axis.'
                                ],
                                'dropdown_nav_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Dropdown Nav Item'
                                ],
                                'subnav_extended' => [
                                    'type' => 'select.select',
                                    'label' => 'Subnav Extended',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Default',
                                        'accordion' => 'Collapsible',
                                        'drop' => 'Drop'
                                    ]
                                ],
                                'dropdown_nav_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Default',
                                        'secondary' => 'Secondary'
                                    ]
                                ],
                                'dropdown_nav_divider' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Show dividers',
                                    'default' => 0
                                ],
                                'dropdown_nav_divider_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Divider Color',
                                    'description' => 'Customize the divider color for nav items.'
                                ],
                                'dropdown_nav_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Color',
                                    'description' => 'Customize the nav item color.'
                                ],
                                'dropdown_navbar_fontsize' => [
                                    'type' => 'input.text',
                                    'label' => 'Font Size',
                                    'description' => 'Customize the nav item font size in rem, em, px.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                                ],
                                'dropdown_nav_padding' => [
                                    'type' => 'input.text',
                                    'label' => 'Padding',
                                    'placeholder' => '5px 0',
                                    'description' => 'Customize the nav item padding.'
                                ],
                                'dropdown_navbar_text_transform' => [
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
                                'dropdown_navbar_hover_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover Color',
                                    'description' => 'Customize the Nav item hover color.'
                                ],
                                'dropdown_navbar_active_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Active Color',
                                    'description' => 'Customize the Nav item active color.'
                                ],
                                'dropdown_background_item_hover_background' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover Background',
                                    'description' => 'Customize the Nav item hover/active background color for secondary style.'
                                ]
                            ]
                        ],
                        '_tab_header' => [
                            'label' => 'Header',
                            'fields' => [
                                'layout' => [
                                    'type' => 'select.select',
                                    'label' => 'Header Layout',
                                    'description' => 'Prepared header layouts define the position of logo, navbar and header.',
                                    'default' => 'left',
                                    'overridable' => false,
                                    'options' => [
                                        'left' => 'Navbar Left',
                                        'center' => 'Navbar Center',
                                        'right' => 'Navbar Right'
                                    ]
                                ],
                                'sticky_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Sticky'
                                ],
                                'sticky' => [
                                    'type' => 'select.selectize',
                                    'label' => 'Sticky',
                                    'description' => 'Let the navbar stick at the top of the viewport while scrolling or only when scrolling up.',
                                    'default' => '',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        '' => 'Static',
                                        'sticky' => 'Sticky',
                                        'stickyonscroll' => 'Sticky on scroll up'
                                    ]
                                ],
                                'top' => [
                                    'type' => 'input.number',
                                    'label' => 'Top',
                                    'description' => 'The top offset from where the element should be stick.',
                                    'min' => 0,
                                    'placeholder' => 0
                                ],
                                'offset' => [
                                    'type' => 'input.number',
                                    'label' => 'Offset',
                                    'description' => 'The offset the Sticky should be fixed to.',
                                    'min' => 0,
                                    'placeholder' => 0
                                ],
                                'menu_style_note' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Toggle Style (Pro)'
                                ],
                                '_canvas_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Offcanvas Style(Pro)'
                                ],
                                '_social_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Social Icons'
                                ],
                                'social_items' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Items',
                                    'description' => 'Create each item to appear in the list row.',
                                    'value' => 'name',
                                    'ajax' => true,
                                    'fields' => [
                                        '.social_icon' => [
                                            'type' => 'input.icon',
                                            'label' => 'Social Icon'
                                        ],
                                        '.social_text' => [
                                            'type' => 'input.text',
                                            'label' => 'Text'
                                        ],
                                        '.social_title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title'
                                        ],
                                        '.social_link' => [
                                            'type' => 'input.text',
                                            'label' => 'Link'
                                        ]
                                    ]
                                ],
                                'sc_icon_button' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Icons as buttons',
                                    'default' => false
                                ],
                                'display' => [
                                    'type' => 'input.radios',
                                    'label' => 'Display',
                                    'description' => 'How to display the Social Icons',
                                    'default' => 'icons_only',
                                    'options' => [
                                        'icons_only' => 'Icons Only',
                                        'text_only' => 'Text Only',
                                        'both' => 'Both'
                                    ]
                                ],
                                'sc_link_target' => [
                                    'type' => 'select.selectize',
                                    'label' => 'Link Target',
                                    'description' => 'Open the link in a same or new window.',
                                    'placeholder' => 'Select...',
                                    'default' => '_self',
                                    'options' => [
                                        '_self' => 'Self',
                                        '_blank' => 'New Window'
                                    ]
                                ],
                                'social_pos' => [
                                    'type' => 'select.select',
                                    'label' => 'Position',
                                    'description' => 'Select the position that will display the social icons.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Hide',
                                        'header' => 'Header',
                                        'navbar' => 'Navbar'
                                    ]
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
                                'social_inverse' => [
                                    'type' => 'select.select',
                                    'label' => 'Inverse Color',
                                    'description' => 'Set light or dark color mode for nav icon, buttons and controls.',
                                    'default' => '',
                                    'options' => [
                                        '' => '- Use Default -',
                                        'light' => 'Light',
                                        'dark' => 'Dark'
                                    ]
                                ],
                                '_search_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Search'
                                ],
                                'search_pos' => [
                                    'type' => 'select.select',
                                    'label' => 'Position',
                                    'description' => 'Select the position that will display the search.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Hide',
                                        'header' => 'Header',
                                        'navbar' => 'Navbar'
                                    ]
                                ],
                                'search_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Search Style',
                                    'description' => 'Select the search style.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'modal' => 'Modal'
                                    ]
                                ],
                                'icon_flip' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Icon Flip',
                                    'default' => false
                                ],
                                'placeholder' => [
                                    'type' => 'input.text',
                                    'label' => 'Placeholder',
                                    'description' => 'Customize the search placeholder.',
                                    'default' => 'Search...',
                                    'placeholder' => 'Search...'
                                ],
                                '_custom_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Custom (Pro)'
                                ]
                            ]
                        ],
                        '_tab_general' => [
                            'label' => 'General',
                            'overridable' => false,
                            'fields' => [
                                'container_note' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Container'
                                ],
                                'container_maxwidth' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width',
                                    'description' => 'Set the maximum content width.',
                                    'default' => '',
                                    'options' => [
                                        'default' => 'Default',
                                        'small' => 'Small',
                                        'large' => 'Large',
                                        'xlarge' => 'XLarge',
                                        'expand' => 'Expand',
                                        '' => 'None',
                                        'custom' => 'Custom'
                                    ]
                                ],
                                'ct_container_width' => [
                                    'type' => 'input.text',
                                    'label' => 'Custom',
                                    'description' => 'Define the container width within the section in rem, em, or px unit values.',
                                    'placeholder' => '75rem',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                                ],
                                'navbar_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Header height.'
                                ],
                                'navbar_height' => [
                                    'type' => 'input.text',
                                    'label' => 'Header Height',
                                    'placeholder' => '80px',
                                    'description' => 'Define the navbar item height within the section in rem, em, or px unit values.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                                ],
                                'main_nav_margin' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Remove Nav Margin',
                                    'default' => true
                                ],
                                'header_pd_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Stacked Headers padding and margin layout (Pro).'
                                ]
                            ]
                        ]
                    ]
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Navbar Lite <strong>Version: 1.1.0</strong> by <a href="https://joomlead.com/" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/jl-navbar-particle/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
