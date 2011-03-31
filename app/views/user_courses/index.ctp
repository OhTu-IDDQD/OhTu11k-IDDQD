<div class="userCourses index">
	<h2><?php __('User Courses');?></h2>

<?php
echo "<ul>\n";
echo "<li>".$this->Html->link(__('Export .csv', true), array('plugin' => false, 'controller' => 'user_courses', 'action' => 'index', 'ext' => 'csv'))."</li>\n";
echo "</ul>\n";
?>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('course_id');?></th>
			<th><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($userCourses as $userCourse):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($userCourse['User']['name'], array('controller' => 'users', 'action' => 'view', $userCourse['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userCourse['Course']['name'], array('controller' => 'courses', 'action' => 'view', $userCourse['Course']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $userCourse['UserCourse']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $userCourse['Course']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%', true)
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
		<li><?php echo $this->Html->link(__('New User Course', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
