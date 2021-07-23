<?php 

require_once 'conn.php';
if((isset($_POST['user_id'])) && (isset($_POST['label_n'])) && (isset($_POST['label_name'])) ){
    $data = array();
    $label_name = mysqli_real_escape_string($link,$_POST['label_name']);
    $user_id = mysqli_real_escape_string($link,$_POST['user_id']);
    $label_no = mysqli_real_escape_string($link,$_POST['label_n']);
    $date_now = date("d-m-Y"). "," .date("h:i:sa");
    $query = "UPDATE `user_label_notes` SET `label_name` = '$label_name'  WHERE  `id` = '$label_no' AND `user_id` = '$user_id' ";
    $update_query = mysqli_query($link,$query);
    if($update_query){
        $data['status'] = '201';
        $data['time'] = $date_now;
        $data['error'] = 'Updated Sucessfully';
        echo json_encode($data);
    }else{
        $data['status'] = '401';
        $data['error'] = 'Not updated error in query ';
        echo json_encode($data);
    }



}else{

}



?>