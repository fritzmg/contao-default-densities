<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   default_densities
 * @author    Fritz Michael Gschwantner <https://github.com/fritzmg>
 * @license   GNU/LGPL
 * @copyright Fritz Michael Gschwantner 2015
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace(',gdMaxImgHeight', ',gdMaxImgHeight,defaultDensities', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['defaultDensities'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_settings']['defaultDensities'],
    'inputType' => 'text',
    'eval'      => array('tl_class'=>'w50')
);
