<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */



class PagesController extends AppController {
public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow(array('redirect_web'));
}

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
  //$statut = $this->get_statut_steps()[0]['firststeps']['statut'];
/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
public function dashboard(){
	$this->set('title_for_layout','Dashboard');
	$this->layout="admin";

 //debug($this->get_user_statut()); die;
   if($this->get_user_statut() == '0'){
 return $this->redirect(array('controller'=>'pages','action'=>'steps'));
   }

}

public function index(){
	$this->set('title_for_layout','Retail Marketing Automation for Facebook Messenger');
	$this->layout="site";
  return $this->redirect(array('controller'=>'users','action'=>'login'));
}

public function login(){
	$this->set('title_for_layout','Connect yourself');
	$this->layout="auth";
}

public function steps(){
	$this->set('title_for_layout','Steps to connect yourself');
	$this->layout="admin";
}

public function redirect_web(){
  return $this->redirect("https://shopymsg.com");

}

}
