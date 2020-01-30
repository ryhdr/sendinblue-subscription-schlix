<?php
namespace App;

class sendinbluesubscriptionform_Admin extends \SCHLIX\cmsAdmin_Basic {

    public function __construct() {
        // Data: Item
        $methods = array('standard_main_app' => 'Main Page',);

        parent::__construct('basic', $methods);      
    }

}
