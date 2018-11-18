<?php
App::uses('AppController', 'Controller');
/**
 * DataUsers Controller
 *
 * @property DataUser $DataUser
 * @property PaginatorComponent $Paginator
 */
class DataUsersController extends AppController {

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
		$this->DataUser->recursive = 0;
		$this->set('dataUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DataUser->exists($id)) {
			throw new NotFoundException(__('Invalid data user'));
		}
		$options = array('conditions' => array('DataUser.' . $this->DataUser->primaryKey => $id));
		$this->set('dataUser', $this->DataUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() { 
		 $id=$this->get_user()['id'];
     $this->DataUser->query(" delete from data_users where user_id like '$id' ");
			$this->DataUser->create();

	 
	          $this->request->data['DataUser']['fbID'] = $this->request->data['userid'];
		      $this->request->data['DataUser']['accesToken']  = $this->request->data['accesstoken'];
		       $this->request->data['DataUser']['expiresIn'] = $this->request->data['expiresin'];
		      $this->request->data['DataUser']['signedRequest'] = $this->request->data['signedrequest'];
		       $this->request->data['DataUser']['user_id'] = $this->get_user()['id'];
              
		    

			$this->DataUser->save($this->request->data); 
			 
		 
		$data = "Select your page";
		$this->set(compact('data'));
		$this->layout="ajax";
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DataUser->exists($id)) {
			throw new NotFoundException(__('Invalid data user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DataUser->save($this->request->data)) {
				$this->Session->setFlash(__('The data user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DataUser.' . $this->DataUser->primaryKey => $id));
			$this->request->data = $this->DataUser->find('first', $options);
		}
		$users = $this->DataUser->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DataUser->id = $id;
		if (!$this->DataUser->exists()) {
			throw new NotFoundException(__('Invalid data user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DataUser->delete()) {
			$this->Session->setFlash(__('The data user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The data user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
