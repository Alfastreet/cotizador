<?php
App::uses('AppController','Controller');
App::uses('CakeEmail','Network/Email');
App::uses('Security', 'Utility'); 

/**
 * Orders Controller
 *
 * @property Order $Order
 * @property PaginatorComponent $Paginator
 */
class OrdersController extends AppController {
	
/**
 * Components
 *
 * @var array
 */

	public $helpers = array('Js');
	public $components = array('Paginator');
	 public $paginate = array(
        'limit' => 5,
        'order' => array(
            'Order.id' => 'desc'
        )
    );

/**
 * index method
 *
 * @return void
 
 */
 
 
 
 
  	public function confirmorder($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
				$this->Order->save(array('id' => $id, 'approved' => 1  ));                
							
				return $this->redirect(array('controller'=>'orders','action' => 'confirm_order'));
	}
 
 
 
 
 
 
 
 	public function open($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is(array('post', 'put'))) {
				if ($this->Order->save($this->request->data)) {
				$id_correo2=$this->Order-> getInsertID();	
				$id_correo=$this->Order->find('first',array('Order'=>'id ASC')) ;
				$id_correo2=$id_correo['Order']['id'];
				
				$orderlist=$this->Order->find('all', array('conditions' => array('Order.id' => $id)));
				$id_casino_id=$orderlist[0]['Order']['casino_id'];
				$id_technician=$orderlist[0]['Order']['technical_id'];
				$user_technicians = $this->Order->User->find('first', array('conditions' => array('User.id' => $id_technician)));
				//debug($user_technicians);
                                $user_tech_final=$user_technicians['User']['name'];
				$this->Order->save(array('id' => $id, 'technical_name' => $user_tech_final  ));
               
				$this->loadModel('Casino');
				$casinolist=$this->Casino->find('all', array('conditions' => array('Casino.id' => $id_casino_id)));
				$id_mail_pay=$casinolist[0]['Casino']['paymentemail'];
				
				$asunto= "Autorización de Servicio # ".$id." Alfastreet Colombia";
				$Email = new CakeEmail('alfa');
				$Email->viewVars(array('id' => $id));
				$Email->template('welcome', 'fancy');
				$Email->emailFormat('html');
				$Email->from(array('service@alfastreet.co' => 'Autorizaciones de Servicio'));
				$Email->to($id_mail_pay);
				$Email->subject($asunto);
				$Email->send('');
				
					
				return $this->redirect(array('action' => 'index'));
				
				
			} else {
				$this->Flash->error(__('The order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$datos=$this->request->data = $this->Order->find('first', $options);
			
			//debug($datos);
		}
		

		
		$machines = $this->Order->Machine->find('list');
		$parts = $this->Order->Part->find('list');
		$services = $this->Order->Service->find('list');
		$users = $this->Order->User->find('list');
		$technical = $this->Order->User->find('list', array('conditions' => array('User.rol_id' => 1)));
		$spendings = $this->Order->Spending->find('list');
		$casinos = $this->Order->Casino->find('list');
		$companies = $this->Order->Company->find('list');
		$owners = $this->Order->Owner->find('list');
		$this->set(compact('machines', 'parts', 'services', 'users', 'spendings', 'casinos', 'companies', 'owners','datos','technical'));

	}
 
 
 
		public function index() {
				$this->Order->recursive = 0;
				$this->Paginator->settings = $this->paginate;
				$this->set('orders', $this->Paginator->paginate());				
				$this->loadModel('Visit');                        			
				$visita = $this->Visit->find('all');
				$this->set(compact('visita'));
			}
	
		public function lista_municipios($id = null) {
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Order->save($this->request->data)) {
				
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
		//debug($id);
		
		
		$casinos = $this->Order->Casino->find('all', array('conditions' => array('Casino.company_id' => $id)));
		
		
		$machines_company = $this->Order->Machine->find('all', array('conditions' => array('Machine.company_id' => $id)));
		
		$this->set(compact('casinos','machines_company'));
		//return $this->redirect(array('controller' => 'orders', 'action' => 'add'));	 
	}
	
	
	public function service() {
		if ($this->request->is('post')) {
			$this->Order->create();
			if ($this->Order->save($this->request->data)) {
			
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The order could not be saved. Please, try again.'));
			}
		}
		$machines = $this->Order->Machine->find('list');
		$machines = $this->Order->Visit->find('list');
		$parts = $this->Order->Part->find('list');
		$services = $this->Order->Service->find('list');
		$users = $this->Order->User->find('list');
		$spendings = $this->Order->Spending->find('list');
		$casinos = $this->Order->Casino->find('list');
		$companies = $this->Order->Company->find('list');
		$owners = $this->Order->Owner->find('list');
		$this->set(compact('machines', 'parts', 'services', 'users', 'spendings', 'casinos', 'companies', 'owners'));
	}

	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->set('order', $this->Order->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id) {
		if ($this->request->is('post')) {
			$service_id=$this->request->data['Order']['service_id'];
			$this->Order->create();
			if ($this->Order->save($this->request->data)) {
				
				if($service_id == '4'){
					    $id_order = $this->Order->getLastInsertId();//saco el ultimo registro de la tabla orders
						return $this->redirect(array('controller' => 'parts','action' => 'add','?' => array('order_id' => $id_order,'id_machine' => $id_machine )));// si es un repuesto redirecciono a parts	
			    	}else{
						  return $this->redirect(array('controller'=>'orders','action' => 'confirm'));
				         }
			} else {
				

			}
		}else
		{
			//echo $id;
			
		}
		$machines = $this->Order->Machine->find('all', array('conditions' => array('Machine.id' => $id)));
		$machines[0]['Machine']['owner_id'];
		$company_select=$machines[0]['Machine']['company_id'];
		$casino_select=$machines[0]['Machine']['casino_id'];
		$casinos = $this->Order->Casino->find('all', array('conditions' => array('Casino.id' => $casino_select)));
		$companies = $this->Order->Company->find('all', array('conditions' => array('Company.id' => $company_select)));
		//debug($machines);
		
		
		$parts = $this->Order->Part->find('list');
		$services = $this->Order->Service->find('list');
		$users = $this->Order->User->find('list');
		$spendings = $this->Order->Spending->find('list');
		
		
		
		$owners = $this->Order->Owner->find('list');
		$this->set(compact('machines', 'parts', 'services', 'users', 'spendings', 'casinos', 'companies', 'owners'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Order->save($this->request->data)) {
			
				return $this->redirect(array('action' => 'index'));
			} else {
				
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
		$machines = $this->Order->Machine->find('list');
		$parts = $this->Order->Part->find('list');
		$services = $this->Order->Service->find('list');
		$users = $this->Order->User->find('list');
		$spendings = $this->Order->Spending->find('list');
		$casinos = $this->Order->Casino->find('list');
		$companies = $this->Order->Company->find('list');
		$owners = $this->Order->Owner->find('list');
		$this->set(compact('machines', 'parts', 'services', 'users', 'spendings', 'casinos', 'companies', 'owners'));
	}
	

	/**
 * technical
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	
	public function technical($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Order->save($this->request->data)) {
				
				return $this->redirect(array('action' => 'index'));
			} else {
				
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
		$machines = $this->Order->Machine->find('list');
		$parts = $this->Order->Part->find('list');
		$services = $this->Order->Service->find('list');
		$users = $this->Order->User->find('list');
		$spendings = $this->Order->Spending->find('list');
		$casinos = $this->Order->Casino->find('list');
		$companies = $this->Order->Company->find('list');
		$owners = $this->Order->Owner->find('list');
		$this->set(compact('machines', 'parts', 'services', 'users', 'spendings', 'casinos', 'companies', 'owners'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Order->delete()) {
			
		} else {
			
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function confirm() 
						{}
	public function finish() 
						{}
	public function confirm_order() 
								{}
	public function send() 
	{}
	public function transfer_confirm() 
	{}
	
	public function transfer($id = null) {
	if (!$this->Order->exists($id)) {
		throw new NotFoundException(__('Invalid order'));
	}
	if ($this->request->is(array('post', 'put'))) {
		if ($this->Order->save($this->request->data)) {
			
			return $this->redirect(array('action' => 'transfer_confirm'));
		} else {
			
		}
	} else {
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->request->data = $this->Order->find('first', $options);
	}
	$machines = $this->Order->Machine->find('list');
	$parts = $this->Order->Part->find('list');
	$services = $this->Order->Service->find('list');
	$users = $this->Order->User->find('list');
	$spendings = $this->Order->Spending->find('list');
	$casinos = $this->Order->Casino->find('list');
	$companies = $this->Order->Company->find('list');
	$owners = $this->Order->Owner->find('list');
	$this->set(compact('machines', 'parts', 'services', 'users', 'spendings', 'casinos', 'companies', 'owners'));
}

	public function transfer_accounting($id = null) {
	if (!$this->Order->exists($id)) {
		throw new NotFoundException(__('Invalid order'));
	}
	if ($this->request->is(array('post', 'put'))) {
		if ($this->Order->save($this->request->data)) {
			
			return $this->redirect(array('action' => 'accounting'));
		} else {
			
		}
	} else {
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->request->data = $this->Order->find('first', $options);
	}
	$machines = $this->Order->Machine->find('list');
	$parts = $this->Order->Part->find('list');
	$services = $this->Order->Service->find('list');
	$users = $this->Order->User->find('list');
	$spendings = $this->Order->Spending->find('list');
	$casinos = $this->Order->Casino->find('list');
	$companies = $this->Order->Company->find('list');
	$owners = $this->Order->Owner->find('list');
	$this->set(compact('machines', 'parts', 'services', 'users', 'spendings', 'casinos', 'companies', 'owners'));
}

public function invoice_accounting($id = null) {
	if (!$this->Order->exists($id)) {
		throw new NotFoundException(__('Invalid order'));
	}
	if ($this->request->is(array('post', 'put'))) {
		if ($this->Order->save($this->request->data)) {
			
			return $this->redirect(array('action' => 'accounting'));
		} else {
			
		}
	} else {
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->request->data = $this->Order->find('first', $options);
	}
	$machines = $this->Order->Machine->find('list');
	$parts = $this->Order->Part->find('list');
	$services = $this->Order->Service->find('list');
	$users = $this->Order->User->find('list');
	$spendings = $this->Order->Spending->find('list');
	$casinos = $this->Order->Casino->find('list');
	$companies = $this->Order->Company->find('list');
	$owners = $this->Order->Owner->find('list');
	$this->set(compact('machines', 'parts', 'services', 'users', 'spendings', 'casinos', 'companies', 'owners'));
}

		public function accounting() {
				$this->Order->recursive = 0;
				$this->Paginator->settings = $this->paginate;
				$this->set('orders', $this->Paginator->paginate());
				
								
				$this->loadModel('Visit');                        			
				$visita = $this->Visit->find('all');
				$this->set(compact('visita'));

			}
	
	
}
