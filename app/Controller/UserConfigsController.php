<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */


class UserConfigsController extends AppController {



public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow(array('add','email_verif','login'));

}


/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function add() {

		$this->loadModel('User');
		$this->User->query("insert into user_configs values ('18','myconfig')");
		$this->layout="ajax";

	}



}
