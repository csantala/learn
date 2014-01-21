<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Snops.signup</title>

	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta description="Sign up for a free online developer synopses tool."
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
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

	<!-- Shared styles-->
	<link href="/css/style.css" rel="stylesheet" />

	<!-- LESS.js Library -->
	<script src="/common/theme/scripts/plugins/system/less.min.js"></script>

	<!-- Form validation -->
	<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.js"></script>
	<script type="text/javascript" src="/js/jquery.form.min.js"></script>
	<script type="text/javascript" src="/js/jquery-validate.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#submit').click(function() {
 			 $('#signup_form').submit();
		});
		$('#signup_form').validate({
		    rules: {
		        email: {
		            required: true,
		            email: true
		        },
		        email1: {
		            required: true,
		            email: true
		        },
		        username: {
		            required: true
		        },
		     	password: {
		     		required: true
		     	},
		     	password1: {
		     		required: true
		     	},
  				password1: {
    				equalTo: "#password"
    			},
				email1: {
    				equalTo: "#email"
    			},
		    },
		    submitHandler: function (form) {
				  form.submit()
		    }
		});
	});
	</script>
</head>
<body class="login">

	<!-- Wrapper -->
<div id="login">

	<div class="wrapper signup">

			<!-- Box -->
			<div class="widget">

				<div class="widget-head">
					<h3 class="heading">Create Account</h3>
					<div class="pull-right">
						Already a member?
						<a href="/account/login" class="btn btn-inverse btn-mini">Sign in</a>
					</div>
				</div>
				<div class="widget-body">

					<!-- Form -->
					<form id="signup_form" name="signup" method="post" action="/account/signup/">

					<!-- Row -->
					<div class="row-fluid row-merge">

						<!-- Column -->
						<div class="span6">
							<div class="innerR">
								<label class="strong">Username</label>
								<input type="text" class="input-block-level" placeholder="Your Username" name="username" tabindex="1" value="<?php echo $username?>" />
								<label class="strong">Password</label>
								<input type="password" class="input-block-level" placeholder="Your Password" name="password" id="password" tabindex="2" value="<?php echo $password?>"/>
								<label class="strong">Confirm Password</label>
								<input type="password" class="input-block-level" placeholder="Confirm Password" name="password1" id="password1" tabindex="3" value="<?php echo $password1?>"/>
					<p class="whatis">
<?php
	if (isset($error)) { ?>
						email address already in use.
<?php
	} else { ?>
						<a href="">What is Snopz?</a>
<?php } ?>
					</p>
							</div>
						</div>
						<!-- // Column END -->

						<!-- Column -->
						<div class="span6">
							<div class="innerL">
								<label class="strong">Email</label>
								<input type="text" class="input-block-level" placeholder="Your Email Address" name="email" id="email" tabindex="4" value="<?php echo $email?>"/>
								<label class="strong">Confirm Email</label>
								<input type="text" class="input-block-level" placeholder="Confirm Your Email Address" name="email1" tabindex="5" value="<?php echo $email1?>"/>
								<label class="strong">Timezone</label>
								<select class="timezone" name="timezone" tabindex="6">
<?php
	$options = timezones();
	foreach ($options as $value => $label) { ?>
								<option value="<?php echo $value?>"><?php echo $label ?></option>
<?php } ?>
?>
								</select>

								<a id="submit" role="button" wairole="button" class="btn btn-icon-stacked btn-block btn-success glyphicons user_add"><i></i><span>Create account</span></a>
							</div>
						</div>
						<!-- // Column END -->

					</div>
					<!-- // Row END -->

					</form>
					<!-- // Form END -->


				</div>
				<!-- // Box END -->

			</div>

	</div>

</div>
<!-- // Wrapper END -->

</body>
</html>