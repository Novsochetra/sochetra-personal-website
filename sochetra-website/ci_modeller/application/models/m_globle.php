<?php

class M_globle extends CI_Model {

    /**
     * Function Execute mysql query and return an array
     * @param string $query to execute 
     * @return array list
     */
    function get_array_data($query = null) {
        global $connection;
        $result = mysqli_query($connection, $query);
        $rows = '';
//    var_dump($result);exit();
        if ($result && mysqli_num_rows($result) > 0) {
            while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $rows[] = $get_result_to_array;
            }
        }
        return $rows;
    }

    /**
     * Select record from a table
     * @param string $query to execute 
     * @return array list
     */
    function m_select($table) { // return array result
        $result = $this->db->get($table);
        if($result !=Null){
            return $result->result_array();
        }
        return FALSE; 
    }

    function m_select_where($table, $where = null) { // return array result
        $query = "select * from $table";

        if ($where != NULL) {
///======== Where case stament==========
            $k = 0;
            foreach ($where as $field => $value) {// pripare where case string
                if ($k > 0) {
                    $where_case .= " and ";
                }
                $where_case .= " $field = '$value' ";
                $k++;
            }///================

            $query .= "where  $where_case"; //query update user info
        }
        return get_array_data($query);
    }

//$tables = array(
//    array('tbl1'=>'tbl_food','tb2'=> 'tbl_category','where_case'=>'foo_cat_id=cat_id','join'=>'inner join'),
//     array('tbl1'=>'tbl_food','tb2'=> 'tbl_food_type','where_case'=>'foo_type_id=type_id','join'=>'inner join')
//);

    function m_select_join($tables, $where = NUll) {
        $query = "select * from ";
        $i = 0;
        foreach ($tables as $table) {
            if ($i == 0) {
                $query .= ' ' . $table['tbl1'] . ' ' . $table['join'] . ' ' . $table['tbl2'] . ' on ' . $table['where_case'];
            } else {
                $query .= ' ' . $table['join'] . ' ' . $table['tbl2'] . ' on ' . $table['where_case'];
            }
            $i++;
        }

        if ($where != NULL) {
///======== Where case stament==========
            $k = 0;
            $where_case = "";
            foreach ($where as $field => $value) {// pripare where case string
                if ($k > 0) {
                    $where_case .= " and ";
                }
                $where_case .= " $field = '$value' ";
                $k++;
            }///================

            $query .= " " . "where  $where_case"; //query update user info
        }
//    echo $query;exit();
        return get_array_data($query);
    }

    function m_search() {
        
    }

// add new recode to database with dynamic table and fields
    function m_add($table) { // get $POST
        global $connection;
        $i = 0;
        $fields = $values = "";
        foreach ($_POST as $field => $value) {
            if ($i > 0) {
                $fields .= ",";
                $values .= ",";
            }
            $fields .= $field;
            $values .= "'$value'";
            $i++;
        }
        $query = "insert into $table ($fields) values($values)";
//    echo $query; exit();
        $result = mysqli_query($connection, $query);
        return $result;
    }

    function m_edit($table, $where = null) { // Need dimationall array for where case
        global $connection;  // connection database
        $i = 0;
        $data_update = "";
        foreach ($_POST as $field => $value) {
            if ($i > 0) {
                $data_update .= ",";
            }
            $data_update .= " $field = '$value' ";
            $i++;
        }

        $query = "update $table set $data_update ";
        $where_case = "";
        if ($where != NULL) {
///======== Where case stament==========
            $k = 0;
            foreach ($where as $field => $value) {// pripare where case string
                if ($k > 0) {
                    $where_case .= " and ";
                }
                $where_case .= " $field = '$value' ";
                $k++;
            }///================

            $query .= " " . "where  $where_case"; //query update user info
        }
        echo $query;
        exit();
        $result = mysqli_query($connection, $query); // run mysql query update user information in database
        return $result; // return True/ False to caller function
    }

    function delete() {
        
    }

// Writ alet message on the top of the user inter face
    function alert($type, $sms = NULL) {
        if ($type) { // get the alert success
            $_SESSION['sms'] = $sms;
            $_SESSION['get_style'] = 'success';
        } else { // get the alert unsuccess
            $_SESSION['get_style'] = 'danger';
            $_SESSION['sms'] = $sms;
        }
        $_SESSION['alert'] = TRUE; //passing message to UI to show alert box
    }

}
