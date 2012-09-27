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

<form action="<?php JRoute::_('index.php?option=com_cnotes'); ?>" name="adminForm" id="adminForm" method="POST">
    <div class="filter-class fltflt">
        <label>search</label>
        <input type="text" name="filter_search" value="" title="search" />
        <button type="submit">submit</button>
    </div>
    <table>
        <thead>
            <th><input type="checkbox" name="checkall-toggle" value="" onclick="Joomla.checkAll(true);"</th>
            <th>title</th>
            <th>note</th>
        </thead>
        <tbody>
        <?php foreach ($this->items as $i => $item) : ?>
        <tr>
            <td><?php echo JHtml::_('grid.id', $i, $item->id); ?></td>
            <td>
                <a href="<?php echo JRoute::_('index.php?option=com_cnotes&task=note.edit&id='.$item->id); ?>">
                    <?php echo $item->title; ?>
                </a>
            </td>
            <td><?php echo $item->note; ?></td>
        </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

    <input type="hidden" name="boxchecked" value="0" />

    <input type="hidden" name="task" value="" />

</form>