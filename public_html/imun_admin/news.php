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
                               <a href="blogs.php">  Blogs</a> |
                                <a href="newsletter.php"> Newsletter</a> |
                               News |
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
                            <i class="fa fa-table"> </i> News
                        </div>
                        <div class="container">
                
                             <button id="add">Add New News</button>
                            
                               <button id="delete_news">Delete News</button>
                              
                              
                                 
                                      
                        </div>
                         <div class="blog" style="display: none; margin-left: 5%;"><br>
                            <br>
                            <form>
                                <label>Title*</label><br>
                                <input type="text" name="subject" id="news-title" style="width: 50%;"><br><br>
                                   <label>Image*</label><br>
                                <input type="file" name="image" id="news-image"><br><br>
                                <label>News Link*</label><br>
                                <input type="text" name="link" id="news-link" style="width: 50%;"><br><br>
                                <label>Content*(First 3-5 Lines of news)</label><br>
                                <textarea id="news-content" rows="2" cols="16" name="content"  style="width: 50%;"></textarea><br>

                                <input type="button" name="submit" value="Send" id="news-submit">
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
                                                <tr><th><input type="checkbox" name="" value="" id="demo"> <br></th>
                                                    <th>Subject</th>
                                                    <th> Link</th>
                                                    <th>Image</th>
                                            <th>Content</th>                                                         
                                           
                                          
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
            '<td>Content:</td>'+
            '<td>'+d.content+'</td>'+
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
            "url": "./../private/API/news.php",
            "dataSrc": function(json) {
                console.log(json);
                return json;
            }
        },

        "columns": [
  {"data":"",

                "orderable":false,
                "render": function (data, type, row) {

                
                        return '<input type="checkbox" name="" value="" id="'+row.id+'">';

                   
                },},
            { "data": "subject" },
            { "data": "url" },
            { "data": "image" },
           

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
    $.post("./../private/API/register.php", {
        "req": "accept",
        "id": id
    }, function(data, status){
        console.log(data);
    })
}

function rejectTable(id){
    $.post("./../private/API/register.php", {
        "req": "reject",
        "id": id
    }, function(data, status){
        console.log(data);
    })
}

$(document).ready(function() {

    updateTable()
} );



   $(document).on("click",'#delete_news', function(){
var chkArray = Array();

$('.card-block input:checked').each( function()
{
   chkArray.push(this.id);
   if (chkArray[0]=='demo') {
    chkArray.shift();
   }
  
});
 if (chkArray.length==0) {
   alert('please select atleat one News');
   breck();
   }else{
    if (confirm('Are you sure you want to delete this news ?')) {
//call delete fuction here
        $.post("./../private/API/news.php", {
            "req": "delete",
            "id": JSON.stringify(chkArray)
        }, function(data, status){
            console.log(data);
        })
} else {
    // Do nothing!
}
   }
console.log(chkArray);

       
    });
     $("#demo").on("change", function () {
  

$('input:checkbox').not(this).prop('checked', this.checked);

    });
     function newsSubmit(){
         let file = $('#news-image').prop("files")[0];
         let data = new FormData();
         data.append("file", file);
         data.append("title", $('#news-title').val());
         data.append("link", $("#news-link").val());
         data.append("content", $("#news-content").val());
         data.append("req", "create");
         $.ajax({
             url: "./../private/API/news.php",
             type: 'post',
             processData: false,
             contentType: false,
             data: data,
             success: function(htm){
                 console.log("htm");
             }
         })
     }

     $(document).on("click", "#news-submit", function(){
         newsSubmit();
     })

</script>

   



</body>
</html>
