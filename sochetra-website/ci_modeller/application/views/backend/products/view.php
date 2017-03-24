<?php

//$user_data = array(
//    array('user_id' => '1', 'firstname' => "aaa", 'lastname' => 'Long', 'email' => 'example@gmail.com'),
//    array('user_id' => '2', 'firstname' => "ccc", 'lastname' => 'Chan', 'email' => 'example@gmail.com'),
//    array('user_id' => '3', 'firstname' => "ddd", 'lastname' => 'Bun', 'email' => 'example@gmail.com')
//);
?>


<?php


//====Test new table helper==========-->

$arr_column = array(
    'ID' => 'pid',
    'Product Name' => 'pname',
    'Supplier' => 'supplier'
);

echo table_manager($userData, $arr_column, 'pid');

