<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

//echo var_dump($input);
// create SQL based on HTTP method
switch ($method) {
    case 'GET':
        #$sql = "select * from `$table`".($key?" WHERE id=$key":''); break;
        getCategory();
        break;
    case 'PUT':
        #$sql = "update `$table` set $set where id=$key"; break;
        echo 'Not Support PUT' . "\n";
        break;
    case 'POST':
        addCategory($input);
        break;
    case 'DELETE':
        #$sql = "delete `$table` where id=$key"; break;
        echo 'Not Support DELETE' . "\n";
        // deleteCategory($input);
        break;
}

function addCategory($input) {
    $member_model = $input['model'];
    $member_name = $input['name'];

    // SQL init
    require_once('Connections/link.php');
    
    // DB
    $db_house_service_Category = 'house_service_category';
    
    $errormessage = null;
    $insertId = -1;
   
    // 新增
    $instertOrderSerpSql = "INSERT INTO $db_house_service_category (model, name) VALUES ('$member_model', '$member_name')";
    if ($isHightPhpVersion) {
        $insertResult = mysqli_query($mysql, $instertOrderSerpSql);
        if (!$insertResult) {
            $errormessage = mysqli_error();
        } else {
            $insertId = mysqli_insert_id($mysql);
        }
    } else {
        $insertResult = mysql_query($instertOrderSerpSql);
        if (!$insertResult) {
            $errormessage = mysql_error();
        } else {
            $insertId = mysqli_insert_id();
        }
    }

    if($errormessage != null) {
        $data = array('errorcode' => 500, 'errormessage' => $errormessage);
        http_response_code(500);
    } else {    
        $data = array('errorcode' => 0, 'errormessage' => "Success.", 'data' => array('id' => , $insertId));
        http_response_code(200);
    }
    echo json_encode($data);
}

function getCategory() {
    // $member_id = $_GET["id"];
    $member_model = $_GET["model"];

    // SQL init
    require_once('Connections/link.php');
    
    // DB
    $db_house_service_Category = 'house_service_category';
 
    // 查詢
    $selectSerpSql = "SELECT id, name FROM $db_house_service_category WHERE model = '$member_model' ";

    $rows = array();
    if ($isHightPhpVersion) {
        $selectResult = mysqli_query($mysql, $selectSerpSql);
        if ($selectResult) {
             while ($row = mysqli_fetch_assoc($selectResult)) {
                $rows[] = $row;
            }
        }
    } else {
        $selectResult = mysql_query($selectSerpSql);
        if ($selectResult) {
            while ($row = mysql_fetch_assoc($selectResult)) {
                $rows[] = $row;
            }
        }
    }
   
    $data = array('errorcode' => 0, 'errormessage' => "Success.", 'data' => $rows);
    http_response_code(200);
    echo json_encode($data);
}

?>