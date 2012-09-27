<?php
/**
 * @author Daniel Dimitrov - compojoom.com
 * @date: 26.09.12
 *
 * @copyright  Copyright (C) 2008 - 2012 compojoom.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class cnotesViewNote extends JView {

    public function display() {

        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
//        $this->items = $this->get('Items');

//        var_dump($this->items);
        $this->addToolbar();
        parent::display();
    }

    public function addToolbar() {
        JToolBarHelper::title(JText::_('COM_CNOTES_EDIT_NOTE'), 'notes');

        JToolBarHelper::save('note.save');
        JToolBarHelper::cancel('note.cancel');
    }
}