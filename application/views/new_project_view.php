<?php timezoner(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>New Project</title>

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
						<h3 class="heading">New Project</h3>
					</div>
					<div class="widget-body">
						<div class="row-fluid">
							<form action="/project/new_project/" method="post">
								<label>Project Title</label>
								<input type="text" name="title" class="span12"><br />
								<label>Project Description</label>
								<textarea name="description" class="span12"></textarea><br />
								<input type="submit" value="Create" class="btn btn-icon btn-primary">
							</form>
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