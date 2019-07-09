<?php

header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
    
    $servername = 'localhost';
    $username = 'guchen';
    $password = '123qwer';
    $database = 'drivebeat';
    $conn = mysqli_connect($servername, $username, $password,$database);

    

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }


    
    $year = (int)($_POST['years']);
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $type = $_POST['typeValue'];
    $make = $_POST['make'];
    $seats = (int)($_POST['seats']);

    $original_fpay = (int)($_POST['original_fpay']);

    $firstpay = (int)($_POST['firstpay']);
    $monthpay = (int)($_POST['monthpay']);
    $buyback = (int)($_POST['buyback']);
    $mileleft = (int)($_POST['mileleft']);

    $monthleft = (int)($_POST['monthleft']);
    $curr_mile = (int)($_POST['mile']);



    
    $biansuxiang = $_POST['biansuxiangValue'];
    $gas = $_POST['gasValue'];
    $autos = $_POST['autoValue'];
    $config= $_POST['configvalue'];
    
    

    


    //联系人信息
    $person = $_POST['person'];
    $phone = $_POST['phone'];


    //这些数据只有我们能看见
    $vin = $_POST['vin'];
    $check_date = $_POST['meetDate'];
    $check_time = $_POST['meetTime'];

    $address = $_POST['address'];
    $city = $_POST['city'];
    $postal = $_POST['postal'];
    $comment = $_POST['comment'];

    $diaLogForm = $_POST['diaLogForm'];


    $user_id = (int)($_POST['userId']);

    /*
    $imageName = mysqli_real_escape_string($_FILES["image"]["name"]);
    $imageData = mysqli_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
    $imageType = mysqli_real_escape_string($_FILES["image"]["type"]);*/


        //mysqli_query($conn,"set names utf8");

            //return mysqli_insert_id($conn);
            if(isset($_POST['submit'])){
                

                mysqli_query($conn,"INSERT INTO `carinfo2`(`year`, `brand`, `color`, `type`, `make`, `seats`, `original_fpay`, `firstpay`, `monthpay`, `buyback`, `monthleft`, `curr_mile`, `mileleft`, `biansuxiang`, `gas`, `autos`, `vin`, `person`, `phone`, `check_date`, `check_time`, `address`, `city`, `postal`, `comment`, `img`, `userId`, `config`, `valid`) 
                VALUES ($year, '$brand', '$color', '$type', '$make', $seats, $original_fpay, $firstpay, $monthpay, $buyback, $monthleft, $curr_mile, $mileleft, '$biansuxiang', '$gas', '$autos', '$vin', '$person', '$phone', '$check_date', '$check_time', '$address', '$city', '$postal', '$comment', '$diaLogForm', $user_id, '$config', 0)");
            }

                //mysql_query("INSERT INTO `secondhandcar` VALUES('$imageName','$imageData')");



    
    //echo json_encode($years+$brand+$make+$mile+$types+$biansuxiang+$gas+$autos+$seats+$price+$person+$phone);
    mysqli_close($conn);
  
    
?>