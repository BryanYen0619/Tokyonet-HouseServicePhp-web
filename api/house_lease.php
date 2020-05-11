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
        #$sql = "select * from `$table`".($key?" WHERE id=$key":''); break;
        getLease();
        break;
    case 'PUT':
        #$sql = "update `$table` set $set where id=$key"; break;
        echo 'Not Support PUT' . "\n";
        break;
    case 'POST':
        addLease($input);
        break;
    case 'DELETE':
        #$sql = "delete `$table` where id=$key"; break;
        echo 'Not Support DELETE' . "\n";
        // deleteLease($input);
        break;
}

function addLease($input) {
    $member_community_id = $input['community_id'];
    $member_user_id = $input['user_id'];

    $member_category_id = $input['category_id'];
    $member_name = $input['name'];
    $member_phone = $input['phone'];
    $member_time = $input['time'];
    $member_note = $input['note'];
    $member_title = $input['title'];        // 物件名稱
    $member_address = $input['address'];
    $member_age = $input['age'];
    $member_floor = $input['floor'];
    $member_level = $input['level'];
    
    // DB
    $db_house_service_lease = 'house_service_lease';
    
    $errormessage = null;
    $insertId = -1;
   
    // 新增
    $instertOrderSerpSql = "INSERT INTO $db_house_service_lease (community_id, user_id, category_id, name, phone, time, note, title, address, age, floor, level) VALUES ('$member_community_id','$member_user_id','$member_category_id', '$member_name', '$member_phone', '$member_time', '$member_note', '$member_title', '$member_address', '$member_age', '$member_floor', '$member_level')";
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

function getLease() {
    $member_community_id = $_GET["community_id"];
    $member_user_id = $_GET["user_id"];
    
    // DB
    $db_house_service_lease = 'house_service_lease';
 
    // 查詢
    $selectSerpSql = "SELECT * FROM $db_house_service_lease WHERE community_id = '$member_community_id' AND user_id = '$member_user_id' ";

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