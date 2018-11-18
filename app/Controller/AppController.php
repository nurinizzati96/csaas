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

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $helpers = array(
		'Form'=> array('className' => 'BootstrapForm'), 
		'Html'=> array('className' => 'BootstrapHtml'),
	);
	
	public $components = array(
    'Session',
    'Auth'=>array(
        'loginRedirect'=>array('controller'=>'users', 'action'=>'index'),
        'logoutRedirect'=>array('controller'=>'users', 'action'=>'logout'),
        'authError'=>"Sorry, you are not allow to view the content. Please login.",
        'authorize'=>array('Controller')
        )
);
    
public function beforeFilter() {
    $this->layout = 'bootstrap';
    $this->Auth->allow('login','add');
    $this->Auth->allow(array('controller' => 'pages', 'action' => 'display'));
    $this->set('current_user', $this->Auth->user());
    $this->set('logged_in', $this->Auth->loggedIn());
    $this->Auth->logoutRedirect = array('controller'=>'users','action'=>'login');   
}

public function isAuthorized($user) {
        return true;
}

	
}
