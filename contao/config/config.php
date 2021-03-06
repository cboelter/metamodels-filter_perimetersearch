<?php

/**
 * This file is part of MetaModels/filter_perimetersearch.
 *
 * (c) 2012-2017 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage FilterPerimetersearch
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @copyright  2012-2017 The MetaModels team.
 * @license    https://github.com/MetaModels/filter_perimetersearch/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

/**
 * Plugins for geo resolving.
 */
$GLOBALS['METAMODELS']['filters']['perimetersearch']['resolve_class']['google_maps']      =
    'MetaModels\Filter\Helper\Perimetersearch\LookUp\Provider\GoogleMaps';
$GLOBALS['METAMODELS']['filters']['perimetersearch']['resolve_class']['open_street_maps'] =
    'MetaModels\Filter\Helper\Perimetersearch\LookUp\Provider\OpenStreetMaps';
