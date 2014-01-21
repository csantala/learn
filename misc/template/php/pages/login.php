<!-- Wrapper -->
<div id="login">

	<div class="container">
	
		<div class="wrapper">
		
			<h1 class="glyphicons lock">Ergo Admin <i></i></h1>
		
			<!-- Box -->
			<div class="widget">
				
				<div class="widget-head">
					<h3 class="heading">Login area</h3>
					<div class="pull-right">
						Don't have an account? 
						<a href="<?php echo getURL(array('signup')); ?>" class="btn btn-inverse btn-mini">Sign up</a>
					</div>
				</div>
				<div class="widget-body">
				
					<!-- Form -->
					<form method="post" action="<?php echo getURL(array('index')); ?>">
						<label>Username or Email</label>
						<input type="text" class="input-block-level" placeholder="Your Username or Email address"/> 
						<label>Password <a class="password" href="">forgot your password?</a></label>
						<input type="password" class="input-block-level margin-none" placeholder="Your Password" />
						<div class="separator bottom"></div> 
						<div class="row-fluid">
							<div class="span8">
								<div class="uniformjs"><label class="checkbox"><input type="checkbox" value="remember-me">Remember me</label></div>
							</div>
							<div class="span4 center">
								<button class="btn btn-block btn-primary" type="submit">Sign in</button>
							</div>
						</div>
					</form>
					<!-- // Form END -->
							
				</div>
				<div class="widget-footer">
					<p class="glyphicons restart"><i></i>Please enter your username and password ...</p>
				</div>
			</div>
			<!-- // Box END -->
			
			<div class="innerAll center">
				<p>Alternatively</p>
				<a href="<?php echo getURL(array('index')); ?>" class="btn btn-icon-stacked btn-block btn-facebook glyphicons facebook"><i></i><span>Join using your</span><span class="strong">Facebook Account</span></a>
				<p>or</p>
				<a href="<?php echo getURL(array('index')); ?>" class="btn btn-icon-stacked btn-block btn-google glyphicons google_plus"><i></i><span>Join using your</span><span class="strong">Google Account</span></a>
				<p>Having troubles? <a href="<?php echo getURL(array('faq')); ?>">Get Help</a></p>
			</div>
			
		</div>
		
	</div>
	
</div>
<!-- // Wrapper END -->