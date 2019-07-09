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
    $type = $_POST['types'];
    $make = $_POST['make'];
    $color = $_POST['color'];
    $seats = (int)($_POST['seats']);
    $discount = (int)($_POST['discount']);

    $fullprice = (int)($_POST['fullprice']);
    $firstpay = (int)($_POST['firstpay']);
    $monthpay = (int)($_POST['monthpay']);
    $buyback = (int)($_POST['buyback']);

    $monthleft = (int)($_POST['monthleft']);
    $mile = (int)($_POST['mile']);

    $city = $_POST['city'];
    
    $biansuxiang = $_POST['biansuxiangValue'];
    $gas = $_POST['gasValue'];
    $autos = $_POST['autoValue'];
    $config= $_POST['configvalue'];

    


    /*
    $imageName = mysqli_real_escape_string($_FILES["image"]["name"]);
    $imageData = mysqli_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
    $imageType = mysqli_real_escape_string($_FILES["image"]["type"]);*/


        //mysqli_query($conn,"set names utf8");

            //return mysqli_insert_id($conn);
            if(isset($_POST['submit'])){
                mysqli_query($conn,"INSERT INTO `newCar`(`year`, `brand`, `type`, `color`, `make`, `seats`, `discount`, `fullprice`, `firstpay`, `monthpay`, `buyback`, `monthleft`, `mile`, `city`, `biansuxiang`, `gas`, `auto`, `config`) 
                VALUES ($year, '$brand', '$type', '$color', '$make', $seats, $discount, $fullprice, $firstpay, $monthpay, $buyback, $monthleft, $mile, '$city', '$biansuxiang', '$gas', '$autos', '$config')");
            }

                //mysql_query("INSERT INTO `secondhandcar` VALUES('$imageName','$imageData')");



    
    //echo json_encode($years+$brand+$make+$mile+$types+$biansuxiang+$gas+$autos+$seats+$price+$person+$phone);
    mysqli_close($conn);
  
    
?>