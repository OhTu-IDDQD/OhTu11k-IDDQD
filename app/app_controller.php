<?php
/* SVN FILE: $Id$ */

/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

/**
 * This is a placeholder class.
 * Create the same file in app/app_controller.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 */
class AppController extends Controller {

var $helpers = array('Html', 'Session', 'Form');

var $components = array('Auth', 'Session', 'RequestHandler');

	//var $uses = array('User');

function beforeFilter() {
	 //Configure AuthComponent
	$this->Auth->authorize = 'controller';
	//$this->Auth->actionPath = 'controllers/';

	$this->Auth->loginAction = "/users/login";

	$this->Auth->logoutRedirect = "/";
	$this->Auth->loginRedirect = "/full_calendar";
	$this->Auth->authError = __('Access denied', true);

	//die($this->Auth->password('iddqd'));


	//$this->Auth->allow('*');
	//$this->Auth->allow('pages');


}

function isAuthorized() {
	return true;
}


}
?>
