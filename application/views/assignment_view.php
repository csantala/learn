<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Assignment: <?php echo $objective;?></title>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Excel-like css -->
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap -->
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />

  	<!-- Bootstrap Extended -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-wysihtml5.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<script src="/js/wysihtml5-0.3.0_rc2.js"></script>
	<script src="/js/jquery-1.7.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/bootstrap-wysihtml5.js"></script>

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
    <script type="text/javascript" src="/common/theme/scripts/plugins/system/less.min.js"></script>
	<script src="/js/jstz.min.js"></script>
	<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery.cookie.js"></script>
    <script>
$(document).ready(function() {
	$("#student_name").focus();
//	var timezone = jstz.determine();
//	$.cookie('timezone', timezone.name());
});
	</script>
</head>
<body>
	<h4 id="assignment_header"></h4>
	<h5><?php echo $course . " " . $instructor;?></h5>
	<br>
	<form id="begin" action="/create/begin" method="post">
		<p>
			<h5>STUDENT NAME</h5>
			<input tabindex="1" id="student_name" name="student_name" class="span3" type="text" style="color:#000000" />
		</p>

		<h5>OBJECTIVE</h5>
		<p><textarea tabindex="1" class="span9 objective" type="text" name="objective" style="color:#000" readonly><?php echo $objective;?></textarea></p>

		<h5>STEPS</h5>
		<?php foreach ($steps as $step) { ?>
		<p><input id="step" class="span9" tabindex="3" type="text" readonly value="<?php echo $step->step;?>" /></p>
		<?php } ?>
		<input type="hidden" value="<?php echo $synopsis_url?>" name="synopsis_url">
		<input type="hidden" value="<?php echo $synopsis_id;?>" name="synopsis_id">
		<input type="hidden" value="<?php echo $assignment_id;?>" name="assignment_id">
		<br>
		<p><button tabindex="2" class="btn btn-icon btn-primary glyphicons lightbulb" type="submit" value="Assign"><i></i>Begin</button></p>
	</form>
	<hr>
<div id="x">
	<?php //$this->load->view('/components/footer') ?>
</div>
 <?php  $this->load->view('/components/js_includes') ?>
 <script src="/common/bootstrap/js/bootstrap.min.js"></script>
<script src="/common/theme/scripts/demo/common.js?1384198042"></script>
</body>
</html>