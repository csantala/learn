<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
    <title>LEARN</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="description" content="Instructor driven student assignment system.">
	<meta name="keywords" content="learning aid, assignment generator">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <!-- Excel-like css -->
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap -->
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />

    <!-- Glyphicons Font Icons -->
    <link href="/common/theme/css/glyphicons.css" rel="stylesheet" />

    <!-- Uniform Pretty Checkboxes -->
    <link href="/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="/common/theme/css/style-light.css?1369753444" rel="stylesheet" />

    <!-- Excel-like css -->
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />

    <!-- General css -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" />


    <!-- LESS.js Library -->
    <script src="/common/theme/scripts/plugins/system/less.min.js"></script>

</head>
<body class="">

     <!-- Content -->
    <div id="contentx">
        <div class="innerLR innerT">
            <div class="widget">
                <div class="widget-head">
                    <h4 class="heading edit_objective">LEARN</h4>
                    <span class="details pull-right">
                    	<a href="<?php echo site_url();?>create">Create An Assignment</a>
                    </span>
                </div>
                <div class="widget-body">
                    <div class="row-fluid">
                    	<h5>What is this?</h5>
                    	<p>This is a system which manages the creation, completion, and marking of an assignment conducted by an instructor with any number of students.<p>
                    	<h5>Usage</h5>
                    	<p><a href="<?php echo site_url();?>create">Create an assignment</a>, send its Assignment URL to your students, and then monitor their work from your dashboard.</p>
                    	<p>The Assignment URL will provide each student with a unique worksheet of which you may monitor and mark.</p>
                    	<h5>Demo</h5>
                    	<p>Example A: <a href="http://learn.ablitica.com/dashboard/yd7dJ9l/Y8v8rQj">Instructor Dashboard</a></p>
                    	<p>Example B: <a href="http://learn.ablitica.com/assignment/Y8v8rQj" target="_blank">Assigment URL for Students</a></p>
                    	<p>Example C: <a href="http://learn.ablitica.com/home/Y8v8rQj/27w73YD" target="_blank">Student Worksheet</a></p>
 					 </div>
                </div>
            </div>
        </div>
        <!-- // Content END -->
        </div>

        <?php $this->load->view('/components/footer') ?>


    <?php $this->load->view('/components/themer') ?>
    <?php $this->load->view('/components/js_includes') ?>

</body>
</html>