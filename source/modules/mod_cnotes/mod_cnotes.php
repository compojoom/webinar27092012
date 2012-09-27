<?php
/**
 * @author Daniel Dimitrov - compojoom.com
 * @date: 26.09.12
 *
 * @copyright  Copyright (C) 2008 - 2012 compojoom.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die('Restricted access');

JLoader::discover('modCnotes', dirname(__FILE__) );

//require_once dirname(__FILE__) . '/helper.php';

$items = modCnotesHelper::getList();

require JModuleHelper::getLayoutPath('mod_cnotes', $params->get('layout', 'default'));