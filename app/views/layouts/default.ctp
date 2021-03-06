<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('IDDQD Kalenteri'); ?>
		<?php //echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('iddqd');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>IDDQD Kalenteri</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
		
			<div id='menu'>
			<?php
			if ( $this->Session->read('Auth.User.id') ) {
				echo $this->Session->read('Auth.User.name');
				echo "<br />\n";
				echo $this->Session->read('Auth.User.student_id');
			}
			else __('Not logged in');
			?>
				<br />
				<br />
				<?php

					echo $this->Html->link(
						'Kalenteri', 
						array(
							'plugin' => 'full_calendar', 
							'controller' => 'full_calendar', 
							'action' => 'index'
						)
					);

					echo "<br />\n";

					echo $this->Html->link(
						'Kurssitarjonta', 
						array(
							'plugin' => false, 
							'controller' => 'courses', 
							'action' => 'index'
						)
					);

					echo "<br />\n";

					echo $this->Html->link(
						'Omat kurssit', 
						array(
							'plugin' => false, 
							'controller' => 'user_courses', 
							'action' => 'index'
						)
					);

					echo "<br />\n";

					/*echo $this->Html->link(
						'Omat kurssit', 
						array(
							'plugin' => false, 
							'controller' => 'user_events', 
							'action' => 'view'
						)
					);*/

					//echo "<br />\n";
					echo $this->Html->link(
						'Tapahtumat', 
						array(
							'plugin' => 'full_calendar', 
							'controller' => 'events', 
							'action' => 'index'
						)
					);

					echo "<br />\n";
					if ( $this->Session->read('Auth.User.id') ) {
						echo $this->Html->link(
							__('Logout', true), 
							array(
								'plugin' => false, 
								'controller' => 'users', 
								'action' => 'logout'
							)
					);
					}
				?>
			</div>

			<div id='view'>
			<?php echo $content_for_layout; ?>
			</div>
		
			<div style='clear: both;'>&nbsp;</div>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
