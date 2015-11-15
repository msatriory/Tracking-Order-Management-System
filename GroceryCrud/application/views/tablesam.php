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
                        
                        
                       <li >
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> View & Edit Data<span class="fa arrow"></span></a>
                        
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="ViewData" >I-SISCA</a>
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
                        <li class="active">
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Account Manager<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="InsertDataAm"  >Add Manager Account</a>
                                </li>
                                <li>
                                    <a href="ViewDataam" class="active">View List Manager Account</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       
       
    <div class="content-section-b">

        <div class="component">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data AM</h3>
                    </div>
                    <div class="searchbox">Search:  <input type="search" class="light-table-filter" data-table="order-table" placeholder="Type to search"><i class="fa fa-search"></i></div>
                    
                    <div class="pabel-body">
                    <table class="overflow-y">
                    <thead>
                        

            <tr>
                    <th class="headline_class_name">NIK AManager</th>
                    <th class="headline_class_name">NAMA AManager</th>
                    <th class="headline_class_name">Phone Amanager</th>
                    
                </tr>
    </thead>
    <tbody id="tabel1" contenteditable="true">
        <?php
                    foreach($amanager->result() as $data):
                                    echo "<tr><td contenteditable='false' style='text-align:center'>".$data->NIK_AM."</td></td>";
                                    echo "<td contenteditable='false' style='text-align:center' text-align:center>".$data->Nama_AM."</td>";
                                    echo "<td contenteditable='false' style='text-align:center'>".$data->phone_AM."</td>";
                                    ?>
                                  </tr>
                                  <?php

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
      
        <!-- /#page-wrapper -->

    
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

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>


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
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>



</body>

</html>
