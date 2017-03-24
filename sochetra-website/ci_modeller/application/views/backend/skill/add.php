<?php
$user_data = array(
    array('id' => '1', 'title' => "aaa", 'description' => 'Time management skill from Ronan', 'date' => '2010/02/12')
);


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
    
    array('label' => 'First Name', 'name' => 'firstname'),
    
    array('label' => 'Last Name', 'name' => 'lastname'),
    array('label' => 'Address', 'name' => 'address'),
    array('label' => 'Date of Birth', 'name' => 'dob'),
    
    array('label' => 'Password', 'name' => 'password', 'type' => 'password'),
    array('label' => 'Gander', 'name' => 'sex', 'items' => $sex_radio, 'type' => "radio"),
    
    array('label' => 'Role','name' => 'rul_id','items' => $roles,'type' => 'dropdown')
);

echo form_items($form_elements);



echo close_myform();
?>


