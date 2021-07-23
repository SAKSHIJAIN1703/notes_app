<?php

require_once 'conn.php';

if (mysqli_connect_error()){
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
    if (isset($_POST['user_id'])){
        $data = array();
        $dataSet = array();
        $sess_id = mysqli_real_escape_string($link,$_POST['user_id']);
        $result = mysqli_query($link, "SELECT * FROM `user_notes` WHERE `user_id` =  '$sess_id' ");
        if(mysqli_num_rows($result) > 0){
           while($row = mysqli_fetch_all($result)){
            //    print_r($row);
              $data[] = $row;    
           }
           echo json_encode($data[0]);
        }else{
            $data['status'] = '601';
            $data['error'] = 'No record found';
        }
        
    }else{ 
      echo "error";
    }
?>