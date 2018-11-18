<?php
App::uses('AppController', 'Controller');
/**
 * Firststeps Controller
 *
 * @property Firststep $Firststep
 * @property PaginatorComponent $Paginator
 */
class FirststepsController extends AppController {

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
		$this->Firststep->recursive = 0;
		$this->set('firststeps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Firststep->exists($id)) {
			throw new NotFoundException(__('Invalid firststep'));
		}
		$options = array('conditions' => array('Firststep.' . $this->Firststep->primaryKey => $id));
		$this->set('firststep', $this->Firststep->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Firststep->create();
			if ($this->Firststep->save($this->request->data)) {
				$this->Session->setFlash(__('The firststep has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The firststep could not be saved. Please, try again.'));
			}
		}
		$users = $this->Firststep->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Firststep->exists($id)) {
			throw new NotFoundException(__('Invalid firststep'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Firststep->save($this->request->data)) {
				$this->Session->setFlash(__('The firststep has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The firststep could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Firststep.' . $this->Firststep->primaryKey => $id));
			$this->request->data = $this->Firststep->find('first', $options);
		}
		$users = $this->Firststep->User->find('list');
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
		$this->Firststep->id = $id;
		if (!$this->Firststep->exists()) {
			throw new NotFoundException(__('Invalid firststep'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Firststep->delete()) {
			$this->Session->setFlash(__('The firststep has been deleted.'));
		} else {
			$this->Session->setFlash(__('The firststep could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
