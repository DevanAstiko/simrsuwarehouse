<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?> SIM RSU || DATAWAREHOUSE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/dist/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/dist/lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/dist/lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/dist/lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/dist/lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/dist/lib/css/jquery.datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/dist/lib/css/datatables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/dist/lib/css/editor.css">

    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/themes/flat-blue.css">

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/chart.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/jquery.matchheight-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/jquery.datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/datatables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/editor.js"></script>
   
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/jquery.inputmask.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/jquery.inputmask.date.extensions.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/ace/ace.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/ace/mode-html.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/ace/theme-github.js"></script>




    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>


    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/themes/flat-blue.css">

    <!-- JS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/dist2/pivot.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist2/pivot.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist2/c3_renderers.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/dist2/export_renderers.js"></script>

       
        <style>
            body {font-family: Verdana;}

        .c3-line, .c3-focused {stroke-width: 3px !important;}
        .c3-bar {stroke: white !important; stroke-width: 1;}
        .c3 text { font-size: 12px; color: grey;}
        .tick line {stroke: white;}
        .c3-axis path {stroke: grey;}
        .c3-circle { opacity: 1 !important; }
        </style>

        <!-- optional: mobile support with jqueryui-touch-punch -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/reporting.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/jquery.inputmask.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/dist/lib/js/jquery.inputmask.date.extensions.js"></script>
        <script>
            $(function () {
                $("[data-mask]").inputmask();
            });
        </script>

        <!-- for examples only! script to show code to user -->
  
</head>

<body class="flat-blue">
<a id="land" href="<?php echo base_url(); ?>" ></a>
<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-inverse navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon" style="color: #fff"></i>
                        </button>
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('username'); ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username"><?php echo $this->session->userdata('username'); ?></h4>
                                        <h4><?php  echo $this->session->userdata('role'); ?></h4>
                                        <p>User ID : <?php  echo $this->session->userdata('id'); ?></p>
                                        <p>IP : <?php echo $this->input->ip_address(); ?></p>
                                        <p>Agent : <?php echo $this->input->user_agent(); ?></p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalChangePassword"><i class="fa fa-user"></i> Change Password</button>
                                            <button type="button" id="logoutButton" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo base_url(); ?>" id="url">
                                <div class="icon fa fa-wrench"></div>
                                <div class="title">RSU DW SYSTEMS</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <li <?php if ($title == "Home") echo'class="active"'; ?>>
                                <a href="<?php echo base_url(); ?>">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li <?php if ($title == "Users") echo'class="active"'; ?>>
                                <a href="<?php echo base_url(); ?>users">
                                    <span class="icon fa fa-user-md"></span><span class="title">Admin Directory</span>
                                </a>
                            </li>
                            <li <?php if ($title == "Personalization")echo'class="active"'; ?>>
                                <a href="<?php echo base_url(); ?>">
                                    <span class="icon fa fa-user"></span><span class="title">Personalization</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>etlprocessing">
                                    <span class="icon fa fa-gears"></span><span class="title">ETL Processing</span>
                                </a>
                            </li>
                            <li class="panel panel-default dropdown <?php if ($title == "Rawat Jalan") echo 'active'; ?>">
                                <a data-toggle="collapse" href="#dropdown-element">
                                    <span class="icon fa fa-stethoscope"></span><span class="title">Rawat Jalan</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-element" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url(); ?>createreport/directory">Directory Report</a>
                                            </li>
                                            <li><a href="<?php echo base_url(); ?>createreport">Create Report</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <span class="icon fa fa-hospital-o"></span><span class="title">Rawat Inap</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon fa fa-glass"></span><span class="title">Pharmacy</span>
                                </a>
                            </li>
                             <li>
                                <a href="#">
                                    <span class="icon fa fa-asterisk"></span><span class="title">Laboratory</span>
                                </a>
                            </li>
                             
                            
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>

