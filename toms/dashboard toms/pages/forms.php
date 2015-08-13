<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <!-- <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<title>Input Data I-Siska</title>
<!-- cdn for modernizr, if you haven't included it already -->
<script src="../js/modernizr.js"></script>
<script src="../js/modran.js"></script>
<script src="../js/filler.js"></script>
<!-- <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script> -->
<!-- polyfiller file to detect and load polyfills -->
<!-- <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script> -->
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">TOMS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">      
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> View & Edit Data</a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Input Data</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Akun Manager<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Add Manager Account</a>
                                </li>
                                <li>
                                    <a href="#">View List Manager Account</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="page-header">Memasukkan Data Isiska</h1>       
                    <form role="form">
            <div class="col-md-4" style="border-right: 1px solid #d7d7d8;">
                <div class="form-group">
                    <label>Customer Name</label>
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Cust_Name">
                    </div>
                </div>
                <div class="form-group">
                    <label >Cust_Ship</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Cust_Ship">
                    </div>
                </div>
                <div class="form-group">
                    <label >City</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="City">
                    </div>
                </div>
                <div class="form-group">
                    <label >Customer_Segmen</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Customer_Segmen">
                    </div>
                </div>
                <div class="form-group">
                    <label >Product</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Product">
                    </div>
                </div>
                <div class="form-group">
                    <label >BW_Packet</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="BW_Packet">
                    </div>
                </div>
            </div>

            <div  class="col-md-4" style="border-right: 1px solid #d7d7d8;">
                <div class="form-group">
                    <label >One_Time_Charge</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="One_Time_Charge">
                    </div>
                </div>
                <div class="form-group">
                    <label >Abonemen</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Abonemen">
                    </div>
                </div>
                <div class="form-group">
                    <label >Sales_by</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Sales_by">
                    </div>
                </div>
                <div class="form-group">
                    <label >AM_Name</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="AM_Name">
                    </div>
                </div>
                <div class="form-group">
                    <label >AM_Phone</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="AM_Phone" placeholder="AM_Phone">
                    </div>
                </div>
                <div class="form-group">
                    <label >Customer_Name</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="Customer_Name" placeholder="Customer_Name">
                    </div>
                </div>
            </div>
            <div  class="col-md-4">
                <div class="form-group">
                    <label >Customer_Phone</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="Customer_Phone" placeholder="Customer_Phone">
                    </div>
                </div>
                <div class="form-group">
                    <label >Contract_Date</label>
                    <div class="input-group col-md-12">
                        <input type="date" class="form-control" id="InputEmailSecond" name="Contract_Date" placeholder="Contract_Date">
                    </div>
                </div>
                <div class="form-group">
                    <label >Due_Date_Live</label>
                    <div class="input-group col-md-12">
                        <input type="date" class="form-control" id="InputEmailSecond" name="Due_Date_Live" placeholder="Due_Date_Live">
                    </div>
                </div>
                <div class="form-group">
                    <label >Tech_Data</label>
                    <div class="input-group col-md-12">
                        <input type="email" class="form-control" id="InputEmailSecond" name="Tech_Data" placeholder="Tech_Data">
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info col-md-12">
            </div>
        </form>

                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

       
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
