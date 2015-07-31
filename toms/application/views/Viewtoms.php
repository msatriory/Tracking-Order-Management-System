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
                        <a href="#closed">Closed</a>
                    </li>
                    <li>
                        <a href="#onprogress">On Progress</a>
                    </li>
                    <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    Sign In <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <div id="regineers">
                      <form>
                  <!-- <div class="form-group" > -->
                    <!-- <div class="col-sm-10"> -->
                    <table id="tabellogin">
                        <tr>
                            <td>
                                <i class="fa fa-user"></i>
                            </td>
                            <td>
                                                  <input  type="email" class="form-control" id="inputEmail3"
                     placeholder="Username">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-lock"></i>
                            </td>
                            <td>
                                                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </td>
                        </tr>
                    </table>
  
                    <!-- </div> -->
                  <!-- </div> -->
                  <!-- <div class="form-group"> -->
                    
                    <!-- <div class="col-sm-10"> -->
                      
                    <!-- </div> -->
                  <!-- </div> -->
                  <!-- <div class="form-group">
                    <div class="col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Remember me
                        </label>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="form-group"> -->
                    <!-- <div class="col-sm-10"> -->
                      <button type="submit" class="btn btn-primary" style="width: 100%;">Sign in</button>
                    <!-- </div> -->
                  <!-- </div> -->
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
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><span class="network-name">Closed</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><span class="network-name">On Progress</span></a>
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
                    foreach($isiska->result() as $data);
                      {
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
                      }
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
                <table id="table" class="table table-bordered table-hover table-striped table-fixed table-editable">
                  <thead>
            <tr>
            <th>Full name</th>
                        <th>Full name</th>
                                    <th>Full name</th>
            <th>CCY</th>
            <th>Last</th>
            <th>+/-</th>
            <th>%</th>
            <th>Bid</th>
            <th>Ask</th>
            <th>Volume</th>
            <th>Turnover</th>
            <th>Lolol</th>
            <th>Turnover</th>
            <th>Turnover</th>
            <th>Turnover</th>
            <th>Turnover</th>
        </tr>
    </thead>
    <tbody contenteditable="true">
        <tr>
            <td >A.P. Møller...</td>
            <td >DKK</td>
            <td >33,220.00</td>
            <td>760</td>
            <td>2.34</td>
            <td>33,140.00</td>
            <td>33,220.00</td>
            <td>594</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
        </tr>
        <tr>
            <td>A.P. Møller...</td>
            <td>DKK</td>
            <td>34,620.00</td>
            <td>640</td>
            <td>1.88</td>
            <td>34,620.00</td>
            <td>34,700.00</td>
            <td>9,954</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>346,530,246</td>
        </tr>
        <tr>
            <td>Carlsberg A</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>DKK</td>
            <td>380</td>
            <td>0</td>
            <td>0</td>
            <td>371</td>
            <td>391.5</td>
            <td>6</td>
            <td>2,280</td>
        </tr>
        <tr>
            <td>Carlsberg B</td>
            <td>DKK</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>364.4</td>
            <td>8.6</td>
            <td>2.42</td>
            <td>363</td>
            <td>364.4</td>
            <td>636,267</td>
            <td>228,530,601</td>
        </tr>
        <tr>
            <td>Chr. Hansen...</td>
            <td>DKK</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>19,791,910</td>
            <td>114.5</td>
            <td>-1.6</td>
            <td>-1.38</td>
            <td>114.2</td>
            <td>114.5</td>
            <td>141,822</td>
            <td>16,311,454</td>
        </tr>
        <tr>
            <td>Coloplast B</td>
            <td>DKK</td>
            <td>809.5</td>
            <td>11</td>
            <td>1.38</td>
            <td>809</td>
            <td>809.5</td>
            <td>85,840</td>
            <td>69,363,301</td>
        </tr>
        <tr>
            <td>D/S Norden</td>
            <td>DKK</td>
            <td>155</td>
            <td>-1.5</td>
            <td>-0.96</td>
            <td>155</td>
            <td>155.1</td>
            <td>51,681</td>
            <td>8,037,225</td>
        </tr>
        <tr>
            <td>Danske Bank</td>
            <td>DKK</td>
            <td>69.05</td>
            <td>2.55</td>
            <td>3.83</td>
            <td>69.05</td>
            <td>69.2</td>
            <td>1,723,719</td>
            <td>115,348,068</td>
        </tr>
        <tr>
            <td>DSV</td>
            <td>DKK</td>
            <td>105.4</td>
            <td>0.2</td>
            <td>0.19</td>
            <td>105.2</td>
            <td>105.4</td>
            <td>674,873</td>
            <td>71,575,035</td>
        </tr>
        <tr>
            <td>FLSmidth &amp; Co.</td>
            <td>DKK</td>
            <td>295.8</td>
            <td>-1.8</td>
            <td>-0.6</td>
            <td>295.1</td>
            <td>295.8</td>
            <td>341,263</td>
            <td>100,301,032</td>
        </tr>
        <tr>
            <td>G4S plc</td>
            <td>DKK</td>
            <td>22.53</td>
            <td>0.05</td>
            <td>0.22</td>
            <td>22.53</td>
            <td>22.57</td>
            <td>190,920</td>
            <td>4,338,150</td>
        </tr>
        <tr>
            <td>Jyske Bank</td>
            <td>DKK</td>
            <td>144.2</td>
            <td>1.4</td>
            <td>0.98</td>
            <td>142.8</td>
            <td>144.2</td>
            <td>78,163</td>
            <td>11,104,874</td>
        </tr>
        <tr>
            <td>Københavns ...</td>
            <td>DKK</td>
            <td>1,580.00</td>
            <td>-12</td>
            <td>-0.75</td>
            <td>1,590.00</td>
            <td>1,620.00</td>
            <td>82</td>
            <td>131,110</td>
        </tr>
        <tr>
            <td>Lundbeck</td>
            <td>DKK</td>
            <td>103.4</td>
            <td>-2.5</td>
            <td>-2.36</td>
            <td>103.4</td>
            <td>103.8</td>
            <td>157,162</td>
            <td>16,462,282</td>
        </tr>
        <tr>
            <td>Nordea Bank</td>
            <td>DKK</td>
            <td>43.22</td>
            <td>-0.06</td>
            <td>-0.14</td>
            <td>43.22</td>
            <td>43.25</td>
            <td>167,520</td>
            <td>7,310,143</td>
        </tr>
        <tr>
            <td>Novo Nordisk B</td>
            <td>DKK</td>
            <td>552.5</td>
            <td>-3.5</td>
            <td>-0.63</td>
            <td>550.5</td>
            <td>552.5</td>
            <td>843,533</td>
            <td>463,962,375</td>
        </tr>
        <tr>
            <td>Novozymes B</td>
            <td>DKK</td>
            <td>805.5</td>
            <td>5.5</td>
            <td>0.69</td>
            <td>805</td>
            <td>805.5</td>
            <td>152,188</td>
            <td>121,746,199</td>
        </tr>
        <tr>
            <td>Pandora</td>
            <td>DKK</td>
            <td>39.04</td>
            <td>0.94</td>
            <td>2.47</td>
            <td>38.8</td>
            <td>39.04</td>
            <td>350,965</td>
            <td>13,611,838</td>
        </tr>
        <tr>
            <td>Rockwool In...</td>
            <td>DKK</td>
            <td>492</td>
            <td>0</td>
            <td>0</td>
            <td>482</td>
            <td>492</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Rockwool In...</td>
            <td>DKK</td>
            <td>468</td>
            <td>12</td>
            <td>2.63</td>
            <td>465.2</td>
            <td>468</td>
            <td>9,885</td>
            <td>4,623,850</td>
        </tr>
        <tr>
            <td>Sydbank</td>
            <td>DKK</td>
            <td>95</td>
            <td>0.05</td>
            <td>0.05</td>
            <td>94.7</td>
            <td>95</td>
            <td>103,438</td>
            <td>9,802,899</td>
        </tr>
        <tr>
            <td>TDC</td>
            <td>DKK</td>
            <td>43.6</td>
            <td>0.13</td>
            <td>0.3</td>
            <td>43.5</td>
            <td>43.6</td>
            <td>845,110</td>
            <td>36,785,339</td>
        </tr>
        <tr>
            <td>Topdanmark</td>
            <td>DKK</td>
            <td>854</td>
            <td>13.5</td>
            <td>1.61</td>
            <td>854</td>
            <td>855</td>
            <td>38,679</td>
            <td>32,737,678</td>
        </tr>
        <tr>
            <td>Tryg</td>
            <td>DKK</td>
            <td>290.4</td>
            <td>0.3</td>
            <td>0.1</td>
            <td>290</td>
            <td>290.4</td>
            <td>94,587</td>
            <td>27,537,247</td>
        </tr>
        <tr>
            <td>Vestas Wind...</td>
            <td>DKK</td>
            <td>90.15</td>
            <td>-4.2</td>
            <td>-4.45</td>
            <td>90.1</td>
            <td>90.15</td>
            <td>1,317,313</td>
            <td>121,064,314</td>
        </tr>
        <tr>
            <td>William Dem...</td>
            <td>DKK</td>
            <td>417.6</td>
            <td>0.1</td>
            <td>0.02</td>
            <td>417</td>
            <td>417.6</td>
            <td>64,242</td>
            <td>26,859,554</td>
        </tr>
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

</body>

</html>
