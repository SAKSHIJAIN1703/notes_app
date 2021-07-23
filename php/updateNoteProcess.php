<?php 

require_once 'conn.php';
if((isset($_POST['user'])) && (isset($_POST['title'])) ){
    $data = array();
    $title = mysqli_real_escape_string($link,$_POST['title']);
    $description = mysqli_real_escape_string($link,$_POST['description']);
    $user_id = mysqli_real_escape_string($link,$_POST['user']);
    $note_id = mysqli_real_escape_string($link,$_POST['note_id']);
    $date_now = date("d-m-Y"). "," .date("h:i:sa");
    $query = "UPDATE `user_notes` SET `title` = '$title',`description` = '$description' WHERE  `id` = '$note_id'; ";
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