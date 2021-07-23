<?php
session_start();
if (!isset($_SESSION["sess_user"])) {
  header("Location: login.php");
} else {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- Enter a proper page title here -->
    <title>Home | Sticky Notes</title>
    <!-- CSS to include bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
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
    <!-- font awesome -->

    <script src="https://use.fontawesome.com/ebc80d226d.js"></script>

    <script src="https://use.fontawesome.com/ebc80d226d.js"></script>
    <!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
    <!-- //<link rel="shortcut icon" type="image/ico" href="favicon.ico" /> -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
    <style>
      .image-upload>input {
        display: none;
      }
    </style>


  </head>

  <body onclick='clickFunction()' onload="onLoadRun()" class="main_container">

    <!-- <div class="d-none d-lg-block" >
      -->
    <div class="wrapper">  
    <header class="header-main sticky_header header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <span class="bar-icon d-flex align-items-center justify-content-center"> <i class="fa fa-bars sidebar_bars"></i></span> <a class="navbar-brand" href="#" style="display:flex; align-items:center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
            <path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7zm2.85 11.1l-.85.6V16h-4v-2.3l-.85-.6A4.997 4.997 0 0 1 7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.63-.8 3.16-2.15 4.1z"></path>
          </svg> Notes</a>
        <div class="search_input d-flex flex-wrap flex-end" style="align-items:center;">
          <span class="icon_search"><i class="fa fa-search"></i></span><span class="input_search"><input class="search" type="text" placeholder="Search"></span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="align-items:center;">

          <ul class="navbar-nav  ml-auto">

            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li> -->

            <li class="nav-item dropdown_profile d-none d-lg-block">
              <img src="images/user.png" width="50px" height="36px">
              <div class="profile" style="padding: 9px 0;">
                <ul>
                  <li class="d-flex align-items-center user_text">
                    <img src="images/user.png" width="70px" height="50px">
                    <div class="user_name">
                      <h1><?php echo $_SESSION['user_name']; ?></h1>
                      <span><?php echo $_SESSION['sess_user']; ?></span>
                    </div>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li class="logout"><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item dropdown_profile_mobile d-lg-none">
              <div class="profile_mobile" style="padding: 9px 0;">
                <ul>
                  <li class="d-flex align-items-center user_text">
                    <img src="images/user.png" width="70px" height="50px">
                    <div class="user_name">
                      <h1><?php echo $_SESSION['user_name']; ?></h1>
                      <span><?php echo $_SESSION['sess_user']; ?></span>
                    </div>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li class="logout"><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
              </div>
            </li>

          </ul>
        </div>


      </nav>
    </header>

    <!-- </div> -->

    <aside class="sidebar">
      <ul>
        <li class="notes active"><span class="icon_sidebar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7zm2.85 11.1l-.85.6V16h-4v-2.3l-.85-.6A4.997 4.997 0 0 1 7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.63-.8 3.16-2.15 4.1z"></path>
            </svg></span><span class="icon_text"> Notes </span></li>
        <li class="edit-label" data-toggle="modal" data-target="#exampleModalLong"><span class="icon_sidebar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M20.41 4.94l-1.35-1.35c-.78-.78-2.05-.78-2.83 0L13.4 6.41 3 16.82V21h4.18l10.46-10.46 2.77-2.77c.79-.78.79-2.05 0-2.83zm-14 14.12L5 19v-1.36l9.82-9.82 1.41 1.41-9.82 9.83z"></path>
            </svg></span><span class="icon_text"> Edit Labels </span></li>
        <!-- <li class="bin"><span class="icon_sidebar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15 4V3H9v1H4v2h1v13c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V6h1V4h-5zm2 15H7V6h10v13z"></path><path d="M9 8h2v9H9zm4 0h2v9h-2z"></path></svg></span><span class="icon_text"> Bin </span></li>
         <li class="archive"><span class="icon_sidebar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.54 5.23l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.83 1H5.42l.82-1zM5 19V8h14v11H5zm11-5.5l-4 4-4-4 1.41-1.41L11 13.67V10h2v3.67l1.59-1.59L16 13.5z"></path></svg></span><span class="icon_text"> Archieve </span></li> -->
      </ul>
    </aside>
    <!-- Optional JavaScript -->
    <div class="page_wrap">
      <div class="createNoteContainer p-2 mt-3 mx-auto rounded-lg">
        <div class="title_note">
          <div class="d-flex justify-content-between">
            <input placeholder="Title" id="title" name="title">
            <button class="btn" id="save_note">Save</button>
          </div>
        </div>
        <textarea style="width:100%; height: auto;" id="create_note" rows="1" class="form-control mt-1" placeholder="Take a note....."></textarea>
      </div>
      <div class="container mt-3">
        <div id="show_note" class="row justify-content-center align-items-center">
        </div>
      </div>
    </div>
    <div class="edit_div" style="display:none;">
      <div class="edit_note  mx-auto container rounded-lg shadow">
        <div class="row">
          <div class="col-12 p-2">
            <div class="d-flex justify-content-between">
              <input placeholder="Title" id="edit_title" name="title">
              <div><button class="btn mr-3 rounded bg-grey" id="btn_edit">Save</button> <i class="fa fa-times close_note"></i></div>
            </div>
            <textarea style="width:100%; height: auto;" id="edit_desc" rows="10" class="form-control mt-1" placeholder="Take a note....."></textarea>
            <div class="buttons_div">
              <ul class="icon">
                <li class="p-1 mr-2 image-upload"><label for="file-input"><i class="fa fa-picture-o"></i></label><input id="file-input" type="file"></li>
                <li class="p-1 mr-2" id="color-list-icon" style="position:relative;"><i class="fas fa-palette"></i>
                  <div class="color_list p-2">
                    <div class="color m-1 color-p" data-color="#ff66b3"></div>
                    <div class="color m-1 color-g" data-color="#c4ff4d"></div>
                    <div class="color m-1 color-y" data-color="#ffff00"></div>
                    <div class="color m-1 color-pur" data-color="#bf80ff"></div>
                    <div class="color m-1 color-o" data-color="#ffa31a"></div>
                    <div class="color m-1 color-w" data-color="#fff"></div>
                  </div>
                </li>
                <li class="align-items-center d-flex date" style="float:right;display: d-flex;"></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true" style="padding-left: 0 !important; padding-right: 0!important; padding-left:0! important;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              
                <div class="modal-body">
    <div class="edit_div" style="display:none;">
      <div class="edit_note  mx-auto container rounded-lg shadow">
        <div class="row">
          <div class="col-12 p-2">
            <div class="d-flex justify-content-between">
              <input placeholder="Title" id="edit_title" name="title">
              <div><button class="btn mr-3 rounded bg-grey" id="btn_edit">Save</button> <i class="fa fa-times close_note"></i></div>
            </div>
            <textarea style="width:100%; height: auto;" id="edit_desc" rows="10" class="form-control mt-1" placeholder="Take a note....."></textarea>
            <div class="buttons_div">
            <ul class="icon">
            <li class="p-1 mr-2 image-upload"><label for="file-input"><i class="fa fa-picture-o" ></i></label><input id="file-input" type="file"></li>
            <li class="p-1 mr-2" id="color-list-icon" style="position:relative;"><i class="fas fa-palette"></i>
             <div class="color_list p-2">
              <div class="color m-1 color-p" data-color="#ff66b3"></div>
              <div class="color m-1 color-g" data-color="#c4ff4d"></div>
              <div class="color m-1 color-y" data-color="#ffff00"></div>
              <div class="color m-1 color-pur" data-color="#bf80ff"></div>
              <div class="color m-1 color-o" data-color="#ffa31a"></div>
              <div class="color m-1 color-w" data-color="#fff"></div>
             </div>
            </li>
            <li class="align-items-center d-flex date" style="float:right;display: d-flex;"></li>
            </ul></div>
           
          </div>
        </div>
      </div>
    </div> -->
    <!-- </div>
               

            </div>
        </div>
    </div> -->
    <div class="modal fade modal-edit-label" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="padding-left: 0 !important; padding-right: 0!important; padding-left:0! important;">
      <div class="modal-dialog edit_label" role="document">
        <div class="modal-content custom-form">

          <div class="modal-body label_div">
            <h5 class="heading">Edit labels</h5>
            <div class="row">
              <div class="col-2"><i class="fa fa-times cross_clk"></i></div>
              <div class="col-8"><input type="text" id="input_new_label" placeholder="Create new label"></div>
              <div class="col-2 new-label"><i class="fa fa-check"></i></div>
            </div>


          </div>
          <div class="modal-footer">
            <button class="btn mr-3 rounded bg-transparent" type="button" data-dismiss="modal" aria-label="Close">Close</button>
          </div>

        </div>
      </div>
    </div>
    <div class="modal fade confirm_div" id="deleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmation" aria-hidden="true" style="padding-left: 0 !important; padding-right: 0!important; padding-left:0! important;">
      <div class="modal-dialog" role="document">
        <div class="modal-content custom-form">
          <div class="modal-body">
            <p>We’ll delete this label and remove it from all of your Keep notes. Your notes won’t be deleted.</p>
            <div class="final_del" style="float:right;">
              <button class="btn mr-3 rounded bg-grey" type="button" data-dismiss="modal" aria-label="Close">Cancel</button>
              <button class="btn mr-3 rounded bg-danger dlt_label_but" style="opacity:0.5;" type="button">Delete</button>
            </div>

          </div>


        </div>
      </div>
    </div>
 </div>   
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(".fa.fa-bars.sidebar_bars").click(function() {
        $("aside.sidebar").toggleClass("sidebar_collapse");
      });
      // $(".sidebar ul li:not(.active)").hover(function(){    
      //   $(this).css("background","rgba(60, 64, 67, 0.08)");
      // });
      function onLoadRun() {
        showNotes();
        showLabel();
      }
      var user_id = <?php echo $_SESSION['sess_id']; ?>;

      function showLabel() {

        $.ajax({ //yha hm requres bhejre hme notes bhejo hs
          type: 'post',
          url: 'php/showLabelProcess.php',
          data: {
            user_id
          },
          dataType: "json",
          success: function(data) { //aur jb notes aajaye toh yhe sb code isme jo hai wo run kardena success function ye bolr // hmare paas data aagaya. aab isse hme  note banane aur note div se bante toh hme div banana
            var label = ``;
            data.forEach(labelData => {
              label = `<div class="row mt-3 labels_ren">
                        <div class="col-2 label_name" label_no="${labelData[0]}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg></div>
                        <div class="col-8" ><input type="text" class="input_label"  value="${labelData[2]}" ></div>
                        <div class="col-2 save_label label_rename" label_no="${labelData[0]}"><i class='fas fa-pen' style='font-size:20px' title="Rename label"></i></div>
                    </div>`;
              $(".modal-body.label_div").append(label);
            });
            //     $('.modal-body .labels_ren').mouseover(function(){
            //         $(this).find('.label_name').html(`<i class='far fa-trash-alt delete-label' style='font-size:20px' title="Delete label"></i>`);
            //     });
            //     $('.modal-body .labels_ren').mouseout(function(){
            //         $(this).find('.label_name').html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg>`);
            //     });
            $('.modal-body .labels_ren').focusin(function() {
              // console.log($(this).parent().parent().find('.col-2.label_name'));
              $(this).find('.col-2.label_name').html(`<i class='far fa-trash-alt delete-label' style='font-size:20px' title="Delete label"></i>`);
              $(this).find('.col-2.save_label.label_rename').html(`<i class="fa fa-check edit-label"></i>`);
              $(".delete-label").click(function(e) {
                var label_num = $(this).parent().attr('label_no');
                $("#deleteConfirmation").modal('show');
                $('.dlt_label_but').click(function(e) {
                  $.ajax({
                    type: "POST",
                    url: "php/deleteLabelProcess.php",
                    data: {
                      label_n: label_num,
                      user_id: user_id,
                    },
                    dataType: "json",
                    success: (data) => {
                      if (data.status == '201') {
                        var ele = $(".labels_ren").find(`[label_no='${label_num}']`);
                        ele.parent().remove();

                        $("#deleteConfirmation").modal('hide');
                      } else if (data.status == '401') {
                        alert(data.error);
                      } else {
                        alert("Something went wrong!!");
                      }

                    },
                    error: function(xhr, status, error) {
                      var errorMessage = xhr.status + ': ' + xhr.statusText
                    }
                  });
                });
              });

              $(".edit-label").click(function(e) {

                var label_no = $(this).parent().attr('label_no');
                var label_rename = $(this).parent().parent().find('.col-8 .input_label').val();

                if (label != '') {
                  $.ajax({
                    type: "POST",
                    url: "php/editLabelProcess.php",
                    data: {
                      label_n: label_no,
                      label_name: label_rename,
                      user_id: user_id,
                    },
                    dataType: "json",
                    success: (data) => {
                      if (data.status == '201') {
                        console.log($(this).parent().parent().html());
                        $(this).parent().parent().find('.col-8 input.input_label').val(`${label_rename}`);
                        $(this).parent().parent().find('.col-2.label_rename').html(`<i class='fas fa-pen' style='font-size:20px' title="Rename label"></i>`);
                        $(this).parent().parent().find('.col-2.label_name').html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg>`);
                        $('.modal-body .labels_ren').focusout(function() {
                          // console.log($(this).parent().parent().find('.col-2.label_name'));
                          $(this).find('.col-2.label_name').html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg>`);

                        });
                      } else if (data.status == '401') {
                        alert(data.error);
                      } else {
                        alert("Something went wrong!!");
                      }

                    },
                    error: function(xhr, status, error) {
                      var errorMessage = xhr.status + ': ' + xhr.statusText
                    }
                  });
                }
              });

            });



          }

        });

      }
      $('.cross_clk').click(function(e) {
        $("#input_new_label").val('')
      });
      $(".new-label").click(function(e) {
        var label = $("#input_new_label").val();
        if (label != '') {
          $.ajax({
            type: "POST",
            url: "php/addLabelProcess.php",
            data: {
              user_id: user_id,
              label_new_name: label,
            },
            dataType: "json",
            success: (data) => {
              if (data.status == '201') {
                $('.label_div.modal-body').append(` <div class="row mt-3 labels_ren">
                        <div class="col-2 label_name"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg></div>
                        <div class="col-8"><input type="text" class="input_label" placeholder="Create new label" value="${label}"></div>
                        <div class="col-2 label_rename"><i class='fas fa-pen' style='font-size:20px' title="Rename label"></i></div>
                    </div>`)
                $('#input_new_label').val('');
                //  let menu = document.getElementById('menu');
                //   let sidebar_item = $('.sidebar ul');
                //  let li = ` <li class="${label}"><span class="icon_sidebar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg></span><span class="icon_text">${label}</span></li>`;
                //  sidebar_item.insertBefore(li,sidebar_item.firstElementChild);
                $(`<li class="${label}" lbl_nu=" "><span class="icon_sidebar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg></span><span class="icon_text">${label}</span></li>`).insertAfter('.sidebar ul li.notes');

              } else if (data.status == '401') {
                alert(data.error);
              } else {
                alert("Something went wrong!!");
              }
              $('.modal-body .labels_ren').focusin(function() {
                // console.log($(this).parent().parent().find('.col-2.label_name'));
                $(this).find('.col-2.label_name').html(`<i class='far fa-trash-alt delete-label' style='font-size:20px' title="Delete label"></i>`);
                $(this).find('.col-2.save_label.label_rename').html(`<i class="fa fa-check edit-label"></i>`);
                $(".delete-label").click(function(e) {
                  var label_num = $(this).parent().attr('label_no');
                  $("#deleteConfirmation").modal('show');
                  $('.dlt_label_but').click(function(e) {
                    $.ajax({
                      type: "POST",
                      url: "php/deleteLabelProcess.php",
                      data: {
                        label_n: label_num,
                        user_id: user_id,
                      },
                      dataType: "json",
                      success: (data) => {
                        if (data.status == '201') {
                          var ele = $(".labels_ren").find(`[label_no='${label_num}']`);
                          ele.parent().remove();
                          $("#deleteConfirmation").modal('hide');
                        } else if (data.status == '401') {
                          alert(data.error);
                        } else {
                          alert("Something went wrong!!");
                        }

                      },
                      error: function(xhr, status, error) {
                        var errorMessage = xhr.status + ': ' + xhr.statusText
                      }
                    });
                  });
                });

                $(".edit-label").click(function(e) {

                  var label_no = $(this).parent().attr('label_no');
                  var label_rename = $(this).parent().parent().find('.col-8 .input_label').val();

                  if (label != '') {
                    $.ajax({
                      type: "POST",
                      url: "php/editLabelProcess.php",
                      data: {
                        label_n: label_no,
                        label_name: label_rename,
                        user_id: user_id,
                      },
                      dataType: "json",
                      success: (data) => {
                        if (data.status == '201') {
                          console.log($(this).parent().parent().html());
                          $(this).parent().parent().find('.col-8 input.input_label').val(`${label_rename}`);
                          $(this).parent().parent().find('.col-2.label_rename').html(`<i class='fas fa-pen' style='font-size:20px' title="Rename label"></i>`);
                          $(this).parent().parent().find('.col-2.label_name').html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg>`);
                          $('.modal-body .labels_ren').focusout(function() {
                            // console.log($(this).parent().parent().find('.col-2.label_name'));
                            $(this).find('.col-2.label_name').html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg>`);

                          });

                        } else if (data.status == '401') {
                          alert(data.error);
                        } else {
                          alert("Something went wrong!!");
                        }

                      },
                      error: function(xhr, status, error) {
                        var errorMessage = xhr.status + ': ' + xhr.statusText
                      }
                    });
                  }
                });

              });

            },
            error: function(xhr, status, error) {
              var errorMessage = xhr.status + ': ' + xhr.statusText
            }
          });

        }

      });



      var click;

      function showNotes() {

        $.ajax({ //yha hm requres bhejre hme notes bhejo hs
          type: 'post',
          url: 'php/showNoteProcess.php',
          data: {
            user_id
          },
          dataType: "json",
          success: function(
            data) { 
            var note = ``;


            data.forEach(noteData => {
              let dateTime = noteData[4].split(",");
              var img_data = ``;
              let date = dateTime[0];
              let time = dateTime[1];
              
              let image = noteData[6].split(",");
              var img_count = image.length;
              var img_r = img_count % 3;
              var img_d = img_count / 3;
              console.log();
              var r = 0;
            if((img_count-1) != 0){
              if(img_r != 0){
                for(i = 1; i <= img_r; i++) {
                  if(i==1){
                    img_data = img_data + `<div class="row" style="margin-bottom: 2px;"><div class="col-12" style="padding-left:0px; padding-right:0px;"><img src="uploads/${image[img_count-i]}" style="width: 100%;height: 150px; border-radius:.5rem .5rem 0 0; "></div></div>`;
                  }else{
                  img_data = img_data +  `<div class="row" style="margin-bottom: 2px;"><div class="col-12" style="padding-left:0px; padding-right:0px;"><img src="uploads/${image[img_count-i]}" style="width: 100%;height: 150px; "></div></div>`;
                  }
                }
              }  
            
               for (j = 0 ; j < Math.floor(img_d); j++){ 
                r = j*3;   
                img_data = img_data + `<div class="row" style="margin-bottom: 2px;">`; 
                for(i = 1; i <= 3; i++) {
                  if(i==1){
                    img_data = img_data + `<div class="col-4" style="padding-left:0px; padding-right:0px;"><img src="uploads/${image[img_count-img_r-i-r]}" style="width: 100%;height: 100px;"></div>`;
                  }else if(i == 2){
                    img_data = img_data + `<div class="col-4"  style="padding-left:0px; padding-right:0px;"><img src="uploads/${image[img_count-img_r-i-r]}" style="width: 100%;height: 100px;"></div>`;
                  }else{
                    img_data = img_data + `<div class="col-4"  style="padding-left:0px; padding-right:0px;"><img src="uploads/${image[img_count-img_r-i-r]}" style="width: 100%;height: 100px;"></div>`;
                  }
                    
                }
                img_data = img_data + `</div>`;
               
             }
            }
           
              note = `<div class="rounded col-sm-12 col-md-4 col-lg-3 m-2 single_note" data-noteid="${noteData[0]}" style="background-color: ${noteData[5]}; border-color: ${noteData[5]} !important; " data-colorId="${noteData[5]}">
              <div class="image mb-2">
              ${img_data}
              </div>
              <div class="d-flex justify-content-between">
                <h1 class="note_head">${noteData[1]}</h1>  
                <i class="fa fa-times dlt_note" data-noteid="${noteData[0]}"></i> 
              </div>
              <p class="note_para">${noteData[2]}</p>
              <div class="buttons_div">
             <ul class="icon">
             <li class="image-upload">
            <label for="file-input">
            <i class="fa fa-picture-o" aria-hidden="true"></i>
            </label>    
            <input id="file-input" type="file"  class="noteFile" nt_id="${noteData[0]}" />
          </li>
             <li class="p-1 mr-2" id="color-list-icon" style="position:relative;"><i class="fas fa-palette"></i>
              <div class="color_list p-2">
               <div class="color m-1 color-p" data-color="#ff66b3"></div>
               <div class="color m-1 color-g" data-color="#c4ff4d"></div>
               <div class="color m-1 color-y" data-color="#ffff00"></div>
               <div class="color m-1 color-pur" data-color="#bf80ff"></div>
               <div class="color m-1 color-o" data-color="#ffa31a"></div>
               <div class="color m-1 color-w" data-color="#fff"></div>
              </div>
             </li>
             <li class="align-items-center d-flex date" style="float:right;display: d-flex;">${date}</li>
             </ul></div>
             
              </div>
              `;
              $("#show_note").prepend(note);
            });
           
         
            var formdata = new FormData;
            $('.noteFile').change(function(e) {
              // console.log($(this).attr('nt_id'));
              var fileName = this.files[0];
              var specify = $(this);
              var extension = ((this.files[0]).name).split('.').pop().toLowerCase();
              var allowed_extensions = ["jpg", "jpeg", "png"];

              if ($.inArray(extension, allowed_extensions) < 0) {
                alert('invalid image type');
              } else {
                alert('valid image type');
              }
              if ((this.files[0].size) > 2000000) {
                alert('imag size very high');
              } else {
                formdata.append("file", fileName);
                formdata.append("note", $(this).attr('nt_id'));
                $.ajax({
                  type: 'POST',
                  url: 'php/addImageprocess.php',
                  processData: false,
                  contentType: false,
                  dataType: "json",
                  data: formdata,
                  success: function(data) {
                    // console.log(specify);
                    if (data.status == 201) {
                      let image = (data.image_all).split(",");
                      var img_count = image.length;
                      specify.parents('.single_note').find('.image').prepend(`<div class="row" style="margin-bottom: 2px;"><div class="col" style="padding-left:0px; padding-right:0px;"><img src="uploads/${data.image}" style="width: 100%;height: 150px; "></div></div>`);
                    } else if (data.status == 301) {
                      alert(data.error);
                    } else if (data.status == 701) {
                      alert('update your about u have already inserted');
                    } else {

                    }

                  },
                error:function(error){
                console.log(error);
                }
                });
              }
            });



            $(".dlt_note").click(function(e) {
              e.stopPropagation();
              var id = $(this).attr('data-noteid');
              // console.log(id);
              $.ajax({
                type: "POST",
                url: "php/deleteNoteProcess.php",
                data: {
                  user: user_id,
                  note_id: id,
                },
                dataType: "json",
                success: (data) => {
                  if (data.status = '201') {
                    alert(data.error);
                    $(this).closest('.single_note').remove();
                  } else if (data.status = '401') {
                    alert(data.error);
                  } else {
                    alert("Something went wrong!!");
                  }
                },
                error: function(xhr, status, error) {
                  var errorMessage = xhr.status + ': ' + xhr.statusText
                }

              })
            });

            $(".single_note").click(function(e) {
              click = $(this);
              var id1 = $(this).attr('data-noteid');
              var note_color = $(this).attr('data-colorId')
              // console.log(id1);
              e.stopPropagation();
              let note = $(this).closest('.single_note');
              let title = note.find('.note_head').text();
              let dtime = note.find('.date').text();
              let id = $(this).closest('.single_note')[0].dataset.noteid;
              // console.log(id);
              let description = note.find('.note_para').text();
              // console.log(title);
              // console.log($(this).closest('p').html());

              $(".edit_div").addClass('show');
              if($('.edit_div').css('display','block')){
                $('body').addClass('handle_edit');
              }else if($('.edit_div').css('display','none')){
                $('body').removeClass('handle_edit');
              }
              $(".edit_note #edit_title").val(title);
              $(".edit_note").css("background-color", note_color);
              $(".edit_note").css("border-color", note_color);
              $(".edit_note input").css("background-color", note_color);
              $(".edit_note textarea").css("background-color", note_color);
              $(".edit_note #edit_desc").val(description);
              $(".edit_note .buttons_div ul li.date").html(dtime);
              $(".edit_note").attr("data-editnote", id);

              $(".edit_note #btn_edit").attr("data-noteid", id); 
              // $(".edit_note #btn_edit").attr("data-note", $(this)); //yedekho issliye kuch nhi chalra kyu yuun oo acha hmne dekha hi nhi
            });

            $(".single_note").mouseover(function() {
              $(this).toggleClass('shadow');
              $(this).find('.dlt_note').css("opacity", "1");
              $(this).find('.buttons_div ul li').css("opacity", "1");
            });
            $('.single_note').mouseout(function() {
              $(this).toggleClass('shadow');
              $(this).find('.dlt_note').css("opacity", "0");
              $(this).find('.buttons_div ul li').css("opacity", "0");
            });

            // $('.single_note .buttons_div ul li:not(:last)').mouseover(function(){
            //   $(this).css("background-color","rgba(60, 64, 67, 0.08)");
            // });

            // $('.single_note .buttons_div ul li:not(:last)').mouseout(function(){
            //   $(this).css("background-color","transparent");
            // });
            $('.single_note .buttons_div ul li#color-list-icon').mouseover(function() {
              $(this).find('.color_list').toggleClass('d-flex flex-wrap');
            });
            $('.single_note .buttons_div ul li#color-list-icon').mouseout(function() {
              $(this).find('.color_list').toggleClass('d-flex flex-wrap');
            });
            $('.edit_note .buttons_div ul li').not(":last").mouseover(function() {
              $(this).css("background-color", "rgba(60, 64, 67, 0.08)");
            });

            $('.edit_note .buttons_div ul li').not(":last").mouseout(function() {
              $(this).css("background-color", "transparent");
            });
            $('.edit_note .buttons_div ul li#color-list-icon').mouseover(function() {
              $(this).find('.color_list').toggleClass('d-flex flex-wrap');
            });
            $('.edit_note .buttons_div ul li#color-list-icon').mouseout(function() {
              $(this).find('.color_list').toggleClass('d-flex flex-wrap');
            });

            $(".single_note .buttons_div ul li#color-list-icon .color_list .color").click(function(e) {
              var Hexcolor = $(this).attr('data-color');
              var b = $(this).closest(".single_note");
              var noteId = $(this).closest(".single_note").attr("data-noteid");
              // console.log(noteId);

              // var b = $(this).parent('.single_note');

              $.ajax({
                type: "POST",
                url: "php/addColorProcess.php",
                data: {
                  color: Hexcolor,
                  note_id: noteId,
                },
                dataType: "json",
                success: (data) => {
                  if (data.status == 'color 201') {
                    // alert(data.error);
                    // console.log(data.status);
                    // console.log($(this).closest('.single_note'));
                    b.css("background-color", Hexcolor);
                    b.attr("data-colorId", Hexcolor);
                    if (Hexcolor == '#fff') {
                      b.css("border-color", "#e0e0e0");
                    } else {
                      b.css("border-color", Hexcolor);
                    }

                  } else if (data.status == '701') {
                    alert(data.error);
                  } else {
                    alert("Something went wrong!!");
                  }

                },
                error: function(xhr, status, error) {
                  var errorMessage = xhr.status + ': ' + xhr.statusText
                }
              });

            });


            $(".edit_note .buttons_div ul li#color-list-icon .color_list .color").click(function(e) {
              var Hexcolor = $(this).attr('data-color');
              var b = $(this).closest(".edit_note");
              var inputb = $(this).closest(".edit_note input");
              var noteId = $(this).closest(".edit_note").attr("data-editnote");
              // console.log(noteId);

              // var b = $(this).parent('.single_note');

              $.ajax({
                type: "POST",
                url: "php/addColorProcess.php",
                data: {
                  color: Hexcolor,
                  note_id: noteId,
                },
                dataType: "json",
                success: (data) => {
                  if (data.status == 'color 201') {
                    // alert(data.error);
                    // console.log($(this).closest('.single_note'));
                    b.css("background-color", Hexcolor);
                    $(".edit_note input").css("background-color", Hexcolor);
                    $(".edit_note textarea").css("background-color", Hexcolor);
                    $(".single_note[data-noteid='" + noteId + "']").css("background-color", Hexcolor);
                    $(".single_note[data-noteid='" + noteId + "']").css("border-color", Hexcolor);
                    b.attr("data-colorId", Hexcolor);
                    if (Hexcolor == '#fff') {
                      b.css("border-color", "#e0e0e0");
                      $(".single_note[data-noteid='" + noteId + "']").css("border-color", "#e0e0e0");

                    } else {
                      b.css("border-color", Hexcolor);
                    }

                  } else if (data.status == '701') {
                    alert(data.error);
                  } else {
                    alert("Something went wrong!!");
                  }

                },
                error: function(xhr, status, error) {
                  var errorMessage = xhr.status + ': ' + xhr.statusText
                }
              });

            });

            $(".buttons_div *").click(function(e) {
              e.stopPropagation();
            })
          },
          error: function(xhr, status, error) {
            var errorMessage = xhr.status + ': ' + xhr.statusText
          }
        });


      }

      $(".title_note").hide();
      $(".createNoteContainer").click(function(e) {
        e.stopPropagation();
        $(".title_note").show();
      });
      $(".title_note div *").click(function(e) {
        e.stopPropagation();
      })
      $(".dropdown_profile").click(function(e) {
        e.stopPropagation();
        $(".profile").toggleClass("profile_visible");
      })
      $(".close_note").click(function(e) {
        e.stopPropagation();
        $(".edit_div").removeClass('show').hide();
        
        if(!$(".edit_div").hasClass('show')){
          $('body').removeClass('handle_edit');
 
        }
       
      });

      function clickFunction() {
        $(".title_note").hide();
        $(".profile").removeClass("profile_visible");
        $(".edit_div").hide();
        $(".edit_div").removeClass('show').hide();
        if(!$(".edit_div").hasClass('show')){
          $('body').removeClass('handle_edit');
 
        }
      }
      $(".edit_note *").click(function(e) {
        e.stopPropagation();
      })
      $("#save_note").click(function() {
        var title = $("#title").val();
        var description = $("#create_note").val();
        var error = "";
        if (description == '') {
          alert('please fill the description');
        } else {
          $.ajax({
            type: 'post',
            url: 'php/addNoteProcess.php',
            dataType: "json",
            data: {
              title: $("#title").val(),
              desc: $("#create_note").val(),
              sess_id: user_id
            },
            success: function(data) {
              if (data.status = '201') {
                //alert(data.error);
                // console.log(data.status);
                datadate = data.time.split(',');
                $("#show_note").prepend(`<div class="rounded col-sm-12 col-md-4 col-lg-3 p-2 m-2 single_note" data-noteid="${data.note_id}" style="background-color: #fff; border-color: #e0e0e0 !important; " data-colorId="#fff">
             <div class="image"></div>
             <div class="d-flex justify-content-between">
               <h1 class="note_head">${$("#title").val()}</h1>  
               <i class="fa fa-times dlt_note" data-noteid="${data.note_id}"></i> 
             </div>
             <p class="note_para">${$("#create_note").val()}</p>
             <div class="buttons_div">
            <ul class="icon">
            <li class="p-1 mr-2 image-upload"><label for="file-input"><i class="fa fa-picture-o" ></i></label><input id="file-input" type="file"></li>
            <li class="p-1 mr-2" id="color-list-icon" style="position:relative;"><i class="fas fa-palette"></i>
             <div class="color_list p-2">
              <div class="color m-1 color-p" data-color="#ff66b3"></div>
              <div class="color m-1 color-g" data-color="#c4ff4d"></div>
              <div class="color m-1 color-y" data-color="#ffff00"></div>
              <div class="color m-1 color-pur" data-color="#bf80ff"></div>
              <div class="color m-1 color-o" data-color="#ffa31a"></div>
              <div class="color m-1 color-w" data-color="#fff"></div>
             </div>
            </li>
            <li class="align-items-center d-flex date" style="float:right;display: d-flex;">${datadate[0]}</li>
            </ul></div>
            
             </div>
             `);

                $("#title").val('');
                $(".title_note").hide();
                $("#create_note").val('');
              } else if (data.status = '401') {

              } else {

              }
              $(".dlt_note").click(function(e) {
                e.stopPropagation();
                var id = $(this).attr('data-noteid');
                // console.log(id);
                $.ajax({
                  type: "POST",
                  url: "php/deleteNoteProcess.php",
                  data: {
                    user: user_id,
                    note_id: id,
                  },
                  dataType: "json",
                  success: (data) => {
                    if (data.status = '201') {
                      alert(data.error);
                      // console.log(data.status);
                      // console.log($(this).closest('.single_note'));
                      $(this).closest('.single_note').remove();
                    } else if (data.status = '401') {
                      alert(data.error);
                    } else {
                      alert("Something went wrong!!");
                    }
                  },
                  error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                  }

                })
              });

              $(".single_note").click(function(e) {
                click = $(this);
                var id1 = $(this).attr('data-noteid');
                // console.log(id1);
                e.stopPropagation();
                let note = $(this).closest('.single_note'); // method name ky hota mitr waise is note ko hi glogal kr dete fir bhi chlega n haan shayad haan chleg
                let title = note.find('.note_head').text();
                let id = $(this).closest('.single_note')[0].dataset.noteid;
                // console.log(id);
                let description = note.find('.note_para').text();
                // console.log(title);
                // console.log($(this).closest('p').html());

                $(".edit_div").addClass('show');
                $(".edit_note #edit_title").val(title);
                $(".edit_note #edit_desc").val(description);
                $(".edit_note #btn_edit").attr("data-noteid", id); //yedekho issliye kuch nhi chalra kyu yuun oo acha hmne dekha hi nhi
                // $(".edit_note #btn_edit").attr("data-note", $(this)); //yedekho issliye kuch nhi chalra kyu yuun oo acha hmne dekha hi nhi
              });

              $(".single_note").mouseover(function() {
                $(this).toggleClass('shadow');
                $(this).find('.dlt_note').css("opacity", "1");
                $(this).find('.buttons_div ul li').css("opacity", "1");
              });
              $('.single_note').mouseout(function() {
                $(this).toggleClass('shadow');
                $(this).find('.dlt_note').css("opacity", "0");
                $(this).find('.buttons_div ul li').css("opacity", "0");
              });

              // $('.single_note .buttons_div ul li:not(:last)').mouseover(function(){
              //   $(this).css("background-color","rgba(60, 64, 67, 0.08)");
              // });

              // $('.single_note .buttons_div ul li:not(:last)').mouseout(function(){
              //   $(this).css("background-color","transparent");
              // });
              $('.single_note .buttons_div ul li#color-list-icon').mouseover(function() {
                $(this).find('.color_list').toggleClass('d-flex flex-wrap');
              });
              $('.single_note .buttons_div ul li#color-list-icon').mouseout(function() {
                $(this).find('.color_list').toggleClass('d-flex flex-wrap');
              });

              $(".single_note .buttons_div ul li#color-list-icon .color_list .color").click(function(e) {
                var Hexcolor = $(this).attr('data-color');
                var b = $(this).closest(".single_note");
                var noteId = $(this).closest(".single_note").attr("data-noteid");
                //  console.log(noteId);

                // var b = $(this).parent('.single_note');

                $.ajax({
                  type: "POST",
                  url: "php/addColorProcess.php",
                  data: {
                    color: Hexcolor,
                    note_id: noteId,
                  },
                  dataType: "json",
                  success: (data) => {
                    if (data.status == 'color 201') {
                      // alert(data.error);
                      // console.log(data.status);
                      // console.log($(this).closest('.single_note'));
                      b.css("background-color", Hexcolor);
                      b.attr("data-colorId", Hexcolor);
                      if (Hexcolor == '#fff') {
                        b.css("border-color", "#e0e0e0");
                      } else {
                        b.css("border-color", Hexcolor);
                      }

                    } else if (data.status == '701') {
                      alert(data.error);
                    } else {
                      alert("Something went wrong!!");
                    }
                  },
                  error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                  }
                });

              });

              $(".buttons_div *").click(function(e) {
                e.stopPropagation();
              })
            },
            error: function(xhr, status, error) {
              var errorMessage = xhr.status + ': ' + xhr.statusText
            }
          })
        }
      })
      $("#btn_edit").click(function() {
        //  console.log(click);// isme arry of obj ar
        var noteid = $(this).attr('data-noteid'); //ye class name shi hai kya haan yr konsa kuch gkt nhi dikhara
        var title = $(".edit_note #edit_title").val();
        var desc = $(".edit_note #edit_desc").val();
        $.ajax({
          type: "post",
          url: "php/updateNoteProcess.php",
          dataType: "json",
          data: {
            user: user_id,
            note_id: noteid,
            title: title, //user id nhi chahiye na haan
            description: desc,
          },
          success: function(data) {
            if (data.status = '201') {
              alert(data.error);
              var dateTime = (data.time).split(',');
              click.closest('.single_note').find('.note_head').text(title);
              click.closest('.single_note').find('.note_para').text(desc);
              click.closest('.single_note').find('.date').text(dateTime[0]);
            } else {
              alert(data.error);
            }

          },
          error: function(xhr, status, error) {
            var errorMessage = xhr.status + ': ' + xhr.statusText
          }
        })
      });

      // $("p").mouseout(function(){
      //   $("p").css("background-color", "lightgray");
      // });
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (currentScrollPos > 0) {
          $('.header-main.sticky_header').css('background-color', '#fff');
          $('.header-main.sticky_header').css('box-shadow', '1px 0px 20px rgba(0,0,0,0.08)');

        } else {
          $('.header-main.sticky_header').css('background-color', 'transparent');
          $('.header-main.sticky_header').css('box-shadow', 'none');
        }

        prevScrollpos = currentScrollPos;
      }
    </script>
  </body>

  </html>
<?php } ?>