<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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
    <!--
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.js" language="javascript" type="text/javascript"></script>   
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js" language="javascript" type="text/javascript"></script> 




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
                        <a href="#onprogress">On Progress</a>
                    </li>
                    <li>
                        <a href="#closed">Closed</a>
                    </li>
                    
                    <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    Sign In <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <div id="regineers">
                    

                        <form action="index.php/Home/do_login" method="post">
                    <input type="text" class="form-control" name="NIK" placeholder="NIK"/>
                    <input type="password" class="form-control" name="password" placeholder="Password"/><br>
                <br>
                    <input type="submit"  class="btn btn-primary" value="login"/>
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
                                <a href="onprogress" class="btn btn-default btn-lg"><span class="network-name">On Progress</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->
    <a  name="onprogress"></a>
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading">
                    <h3 class="panel-title">On Progress</h3>
                        </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <form method="post">
                            <table id="table" class="table table-bordered table-hover table-striped table-fixed table-editable">
                                <thead >
                                    <tr>
                                        <th style="text-align:center" colspan="17"> Data Pelanggan</th>
                                    <th style="text-align:center" colspan="12"> Progress</th>         
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
                                                    </tr>
                                                    <?php
                                                        foreach($isiska->result() as $data):
                                                        if($data->Status=="Closed"){
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
                                                            echo "<td style='text-align:center'>".$data->Put_in_Service_Date."</td>";?>            

                                                          </tr>
                                                          <?php
                                                            }
                                                          endforeach;
                                                        ?>
                                                     </tbody>

                                                 <input type="submit">
                                             </table>
                                        </form>
                                     </div>
            
                                </div>
                             </div>
                         </div>
                    </div>
        <!-- /.container -->

    </div>

    <!-- Page Content -->

    <a  name="closed"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
<div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">Closed</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped table-fixed">
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
                      
                        if($data->Status=="Progress"){
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
  </div>

        </div>
        <!-- /.container -->

    </div>

    <!-- /.content-section-a -->


    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect to Start Bootstrap:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <!--
    <script src="js/jquery.js"></script> 
    -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js" language="javascript" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <!--
    <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
            <script src="js/compass.js"></script>
            -->
            <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" language="javascript" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.js" language="javascript" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/js/compass.js" language="javascript" type="text/javascript"></script>
    <script type="text/javascript">
$(function(){
  $("#nav a").click(function(e){
    e.preventDefault();
    $('html,body').scrollTo(this.hash,this.hash); 
  });
});
</script>

<script>
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
