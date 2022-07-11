<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
	
App::uses('CakeEmail', 'Network/Email');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
App::uses('CakeEmail', 'Network/Email');

 class AppController extends Controller {


    
    public $helpers = array('Html');
	
	public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array(              
                'controller' => 'pages',
                'action' => 'home' 
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            'authorize' => array('Controller'),
            'authError' => true
        )
    );
    
  public function beforeFilter()
    {
	
		parent::beforeFilter();
		
        $this->Auth->allow(array('controller'=>'orders','action' => 'confirmorder'));
		$this->Auth->allow(array('controller'=>'orders','action' => 'confirm_order'));
		$this->Auth->allow(array('controller'=>'orders','action' => 'send'));
        $this->Auth->allow(array('controller'=>'orders','action' => 'transfer'));
		 $this->Auth->allow(array('controller'=>'orders','action' => 'transfer_confirm'));


        $this->Auth->allow('login', 'logout','add','autenticate','register','confirmorder','confirm_order','send','transfer','transfer_confirm');
        $this->set('current_user', $this->Auth->user());
    }
    
    public function isAuthorized($user)
    {
        if(isset($user['id']))
        {
            return true;
        }
        
        return false;
    }
   
    
}