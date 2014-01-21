<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
    <title>Assignment.Synopsis: Electronic Learning Aid</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="description" content="Instant synopses generator tool for your objective. Anonymous and private.">
	<meta name="keywords" content="synopses generator, development, productivity, achievement, objectives, awesome">
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
                    <h4 class="heading edit_objective">Assignment.Synopsis: Electronic Learning Aid</h4>
                    <span class="details pull-right">
                    	<a href="<?php echo site_url();?>create">Create An Assignment</a>
                    </span>
                </div>
                <div class="widget-body">
                    <div class="row-fluid">
                    	<h5>Electronic Learning Aid</h5>
                    	<p>This is a system which manages the creation and completion of an assignment conducted by an instructor with any number of students.<p><p>  Essentially, the instructor creates an assignment, passes its URL to the students who then complete the assignment while logging their work. Students return their synopsis to the instructor in the form of a report.  Links to each report appear in the instructor's dashboard. A report can be commented on and is always available at its unique hashed URL.</p>
                    	<h5>Real Time Synopsis Editor</h5>

                    	<p>Students use the synopsis editor to document the tasks they take to complete the assignment. The editor is served with a unique hashed URL meaning that it may always be returned to in the future for further work - it's best to bookmark this page.</p>
                    	<h5>Usage</h5>
                    	<p>Simply <a href="<?php echo site_url();?>create">create an assignment</a>, send its URL to your students, and then bookmark/monitor your assignment dashboard as they complete their work.  You can view and comment on student reports with links from the dashboard. </p>
            			<h5>Synopsis mini</h5>
            			An online synopsis editor and reporter (minus the assignment functionality of this site) is available at <a href="http://synopsis.ablitica.com" target="_blank">synopsis.ablitica.com</a>
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