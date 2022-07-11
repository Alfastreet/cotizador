<?php
App::uses('AppController', 'Controller');
/**
 * Spares Controller
 *
 * @property Spare $Spare
 * @property PaginatorComponent $Paginator
 */
class SparesController extends AppController {

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
		$this->Spare->recursive = 0;
		$this->set('spares', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Spare->exists($id)) {
			throw new NotFoundException(__('Invalid spare'));
		}
		$options = array('conditions' => array('Spare.' . $this->Spare->primaryKey => $id));
		$this->set('spare', $this->Spare->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Spare->create();
			if ($this->Spare->save($this->request->data)) {
				$this->Flash->success(__('The spare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The spare could not be saved. Please, try again.'));
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
		if (!$this->Spare->exists($id)) {
			throw new NotFoundException(__('Invalid spare'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Spare->save($this->request->data)) {
				$this->Flash->success(__('The spare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The spare could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Spare.' . $this->Spare->primaryKey => $id));
			$this->request->data = $this->Spare->find('first', $options);
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
		$this->Spare->id = $id;
		if (!$this->Spare->exists()) {
			throw new NotFoundException(__('Invalid spare'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Spare->delete()) {
			$this->Flash->success(__('The spare has been deleted.'));
		} else {
			$this->Flash->error(__('The spare could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
