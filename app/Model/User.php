<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
	public $actsAs = array(
	    'Search.Searchable',
        'Upload.Upload' => array(
            'avatar' => array(
                'fields' => array(
                    'dir' => 'avatar_dir',
                    'type' => 'avatar_type', 
                    'size' => 'avatar_size'
                ),
            'deleteOnUpdate' => true,
            'deleteFolderOnDelete' => true,
            'mode' => 0777,
            'path' => '{ROOT}webroot{DS}files{DS}{field}{DS}',
            )
        )
    );

    public $filterArgs = array(
        'fullname' => array(
            'type' => 'value',
            'field'=>array('User.nama_penuh', 'User.username') 
        )
    );

public function beforeSave($options = array()) {
//Hash the password.
if (isset($this->data[$this->alias]['password'])) {
    $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    
//If get new password. Hash it again.
if (isset($this->data[$this->alias]['password_update']) && !empty($this->data[$this->alias]['password_update'])) {
    $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
    }

return parent::beforeSave($options);
}

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Sila isi ruangan ini',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Sila isi ruangan ini',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nama_penuh' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Sila isi ruangan ini',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Sila isi ruangan ini',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Sila isi ruangan ini',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'role' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Sila isi ruangan ini',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Sila isi ruangan ini',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'jawatan' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Sila isi ruangan ini',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
