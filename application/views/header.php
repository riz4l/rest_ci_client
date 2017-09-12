<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple API Client - Application</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/simple-sidebar.css" rel="stylesheet">

    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/datepicker/datepicker3.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    .glyphicon-position {
        margin-left: -20px;
    }
</style>
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php echo base_url()?>">
                        Simple Application KTP
                    </a>
                </li>
                <li <?php if(isset($link_dashboard)){ echo $link_dashboard;}?>>
                    <a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-dashboard glyphicon-position"></span> Dashboard</a>
                </li>
                <li <?php if(isset($link_ktp)){ echo $link_ktp;}?>>
                    <a href="<?php echo base_url()?>index.php/kartu_penduduk"><span class="glyphicon glyphicon-list glyphicon-position"></span> Kartu Penduduk</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->