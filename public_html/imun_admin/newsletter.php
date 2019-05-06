<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location: ./login.php');
}
?>

<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="UTF-8">
       <title>IMUN | ADMIN</title>
         <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<style type="text/css">
    td.details-control {
    background: url('img/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('img/details_close.png') no-repeat center center;
}

</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico" />
   <link type="text/css" rel="stylesheet" href="css/components.css" />
    <link type="text/css" rel="stylesheet" href="css/custom.css" />
    <link type="text/css" rel="stylesheet" href="vendors/select2/css/select2.min.css" />
  <link type="text/css" rel="stylesheet" href="vendors/c3/css/c3.min.css">
  <link type="text/css" rel="stylesheet" href="vendors/toastr/css/toastr.min.css">
  <link type="text/css" rel="stylesheet" href="vendors/switchery/css/switchery.min.css">



    
<style type="text/css">
    .view{
        background-color: #9f9fff;
        border-radius: 30px;
        color: white;
        padding: 2% 2% 2% 2%;
    }
    .accept{
        
        background-color: #2be42b;
        border-radius: 30px;
        color: white;
          padding: 2% 2% 2% 2%;
    
    }.reject{
        background-color: #ff5d5d;
        border-radius: 30px;
        color: white;
          padding: 2% 2% 2% 2%;
    }.dt-buttons {
        display: none !important;
    }.active1{
         background-color: grey; padding: 1% 1% 1% 1%; border-radius: 30px;color: white !important;
    }
</style>
</head>

<body class="body">
    <div class="preloader" style="position: fixed; width: 100%; height: 100%; top: 0; left: 0; z-index: 100000; backface-visibility: hidden; background: #ffffff;">
        <div class="preloader_img" style="width: 200px; height: 200px; position: absolute; left: 48%; top: 48%; background-position: center; z-index: 999999">
            <img src="../images/loader.gif" style="width: 40px;" alt="loading...">
        </div>
    </div>
    <div class="bg-dark" id="wrap">
        <div id="top">
            <!-- .navbar -->
            <nav class="navbar navbar-static-top">
                <div class="container-fluid">
                    <a class="navbar-brand text-xs-center" href="dashbord.php">
                        <h4 class="text-white">
                            <img src="../images/logo.png" class="admin_img" alt="logo"  style="height: unset !important;">
                            IMUN ADMIN</h4>
                    </a>
                    

                    <!-- Toggle Button -->
                
                    <!-- Nav Content -->
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="topnav dropdown-menu-right float-xs-right">
                    
                        <div class="btn-group">
                            <div class="user-settings no-bg">
                                <button type="button" class="btn btn-default no-bg Prince_btn" data-toggle="dropdown" aria-expanded="false">
                                    <img src="../images/logo.png" class="admin_img2 rounded-circle avatar-img" alt="avatar">
                                 <strong>   <a href="logout.php">Logout</a></strong>
                                
                                </button>
                              
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- /.container-fluid -->
            </nav>
            <!-- /.navbar -->
            <!-- /.head -->
        </div>
        <!-- /#top -->
        <div class="wrapper" >
            
            <!-- /#left -->
            <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar row">
                        <div class="col-xs-6">
                            <h4 class="m-t-5">
                               <a href="dashbord.php">  Dashboard </a>|
                             <a href="blogs.php">  Blogs</a> |
                              Newsletter |
                               <a href="news.php">  News</a> |
                            </h4>
                        </div>
                    </div>
                </header>
                 <div id="page-content" style="padding-bottom: 10%;">
                <div class="container">
                   <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <section id="my-account">
                                                                <div class="tab-content my-account-tab-content">
                                  



                                        <div class="tab-pane active" id="tab-malasia">
                                           <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"> </i> Newsletter
                        </div>
                        <div class="container">
                
                             <button id="send">Send Mail</button>
                            
                               <button>Unsubscribe</button>
                                <button>Download Excel</button>
                              
                                 
                                      
                        </div>
                        <div class="mail" style="display: none; margin-left: 5%;"><br>
                            <br>
                            <form>
                                <label>Subject</label><br>
                                <input type="text" name="subject" id="newsletter-subject"><br>
                                <label>Attachment</label><br>
                                <input type="file" id="attach" name="attach"><br>
                                <label>Message</label><br>
                                <textarea rows="2" cols="16" id="newsletter-message" name="message"  style="width: 50%;"></textarea><br>

                                <input type="button" name="submit" value="Send" id="newsletter-submit">
                            </form>
                        </div>
                        <div class="card-block">
                            
                              <div class="card-block p-t-25">
                                        <div class="">
                                            <div class="pull-sm-right">
                                                <div class="tools pull-sm-right"></div>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover display" id="sample_2" style="width: 100% !important;">
                                            <thead>
                                                <tr><th><input type="checkbox" name="" value=""> <br></th>
                                                    <th>Email  id</th>
                                                  
                                                </tr>
                                            </thead>
                                          
                                        </table>
                                    </div>
                        </div>
                    </div>
                                    </div>



                              

                                  
                                   
                                    
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </div>
                   
                </div>
            
            </div>
        </div>
     
    </div>

  
  
     <script type="text/javascript">
    $('#send').on("click", function(){
        $('.mail').show();
    });
    $('#newsletter-submit').on("click", function(){
        sendMails();
    });
     function sendMails(){
         let file = $('#attach').prop('files')[0];
         let data = new FormData();
         data.append('file', file);
         data.append('ids', JSON.stringify([2]));
         data.append('subject', $('#newsletter-subject').val());
         data.append('message', $('#newsletter-message').val());
         data.append('req', 'forward');
         $.ajax({
             url: "./../../private/API/newsletter.php",
             type: 'post',
             processData: false,
             contentType: false,
             data: data,
             success: function(htm){
                 console.log(htm);
             }
         })
     }



    </script>
      <script type="text/javascript" src="js/custom.js"></script>

  <script type="text/javascript">

function updateTable(){
    var table = $('#sample_2').DataTable( {
        "ajax": {
            "url": "./../../private/API/newsletter.php",
            "dataSrc": function(json) {
                console.log(json);
                // $.each(json, function(index, el){
                //     el["registration_id"] = get_id(el);
                // });
                return json;
            }
        },

        "columns": [
  {"data":"",

                "orderable":false,
                "render": function (data, type, row) {

                
                        return '<input type="checkbox" name="" value="">';

                   
                },},
            { "data": "email" },
       
        ],
        "order": [[1, 'asc']]
    } );

}

function acceptTable(id){
    $.post("./../../private/API/register.php", {
        "req": "accept",
        "id": id
    }, function(data, status){
        console.log(data);
    })
}

function rejectTable(id){
    $.post("./../../private/API/register.php", {
        "req": "reject",
        "id": id
    }, function(data, status){
        console.log(data);
    })
}

$(document).ready(function() {

    updateTable()
} );

</script>

   



</body>
</html>
