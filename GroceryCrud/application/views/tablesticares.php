<!DOCTYPE html>

<html lang="en">
<head>

    <style type="text/css">
#tabel1 {
    border-collapse: collapse;
    border-spacing: 0;
    }
    input[type="text"]{
    height:100%; 
    display:inline-block;
    position:relative;
    width: 100%;

    padding: 0px;
    margin: 0px;
    background: transparent;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box; 
            box-sizing: border-box;
    }

    td{
    padding:0
    }

    table .last, td:last-child { 
    padding: 2px 24px 2px 0px; 
    }

    </style>
    <script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/tableExport.js">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery.base64.js">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/html2canvas.js">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jspdf/libs/sprintf.js">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jspdf/jspdf.js">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jspdf/libs/base64.js">
    $(document).ready(function () {
        $("#formtable").shieldButton({
            events: {
                click: function (e) {
                    $('#formtable').tableExport({
                        type: 'pdf', escape: 'false',
                        tableName: "shieldui-grid",
                        pdfFontSize: 8,
                        pdfLeftMargin: 10
                    });
                }
            }
        });
    });
    {type:'json',escape:'false'}
    {type:'json',escape:'false',ignoreColumn:'[2,3]'}
    {type:'json',escape:'true'}

    {type:'xml',escape:'false'}
    {type:'sql'}

    {type:'csv',escape:'false'}
    {type:'txt',escape:'false'}

    {type:'excel',escape:'false'}
    {type:'doc',escape:'false'}
    {type:'powerpoint',escape:'false'}

    {type:'png',escape:'false'}
    {type:'pdf',pdfFontSize:'7',escape:'false'}
    onClick ="$('#formtable').tableExport({type:'pdf',escape:'false'});"

    function changeColor()
    {    
    document.getElementById("No").style.backgroundColor = "green";
    }
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TELKOM INDONESIA | TOMS</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> 

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">




    <link href="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS Regin -->
    <!-- <link href="../bower_components/custom/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>assets/bower_components/custom/customregin.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/custom/component.css" />

          <!-- <link href="../bower_components/custom/landing-page.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
     HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    @font-face {
    font-family:'Lato';
    font-style:normal;
    font-weight:300;
    src:local('Lato Light'),local(Lato-Light),
    url("<?php echo base_url(); ?>assets/woff/lato1.woff2") format("woff2"),
    url("<?php echo base_url(); ?>assets/woff/lato1.woff") format("woff")
    }

    @font-face {
    font-family:'Lato';
    font-style:normal;
    font-weight:400;
    src:local('Lato Regular'),local(Lato-Regular),
    url("<?php echo base_url(); ?>assets/woff/lato2.woff2") format("woff2"),
    url("<?php echo base_url(); ?>assets/woff/lato2.woff") format("woff")
    }

    @font-face {
    font-family:'Lato';
    font-style:normal;
    font-weight:700;
    src:local('Lato Bold'),local(Lato-Bold),
    url("<?php echo base_url(); ?>assets/woff/lato3.woff2") format("woff2"),
    url("<?php echo base_url(); ?>assets/woff/lato3.woff") format("woff")
    }

    @font-face {
    font-family:'Lato';
    font-style:italic;
    font-weight:300;
    src:local('Lato Light Italic'),local(Lato-LightItalic),
    url("<?php echo base_url(); ?>assets/woff/lato4.woff2") format("woff2"),
    url("<?php echo base_url(); ?>assets/woff/lato4.woff") format("woff")
    }

    @font-face {
    font-family:'Lato';
    font-style:italic;
    font-weight:400;
    src:local('Lato Italic'),local(Lato-Italic),
    url("<?php echo base_url(); ?>assets/woff/lato5.woff2") format("woff2"),
    url("<?php echo base_url(); ?>assets/woff/lato5.woff") format("woff")
    }

    @font-face {
    font-family:'Lato';
    font-style:italic;
    font-weight:700;
    src:local('Lato Bold Italic'),local(Lato-BoldItalic),
    url("<?php echo base_url(); ?>assets/woff/lato6.woff2") format("woff2"),
    url("<?php echo base_url(); ?>assets/woff/lato6.woff") format("woff")
    }
    </style>
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
                <a class="navbar-brand" href="index.html">LOGO TOMS</a>
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
                        
                        
                       <li class="active">
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> View & Edit Data<span class="fa arrow"></span></a>
                        
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="ViewData" class="active">I-SISCA</a>
                                </li>
                                <li>
                                    <a href="ViewDataTicares">TICARES</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li >
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Input Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="InsertData" >I-SISCA</a>
                                </li>
                                <li>
                                    <a href="InsertDataTicares" >TICARES</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Account Manager<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="InsertDataAm"  >Add Manager Account</a>
                                </li>
                                <li>
                                    <a href="ViewDataam">View List Manager Account</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            <!-- /.nav-second-level -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="content-section-b">

        <div class="component">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">On Progress</h3>
                    </div>
                    <div class="searchbox">Search:  <input type="search" class="light-table-filter" data-table="order-table" placeholder="Type to search"><i class="fa fa-search"></i>
                    </div>
                    
                    <div class="pabel-body">
                    <form method="post" autocomplete="off" id="formtable" name="formtable" enctype="multipart/form-data" action="">
                    <table class="overflow-y">
                        <thead>

        <tr>
            <th class="lock_class_name" style='text-align:center' class="headline_class_name" colspan="17"> Data Pelanggan</th>
            <th class="headline_class_name" style='text-align:center' class="headline_class_name" colspan="12"> Progress</th>         
        </tr>
            <tr>
                    <th class="headline_class_name">No</th>
                    <th class="headline_class_name">Cust_Name</th>
                    <th class="headline_class_name">Cust_Ship</th>
                    <th class="headline_class_name">City</th>
                    <th class="headline_class_name">Customer_Segmen</th>
                    <th class="headline_class_name">Product_Name</th>
                    <th class="headline_class_name">Bandwidth</th>
                    <th class="headline_class_name">One_Time_Charge</th>
                    <th class="headline_class_name">Abonemen</th>
                    <th class="headline_class_name">AM_Name</th>
                    <th class="headline_class_name">AM_Phone</th>
                    <th class="headline_class_name">Customer_Name</th>
                    <th class="headline_class_name">Customer_Phone</th>
                
                
                    <th class="headline_class_name">Contract_Date</th>
                    <th class="headline_class_name">Due_Date_Live</th>
                    <th class="headline_class_name">Ket input</th>

                    <th class="headline_class_name">Input_Date</th>
                    <th class="headline_class_name">Order_Number</th>
                 
                    <th class="headline_class_name">Ticares_Status</th>
                    <th class="headline_class_name">Tenoss_Taskname</th>
                    <th class="headline_class_name">Tenoss_Workgroup</th>
                
                    <th class="headline_class_name">Sirkit_ID</th>
                    <th class="headline_class_name">Additional_Information</th>
                    
                    <th class="headline_class_name">Follow_up</th>
                    <th class="headline_class_name">Billcom_date</th>
                    <th class="headline_class_name">Billdate</th>
                    
                </tr>
    </thead>
    <tbody id="tabel1" contenteditable="true">
            <tr>
            <?php

            foreach($ticares->result() as $data):
            if($data->Ticares_Status!="Billcom") {
                echo "<tr><td contenteditable='false' style='text-align:center'>".$data->No."</td></td>";
                echo "<td contenteditable='false' style='text-align:center' text-align:center>".$data->Cust_Name."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Cust_Ship."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->City."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Customer_Segmen."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Product_Name."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Bandwidth."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->One_Time_Charge."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Abonemen."</td>";

                echo "<td contenteditable='false' style='text-align:center'>".$data->AM_Name."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->AM_Phone."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Customer_Name."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Customer_Phone."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Contract_Date."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Due_Date_Live."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->ket_input."</td>";
                echo "<td style='text-align:center'>".$data->Input_Date."</td>";
                echo "<td style='text-align:center'>".$data->Order_Number."</td>";

                echo "<td style='text-align:center'>".$data->Ticares_Status."</td>";
                echo "<td style='text-align:center'>".$data->Tenoss_Taskname."</td>";
                echo "<td style='text-align:center'><input type='text' id='Status' name='Status'>".$data->Tenoss_Workgroup."</td>";
                echo "<td style='text-align:center'>".$data->Sirkit_ID."</td>";
                echo "<td style='text-align:center'>".$data->Additional_Information."</td>";
                echo "<td style='text-align:center'>".$data->Follow_up."</td>";
                echo "<td style='text-align:center'>".$data->Billcom_date."</td>";
                echo "<td style='text-align:center'>".$data->Billdate."</td>";
                 ?>
            
              <?php
                }
              endforeach;
            ?>
            </tr>
         </tbody>

                </table>
                <input type="submit" id="submitbutton" name="submitbutton" value="Submit" onclick="return dataProcess();" />
        </form>   
                    </div>
                </div>
            </div>
        <!-- /.container -->

    </div>


    <div class="content-section-b">

        <div class="component">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Closed</h3>
                    </div>
                    <div class="searchbox">Search:  <input type="search" class="light-table-filter" data-table="order-table" placeholder="Type to search"><i class="fa fa-search"></i></div>
                    
                    <div class="pabel-body">
                    <table class="overflow-y">
                    <thead>
                        <tr>
                        <th class="lock_class_name" style='text-align:center' class="headline_class_name" colspan="17"> Data Pelanggan</th>
                        <th class="headline_class_name" style='text-align:center' class="headline_class_name" colspan="12"> Progress</th>         
                    </tr>



            <tr>
                    <th class="headline_class_name">No</th>
                    <th class="headline_class_name">Cust_Name</th>
                    <th class="headline_class_name">Cust_Ship</th>
                    <th class="headline_class_name">City</th>
                    <th class="headline_class_name">Customer_Segmen</th>
                    <th class="headline_class_name">Product_Name</th>
                    <th class="headline_class_name">Bandwidth</th>
                    <th class="headline_class_name">One_Time_Charge</th>
                    <th class="headline_class_name">Abonemen</th>
                    <th class="headline_class_name">AM_Name</th>
                    <th class="headline_class_name">AM_Phone</th>
                    <th class="headline_class_name">Customer_Name</th>
                    <th class="headline_class_name">Customer_Phone</th>
                
                
                    <th class="headline_class_name">Contract_Date</th>
                    <th class="headline_class_name">Due_Date_Live</th>
                    <th class="headline_class_name">Ket input</th>

                    <th class="headline_class_name">Input_Date</th>
                    <th class="headline_class_name">Order_Number</th>
                 
                    <th class="headline_class_name">Ticares_Status</th>
                    <th class="headline_class_name">Tenoss_Taskname</th>
                    <th class="headline_class_name">Tenoss_Workgroup</th>
                
                    <th class="headline_class_name">Sirkit_ID</th>
                    <th class="headline_class_name">Additional_Information</th>
                    
                    <th class="headline_class_name">Follow_up</th>
                    <th class="headline_class_name">Billcom_date</th>
                    <th class="headline_class_name">Billdate</th>
                    
                </tr>
    </thead>
    <tbody id="tabel1" contenteditable="true">
        <?php
            foreach($ticares->result() as $data):
            if($data->Ticares_Status=="Billcom") {
                echo "<tr><td contenteditable='false' style='text-align:center'>".$data->No."</td></td>";
                echo "<td contenteditable='false' style='text-align:center' text-align:center>".$data->Cust_Name."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Cust_Ship."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->City."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Customer_Segmen."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Product_Name."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Bandwidth."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->One_Time_Charge."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Abonemen."</td>";

                echo "<td contenteditable='false' style='text-align:center'>".$data->AM_Name."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->AM_Phone."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Customer_Name."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Customer_Phone."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Contract_Date."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->Due_Date_Live."</td>";
                echo "<td contenteditable='false' style='text-align:center'>".$data->ket_input."</td>";
                echo "<td style='text-align:center'>".$data->Input_Date."</td>";
                echo "<td style='text-align:center'>".$data->Order_Number."</td>";

                echo "<td style='text-align:center'>".$data->Ticares_Status."</td>";
                echo "<td style='text-align:center'>".$data->Tenoss_Taskname."</td>";
                echo "<td style='text-align:center'><input type='text' id='Status' name='Status'>".$data->Tenoss_Workgroup."</td>";
                echo "<td style='text-align:center'>".$data->Sirkit_ID."</td>";
                echo "<td style='text-align:center'>".$data->Additional_Information."</td>";
                echo "<td style='text-align:center'>".$data->Follow_up."</td>";
                echo "<td style='text-align:center'>".$data->Billcom_date."</td>";
                echo "<td style='text-align:center'>".$data->Billdate."</td>";
                 ?>
              </tr>
              <?php
                }
              endforeach;
            ?>
         </tbody>
                </table>  
                    </div>
                </div>
            </div>
        <!-- /.container -->

    </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>

    <script type="text/javascript">
    function dataProcess(){   
         alert($("#Status").val());
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/ViewData/post_action", 
            data: {
                No: $("#No").val(), 
                Status: $("#Status").val()
        },
            dataType: "text",  
            cache:false,
            success: 
              function(data){
                alert(data);  //as a debugging message.
              }
            });// you have missed this bracket
        return false;
    }
    </script>


    <!-- /#wrapper -->



    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

    <!-- regin -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/search.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/cari.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.ba-throttle-debounce.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.stickyheader.js"></script>
    <!-- jQuery -->
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
    </script>

    <title></title>
</head>

<body>
</body>
</html>