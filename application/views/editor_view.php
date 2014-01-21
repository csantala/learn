<?php
	date_default_timezone_set($timezone);
	$synopsis_tip = "Click each checkbox for each completed step. Document your tasks in the notes fields.";
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Synopsis</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
  	 <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Excel-like css -->
    <link href="/css/excel-2013.css" rel="stylesheet" type="text/css" />
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap -->
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />

	<!-- Bootstrap Extended -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-wysihtml5.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

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
<body>
		<h3 id="assignment_header">Synopsis&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="<?php echo $synopsis_tip?>">?</a></h3>
		<div id="student_name_container">
			<p>
			<h5>STUDENT</h5>
        	<input id="student_name" value=" <?php echo $student_name; ?>" name="student_name" class="span3 student_name" type="text" readonly style="color:#000000" />
     	   </p>
        <div>
		<br>
        	<form id="begin" action="/generate/generate_report" method="post">
				<h5>OBJECTIVE</h5>
				<p><textarea tabindex="1" class="span9 objective" type="text" name="objective" style="color:#000" readonly><?php echo $objective;?></textarea></p>

				<h5>STEPS</h5>
				<table>
					<tr>
						<?php $s = 1; foreach ($steps as $step) { ?>
						<td class="step_number">
							<?php echo $s;?>.
						</td>
						<td>
							<span class="row<?php echo $s;?>"><input id="step" class="span7 steps" tabindex="" type="text" readonly value="<?php echo $step->step;?>" style="color:#000;" />&nbsp;
						</td>
						<td class="checkbox">
							<a class="glyphicons unchecked begin begin<?php echo $s;?>" data-s="<?php echo $s;?>"><i></i></a></span>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<div class="notes"><input type="text" data-n="<?php echo $s;?>" placeholder="notes"></div>
						</td>
					</tr>
					<tr><td colspan="2">&nbsp;</td></tr>
				<?php $s++; } ?>
				</table>
		        <div class="row-fluid">
	        		<div id="done">
	        			<input type="hidden" name="pid" value="<?php echo $project_id;?>">
	        			<input type="hidden" name="aid" value="<?php echo $assignment_hash;?>">
	        			<input type="submit" class="btn btn-default primary" value="     SUBMIT ASSIGNMENT     ">
	        			<!-- a class="btn primary confirm" href="/generate/generate_report/<?php echo $project_id?>/<?php echo $assignment_hash?>"SUBMIT ASSIGNMENT</a--></form>
	        		</div>
		        </div>
<div id="getlost">
        <?php // $this->load->view('/components/footer') ?>
</div>

    <?php $this->load->view('/components/themer') ?>
    <?php $this->load->view('/components/js_includes') ?>
      <script src="/common/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/bookmark.js"></script>
    <script src="/common/theme/scripts/demo/common.js?1384198042"></script>

</body>
</html>