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
function my_input($label, $name, $atributes = null) {
    $atr_str = "";
    $for = $name;

    foreach ($atributes as $atr => $value) {
        if (set_value($name) != null) {
            $value = set_value($name);
        }
        $atr_str .= "$atr = '$value' ";
    }
    if (isset($atributes['id'])) {
        $for = $atributes['id'];
    }
    $str = '<div class="form-group">
                <label class="col-md-4 control-label" for="' . $for . '">' . $label . '</label>  
                <div class="col-md-4">
                
                    <input class="form-control input-md" name="' . $name . '" ' . $atr_str . '>
                    <div class="">' . form_error($name) . '</div>
                </div>
                
                </div>';
    return $str;
}

function my_password($label, $name, $atributes = null) {
    return my_input($label, $name, array('type' => 'password'));// using the same input item
}

function my_radio($label, $name, $arr_radio) {
    $str_radio = $select = "";

    foreach ($arr_radio['items'] as $key => $value) {// Loop to print out all radio item
        if (set_value($name) == $key) {// check for validation of user input, and the sumit data will remain in the form
            $select = set_radio($name, $key, TRUE);
        }
        $str_radio .= ' <label class="radio-inline">
                        <input type="radio" value="' . $key . '" name="' . $name . '" ' . $select . '  >' . $value . '
                    </label>';
        $select = ""; // reset the radio checked
    }

// Printout the readio box inform
    $str = '<div class="form-group">
                            <label class="col-md-4 control-label">' . $label . '</label>  
                            <div class="col-md-8">
                            ' . $str_radio . '
                                <div class="">' . form_error($name) . '</div>
                            </div>
                        </div>';
    return $str;
}

function my_dropdown($label, $name, $items) {
    $str_dd = '<div class="form-group">
                <label class="col-md-4 control-label" for="' . $name . '">' . $label . '</label>  
                <div class="col-md-4">' .
            form_dropdown($name, $items['items'], array(set_value($name)), array('id' => $name, 'class' => 'form-control'))
            . '</div>
            </div>';
    return $str_dd;
}

function form_items($items) {
    foreach ($items as $arrItem) {
        $type = 'text';
        $value = "";

        if (!isset($arrItem['value'])) {
            $arrItem['value'] = $value;
        }

        if (isset($arrItem['type'])) {
            get_function($arrItem);
        } else {
            $arrItem['type'] = $type;
            echo my_input($arrItem['label'], $arrItem['name'], $arrItem);
        }
    }
}

function get_function($arrItem) {
    $type = $arrItem['type'];

    if ($type == 'radio' || $type == "dropdown") {
        $fun = 'my_' . $type;
        echo $fun($arrItem['label'], $arrItem['name'], $arrItem);
    } else {

        $arrItem['type'] = $type;
        my_input($arrItem['label'], $arrItem['name'], $arrItem);
    }
}

function start_myform($action = null) {
    $str = '<div class="well well-sm col-md-8">
    <form class="form-horizontal" action="' . $action . '" method="POST">

        <fieldset>

            <!-- Form Name -->
            <legend>Add User</legend>
       ';
    return $str;
}

function close_myform() {
    $str = '<!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label"   ></label>
                <div class="col-md-8">
                    <button id="btn_submit"  class="btn btn-success">Submit</button>
                    <button  onclick="window.history.back()" class="btn btn-danger">Cancel</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>';
    return $str;
}
