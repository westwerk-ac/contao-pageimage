<?php

/**
 * PageImage
 * Westwerk GmbH & Co. KG
 * www.westwerk.ac
 * Tim Becker, tb@westwerk.ac
 */

namespace Westwerk\Contao\PageImage\DCA;

class TlPage extends \Backend {

    public function getSliderOptions() {

        return [
            'static'    => &$GLOBALS['TL_LANG']['tl_page']['ww_pageimage_values']['static'],
            'none'    => &$GLOBALS['TL_LANG']['tl_page']['ww_pageimage_values']['none'],
        ];
    }
}