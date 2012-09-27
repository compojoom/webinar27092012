<?php
/**
 * @author Daniel Dimitrov - compojoom.com
 * @date: 26.09.12
 *
 * @copyright  Copyright (C) 2008 - 2012 compojoom.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die('Restricted access');

?>

<form name="adminForm" id="adminForm" action="<?php echo JRoute::_('index.php?option=com_cnotes&view=note&id='. (int)$this->item->id); ?>" method="POST">

    <div class="width-60 ftlflt">
        <fieldset class="adminform">
            <ul class="adminformlist">
                <li>
                    <?php echo $this->form->getLabel('title'); ?>
                    <?php echo $this->form->getInput('title'); ?>
                </li>
                <li>
                    <?php echo $this->form->getLabel('note'); ?>
                    <?php echo $this->form->getInput('note'); ?>
                </li>
                <li>
                    <?php echo $this->form->getLabel('created_by'); ?>
                    <?php echo $this->form->getInput('created_by'); ?>
                </li>
            </ul>
        </fieldset>
    </div>

    <input name="task" value="" type="hidden" />
    <?php echo JHtml::_('form.token'); ?>
</form>