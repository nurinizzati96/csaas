<?php
App::uses('AppController', 'Controller');
/**
 * users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','add'); 
        $this->Auth->logoutRedirect = array('controller'=>'users','action'=>'login');
    }
	  public $components = array(
        'Paginator',
        'Search.Prg'
    );
    public function find() {
        $this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->User->parseCriteria($this->Prg->parsedParams());
        $this->set('users', $this->Paginator->paginate());
    }



public function login() {
//if already logged-in, redirect
    if($this->Session->check('Auth.User')){
        $this->redirect(array('controller'=> 'users', 'action' => 'index'));      
    }
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Session->setFlash(__('Invalid username or password'),'default',array('class'=>'alert alert-danger'));
    }
}

public function logout() {
        $this->redirect($this->Auth->logout());
}

	   
/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}
	
	public function stats() {
		//COUNT ALL
		$this->set('jumlah_role', $this->User->find('count'));	
		
		//COUNT BASED ON CONDITION NEGERI
		$this->set('jumlah_administrator', $this->User->find('count', array(
						'conditions' => array(
								'User.role' => 'Administrator',
						))));	
		$this->set('jumlah_student', $this->User->find('count', array(
						'conditions' => array(
								'User.role' => 'Student',
						))));	
		$this->set('jumlah_staff', $this->User->find('count', array(
						'conditions' => array(
								'User.role' => 'Staff',
						))));	
		
		//COUNT BASED ON CONDITION STATUS
		$this->set('jumlah_active', $this->User->find('count', array(
						'conditions' => array(
								'User.status' => 'Active',
						))));	
		$this->set('jumlah_inactive', $this->User->find('count', array(
						'conditions' => array(
								'User.status' => 'Inactive',
						))));	
		
		//COUNT BASED ON CONDITION ROLE+STATUS
		$this->set('jumlah_active_student', $this->User->find('count', array(
						'conditions' => array(
								'User.status' => 'Active',
								'User.role' => 'Student',
						))));	
	
		
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
		
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
