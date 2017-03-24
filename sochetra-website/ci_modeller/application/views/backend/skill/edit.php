<?php
$user_data = array('id' => '1', 'title' => "aaa", 'description' => 'Time management skill from Ronan', 'date' => '2010/02/12');


?>



<?php

echo start_myform('validate_form');

$form_elements = array(
    
    array('label' => 'ID', 'name' => 'id','value'=>$user_data['id']),
    array('label' => 'Title', 'name' => 'title','value'=>$user_data['title']),
    array('label' => 'Description', 'name' => 'description','value'=>$user_data['description']),
    array('label' => 'Date','name' => 'date','value'=>$user_data['date'])
);

echo form_items($form_elements);


echo close_myform();
?>


