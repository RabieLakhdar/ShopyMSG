<?php
App::uses('AppController', 'Controller');
/**
 * Fbpages Controller
 *
 * @property Fbpage $Fbpage
 * @property PaginatorComponent $Paginator
 */
class FbpagesController extends AppController {

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
		$this->Fbpage->recursive = 0;
		$this->set('fbpages', $this->Paginator->paginate());
		$this->set('title_for_layout','My Facebook Page Config');
		$this->layout='admin';
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fbpage->exists($id)) {
			throw new NotFoundException(__('Invalid fbpage'));
		}
		$options = array('conditions' => array('Fbpage.' . $this->Fbpage->primaryKey => $id));
		$this->set('fbpage', $this->Fbpage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {


      $id=$this->get_user_id();
      $this->Fbpage->query(" delete from fbpages where user_id like '$id' ");
      $this->Fbpage->create();



            $this->request->data['Fbpage']['pagename'] = $this->request->data['pagename'];
            $this->request->data['Fbpage']['pageid'] = $this->request->data['pageid'];
            $this->request->data['Fbpage']['user_id'] = $this->get_user_id();



      $this->Fbpage->save($this->request->data);


    $data = "All well, go to next step";
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
		if (!$this->Fbpage->exists($id)) {
			throw new NotFoundException(__('Invalid fbpage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fbpage->save($this->request->data)) {
				$this->Session->setFlash(__('The fbpage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fbpage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fbpage.' . $this->Fbpage->primaryKey => $id));
			$this->request->data = $this->Fbpage->find('first', $options);
		}
		$users = $this->Fbpage->User->find('list');
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
		$this->Fbpage->id = $id;
		if (!$this->Fbpage->exists()) {
			throw new NotFoundException(__('Invalid fbpage'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Fbpage->delete()) {
			$this->Session->setFlash(__('The fbpage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fbpage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
