<div class="courses view">
<h2><?php  __('Course');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teacher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['teacher']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['start']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['end']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course', true), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Course', true), array('action' => 'delete', $course['Course']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Events', true), array('controller' => 'course_events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Event', true), array('controller' => 'course_events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Training Questions', true), array('controller' => 'training_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training Question', true), array('controller' => 'training_questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class='related'>
	<h3><?php __('Course Events');?></h3>

	<div>
		<?php
			$days = array( 2 => __('Monday', true), 3 => __('Tuesday', true), 4 => __('Wednesday', true), 5 => __('Thursday', true), 6 => __('Friday', true), 7 => __('Saturday', true), 1 => __('Sunday', true));
			echo $form->create('CourseEvent', array('action' => 'add'));
			echo "<fieldset>\n";
			echo "<legend>".__('New Course Event', true)."</legend>\n";
			echo $form->input('event_type_id', array('options' => array('1' => __('Lecture', true), 2 => __('Exercise Group', true) ) ));
			echo $form->input('course_id', array('value' => $course['Course']['id'], 'type' => 'hidden'));
			echo $form->input('day', array('options' => $days));
			echo $form->input('start', array('timeFormat' => 24));
			echo $form->input('end', array('timeFormat' => 24));
			echo "</fieldset>\n";
			echo $form->end(__('Submit', true));
		?>
	</div>



	<?php if (!empty($course['CourseEvent'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Course Id'); ?></th>
		<th><?php __('Event Type Id'); ?></th>
		<th><?php __('Day'); ?></th>
		<th><?php __('Start'); ?></th>
		<th><?php __('End'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['CourseEvent'] as $courseEvent):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $courseEvent['id'];?></td>
			<td><?php echo $courseEvent['course_id'];?></td>
			<td><?php echo $courseEvent['event_type_id'];?></td>
			<td><?php echo $courseEvent['day'];?></td>
			<td><?php echo $courseEvent['start'];?></td>
			<td><?php echo $courseEvent['end'];?></td>
			<td><?php echo $courseEvent['created'];?></td>
			<td><?php echo $courseEvent['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'course_events', 'action' => 'view', $courseEvent['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'course_events', 'action' => 'edit', $courseEvent['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'course_events', 'action' => 'delete', $courseEvent['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $courseEvent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<?php /*
<div class="related">
	<h3><?php __('Related Training Questions');?></h3>
	<?php if (!empty($course['TrainingQuestion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Course Id'); ?></th>
		<th><?php __('Question'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['TrainingQuestion'] as $trainingQuestion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $trainingQuestion['id'];?></td>
			<td><?php echo $trainingQuestion['course_id'];?></td>
			<td><?php echo $trainingQuestion['question'];?></td>
			<td><?php echo $trainingQuestion['created'];?></td>
			<td><?php echo $trainingQuestion['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'training_questions', 'action' => 'view', $trainingQuestion['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'training_questions', 'action' => 'edit', $trainingQuestion['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'training_questions', 'action' => 'delete', $trainingQuestion['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trainingQuestion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Training Question', true), array('controller' => 'training_questions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
*/ ?>
