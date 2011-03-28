<div class="courses index">
	<h2><?php __('Courses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('teacher');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('p_start');?></th>
			<th><?php echo $this->Paginator->sort('p_end');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($courses as $course):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $course['Course']['id']; ?>&nbsp;</td>
		<td><?php echo $course['Course']['name']; ?>&nbsp;</td>
		<td><?php echo $course['Course']['teacher']; ?>&nbsp;</td>
		<td><?php echo $course['Course']['description']; ?>&nbsp;</td>
		<td><?php echo $course['Course']['p_start']; ?>&nbsp;</td>
		<td><?php echo $course['Course']['p_end']; ?>&nbsp;</td>
		<td><?php echo $course['Course']['modified']; ?>&nbsp;</td>
		<td><?php echo $course['Course']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $course['Course']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $course['Course']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $course['Course']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $course['Course']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Course', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Training Questions', true), array('controller' => 'training_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training Question', true), array('controller' => 'training_questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Events', true), array('controller' => 'user_events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Event', true), array('controller' => 'user_events', 'action' => 'add')); ?> </li>
	</ul>
</div>