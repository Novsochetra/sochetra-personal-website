<?php

$user_data = array(
    array('id' => '1', 'title' => "aaa", 'description' => 'Time management skill from Ronan', 'date' => '2010/02/12'),
    array('id' => '2', 'title' => "ccc", 'description' => 'Checting skill from Olie', 'date' => '2010/02/12'),
    array('id' => '3', 'title' => "ddd", 'description' => 'Bun', 'date' => '2010/02/12')
);

//====Test new table helper==========-->

$arr_column = array(
    'ID' => 'id',
    'Title' => 'title',
    'Description' => 'description',
    'Date' => 'date'
);

echo table_manager($user_data, $arr_column, 'id');

