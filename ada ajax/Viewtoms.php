<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/customregin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/components/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/components/useful.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/components/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/components/form.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/useful.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/form.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/component.css" />    




    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">TOMS Telkom Indonesia</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
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
                  <!-- <div class="form-group" > -->
                    <!-- <div class="col-sm-10"> -->
                    
                                                  <p><input  type="email" class="form-control" id="inputEmail3"
                                                    placeholder="Username"></p>
                                                         
                                                  <p><input type="password" class="form-control" id="inputPassword3" placeholder="Password"></p>
                         <p><button type="submit" class="btn btn-primary" style="width: 100%;">Sign in</button></p>    
                </form>
                </div>
                    </ul>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">

                        <h3>TOMS</h3>
                        <br>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">

                            <li>
                                <a href="#closed" class="btn btn-default btn-lg"><span class="network-name">Closed</span></a>
                            </li>
                            <li>
                                <a href="#onprogress" class="btn btn-default btn-lg"><span class="network-name">On Progress</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <a  name="closed"></a>
    <div class="content-section-a">
<div class="component">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Closed</h3>
                    </div>
                    <div class="pabel-body">
                    <div class="searchbox">Search: <input type="text" id="search" placeholder="Type to search"><i class="fa fa-search"></i></div>
                    <form method="post" autocomplete="off" id="formtable" name="formtable" enctype="multipart/form-data">
                    <table class="overflow-y">
                        <thead>
            
                    <tr>
                        <th style='text-align:center' class="headline_class_name" colspan="17"> Data Pelanggan</th>
                        <th style='text-align:center' class="headline_class_name" colspan="12"> Progress</th>         
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
    
    
<!--                     <tr>
                        <th>oke</th>
                        <th>mantap</th>
                    </tr> -->
               <?php
                    foreach($isiska->result() as $data):                      
                        if($data->Status=="Progress"){
                        echo "<tr><td contenteditable='false' style='text-align:center'>".$data->No."</td>";
                        echo "<td contenteditable='false' style='text-align:center' text-align:center>".$data->Cust_Name."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->Cust_Ship."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->City."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->Customer_Segmen."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->Product."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->BW_Packet."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->One_TIme_Charge."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->Abonemen."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->Sales_by."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->AM_Name."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->AM_Phone."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->Customer_Phone."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->Contract_Date."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->Due_Date_Live."</td>";
                        echo "<td contenteditable='false' style='text-align:center'>".$data->Tech_Data."</td>";
                        echo "<td style='text-align:center' value='$data->Input_Date'>".$data->Input_Date."</td>";
                        echo "<td style='text-align:center' name='Speedy_Number'>".$data->Speedy_Number."</td>";
                        echo "<td style='text-align:center' name='Date_of_Progress'>".$data->Date_of_Progress."</td>";
                        echo "<td style='text-align:center' name='ISiska_Status'>".$data->ISiska_Status."</td>";
                        echo "<td style='text-align:center' name='Tenoss_Status'>".$data->Tenoss_Status."</td>";
                        echo "<td style='text-align:center'><input type='text' name='Status' id='Status'>".$data->Status."</input></td>";
                        echo "<td style='text-align:center'><input type='text' name='Additional_Information' id='Additional_Information'>".$data->Additional_Information."</input></td>";
                        echo "<td style='text-align:center' name='Follow_up'>".$data->Follow_up."</td>";
                        echo "<td style='text-align:center' name='Unit_in_Charge'>".$data->Unit_in_Charge."</td>";
                        echo "<td style='text-align:center' name='PIC_Name'>".$data->PIC_Name."</td>";
                        echo "<td style='text-align:center' name='PIC_Number'>".$data->PIC_Number."</td>";
                        echo "<td style='text-align:center' name='Put_in_Service_Date'>".$data->Put_in_Service_Date."</td>";
                        echo "<td style='text-align:center' name='Put_in_Service_Date'>".$data->Put_in_Service_Date."</td>";?>         
                      </tr>

                      <?php
                        }
                      endforeach;
                    ?>
                    
                    
                     
                
        
        </tbody>
        
                </table>
                <input type="submit" id="submitbutton" name="submitbutton" value="Submit" />
        </form> 
                
        
                    </div>
                </div>
            </div>
        
    </div>

    <a  name="onprogress"></a>
    <div class="content-section-b">

        <div class="component">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">On Progress</h3>
                    </div>
                    <div class="pabel-body">
                    <div class="searchbox">Search:  <input type="search" class="light-table-filter" data-table="order-table" placeholder="Type to search"><i class="fa fa-search"></i></div>
                    <table class="overflow-y order-table">
                         <thead>
                    <tr>
                        <th colspan="17"> Data Pelanggan</th>
                        <th colspan="12"> Progress</th>         
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
                </tr>
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
                        echo "<td style='text-align:center'>".$data->One_TIme_Charge."</td>";
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
    <!-- /.content-section-a -->


    
    <!-- /.banner -->

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
                    <p class="copyright text-muted small">Copyright &copy; Telkom Indonesia</p>
                </div>
            </div>
        </div>
    </footer>


<script>
$(document).ready(function(){   

    $('#formtable').on('submit', function (e) {     
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



    <!-- jQuery -->
       <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/search.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/cari.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.stickyheader.js"></script>

</body>

</html>
