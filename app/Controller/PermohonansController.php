<?php
App::uses('AppController', 'Controller');
/**
 * Permohonans Controller
 *
 * @property Permohonan $Permohonan
 * @property PaginatorComponent $Paginator
 */
class PermohonansController extends AppController {
public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index','add'); 
        $this->Auth->logoutRedirect = array('controller'=>'users','action'=>'login');
    }
	
	    public $components = array(
        'Paginator',
        'Search.Prg'
    );
    public function find() {
        $this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Permohonan->parseCriteria($this->Prg->parsedParams());
        $this->set('permohonans', $this->Paginator->paginate());
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
		$this->Permohonan->recursive = 0;
		$this->set('permohonans', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Permohonan->exists($id)) {
			throw new NotFoundException(__('Invalid permohonan'));
		}
		$options = array('conditions' => array('Permohonan.' . $this->Permohonan->primaryKey => $id));
		$this->set('permohonan', $this->Permohonan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Permohonan->create();
			if ($this->Permohonan->save($this->request->data)) {
				$this->Session->setFlash(__('The permohonan has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permohonan could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$persatuans = $this->Permohonan->Persatuan->find('list');
		$this->set(compact('persatuans'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Permohonan->exists($id)) {
			throw new NotFoundException(__('Invalid permohonan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Permohonan->save($this->request->data)) {
				$this->Session->setFlash(__('The permohonan has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permohonan could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Permohonan.' . $this->Permohonan->primaryKey => $id));
			$this->request->data = $this->Permohonan->find('first', $options);
		}
		$persatuans = $this->Permohonan->Persatuan->find('list');
		$this->set(compact('persatuans'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Permohonan->id = $id;
		if (!$this->Permohonan->exists()) {
			throw new NotFoundException(__('Invalid permohonan'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Permohonan->delete()) {
			$this->Session->setFlash(__('The permohonan has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The permohonan could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
