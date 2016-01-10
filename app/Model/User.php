<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property UserTypes $UserTypes
 * @property Institutions $Institutions
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'image' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_types_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'institutions_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed



	function check_admin_user_data($data) {
		// init
		$return = FALSE;

		// find user with passed username
		$conditions = array(
			'User.email'=>$data['User']['email'],
			'User.user_types_id'=>'3'
		);
		$user = $this->find('first',array('conditions'=>$conditions));

		// not found
		if(!empty($user)) {
//			$salt = Configure::read('Security.salt');
			// check password
			if($user['User']['password'] == $data['User']['password']) {
				$return = $user;
			}
		}

		return $return;
	}







/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'UserTypes' => array(
			'className' => 'UserTypes',
			'foreignKey' => 'user_types_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Institutions' => array(
			'className' => 'Institutions',
			'foreignKey' => 'institutions_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
