<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">



   
 
    <style type='text/css'>
        body
        {
            font-family: Arial;
            font-size: 14px;
        }
        a {
            color: blue;
            text-decoration: none;
            font-size: 14px;
        }
        a:hover
        {
            text-decoration: underline;
        }
    </style>


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
    <link href="<?php echo base_url(); ?>assets/css/cobalah.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/components/form.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/icon.css" rel="stylesheet"
    type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/stylish-portfolio.css" rel="stylesheet"
    type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/useful.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/reset.css" rel="stylesheet"
    type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/form.css" rel="stylesheet"
    type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/semantic.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/landing-page.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/tablesorter.css" rel=
    "stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/normalize.css" rel="stylesheet"
    type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/component.css" rel="stylesheet"
    type="text/css">
    <!--
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    -->

    <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/jquery.scrollTo.js" type=
    "text/javascript"></script>

    <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/paging.js" type=
    "text/javascript"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js" type=
    "text/javascript"></script><!-- Custom CSS -->
    <!-- Custom Fonts -->
    <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/jquery.tablesorter.js" type=
    "text/javascript"></script>

        <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/jquery.tablesorter.pager.js" type=
    "text/javascript"></script>
<!-- 
    <script type="text/javascript" src="./js/jquery-1.3.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="./js/jquery.tablesorter.pager.js"></script>
 -->



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
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <style type="text/css">

.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav,
#tableData {
  width: 400px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}
</style>
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
                "navbar-brand topnav" href="#headerpage">TOMS Telkom Indonesia</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id=
            "bs-example-navbar-collapse-1">

            <!-- <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#closed">Closed</a>
                    </li>
                    <li>
                        <a href="#onprogress">On Progress</a>
                    </li>
                    <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    Sign In <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <div >
                      <form id="regineers">
                    
                                                  <p><input  type="email" class="form-control" id="inputEmail3"
                                                    placeholder="Username"></p>
                                                         
                                                  <p><input type="password" class="form-control" id="inputPassword3" placeholder="Password"></p>
                         <p><button type="submit" class="btn btn-primary" style="width: 100%;">Sign in</button></p>    
                </form>
                </div>
                    </ul>
                </li>
                </ul> -->
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
                    <li>
                        <a href=
                        "#headerpage">Sign In</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- Header -->
    <a id="headerpage" name="headerpage"></a>

     <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>TOMS</h1>
            <h3>Traffic Order Management System</h3>
                <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action=
                                "<?php echo base_url();?>index.php/Home/do_login"
                                method="post">        
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input class="form-control" name="NIK"
                                    placeholder="NIK" type="text">                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input class="form-control" name="password"
                                    placeholder="Password" type="password">
                            </div>
                                
                        
                            <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                <div class="col-sm-12 controls">
                                <input class="btn btn-primary col-sm-12" type=
                                "submit" value="Sign In">
                                </div>
                            </div>
    
                        </form>     
                        </div>                     
                    </div>  
        </div>
        
    </div>
            <br>
            <a href="#isiskaonprogress" class="btn btn-dark btn-lg" id="more">Isiska On Progress</a>
            <a href="#isiskaclosed" class="btn btn-dark btn-lg" id="more">Isiska Closed</a>
            <a href="#ticaresonprogress" class="btn btn-dark btn-lg" id="more">Ticares On Progress</a>
            <a href="#ticaresclosed" class="btn btn-dark btn-lg" id="more">Ticares Closed</a>
        </div>
    </header>

    <a id="isiskaonprogress" name="isiskaonprogress"></a>

    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="panel panel-success">
                <div class="panel-heading">
                 <h3 class="panel-title">Isiska On Progress</h3> 
                </div>
                <div class="searchbox" style="text-align:right;">Search: <input type="search" class="light-table-filter" data-table="order-table-x" placeholder="Filter"><i class="fa fa-search"></i></div> 
                <table class="overflow-y order-table-x" id="search">

                                
                                
                    <thead>
                        
                                        <tr>
                                            <th style="text-align: center;">No</th>

                                            <th style="text-align: center;">Customer Name</th>

                                            <th style="text-align: center;">Address</th>

                                            <th style="text-align: center;">City</th>

                                            <th style="text-align: center;">Customer Segment</th>

                                            <th style="text-align: center;">Product</th>

                                            <th style="text-align: center;">BW_Packet</th>

                                            <th style="text-align: center;">One Time Charge</th>

                                            <th style="text-align: center;">Abonemen</th>

                                            <th style="text-align: center;">Sales by</th>

                                            <th style="text-align: center;">AM Name</th>

                                            <th style="text-align: center;">AM Phone</th>

                                            <th style="text-align: center;">Customer Phone</th>

                                            <th style="text-align: center;">Contract Date</th>

                                            <th style="text-align: center;">Due Date Live</th>

                                            <th style="text-align: center;">Tech Data</th>

                                            <th style="text-align: center;">Input Date</th>

                                            <th style="text-align: center;">Speedy Number</th>

                                            <th style="text-align: center;">Date of Progress</th>

                                            <th style="text-align: center;">I-SISKA Status</th>

                                            <th style="text-align: center;">Tenoss Status</th>

                                            <th style="text-align: center;">Status</th>

                                            <th style="text-align: center;">Additional Information</th>

                                            <th style="text-align: center;">One Time Charge</th>

                                            <th style="text-align: center;">Follow up</th>

                                            <th style="text-align: center;">Unit in Charge</th>

                                            <th style="text-align: center;">PIC Name</th>

                                            <th style="text-align: center;">PIC Number</th>

                                            <th style="text-align: center;">Put in Service Date</th>
                                        </tr>
                    </thead>
                    <tbody>
                         <?php
                                                                                                foreach($isiska->result() as $data):
                                                                                                if($data->Status=="progress"){
                                                                                                    echo "<tr><th  style='text-align:center'>".$data->No."</th></td>";
                                                                                                    echo "<td  style='text-decoration: italic;' text-align:center>".$data->Cust_Name."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->Cust_Ship."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->City."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->Customer_Segmen."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->Product."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->BW_Packet."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->One_Time_Charge."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->Abonemen."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->Sales_by."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->AM_Name."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->AM_Phone."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->Customer_Phone."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->Contract_Date."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->Due_Date_Live."</td>";
                                                                                                    echo "<td  style='text-align:center'>".$data->Tech_Data."</td>";
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
                </div>
            </div>
        </div><!-- /.container -->
    </div>
    <!-- Page Content -->
    <a id="isiskaclosed" name="isiskaclosed"></a>

    <div class="content-section-b">
        <div class="container">
            <div class="row">
            <div class="panel panel-danger">
                <div class="panel-heading">
                 <h3 class="panel-title">Isiska Closed</h3> 
                </div>
                <div class="searchbox" style="text-align:right;">Search: <input type="search" class="light-table-filter" data-table="order-table-y" placeholder="Filter"><i class="fa fa-search"></i></div> 
                <table class="overflow-y order-table-y" id="search">

                                
                                
                    <thead>
                        
                                        <tr>
                                            <th style="text-align: center;">No</th>

                                            <th style="text-align: center;">Cust_Name</th>

                                            <th style="text-align: center;">Cust_Ship</th>

                                            <th style="text-align: center;">City</th>

                                            <th style="text-align: center;">Customer_Segmen</th>

                                            <th style="text-align: center;">Product</th>

                                            <th style="text-align: center;">BW_Packet</th>

                                            <th style="text-align: center;">One_Time_Charge</th>

                                            <th style="text-align: center;">Abonemen</th>

                                            <th style="text-align: center;">Sales_by</th>

                                            <th style="text-align: center;">AM_Name</th>

                                            <th style="text-align: center;">AM_Phone</th>

                                            <th style="text-align: center;">Customer_Phone</th>

                                            <th style="text-align: center;">Contract_Date</th>

                                            <th style="text-align: center;">Due_Date_Live</th>

                                            <th style="text-align: center;">Tech_Data</th>

                                            <th style="text-align: center;">Input_Date</th>

                                            <th style="text-align: center;">Speedy_Number</th>

                                            <th style="text-align: center;">Date_of_Progress</th>

                                            <th style="text-align: center;">I-Siska_Status</th>

                                            <th style="text-align: center;">Tenoss_Status</th>

                                            <th style="text-align: center;">Status</th>

                                            <th style="text-align: center;">Additional_Information</th>

                                            <th style="text-align: center;">One_Time_Charge</th>

                                            <th style="text-align: center;">Follow_up</th>

                                            <th style="text-align: center;">Unit_in_Charge</th>

                                            <th style="text-align: center;">PIC_Name</th>

                                            <th style="text-align: center;">PIC_Number</th>

                                            <th style="text-align: center;">Put_in_Service_Date</th>
                                        </tr>
                    </thead>
                    <tbody>
                          <?php
                                                        foreach($isiska->result() as $data):
                                                          
                                                            if($data->Status=="Closed"){
                                                            echo "<tr><th td style='text-align:center'>".$data->No."</th></td>";
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
        </div><!-- /.container -->
    </div><!-- /.content-section-a -->

<a name="ticaresonprogress"></a>
<div class="content-section-a">
        <div class="container">
            <div class="row">

            <div class="panel panel-success">
                <div class="panel-heading">
                 <h3 class="panel-title">Ticares On Progress</h3> 
                </div>
                <div class="searchbox" style="text-align:right;">Search: <input type="search" class="light-table-filter" data-table="order-table-v" placeholder="Filter"><i class="fa fa-search"></i></div> 
                <table class="overflow-y order-table-v" id="search">

                                
                                
                    <thead>
                        
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
                    </thead>
                    <tbody>
                        <?php
                                            foreach($ticares->result() as $data):
                                            if($data->Ticares_Status=="Billcom") {
                                                echo "<tr><th  style='text-align:center'>".$data->No."</th></td>";
                                                echo "<td  style='text-align:center' text-align:center>".$data->Cust_Name."</td>";
                                                echo "<td  style='text-align:center'>".$data->Cust_Ship."</td>";
                                                echo "<td  style='text-align:center'>".$data->City."</td>";
                                                echo "<td  style='text-align:center'>".$data->Customer_Segmen."</td>";
                                                echo "<td  style='text-align:center'>".$data->Product_Name."</td>";
                                                echo "<td  style='text-align:center'>".$data->Bandwidth."</td>";
                                                echo "<td  style='text-align:center'>".$data->One_Time_Charge."</td>";
                                                echo "<td  style='text-align:center'>".$data->Abonemen."</td>";

                                                echo "<td  style='text-align:center'>".$data->AM_Name."</td>";
                                                echo "<td  style='text-align:center'>".$data->AM_Phone."</td>";
                                                echo "<td  style='text-align:center'>".$data->Customer_Name."</td>";
                                                echo "<td  style='text-align:center'>".$data->Customer_Phone."</td>";
                                                echo "<td  style='text-align:center'>".$data->Contract_Date."</td>";
                                                echo "<td  style='text-align:center'>".$data->Due_Date_Live."</td>";
                                                echo "<td  style='text-align:center'>".$data->ket_input."</td>";
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
                </div>
            </div>
        </div><!-- /.container -->
    </div>


<a name="ticaresclosed"></a>
<div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="panel panel-danger">
                <div class="panel-heading">
                 <h3 class="panel-title">Ticares Closed</h3> 
                </div>
                <div class="searchbox" style="text-align:right;">Search: <input type="search" class="light-table-filter" data-table="order-table-z" placeholder="Filter"><i class="fa fa-search"></i></div> 
                <table class="overflow-y order-table-z" id="search">

                                
                                
                    <thead>
                        
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
                    </thead>
                    <tbody>
                        <?php
                                                foreach($ticares->result() as $data):
                                                if($data->Ticares_Status!="Billcom") {
                                                    echo "<tr><th  style='text-align:center'>".$data->No."</th></td>";
                                                    echo "<td  style='text-align:center' text-align:center>".$data->Cust_Name."</td>";
                                                    echo "<td  style='text-align:left'>".$data->Cust_Ship."</td>";
                                                    echo "<td  style='text-align:center'>".$data->City."</td>";
                                                    echo "<td  style='text-align:center'>".$data->Customer_Segmen."</td>";
                                                    echo "<td  style='text-align:center'>".$data->Product_Name."</td>";
                                                    echo "<td  style='text-align:center'>".$data->Bandwidth."</td>";
                                                    echo "<td  style='text-align:center'>".$data->One_Time_Charge."</td>";
                                                    echo "<td  style='text-align:center'>".$data->Abonemen."</td>";

                                                    echo "<td  style='text-align:center'>".$data->AM_Name."</td>";
                                                    echo "<td  style='text-align:center'>".$data->AM_Phone."</td>";
                                                    echo "<td  style='text-align:center'>".$data->Customer_Name."</td>";
                                                    echo "<td  style='text-align:center'>".$data->Customer_Phone."</td>";
                                                    echo "<td  style='text-align:center'>".$data->Contract_Date."</td>";
                                                    echo "<td  style='text-align:center'>".$data->Due_Date_Live."</td>";
                                                    echo "<td  style='text-align:center'>".$data->ket_input."</td>";
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
                </div>
               
            </div>
        </div><!-- /.container -->
    </div>



<table id="tableData" class="table table-bordered table-striped">
          <thead>
    <tr>
              <th>id</th>
              <th>first name</th>
              <th>surname</th>
              <th>number</th>
            </tr>
  </thead>
          <tbody>
    <tr>
              <td>1</td>
              <td>Frank</td>
              <td>Shoulder</td>
              <td>1246</td>
            </tr>
    <tr>
              <td>2</td>
              <td>John</td>
              <td>Jameson</td>
              <td>4564</td>
            </tr>
    <tr>
              <td>3</td>
              <td>Philip</td>
              <td>Jenkins</td>
              <td>4456</td>
            </tr>
    <tr>
              <td>4</td>
              <td>Maria</td>
              <td>Carlston</td>
              <td>4456</td>
            </tr>
    <tr>
              <td>5</td>
              <td>Julia</td>
              <td>Tampelton</td>
              <td>1246</td>
            </tr>
    <tr>
              <td>6</td>
              <td>Jane</td>
              <td>Conor</td>
              <td>4456</td>
            </tr>
    <tr>
              <td>7</td>
              <td>Susan</td>
              <td>Crane</td>
              <td>1246</td>
            </tr>
    <tr>
              <td>8</td>
              <td>Lucas</td>
              <td>Fenric</td>
              <td>4456</td>
            </tr>
    <tr>
              <td>8</td>
              <td>Mark</td>
              <td>Fenric</td>
              <td>4456</td>
            </tr>
    <tr>
              <td>9</td>
              <td>Hilde</td>
              <td>Mayer</td>
              <td>4456</td>
            </tr>
    <tr>
              <td>10</td>
              <td>John</td>
              <td>Tron</td>
              <td>1246</td>
            </tr>
    <tr>
              <td>11</td>
              <td>Hans</td>
              <td>Stark</td>
              <td>4564</td>
            </tr>
  </tbody>
        </table>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/paging.js"></script> 
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:5});
            });
        </script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    
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
    "<?php echo base_url(); ?>assets/js/jquery.js" type=
    "text/javascript"></script> <!-- Bootstrap Core JavaScript -->
    <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/search.js" type=
    "text/javascript"></script>
    <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/cari.js" type=
    "text/javascript"></script>

    <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/filtering.js" type=
    "text/javascript"></script>

    <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/debounce.js" type=
    "text/javascript"></script>

    <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/jquery.stickyheader.js" type=
    "text/javascript"></script>






     <!--
    <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
            <script src="js/compass.js"></script>
            -->
     <script language="javascript" src=
    "<?php echo base_url(); ?>assets/js/bootstrap.min.js" type=
    "text/javascript"></script> 
    <script language="javascript" src=
"<?php echo base_url(); ?>assets/js/jquery.scrollTo.js" type=
"text/javascript"></script> <script language="javascript" src=
"<?php echo base_url(); ?>assets/js/compass.js" type=
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

    <script defer="defer">
    $(document).ready(function() 
    { 
        $("#azza")
        .tablesorter({widthFixed: true, widgets: ['zebra']})
        .tablesorterPager({container: $("#pager")}); 
    } 
    ); 
    </script>


     <!-- // <script> -->
     <!-- $(function() { -->
        <!-- $('a[href*=#]:not([href=#])').click(function() { -->
            <!-- if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) { -->
<!--  -->
                <!-- var target = $(this.hash); -->
                <!-- target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); -->
                <!-- if (target.length) { -->
                    <!-- $('html,body').animate({ -->
                        <!-- scrollTop: target.offset().top -->
                    <!-- }, 1000); -->
                    <!-- return false; -->
                <!-- } -->
            <!-- } -->
        <!-- }); -->
    <!-- }); -->
    <!-- </script> -->
</body>
</html>