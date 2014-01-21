<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title><?php echo $project_id?></title>

	<!-- Meta -->
	<meta charset="UTF-8" />
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


	<!-- LESS.js Library -->
	<script src="/common/theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="">

	<!-- Main Container Fluid -->
	<div class="container-fluid fluid menu-left">

		<!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
		<div class="navbar main hidden-print">

			<!-- Wrapper -->
			<div class="wrapper">

			<!-- Menu Toggle Button -->
				<button type="button" class="btn btn-navbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<!-- // Menu Toggle Button END -->

				<!-- Top Menu Right -->
				<?php echo $this->load->view('/components/top_menu_right') ?>
				<!-- // Top Menu Right END -->


				<div class="clearfix"></div>
			</div>
			<!-- // Wrapper END -->

			<span class="toggle-navbar"></span>
		</div>
		<!-- Top navbar END -->

		<!-- Sidebar menu & content wrapper -->
		<div id="wrapper">

		<!-- Sidebar Menu -->
		<div id="menu" class="hidden-phone hidden-print">

			<!-- Brand -->
			<?php $this->load->view('/components/brand')?>

			<!-- Scrollable menu wrapper with Maximum height -->
			<div class="slim-scroll" data-scroll-height="800px">

			<!-- Sidebar Profile -->
			<?php // $this->load->view('components/sidebar_profile'); ?>
			<!-- // Sidebar Profile END -->

			<!-- Regular Size Menu -->
			<?php $this->load->view('/components/side_menu') ?>
			<div class="clearfix"></div>
			<!-- // Regular Size Menu END -->

			<?php $this->load->view('/components/glyph_menu') ?>

			</div>
			<!-- // Scrollable Menu wrapper with Maximum Height END -->

		</div>
		<!-- // Sidebar Menu END -->

		<!-- Content -->
		<div id="content">
			<div class="innerLR innerT">
				<div class="widget">
					<div class="widget-head">
						<h3 class="heading">Project</h3>
						<a href="/project/edit_project/<?php echo $project_id?>" class="details pull-right">edit</a>
					</div>
					<div class="widget-body">
						<h3><?php echo $project->title?></h3><br />
						<div class="row-fluid">
							<table class="dynamicTable table table-striped table-bordered table-condensed dataTable">
								<thead>
									<tr>
										<th>Duration</th><th>Tasks</th><th>Start-Finish</th><th>links</th>
									</tr>
									<tr>
										<td><?php echo elapsed_time($project->total_seconds);?></td>
										<td><?php echo $project->total_tasks?></td>
										<td><?php echo date("F j, Y", $project->start) ?> - <?php echo date("F j, Y", $project->end) ?></td>
										<td width="120">
											<div class="btn-group btn-block">
												<div class="leadcontainer">
													<button class="btn dropdown-lead btn-default">Resources</button>
												</div>
												<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span> </a>
												<ul class="dropdown-menu pull-right">
													<li><a target="_blank" href="<?php echo $project->github_link?>">GitHub</a></li>
													<li><a target="_blank" href="<?php echo $project->local_link?>">Local</a></li>
													<li><a target="_blank" href="<?php echo $project->staging_link?>">Staging</a></li>
													<li><a target="_blank" href="<?php echo $project->production_link?>">Production</a></li>
												</ul>
											</div>
										</td>
									</tr>
								</thead>
							</table>
						</div>
					</div>
					<div class="widget-body">
						<h4>Objectives</h4>
						<div class="row-fluid">
							<table class="dynamicTable table table-striped table-bordered table-condensed dataTable">
								<thead>
									<tr>
										<th class="objective_date">date</th><th>objective</th><th>tools</th>
									</tr>
								</thead>
								<tbody>
							<?php
								$i = 1;
								foreach ($objectives as $objective) {
							?>
								<tr>
									<td class="objective_date">
										<?php echo date("F j, Y", $objective->time) ?>
									</td>
									<td class="<?php echo $objective->id?>">
										<a href="/project/new_synopsis_from_objective/<?php echo $project_id?>/<?php echo $objective->id?>"><?php echo $objective->objective ?></a>
									</td>
									<td>
										<a class="edit_objective" href="#" data-objective="<?php echo $objective->objective?>" data-objective_id="<?php echo $objective->id?>" data-project_id="<?php echo $project_id?>">edit</a>&nbsp;&bull;&nbsp;
										<a class="confirm" href="/project/delete_objective/<?php echo $project_id . '/' . $objective->id?>">delete</a>
									</td>
								</tr>
							<?php } ?>
							</table>
						</div>
					</div>
					<div class="widget-body">
						<h4>Synopses</h4>
						<div class="row-fluid">
							<table class="dynamicTable table table-striped table-bordered table-condensed dataTable">
								<thead>
									<tr>
										<th>date</th><th>synopsis</th><th>session</th><th>tasks</th><th>duration</th></th><th>tools</th>
									</tr>
								</thead>
								<tbody>
							<?php
								$i = 1;
								foreach ($synopses as $synopsis) {
							?>
								<tr>
									<td>
										<a href="/synopsis/project/<?php echo $project_id ?>/<?php echo $synopsis[0]->session ?>"><?php echo date("F j, Y", $synopsis[0]->session) ?></a>
									</td>
									<td>
										<?php echo $synopsis[0]->objective ?>
									</td>
									<td>
										<?php echo $synopsis['start']?> to <?php echo $synopsis['end'] ?>
									</td>
									<td>
										<?php echo $synopsis['tasks']?>
									</td>
									<td>
										<?php echo elapsed_time($synopsis['seconds']); ?>
									</td>
									<td>
										<a class="confirm" href="/synopses/delete/<?php echo $synopsis[0]->session . '/' . $project_id?>">delete</a>
									</td>
								</tr>
							<?php } ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		<!-- // Content END -->
		</div>
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->

		<?php $this->load->view('/components/footer') ?>
		<!-- // Footer END -->

	</div>
	<!-- // Main Container Fluid END -->

	<?php $this->load->view('/components/themer') ?>
	<?php $this->load->view('/components/js_includes') ?>

</body>
</html>