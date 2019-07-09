<?php
    $servername = 'localhost';
    $username = 'guchen';
    $password = '123qwer';
    $database = 'drivebeat';
    $conn = mysqli_connect($servername, $username, $password,$database);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_GET['id'])){
        $q = $_GET['id'];
        mysqli_query($conn,"set names utf8");
        $r = "SELECT * from carinfo2 WHERE car_id ='".$q."'" ;
        $result = mysqli_query($conn,$r);
        while($rs = mysqli_fetch_assoc($result)){
            $rows[] = $rs;
        }
    }

    
    else if(isset($_GET['uid'])){
      $q = $_GET['uid'];
      mysqli_query($conn,"set names utf8");
      $r = "SELECT * from carinfo2 WHERE userId ='".$q."'" ;
      $result = mysqli_query($conn,$r);
      while($rs = mysqli_fetch_assoc($result)){
          $rows[] = $rs;
      }
    }


    

    else if(isset($_GET['Random'])){
        $r = "SELECT * from carinfo2 ORDER BY RAND() LIMIT 3";
        $resultr = mysqli_query($conn,$r);
        while($rs = mysqli_fetch_assoc($resultr)){
            $rows[] = $rs;
        }
    }

    else{
      mysqli_query($conn,"set names utf8");
      $r1 = "SELECT * FROM carinfo2 WHERE valid=1";
      $result1 = mysqli_query($conn,$r1);
      while($rs1 = mysqli_fetch_assoc($result1)){
          $rows[] = $rs1;
      }
    }
    
  echo json_encode($rows);
  mysql_close($conn);
  
    
?>