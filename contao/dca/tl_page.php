<?php

$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'] = array_merge(
    $GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'],
    [
        'ww_pageimage_options'
    ]
);

$GLOBALS['TL_DCA']['tl_page']['subpalettes'] = array_merge(
    $GLOBALS['TL_DCA']['tl_page']['subpalettes'],
    [
        'ww_pageimage_options_static'    => 'ww_pageimage_title,ww_pageimage_subtitle,ww_pageimage_image,ww_pageimage_link'
    ]
);

$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] .= ';{ww_pageimage_options_legend},ww_pageimage_options';

// <editor-fold desc="PageImage DCA">

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_pageimage_options'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_page']['ww_pageimage_options'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => ['Westwerk\Contao\PageImage\DCA\TlPage', 'getSliderOptions'],
    'eval'             => ['submitOnChange' => true, 'includeBlankOption' => true, 'tl_class' => 'clr w50'],
    'sql'              => "varchar(100) NULL"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_pageimage_title'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['ww_pageimage_title'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w50 clr'],
    'sql'       => "varchar(256) NULL"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_pageimage_subtitle'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['ww_pageimage_subtitle'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "varchar(256) NULL"
];

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_pageimage_image'] = [
    'label'         => &$GLOBALS['TL_LANG']['tl_page']['ww_pageimage_image'],
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

$GLOBALS['TL_DCA']['tl_page']['fields']['ww_pageimage_link'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['ww_pageimage_link'],
    'exclude'   => true,
    'inputType' => 'pageTree',
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "blob NULL"
];

// </editor-fold>