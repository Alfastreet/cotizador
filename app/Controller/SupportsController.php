<?php
App::uses('AppController', 'Controller');
/**
 * Supports Controller
 *
 * @property Support $Support
 * @property PaginatorComponent $Paginator
 */
class SupportsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Support->recursive = 0;
		$this->set('supports', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Support->exists($id)) {
			throw new NotFoundException(__('Invalid support'));
		}
		$options = array('conditions' => array('Support.' . $this->Support->primaryKey => $id));
		$this->set('support', $this->Support->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Support->create();
			if ($this->Support->save($this->request->data)) {
				$this->Flash->success(__('The support has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The support could not be saved. Please, try again.'));
			}
		}
		$orders = $this->Support->Order->find('list');
		$this->set(compact('orders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Support->exists($id)) {
			throw new NotFoundException(__('Invalid support'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Support->save($this->request->data)) {
				$this->Flash->success(__('The support has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The support could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Support.' . $this->Support->primaryKey => $id));
			$this->request->data = $this->Support->find('first', $options);
		}
		$orders = $this->Support->Order->find('list');
		$this->set(compact('orders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Support->id = $id;
		if (!$this->Support->exists()) {
			throw new NotFoundException(__('Invalid support'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Support->delete()) {
			$this->Flash->success(__('The support has been deleted.'));
		} else {
			$this->Flash->error(__('The support could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
