<?php
/**
 * Created by PhpStorm.
 * User: nicoschneider
 * Date: 28/12/14
 * Time: 19:13
 */

/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['Westwerk\Contao\PageImage\Inserttag\PageImage', 'replacePageImageTag'];