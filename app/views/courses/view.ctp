<?php
$days = array( 2 => __('Monday', true), 3 => __('Tuesday', true), 4 => __('Wednesday', true), 5 => __('Thursday', true), 6 => __('Friday', true), 7 => __('Saturday', true), 1 => __('Sunday', true));
$event_types = array('1' => __('Lecture', true), 2 => __('Exercise Group', true) );

?>


<div class="courses view">
<h2><?php  __($course['Course']['name']);?> (<?php echo $course['Course']['id']; ?>)</h2>
<?php
	echo $html->link(
		__('Edit Course', true), 
		array(
			'plugin' => false, 
			'controller' => 'courses', 
			'action' => 'edit', 
			$course['Course']['id']
		)
	);
	echo "<div>".date('d.m.Y', strtotime($course['Course']['start']))." - ".date('d.m.Y', strtotime($course['Course']['end']))."</div>\n";


	echo "<dl>\n";
	echo "<dt>".__('Teacher')."</dt>\n";
	echo "<dd>\n";
	echo $course['Course']['teacher'];
	echo "</dd>\n";
	echo "</dl>\n";


	echo "<div style='border: 1px outset grey; margin-top: 15px;'>\n";
	echo str_replace("\n", "<br />", $course['Course']['description']);
	echo "</div>\n";

?>

</div>
<?php /*
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
*/ ?> 

<?php

if ( !empty($lectures) ) {
	echo "<div class='related'>\n";
	echo "<h3>".__('Lectures', true)."</h3>\n";

	echo "<table cellpadding='0' cellspacing='0'>\n";
	echo "<tr>\n";
	echo "<th>".__('Event Type Name', true)."</th>\n";
	echo "<th>".__('Day', true)."</th>\n";
	echo "<th>".__('Time', true)."</th>\n";
	echo "<th>".__('Actions', true)."</th>\n";
	echo "</tr>\n";

	$i = 0;
	foreach($lectures as $lecture) {
		$lecture = $lecture['CourseEvent'];
		if ( $i++ % 2 == 0 ) echo "<tr class='altrow'>";
		else echo "<tr>";

		echo "<td>".$event_types[$lecture['event_type_id']]."</td>";
		echo "<td>".$days[$lecture['day']]."</td>";
		echo "<td>".date('H:i', strtotime($lecture['start']))." - ".date('H:i', strtotime($lecture['end']))."</td>";
		echo "<td>";
		echo $this->Html->link(__('View', true), array('controller' => 'course_events', 'action' => 'view', $lecture['id']));
		echo $this->Html->link(__('Edit', true), array('controller' => 'course_events', 'action' => 'edit', $lecture['id']));
		echo $this->Html->link(__('Delete', true), array('controller' => 'course_events', 'action' => 'delete', $lecture['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lecture['id']));
		echo "</td>";

		echo "</tr>";
	}

	echo "</table>\n";

	echo "</div>\n";
}


if ( !empty($exercise_groups) ) {
	echo "<div class='related'>\n";
	echo "<h3>".__('Exercise Groups', true)."</h3>\n";
?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Event Type Name'); ?></th>
		<th><?php __('Day'); ?></th>
		<th><?php __('Time'); ?></th>
		<th><?php __('Actions');?></th>
	</tr>

<?php

	$i = 0;
	foreach($exercise_groups as $exercise_group) {
		$exercise_group = $exercise_group['CourseEvent'];
		if ( $i++ % 2 == 0 ) echo "<tr class='altrow'>";
		else echo "<tr>";

		echo "<td>".$event_types[$exercise_group['event_type_id']]."</td>";
		echo "<td>".$days[$exercise_group['day']]."</td>";
		echo "<td>".date('H:i', strtotime($exercise_group['start']))." - ".date('H:i', strtotime($exercise_group['end']))."</td>";
		echo "<td>";
		echo $this->Html->link(__('View', true), array('controller' => 'course_events', 'action' => 'view', $exercise_group['id']));
		echo $this->Html->link(__('Edit', true), array('controller' => 'course_events', 'action' => 'edit', $exercise_group['id']));
		echo $this->Html->link(__('Delete', true), array('controller' => 'course_events', 'action' => 'delete', $exercise_group['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $exercise_group['id']));
		echo "</td>";

		echo "</tr>";
	}

	echo "</table>\n";


	echo "</div>\n";
}

?>


<div class='related'>
	<h3><?php __('Course Events');?></h3>

	<div>
		<?php
			echo $form->create('CourseEvent', array('action' => 'add'));
			echo "<fieldset>\n";
			echo "<legend>".__('New Course Event', true)."</legend>\n";
			echo $form->input('event_type_id', array('options' => $event_types ));
			echo $form->input('course_id', array('value' => $course['Course']['id'], 'type' => 'hidden'));
			echo $form->input('day', array('options' => $days));
			echo $form->input('start', array('timeFormat' => 24));
			echo $form->input('end', array('timeFormat' => 24));
			echo "</fieldset>\n";
			echo $form->end(__('Submit', true));
		?>
	</div>
</div>


<?php /*
	<?php if (!empty($course['CourseEvent'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Type Id'); ?></th>
		<th><?php __('Day'); ?></th>
		<th><?php __('Start'); ?></th>
		<th><?php __('End'); ?></th>
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
			<td><?php echo $event_types[$courseEvent['event_type_id']];?></td>
			<td><?php echo $days[$courseEvent['day']];?></td>
			<td><?php echo $courseEvent['start'];?></td>
			<td><?php echo $courseEvent['end'];?></td>

			<td class="aactions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'course_events', 'action' => 'view', $courseEvent['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'course_events', 'action' => 'edit', $courseEvent['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'course_events', 'action' => 'delete', $courseEvent['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $courseEvent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>

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
