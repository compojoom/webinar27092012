<?php
/**
 * @author Daniel Dimitrov - compojoom.com
 * @date: 26.09.12
 *
 * @copyright  Copyright (C) 2008 - 2012 compojoom.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die('Restricted access');

class modCnotesHelper {

    public static function getList() {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select('*')->from('#__cnotes_notes');

        $db->setQuery($query);

        return $db->loadObjectList();
    }
}