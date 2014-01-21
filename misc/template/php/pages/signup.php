<!-- Wrapper -->
<div id="login">

	<div class="wrapper signup">
		
			<h1 class="glyphicons lock">Ergo Admin <i></i></h1>
		
			<!-- Box -->
			<div class="widget">
				
				<div class="widget-head">
					<h3 class="heading">Create Account</h3>
					<div class="pull-right">
						Already a member?
						<a href="<?php echo getURL(array('login')); ?>" class="btn btn-inverse btn-mini">Sign in</a>
					</div>
				</div>
				<div class="widget-body">
		
					<!-- Form -->
					<form method="post" action="<?php echo getURL(array('index')); ?>">
					
					<!-- Row -->
					<div class="row-fluid row-merge">
					
						<!-- Column -->
						<div class="span6">
							<div class="innerR">
								<label class="strong">Username</label>
								<input type="text" class="input-block-level" placeholder="Your Username"/>
								<label class="strong">Password</label>
								<input type="password" class="input-block-level" placeholder="Your Password"/>
								<label class="strong">Confirm Password</label>
								<input type="password" class="input-block-level" placeholder="Confirm Password"/>
							</div>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span6">
							<div class="innerL">
								<label class="strong">Email</label>
								<input type="text" class="input-block-level" placeholder="Your Email Address"/>
								<label class="strong">Confirm Email</label>
								<input type="text" class="input-block-level" placeholder="Confirm Your Email Address"/>
								<a href="<?php echo getURL(array('index')); ?>" class="btn btn-icon-stacked btn-block btn-success glyphicons user_add"><i></i><span>Create account and</span><span class="strong">Join <?php echo APP_NAME; ?> now</span></a>
								<p>Having troubles? <a href="<?php echo getURL(array('faq')); ?>">Get Help</a></p>
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