<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

    $servername = 'localhost:8889';
    $username = 'root';
    $password = '84503770';
    $database = 'secondhand';
    $conn = mysqli_connect($servername, $username, $password,$database);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_GET['id'])){
        $q = $_GET['id'];
        mysqli_query($conn,"set names utf8");
        $r = "SELECT * from store WHERE item_id ='".$q."'" ;
        $result = mysqli_query($conn,$r);
        while($rs = mysqli_fetch_assoc($result)){
            $rows[] = $rs;
        }
    }
    else if(isset($_GET['Random'])){
        $r = "SELECT * from store ORDER BY RAND() LIMIT 3";
        $resultr = mysqli_query($conn,$r);
        while($rs = mysqli_fetch_assoc($resultr)){
            $rows[] = $rs;
        }
    }else{
      mysqli_query($conn,"set names utf8");
      $r1 = "SELECT * FROM store";
      $result1 = mysqli_query($conn,$r1);
      while($rs1 = mysqli_fetch_assoc($result1)){
          $rows[] = $rs1;
      }
    }
    
  echo json_encode($rows);
  mysql_close($conn);
  
    
?>