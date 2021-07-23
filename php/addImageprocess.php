<?php

require_once 'conn.php';
// print_r($_FILES["file"]["tmp_name"]);

if(isset($_FILES["file"]["tmp_name"])){
    $data = array();
    $data_image = array();
    $note_id = mysqli_real_escape_string($link,$_POST['note']);
    $imgfile=$_FILES["file"]["name"];
    // get the image extension
    $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
    // allowed extensions
    $allowed_extensions = array(".jpg","jpeg",".png");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if(!in_array($extension,$allowed_extensions))
    {
    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
    //rename the image file
    $imgnewfile=md5($imgfile).$extension;
    // Code for move image into directory
    move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/".$imgnewfile);
    // Query for insertion data into database
    }
    $imageselect = "select `image` from `user_notes` where `id` = '$note_id'";
    $imageResult = mysqli_query($link,$imageselect);
    $row = mysqli_fetch_assoc($imageResult);
    $imageData = $row['image'];
   // echo $imageData;
    if($imageData != ''){
        $imgUpdate = $imageData. "," .$imgnewfile;
      //  echo "not empty";
    }else{
        $imgUpdate = $imgnewfile;
        //  / echo "empty";
    }
           
    $result = mysqli_query($link, "UPDATE `user_notes` SET `image` = '$imgUpdate' WHERE  `id` = '$note_id'; ");
    //print_r($result);
    if ($result) {
        $data['error'] = 'Updated';
        $data['status'] = 201;
        $data['image'] = $imgnewfile;
        $data['image_all'] = $imgUpdate;
        
		     
    }else { 
        $data['status'] = 301;
        $data['error'] = 'error';
        
    }
    echo json_encode($data);
}else{
    echo "error";

}


?>