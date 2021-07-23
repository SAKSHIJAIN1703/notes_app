<?php 

require_once 'conn.php';
if(isset($_POST['title'])){
    $data = array();
    date_default_timezone_set("Asia/Calcutta");
   // $date_now = date("r");
    $date_now = date("d-m-Y") . "," . date("h:i:sa");
    $title = mysqli_real_escape_string($link,$_POST['title']);
    $description = mysqli_real_escape_string($link,$_POST['desc']);
    $session_id = mysqli_real_escape_string($link,$_POST['sess_id']);
    $result = mysqli_query($link, "SELECT max(id) FROM `user_notes`");
    // if($result = mysqli_query($conn,"SELECT max(ID) FROM `contactus`"))  
    // {  
    //         echo $result;
    // }
    $id = 0;
    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;

    $query = "insert into `user_notes` (`title`,`description`,`user_id`,`date_time`) VALUES('$title','$description','$session_id','$date_now')";
    $run_q = mysqli_query($link,$query);
    if($run_q){
        $data['status'] = '201';
        $data['time'] = $date_now;
        $data['note_id'] = $id;
        $data['error'] = 'Added Sucessfully';
        echo json_encode($data);
    }else{
        $data['status'] = '401';
        $data['error'] = 'Not added';
        echo json_encode($data);
    }



}else{

}



?>