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



    $years = $_POST['years'];
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $make = $_POST['make'];
    $mile = (int)($_POST['mile']);

    $type = $_POST['typeValue'];
    $biansuxiang = $_POST['biansuxiangValue'];
    $gas = $_POST['gasValue'];
    $autos = $_POST['autoValue'];
    $config= $_POST['configvalue'];



    $seats = (int)($_POST['seats']);
    
    
    $price = (int)($_POST['price']);


    //联系人信息
    $person = $_POST['person'];
    $phone = $_POST['phone'];

    //这两个数据只有我们能看见
    $check_date = $_POST['meetDate'];
    $check_time = $_POST['meetTime'];
    $vin = $_POST['vin'];

    $address = $_POST['address'];
    $city = $_POST['city'];
    $postal = $_POST['postal'];
    $comment = $_POST['comment'];
    

    $user_id = (int)($_POST['userId']);



    /*
    $imageName = mysqli_real_escape_string($_FILES["image"]["name"]);
    $imageData = mysqli_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
    $imageType = mysqli_real_escape_string($_FILES["image"]["type"]);*/


        //mysqli_query($conn,"set names utf8");

            //return mysqli_insert_id($conn);
            if(isset($_POST['submit'])){
                    mysqli_query($conn,"INSERT INTO `secondhandcar`(`brand`, `make`, `color`, `types`, `seats`, `years`, `price`, `mile`, `biansuxiang`, `gas`, `autos`, `config`, `check_date`, `check_time`, `vin`, `person`, `phone`, `address`, `city`, `postal`, `comment`, `userId`, `valid`) 
                    VALUES ('$brand','$make', '$color', '$type',$seats,'$years',$price,$mile,'$biansuxiang','$gas','$autos','$config', '$check_date', '$check_time', '$vin','$person','$phone', '$address', '$city', '$postal', '$comment', $user_id, 0)");
            }
                //mysql_query("INSERT INTO `secondhandcar` VALUES('$imageName','$imageData')");

                
    

    
    //echo json_encode($years+$brand+$make+$mile+$types+$biansuxiang+$gas+$autos+$seats+$price+$person+$phone);
    mysqli_close($conn);
  
    
?>