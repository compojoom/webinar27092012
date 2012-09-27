<?php
/**
 * @author Daniel Dimitrov - compojoom.com
 * @date: 26.09.12
 *
 * @copyright  Copyright (C) 2008 - 2012 compojoom.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.modellist');


class cnotesModelNotes extends JModelList {

    protected function populateState($ordering = null, $direction = null) {
        $search = $this->getUserStateFromRequest('com_cnotes.filter.search', 'filter_search');
        $this->setState('filter.search', $search);
//

        parent::populateState('n.title', 'ASC');
    }


    protected function getListQuery() {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select('n.*');

        $query->from($db->quoteName('#__cnotes_notes') . ' AS ' . $db->quoteName('n'));


//        $input = JFactory::getApplication()->input;

//        $number = $input->getInt('number', 0);

//        $query->leftJoin('#__users AS u ON u.id = n.created_by');


        $search = $this->getState('filter.search');

        if($search) {
            $search = $db->quote('%'. $db->escape($search, true) . '%');
            $query->where('n.title LIKE ' . $search);
        }

//        var_dump($query->dump());

        return $query;
    }

}