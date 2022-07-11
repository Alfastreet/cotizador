<?php
App::uses('AppController', 'Controller');
/**
 * Casinos Controller
 *
 * @property Casino $Casino
 * @property PaginatorComponent $Paginator
 */
class CasinosController extends AppController {

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
		$this->Casino->recursive = 0;
		$this->set('casinos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Casino->exists($id)) {
			throw new NotFoundException(__('Invalid casino'));
		}
		$options = array('conditions' => array('Casino.' . $this->Casino->primaryKey => $id));
		$this->set('casino', $this->Casino->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Casino->create();
			if ($this->Casino->save($this->request->data)) {
				$this->Flash->success(__('The casino has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The casino could not be saved. Please, try again.'));
			}
		}
		$cities = $this->Casino->City->find('list');
		$companies = $this->Casino->Company->find('list');
		$owners = $this->Casino->Owner->find('list');
		$states = $this->Casino->State->find('list');
		$this->set(compact('cities', 'companies', 'owners', 'states'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Casino->exists($id)) {
			throw new NotFoundException(__('Invalid casino'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Casino->save($this->request->data)) {
				$this->Flash->success(__('The casino has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The casino could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Casino.' . $this->Casino->primaryKey => $id));
			$this->request->data = $this->Casino->find('first', $options);
		}
		$cities = $this->Casino->City->find('list');
		$companies = $this->Casino->Company->find('list');
		$owners = $this->Casino->Owner->find('list');
		$states = $this->Casino->State->find('list');
		$this->set(compact('cities', 'companies', 'owners', 'states'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Casino->id = $id;
		if (!$this->Casino->exists()) {
			throw new NotFoundException(__('Invalid casino'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Casino->delete()) {
			$this->Flash->success(__('The casino has been deleted.'));
		} else {
			$this->Flash->error(__('The casino could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
