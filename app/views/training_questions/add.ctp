<div class="trainingQuestions form">
<?php echo $this->Form->create('TrainingQuestion');?>
	<fieldset>
		<legend><?php __('Add Training Question'); ?></legend>
	<?php
		echo $this->Form->input('course_id');
		echo $this->Form->input('question');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Training Questions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Training Answers', true), array('controller' => 'training_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training Answer', true), array('controller' => 'training_answers', 'action' => 'add')); ?> </li>
	</ul>
</div>