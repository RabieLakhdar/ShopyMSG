<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */


class UsersController extends AppController {



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
	public function index() {
		$this->layout="admin";
		$this->set('title_for_layout','List members');

		$this->set('users', $this->User->find('all',array('conditions'=>array('role_id'=>1))));
	}

	public function admins() {
		$this->layout="admin";
		$this->set('title_for_layout','List admins');

		$this->set('users', $this->User->find('all',array('conditions'=>array('role_id'=>2))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**•
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout','Create your new Account');
		$this->layout="auth";
       $this->loadModel('User');

		if ($this->request->is('post')) {
            $this->User->create();
			$this->request->data['User']['password_recp'] = $this->request->data['User']['password'];

            $this->loadModel('Firststep');
            $this->Firststep->create();

           if ($this->User->save($this->request->data)) {

            $this->request->data['Firststep']['user_id']=$this->User->id;

            $this->Firststep->save($this->request->data);
                return $this->redirect(array('controller'=>'users','action' => 'login'));
			} else {
				return $this->redirect(array('controller'=>'users','action' => 'add'));

			}
		}

		$revenues = $this->User->Revenue->find('list');
		$abouts = $this->User->About->find('list');
		$roles = $this->User->Role->find('list');
		$this->set(compact('revenues', 'abouts', 'roles'));
	}

		public function add_admin() {
		$this->set('title_for_layout','Create new admin account');
		$this->layout="admin";
       $this->loadModel('User');

		if ($this->request->is('post')) {
            $this->User->create();
			$this->request->data['User']['password_recp'] = $this->request->data['User']['password'];
			$this->request->data['User']['company_name'] = "null";
			$this->request->data['User']['role_id'] = "2";
			$this->request->data['User']['about_id'] = "1";
			$this->request->data['User']['revenue_id'] = "1";

            $this->loadModel('Firststep');
            $this->Firststep->create();

           if ($this->User->save($this->request->data)) {

            $this->request->data['Firststep']['user_id']=$this->User->id;
            $this->request->data['Firststep']['statut']="1";

            $this->Firststep->save($this->request->data);
                return $this->redirect(array('controller'=>'users','action' => 'admins'));
			} else {
				return $this->redirect(array('controller'=>'users','action' => 'add_admin'));

			}
		}

		$revenues = $this->User->Revenue->find('list');
		$abouts = $this->User->About->find('list');
		$roles = $this->User->Role->find('list');
		$this->set(compact('revenues', 'abouts', 'roles'));
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout','Update your Account');
		$this->layout="admin";

		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				return $this->redirect(array('controller'=>'Pages','action' => 'dashboard'));
			} else {
				return $this->redirect(array('controller'=>'Pages','action' => 'dashboard'));

			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$revenues = $this->User->Revenue->find('list');
		$abouts = $this->User->About->find('list');
		$roles = $this->User->Role->find('list');
		$this->set(compact('revenues', 'abouts', 'roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->redirect(array('action' => 'index'));
		} else {
			$this->redirect(array('action' => 'index'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login(){
	$this->set('title_for_layout','Connect with your Account');
	$this->layout="auth";


	   if ($this->request->is('post')) {
        if ($this->Auth->login()) {
        	$id =$this->Auth->User('id');
            return $this->redirect(array('controller'=>'pages','action'=>'dashboard'));
        }
 
        else {  $this->set('message','Vos coordonnées sont incorrectes');}




    }
 }

 public function logout() {
    return $this->redirect($this->Auth->logout());
}

public function email_verif(){

		      $flage = $this->request->data['email'];

		      $users = $this->User->find('all',array('conditions'=>array('User.email'=>$flage)));
		      $this->set('users',$users);
			$this->layout="ajax";
		}

public function change_password($id = null) {
		$this->set('title_for_layout','Update your Account');
		$this->layout="admin";

		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {

  $password_recp=$this->get_user_password();
			if($password_recp == $this->request->data['User']['current']){
				$this->request->data['User']['password']=$this->request->data['User']['new_password'];
			$this->request->data['User']['password_recp']=$this->request->data['User']['new_password'];

			if ($this->User->save($this->request->data)) {
				return $this->redirect(array('controller'=>'Pages','action' => 'dashboard'));
			}

			}else{
				  $myAlert ="<div class='alert alert-secondary mb-2' role='alert'>
                      <strong>Support:</strong> error current password, your old password not changed.
                    </div>";
				  $this->set(compact('myAlert'));
			}



		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$revenues = $this->User->Revenue->find('list');
		$abouts = $this->User->About->find('list');
		$roles = $this->User->Role->find('list');
		$this->set(compact('revenues', 'abouts', 'roles'));
	}


}
