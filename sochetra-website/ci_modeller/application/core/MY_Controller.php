<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        // do some stuff
        $GLOBALS['userData'] = array();
        global $userData;
        $userData['controller'] = $this->uri->segment(2);
        $this->load->model('m_globle');
        
    }

    public function index() {
        
        $this->view();
    }


    public function view() {
        global $userData;
        $controller = $userData['controller'];
        $data['title'] = "$controller Manager";
        $data['header'] = "View $controller";
        $data['contend'] = "backend/".$controller."/view";
        
        $data['userData'] = $this->get_data();
        
        $this->load->view('backend/template', $data); // dynamic view
    }
    
    function get_data(){
        global $userData;
        if(isset($userData['jiontTable']) && $userData['jiontTable'] != ""){
            echo "joint";
        
        }else{
            return $this->m_globle->m_select($userData['table']);
        }
        
        exit();
    }
    
    
    public function add() {
        global $userData;
        $controller = $userData['controller'];
        $data['title'] = "$controller Manager";
        $data['header'] = "Manage $controller";
        $data['contend'] = "backend/$controller/add";
        $this->load->view('backend/template', $data); // dynamic view
    }
    
    
    public function edit($id=null){
        global $userData;
        $controller = $userData['controller'];
        $data['title'] = "$controller Manager";
        $data['header'] = "Edit $controller";
        $data['contend'] = "backend/".$controller."/edit";
        $this->load->view('backend/template', $data); // dynamic view
    }

    public function insertData() {
        global $userData;
        $table=$userData['table'];
        $add_data = m_add($table);
        if ($add_data) {
            $action = "view";
            alert(TRUE, "Success add new record..!");
        } else {
            alert(FALSE, "Error add a record..!");
            $action = "add";
        }

        header("Location: " . BASE_URL . "index.php/$diretory/$action");
    }

    function validate_form() {
        $this->form_validation->set_rules('firstname', 'first name', 'required|min_length[5]');
        $this->form_validation->set_rules('lastname', 'last name', 'required|min_length[5]');
        $this->form_validation->set_rules('sex', 'gander', 'required');
        $result = $this->form_validation->run();

        if ($result) {
            echo "Success...!";
            exit();
        }
        $this->edit();
    }

}
