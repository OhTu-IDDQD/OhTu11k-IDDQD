<div class="trainingQuestions view">
<h2><?php  __('Training Question');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trainingQuestion['TrainingQuestion']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($trainingQuestion['Course']['name'], array('controller' => 'courses', 'action' => 'view', $trainingQuestion['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trainingQuestion['TrainingQuestion']['question']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trainingQuestion['TrainingQuestion']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trainingQuestion['TrainingQuestion']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Training Question', true), array('action' => 'edit', $trainingQuestion['TrainingQuestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Training Question', true), array('action' => 'delete', $trainingQuestion['TrainingQuestion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trainingQuestion['TrainingQuestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Training Questions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training Question', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Training Answers', true), array('controller' => 'training_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training Answer', true), array('controller' => 'training_answers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Training Answers');?></h3>
	<?php if (!empty($trainingQuestion['TrainingAnswer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Question Id'); ?></th>
		<th><?php __('Answer'); ?></th>
		<th><?php __('Correct'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($trainingQuestion['TrainingAnswer'] as $trainingAnswer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $trainingAnswer['id'];?></td>
			<td><?php echo $trainingAnswer['question_id'];?></td>
			<td><?php echo $trainingAnswer['answer'];?></td>
			<td><?php echo $trainingAnswer['correct'];?></td>
			<td><?php echo $trainingAnswer['created'];?></td>
			<td><?php echo $trainingAnswer['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'training_answers', 'action' => 'view', $trainingAnswer['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'training_answers', 'action' => 'edit', $trainingAnswer['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'training_answers', 'action' => 'delete', $trainingAnswer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trainingAnswer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Training Answer', true), array('controller' => 'training_answers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
