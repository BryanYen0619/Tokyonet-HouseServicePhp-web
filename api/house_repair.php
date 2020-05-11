<?php require_once('../Connections/link.php');

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
        #$sql = "select * from $table".($key?" WHERE id=$key":''); break;
        getRepair();
        break;
    case 'PUT':
        #$sql = "update $table set $set where id=$key"; break;
        echo 'Not Support PUT' . "\n";
        break;
    case 'POST':
        addRepair($input);
        break;
    case 'DELETE':
        #$sql = "delete $table where id=$key"; break;
        echo 'Not Support DELETE' . "\n";
        // deleterepair($input);
        break;
}

function addRepair($input) {
    $member_community_id = $input['community_id'];
    $member_user_id = $input['user_id'];

    $member_category_id = $input['category_id'];
    $member_name = $input['name'];
    $member_phone = $input['phone'];
    $member_address = $input['address'];
    $member_email = $input['email'];
    $member_fax = $input['fax'];
    $member_info = $input['info'];
    $member_time = $input['time'];
    $member_rang = $input['rang'];          //時段, 0:早上, 1:下午, 2:晚上
    if (isset($input['note'])) {
        $member_note = $input['note'];
    } else {
        $member_note = null;
    }
    

    // DB
    $db_house_service_repair = 'house_service_repair';
    
    $errormessage = null;
    $insertId = -1;
   
    // 新增
    $instertOrderSerpSql = "INSERT INTO $db_house_service_repair 
    (community_id, user_id, category_id, name, phone, address, email, fax, info, time, rang, note) 
    VALUES ('$member_community_id', '$member_user_id', '$member_category_id', '$member_name', '$member_phone', '$member_address', '$member_email', '$member_fax', '$member_info', '$member_time', '$member_rang', '$member_note')";
    // if ($isHightPhpVersion) {
    //     $insertResult = mysqli_query($mysql, $instertOrderSerpSql);
    //     if (!$insertResult) {
    //         $errormessage = mysqli_error();
    //     } else {
    //         $insertId = mysqli_insert_id($mysql);
    //     }
    // } else {
        $insertResult = mysql_query($instertOrderSerpSql);
        if (!$insertResult) {
            $errormessage = mysql_error();
        } else {
            $insertId = mysql_insert_id();
        }
    // }

    if($errormessage != null) {
        $data = array('errorcode' => 500, 'errormessage' => $errormessage);
        http_response_code(500);
    } else {    
        $data = array('errorcode' => 0, 'errormessage' => "Success.", 'data' => array('id' => $insertId));
        http_response_code(200);
    }
    echo json_encode($data);
}

function getRepair() {
    $member_community_id = $_GET["community_id"];
    $member_user_id = $_GET["user_id"];

    // DB
    $db_house_service_repair = 'house_service_repair';
 
    // 查詢
    $selectSerpSql = "SELECT * FROM $db_house_service_repair WHERE community_id = '$member_community_id' AND user_id = '$member_user_id' ";

    $rows = array();
    // if ($isHightPhpVersion) {
    //     $selectResult = mysqli_query($mysql, $selectSerpSql);
    //     if ($selectResult) {
    //          while ($row = mysqli_fetch_assoc($selectResult)) {
    //             $rows[] = $row;
    //         }
    //     }
    // } else {
        $selectResult = mysql_query($selectSerpSql);
        if ($selectResult) {
            while ($row = mysql_fetch_assoc($selectResult)) {
                $rows[] = $row;
            }
        }
    // }
   
    $data = array('errorcode' => 0, 'errormessage' => "Success.", 'data' => $rows);
    http_response_code(200);
    echo json_encode($data);
}

?>