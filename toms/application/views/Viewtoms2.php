<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <title>TOMS | Home</title><!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel=
    "stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/customregin.css" rel=
    "stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/components/icon.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/components/useful.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/components/reset.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/components/form.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/icon.css" rel="stylesheet"
    type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/useful.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/reset.css" rel="stylesheet"
    type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/form.css" rel="stylesheet"
    type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/semantic.css" rel=
    "stylesheet" type="text/css"><!--
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    -->

    <script language="javascript" src=
    "%3C?php%20echo%20base_url();%20?%3Eassets/js/jquery.scrollTo.js" type=
    "text/javascript"></script>
    <script language="javascript" src=
    "%3C?php%20echo%20base_url();%20?%3Eassets/js/jquery-1.10.2.min.js" type=
    "text/javascript"></script><!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/landing-page.css" rel=
    "stylesheet"><!-- Custom Fonts -->
    <link href=
    "<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href=
    "http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
    rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Navigation -->

    <nav class="navbar navbar-default navbar-fixed-top topnav">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
                <button class="navbar-toggle" data-target=
                "#bs-example-navbar-collapse-1" data-toggle="collapse" type=
                "button"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span></button> <a class=
                "navbar-brand topnav" href="#">TOMS Telkom Indonesia</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id=
            "bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href=
                        "#">Isiska <b class="caret"></b></a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="#isiskaonprogress">On Progress</a>
                            </li>

                            <li>
                                <a href="#isiskaclosed">Closed</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href=
                        "#">Ticares <b class="caret"></b></a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="#ticaresonprogress">On Progress</a>
                            </li>

                            <li>
                                <a href="#ticaresclosed">Closed</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href=
                        "#">Sign In <b class="caret"></b></a>

                        <div class="dropdown-menu" style="margin-left: 2em">
                            <div id="regineers">
                                <form action=
                                "%3C?php%20echo%20base_url()?%3Eindex.php/Home/do_login"
                                method="post">
                                    <input class="form-control" name="NIK"
                                    placeholder="NIK" type="text">
                                    <input class="form-control" name="password"
                                    placeholder="Password" type="password"><br>
                                    <br>
                                    <input class="btn btn-primary" type=
                                    "submit" value="login">
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- Header -->
    <a id="about" name="about"></a>

    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h3>TOMS</h3><br>
                        <hr class="intro-divider">

                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a class="btn btn-default btn-lg" href=
                                "#closed"><span class=
                                "network-name">Closed</span></a>
                            </li>

                            <li>
                                <a class="btn btn-default btn-lg" href=
                                "onprogress"><span class="network-name">On
                                Progress</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.intro-header -->
    <a id="isiskaonprogress" name="isiskaonprogress"></a>

    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Isiska On Progress</h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <form method="post">
                                <input type="submit">

                                <table class=
                                "table table-bordered table-hover table-striped table-fixed table-editable"
                                id="table">
                                    <thead>
                                        <tr>
                                            <th colspan="17" style=
                                            "text-align:center">Data
                                            Pelanggan</th>

                                            <th colspan="12" style=
                                            "text-align:center">Progress</th>
                                        </tr>
                                    </thead>

                                    <tbody contenteditable="true">
                                        <tr contenteditable="false">
                                            <td>No</td>

                                            <td>Cust_Name</td>

                                            <td>Cust_Ship</td>

                                            <td>City</td>

                                            <td>Customer_Segmen</td>

                                            <td>Product</td>

                                            <td>BW_Packet</td>

                                            <td>One_Time_Charge</td>

                                            <td>Abonemen</td>

                                            <td>Sales_by</td>

                                            <td>AM_Name</td>

                                            <td>AM_Phone</td>

                                            <td>Customer_Phone</td>

                                            <td>Contract_Date</td>

                                            <td>Due_Date_Live</td>

                                            <td>Tech_Data</td>

                                            <td>Input_Date</td>

                                            <td>Speedy_Number</td>

                                            <td>Date_of_Progress</td>

                                            <td>I-Siska_Status</td>

                                            <td>Tenoss_Status</td>

                                            <td>Status</td>

                                            <td>Additional_Information</td>

                                            <td>One_Time_Charge</td>

                                            <td>Follow_up</td>

                                            <td>Unit_in_Charge</td>

                                            <td>PIC_Name</td>

                                            <td>PIC_Number</td>

                                            <td>Put_in_Service_Date</td>
                                        </tr><?php
                                                                                                foreach($isiska->result() as $data):
                                                                                                if($data->Status=="progress"){
                                                                                                    echo "<tr><td contenteditable='false' style='text-align:center'>".$data->No."</td></td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center' text-align:center>".$data->Cust_Name."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->Cust_Ship."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->City."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->Customer_Segmen."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->Product."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->BW_Packet."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->One_Time_Charge."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->Abonemen."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->Sales_by."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->AM_Name."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->AM_Phone."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->Customer_Phone."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->Contract_Date."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->Due_Date_Live."</td>";
                                                                                                    echo "<td contenteditable='false' style='text-align:center'>".$data->Tech_Data."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->Input_Date."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->Speedy_Number."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->Date_of_Progress."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->ISiska_Status."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->Tenoss_Status."</td>";
                                                                                                    echo "<td style='text-align:center'><input type='text' id='Status' name='Status'>".$data->Status."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->Additional_Information."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->Follow_up."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->Unit_in_Charge."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->PIC_Name."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->PIC_Number."</td>";
                                                                                                    echo "<td style='text-align:center'>".$data->Put_in_Service_Date."</td>";?><?php
                                                                                                    }
                                                                                                  endforeach;
                                                                                                ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div>
    <!-- Page Content -->
    <a id="isiskaclosed" name="isiskaclosed"></a>

    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Isiska Closed</h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class=
                            "table table-bordered table-hover table-striped table-fixed">
                            <thead>
                                    <tr>
                                        <th colspan="17">Data Pelanggan</th>

                                        <th colspan="12">Progress</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>No</td>

                                        <td>Cust_Name</td>

                                        <td>Cust_Ship</td>

                                        <td>City</td>

                                        <td>Customer_Segmen</td>

                                        <td>Product</td>

                                        <td>BW_Packet</td>

                                        <td>One_Time_Charge</td>

                                        <td>Abonemen</td>

                                        <td>Sales_by</td>

                                        <td>AM_Name</td>

                                        <td>AM_Phone</td>

                                        <td>Customer_Phone</td>

                                        <td>Contract_Date</td>

                                        <td>Due_Date_Live</td>

                                        <td>Tech_Data</td>

                                        <td>Input_Date</td>

                                        <td>Speedy_Number</td>

                                        <td>Date_of_Progress</td>

                                        <td>I-Siska_Status</td>

                                        <td>Tenoss_Status</td>

                                        <td>Status</td>

                                        <td>Additional_Information</td>

                                        <td>One_Time_Charge</td>

                                        <td>Follow_up</td>

                                        <td>Unit_in_Charge</td>

                                        <td>PIC_Name</td>

                                        <td>PIC_Number</td>

                                        <td>Put_in_Service_Date</td>
                                    </tr><?php
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
                                                            echo "<td style='text-align:center'>".$data->Put_in_Service_Date."</td>";?><?php
                                                            }
                                                          endforeach;
                                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.content-section-a -->

<div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ticares On Progress</h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <form method="post">
                                <input type="submit">

                                <table class=
                                "table table-bordered table-hover table-striped table-fixed table-editable"
                                id="table">
                                    <thead>
                                        <tr>
                                            <th colspan="17" style=
                                            "text-align:center">Data
                                            Pelanggan</th>

                                            <th colspan="12" style=
                                            "text-align:center">Progress</th>
                                        </tr>
                                    </thead>

                                    <tbody contenteditable="true">
                                        <tr contenteditable="false">
                        
                                    <tr>
                                        <th class="headline_class_name">No</th>

                                        <th class="headline_class_name">
                                        Cust_Name</th>

                                        <th class="headline_class_name">
                                        Cust_Ship</th>

                                        <th class="headline_class_name">
                                        City</th>

                                        <th class="headline_class_name">
                                        Customer_Segmen</th>

                                        <th class="headline_class_name">
                                        Product_Name</th>

                                        <th class="headline_class_name">
                                        Bandwidth</th>

                                        <th class="headline_class_name">
                                        One_Time_Charge</th>

                                        <th class="headline_class_name">
                                        Abonemen</th>

                                        <th class="headline_class_name">
                                        AM_Name</th>

                                        <th class="headline_class_name">
                                        AM_Phone</th>

                                        <th class="headline_class_name">
                                        Customer_Name</th>

                                        <th class="headline_class_name">
                                        Customer_Phone</th>

                                        <th class="headline_class_name">
                                        Contract_Date</th>

                                        <th class="headline_class_name">
                                        Due_Date_Live</th>

                                        <th class="headline_class_name">Ket
                                        input</th>

                                        <th class="headline_class_name">
                                        Input_Date</th>

                                        <th class="headline_class_name">
                                        Order_Number</th>

                                        <th class="headline_class_name">
                                        Ticares_Status</th>

                                        <th class="headline_class_name">
                                        Tenoss_Taskname</th>

                                        <th class="headline_class_name">
                                        Tenoss_Workgroup</th>

                                        <th class="headline_class_name">
                                        Sirkit_ID</th>

                                        <th class="headline_class_name">
                                        Additional_Information</th>

                                        <th class="headline_class_name">
                                        Follow_up</th>

                                        <th class="headline_class_name">
                                        Billcom_date</th>

                                        <th class="headline_class_name">
                                        Billdate</th>
                                    </tr>
                                        <tr><?php
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
                                                 ?><?php
                                                }
                                              endforeach;
                                            ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div>



<div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ticares Closed</h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <form method="post">
                                <input type="submit">

                                <table class=
                                "table table-bordered table-hover table-striped table-fixed table-editable"
                                id="table">
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

                                    <tbody contenteditable="true">
                                        <tr contenteditable="false">
                        
                                    
                                        <tr><?php
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
                                                     ?><?php
                                                    }
                                                  endforeach;
                                                ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div>



    <!-- Footer -->

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
    </footer><!-- jQuery -->
    <!--
    <script src="js/jquery.js"></script> 
    -->
    <script language="javascript" src=
    "%3C?php%20echo%20base_url();%20?%3Eassets/js/jquery.js" type=
    "text/javascript"></script> <!-- Bootstrap Core JavaScript -->
     <!--
    <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
            <script src="js/compass.js"></script>
            -->
     <script language="javascript" src=
    "%3C?php%20echo%20base_url();%20?%3Eassets/js/bootstrap.min.js" type=
    "text/javascript"></script> <script language="javascript" src=
"%3C?php%20echo%20base_url();%20?%3Eassets/js/jquery.scrollTo.js" type=
"text/javascript"></script> <script language="javascript" src=
"%3C?php%20echo%20base_url();%20?%3Eassets/js/compass.js" type=
"text/javascript"></script> <script type="text/javascript">
$(function(){
    $("#nav a").click(function(e){
    e.preventDefault();
    $('html,body').scrollTo(this.hash,this.hash); 
    });
    });
    </script> <script>
$(document).ready(function(){   

    $("#submitbutton").click(function()
    {       
     $.ajax({
         type: "POST",
         url: "<?php echo base_url(); ?>" + "index.php/ViewData/post_action", 
         data: {Status: $("#Status").val()},
         dataType: "text",  
         cache:false,
         success: 
              function(data){
                alert(data);  //as a debugging message.
              }
          });// you have missed this bracket
     return false;
    });
    });


    </script>
</body>
</html>