<?php
/**
 * ETHERNIAL THEME
 * A XOOPS theme designed for XOOPS and Common Utilities using xThemes
 *
 * Copyright © 2014 Eduardo Cortés
 * -----------------------------------------------------------------
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * -----------------------------------------------------------------
 * @package      Ethernial Theme
 * @author       Eduardo Cortés <yo@eduardocortes.mx>
 * @copyright    2009 - 2014 Eduardo Cortés
 * @license      GPL v2
 * @link         http://eduardocortes.mx
 * @link         http://xoopsmexico.net
 */

/*               OPTIONS SECTIONS               */
/* ============================================ */
$sections = [
    'appearance' => __('Appearance', 'ethernial'),
    'cover' => __('Cover', 'ethernial'),
    'colors' => __('Theme Colors', 'ethernial'),
    'footer' => __('Theme Footer', 'ethernial'),
    'special' => __('Special', 'ethernial'),
    'build' => __('Build', 'ethernial'),
];

/*                  APPERANCE                   */
/* ============================================ */
$options['bgcolor'] = [
    'section' => 'appearance',
    'caption' => __('Background color', 'ethernial'),
    'description' => '',
    'type' => 'color',
    'content' => 'text',
    'default' => '#f5f5f5',
];

$options['logo_text'] = [
    'section' => 'appearance',
    'caption' => __('Text for logo', 'ethernial'),
    'description' => '',
    'type' => 'textbox',
    'content' => 'text',
    'default' => 'Ethernial',
];

$options['slogan'] = [
    'section' => 'appearance',
    'caption' => __('Slogan', 'ethernial'),
    'description' => '',
    'type' => 'textbox',
    'content' => 'text',
    'default' => 'Just another theme by Eduardo Cortés',
];

$options['bgheader'] = [
    'section' => 'appearance',
    'caption' => __('Image bg for header', 'ethernial'),
    'description' => '',
    'type' => 'imageurl',
    'content' => 'text',
    'default' => '',
];

$options['navcolor'] = [
    'section' => 'appearance',
    'caption' => __('Main navigation text color', 'ethernial'),
    'description' => '',
    'type' => 'color',
    'content' => 'text',
    'default' => '#FFFFFF',
];

$options['sansfont'] = [
    'section' => 'appearance',
    'caption' => __('Main font', 'ethernial'),
    'description' => '',
    'type' => 'webfonts',
    'content' => 'text',
    'default' => 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,400,400italic,700,700italic',
];

$options['sidebar'] = [
    'section' => 'appearance',
    'caption' => __('Blocks position', 'ethernial'),
    'description' => '',
    'type' => 'select',
    'content' => 'text',
    'default' => 'left',
    'options' => [
        'left' => __('Left', 'ethernial'),
        'right' => __('Right', 'ethernial'),
    ],
];

/*                    COVER                     */
/* ============================================ */
$options['welcome'] = [
    'section' => 'cover',
    'caption' => __('Welcome message', 'ethernial'),
    'description' => '',
    'type' => 'textbox',
    'content' => 'text',
    'default' => __('Introducing <strong>Ethernial</strong> Theme', 'ethernial'),
];

$options['tagline'] = [
    'section' => 'cover',
    'caption' => __('Welcome tagline', 'ethernial'),
    'description' => '',
    'type' => 'textbox',
    'content' => 'text',
    'default' => __('This is a responsive freemium theme made for XOOPS. Do you like?', 'ethernial'),
];

$options['page'] = [
    'section' => 'cover',
    'caption' => __('QuickPages page for homepage', 'ethernial'),
    'description' => __('Specify the page ID to use in theme homepage', 'ethernial'),
    'type' => 'textbox',
    'content' => 'int',
    'default' => '',
];

$options['page_link'] = [
    'section' => 'cover',
    'caption' => __('Homepage page link', 'ethernial'),
    'description' => '',
    'type' => 'textbox',
    'content' => 'text',
    'default' => '#',
];

$options['logocolor'] = [
    'section' => 'cover',
    'caption' => __('Color of logo', 'ethernial'),
    'description' => '',
    'type' => 'color',
    'content' => 'text',
    'default' => '#FFF',
];

$options['btncolor'] = [
    'section' => 'cover',
    'caption' => __('Background color of "Start" button', 'ethernial'),
    'description' => '',
    'type' => 'color',
    'content' => 'text',
    'default' => '#D9201B',
];

$options['logoshadow'] = [
    'section' => 'cover',
    'caption' => __('Show shadow for logo and slogan', 'ethernial'),
    'description' => '',
    'type' => 'yesno',
    'content' => 'int',
    'default' => 1,
];

/*                 THEME COLORS                 */
/* ============================================ */
$options['primary'] = [
    'section' => 'colors',
    'caption' => __('Primary color', 'ethernial'),
    'description' => '',
    'type' => 'color',
    'content' => 'text',
    'default' => '#2E3338',
];

$options['primary_hover'] = [
    'section' => 'colors',
    'caption' => __('Primary hover color', 'ethernial'),
    'description' => '',
    'type' => 'color',
    'content' => 'text',
    'default' => '#D9201B',
];

/*                    FOOTER                    */
/* ============================================ */
$options['bgfooter'] = [
    'section' => 'footer',
    'caption' => __('Footer background color:', 'ethernial'),
    'description' => '',
    'type' => 'color',
    'content' => 'text',
    'default' => '#2b252c',
];

$options['footer_color'] = [
    'section' => 'footer',
    'caption' => __('Footer text color:', 'ethernial'),
    'description' => '',
    'type' => 'color',
    'content' => 'text',
    'default' => '#FFFFFF',
];

$options['footer_links'] = [
    'section' => 'footer',
    'caption' => __('Footer links color:', 'ethernial'),
    'description' => '',
    'type' => 'color',
    'content' => 'text',
    'default' => '#D9201B',
];

$options['footer_text'] = [
    'section' => 'footer',
    'caption' => __('Footer featured text:', 'ethernial'),
    'description' => '',
    'type' => 'textbox',
    'content' => 'text',
    'default' => __('Do you believe now?', 'ethernial'),
];

$options['footer_tagline'] = [
    'section' => 'footer',
    'caption' => __('Footer featured tagline:', 'ethernial'),
    'description' => '',
    'type' => 'textbox',
    'content' => 'text',
    'default' => 'Really proud to be powered by XOOPS and Common Utilities',
];

$options['social'] = [
    'section' => 'footer',
    'caption' => __('Social networks:', 'inception'),
    'description' => '',
    'type' => 'slider',
    'content' => 'array',
    'length' => '7',
    'default' => '',
    'options' => [
        'icon' => [
            'caption' => __('Specify the FontAwesome icon to use', 'inception'),
            'description' => __('e.g. fa-twitter.', 'xthemes'),
            'type' => 'textbox',
        ],
        'link' => [
            'caption' => __('Specify the link for this item', 'inception'),
            'description' => '',
            'type' => 'textbox',
        ],
    ],
];

$options['footer_bottom_links'] = [
    'section' => 'footer',
    'caption' => __('Footer bottom links color:', 'ethernial'),
    'description' => '',
    'type' => 'color',
    'content' => 'text',
    'default' => '#68696B',
];

$options['links'] = [
    'section' => 'footer',
    'caption' => __('Bottom info:', 'inception'),
    'description' => '',
    'type' => 'slider',
    'content' => 'array',
    'length' => '7',
    'default' => '',
    'options' => [
        'item' => [
            'caption' => __('Input content for this element', 'inception'),
            'description' => '',
            'type' => 'textarea',
        ],
    ],
];

/*               SPECIAL SECTION                */
/* ============================================ */
$options['analytics'] = [
    'section' => 'special',
    'caption' => __('Analytics code:', 'ethernial'),
    'description' => __('This code must be inserted in HEAD section of theme', 'ethernial'),
    'type' => 'textarea',
    'content' => 'text',
    'default' => '',
];

$options['css'] = [
    'section' => 'special',
    'caption' => __('Custom CSS code:', 'ethernial'),
    'description' => __('If you provide your own code, then don\'t forget to enable "Build Ethernial styles" in build tab.', 'ethernial'),
    'type' => 'textarea',
    'content' => 'text',
    'default' => '/* YOUR CUSTOM CSS CODE */',
];

/*                    BUILD                     */
/* ============================================ */
$options['bootstrap'] = [
    'section' => 'build',
    'caption' => __('Build Bootstrap:', 'ethernial'),
    'description' => '',
    'type' => 'yesno',
    'content' => 'int',
    'default' => 1,
];
$options['ethernial'] = [
    'section' => 'build',
    'caption' => __('Build Ethernial styles:', 'ethernial'),
    'description' => '',
    'type' => 'yesno',
    'content' => 'int',
    'default' => 1,
];
$options['mywords'] = [
    'section' => 'build',
    'caption' => __('Build MyWords styles:', 'ethernial'),
    'description' => '',
    'type' => 'yesno',
    'content' => 'int',
    'default' => 1,
];

$settings = [
    'sections' => $sections,
    'options' => $options,
];

return $settings;
