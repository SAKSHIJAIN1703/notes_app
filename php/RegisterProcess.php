<?php

require_once 'conn.php';

if(isset($_POST['email'])){

    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    
    $email = mysqli_real_escape_string($link, $_POST['email']) ;
    $password = mysqli_real_escape_string($link, $_POST['password']) ;
    $name = mysqli_real_escape_string($link, $_POST['name']) ;
    $hashed_password = hash("sha512", $password);
    $result = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '$email'");
    if (mysqli_num_rows($result) !=0 ) { 
        $data['status'] = 301;
        $data['error'] = 'This Email ID is already registered';
    }else{
    $result_insert = mysqli_query($link, "INSERT INTO `users` (`email`,`password`,`name`)
    VALUES ('$email','$hashed_password','$name');");
    if ($result_insert) {
        $result_id = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$hashed_password' ");
        if (mysqli_num_rows($result_id) !=0 ) {
            $row=mysqli_fetch_array($result_id);
                session_start();
                $_SESSION['sess_user']=$email;
                $_SESSION['sess_id']=$row['id'];
                $_SESSION['user_name'] = $row['name'];
                $data['status'] = 201;
              
        } 
        // $data['status'] = 201;
        // $data['error'] = 'Successfully Created'; 

    }
}
    echo json_encode($data);
}
?>