<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> <?php echo $this->config->item('app_name') ?> </title>

    <!--    <link rel="icon" type="image/png" href="/images/favicon.png" />-->

    <!--CDN CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

    <!--Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/css/salon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/css/core.css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">


    <!-- plugins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/webuipopover/jquery.webui-popover.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/zoom/zoom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/jpcard/card.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/css/chosen/chosen.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/css/icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/datepicker/datepicker.css">


</head>
<body>

<!-- Pageloader -->
<div class="pageloader"></div>
<div class="infraloader is-active"></div>

<style>

    .shop-wrapper {
        height: 100%;
        min-height: 100vh;
        width: calc(100% - 0px);
        position: relative;
        background: #f0f0f0;
        transition: all .3s;
        margin-left: 0 !important;
    }

    .account-tabs li a {
        text-decoration: none;
    }

</style>