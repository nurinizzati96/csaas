<?php
App::uses('AppModel', 'Model');
/**
 * Persatuan Model
 *
 * @property Permohonan $Permohonan
 */
class Persatuan extends AppModel {
    public $actsAs = array(
        'Search.Searchable',
        'Upload.Upload' => array(
            'avatar' => array(
                'fields' => array(
                    'dir' => 'avatar_dir',
                    'type' => 'type', 
                    'size' => 'size'
                ),
            'deleteOnUpdate' => true,
            'deleteFolderOnDelete' => true,
            'mode' => 0777,
            'path' => '{ROOT}webroot{DS}files{DS}{field}{DS}',
            )
        )
    );

    public $filterArgs = array(
        'nama' => array(
            'type' => 'value',
            'field'=>array('Persatuan.nama','Persatuan.kod') 
        ),
        'kod' => array(
            'type' => 'value',
            'field' => 'kod'
        )
    );

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nama';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'kod' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Sila Isi',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nama' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Sila Isi',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'penasihat' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Sila Isi',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Permohonan' => array(
			'className' => 'Permohonan',
			'foreignKey' => 'persatuan_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
