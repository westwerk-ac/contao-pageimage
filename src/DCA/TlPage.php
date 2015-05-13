<?php namespace Westwerk\Contao\PageImage\DCA;

class TlPage extends \Backend {

    public function getSliderOptions() {

        return [
            'static'    => &$GLOBALS['TL_LANG']['tl_page']['ww_pageimage_values']['static'],
            'none'    => &$GLOBALS['TL_LANG']['tl_page']['ww_pageimage_values']['none'],
        ];
    }
}