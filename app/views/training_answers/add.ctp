<div class="trainingAnswers form">
<?php echo $this->Form->create('TrainingAnswer');?>
	<fieldset>
		<legend><?php __('Add Training Answer'); ?></legend>
	<?php
		echo $this->Form->input('question_id');
		echo $this->Form->input('answer');
		echo $this->Form->input('correct');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Training Answers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Training Questions', true), array('controller' => 'training_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training Question', true), array('controller' => 'training_questions', 'action' => 'add')); ?> </li>
	</ul>
</div>