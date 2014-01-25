<?php
	date_default_timezone_set($timezone);
	$synopsis_tip = "Click each checkbox for each completed step. Document the tasks in the notes fields.";
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Worksheet</title>

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
		<!--h4 id="assignment_header">Worksheet &bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="<?php echo $synopsis_tip?>">?</a></h4-->
		<div id="student_name_container">
			<p>
			<h5>STUDENT</h5>
        	<input id="student_name" value=" <?php echo $student_name; ?>" name="student_name" class="span3 student_name" type="text" readonly style="color:#000000" />
     	   </p>
        <div>
		<br>
        	<form id="begin" action="/generate/generate_report" method="post" data-sid="<?php echo $synopsis_id;?>" data-aid="<?php echo $assignment_id;?>">
				<h5>OBJECTIVE</h5>
				<p><textarea tabindex="1" class="span7 objective" type="text" name="objective" style="color:#000" readonly><?php echo $objective;?></textarea></p>

				<h5>STEPS</h5>
				<table>
					<?php $s=1; foreach ($steps as $step) { ?>
						<?php
							// so this renders the steps with the notes from the join with css and readonly params set depending on step status
							// step panels CSS and text area properties are controlled through js
							$status = 'check'; $visual = "step_panel_sel"; $readonly = null;

							if ($step->status == 'open' || $step->status == '') { $status = 'unchecked'; $visual="step_panel_unsel"; } else { $status = 'check'; $readonly = 'readonly';}
						?>
					<tr class="step_panel<?php echo $step->id;?> <?php echo $visual;?>">
						<td class="step_number<?php echo $step->id;?>">
							<?php echo $s;?>.
						</td>
						<td>
							<span class="row<?php echo $step->id;?>"><input id="step" class="span7 steps" tabindex="" type="text" readonly value="<?php echo $step->step;?>" style="color:#000;" />&nbsp;
						</td>
						<td class="checkbox c<?php echo $step->id;?>">
							<a class="glyphicons <?php echo $status;?> begin begin<?php echo $step->id;?>" data-s="<?php echo $step->id;?>" data-status="<?php echo $step->status;?>"><i></i></a></span>
						</td>
					</div>
					</tr>
					<tr class="step_panel<?php echo $step->id;?> <?php echo $visual;?>">
						<td>
						</td>
						<td colspan="2">
							<div class="notes" data-note="<?php echo $step->note;?>" data-s="<?php echo $step->id;?>"><div <?php //echo $readonly;?> data-step_id="<?php echo $step->id;?>" class="span6 note<?php echo $step->id;?> notes" placeholder="notes" name="<?php echo $step->id;?>"><?php if ($step->note == '') { $step->note = "<i>click to add note</i>"; } ?><?php echo $this->typography->auto_typography($step->note);?></div></div>
						</td>
					</tr>
					<tr><td colspan="2">&nbsp;</td></tr>
				<?php $s++; } ?>
				</table>
		        <div class="_row-fluid">
	        		<div id="done">
	        			<input type="hidden" name="pid" value="<?php echo $synopsis_id;?>">
	        			<input type="hidden" name="aid" value="<?php echo $assignment_id;?>">
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
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

</body>
</html>