<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> 

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


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
                            <a href="#"><i class="fa fa-table fa-fw"></i> View & Edit Data<span class="fa arrow"></span></a>
                        
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="ViewData">I-SISCA</a>
                                </li>
                                <li>
                                    <a href="ViewDataTicares">TICARES</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="active">
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Input Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="InsertData" >I-SISCA</a>
                                </li>
                                <li>
                                    <a href="InsertDataTicares" class="active">TICARES</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Account Manager<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="InsertDataAm">Add Manager Account</a>
                                </li>
                                <li>
                                    <a href="ViewDataAm">View List Manager Account</a>
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
                    <h1 class="page-header">Memasukkan Data TICARES</h1>       
                    <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>index.php/InsertDataTicares/isiska" method="post">
            <div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Customer Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="Cust_Name" name="Cust_Name" placeholder="Cust_Name">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Customer Ship</label>
                  <div class="col-sm-8">          
                    <input type="text" class="form-control" id="Cust_Ship" name="Cust_Ship" placeholder="Cust_Ship">
                  </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">City</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="City" name="City" placeholder="City">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Customer_Segmen</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="Customer_Segmen" name="Customer_Segmen" placeholder="Customer_Segmen">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Product</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="Product_Name" name="Product_Name" placeholder="Product_Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">BW_Packet</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="Bandwidth" name="Bandwidth" placeholder="Bandwidth">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">One_Time_Charge</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="One_Time_Charge" name="One_Time_Charge" placeholder="One_Time_Charge">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Abonemen</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="Abonemen" name="Abonemen" placeholder="Abonemen">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">AM_Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="AM_Name" name="AM_Name" placeholder="AM_Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">AM_Phone</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="AM_Phone" name="AM_Phone" placeholder="AM_Phone">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Customer_Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="Customer_Name" name="Customer_Name" placeholder="Customer_Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Customer_Phone</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="Customer_Phone" name="Customer_Phone" placeholder="Customer_Phone">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Contract_Date</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="Contract_Date" name="Contract_Date" placeholder="Contract_Date">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Due_Date_Live</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="Due_Date_Live" name="Due_Date_Live" placeholder="Due_Date_Live">
                    </div>
                </div>
                
                <input type="submit" name="submit" id="btn_id" value="Submit" class="btn btn-info col-sm-10">
            </div>
        </form>
                  

                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="http://telkom.co.id/">TOMS</a>
                        </li>
                    </ul>

                    <p class="copyright text-muted small">Copyright &copy;
                    Telkom Indonesia</p>
                </div>
            </div>
        </div>
    </footer>   
    </div>


    
  <script>
    document.getElementById('btn_id')
	.addEventListener('click', function() {
		/* [… code saving data …] */
		alert('Data telah ditambahkan');
	
    });
    </script>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
