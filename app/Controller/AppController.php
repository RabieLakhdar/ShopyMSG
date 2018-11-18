<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'pages',
                'action' => 'login'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'index'

            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish',
                    'fields' => array('username' => 'email')
                )
            )
        )
    );


   public function beforeFilter(){


		 $this->set('get_user_password',$this->get_user_password());
		 $this->set('get_user_statut',$this->get_user_statut());
		 $this->set('get_user_id',$this->get_user_id());
$this->set('get_user',$this->get_user());
$this->set('get_statut_steps',$this->get_statut_steps());
$this->set('get_title_app',$this->get_title_app());

}

function get_user_password(){


 $content =null;
	 if($this->Auth->user()){

		 $content = $this->Auth->User("password_recp");
	 }
	 return $content;
}

function get_user_statut(){


 $content =null;
 $this->loadModel("User");
	 if($this->Auth->user()){

		 $id = $this->Auth->User("id");
		 $content = $this->User->query("select statut from firststeps where user_id = '$id'");
	 }
	 return $content[0]["firststeps"]["statut"];
}

     function get_user(){


      $content =null;
        if($this->Auth->user()){

          $content = $this->Auth->User();
        }
        return $content;
    }

		function get_user_id(){


		 $content =null;
			 if($this->Auth->user()){

				 $content = $this->Auth->User('id');
			 }
			 return $content;
	 }

    function get_statut_steps(){

         $content = null;
				 $this->loadModel("User");

          if($this->Auth->user()){

              $this->loadModel('User');
                $id = $this->Auth->User('id');
                 $content = $this->User->query("SELECT firststeps.statut FROM `users`inner join firststeps on users.id = firststeps.user_id where users.id like '$id'");

          }
          return $content;
    }

    function get_title_app(){
      $this->loadModel('Dynamique');
      return $this->Dynamique->find('first',array('order' => array('id' => 'DESC')));

    }
}
