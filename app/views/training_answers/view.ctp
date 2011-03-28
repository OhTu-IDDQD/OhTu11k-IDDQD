<div class="trainingAnswers view">
<h2><?php  __('Training Answer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trainingAnswer['TrainingAnswer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Training Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($trainingAnswer['TrainingQuestion']['question'], array('controller' => 'training_questions', 'action' => 'view', $trainingAnswer['TrainingQuestion']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Answer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trainingAnswer['TrainingAnswer']['answer']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Correct'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trainingAnswer['TrainingAnswer']['correct']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trainingAnswer['TrainingAnswer']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trainingAnswer['TrainingAnswer']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Training Answer', true), array('action' => 'edit', $trainingAnswer['TrainingAnswer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Training Answer', true), array('action' => 'delete', $trainingAnswer['TrainingAnswer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trainingAnswer['TrainingAnswer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Training Answers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training Answer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Training Questions', true), array('controller' => 'training_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training Question', true), array('controller' => 'training_questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
