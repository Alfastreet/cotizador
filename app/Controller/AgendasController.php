<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail','Network/Email');
/**
 * Agendas Controller
 *
 * @property Agenda $Agenda
 * @property PaginatorComponent $Paginator
 */
class AgendasController extends AppController {
	
	public $helpers = array('Js');
	public $components = array('Paginator','Flash');
	 public $paginate = array(
        'limit' => 5,
        'order' => array(
            'Agenda.id' => 'desc'
        )
    );
	
	
	

/**
 * Components
 *
 * @var array
 */
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Agenda->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('agendas', $this->Paginator->paginate());
		
		
		
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agenda->exists($id)) {
			throw new NotFoundException(__('Invalid agenda'));
		}
		$options = array('conditions' => array('Agenda.' . $this->Agenda->primaryKey => $id));
		$this->set('agenda', $this->Agenda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id) {
		if ($this->request->is('post')) {
			$this->Agenda->create();
			if ($this->Agenda->save($this->request->data)) {
				$this->Flash->success(__('The agenda has been saved.'));
				$id_agenda=$this->Agenda->getLastInsertID();
				$this->loadModel('Order');
				$this->Order->save(array('id' => $id, 'agenda_id' => $id_agenda));
				
				
				$agendalist=$this->Agenda->find('all', array('conditions' => array('Agenda.id' => $id_agenda)));
				$fecha=$agendalist[0]['Agenda']['date'];
				$franja=$agendalist[0]['Agenda']['timezone'];
				
				$this->loadModel('Order');
				$orderlist=$this->Order->find('all', array('conditions' => array('Order.id' => $id)));
				$id_casino_id=$orderlist[0]['Order']['casino_id'];
				
				$this->loadModel('Casino');
				$casinolist=$this->Casino->find('all', array('conditions' => array('Casino.id' => $id_casino_id)));
				$id_mail_pay=$casinolist[0]['Casino']['paymentemail'];
				
				
				$asunto= "Agenda de visita # ".$id." Alfastreet Colombia";
				$Email = new CakeEmail('alfa');
				$Email->viewVars(array('id' => $id,'fecha'=>$fecha,'franja'=>$franja));
				$Email->template('welcome_agenda', 'fancy_agenda');
				$Email->emailFormat('html');
				$Email->from(array('service@alfastreet.co' => 'Agenda de visita técnica'));
				$Email->to($id_mail_pay);
				$Email->subject($asunto);
				$Email->send('');
				
				
				
				
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The agenda could not be saved. Please, try again.'));
			}
		}
		$orders = $this->Agenda->Order->find('list');
		$this->set(compact('orders','id'));
		
		
				
				$this->Flash->success(__('The order has been saved.'));				
				
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Agenda->exists($id)) {
			throw new NotFoundException(__('Invalid agenda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agenda->save($this->request->data)) {
				$this->Flash->success(__('The agenda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The agenda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agenda.' . $this->Agenda->primaryKey => $id));
			$this->request->data = $this->Agenda->find('first', $options);
		}
		$orders = $this->Agenda->Order->find('list');
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
		$this->Agenda->id = $id;
		if (!$this->Agenda->exists()) {
			throw new NotFoundException(__('Invalid agenda'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Agenda->delete()) {
			$this->Flash->success(__('The agenda has been deleted.'));
		} else {
			$this->Flash->error(__('The agenda could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
