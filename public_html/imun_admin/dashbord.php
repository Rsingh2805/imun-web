<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from dev.lorvent.com/admire/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2016 17:20:23 GMT -->
<head>
    <meta charset="UTF-8">
       <title>IMUN | ADMIN</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico" />

   <link type="text/css" rel="stylesheet" href="css/components.css" />
    <link type="text/css" rel="stylesheet" href="css/custom.css" />
    <!--end of global styles-->
    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/datatables/css/scroller.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/datatables/css/colReorder.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/datatables/css/dataTables.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/pages/dataTables.bootstrap.css" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="css/pages/tables.css" />


    
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
                                <button type="button" class="btn btn-default no-bg Prince_btn" data-toggle="dropdown">
                                    <img src="../images/logo.png" class="admin_img2 rounded-circle avatar-img" alt="avatar" style="height: unset !important;">
                                    <strong>Admin</strong>
                                    <span class="fa fa-sort-down white_bg"></span>
                                </button>
                                <div class="dropdown-menu admire_admin">
                                   
                                  
    
                                    <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out"></i>
                                        Log Out</a>
                                </div>
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
                                Dashboard 
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
                                <ul class="nav nav-tabs" id="tabs">
                                    <a style="color: white; margin-left: 3%; margin-right: 3%;  background-color: grey; padding: 1% 1% 1% 1%; border-radius: 30px; " href="dashbord.php" class="active1" >EGYPT</a>|
                                   <a style="color: #031635; margin-left: 3%; margin-right: 3%;" href="malasia.php" >MALASIA</a>
                                </ul>
                                <div class="tab-content my-account-tab-content">
                                     <div class="tab-pane active" id="tab-egypt">
                                           <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"> </i> Egypt
                        </div>
                        <div class="card-block">
                                  <div class="card-block p-t-25">
                                        <div class="">
                                            <div class="pull-sm-right">
                                                <div class="tools pull-sm-right"></div>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                            <th>Cover Letter</th>
                                            <th >Status</th>
                                            <th >Time Stamp</th>
                                             <th >Control</th>
                                                </tr>
                                            </thead>
                                          <tbody><tr><td>Barbara</td><td>Oberbrunner</td><td>Pending</td><td>340-008-0893</td><td><a href="view.php" class="view">View</a><a href="" class="accept">Accept</a><a href="" class="reject">Reject</a></td></tr><tr><td>Barbara</td><td>Oberbrunner</td><td>Pending</td><td>340-008-0893</td><td><a href="view.php" class="view">View</a><a href="" class="accept">Accept</a><a href="" class="reject">Reject</a></td></tr></tbody>
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
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
            </div>
        </div>
        <!--wrapper-->

        <!-- # right side -->
    </div>
    <!-- /#wrap -->
    <!-- global scripts-->
  <script type="text/javascript" src="js/components.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!--end of global scripts-->
    <!--plugin scripts-->
    <script type="text/javascript" src="vendors/select2/js/select2.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/pluginjs/dataTables.tableTools.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.rowReorder.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.scroller.min.js"></script>
    <!-- end of plugin scripts -->
    <!--Page level scripts-->
    <script type="text/javascript" src="js/pages/datatable.js"></script>





</body>

<!-- Mirrored from dev.lorvent.com/admire/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2016 17:21:10 GMT -->
</html>
