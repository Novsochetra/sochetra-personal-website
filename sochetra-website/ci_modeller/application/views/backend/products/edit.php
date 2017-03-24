<?php
$user_data = array('user_id' => '3', 'firstname' => "ddd", 'lastname' => 'Bun', 'email' => 'example@gmail.com','rol_id'=>2);

$roles = array(
    '1' => "Admin",
    '2' => "Teacher",
    '3' => "Student"
);
?>



<?php

echo start_myform('validate_form');

$sex_radio = array("1" => 'Male', "2" => 'Femal');

$form_elements = array(
    
    array('label' => 'First Name', 'name' => 'firstname','value'=>$user_data['firstname']),
    array('label' => 'Last Name', 'name' => 'lastname','value'=>$user_data['lastname']),
    array('label' => 'Email', 'name' => 'email','value'=>$user_data['email']),
    array('label' => 'Role','name' => 'rul_id','value'=>$user_data['rol_id'], 'items' => $roles,'type' => 'dropdown')
);

echo form_items($form_elements);


echo close_myform();
?>


