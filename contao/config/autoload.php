<?php
/**
 * Created by PhpStorm.
 * User: nicoschneider
 * Date: 28/12/14
 * Time: 18:37
 */

/**
 * -------------------------------------------------------------------------
 * CLASSES
 * -------------------------------------------------------------------------
 */
ClassLoader::addClasses([
    'Westwerk\\Contao\\PageImage\\DCA\\TlPage'         => 'system/modules/westwerk-contao-pageimage/src/DCA/TlPage.php',
    'Westwerk\\Contao\\PageImage\\Inserttag\\Featured' => 'system/modules/westwerk-contao-pageimage/src/Inserttag/PageImage.php',
]);

/**
 * -------------------------------------------------------------------------
 * TEMPLATES
 * -------------------------------------------------------------------------
 */
TemplateLoader::addFiles(array
(
    'hmf_rs_slider' => 'system/modules/westwerk-contao-pageimage/templates',
    'hmf_static'    => 'system/modules/westwerk-contao-pageimage/templates'
));