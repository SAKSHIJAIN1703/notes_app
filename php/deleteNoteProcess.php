<?php

require_once 'conn.php';

if (mysqli_connect_error()){
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
    if (isset($_POST['user'])){
        $data = array();
        $sess_id = mysqli_real_escape_string($link,$_POST['user']);
        $note_id = mysqli_real_escape_string($link,$_POST['note_id']);
        $result = mysqli_query($link, "DELETE FROM `user_notes` WHERE `id`='$note_id' AND  `user_id` =  '$sess_id'; ");
        if($result){
            $data['status'] = '201';
            $data['error'] = 'Delete Sucessfully';
            echo json_encode($data);
        }else{
            $data['status'] = '401';
            $data['error'] = 'Not Deleted error occur somthing happpens wrong!!';
            echo json_encode($data);
        }
        
    }else{ 
      echo "error";
    }
?>