<?php
/*
 * views/events/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>

<div class="events index">
	<h2><?php __('Events');?></h2>
<div>
<ul>
	<li><?php echo $this->Html->link(__('New event', true), array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'add')); ?></li>
	<li><?php echo $this->Html->link(__('Export as .csv', true), array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'index', 'ext' => 'csv')); ?></li>
</ul>
</div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('event_type_id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<?php /*<th><?php echo $this->Paginator->sort('status');?></th> */?>
			<th><?php echo $this->Paginator->sort('start');?></th>
            <?php /*<th><?php echo $this->Paginator->sort('all_day');?></th>*/?>
			<th class="actions"></th>
	</tr>
	<?php
	$i = 0;
	foreach ($events as $event):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($event['EventType']['name'], array('controller' => 'event_types', 'action' => 'view', $event['EventType']['id'])); ?>
		</td>
		<td><?php echo $this->Html->link($event['Event']['title'], array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'view', $event['Event']['id'])); ?></td>
		<?php /*<td><?php echo $event['Event']['status']; ?></td> */ ?>


<?php
	echo "<td>".date('Y-m-d H:i', strtotime($event['Event']['start']))."-".date('H:i', strtotime($event['Event']['end']))."</td>\n";

	echo "<td>".$this->Html->link(__('Poista', true), array('action' => 'delete', $event['Event']['id']))."</td>";
?>




<?php /*        <?php if($event['Event']['all_day'] == 0) { ?>
   		<td><?php echo $event['Event']['end']; ?></td>
        <?php } else { ?>
		<td>N/A</td>
        <?php } ?>
        <?php /*<td><?php if($event['Event']['all_day'] == 1) { echo "Yes"; } else { echo "No"; } ?>&nbsp;</td>*/?>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $event['Event']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $event['Event']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>

<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Event', true), array('plugin' => 'full_calendar', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Manage Event Types', true), array('plugin' => 'full_calendar', 'controller' => 'event_types', 'action' => 'index')); ?> </li>
		<li><li><?php echo $this->Html->link(__('View Calendar', true), array('plugin' => 'full_calendar', 'controller' => 'full_calendar')); ?></li>
	</ul>
</div>
