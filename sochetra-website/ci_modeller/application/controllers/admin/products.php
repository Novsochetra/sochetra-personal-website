<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

    function __construct() {
        parent::__construct();
        global $userData;
        $userData['table']='product';
        
        // initail dropdown input for add new / update form
         $userData['dropTable'] =array(
            array ('table'=>'category','key'=>'catid','title'=>'catname'),
            array ('table'=>'store','key'=>'storeid','title'=>'storename'));
         
        // initial join table for view
//       $userData['jiontTable']= array('from'=>'product',
//           array('table'=>'category','pk'=>'catid','fk'=>'catid'),
//           array('table'=>'store','pk'=>'storeid','fk'=>'storeid')
//       );
        
    }

}
