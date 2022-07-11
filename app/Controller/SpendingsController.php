<?php
App::uses('AppController', 'Controller');
/**
 * Spendings Controller
 *
 * @property Spending $Spending
 * @property PaginatorComponent $Paginator
 */
class SpendingsController extends AppController {

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
		$this->Spending->recursive = 0;
		$this->set('spendings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Spending->exists($id)) {
			throw new NotFoundException(__('Invalid spending'));
		}
		$options = array('conditions' => array('Spending.' . $this->Spending->primaryKey => $id));
		$this->set('spending', $this->Spending->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Spending->create();
			if ($this->Spending->save($this->request->data)) {
				$this->Flash->success(__('The spending has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The spending could not be saved. Please, try again.'));
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
		if (!$this->Spending->exists($id)) {
			throw new NotFoundException(__('Invalid spending'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Spending->save($this->request->data)) {
				$this->Flash->success(__('The spending has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The spending could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Spending.' . $this->Spending->primaryKey => $id));
			$this->request->data = $this->Spending->find('first', $options);
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
		$this->Spending->id = $id;
		if (!$this->Spending->exists()) {
			throw new NotFoundException(__('Invalid spending'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Spending->delete()) {
			$this->Flash->success(__('The spending has been deleted.'));
		} else {
			$this->Flash->error(__('The spending could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
