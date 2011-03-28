<div class="trainingQuestions index">
	<h2><?php __('Training Questions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('course_id');?></th>
			<th><?php echo $this->Paginator->sort('question');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($trainingQuestions as $trainingQuestion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $trainingQuestion['TrainingQuestion']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainingQuestion['Course']['name'], array('controller' => 'courses', 'action' => 'view', $trainingQuestion['Course']['id'])); ?>
		</td>
		<td><?php echo $trainingQuestion['TrainingQuestion']['question']; ?>&nbsp;</td>
		<td><?php echo $trainingQuestion['TrainingQuestion']['created']; ?>&nbsp;</td>
		<td><?php echo $trainingQuestion['TrainingQuestion']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $trainingQuestion['TrainingQuestion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $trainingQuestion['TrainingQuestion']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $trainingQuestion['TrainingQuestion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trainingQuestion['TrainingQuestion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Training Question', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Training Answers', true), array('controller' => 'training_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training Answer', true), array('controller' => 'training_answers', 'action' => 'add')); ?> </li>
	</ul>
</div>