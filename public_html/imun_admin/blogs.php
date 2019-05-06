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
                                <i class="fa fa-home"></i>
                              <a href="dashbord.php">  Dashboard </a>|
                               Blogs |
                                <a href="newsletter.php"> Newsletter</a> |
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
                            <i class="fa fa-table"> </i> Blogs
                        </div>
                        <div class="container">
                
                             <button id="add">Add New Blog</button>
                            
                               <button>Delete Blogs</button>
                              
                              
                                 
                                      
                        </div>
                         <div class="blog" style="display: none; margin-left: 5%;"><br>
                            <br>
                            <form>
                                <div class="container"><div class="row">
                                    <div class="col-md-4">
                                         <label>Subject</label>
                                <input type="text" name="subject">
                                    </div>
                                     <div class="col-md-4">
                                         <label>Posted by</label>
                                <input type="text" name="posted_by">
                                    </div>
                                     <div class="col-md-4">
                                         <label>Date</label>
                                <input type="text" name="date" placeholder="eg:- Dec 12 2018">
                                    </div>
                                     <div class="col-md-6">
                                        <label>Upload Image</label>
                                <input type="file" name="image">
                                    </div>
                                </div>
                            
                                <label>Content</label><br>
                                <textarea rows="2" cols="16" name="content_1"  style="width: 50%;">Paragraph 1</textarea><br>
                                 <textarea rows="2" cols="16" name="content_2"  style="width: 50%;">Paragraph 2</textarea><br>
                                 <textarea rows="2" cols="16" name="content_3"  style="width: 50%;">Paragraph 3</textarea><br>
                                 <textarea rows="2" cols="16" name="content_4"  style="width: 50%;">Paragraph 4</textarea><br>
                                <textarea rows="2" cols="16" name="content_5"  style="width: 50%;">Paragraph 5</textarea><br>                                                                                                                                

                                <input type="submit" name="submit" value="Post">
                                </div>
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
                                                     <th>Image</th>        
                                                    <th>Subject</th>
                                                    <th> Posted by</th>
                                                    <th>Date</th>
                                                                                            
                                            <th>View</th>
                                          
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
         $('#add').click(function(){
            $('.blog').css('display','block');
           

        });

        $('.egypt').click(function(){
            $('#tab-malasia').removeClass('active');
            $('#tab-egypt').addClass('active');
            $('.egypt').addClass('active1');
            $('.mal').removeClass('active1');

        });
              $('.mal').click(function(){
            $('#tab-egypt').removeClass('active');
            $('#tab-malasia').addClass('active');
            $('.mal').addClass('active1');
            $('.egypt').removeClass('active1');

        });

    </script>
      <script type="text/javascript" src="js/custom.js"></script>

  <script type="text/javascript">
    function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Paragraph 1 :</td>'+
            '<td>'+d.email+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>paragraph 2 :</td>'+
            '<td>'+d.sex+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>paragraph 3 :</td>'+
            '<td>'+d.dob+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Paragraph 4 :</td>'+
            '<td>'+d.residence_country+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Paragraph 5 :</td>'+
            '<td>'+d.enrolled_as+'</td>'+
        '</tr>'

    '</table>';
}
function pad(n, width, z) {
    z = z || '0';
    n = n + '';
    return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}

function get_id(el){
    let registration_id = '';
    registration_id += el['conference_location'].substr(0,3).toUpperCase();
    registration_id += pad(el['id'], 6);
    return registration_id;
}

function updateTable(){
    var table = $('#sample_2').DataTable( {
        "ajax": {
            "url": "./../../private/API/dashboard.php",
            "dataSrc": function(json) {
                console.log(json);
                $.each(json, function(index, el){
                    el["registration_id"] = get_id(el);
                });
                return json;
            }
        },

        "columns": [
  {"data":"",

                "orderable":false,
                "render": function (data, type, row) {

                
                        return '<input type="checkbox" name="" value="">';

                   
                },},
            { "data": "conference_location" },
            { "data": "registration_id" },
            { "data": "full_name" },
             { "data": "full_name" },
           

            {
                "className":      'details-control',
                "orderable":      false,
                "data":           "",
                "defaultContent": ''
            },
       
        ],
        "order": [[1, 'asc']]
    } );

    // Add event listener for opening and closing details
    $('#sample_2 tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );

    $('#sample_2 tbody').on('click', '.accept-app', function () {
        acceptTable($(this).attr('data-id'));
    });
    $('#sample_2 tbody').on('click', '.reject-app', function () {
        rejectTable($(this).attr('data-id'));
    });
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
