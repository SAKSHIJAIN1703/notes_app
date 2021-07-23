<?php 

require_once 'conn.php';
if((isset($_POST['color'])) && (isset($_POST['note_id'])) ){
    $data = array();
    $hex_color = mysqli_real_escape_string($link,$_POST['color']);
    $note_id = mysqli_real_escape_string($link,$_POST['note_id']);
    $query = "UPDATE `user_notes` SET `color` = '$hex_color' WHERE  `id` = '$note_id'; ";
    $update_query = mysqli_query($link,$query);
    if($update_query){
        $data['status'] = 'color 201';
        $data['error'] = 'Updated Sucessfully';
        echo json_encode($data);
    }else{
        $data['status'] = '701';
        $data['error'] = 'Not updated error in query ';
        echo json_encode($data);
    }



}else{

}



?>