<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from dev.lorvent.com/admire/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2016 17:20:23 GMT -->
<head>
    <meta charset="UTF-8">
       <title>IMUN | ADMIN</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico" />

    <!--global styles-->
        <link type="text/css" rel="stylesheet" href="css/components.css"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css"/>
    <!--end of global styles-->
    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="vendors/select2/css/select2.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/datatables/css/dataTables.bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/dataTables.bootstrap.css"/>
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="css/pages/tables.css"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />


    

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
                    <div class="row" style="background-color: white; border-radius: 20px ; box-shadow: 2px black;">
                     <div class="col-lg-12 m-t-25">
                                    <div><b>
                                        <ul class="nav nav-inline view_user_nav_padding">
                                            <li class="nav-item card_nav_hover" style="margin-left: 3%; margin-right: 3%;">
                                                <a class="nav-link active" href="#user" id="home-tab"
                                                   data-toggle="tab" aria-expanded="true">Preferred Location</a>
                                            </li>|
                                            <li class="nav-item card_nav_hover" style="margin-left: 3%; margin-right: 3%;">
                                                <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Profile Details</a>
                                            </li>|
                                            <li class="nav-item card_nav_hover" style="margin-left: 3%; margin-right: 3%;">
                                                <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Educational Details</a>

                                            </li>|
                                             <li class="nav-item card_nav_hover" style="margin-left: 3%; margin-right: 3%;">
                                                <a class="nav-link" href="#tab4"  id="followers" data-toggle="tab">IMUN Details</a>
                                                
                                            </li>|
                                             <li class="nav-item card_nav_hover" style="margin-left: 3%; margin-right: 3%;">
                                                <a class="nav-link" href="#tab5"  id="followers" data-toggle="tab">Other Details</a>
                                                
                                            </li>|
                                             <li class="nav-item card_nav_hover " style="margin-left: 3%; margin-right: 3%;">
                                                <a class="nav-link" href="#tab6"  id="followers" data-toggle="tab">Motivational Letter</a>
                                                
                                            </li>
                                        </ul>
                                    </b>
                                        <div id="clothing-nav-content" class="tab-content m-t-10">
                                            <div role="tabpanel" class="tab-pane fade in active" id="user">
                                                <table class="table" id="users">
                                                    <tr>
                                                        <td>Conference Location</td>
                                                        <td class="inline_edit">
                                                        
                                                        </td>
                                                    </tr>
                                                   
                                                </table>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                 <table class="table" id="users">
                                                    <tr>
                                                        <td>Full Name</td>
                                                        <td class="inline_edit">
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>E-mail</td>
                                                        <td>
                                                           
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sex</td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date Of Birth</td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nationality </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Country of Residence</td>
                                                        <td>
                                                           
                                                        </td>
                                                    </tr>
                                                    
                                                </table>
                                            </div>
                                          <div role="tabpanel" class="tab-pane fade" id="tab3">
                                                 <table class="table" id="users">
                                                    <tr>
                                                        <td>Currently enrolled as</td>
                                                        <td class="inline_edit">
                                                       
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Major Field of Study</td>
                                                        <td></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>University/Senior High School's Name</td>
                                                        <td></td>
                                                        
                                                    </tr>
                                                   
                                                </table>
                                            </div>
                                              <div role="tabpanel" class="tab-pane fade" id="tab4">
                                                 <table class="table" id="users">
                                                    <tr>
                                                        <td>How do you know about international MUN/IMUN? </td>
                                                        <td class="inline_edit">
                                                       
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Previous MUN experience?</td>
                                                        <td>
                                                           
                                                        </td>
                                                    </tr>
                                                  
                                                </table>
                                            </div>

                                              <div role="tabpanel" class="tab-pane fade" id="tab5">
                                                 <table class="table" id="users">
                                                    <tr>
                                                        <td>Food Preference</td>
                                                        <td class="inline_edit">
                                                       
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Size of T-shirt</td>
                                                        <td>
                                                           
                                                        </td>
                                                    </tr>
                                                  
                                                </table>
                                            </div>

                                              <div role="tabpanel" class="tab-pane fade" id="tab6">
                                                 <table class="table" id="users">
                                                    <tr>
                                                        <td>Why do you think you must be choosen as a part of International MUN 2019? (in English)*</td>
                                                        <td class="inline_edit">
                                                       
                                                        </td>
                                                    </tr>
                                                   
                                                </table>
                                            </div>






                                        </div>
                                    </div>
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

<!-- end of global scripts-->
<!-- plugin scripts -->
<script type="text/javascript" src="vendors/select2/js/select2.js"></script>
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.min.js"></script>
<!-- end plugin scripts -->
<!--Page level scripts-->
<script type="text/javascript" src="js/pages/advanced_tables.js"></script>





</body>

<!-- Mirrored from dev.lorvent.com/admire/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2016 17:21:10 GMT -->
</html>
