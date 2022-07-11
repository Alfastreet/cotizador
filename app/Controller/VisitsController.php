<?php
App::uses('AppController','Controller');
App::uses('CakeEmail','Network/Email');
/**
 * Visits Controller
 *
 * @property Visit $Visit
 * @property PaginatorComponent $Paginator
 */
class VisitsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	
	public $helpers = array('Js');
	public $components = array('Paginator','Flash');
	 public $paginate = array(
        'limit' => 5,
        'order' => array(
            'Visit.id' => 'desc'
        )
    );
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Visit->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('visits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Visit->exists($id)) {
			throw new NotFoundException(__('Invalid visit'));
		}
		$options = array('conditions' => array('Visit.' . $this->Visit->primaryKey => $id));
		$this->set('visit', $this->Visit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id) {
		$hoy = date("Y-m-d H:i:s");
		if ($this->request->is('post')) {
			$this->Visit->create();
			if ($this->Visit->save($this->request->data)) {
				$this->Flash->success(__('The visit has been saved.'));
				$id_visit=$this->Visit->getLastInsertID();
				$this->Visit->save(array('id' => $id_visit, 'agenda_id' => $id));
				$this->loadModel('Agenda');
				$this->Agenda->save(array('id' => $id, 'visit_id' => $id_visit));
				
				$this->loadModel('Time');
				$this->Time->save(array('visit_id' => $id_visit, 'start'=> $hoy));
				
				return $this->redirect(array('action' => 'view/'.$id_visit.''));
			} else {
				$this->Flash->error(__('The visit could not be saved. Please, try again.'));
			}
		}
		$agendas = $this->Visit->Agenda->find('list');
		$parts = $this->Visit->Part->find('list');
		$this->set(compact('agendas', 'parts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Visit->exists($id)) {
			throw new NotFoundException(__('Invalid visit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Visit->save($this->request->data)) {
				$this->loadModel('Time');
				$id_finvisita = $this->Time->find('all', array('conditions' => array('Time.end' => '0000-00-00 00:00:00','Time.visit_id' => $id)));

				if (isset($id_finvisita['0']['Time']['id']))
					{
					 $hoy = date("Y-m-d H:i:s");
					 
					
					$date1=$id_finvisita['0']['Time']['start'];
					$date2=$hoy; 
					$timestamp1 = strtotime($date1);
					$timestamp2 = strtotime($date2);
					$timestamp=$timestamp2-$timestamp1;
					$total=$timestamp;
					
                     $id_fin=$id_finvisita['0']['Time']['id'];					 
					 $this->Time->save(array('id' => $id_fin , 'end' => $hoy, 'minute'=>$timestamp));
					}else
						{
					     
						}
				
				$datos_pago_visita = $this->Time->find('all', array('conditions' => array('Visit.id' => $id)));
				$visita=$datos_pago_visita['0']['Visit']['id'];
				$inicio=$datos_pago_visita['0']['Visit']['start'];
				$fin=$datos_pago_visita['0']['Visit']['end'];
				$this->loadModel('Agenda');
				$datos_pago_agenda = $this->Agenda->find('all', array('conditions' => array('Agenda.visit_id' => $visita)));	
				$orden=$datos_pago_agenda['0']['Agenda']['order_id'];
				
			   
			    $this->loadModel('Order');
				$datos_pago_order = $this->Order->find('all', array('conditions' => array('Order.id' => $orden)));	
				$servicio=$datos_pago_agenda['0']['Order']['service_id'];
				$casino_id=$datos_pago_agenda['0']['Order']['casino_id'];
				
				$this->loadModel('Service');
				$datos_pago_servicio = $this->Service->find('all', array('conditions' => array('Service.id' => $servicio)));	
				$nombre_servicio=$datos_pago_servicio['0']['Service']['name'];
				
				$valor_servicio=$datos_pago_servicio['0']['Service']['value'];
				$liquidacion_servicio=$datos_pago_servicio['0']['Service']['settlement'];

				
				$minutos_de_pago_inicial = $this->Time->field('sum(Time.minute) AS total', array('visit_id' => $id));
				$fraccion=ceil($minutos_de_pago_inicial/1800);
				
				//////////////////////tiempo de trabajo
				$total_trabajo=$minutos_de_pago_inicial/3600;
				$decimales = explode('.',$total_trabajo);
				$horas=$decimales[0]." Horas";				
				$decimales_entero=$decimales[1];
				$minutos_decimales =substr($decimales_entero, 0, 1)*6;
				$minutos=substr($minutos_decimales, 0, 2)." Minutos";
				$total_tiempo_labor=$horas." ".$minutos;
				
				//////////////////////tiempo total
				$timestamp_1 = strtotime($inicio);
				$timestamp_2 = strtotime($fin);

				$timestamp_dia=$timestamp_2-$timestamp_1;
				$total_dia=$timestamp_dia/3600;
				$decimales_dia = explode('.',$total_dia);
				$horas_dia=$decimales_dia[0]." Horas";
				$decimales_entero_dia=$decimales_dia[1];
				$minutos_dia =substr($decimales_entero_dia, 0, 1)*6;				
				$minutos_dia_finales=substr($minutos_dia, 0, 2)." Minutos";
				$total_tiempo_dia=$horas_dia." ".$minutos_dia_finales;
				
				if ($liquidacion_servicio == 1){
				$total_final=$fraccion*$valor_servicio;
				}else{
		         $total_final=$valor_servicio;
				}
				
				
				$this->loadModel('Casino');
				$casinolist=$this->Casino->find('all', array('conditions' => array('Casino.id' => $casino_id)));
				$id_mail_pay=$casinolist[0]['Casino']['paymentemail'];
				
				
				
				
				
				
				$asunto= "Prefactura de servicio # ".$id." Alfastreet Colombia";
				$Email = new CakeEmail('alfa');
				$Email->viewVars(array('id' => $id,'nombre_servicio' => $nombre_servicio,'inicio' => $inicio,'fin'=>$fin,'total_tiempo_labor'=>$total_tiempo_labor,'total_tiempo_dia'=>$total_tiempo_dia,'fraccion'=>$fraccion,'total_final'=>$total_final));
				$Email->template('welcome_fac', 'fancy_fac');
				$Email->emailFormat('html');
				$Email->from(array('service@alfastreet.co' => 'Autorizaciones de Servicio'));
				$Email->to($id_mail_pay);
				$Email->subject($asunto);
				$Email->send('');
               


				
				$this->Flash->success(__('The visit has been saved.'));
				return $this->redirect(array('controller'=>'Orders','action' => 'finish'));
			} else {
				$this->Flash->error(__('The visit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Visit.' . $this->Visit->primaryKey => $id));
			$this->request->data = $this->Visit->find('first', $options);
		}
		
		$agendas = $this->Visit->Agenda->find('list');
		$parts = $this->Visit->Part->find('list');
		$this->set(compact('agendas', 'parts'));
		$options = array('conditions' => array('Visit.' . $this->Visit->primaryKey => $id));
		$this->set('visit', $this->Visit->find('first', $options));

		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Visit->id = $id;
		if (!$this->Visit->exists()) {
			throw new NotFoundException(__('Invalid visit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Visit->delete()) {
			$this->Flash->success(__('The visit has been deleted.'));
		} else {
			$this->Flash->error(__('The visit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function signature() {

	}
	
	public function details($id = null) 
	{
		if (!$this->Visit->exists($id)) {
			throw new NotFoundException(__('Invalid visit'));
		}
		$options = array('conditions' => array('Visit.' . $this->Visit->primaryKey => $id));
		$this->set('visit', $this->Visit->find('first', $options));
	}
}
