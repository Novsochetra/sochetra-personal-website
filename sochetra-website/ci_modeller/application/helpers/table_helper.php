<?php

/**
 * Helper
 * @package Customer Helper
 * @author Sophea
 * @path application/helpers/table_helper.php
 * @update now
 */

/**
 * function return the table data manager
 * @param $table_object data table as an array 
 * @param $arr_column associative array parameter for select the field to be display with the column field
 * @param $pk  a Primary Key apply for action icons on the right side of each recode (view,edit,delete) it could be a unique one;
 * @example $arr_select_field = array('ID' => 'con_id','English Name' => 'con_en_name','Address' => 'con_address')
  echo table_manager($data_resource, $arr_select_field);
 * 
 *  * @return String
 */
function table_manager($table_object, $arr_column, $pk) {
    global $userData;
    $controller = $userData['controller'];
    if (!is_array($arr_column) || count($arr_column) <= 0) {
        echo "Emply array column..!";
        return FALSE;
    }
    $string_table = '<div id="table_manager">'
            . '<div class="pull-left"><input class="search" placeholder="Search" /></div>'
            . '<div class="pull-right"><a href="' . $controller . '/add" >
                                    <i class="glyphicon glyphicon-plus"></i></a>
                                &nbsp;</div>'
            . '<table class="table-bordered col-md-12" cellpadding="0" cellspacing="0" border="0">';

    //start write table header
//    $string_table .= '<tr>';
    foreach ($arr_column as $header => $column) {

        $string_table .= '<th  class="sort" data-sort="' . $column . '">' . $header . '</th>';
    }
    $string_table .= '<th class="col-sl-2">&nbsp;</th>';
//    $string_table .= '</tr>';
    //start write table data
    if (count($table_object) > 0) {
        generate_column($table_object, $arr_column, $pk, $string_table);
    } else {
        $string_table .= '<tr><td colspan="' . count($arr_column) . '"><p class="no_record">There is no record.</p></td></tr>';
    }
    $string_table .= '</table></div>';

    $string_table .= listjs_script($arr_column);

    return $string_table;
}

function generate_column($table_object, $arr_column, $pk, &$string_table) {
    global $userData;
    $controller = $userData['controller'];
    $string_table .= '<tbody class="list">';
    foreach ($table_object as $arr_data) {
        $string_table .= '<tr>';
        foreach ($arr_column as $column) {
            $string_table .= '<td class="' . $column . '">' . $arr_data[$column] . '</td>';
        }
        // ========acctio column=======
        $string_table .= '<td><a href="' . $controller . '/view/' . $arr_data[$pk] . '" >
                                    <i class="glyphicon glyphicon-eye-open"></i></a>
                                &nbsp;
                                <a href="' . $controller . '/edit/' . $arr_data[$pk] . '">
                                    <i class="glyphicon glyphicon-edit"></i></a>
                                &nbsp;
                                <a href="' . $controller . '/delete/' . $arr_data[$pk] . '">
                                    <i class="glyphicon glyphicon-trash"></i></a></td>';
        $string_table .= '</tr>';
    }
    $string_table .= '</tbody>';
}

function listjs_script($arr_column) {
    $va = "";
    $i = 0;
    foreach ($arr_column as $column) {
        if ($i > 0) {
            $va .= ",";
        }
        $va .= "'$column'";
        $i++;
    }

    $str = "
    <script>
        var options = {
            valueNames: [" . $va . "]
        };

        var userList = new List('table_manager', options);
    </script>";
    return $str;
}

?>