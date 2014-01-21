<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title><?php echo APP_NAME; ?> - Admin &amp; App UI Template (<?php echo APP_VERSION; ?>)</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	
	<!-- Bootstrap -->
	<link href="<?php echo getURL(); ?>bootstrap/css/bootstrap.css" rel="stylesheet" />
	<link href="<?php echo getURL(); ?>bootstrap/css/responsive.css" rel="stylesheet" />
	
	<!-- Glyphicons Font Icons -->
	<link href="<?php echo getURL(); ?>theme/css/glyphicons.css" rel="stylesheet" />
	
	<!-- Uniform Pretty Checkboxes -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />
	
<?php if ($page == 'gallery' || $page == 'finances' || $page == 'index' || $page == 'charts'): ?>
	<!--[if IE]><!--><script src="<?php echo getURL(); ?>theme/scripts/plugins/other/excanvas/excanvas.js"></script><!--<![endif]-->
	<!--[if lt IE 8]><script src="<?php echo getURL(); ?>theme/scripts/plugins/other/json2.js"></script><![endif]-->
	
<?php endif; ?>
<?php if ($page != 'blank' && $page != 'error' && $page != 'login' && $page != 'signup' && $page != 'choose'): ?>
	<!-- Bootstrap Extended -->
	<link href="<?php echo getURL(); ?>bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo getURL(); ?>bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo getURL(); ?>bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	<link href="<?php echo getURL(); ?>bootstrap/extend/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
	<link href="<?php echo getURL(); ?>bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" />
	
	<!-- Select2 Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/forms/select2/select2.css" rel="stylesheet" />
	
	<!-- DateTimePicker Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />
	
	<!-- JQueryUI -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />
	
	<!-- MiniColors ColorPicker Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.css" rel="stylesheet" />
	
	<!-- Notyfy Notifications Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css" rel="stylesheet" />
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/notifications/notyfy/themes/default.css" rel="stylesheet" />
	
	<!-- Gritter Notifications Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css" rel="stylesheet" />
	
	<!-- Easy-pie Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.css" rel="stylesheet" />

	<!-- Google Code Prettify Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/other/google-code-prettify/prettify.css" rel="stylesheet" />

<?php endif; ?>
<?php if ((GUIDED_TOUR && $page != 'login' && $page != 'signup' && $page != 'documentation' && $page != 'blank' && $page != 'error' && $page != 'choose') || $page == 'tour'): ?>
	<!-- Pageguide Guided Tour Plugin -->
	<!--[if gt IE 8]><!--><link media="screen" href="<?php echo getURL(); ?>theme/scripts/plugins/other/pageguide/css/pageguide.css" rel="stylesheet" /><!--<![endif]-->

<?php endif; ?>
<?php if ($page == 'maps_vector'): ?>
	<!-- jVectorMaps Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/maps/jvectormap/css/elements.css" rel="stylesheet" />

<?php endif; ?>
<?php if ($page == 'tables'): ?>
	<!-- DataTables Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/tables/DataTables/media/css/DT_bootstrap.css" rel="stylesheet" />

<?php endif; ?>
<?php if ($page == 'sliders'): ?>
	<!-- JQRangeSlider Sliders Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/sliders/jQRangeSlider/css/iThing.css" rel="stylesheet" />

<?php endif; ?>
<?php if ($page == 'index' || $page == 'gallery_1' || $page == 'gallery_2' || $page == 'shop_client_product'): ?>
	<!-- Bootstrap Image Gallery -->
	<link href="<?php echo getURL(); ?>bootstrap/extend/bootstrap-image-gallery/css/bootstrap-image-gallery.min.css" rel="stylesheet" />
	
<?php endif; ?>
<?php if ($page == 'form_elements'): ?>
	<!-- Farbtastic ColorPicker Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/color/farbtastic/farbtastic.css" rel="stylesheet" />

<?php endif; ?>
<?php if ($page == 'calendar'): ?>
	<!-- Calendar Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/calendars/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />

<?php endif; ?>
<?php if ($page == 'file_managers'): ?>
	<!-- Plupload File Manager Plugin -->
	<style type="text/css">@import url(<?php echo getURL(); ?>theme/scripts/plugins/forms/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css);</style>
	
	<!-- Dropzone Plugin -->
	<link href="<?php echo getURL(); ?>theme/scripts/plugins/forms/dropzone/css/dropzone.css" rel="stylesheet" />
	
<?php endif; ?>
<?php if (DEV): ?>
	<!-- Main Theme Stylesheet :: LESS -->
	<link href="<?php echo getURL(); ?>theme/less/<?php echo STYLE; ?>.less?<?php echo time(0); ?>" rel="stylesheet/less" />
	
<?php if (SKIN): ?>	
	<!-- Skin Stylesheet :: LESS -->
	<link href="<?php echo getURL(); ?>theme/skins/less/<?php echo SKIN; ?>.less?<?php echo time(0); ?>" rel="stylesheet/less" />
	
<?php endif; ?>
<?php else: ?>
	<!-- Main Theme Stylesheet :: CSS -->
	<link href="<?php echo getURL(); ?>theme/css/<?php echo STYLE; ?>.css?<?php echo time(0); ?>" rel="stylesheet" />
	
<?php if (SKIN): ?>	
	<!-- Skin Stylesheet :: CSS -->
	<link href="<?php echo getURL(); ?>theme/skins/css/<?php echo SKIN; ?>.css?<?php echo time(0); ?>" rel="stylesheet" />
	
<?php endif; ?>	
<?php endif; ?>
<?php if (DEV && $page != 'blank'): ?>
	<!-- FireBug Lite -->
	<!-- <script src="https://getfirebug.com/firebug-lite-debug.js"></script> -->
	
<?php endif; ?>
<?php if (GA && $page != 'blank'): ?>
	<!-- Google Analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36057737-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
<?php endif; ?>
	<!-- LESS.js Library -->
	<script src="<?php echo getURL(); ?>theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="<?php if ($page == 'login' || $page == 'signup' || $page == 'error' || $page == 'choose'): ?>login<?php endif; ?>">
	
	<?php if ($page != 'login' && $page != 'signup' && $page != 'error' && $page != 'choose'): ?>
	<!-- Main Container Fluid -->
	<div class="container-fluid <?php echo LAYOUT_TYPE; ?><?php if (MENU_POSITION): echo " " . MENU_POSITION; endif; ?><?php if ($page == 'login'): ?> login<?php endif; ?><?php if ($page == 'documentation' || $page == 'landing_page_1' || $page == 'landing_page_2'): ?> documentation<?php endif; ?>">
		
		<!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
		<div class="navbar main hidden-print">
		
			<!-- Wrapper -->
			<div class="wrapper">
			
				<?php if ($page == 'landing_page_1' || $page == 'landing_page_2'): ?>
				<div class="container-960">
				
				<!-- Top Menu Right -->
				<ul class="topnav pull-left">
					<li class="dropdown dd-1 dd-2">
						<a href="" data-toggle="dropdown">Landing pages <span class="count">2</span></a>
						<ul class="dropdown-menu pull-left">
							<li><a href="<?php echo getURL(array('landing_page_1')); ?>" class="glyphicons notes"><i></i> Landing #1</a></li>
                            <li><a href="<?php echo getURL(array('landing_page_2')); ?>" class="glyphicons notes"><i></i> Landing #2</a></li>
						</ul>
					</li>
					<li><a href="<?php echo getURL(array('index')); ?>">Dashboard</a></li>
				</ul>
				
				<?php if (SKIN_JS || STYLE_TOGGLE): ?>
				<ul class="topnav pull-right margin-none">
					<?php if (SKIN_JS): ?>
					<!-- Themer -->
					<li><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>
					<!-- // Themer END -->
					<?php endif; ?>
					
					<?php if (STYLE_TOGGLE): ?>
					<li class="hidden-phone">
						<?php if (STYLE == 'style-light'): ?>
						<a class="glyphicons sun" href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('style' => 'style-dark')))); ?>"><i></i>Go Dark</a>
						<?php endif; ?>
						
						<?php if (STYLE == 'style-dark'): ?>
						<a class="glyphicons brightness_increase" href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('style' => 'style-light')))); ?>"><i></i>Go Light</a>
						<?php endif; ?>
					</li>
					<?php endif; ?>
				</ul>
				<?php endif; ?>
				
				</div>
				<?php else: ?>
			
				<?php if ($page != 'documentation'): ?>
				<!-- Menu Toggle Button -->
				<button type="button" class="btn btn-navbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<!-- // Menu Toggle Button END -->
				<?php endif; ?>
				
				<?php if ($page != 'documentation' && $page != 'blank'): ?>
				<!-- Top Menu -->
				<ul class="topnav pull-left tn1 hidden-phone">
				
					<?php if (SKIN_JS): ?>
					<!-- Themer -->
					<li><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>
					<!-- // Themer END -->
					<?php endif; ?>
					
					<?php if (STYLE_TOGGLE): ?>
					<li class="hidden-phone">
						<?php if (STYLE == 'style-light'): ?>
						<a class="glyphicons sun" href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('style' => 'style-dark')))); ?>"><i></i>Go Dark</a>
						<?php endif; ?>
						
						<?php if (STYLE == 'style-dark'): ?>
						<a class="glyphicons brightness_increase" href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('style' => 'style-light')))); ?>"><i></i>Go Light</a>
						<?php endif; ?>
					</li>
					<?php endif; ?>
					
					<li class="dropdown dd-1 dd-2">
						<a href="" data-toggle="dropdown">Notifications <span class="count">3</span></a>
						<ul class="dropdown-menu pull-left">
							<li><a href="#" class="glyphicons envelope"><i></i> New Email</a></li>
                            <li><a href="#" class="glyphicons chat"><i></i> 5 Messages</a></li>
                            <li><a href="#" class="glyphicons conversation"><i></i> 1 New Reply</a></li>
						</ul>
					</li>
					
				</ul>
				<!-- // Top Menu END -->
				<?php endif; ?>
				
				<!-- Top Menu Right -->
				<ul class="topnav pull-right">
				
					<!-- Language menu -->
					<li class="hidden-phone dropdown dd-1 dd-flags" id="lang_nav">
						<a href="#" data-toggle="dropdown"><img src="<?php echo getURL(); ?>theme/images/lang/<?php echo $locale; ?>.png" alt="<?php echo $locale; ?>" /></a>
				    	<ul class="dropdown-menu pull-left">
				      		<li<?php if ($locale == 'en'): ?> class="active"<?php endif; ?>><a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('lang' => 'en')))); ?>" title="<?php echo $translate->_('english'); ?>"><img src="<?php echo getURL(); ?>theme/images/lang/en.png" alt="<?php echo $translate->_('english'); ?>"> <?php echo $translate->_('english'); ?></a></li>
				      		<li<?php if ($locale == 'ro'): ?> class="active"<?php endif; ?>><a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('lang' => 'ro')))); ?>" title="<?php echo $translate->_('romanian'); ?>"><img src="<?php echo getURL(); ?>theme/images/lang/ro.png" alt="<?php echo $translate->_('romanian'); ?>"> <?php echo $translate->_('romanian'); ?></a></li>
				      		<li<?php if ($locale == 'it'): ?> class="active"<?php endif; ?>><a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('lang' => 'it')))); ?>" title="<?php echo $translate->_('italian'); ?>"><img src="<?php echo getURL(); ?>theme/images/lang/it.png" alt="<?php echo $translate->_('italian'); ?>"> <?php echo $translate->_('italian'); ?></a></li>
				      		<li<?php if ($locale == 'fr'): ?> class="active"<?php endif; ?>><a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('lang' => 'fr')))); ?>" title="<?php echo $translate->_('french'); ?>"><img src="<?php echo getURL(); ?>theme/images/lang/fr.png" alt="<?php echo $translate->_('french'); ?>"> <?php echo $translate->_('french'); ?></a></li>
				      		<li<?php if ($locale == 'pl'): ?> class="active"<?php endif; ?>><a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('lang' => 'pl')))); ?>" title="<?php echo $translate->_('polish'); ?>"><img src="<?php echo getURL(); ?>theme/images/lang/pl.png" alt="<?php echo $translate->_('polish'); ?>"> <?php echo $translate->_('polish'); ?></a></li>
				    	</ul>
					</li>
					<!-- // Language menu END -->
				
					<!-- Dropdown -->
					<li class="dropdown dd-1 visible-desktop">
						<a href="" data-toggle="dropdown" class="glyphicons shield"><i></i>Get Help <span class="caret"></span></a>
						<ul class="dropdown-menu pull-right">
							
							<li class="dropdown submenu">
	                    		<a href="#" class="dropdown-toggle glyphicons bell" data-toggle="dropdown"><i></i>Level 2</a>
								<ul class="dropdown-menu submenu-show submenu-hide pull-left">
			                        <li class="dropdown submenu">
			                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Level 2.1</a>
										<ul class="dropdown-menu submenu-show submenu-hide pull-left">
											<li><a href="#">Level 2.1.1</a></li>
	                                    	<li><a href="#">Level 2.1.2</a></li>
	                                    	<li><a href="#">Level 2.1.3</a></li>
	                                    	<li><a href="#">Level 2.1.4</a></li>
			                            </ul>
			                        </li>
			                        <li class="dropdown submenu">
			                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Level 2.2</a>
			                            <ul class="dropdown-menu submenu-show submenu-hide pull-left">
											<li><a href="#">Level 2.2.1</a></li>
			                                <li><a href="#">Level 2.2.2</a></li>
			                            </ul>
			                        </li>
			                    </ul>
			                </li>
			                
			                <li><a href="" class="glyphicons settings"><i></i>Some option</a></li>
							<li><a href="" class="glyphicons bell"><i></i>Some other option</a></li>
							<li><a href="" class="glyphicons bell"><i></i>Other option</a></li>
			                
						</ul>
					</li>
					<!-- // Dropdown END -->
					
					<!-- Profile / Logout menu -->
					<li class="account dropdown dd-1">
						<?php if ($page == 'login'): ?>
						<a href="<?php echo getURL(array('login')); ?>" class="glyphicons logout lock"><span class="hidden-phone">Welcome <strong>guest</strong></span><i></i></a>
						<?php else: ?>
						<a data-toggle="dropdown" href="<?php echo getURL(array('my_account')); ?>" class="glyphicons logout lock"><span class="hidden-phone">mosaicpro</span><i></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="<?php echo getURL(array('my_account')); ?>" class="glyphicons cogwheel">Settings<i></i></a></li>
							<li><a href="<?php echo getURL(array('my_account')); ?>" class="glyphicons camera">My Photos<i></i></a></li>
							<li class="profile">
								<span>
									<span class="heading">Profile <a href="<?php echo getURL(array('my_account')); ?>" class="pull-right">edit</a></span>
									<span class="img"></span>
									<span class="details">
										<a href="<?php echo getURL(array('my_account')); ?>">Mosaic Pro</a>
										contact@mosaicpro.biz
									</span>
									<span class="clearfix"></span>
								</span>
							</li>
							<li>
								<span>
									<a class="btn btn-default btn-mini pull-right" href="<?php echo getURL(array('login')); ?>">Sign Out</a>
								</span>
							</li>
						</ul>
						<?php endif; ?>
					</li>
					<!-- // Profile / Logout menu END -->
					
				</ul>
				<!-- // Top Menu Right END -->
				
				<?php endif; ?>
				
				<div class="clearfix"></div>
			</div>
			<!-- // Wrapper END -->
			
			<span class="toggle-navbar"></span>
		</div>
		<!-- Top navbar END -->
		
		<?php if ($page != 'documentation' && $page != 'landing_page_1' && $page != 'landing_page_2'): ?>
		<!-- Sidebar menu & content wrapper -->
		<div id="wrapper">
		
		<!-- Sidebar Menu -->
		<div id="menu" class="hidden-phone hidden-print">
		
			<!-- Brand -->
			<a href="<?php echo $page == 'login' ? getURL(array('login')) : getURL(array('index')); ?>" class="appbrand"><?php echo APP_NAME; ?> <span>Admin UI Template (<?php echo APP_VERSION; ?>)</span></a>
		
			<!-- Scrollable menu wrapper with Maximum height -->
			<div class="slim-scroll" data-scroll-height="800px">
			
			<!-- Sidebar Profile -->
			<span class="profile">
				<p>Welcome <a href="<?php echo getURL(array('my_account')); ?>">mosaicpro</a></p>
				<a class="img" href="<?php echo getURL(array('my_account')); ?>"><img src="<?php echo getURL(); ?>theme/images/avatar-<?php echo STYLE; ?>.jpg" alt="Avatar" /></a>
				<span>
					<ul>
						<li><a href="" class="glyphicons lock"><i></i>Account</a></li>
						<li><a href="" class="glyphicons keys"><i></i>Password</a></li>
						<li><a href="" class="glyphicons eject"><i></i>Logout</a></li>
					</ul>
				</span>
			</span>
			<!-- // Sidebar Profile END -->
			
			<!-- Regular Size Menu -->
			<ul class="menu-0">
			
				<?php if ($page == 'blank'): ?>
				<!-- Blank page template menu example -->
				<!-- Menu Regular Item (add class active to LI for an active menu item) -->
				<li class="glyphicons right_arrow"><a href="#"><i></i><span>Menu item</span></a></li>
				
				<!-- Submenu Level 1 (closed) -->
				<li class="hasSubmenu glyphicons right_arrow">
					<a data-toggle="collapse" href="#submenu-1"><i></i><span>Menu item</span></a>
					<ul class="collapse" id="submenu-1">
						
						<!-- Submenu Level 2 (closed) -->
						<li class="hasSubmenu">
							<a data-toggle="collapse" href="#submenu-1-2"><span>Menu item</span></a>
							<ul class="collapse" id="submenu-1-2">
								<li><a href="#"><span>Menu item</span></a></li>
								<li><a href="#"><span>Menu item</span></a></li>
								<li><a href="#"><span>Menu item</span></a></li>
							</ul>
							<span class="count">3</span>
						</li>
						<!-- // Submenu Level 2 (closed) END -->
						
						<!-- Submenu Level 1 Regular Items -->
						<li><a href="#"><span>Menu item</span></a></li>
						<li><a href="#"><span>Menu item</span></a></li>
						<!-- // Submenu Level 1 Regular Items END -->
						
					</ul>
					<span class="count">5</span>
				</li>
				<!-- // Submenu Level 1 END -->
				
				<!-- Submenu Level 1 (active) -->
				<li class="hasSubmenu glyphicons right_arrow active">
					<a data-toggle="collapse" href="#submenu-11"><i></i><span>Menu item</span></a>
					<ul class="collapse in" id="submenu-11">
						
						<!-- Submenu Level 2 (active) -->
						<li class="hasSubmenu active">
							<a data-toggle="collapse" href="#submenu-11-2"><span>Menu item</span></a>
							<ul class="collapse in" id="submenu-11-2">
								<li class="active"><a href="#"><span>Menu item</span></a></li>
								<li><a href="#"><span>Menu item</span></a></li>
							</ul>
							<span class="count">2</span>
						</li>
						<!-- // Submenu Level 2 (active) END -->
						
						<!-- Submenu Level 1 Regular Items -->
						<li><a href="#"><span>Menu item</span></a></li>
						<li><a href="#"><span>Menu item</span></a></li>
						<!-- // Submenu Level 1 Regular Items END -->
						
					</ul>
					<span class="count">4</span>
				</li>
				<!-- // Submenu Level 1 (active) END -->
				<!-- // Blank page template menu example END -->
				<?php endif; ?>
				
				<?php if ($page != 'blank'): ?>
				<!-- Menu Regular Item -->
				<li class="glyphicons display<?php if ($page == 'index'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('index')); ?>"><i></i><span><?php echo $translate->_('dashboard'); ?></span></a></li>
				
				<!-- Components Submenu Level 1 -->
				<li class="hasSubmenu glyphicons cogwheels<?php if ($page == 'ui' || $page == 'sliders' || $page == 'widgets' || $page == 'tabs' || $page == 'charts' || $page == 'tables' || $page == 'pricing_tables' || $page == 'grid' || $page == 'form_elements' || $page == 'form_validator' || $page == 'form_wizards' || $page == 'file_managers' || $page == 'icons' || $page == 'notifications' || $page == 'modals' || $page == 'tour' || $page == 'thumbnails' || $page == 'carousels'): ?> active<?php endif; ?>">
					<a data-toggle="collapse" href="#menu_components"><i></i><span><?php echo $translate->_('Components'); ?></span></a>
					<ul class="collapse<?php if ($page == 'ui' || $page == 'sliders' || $page == 'widgets' || $page == 'tabs' || $page == 'charts' || $page == 'tables' || $page == 'pricing_tables' || $page == 'grid' || $page == 'form_elements' || $page == 'form_validator' || $page == 'form_wizards' || $page == 'file_managers' || $page == 'icons' || $page == 'notifications' || $page == 'modals' || $page == 'tour' || $page == 'thumbnails' || $page == 'carousels'): ?> in<?php endif; ?>" id="menu_components">
						
						<!-- Components Submenu Level 2 -->
						<li class="hasSubmenu<?php if ($page == 'form_elements' || $page == 'form_validator' || $page == 'form_wizards' || $page == 'file_managers'): ?> active<?php endif; ?>">
							<a data-toggle="collapse" href="#menu_forms"><span><?php echo $translate->_('forms'); ?></span></a>
							<ul class="collapse<?php if ($page == 'form_elements' || $page == 'form_wizards' || $page == 'form_validator' || $page == 'file_managers'): ?> in<?php endif; ?>" id="menu_forms">
								<li class="<?php if ($page == 'form_wizards'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('form_wizards')); ?>"><span><?php echo $translate->_('Form Wizards'); ?></span></a></li>
								<li class="<?php if ($page == 'form_elements'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('form_elements')); ?>"><span><?php echo $translate->_('form_elements'); ?></span></a></li>
								<li class="<?php if ($page == 'form_validator'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('form_validator')); ?>"><span><?php echo $translate->_('form_validator'); ?></span></a></li>
								<li class="<?php if ($page == 'file_managers'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('file_managers')); ?>"><span><?php echo $translate->_('file_managers'); ?></span></a></li>
							</ul>
							<span class="count">4</span>
						</li>
						<!-- // Components Submenu Level 2 END -->
						
						<!-- Components Submenu Regular Items -->
						<li class="<?php if ($page == 'ui'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('ui')); ?>"><span><?php echo $translate->_('ui_elements'); ?></span></a></li>
						<li class="<?php if ($page == 'icons'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('icons')); ?>"><span><?php echo $translate->_('Icons'); ?></span></a></li>
						<li class="<?php if ($page == 'widgets'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('widgets')); ?>"><span><?php echo $translate->_('Widgets'); ?></span></a></li>
						<li class="<?php if ($page == 'tabs'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('tabs')); ?>"><span><?php echo $translate->_('Tabs'); ?></span></a></li>
						<li class="<?php if ($page == 'sliders'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('sliders')); ?>"><span><?php echo $translate->_('Sliders'); ?></span></a></li>
						<li class="<?php if ($page == 'charts'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('charts')); ?>"><span><?php echo $translate->_('charts'); ?></span></a></li>
						<!-- // Components Submenu Regular Items END -->
						
						<!-- Components Submenu Level 2 -->
						<li class="hasSubmenu<?php if ($page == 'tables' || $page == 'pricing_tables'): ?> active<?php endif; ?>">
							<a data-toggle="collapse" href="#menu_tables"><span><?php echo $translate->_('tables'); ?></span></a>
							<ul class="collapse<?php if ($page == 'tables' || $page == 'pricing_tables'): ?> in<?php endif; ?>" id="menu_tables">
								<li class="<?php if ($page == 'tables'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('tables')); ?>"><span><?php echo $translate->_('tables'); ?></span></a></li>
								<li class="<?php if ($page == 'pricing_tables'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('pricing_tables')); ?>"><span><?php echo $translate->_('Pricing tables'); ?></span></a></li>
							</ul>
							<span class="count">2</span>
						</li>
						<!-- // Components Submenu Level 2 -->
						
						<!-- Components Submenu Regular Items -->
						<li class="<?php if ($page == 'grid'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('grid')); ?>"><span><?php echo $translate->_('Grid system'); ?></span></a></li>
						<li class="<?php if ($page == 'notifications'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('notifications')); ?>"><span><?php echo $translate->_('Notifications'); ?></span></a></li>
						<li class="<?php if ($page == 'modals'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('modals')); ?>"><span><?php echo $translate->_('Modals'); ?></span></a></li>
						<li class="<?php if ($page == 'thumbnails'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('thumbnails')); ?>"><span><?php echo $translate->_('Thumbnails'); ?></span></a></li>
						<li class="<?php if ($page == 'carousels'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('carousels')); ?>"><span><?php echo $translate->_('Carousels'); ?></span></a></li>
						<li class="<?php if ($page == 'tour'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('tour')); ?>"><span><?php echo $translate->_('Page Tour'); ?></span></a></li>
						<!-- // Components Submenu Regular Items END -->
						
					</ul>
					<span class="count">18</span>
				</li>
				<!-- Components Submenu Level 1 END -->
				
				<!-- Exmaples Submenu Level 1 -->
				<li class="hasSubmenu<?php if ($page == 'pages' || $page == 'finances' || $page == 'my_account' || $page == 'my_account_advanced' || $page == 'bookings' || $page == 'shop_admin_products' || $page == 'shop_admin_product' || $page == 'shop_client_products' || $page == 'shop_client_product' || $page == 'shop_client_cart' || $page == 'gallery_1' || $page == 'gallery_2' || $page == 'maps_vector' || $page == 'maps_google' || $page == 'invoice' || $page == 'faq' || $page == 'calendar'): ?> active<?php endif; ?>">
				
					<a data-toggle="collapse" class="glyphicons luggage" href="#menu_examples"><i></i><span><?php echo $translate->_('Examples'); ?></span></a>
					<ul class="collapse<?php if ($page == 'pages' || $page == 'finances' || $page == 'my_account' || $page == 'my_account_advanced' || $page == 'bookings' || $page == 'shop_admin_products' || $page == 'shop_admin_product' || $page == 'shop_client_products' || $page == 'shop_client_product' || $page == 'shop_client_cart' || $page == 'gallery_1' || $page == 'gallery_2' || $page == 'maps_vector' || $page == 'maps_google' || $page == 'invoice' || $page == 'faq' || $page == 'calendar'): ?> in<?php endif; ?>" id="menu_examples">
					
						<!-- Account Submenu Level 2 -->
						<li class="hasSubmenu<?php if ($page == 'my_account' || $page == 'my_account_advanced'): ?> active<?php endif; ?>">
							<a data-toggle="collapse" href="#menu_account"><i></i><span>Account</span></a>
							<ul class="collapse<?php if ($page == 'my_account' || $page == 'my_account_advanced'): ?> in<?php endif; ?>" id="menu_account">
								<li class="<?php if ($page == 'my_account_advanced'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('my_account_advanced')); ?>"><span><?php echo $translate->_('Advanced profile'); ?></span></a></li>
								<li class="<?php if ($page == 'my_account'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('my_account')); ?>"><span><?php echo $translate->_('my_account'); ?></span></a></li>
								<li><a href="<?php echo getURL(array('login')); ?>"><i></i><span><?php echo $translate->_('login'); ?></span></a></li>
								<li><a href="<?php echo getURL(array('signup')); ?>"><i></i><span><?php echo $translate->_('register'); ?></span></a></li>
							</ul>
							<span class="count">4</span>
						</li>
						<!-- // Account Submenu Level 2 END -->
						
						<!-- Landings Submenu Level 2 -->
						<li class="hasSubmenu<?php if ($page == 'landing_page_1' || $page == 'landing_page_2'): ?> active<?php endif; ?>">
							<a data-toggle="collapse" href="#menu_landings"><i></i><span>Landing pages</span></a>
							<ul class="collapse<?php if ($page == 'landing_page_1' || $page == 'landing_page_2'): ?> in<?php endif; ?>" id="menu_landings">
								<li><a href="<?php echo getURL(array('landing_page_1')); ?>"><i></i><span><?php echo $translate->_('Landing #1'); ?></span></a></li>
								<li><a href="<?php echo getURL(array('landing_page_2')); ?>"><i></i><span><?php echo $translate->_('Landing #2'); ?></span></a></li>
							</ul>
							<span class="count">2</span>
						</li>
						<!-- // Landings Submenu Level 2 END -->
					
						<!-- Examples Submenu Level 2 -->
						<li class="hasSubmenu<?php if ($page == 'gallery_1' || $page == 'gallery_2'): ?> active<?php endif; ?>">
							<a data-toggle="collapse" href="#menu_gallery"><i></i><span><?php echo $translate->_('photo_gallery'); ?></span></a>
							<ul class="collapse<?php if ($page == 'gallery_1' || $page == 'gallery_2'): ?> in<?php endif; ?>" id="menu_gallery">
								<li class="<?php if ($page == 'gallery_1'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('gallery_1')); ?>"><span><?php echo $translate->_('Regular'); ?></span></a></li>
								<li class="<?php if ($page == 'gallery_2'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('gallery_2')); ?>"><span><?php echo $translate->_('Masonry'); ?></span></a></li>
							</ul>
							<span class="count">2</span>
						</li>
						<!-- // Examples Submenu Level 2 END -->
						
						<!-- Examples Submenu Level 2 -->
						<li class="hasSubmenu<?php if ($page == 'maps_vector' || $page == 'maps_google'): ?> active<?php endif; ?>">
							<a data-toggle="collapse" href="#menu_maps"><i></i><span><?php echo $translate->_('Maps'); ?></span></a>
							<ul class="collapse<?php if ($page == 'maps_vector' || $page == 'maps_google'): ?> in<?php endif; ?>" id="menu_maps">
								<li class="<?php if ($page == 'maps_vector'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('maps_vector')); ?>"><span><?php echo $translate->_('Vector maps'); ?></span></a></li>
								<li class="<?php if ($page == 'maps_google'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('maps_google')); ?>"><span><?php echo $translate->_('Google maps'); ?></span></a></li>
							</ul>
							<span class="count">2</span>
						</li>
						<!-- // Examples Submenu Level 2 END -->
						
						<!-- Examples Submenu Regular Items -->
						<li class="<?php if ($page == 'invoice'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('invoice')); ?>"><i></i><span><?php echo $translate->_('Invoice'); ?></span></a></li>
						<li class="<?php if ($page == 'faq'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('faq')); ?>"><i></i><span><?php echo $translate->_('FAQ'); ?></span></a></li>
						<li class="<?php if ($page == 'calendar'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('calendar')); ?>"><i></i><span><?php echo $translate->_('calendar'); ?></span></a></li>
						<!-- // Examples Submenu Regular Items END -->
						
						<li class="hasSubmenu<?php if ($page == 'shop_admin_products' || $page == 'shop_admin_product' || $page == 'shop_client_products' || $page == 'shop_client_product' || $page == 'shop_client_cart'): ?> active<?php endif; ?>">
							<a data-toggle="collapse" href="#menu_ecommerce"><i></i><span><?php echo $translate->_('online_shop'); ?></span></a>
							
							<!-- Closed by default -->
							<ul class="collapse<?php if ($page == 'shop_admin_products' || $page == 'shop_admin_product' || $page == 'shop_client_products' || $page == 'shop_client_product' || $page == 'shop_client_cart'): ?> in<?php endif; ?>" id="menu_ecommerce">
								<li class="hasSubmenu<?php if ($page == 'shop_client_products' || $page == 'shop_client_product' || $page == 'shop_client_cart'): ?> active<?php endif; ?>">
									<a data-toggle="collapse" href="#menu_ecommerce_client"><i></i><span><?php echo $translate->_('Client interface'); ?></span></a>
									<ul class="collapse<?php if ($page == 'shop_client_products' || $page == 'shop_client_product' || $page == 'shop_client_cart'): ?> in<?php endif; ?>" id="menu_ecommerce_client">
										<li class="<?php if ($page == 'shop_client_products'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('shop_client_products')); ?>"><span><?php echo $translate->_('products'); ?></span></a></li>
										<li class="<?php if ($page == 'shop_client_product'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('shop_client_product')); ?>"><span><?php echo $translate->_('Product details'); ?></span></a></li>
										<li class="<?php if ($page == 'shop_client_cart'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('shop_client_cart')); ?>"><span><?php echo $translate->_('Shopping cart'); ?></span></a></li>
									</ul>
									<span class="count">3</span>
								</li>
								<li class="hasSubmenu<?php if ($page == 'shop_admin_products' || $page == 'shop_admin_product'): ?> active<?php endif; ?>">
									<a data-toggle="collapse" href="#menu_ecommerce_admin"><i></i><span><?php echo $translate->_('Management'); ?></span></a>
									<ul class="collapse<?php if ($page == 'shop_admin_products' || $page == 'shop_admin_product'): ?> in<?php endif; ?>" id="menu_ecommerce_admin">
										<li class="<?php if ($page == 'shop_admin_products'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('shop_admin_products')); ?>"><span><?php echo $translate->_('products'); ?></span></a></li>
										<li class="<?php if ($page == 'shop_admin_product'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('shop_admin_product')); ?>"><span><?php echo $translate->_('add_product'); ?></span></a></li>
									</ul>
									<span class="count">2</span>
								</li>
							</ul>
							<span class="count">5</span>
						</li>
						
						<li class="<?php if ($page == 'bookings'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('bookings')); ?>"><span><?php echo $translate->_('bookings'); ?></span></a></li>
						<li class="<?php if ($page == 'finances'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('finances')); ?>"><span><?php echo $translate->_('finances'); ?></span></a></li>
						<li class="<?php if ($page == 'pages'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('pages')); ?>"><span><?php echo $translate->_('site_pages'); ?></span></a></li>
						<li><a href="<?php echo getURL(array('error')); ?>"><span><?php echo $translate->_('Error page'); ?></span></a></li>
						<li><a href="<?php echo getURL(array('blank')); ?>"><span><?php echo $translate->_('Blank page'); ?></span></a></li>
						
					</ul>
					<span class="count">21</span>
				</li>
				<!-- // Examples Submenu Level 1 END -->
				<?php endif; ?>
				
			</ul>
			<div class="clearfix"></div>
			<!-- // Regular Size Menu END -->
			
			<ul class="menu-1">
				<li class="hasSubmenu active">
					<a class="glyphicons wifi_alt" href="#menu-recent-stats" data-toggle="collapse"><i></i><span>Recent stats</span></a>
					<ul class="collapse in" id="menu-recent-stats">
						<li><a class="glyphicons envelope" href="#"><i></i><span>5 New Emails</span></a></li>
						<li><a class="glyphicons chat" href="#"><i></i><span>New Message on 19 Jan</span></a></li>
						<li><a class="glyphicons user_add" href="#"><i></i><span>10 Users Subscribed</span></a></li>
						<li><a class="glyphicons cart_in" href="#"><i></i><span>2 Orders worth of &dollar;239</span></a></li>
						<li><a class="glyphicons single circle_plus" href="#"><i></i><span>View all</span></a></li>
					</ul>
				</li>
			</ul>
			<div class="clearfix"></div>
			<div class="separator bottom"></div>
			
			<?php if ($page != 'blank'): ?>
			<!-- Sidebar Stats Widgets -->
			<div class="widget-sidebar-stats">
				<strong>3,540</strong>
				<span>Messages</span>
				<span class="pull-right sparkline"></span>
				<div class="clearfix"></div>
			</div>
			<div class="widget-sidebar-stats">
				<strong>2,510,402</strong>
				<span>Photos</span>
				<span class="pull-right sparkline"></span>
				<div class="clearfix"></div>
			</div>
			<div class="separator bottom"></div>
			<!-- // Sidebar Stats Widgets END -->
			
			<!-- Stats Widget -->
			<a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie widget-sidebar-stats txt-single">
				<div data-percent="90" class="easy-pie primary"><span class="value">90</span>%</div>
				<span class="txt">Completed tasks</span>
				<div class="clearfix"></div>
			</a>
			<!-- // Stats Widget END -->
			
			<div class="widget-sidebar-stats">
				<h5>Generic widget</h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
			<?php endif; ?>
			
			<?php if ((MENU_JS || DEMO) && $page != 'blank'): ?>
			<!-- Menu Position Change -->
			<div class="separator top uniformjs menu_js hidden-phone">
				<div class="innerLR">
					<label for="toggle-menu-position" class="checkbox">
						<input type="checkbox" class="checkbox" id="toggle-menu-position"<?php if (MENU_POSITION == 'menu-right'): ?> checked="checked"<?php endif; ?> /> 
						right menu
					</label>
				</div>
			</div>
			<!-- // Menu Position Change END -->
			<?php endif; ?>
			
			<?php if ((LAYOUT_JS || DEMO) && $page != 'blank'): ?>
			<!-- Layout Type Change -->
			<div class="<?php if (!MENU_JS && !DEMO): ?>separator top <?php endif; ?>uniformjs layout_js hidden-phone">
				<div class="innerLR">
					<label for="toggle-layout" class="checkbox">
						<input type="checkbox" class="checkbox" id="toggle-layout"<?php if (LAYOUT_TYPE == 'fixed'): ?> checked="checked"<?php endif; ?> /> 
						fixed layout
					</label>
				</div>
			</div>
			<!-- // Layout Type Change END -->
			<?php endif; ?>
			
			</div>
			<!-- // Scrollable Menu wrapper with Maximum Height END -->
			
		</div>
		<!-- // Sidebar Menu END -->
		<?php endif; ?>
		
		<!-- Content -->
		<div id="content"<?php if ($page == 'landing_page_1' || $page == 'landing_page_2'): ?> class="padding-none<?php endif; ?>">
	<?php endif; ?>