<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppModel', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class Application extends AppModel {
	public $name = "Application";
	public $belongsTo = 'Competition';
	/*public $validate = array(
		'first_name' => array(
			'required' => true
	        ),
		 ),
        
		'school' => array(
            'alphaNumeric' => array(
                'rule'     => 'alphaNumeric',
                'required' => true,
                'message'  => 'Alphabets and numbers only'
            ),
            'between' => array(
                'rule'    => array('between', 2, 20),
                'message' => 'Between 5 to 20 characters'
            )
        ),
        
		'grad_year' => array(
        'rule'    => array('datetime', 'y'),
        'message' => 'Please enter a valid date.'
    ),
		
        'phone' => array(
        'rule' => array('phone', null, 'us')
    ),
    
	'github_url' => array(
        'rule' => 'url'
    ),
    'linkedin_url' => array(
        'rule' => 'url'
    ),

        'email' => 'email',
        
	    'reimbursement_needed' => array(
        'rule'    => array('boolean'),
        'message' => 'Incorrect value for myCheckbox'
    )
    );*/
		
}
