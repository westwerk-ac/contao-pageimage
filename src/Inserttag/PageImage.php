<?php
/**
 * PageImage
 * Westwerk GmbH & Co. KG
 * www.westwerk.ac
 * Tim Becker, tb@westwerk.ac
 */

namespace Westwerk\Contao\PageImage\Inserttag;

use Contao\FilesModel;
use Contao\FrontendTemplate;
use Contao\PageModel;

class PageImage extends \Backend {

    public function replacePageImageTag($tag) {

        if($tag !== 'pageimage::render') {
            return '';
        }

        $page = $this->getPage();

        switch($page->ww_pageimage_options) {
            case 'static':
                return $this->generateStatic($page);
                break 1;
            case 'none':
            default:
                return '';
                break 1;
        }
    }

    private function generateStatic(PageModel $page) {

        $template = new FrontendTemplate('wwpi_static');
        $image = \FilesModel::findByPk($page->ww_pageimage_image);
        $template->paths = $image->path;
        $template->title = $page->ww_pageimage_title;
        $template->subtitle = $page->ww_pageimage_subtitle;
        $template->link = $page->ww_pageimage_link;

        return $template->parse();
    }

    private function getPage() {

        global $objPage;

        return $objPage;
    }
}