<?php
App::uses('AppController', 'Controller');
/**
 * Persatuans Controller
 *
 * @property Persatuan $Persatuan
 * @property PaginatorComponent $Paginator
 */
class PersatuansController extends AppController {
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
        $this->Paginator->settings['conditions'] = $this->Persatuan->parseCriteria($this->Prg->parsedParams());
        $this->set('persatuans', $this->Paginator->paginate());
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
		$this->Persatuan->recursive = 0;
		$this->set('persatuans', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Persatuan->exists($id)) {
			throw new NotFoundException(__('Invalid persatuan'));
		}
		$options = array('conditions' => array('Persatuan.' . $this->Persatuan->primaryKey => $id));
		$this->set('persatuan', $this->Persatuan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Persatuan->create();
			if ($this->Persatuan->save($this->request->data)) {
				$this->Session->setFlash(__('The persatuan has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The persatuan could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Persatuan->exists($id)) {
			throw new NotFoundException(__('Invalid persatuan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Persatuan->save($this->request->data)) {
				$this->Session->setFlash(__('The persatuan has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The persatuan could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Persatuan.' . $this->Persatuan->primaryKey => $id));
			$this->request->data = $this->Persatuan->find('first', $options);
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
		$this->Persatuan->id = $id;
		if (!$this->Persatuan->exists()) {
			throw new NotFoundException(__('Invalid persatuan'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Persatuan->delete()) {
			$this->Session->setFlash(__('The persatuan has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The persatuan could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
