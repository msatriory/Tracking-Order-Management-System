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


                <ul class="nav navbar-nav navbar-right">
                    
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

