<?php
App::uses('AppController', 'Controller');
/**
 * Abouts Controller
 *
 * @property About $About
 * @property PaginatorComponent $Paginator
 */
class AboutsController extends AppController {

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
		$this->set('title_for_layout','Config data from signp up form');
		$this->layout="admin";
		$this->About->recursive = 0;
		$this->set('abouts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Invalid about'));
		}
		$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
		$this->set('about', $this->About->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		$this->set('title_for_layout','Add new data');
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->About->create();
			if ($this->About->save($this->request->data)) {
				return $this->redirect(array('action' => 'index')); 
			} else {
				return $this->redirect(array('action' => 'index'));

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
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Invalid about'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				return $this->redirect(array('action' => 'index'));
			} else {
				return $this->redirect(array('action' => 'index'));
				
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
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
		$this->About->id = $id;
		if (!$this->About->exists()) {
			throw new NotFoundException(__('Invalid about'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->About->delete()) {
				return $this->redirect(array('action' => 'index'));
			
		} else {
				return $this->redirect(array('action' => 'index'));
			
		}
		return $this->redirect(array('action' => 'index'));
	}
}
