<?php
session_start();
if(isset($_SESSION["sess_user"])){
 header("Location: index.php");
}
else{ 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    

  <!-- Enter a proper page title here -->
  <title>Home | Sticky Notes</title>

  <!-- CSS to include bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- css to include style.css -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <!-- required meta tags essential for seo and link sharing -->

  <!-- Enter a proper description for the page in the meta description tag -->
  <meta name="description" content="ENTER_PAGE_DESCRIPTION">

  <!-- Enter a keywords for the page in tag -->
  <meta name="Keywords" content="ENTER_KEYWORDS_HERE">

  <!-- Enter Page title -->
  <meta property="og:title" content="ENTER_PAGE_TITLE" />

  <!-- Enter Page URL -->
  <meta property="og:url" content="ENTER_PAGE_URL" />

  <!-- Enter page description -->
  <meta property="og:description" content="ENTER_PAGE_DESCRIPTION">

  <!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->
  <meta property="og:image" itemprop="image" content="ENTER_IMAGE_URL" />
  <meta property="og:image:secure_url" itemprop="image" content="ENTER_IMAGE_URL" />
  <meta property="og:image:width" content="600">
  <meta property="og:image:height" content="315">
  <meta property="og:type" content="website" />

  <!-- font awesome -->
  <script src="https://use.fontawesome.com/ebc80d226d.js"></script>

  <script src="https://use.fontawesome.com/ebc80d226d.js"></script>
  <!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
  <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>

  <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
  <style>
  /* CSS */
   .signinform{
       border:1px solid #fff;
       border-radius:20px;
       
      box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
   }
   .title{
       line-height: 1;
       font-weight: 700;
   }
   input[type=checkbox] {
    width: 2em ; 
    font-size: 1em;
    display: inline-block;
}

.form-submit {
    display: inline-block;
    background: #6dabe4;
    color: #fff;
    border-bottom: none;
    width: auto;
    padding: 12px 35px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    /* margin-top: 15px; */
    cursor: pointer;
}
.rowsignup a{
    text-decoration: none;
}
input {
    width: 100%;
    display: block;
    border: none;
    border-bottom: 1px solid #999;
    padding: 6px 30px;
   border-radius:0px;
    box-sizing: border-box;
}


.form-group.input_type label {
    position: absolute;
    top: 15%;
    color: #222;
}
input:focus{
    outline:none;
    border-bottom:1px solid #000;

}
input:focus::-webkit-input-placeholder{
    color:#000;
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  font-size:14px;}
  </style>


</head>

<body>

   <div class="d-none d-lg-block" >
       <div class="container">
           <div class="row my-5">
               <div class="offset-md-2 col-8 signinform">
                   <div class="row py-5">
                       
                       <div class="col-6 pt-5 p-5">
                           <h3 class="title" style="margin-bottom:30px;">Sign up</h3>
                           <form action="" style="margin:auto" method="post">
                           <div class="form-group input_type mb-4" style="position:relative;">
                                <label for="your_name"><i class="fa fa-user icon"></i></label>
                                <input type="text" name="name" id="name_desktop" placeholder="Your Full Name">
                            </div>
                           <div class="form-group input_type mb-4" style="position:relative;">
                                <label for="your_name"><i class="fa fa-user icon"></i></label>
                                <input type="email" name="email" id="email_desktop" placeholder="Your Email">
                            </div>
                            <div class="form-group input_type" style="position:relative;">
                                <label for="your_pass"><i class="fa fa-key icon"></i></label>
                                <input type="password" name="password" id="password_desktop" placeholder="Your Password">
                            </div>
                            <div class="form-group input_type" style="position:relative;">
                                <label for="your_pass"><i class="fa fa-key icon"></i></label>
                                <input type="password" name="cnfm_password" id="cnfm_password_desktop" placeholder="Your Confirm Password">
                            </div>
                          
                                <!-- <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user icon"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Useremail" aria-label="Useremail" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"> </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password"  aria-describedby="basic-addon1">
                                </div> -->
                                
                         
                                 <div class="form-group mt-4">
                                     <input type="submit" class="form-submit btn" id="signup_desktop" value="Sign Up">
                                 </div>
                            </form>


                            <div class="row mt-3 rowsignup">
                                <div class="col-12" style="font-size:14px;">Have a account?<a href="login.php">&nbsp;Sign In</a></div> 
                            
                            </div>
                       </div>
                       <div class="col-6 p-5">
                           <div class="signin-image" style="width:100%;">
                               <img src="images/signup-image.jpg">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="d-block d-lg-none" >
       <div class="container">
           <div class="row">
               <div class="col-12 signinform mt-3 mb-3">
                   <div class="row ">
                       
                       <div class="col-12 mb-4">
                           <h3 class="title text-center" style="margin-bottom:30px;">Sign up</h3>
                           <form action="" style="margin:auto" method="POST">
                           <div class="form-group input_type mb-4" style="position:relative;">
                                <label for="your_name"><i class="fa fa-user icon"></i></label>
                                <input type="text" name="name" id="name_mobile" placeholder="Your Full Name">
                            </div>
                           <div class="form-group input_type mb-4" style="position:relative;">
                                <label for="your_name"><i class="fa fa-user icon"></i></label>
                                <input type="email" name="email" id="email_mobile" placeholder="Your Email">
                            </div>
                            <div class="form-group input_type" style="position:relative;">
                                <label for="your_pass"><i class="fa fa-key icon"></i></label>
                                <input type="password" name="password" id="password_mobile" placeholder="Your Password">
                            </div>
                            <div class="form-group input_type" style="position:relative;">
                                <label for="your_pass"><i class="fa fa-key icon"></i></label>
                                <input type="password" name="cnfm_password" id="cnfm_password_mobile" placeholder="Your Confirm Password">
                            </div>
                          
                                <!-- <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user icon"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Useremail" aria-label="Useremail" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"> </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password"  aria-describedby="basic-addon1">
                                </div> -->
                                
                         
                                 <div class="form-group mt-4 text-center">
                                     <input type="submit" class="form-submit btn" id="signup_mobile" value="Sign Up">
                                 </div>
                            </form>


                            <div class="row mt-3 rowsignup">
                                <div class="col-12" style="font-size:14px;">Have a account?<a href="login.php">&nbsp;Sign In</a></div> 
                            
                            </div>
                       </div>
                       <div class="col-12 mb-3">
                           <div class="signin-image text-center" style="width:100%;">
                               <img src="images/signup-image.jpg">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>


  <!-- Optional JavaScript -->

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script>
      function validateEmailMobile() {
            var email = $("#email_mobile").val();
            var emailReg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
            if (emailReg.test(email)) {
                return true;
            } else {
                return false;
            }
        }
        function validateEmailDesktop() {
            var email = $("#email_desktop").val();
            var emailReg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
            if (emailReg.test(email)) {
                return true;
            } else {
                return false;
            }
        }
    

        
        $('form').on('submit', function (e) {
            e.preventDefault();
            var error = "";

            if(validateEmailMobile()) {

            }else{
                $("#email_mobile").css("border-color","red");
                error = error + 'email';
            }

            if($("#password_mobile").val() == ""){
                $("#password_mobile").css("border-color","red");
                error = error + 'password';
            }else{
                
            }
            if($("#cnfm_password_mobile").val() != $("#password_mobile").val()){
               alert('Password not match');
               error = error + 'not match';
            }else{
                
            }
            if($("#name_mobile").val() == ""){
                $("#name_mobile").css("border-color","red");
                error = error + 'name';
            }else{
                
            }

            if(error == ""){
              
                $.ajax({
                    type:'POST',
                    url:'php/RegisterProcess.php',
                    dataType: "json",
                    data:{
                        name : $("#name_mobile").val(),
                        email : $("#email_mobile").val(),
                        password: $("#password_mobile").val()
                    },
                    success:function(data){

                      console.log('form');
                        if(data.status == 201){
                            alert('Successfully created your account');
                            window.location = "index.php";
                        }else if(data.status == 301){
                            alert(data.error);
                            window.location = "login.php";
                            
                        }
                        
                    }
                });
            }else{

            }
        });
        $('form').on('submit', function (e) {
            e.preventDefault();
            var error = "";

            
            if(validateEmailDesktop()) {

            }else{
                $("#email_desktop").css("border-color","red");
                error = error + 'email';
            }

            if($("#password_desktop").val() == ""){
                $("#password_desktop").css("border-color","red");
                error = error + 'password';
            }else{
                
            }
            if($("#cnfm_password_desktop").val() == ""){
                $("#cnfm_password_desktop").css("border-color","red");
                error = error + 'cnfm password';
            }else{
                
            }
            if($("#cnfm_password_desktop").val() != $("#password_desktop").val()){
                alert('Password not match');
                error = error + 'not match';
            }else{
                
            }
            if($("#name_desktop").val() == ""){
                $("#name_desktop").css("border-color","red");
                error = error + 'name';
            }else{
                
            }

            if(error == ""){
              
                $.ajax({
                    type:'POST',
                    url:'php/RegisterProcess.php',
                    dataType: "json",
                    data:{
                        name : $("#name_desktop").val(),
                        email : $("#email_desktop").val(),
                        password: $("#password_desktop").val()
                    },
                    success:function(data){
                        if(data.status == 201){   
                            alert('Successfully created your account');
                            window.location = "index.php";
                        }else if(data.status == 301){
                            alert(data.error);
                            window.location = "login.php";
                        }
                        
                    },
                    error: function (e) {
                        alert(`Failed to remove comment!`);
                        console.log(e);
                    }
                });
            }else{

            }
        });
 </script>
</body>

</html>
<?php } ?>
