<?php

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

    $servername = 'localhost';
    $username = 'guchen';
    $password = '123qwer';
    $database = 'drivebeat';
    $conn = mysqli_connect($servername, $username, $password,$database);


    $key = '12dsSDSdsSASDA129';

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $name = $_POST['name'];//post获得用户名表单值
    $password = $_POST['password'];//post获得用户密码单值
    $submit = $_POST['submit'];
    function encode(array $payload, string $key, string $alg = 'SHA256')
    {
        $key = md5($key);
        $jwt = urlsafeB64Encode(json_encode(['typ' => 'JWT', 'alg' => $alg])) . '.' . urlsafeB64Encode(json_encode($payload));
        return $jwt . '.' . signature($jwt, $key, $alg);
    }

    function signature(string $input, string $key, string $alg)
    {
        return hash_hmac($alg, $input, $key);
    }
    function urlsafeB64Encode(string $input)
    {
        return str_replace('=', '', strtr(base64_encode($input), '+/', '-_'));
    }
    
    if ($submit == 'login'){//如果用户名和密码都不为空
             $sql = "SELECT * from login WHERE username = '".$name."' AND password ='".$password."'";
             $sqlForUid = "SELECT uid from login WHERE username = '".$name."' AND password ='".$password."'";//检测数据库是否有对应的username和password的sql
             $result = mysqli_query($conn,$sql);
             $uidr = mysqli_query($conn,$sqlForUid);//执行sql
             $rs = mysqli_fetch_assoc($uidr);
             $rows=mysqli_num_rows($result);//返回一个数值
             if($rows){//0 false 1 true
                $nowtime = time();
                $payload= [
                    'iss' => 'http://www.drivebeatclub.com',
                    'aud' => 'http://www.drivebeatclub.com',
                    'iat' => $nowtime,
                    'nbf' => $nowtime+10,
                    'exp' => $nowtime+604800,
                    'uid' => $rs['uid'],
                    'username' => $name
                  ];
                  $jwt = encode($payload,$key);
                  $res['token'] = $jwt;
                  $res['exp'] = $nowtime+604800;
                  $res['uid'] = $rs['uid'];

                  //echo json_encode(encode($payload,$key));
                  echo json_encode($res);
                  
                  
                  //header('HTTP/1.1 200 OK');
                 
           }else{
                http_response_code(204);
           }
            

    }else if($submit == 'signIn'){
        mysqli_query($conn,"INSERT into login (username,password) VALUES ('$name','$password')");
               //如果错误使用js 1秒后跳转到登录页面重试;
        echo "sign in";
    }

    
    mysqli_close($conn);//关闭数据库
?>