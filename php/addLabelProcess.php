<?php 

require_once 'conn.php';
if((isset($_POST['label_new_name'])) && (isset($_POST['user_id'])) ){
    $data = array();
    $label = mysqli_real_escape_string($link,$_POST['label_new_name']);
    $user_id = mysqli_real_escape_string($link,$_POST['user_id']);
    $query = "insert into `user_label_notes` (`label_name`,`user_id`) VALUES('$label','$user_id')";
    $run_q = mysqli_query($link,$query);
    if($run_q){
        $data['status'] = '201';
        $data['error'] = 'Added Sucessfully';
        // $data['id'] = 
        echo json_encode($data);
    }else{
        $data['status'] = '401';
        $data['error'] = 'Not added';
        echo json_encode($data);
    }



}else{

}



?>