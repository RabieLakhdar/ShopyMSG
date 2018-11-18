<?php
App::uses('AppController', 'Controller');
/**
 * Dynamiques Controller
 *
 * @property Dynamique $Dynamique
 * @property PaginatorComponent $Paginator
 */
class DynamiquesController extends AppController {

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
		$this->Dynamique->recursive = 0;
		$this->set('dynamiques', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dynamique->exists($id)) {
			throw new NotFoundException(__('Invalid dynamique'));
		}
		$options = array('conditions' => array('Dynamique.' . $this->Dynamique->primaryKey => $id));
		$this->set('dynamique', $this->Dynamique->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout','Change dynamique Title');
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Dynamique->create();
			if ($this->Dynamique->save($this->request->data)) {
				return $this->redirect(array('controller' => 'Pages','action' => 'dashboard'));
			} else {
				return $this->redirect(array('controller' => 'Pages','action' => 'dashboard'));

			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dynamique->exists($id)) {
			throw new NotFoundException(__('Invalid dynamique'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dynamique->save($this->request->data)) {
				$this->Session->setFlash(__('The dynamique has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dynamique could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dynamique.' . $this->Dynamique->primaryKey => $id));
			$this->request->data = $this->Dynamique->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dynamique->id = $id;
		if (!$this->Dynamique->exists()) {
			throw new NotFoundException(__('Invalid dynamique'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dynamique->delete()) {
			$this->Session->setFlash(__('The dynamique has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dynamique could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
