<?php
	date_default_timezone_set($timezone);
	$report_tip = "Bookmark this page to see new comments.";
	$et_tip = "The this the student's synopsis with elapsed time from initiation to completion.";
	$continue_tip = "Synopsis incomplete? Click the link to continue and then resubmit";
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Synopsis Report</title>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="refresh" content="120">
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

	<script type="application/javascript" src="/js/wysihtml5-0.3.0_rc2.js" ></script>
	<script type="application/javascript" src="/js/jquery-1.7.1.min.js"></script>
	<script type="application/javascript" src="/js/bootstrap.min.js"></script>
	<script type="application/javascript" src="/js/bootstrap-wysihtml5.js"></script>

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

    <script src="/js/bookmark.js"></script>
</head>

<body>
	   	<h3 id="assignment_header">Synopsis Report</h3><br>
        	<form id="begin" action="/create/begin" method="post">

        		<p>
        			STUDENT: <input id="student_name" value="<?php echo $student_name; ?>" name="student_name" class="span3" type="text" readonly style="color:#000000" />
        		</p>

				<h5>OBJECTIVE</h5>
				<p><input id="objective" type="text" readonly value="<?php echo $objective;?>" />
</p>


</p>
				</form>
				<!--
				<?php //echo $date?>&nbsp;&bull;&nbsp;Elapsed time: <?php echo $elapsed_time;?>&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="<?php echo $et_tip;?>">?</a><br>
-->
	        <!-- Row -->
	        <div class="row-fluid row-merge widget">
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
							<div class="notes" data-s="<?php echo $step->id;?>"><textarea <?php //echo $readonly;?> data-step_id="<?php echo $step->id;?>" class="span6 note<?php echo $step->id;?> notes" placeholder="notes" name="<?php echo $step->id;?>"><?php echo $step->note;?></textarea></div>

						</td>
					</tr>
					<tr><td colspan="2">&nbsp;</td></tr>
				<?php $s++; } ?>
				</table>
	           </div>
	           <a href="/home/<?php echo $assignment_id;?>/<?php echo $synopsis_id;?>">continue synopsis</a>&nbsp;&bull;&nbsp;<a href="#" data-toggle="tooltip" title="" data-original-title="<?php echo $continue_tip;?>">?</a>


	        <?php $this->load->view('/components/comments', array('comments_container_id' => $hash)); ?>
	        <?php $this->load->view('/components/comment_form', array('comments_container_id' => $hash)); ?>
	         <span class="comment"></span>

<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->
<br />
<?php //$this->load->view('/components/footer') ?>


<script src="/common/bootstrap/js/bootstrap.min.js"></script>
<script src="/common/theme/scripts/demo/common.js?1384198042"></script>

</body>
</html>