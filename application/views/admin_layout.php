<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?PHP
    $theme = 'https://www.w3schools.com/lib/w3-theme-blue.css'; ?>
    <title><?php echo version();?></title>
    <script src="<?php echo base_url()?>assets/vendor/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/js/jquery.blockUI.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendor/css/style.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/vendor/css/metisMenu.min.css" rel="stylesheet">
    <!--<link href="<?php /*echo base_url()*/?>assets/vendor/css/left.css" rel="stylesheet"-->
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/vendor/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/vendor/css/freeow.css" rel="stylesheet">
    <!--Set Color Page-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
    <!--
        https://www.w3schools.com/w3css/w3css_color_themes.asp
    -->
    <!-- theme Color-->

    <!-- Alert Css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/v4-shims.css">
    <!-- Alert Css-->

    <!-- Custom Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Kanit');
    </style>
</head>
<link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
<style>
    body {
        font-family: 'Kanit', sans-serif;
        font-size: 100%;
    }
    img.center {
        display: block;
        margin: 0 auto;
        margin: 20px;
    }
    .border {
        border:0px solid black;
        padding-left: 15px;
        padding-right: 15px;
    }
</style>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url()?>assets/vendor/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url()?>assets/vendor/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url()?>assets/vendor/js/sb-admin-2.min.js"></script>

<script src="<?php echo base_url()?>assets/vendor/js/underscore.min.js"></script>

<script src="<?php echo base_url()?>assets/vendor/js/jquery.cookie.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/js/jquery.freeow.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/js/jquery.numeric.js"></script>
<script src="<?php echo base_url()?>assets/vendor/js/numeral.min.js"></script>
<link href="<?php echo base_url()?>assets/vendor/css/bootstrap-datepicker.css" rel="stylesheet" />
<script src="<?php echo base_url()?>assets/vendor/js/bootstrap-datepicker-custom.js"></script>
<script src="<?php echo base_url()?>assets/vendor/js/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url()?>assets/apps/js/apps.js"></script>
<script type="text/javascript" charset="utf-8">
    var site_url = '<?php echo site_url()?>';
    var base_url = '<?php echo base_url()?>';
    var year    ='<?php echo date('Y')+543;?>'
    var csrf_token = '<?php echo $this->security->get_csrf_hash(); ?>';
</script>
<body >


<div id="wrapper">
    <div class="border row">
        <nav class="navbar w3-theme" role="" style="margin-bottom: 0;">
            <div >
                <?php echo $header_for_layout?>
            </div>
        </nav>
    </div>
    <div class="border row">
        <div class="border2 col-lg-2">
            <div id="left_menu" style="padding-left: 2%; ">
                <?php echo $left_for_layout?>
            </div>
        </div>
        <div class="border col-lg-10">
            <div id="page-wrapper" style="">
                <!-- <button id="hide_left" data-show="true">Hide</button>-->
                <?php echo $content_for_layout?>
            </div>
        </div>
    </div>
    <div id="freeow" class=" freeow freeow-info freeow-bottom-right"></div>
</body>
</div>


</html>

