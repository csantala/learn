<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Assignment</title>

	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="An online developer synopses tool for free.">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

	<!-- Bootstrap -->
	<link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
	<link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />

	<!-- Glyphicons Font Icons -->
	<link href="/common/theme/css/glyphicons.css" rel="stylesheet" />

	<!-- Uniform Pretty Checkboxes -->
	<link href="/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />

	<!-- Main Theme Stylesheet :: CSS -->
	<link href="/common/theme/css/style-light.css?1369753445" rel="stylesheet" />


	<!-- LESS.js Library -->
	<script src="/common/theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="login">

	<!-- Wrapper -->
<div id="login">

	<div class="container">

		<div class="wrapper">

			<!-- Box -->
			<div class="widget">

				<div class="widget-head">
					<h3 class="heading">Login area</h3>

				</div>
				<div class="widget-body">
					<!-- Form -->
					<form method="post" action="/account/login">
						<label>Username or Email</label>
						<input name="username" type="text" class="input-block-level" placeholder="Your Username or Email address"  tabindex="1" value="<?=$username?>" />
						<label>Password <a class="password" href="">forgot your password?</a></label>
						<input name="password" type="password" class="input-block-level margin-none" placeholder="Your Password"  tabindex="2" value="<?=$password?>" />
						<div class="separator bottom"></div>
						<div class="row-fluid">
							<div class="span8">
								<div class="uniformjs"><label class="checkbox"><input type="checkbox" name="remember-me">Remember me</label></div>
							</div>
							<div class="span4 center">
								<button class="btn btn-block btn-primary" type="submit">Sign in</button>
							</div>
						</div>
					</form>
					<!-- // Form END -->
				</div>
				<div class="widget-footer">
					<p class="whatis">
<?php
	if (isset($error)) { ?>
						not found
<?php
	} else { ?>
						<a href="">What is this?</a>
<?php } ?>
					</p>
					<!-- p class="glyphicons restart"><i></i>Please enter your username and password ...</p -->
				</div>
			</div>
			<!-- // Box END -->



		</div>

	</div>

</div>
<!-- // Wrapper END -->

<!-- Themer -->
<div id="themer" class="collapse">
	<div class="wrapper">
		<span class="close2">&times; close</span>
		<h4>Themer <span>color options</span></h4>
		<ul>
			<li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
			<li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
			<li>
				<span class="link" id="themer-custom-reset">reset theme</span>
				<span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
			</li>
		</ul>
		<div id="themer-getcode" class="hide">
			<hr class="separator" />
			<button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
			<button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- // Themer END -->

	<!-- JQuery -->
	<script src="/common/theme/scripts/plugins/system/jquery.min.js"></script>


	<!-- Modernizr -->
	<script src="/common/theme/scripts/plugins/system/modernizr.js"></script>

	<!-- Bootstrap -->
	<script src="/common/bootstrap/js/bootstrap.min.js"></script>

	<!-- SlimScroll Plugin -->
	<script src="/common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>

	<!-- Common Demo Script -->
	<script src="/common/theme/scripts/demo/common.js?1369753445"></script>

	<!-- Holder Plugin -->
	<script src="/common/theme/scripts/plugins/other/holder/holder.js"></script>

	<!-- Uniform Forms Plugin -->
	<script src="/common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>



</body>
</html>