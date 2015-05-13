<?php

$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'] = array_merge(
    $GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'],
    [
        'ww_slider_options'
    ]
);

$GLOBALS['TL_DCA']['tl_page']['subpalettes'] = array_merge(
    $GLOBALS['TL_DCA']['tl_page']['subpalettes'],
    [
        'ww_slider_options_rs_slider' => 'ww_rs_slider',
        'ww_slider_options_static'    => 'ww_static_title,ww_static_subtitle,ww_static_image,ww_static_link'
    ]
);

$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] .= ';{ww_slider_options_legend},ww_slider_options';

$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] .= ';{ww_blocks_legend},ww_blocks';

// <editor-fold desc="Slider DCA">

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_slider_options'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_page']['ww_slider_options'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => ['Hypemedia\Contao\Featured\DCA\TlPage', 'getSliderOptions'],
    'eval'             => ['submitOnChange' => true, 'includeBlankOption' => true, 'tl_class' => 'clr w50'],
    'sql'              => "varchar(100) NULL"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_rs_slider'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_page']['ww_rs_slider'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => ['Hypemedia\Contao\Featured\DCA\TlPage', 'getRocksolidSliders'],
    'sql'              => "int(10) NULL",
    'eval'             => ['tl_class' => 'w50 clr'],
];

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_static_title'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['ww_static_title'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w50 clr'],
    'sql'       => "varchar(256) NULL"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_static_subtitle'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['ww_static_subtitle'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "varchar(256) NULL"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_static_image'] = [
    'label'         => &$GLOBALS['TL_LANG']['tl_page']['ww_static_image'],
    'exclude'       => true,
    'inputType'     => 'fileTree',
    'eval'          => [
        'filesOnly' => true,
        'fieldType' => 'radio',
        'mandatory' => true,
        'tl_class'  => 'clr w50'
    ],
    'sql'           => "binary(16) NULL"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_static_link'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['ww_static_link'],
    'exclude'   => true,
    'inputType' => 'pageTree',
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "blob NULL"
];

// </editor-fold>