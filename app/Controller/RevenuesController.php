<?php
App::uses('AppController', 'Controller');
/**
 * Revenues Controller
 *
 * @property Revenue $Revenue
 * @property PaginatorComponent $Paginator
 */
class RevenuesController extends AppController {

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
		$this->Revenue->recursive = 0;
		$this->set('revenues', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Revenue->exists($id)) {
			throw new NotFoundException(__('Invalid revenue'));
		}
		$options = array('conditions' => array('Revenue.' . $this->Revenue->primaryKey => $id));
		$this->set('revenue', $this->Revenue->find('first', $options));
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
			$this->Revenue->create();
			if ($this->Revenue->save($this->request->data)) {
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
		if (!$this->Revenue->exists($id)) {
			throw new NotFoundException(__('Invalid revenue'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Revenue->save($this->request->data)) {
				return $this->redirect(array('action' => 'index'));
			} else {
				return $this->redirect(array('action' => 'index'));

			}
		} else {
			$options = array('conditions' => array('Revenue.' . $this->Revenue->primaryKey => $id));
			$this->request->data = $this->Revenue->find('first', $options);
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
		$this->Revenue->id = $id;
		if (!$this->Revenue->exists()) {
			throw new NotFoundException(__('Invalid revenue'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Revenue->delete()) {
			$this->redirect(array('action'=>'index'));
		} else {
		}
		return $this->redirect(array('action' => 'index'));
	}
}
