<div class="userEvents index">
	<h2><?php __('User Events');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('course_id');?></th>
			<th><?php echo $this->Paginator->sort('event_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($userEvents as $userEvent):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $userEvent['UserEvent']['id']; ?>&nbsp;</td>
		<td><?php echo $userEvent['UserEvent']['course_id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userEvent['Event']['name'], array('controller' => 'events', 'action' => 'view', $userEvent['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userEvent['User']['name'], array('controller' => 'users', 'action' => 'view', $userEvent['User']['id'])); ?>
		</td>
		<td><?php echo $userEvent['UserEvent']['created']; ?>&nbsp;</td>
		<td><?php echo $userEvent['UserEvent']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $userEvent['UserEvent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $userEvent['UserEvent']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $userEvent['UserEvent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userEvent['UserEvent']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Event', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>