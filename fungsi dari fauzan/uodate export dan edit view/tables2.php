<!DOCTYPE html>
<html lang="en">

<head>
<script>
$('textarea').autoResize();
</script>
<script src="<?php echo base_url(); ?>assets/jquery-1.9.1.js"></script>  
<script src="<?php echo base_url(); ?>assets/tableExport.js"></script> 
<script src="<?php echo base_url(); ?>assets/jquery.base64.js"></script> 
<script src="<?php echo base_url(); ?>assets/html2canvas.js"></script> 
<script src="<?php echo base_url(); ?>assets/jspdf/libs/base64.js"></script> 
<script src="<?php echo base_url(); ?>assets/jspdf/libs/sprintf.js"></script> 
<script src="<?php echo base_url(); ?>assets/jspdf/jspdf.js"></script> 

<script>  
    $(document).ready(function () {  
        $('#exportexcel').bind('click', function (e) {             
            $('#activity').tableExport({ type: 'excel', escape: 'false' });  
        });  
        $('#exportpdf').bind('click', function (e) {             
            $('#activity').tableExport({ type: 'pdf', escape: 'false' });  
        });
  
    });  
</script>

<script>  
    $(document).ready(function () {  
        $('#exportexcel2').bind('click', function (e) {             
            $('#activity2').tableExport({ type: 'excel', escape: 'false' });  
        });  
        $('#exportpdf2').bind('click', function (e) {             
            $('#activity2').tableExport({ type: 'pdf', escape: 'false' });  
        });
  
    });  
</script>

<style type="text/css">
    #tabel1 {
border-collapse: collapse;
border-spacing: 0;
}
textarea {
    background:transparent;
    border:none;
        display: flex;
        justify-content: center;
overflow: auto;
        
        text-align: center;
    margin: 0px;
    resize:both;
    vertical-align: middle;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}
td{
 width: 200;   
}
#tabel1{
    padding:0
    width:100%;
}

table .last, td:last-child { 
    padding: 2px 24px 2px 0px; 
}

</style>
<script>function resizeInput() {
    $(this).attr('size', $(this).val().length);
}

$('input[type="text"]')
    // event handler
    .keyup(resizeInput)
    // resize on page load
    .each(resizeInput);
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

    <!-- DataTables CSS -->
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
<link href="<?php echo base_url(); ?>assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link href="<?php echo base_url(); ?>assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/css/landing-page.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <style>  
     #footerExport td{  
       cursor:pointer;  
       text-align:center;border:1px solid #ccc;  
       border:none;  
    } 
    #footerExport2 td{  
       cursor:pointer;  
       text-align:center;border:1px solid #ccc;  
       border:none;  
    }  
      
</style>
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
                    <div class="searchbox">Search:  <input type="search" class="light-table-filter" data-table="order-table" placeholder="Type to search"><i class="fa fa-search"></i></div>
                                        <table>  
    <tr id="footerExport">  
        <td id="exportexcel"><img size=5px src="<?php echo base_url(); ?>assets/xls.ico" title="Export to Excel" /></td>  
        <td id="exportpdf"><img size=5px src="<?php echo base_url(); ?>assets/pdf.ico" title="Export to PDF" /></td>    
    </tr>  
</table>
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
                    <th class="headline_class_name">Product</th>
                    <th class="headline_class_name">BW_Packet</th>
                    <th class="headline_class_name">One_Time_Charge</th>
                    <th class="headline_class_name">Abonemen</th>
                    <th class="headline_class_name">Sales_by</th>
                    <th class="headline_class_name">AM_Name</th>
                    <th class="headline_class_name">AM_Phone</th>
                    <th class="headline_class_name">Customer_Phone</th>
                    <th class="headline_class_name">Contract_Date</th>
                    <th class="headline_class_name">Due_Date_Live</th>
                    <th class="headline_class_name">Tech_Data</th>

                    <th class="headline_class_name">Input_Date</th>
                    <th class="headline_class_name">Speedy_Number</th>
                    <th class="headline_class_name">Date_of_Progress</th>
                    <th class="headline_class_name">I-Siska_Status</th>
                    <th class="headline_class_name">Tenoss_Status</th>
                    <th class="headline_class_name">Status</th>
                    <th class="headline_class_name">Additional_Information</th>
                    <th class="headline_class_name">One_Time_Charge</th>
                    <th class="headline_class_name">Follow_up</th>
                    <th class="headline_class_name">Unit_in_Charge</th>
                    <th class="headline_class_name">PIC_Name</th>
                    <th class="headline_class_name">PIC_Number</th>
                    <th class="headline_class_name">Put_in_Service_Date</th>
                </tr>
    </thead>
    <tbody id="tabel1" contenteditable="true">
        <?php
                $count = 0;
                $sizeRes = sizeof($isiska->result());
                    foreach($isiska->result() as $data):                      
                        if($data->Status=="progress" or $data->Status=="Progress"){
                        echo "<tr><td contenteditable='false' style='text-align:center'>".$data->No."
            <input type='hidden' onkeypress='changeColor()' style='text-align:center' name='No' id='No".$count."' value='$data->No' placeholder='$data->No'></input></td>";
                        echo "<td contenteditable='true' style='text-align:center' text-align:center>
                        <textarea cols='20' rows='3' name='Cust_Name' id='Cust_Name".$count."'>".$data->Cust_Name."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='30' rows='3' name='Cust_Ship' id='Cust_Ship".$count."'>".$data->Cust_Ship."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='20' rows='1' name='City' id='City".$count."'>".$data->City."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='20' rows='3' name='Customer_Segmen' id='Customer_Segmen".$count."'>".$data->Customer_Segmen."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'>";?>
                        <select  name="Product" id="Product<?php print $count; ?>">
                        <option value="<?php print $data->Product ?>"><?php echo "$data->Product" ;?></option>            
                        <option <?php if($data->Product=="SPEEDY"){ ?>style="display:<?php print "none";?>" <?php } ?>  value="SPEEDY">SPEEDY</option>
                        <option <?php if($data->Product=="SPEEDY GOLD"){ ?>style="display:<?php print "none";?>" <?php } ?> value="SPEEDY GOLD">SPEEDY GOLD</option>
                        <option <?php if($data->Product=="WIRELINE"){ ?>style="display:<?php print "none";?>" <?php } ?>  value="WIRELINE">WIRELINE</option>
                        </select>
                         <?php '</td>';

                        echo "<td contenteditable='false' style='text-align:center'> ";?>
                        <select  name="BW_Packet" id="BW_Packet<?php print $count; ?>">
                        <option value="<?php print $data->BW_Packet ?>"><?php echo "$data->BW_Packet" ;?></option>       
                        <option <?php if($data->BW_Packet=="1MBPS" or $data->BW_Packet=="1 MBPS"){ ?>style="display:<?php echo "none";?>" <?php } ?>  value="1 MBPS">1 MBPS</option>
                        <option <?php if($data->BW_Packet=="2MBPS" or $data->BW_Packet=="2 MBPS"){ ?>style="display:<?php print "none";?>" <?php } ?>  value="2 MBPS">2 MBPS</option>
                        <option <?php if($data->BW_Packet=="3MBPS" or $data->BW_Packet=="3 MBPS"){ ?>style="display:<?php print "none";?>" <?php } ?>  value="3 MBPS">3 MBPS</option>
                        <option <?php if($data->BW_Packet=="5MBPS" or $data->BW_Packet=="5 MBPS"){ ?>style="display:<?php print "none";?>" <?php } ?>  value="5 MBPS">5 MBPS</option>
                        <option <?php if($data->BW_Packet=="10MBPS" or $data->BW_Packet=="10 MBPS"){ ?>style="display:<?php print "none";?>" <?php } ?>  value="10 MBPS">10 MBPS</option>
                        <option <?php if($data->BW_Packet=="20MBPS" or $data->BW_Packet=="20 MBPS"){ ?>style="display:<?php print "none";?>" <?php } ?>  value="20 MBPS">20 MBPS</option>
                        </select>
                         <?php '</td>';
                        
                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='20' rows='1' name='One_Time_Charge' id='One_Time_Charge".$count."'>".$data->One_Time_Charge."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='20' rows='1' name='Abonemen' id='Abonemen".$count."'>".$data->Abonemen."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='20' rows='1' name='Sales_by' id='Sales_by".$count."'>".$data->Sales_by."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'> ";?> 
                        <select  name="AM_Name" id="AM_Name<?php print $count; ?>">
                            <option value="<?php print $data->AM_Name ?>"><?php echo "$data->AM_Name ";?></option>
                        <?php
                        print($data->AM_Name);
                    foreach($amname->result() as $data2):
                        if($data2->Nama_AM!=$data->AM_Name){

                     ?>                        
                        <option value="<?php print $data2->Nama_AM ?>"><?php echo "$data2->Nama_AM" ;?></option>
                        <?php
                    }
                        
                      endforeach;
                    ?>
                        </select>
                         <?php '</td>';

                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='14' rows='1' name='AM_Phone' id='AM_Phone".$count."'>".$data->AM_Phone."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='14' rows='1' name='Customer_Phone' id='Customer_Phone".$count."'>".$data->Customer_Phone."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='14' rows='1' name='Contract_Date' id='Contract_Date".$count."'>".$data->Contract_Date."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='14' rows='1' name='Due_Date_Live' id='Due_Date_Live".$count."'>".$data->Due_Date_Live."</textarea></td>";
                        echo "<td contenteditable='false' style='text-align:center'>
                        <textarea cols='14' rows='1' name='Tech_Data' id='Tech_Data".$count."'>".$data->Tech_Data."</textarea></td>";
                        echo "<td style='text-align:center' value='$data->Input_Date'>
                        <innput type='date' name='Input_Date' id='Input_Date".$count."'>".$data->Input_Date."</textarea></td>";
                        echo "<td style='text-align:center' name='Speedy_Number'>
                        <textarea cols='14' rows='1' name='Speedy_Number' id='Speedy_Number".$count."'>".$data->Speedy_Number."</textarea></td>";
                        echo "<td style='text-align:center' name='Date_of_Progress'>
                        <textarea cols='14' rows='1' name='Date_of_Progress' id='Date_of_Progress".$count."'>".$data->Date_of_Progress."</textarea></td>";
                        echo "<td style='text-align:center' name='ISiska_Status'>
                        <textarea cols='14' rows='1' name='ISiska_Status' id='ISiska_Status".$count."'>".$data->ISiska_Status."</textarea></td>";
                        echo "<td style='text-align:center' name='Tenoss_Status'>
                        <textarea cols='14' rows='1' name='Tenoss_Status' id='Tenoss_Status".$count."'>".$data->Tenoss_Status."</textarea></td>";
                        echo '<td contenteditable="false" style="text-align:center">'; ?> 
                        <select  name="Status" id="Status<?php print $count; ?>">
                        <option value="Progress">Progress</option>
                        <option value="Closed">Closed</option>
                        </select>
                         <?php '</td>';
                        echo "<td style='text-align:center'>
                        <textarea cols='20' rows='3' name='Additional_Information' id='Additional_Information".$count."'>".$data->Additional_Information."</textarea></td>";
                        echo "<td style='text-align:center' name='Follow_up'>
                        <textarea cols='20' rows='3' name='Follow_up' id='Follow_up".$count."'>".$data->Follow_up."</textarea></td>";
                        echo "<td style='text-align:center' name='Unit_in_Charge'>
                        <textarea cols='20' rows='3' name='Unit_in_Charge' id='Unit_in_Charge".$count."'>".$data->Unit_in_Charge."</textarea></td>";
                        echo "<td style='text-align:center' name='PIC_Name'>
                        <textarea cols='20' rows='3' name='PIC_Name' id='PIC_Name".$count."'>".$data->PIC_Name."</textarea></td>";
                        echo "<td style='text-align:center' name='PIC_Number'>
                        <textarea cols='20' rows='3' name='PIC_Number' id='PIC_Number".$count."'>".$data->PIC_Number."</textarea></td>";
                        echo "<td style='text-align:center' name='Put_in_Service_Date'>
                        <textarea cols='20' rows='3' name='Put_in_Service_Date' id='Put_in_Service_Date".$count."'>".$data->Put_in_Service_Date."</textarea></td>";
                        echo "<td style='text-align:center' name='Put_in_Service_Date'>
                        <textarea cols='20' rows='3' name='Put_in_Service_Date' id='Put_in_Service_Date".$count."'>".$data->Put_in_Service_Date."</textarea></td>";
                        $count++;
                        ?>         
                      </tr>

                      <?php
                        }
                      endforeach;
                    ?>  
        </tbody>
                </table>
                <input type="submit" id="submitbutton" name="submitbutton" value="Submit" onclick="return dataProcess();" />
        </form>   
                    </div>
                </div>
            </div>
        <!-- /.container -->

    </div>
<div style="display:none">
<table style="display:none" id="activity" name="tableexport">
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
                    <th class="headline_class_name">Product</th>
                    <th class="headline_class_name">BW_Packet</th>
                    <th class="headline_class_name">One_Time_Charge</th>
                    <th class="headline_class_name">Abonemen</th>
                    <th class="headline_class_name">Sales_by</th>
                    <th class="headline_class_name">AM_Name</th>
                    <th class="headline_class_name">AM_Phone</th>
                    <th class="headline_class_name">Customer_Phone</th>
                    <th class="headline_class_name">Contract_Date</th>
                    <th class="headline_class_name">Due_Date_Live</th>
                    <th class="headline_class_name">Tech_Data</th>

                    <th class="headline_class_name">Input_Date</th>
                    <th class="headline_class_name">Speedy_Number</th>
                    <th class="headline_class_name">Date_of_Progress</th>
                    <th class="headline_class_name">I-Siska_Status</th>
                    <th class="headline_class_name">Tenoss_Status</th>
                    <th class="headline_class_name">Status</th>
                    <th class="headline_class_name">Additional_Information</th>
                    <th class="headline_class_name">One_Time_Charge</th>
                    <th class="headline_class_name">Follow_up</th>
                    <th class="headline_class_name">Unit_in_Charge</th>
                    <th class="headline_class_name">PIC_Name</th>
                    <th class="headline_class_name">PIC_Number</th>
                    <th class="headline_class_name">Put_in_Service_Date</th>
                </tr>
    </thead>
    <tbody id="tabel1" contenteditable="true">
        <?php
                    foreach($isiska->result() as $data):
                      
                        if($data->Status=="Progress" or $data->Status=="progress"){
                        echo "<tr><td td style='text-align:center'>".$data->No."</td></td>";
                        echo "<td style='text-align:center' text-align:center>".$data->Cust_Name."</td>";
                        echo "<td style='text-align:center'>".$data->Cust_Ship."</td>";
                        echo "<td style='text-align:center'>".$data->City."</td>";
                        echo "<td style='text-align:center'>".$data->Customer_Segmen."</td>";
                        echo "<td style='text-align:center'>".$data->Product."</td>";
                        echo "<td style='text-align:center'>".$data->BW_Packet."</td>";
                        echo "<td style='text-align:center'>".$data->One_Time_Charge."</td>";
                        echo "<td style='text-align:center'>".$data->Abonemen."</td>";
                        echo "<td style='text-align:center'>".$data->Sales_by."</td>";
                        echo "<td style='text-align:center'>".$data->AM_Name."</td>";
                        echo "<td style='text-align:center'>".$data->AM_Phone."</td>";
                        echo "<td style='text-align:center'>".$data->Customer_Phone."</td>";
                        echo "<td style='text-align:center'>".$data->Contract_Date."</td>";
                        echo "<td style='text-align:center'>".$data->Due_Date_Live."</td>";
                        echo "<td style='text-align:center'>".$data->Tech_Data."</td>";
                        echo "<td style='text-align:center'>".$data->Input_Date."</td>";
                        echo "<td style='text-align:center'>".$data->Speedy_Number."</td>";
                        echo "<td style='text-align:center'>".$data->Date_of_Progress."</td>";
                        echo "<td style='text-align:center'>".$data->ISiska_Status."</td>";
                        echo "<td style='text-align:center'>".$data->Tenoss_Status."</td>";
                        echo "<td style='text-align:center'>".$data->Status."</td>";
                        echo "<td style='text-align:center'>".$data->Additional_Information."</td>";
                        echo "<td style='text-align:center'>".$data->Follow_up."</td>";
                        echo "<td style='text-align:center'>".$data->Unit_in_Charge."</td>";
                        echo "<td style='text-align:center'>".$data->PIC_Name."</td>";
                        echo "<td style='text-align:center'>".$data->PIC_Number."</td>";
                        echo "<td style='text-align:center'>".$data->Put_in_Service_Date."</td>";?>            

                      </tr>
                      <?php
                        }
                      endforeach;
                    ?>
        </tbody>
                </table>
</div>

    <div class="content-section-b">

        <div class="component">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Closed</h3>
                    </div>
                    <div class="searchbox">Search:  <input type="search" class="light-table-filter" data-table="order-table" placeholder="Type to search"><i class="fa fa-search"></i></div>
                                                            <table>  
    <tr id="footerExport2">  
        <td id="exportexcel2"><img size=5px src="<?php echo base_url(); ?>assets/xls.ico" title="Export to Excel" /></td>  
        <td id="exportpdf2"><img size=5px src="<?php echo base_url(); ?>assets/pdf.ico" title="Export to PDF" /></td>    
    </tr>  
</table>
                    <div class="pabel-body">
                    <table class="overflow-y" id="activity2" name="tableexport">
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
                    <th class="headline_class_name">Product</th>
                    <th class="headline_class_name">BW_Packet</th>
                    <th class="headline_class_name">One_Time_Charge</th>
                    <th class="headline_class_name">Abonemen</th>
                    <th class="headline_class_name">Sales_by</th>
                    <th class="headline_class_name">AM_Name</th>
                    <th class="headline_class_name">AM_Phone</th>
                    <th class="headline_class_name">Customer_Phone</th>
                    <th class="headline_class_name">Contract_Date</th>
                    <th class="headline_class_name">Due_Date_Live</th>
                    <th class="headline_class_name">Tech_Data</th>

                    <th class="headline_class_name">Input_Date</th>
                    <th class="headline_class_name">Speedy_Number</th>
                    <th class="headline_class_name">Date_of_Progress</th>
                    <th class="headline_class_name">I-Siska_Status</th>
                    <th class="headline_class_name">Tenoss_Status</th>
                    <th class="headline_class_name">Status</th>
                    <th class="headline_class_name">Additional_Information</th>
                    <th class="headline_class_name">One_Time_Charge</th>
                    <th class="headline_class_name">Follow_up</th>
                    <th class="headline_class_name">Unit_in_Charge</th>
                    <th class="headline_class_name">PIC_Name</th>
                    <th class="headline_class_name">PIC_Number</th>
                    <th class="headline_class_name">Put_in_Service_Date</th>
                </tr>
    </thead>
    <tbody id="tabel1" contenteditable="true">
        <?php
                    foreach($isiska->result() as $data):
                      
                        if($data->Status=="Closed"){
                        echo "<tr><td td style='text-align:center'>".$data->No."</td></td>";
                        echo "<td style='text-align:center' text-align:center>".$data->Cust_Name."</td>";
                        echo "<td style='text-align:center'>".$data->Cust_Ship."</td>";
                        echo "<td style='text-align:center'>".$data->City."</td>";
                        echo "<td style='text-align:center'>".$data->Customer_Segmen."</td>";
                        echo "<td style='text-align:center'>".$data->Product."</td>";
                        echo "<td style='text-align:center'>".$data->BW_Packet."</td>";
                        echo "<td style='text-align:center'>".$data->One_Time_Charge."</td>";
                        echo "<td style='text-align:center'>".$data->Abonemen."</td>";
                        echo "<td style='text-align:center'>".$data->Sales_by."</td>";
                        echo "<td style='text-align:center'>".$data->AM_Name."</td>";
                        echo "<td style='text-align:center'>".$data->AM_Phone."</td>";
                        echo "<td style='text-align:center'>".$data->Customer_Phone."</td>";
                        echo "<td style='text-align:center'>".$data->Contract_Date."</td>";
                        echo "<td style='text-align:center'>".$data->Due_Date_Live."</td>";
                        echo "<td style='text-align:center'>".$data->Tech_Data."</td>";
                        echo "<td style='text-align:center'>".$data->Input_Date."</td>";
                        echo "<td style='text-align:center'>".$data->Speedy_Number."</td>";
                        echo "<td style='text-align:center'>".$data->Date_of_Progress."</td>";
                        echo "<td style='text-align:center'>".$data->ISiska_Status."</td>";
                        echo "<td style='text-align:center'>".$data->Tenoss_Status."</td>";
                        echo "<td style='text-align:center'>".$data->Status."</td>";
                        echo "<td style='text-align:center'>".$data->Additional_Information."</td>";
                        echo "<td style='text-align:center'>".$data->Follow_up."</td>";
                        echo "<td style='text-align:center'>".$data->Unit_in_Charge."</td>";
                        echo "<td style='text-align:center'>".$data->PIC_Name."</td>";
                        echo "<td style='text-align:center'>".$data->PIC_Number."</td>";
                        echo "<td style='text-align:center'>".$data->Put_in_Service_Date."</td>";?>            

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
        //alert('zzzz');
        //alert($("#Status").val());
        

        for (var i = 0; i < <?php print $sizeRes ?>; i++) {
            var idNo = '#No'+i;
            //var idCust_Name = $('#Cust_Name//'+i).html();

            var idCust_Name ='#Cust_Name'+i;
            var idCust_Ship= '#Cust_Ship'+i;
            var idCity = '#City'+i;
            var idCustomer_Segmen ='#Customer_Segmen'+i;
            var idProduct = '#Product'+i;
            var idBW_Packet = '#BW_Packet'+i;
            var idOne_Time_Charge ='#One_Time_Charge'+i;
            var idAbonemen = '#Abonemen'+i;
            var idSales_by = '#Sales_by'+i;
            var idAM_Name ='#AM_Name'+i;
            var idAM_Phone = '#AM_Phone'+i;
            var idCustomer_Phone = '#Customer_Phone'+i;
            var idContract_Date = '#Contract_Date'+i;
            var idDue_Date_Live ='#Due_Date_Live'+i;
            var idTech_Data = '#Tech_Data'+i;
            var idInput_Date = '#Input_Date'+i;
            var idSpeedy_Number ='#Speedy_Number'+i;
            var idDate_of_Progress = '#Date_of_Progress'+i;
            var idISiska_Status = '#ISiska_Status'+i; 
            var idTenoss_Status = '#Tenoss_Status'+i;
            var idStatus = '#Status'+i;
            var idAdditional_Information ='#Additional_Information'+i;
            var idFollow_up = '#Follow_up'+i;
            var idUnit_in_Charge = '#Unit_in_Charge'+i; 
            var idPIC_Name ='#PIC_Name'+i;
            var idPIC_Number = '#PIC_Number'+i;
            var idPut_in_Service_Date = '#Put_in_Service_Date'+i; 

            //alert($(Cust_Name).val());     
            //alert('zz');                    
            // if ( $(idStatus).val() == 'Closed')
            //     alert(i);
            // {
                $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "index.php/ViewData/post_action", 
                data: {
                    No: $(idNo).val(),
                    Cust_Name: $(idCust_Name).val(),
                    Cust_Ship: $(idCust_Ship).val(), 
                    City: $(idCity).val(),
                    Customer_Segmen: $(idCustomer_Segmen).val(),
                    Product: $(idProduct).val(), 
                    BW_Packet: $(idBW_Packet).val(),
                    One_Time_Charge: $(idOne_Time_Charge).val(),
                    Abonemen: $(idAbonemen).val(), 
                    Sales_by: $(idSales_by).val(),
                    AM_Name: $(idAM_Name).val(), 
                    AM_Phone: $(idAM_Phone).val(), 
                    Customer_Phone: $(idCustomer_Phone).val(),
                    Contract_Date: $(idContract_Date).val(),
                    Due_Date_Live: $(idDue_Date_Live).val(), 
                    Tech_Data: $(idTech_Data).val(),
                    Input_Date: $(idInput_Date).val(),
                    Speedy_Number: $(idSpeedy_Number).val(), 
                    Date_of_Progress: $(idDate_of_Progress).val(),
                    ISiska_Status: $(idISiska_Status).val(),
                    Tenoss_Status: $(idTenoss_Status).val(), 
                    Status: $(idStatus).val(),
                    Additional_Information: $(idAdditional_Information).val(),
                    Follow_up: $(idFollow_up).val(), 
                    Unit_in_Charge: $(idUnit_in_Charge).val(),
                    PIC_Name: $(idPIC_Name).val(),
                    PIC_Number: $(idPIC_Number).val(), 
                    Put_in_Service_Date: $(idPut_in_Service_Date).val()
                },
                    dataType: "text",  
                    cache:false,
                    success: 
                      function(data){
                        //alert("Anda Telah Berhasil Mengupdate Tabel");  //as a debugging message.
                      }
                    });// you have missed this bracket
                
            // }

        }
        alert("Anda Telah Berhasil Mengupdate Tabel");
        //return false;
    }


</script>


    <!-- /#wrapper -->


<!-- regin -->


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/search.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/cari.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ba-throttle-debounce.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.stickyheader.js"></script>




</body>

</html>
