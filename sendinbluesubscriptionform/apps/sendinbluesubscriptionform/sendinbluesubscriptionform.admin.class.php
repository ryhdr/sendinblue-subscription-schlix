<?php
namespace App;

/**
 * sendinblue subscription form - Admin class
 * 
 * 
 *
 * @copyright 2019 Roy Hadrianoro
 *
 * @license MIT
 *
 * @version 1.0
 * @package sendinbluesubscriptionform
 * @author  Roy Hadrianoro <roy.hadrianoro@schlix.com>
 * @link    https://www.schlix.com
 */
class sendinbluesubscriptionform_Admin extends \SCHLIX\cmsAdmin_Basic {

    public function __construct() {
        // Data: Item
        $methods = array('standard_main_app' => 'Main Page',);

        parent::__construct('basic', $methods);      
    }

}
