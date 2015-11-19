<!DOCTYPE html>
<html lang="en">

<head>





    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <?php 
    foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" /> 
    <?php endforeach; ?>

    <?php foreach($js_files as $file): ?> 
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
 
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
        .flexigrid div.form-div input[type="text"] {
    font-size: 16px;
    width: 500px;
    height: 30px;
    border: 1px solid #AAA;
    padding: 5px;
    background: none repeat scroll 0% 0% #FAFAFA;
}

/*        #hohoho {
            width: 100%;
            overflow-x: scroll;
        }*/
    </style>


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
                <!-- /.dropdown -->
                
                        <li>
                            <a href="<?php echo base_url();?>index.php/Home/do_logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    
                    <!-- /.dropdown-user -->
                
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
                                    <a href="<?php echo base_url();?>index.php/ViewData">I-SISCA</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/ViewDataTicares">TICARES</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="active">
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Input Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/InsertData" >I-SISCA</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/InsertDataTicares" class="active">TICARES</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Account Manager<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/InsertDataAm">Add Manager Account</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/ViewDataAm">View List Manager Account</a>
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
                    <h1 class="page-header">Data TICARES</h1>       
                    
                   
                        
                        <!-- $crud->set_theme('bootstrap'); -->
                            <div id="hohoho">
                            <?php echo $output; ?>
    
                            </div>
                            
                            
                     
                       
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
    
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>
</body>

</html>
