<div class="trainingAnswers index">
	<h2><?php __('Training Answers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('question_id');?></th>
			<th><?php echo $this->Paginator->sort('answer');?></th>
			<th><?php echo $this->Paginator->sort('correct');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($trainingAnswers as $trainingAnswer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $trainingAnswer['TrainingAnswer']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trainingAnswer['TrainingQuestion']['question'], array('controller' => 'training_questions', 'action' => 'view', $trainingAnswer['TrainingQuestion']['id'])); ?>
		</td>
		<td><?php echo $trainingAnswer['TrainingAnswer']['answer']; ?>&nbsp;</td>
		<td><?php echo $trainingAnswer['TrainingAnswer']['correct']; ?>&nbsp;</td>
		<td><?php echo $trainingAnswer['TrainingAnswer']['created']; ?>&nbsp;</td>
		<td><?php echo $trainingAnswer['TrainingAnswer']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $trainingAnswer['TrainingAnswer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $trainingAnswer['TrainingAnswer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $trainingAnswer['TrainingAnswer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trainingAnswer['TrainingAnswer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Training Answer', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Training Questions', true), array('controller' => 'training_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training Question', true), array('controller' => 'training_questions', 'action' => 'add')); ?> </li>
	</ul>
</div>