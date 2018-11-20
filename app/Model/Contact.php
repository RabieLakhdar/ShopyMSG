<?php
App::uses('AppModel', 'Model');
/**
 * Card Model
 *
 * @property User $User
 */
class Contacts extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	
		

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_send_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
        ),
        'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_recp_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
