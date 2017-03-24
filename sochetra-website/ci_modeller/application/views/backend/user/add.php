<?php

$roles = array(
    '1' => "Admin",
    '2' => "Teacher",
    '3' => "Student",
    '4'=>"Superadmin"
);

$sex_radio = array("1" => 'Male', "2" => 'Femal');
?>



<?php

echo start_myform('validate_form');



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


