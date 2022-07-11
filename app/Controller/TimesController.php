<?php
App::uses('AppController', 'Controller');
/**
 * Times Controller
 *
 * @property Time $Time
 * @property PaginatorComponent $Paginator
 */
class TimesController extends AppController {

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
		$this->Time->recursive = 0;
		$this->set('times', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Time->exists($id)) {
			throw new NotFoundException(__('Invalid time'));
		}
		$options = array('conditions' => array('Time.' . $this->Time->primaryKey => $id));
		$this->set('time', $this->Time->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id) {
		
	if ($this->request->is('post')) 
	{
		$times = $this->Time->find('all', array( 'conditions' => array('Time.visit_id' => $id),'order'=>'Time.id DESC'));
		
		if(isset($times['0']['Time']['id']))
		{
			($id_de_time=$times['0']['Time']['id']); 			
			($start_de_time=$times['0']['Time']['start']);
			($end_de_time=$times['0']['Time']['end']); 
		}else
			{
				$start_de_time="0000-00-00 00:00:00";
				$end_de_time="0000-00-00 00:00:00";
			}
 
		
		if($start_de_time=='0000-00-00 00:00:00' and $end_de_time=="0000-00-00 00:00:00" or $start_de_time<>'0000-00-00 00:00:00' and $end_de_time<>"0000-00-00 00:00:00" )
		{
			
					$this->Time->create();
					if ($this->Time->save($this->request->data)) {
						$this->Flash->success(__('The time has been saved.'));
						$id_time=$this->Time->getLastInsertID();
						$this->Time->save(array('id' => $id_time, 'visit_id' => $id));
						return $this->redirect(array('controller' =>'visits', 'action' => 'view/'.$id.''));
					} else {
						$this->Flash->error(__('The time could not be saved. Please, try again.'));
					}
					
		}else{
				$hoy = date("Y-m-d H:i:s");
				
				$date1=$start_de_time;
				$date2=$hoy; 
				$timestamp1 = strtotime($date1);
				$timestamp2 = strtotime($date2);
				$timestamp=$timestamp2-$timestamp1;
				$total=$timestamp;
					
				$this->Time->save(array('id' => $id_de_time, 'end' => $hoy, 'minute' => $total));	
				
				return $this->redirect(array('controller' =>'visits', 'action' => 'view/'.$id.''));
			 }
	}		 
	($id);
		($times = $this->Time->find('all', array( 'conditions' => array('Time.visit_id' => $id),'order'=>'Time.id DESC')));
		$this->set(compact('times'));
	

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Time->exists($id)) {
			throw new NotFoundException(__('Invalid time'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Time->save($this->request->data)) {
				$this->Flash->success(__('The time has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The time could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Time.' . $this->Time->primaryKey => $id));
			$this->request->data = $this->Time->find('first', $options);
		}
		$visits = $this->Time->Visit->find('list');
		$this->set(compact('visits'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Time->id = $id;
		if (!$this->Time->exists()) {
			throw new NotFoundException(__('Invalid time'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Time->delete()) {
			$this->Flash->success(__('The time has been deleted.'));
		} else {
			$this->Flash->error(__('The time could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
