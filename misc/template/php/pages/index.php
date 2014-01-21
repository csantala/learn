<h2>Dashboard <span>for your next cool web APP</span></h2>

<div class="innerLR">

	<!-- Website Traffic Chart -->
	<div class="widget" data-toggle="collapse-widget">
		<div class="widget-head">
			<h4 class="heading glyphicons cardio"><i></i><?php echo $translate->_('website_traffic'); ?></h4>
		</div>
		<div class="widget-body">
			<div id="chart_lines_fill_nopoints" style="height: 250px;"></div>
		</div>
	</div>
	<!-- // Website Traffic Chart END -->
	
	<!-- Stats Widgets -->
	<div class="row-fluid widget-stats-group">
	
		<div class="span1 center hidden-phone">
			<a class="btn disabled btn-small btn-default glyphicons standard chevron-left"><i></i></a>
		</div>
		
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats">
				<span class="glyphicons cart_in"><i></i></span>
				<span class="txt">Sales</span>
				<div class="clearfix"></div>
				<span class="count label label-important">20</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats">
				<span class="glyphicons shield"><i></i></span>
				<span class="txt">Alerts</span>
				<div class="clearfix"></div>
				<span class="count label">25</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats">
				<span class="glyphicons user_add"><i></i></span>
				<span class="txt">Clients</span>
				<div class="clearfix"></div>
				<span class="count label label-warning">33</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats">
				<span class="glyphicons envelope"><i></i></span>
				<span class="txt">Messages</span>
				<div class="clearfix"></div>
				<span class="count label label-primary">265</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
		<div class="span2">
		
			<!-- Stats Widget -->
			<a href="" class="widget-stats primary">
				<span class="glyphicons usd"><i></i></span>
				<span class="txt">Earnings</span>
				<div class="clearfix"></div>
				<span class="count label label-success">&dollar;2,920</span>
			</a>
			<!-- // Stats Widget END -->
			
		</div>
		
		<div class="span1 center hidden-phone">
			<a class="btn btn-small btn-default glyphicons standard chevron-right"><i></i></a>
		</div>
		
	</div>
	<div class="separator bottom"></div>
	<!-- // Stats Widgets END -->
	
	<div class="tickertape">
		<strong class="title">Important</strong>
		<span class="marquee">
			<span><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</span>
			<span>Lorem Ipsum has been the <strong>industry's standard</strong> dummy text ever since the 1500s.</span>
		</span>
	</div>
	
	<div class="row-fluid">
	<div class="span6">
	
		<div class="widget widget-activity margin-none" data-toggle="collapse-widget">
			<div class="widget-head">
				<h4 class="heading">Recent Activity</h4>
			</div>
			<div class="widget-body">
			
				<div class="innerB">
					<ul class="tabs">
						<li class="glyphicons user_add"><span data-toggle="tab" data-target="#filterUsersTab"><i></i></span></li>
						<li class="glyphicons shopping_cart"><span data-toggle="tab" data-target="#filterOrdersTab"><i></i></span></li>
						<li class="glyphicons envelope active"><span data-toggle="tab" data-target="#filterMessagesTab"><i></i></span></li>
						<li class="glyphicons link"><span data-toggle="tab" data-target="#filterLinksTab"><i></i></span></li>
						<li class="glyphicons camera"><span data-toggle="tab" data-target="#filterPhotosTab"><i></i></span></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				
				<div class="tab-content">
						
					<?php 
					$users = array(
						array( 'name' => 'John Doe', 'email' => 'john.doe@fake-email.net'),
						array( 'name' => 'Melisa Ragae', 'email' => 'melisa.ragae@grr-email.net'),
						array( 'name' => 'Darius Jackson', 'email' => 'darius.jackson@fake-email.net'),
						array( 'name' => 'Jane Doe', 'email' => 'jane.doe@lovely-email.net'),
						array( 'name' => 'Martin Glades', 'email' => 'martin.glades@wee-email.com')
					);
					?>
					
					<!-- Filter Users Tab -->
					<div class="tab-pane" id="filterUsersTab">
						<ul class="list">
						
							<?php for($i=1;$i<=4;$i++): ?>
							<!-- Activity item -->
							<li>
								<span class="date">21/03</span>
								<span class="glyphicons activity-icon user_add"><i></i></span>
								<span class="ellipsis"><a href=""><?php echo $users[mt_rand(0, count($users)-1)]['name']; ?></a> registered at <a href=""><?php echo $users[mt_rand(0, count($users)-1)]['name']; ?>'s</a> suggestion.</span>
								<div class="clearfix"></div>
							</li>
							<!-- // Activity item END -->
							<?php endfor; ?>
							
						</ul>
						<button type="button" class="btn btn-small btn-inverse view-all hidden-phone"><span class="hidden-phone hidden-tablet">View </span>members</button>
					</div>
					<!-- // Filter Users Tab END -->
					
					<!-- Filter Orders Tab -->
					<div class="tab-pane" id="filterOrdersTab">
						<ul class="list">
						
							<?php for($i=1;$i<=4;$i++): ?>
							<!-- Activity item -->
							<li>
								<span class="date">21/03</span>
								<span class="glyphicons activity-icon shopping_cart"><i></i></span>
								<span class="ellipsis"><a href=""><?php echo $users[mt_rand(0, count($users)-1)]['name']; ?></a> bought 10 items worth of &euro;50 (<a href="">order #230<?php echo $i; ?></a>)</span>
								<div class="clearfix"></div>
							</li>
							<!-- // Activity item END -->
							<?php endfor; ?>
							
						</ul>
						<button type="button" class="btn btn-small btn-inverse view-all hidden-phone"><span class="hidden-phone hidden-tablet">View </span>orders</button>
					</div>
					<!-- // Filter Orders Tab END -->
					
					<!-- Filter Messages Tab -->
					<div class="tab-pane active" id="filterMessagesTab">
						<ul class="list">
						
							<?php for($i=1;$i<=4;$i++): ?>
							<?php $user = $users[mt_rand(0, count($users)-1)]; ?>
							<!-- Activity item -->
							<li class="double<?php if ($i==2): ?> highlight<?php endif; ?>">
								<span class="glyphicons activity-icon envelope"><i></i></span>
								<span class="ellipsis">
									You have received an email from <a href=""><?php echo $user['name']; ?></a> (<?php echo $user['email']; ?>)
									<span class="meta glyphicons calendar single"><i></i> on 29 March, 2013 <span>1 hour ago</span></span>
								</span>
								<div class="clearfix"></div>
							</li>
							<!-- // Activity item END -->
							<?php endfor; ?>
							
						</ul>
						<button type="button" class="btn btn-small btn-inverse view-all hidden-phone"><span class="hidden-phone hidden-tablet">View </span>messages</button>
					</div>
					<!-- // Filter Messages Tab END -->
					
					<!-- Filter Links Tab -->
					<div class="tab-pane" id="filterLinksTab">
						<ul class="list">
						
							<?php for($i=1;$i<=4;$i++): ?>
							<!-- Activity item -->
							<li>
								<span class="date">21/03</span>
								<span class="glyphicons activity-icon link"><i></i></span>
								<span class="ellipsis"><a href=""><?php echo $users[mt_rand(0, count($users)-1)]['name']; ?></a> bought 10 items worth of &euro;50 (<a href="">order #230<?php echo $i; ?></a>)</span>
								<div class="clearfix"></div>
							</li>
							<!-- // Activity item END -->
							<?php endfor; ?>
							
						</ul>
						<button type="button" class="btn btn-small btn-inverse view-all hidden-phone"><span class="hidden-phone hidden-tablet">View </span>referrals</button>
					</div>
					<!-- // Filter Links Tab END -->
					
					<!-- Filter Photos Tab -->
					<div class="tab-pane" id="filterPhotosTab">
						<ul class="list">
						
							<?php for($i=1;$i<=4;$i++): ?>
							<!-- Activity item -->
							<li>
								<span class="date">21/03</span>
								<span class="glyphicons activity-icon camera"><i></i></span>
								<span class="ellipsis"><a href=""><?php echo $users[mt_rand(0, count($users)-1)]['name']; ?></a> bought 10 items worth of &euro;50 (<a href="">order #230<?php echo $i; ?></a>)</span>
								<div class="clearfix"></div>
							</li>
							<!-- // Activity item END -->
							<?php endfor; ?>
							
						</ul>
						<button type="button" class="btn btn-small btn-inverse view-all hidden-phone"><span class="hidden-phone hidden-tablet">View </span>photos</button>
					</div>
					<!-- // Filter Photos Tab END -->
				
				</div>
				<div class="separator bottom"></div>
				
				<button type="button" class="btn btn-default">Default</button>
				<button type="button" class="btn btn-primary">Primary</button>
				<button type="button" class="btn btn-success hidden-phone">Success</button>
				<button type="button" class="btn btn-warning hidden-phone">Warning</button>
				<button type="button" class="btn btn-danger hidden-phone">Danger</button>
			</div>
		</div>
	
	</div>
	<div class="span6">
	
		<!-- Chat -->
		<div class="widget widget-chat margin-none">
		
			<div class="widget-head">
				<h4 class="heading">Chat</h4>
			</div>
			<div class="widget-body">
			
			<!-- Slim Scroll -->
			<div class="slim-scroll chat-items" data-scroll-height="222px">
				
				<!-- Media item -->
				<div class="media">
					<div class="media-object pull-left thumb"><img data-src="holder.js/51x51" alt="Image"></div>
					<div class="media-body">
						<blockquote>
							<small><a href="#" title="" class="strong">Martin</a> <cite>just now</cite></small>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien.</p>
						</blockquote>
					</div>
				</div>
				<!-- // Media item END -->
				
				<!-- Media item -->
				<div class="media">
					<div class="media-object pull-right thumb"><img data-src="holder.js/51x51" alt="Image"></div>
					<div class="media-body right">
						<blockquote class="pull-right">
							<small><a href="#" title="" class="strong">John Doe</a><cite> 15 seconds ago</cite></small>
							<p>In ultricies ante eget tortor euismod vitae molestie eros hendrerit. Cras tristique, orci ac lacinia aliquet, velit risus laoreet lectus, eget sollicitudin metus orci non nulla.</p>
						</blockquote>
					</div>
				</div>
				<!-- // Media item END -->
				
				<!-- Media item -->
				<div class="media">
					<div class="media-object pull-left thumb"><img data-src="holder.js/51x51" alt="Image"></div>
					<div class="media-body">
						<blockquote>
							<small><a href="#" title="" class="strong">Ricky</a> <cite>5 minutes ago</cite></small>
							<p>Pellentesque ac turpis turpis. Aliquam erat volutpat. Proin semper auctor mauris vel tempor. Ut eget turpis neque. Nam ultricies tortor eu odio ultricies euismod.</p>
						</blockquote>
					</div>
				</div>
				<!-- // Media item END -->
				
			</div>
			<!-- // Slim Scroll END -->
			
			</div>
			
			<div class="chat-controls">
				<div class="innerLR">
					<form class="margin-none">
						<div class="row-fluid">
							<div class="span10">
								<input type="text" name="message" class="input-block-level margin-none" placeholder="Type your message .." />
							</div>
							<div class="span2">
								<button type="submit" class="btn btn-block btn-inverse">Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
		<!-- // Chat END -->
	
	</div>
	</div>
	<div class="separator bottom"></div>
	
</div>

<div class="widget widget-gallery widget-gallery-slide margin-bottom-none" data-toggle="collapse-widget">
	<div class="widget-head"><h4 class="heading"><?php echo $translate->_('photo_gallery'); ?></h4></div>
	<div class="widget-body">
		
		<!-- Gallery Layout -->
		<div class="gallery gallery-2">
			<ul class="row-fluid" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-4" data-delegate="#gallery-4">
				<?php for($i=1;$i<=4;$i++): ?>
				<li class="span3<?php if ($i>3): ?> hidden-phone<?php endif; ?>"><a class="thumb" href="<?php echo getURL(); ?>theme/images/gallery-2/<?php echo $i; ?>.jpg" data-gallery="gallery"><img src="<?php echo getURL(); ?>theme/images/gallery-2/<?php echo $i; ?>.jpg" alt="photo" /></a></li>
				<?php endfor; ?>
			</ul>
		</div>
		<!-- // Gallery Layout END -->
		
		<span class="nav nav-left disabled glyphicons standard left_arrow"><i></i></span>
		<span href="" class="nav nav-right glyphicons standard right_arrow"><i></i></span>
		
	</div>
</div>

<div class="row-fluid row-merge border-bottom">
	<div class="span6">
	
	<!-- Inner -->
	<div class="innerAll">
	
		<!-- Row -->
		<div class="row-fluid">
			<div class="span4">
			
				<!-- Stats Widget -->
				<a href="" class="widget-stats widget-stats-2">
					<span class="sparkline"></span>
					<span class="txt"><span class="count">2,566</span> Sales</span>
					<div class="clearfix"></div>
				</a>
				<!-- // Stats Widget END -->
				
			</div>
			<div class="span4">
			
				<!-- Stats Widget -->
				<a href="" class="widget-stats widget-stats-2 widget-stats-3">
					<span class="sparkline success"></span>
					<span class="txt"><span class="count">12,566</span> Photos</span>
					<div class="clearfix"></div>
				</a>
				<!-- // Stats Widget END -->
				
			</div>
			<div class="span4">
			
				<!-- Stats Widget -->
				<a href="" class="widget-stats widget-stats-2 widget-stats-3">
					<span class="sparkline danger"></span>
					<span class="txt"><span class="count">12,566</span> Photos</span>
					<div class="clearfix"></div>
				</a>
				<!-- // Stats Widget END -->
				
			</div>
		</div>
		<!-- // Row END -->
	
	</div>
	<!-- // Inner END -->
	
	</div>
	<div class="span6">
	
	<!-- Inner -->
	<div class="innerAll">
		
		<!-- Row -->
		<div class="row-fluid">
			<div class="span4">
			
				<!-- Stats Widget -->
				<a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie">
					<div data-percent="75" class="easy-pie"><span class="value">75</span>%</div>
					<span class="txt"><span class="count">2,566</span> Sales</span>
					<div class="clearfix"></div>
				</a>
				<!-- // Stats Widget END -->
				
			</div>
			<div class="span4">
			
				<!-- Stats Widget -->
				<a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie txt-single">
					<div data-percent="85" class="easy-pie danger"><span class="value">85</span>%</div>
					<span class="txt">Server workload</span>
					<div class="clearfix"></div>
				</a>
				<!-- // Stats Widget END -->
				
			</div>
			<div class="span4">
			
				<!-- Stats Widget -->
				<a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie">
					<div data-percent="23" class="easy-pie inverse"><span class="value">23</span>%</div>
					<span class="txt"><span class="count">1,244</span> Emails</span>
					<div class="clearfix"></div>
				</a>
				<!-- // Stats Widget END -->
				
			</div>
		</div>
		<!-- // Row END -->
	
	</div>
	<!-- // Inner END -->
	
	</div>
</div>
<div class="separator bottom"></div>
<div class="innerLR">
	
	<div class="row-fluid">
		<div class="span6">
		
			<!-- Stats/List/Sparklines Widget -->
			<div class="widget" data-toggle="collapse-widget" data-collapse-closed="true">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading glyphicons stats"><i></i><?php echo $translate->_('overview'); ?></h4>
				</div>
				<!-- // Widget Heading END -->
				
				<div class="widget-body list">
					<ul>
					
						<!-- List item -->
						<li>
							<span class="count">350,254 <span class="sparkline"></span></span> 
							<?php echo $translate->_('visits'); ?>
						</li>
						<!-- // List item END -->
						
						<!-- List item -->
						<li>
							<span class="count">120,103 <span class="sparkline"></span></span> 
							<?php echo $translate->_('visitors'); ?>
						</li>
						<!-- // List item END -->
						
						<!-- List item -->
						<li>
							<span class="count">5,156,392 <span class="sparkline"></span></span> 
							<?php echo $translate->_('pageviews'); ?>
						</li>
						<!-- // List item END -->
						
					</ul>
				</div>
			</div>
			<!-- Stats/List/Sparklines Widget END -->
			
			<!-- Stats/List/Sparklines Widget -->
			<div class="widget" data-toggle="collapse-widget" data-collapse-closed="true">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading glyphicons heart"><i></i><?php echo $translate->_('interest'); ?></h4>
				</div>
				<!-- // Widget Heading END -->
				
				<div class="widget-body list">
					<ul>
					
						<!-- List item -->
						<li>
							<span class="count">00:01:59 <span class="sparkline"></span></span> 
							<?php echo $translate->_('avg_time'); ?>
						</li>
						<!-- // List item END -->
						
						<!-- List item -->
						<li>
							<span class="count">48% <span class="sparkline"></span></span> 
							<?php echo $translate->_('returning'); ?>
						</li>
						<!-- // List item END -->
						
					</ul>
				</div>
			</div>
			<!-- // Stats/List/Sparklines Widget END -->
			
			<!-- Activity/List Widget -->
			<div class="widget" data-toggle="collapse-widget" data-collapse-closed="true">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading glyphicons history"><i></i><?php echo $translate->_('activity'); ?></h4>
					<a href="" class="details pull-right">view all</a>
				</div>
				<!-- // Widget Heading END -->
				
				<div class="widget-body list">
					<ul>
					
						<!-- List item -->
						<li>
							<span>Sales today</span>
							<span class="count">&euro;5,900</span>
						</li>
						<!-- // List item END -->
						
						<!-- List item -->
						<li>
							<span>Some other stats</span>
							<span class="count">36,900</span>
						</li>
						<!-- // List item END -->
						
					</ul>
				</div>
			</div>
			<!-- // Activity/List Widget END -->
			
			<!-- Latest Orders/List Widget -->
			<div class="widget" data-toggle="collapse-widget" data-collapse-closed="true">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading glyphicons cart_in"><i></i><?php echo $translate->_('Last orders'); ?></h4>
					<a href="" class="details pull-right">view all</a>
				</div>
				<!-- // Widget Heading -->
				
				<div class="widget-body list products">
					<ul>
						
						<!-- List item -->
						<li>
							<span class="img">photo</span>
							<span class="title">10 items<br/><strong>&euro;5,900.00</strong></span>
							<span class="count"></span>
						</li>
						<!-- // List item END -->
						
						<!-- List item -->
						<li>
							<span class="img">photo</span>
							<span class="title">Product name<br/><strong>&euro;2,900</strong></span>
							<span class="count"></span>
						</li>
						<!-- // List item END -->
						
					</ul>
				</div>
			</div>
			<!-- // Latest Orders/List Widget END -->
			
			<!-- Comments Widget -->
			<div class="widget widget-scroll" data-scroll-height="223px" data-toggle="collapse-widget" data-collapse-closed="true">
			
				<!-- Widget Heading -->
				<div class="widget-head">
					<h4 class="heading glyphicons conversation"><i></i>Comments</h4>
				</div>
				<!-- // Widget Heading END -->
				
				<div class="widget-body">
					<div>
					
						<!-- Media item -->
						<div class="media">
							<img class="media-object pull-left thumb" data-src="holder.js/51x51" alt="Image" />
							<div class="media-body">
								<blockquote>
									  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo. Suspendisse potenti. Nunc semper cursus dui luctus porttitor. Donec facilisis semper magna sit amet ullamcorper. Cras rutrum magna eget risus vulputate congue. Sed sem libero, dignissim sit amet viverra vitae, suscipit sit amet elit. Integer tincidunt risus in metus rhoncus molestie.</p>
									  <small><a href="#" title="">John Doe</a><cite> | client @ Famous Company</cite></small>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
						
						<!-- Media item -->
						<div class="media">
							<img class="media-object pull-right thumb" data-src="holder.js/51x51" alt="Image" />
							<div class="media-body">
								<blockquote class="pull-right">
									  <p>In ultricies ante eget tortor euismod vitae molestie eros hendrerit. Cras tristique, orci ac lacinia aliquet, velit risus laoreet lectus, eget sollicitudin metus orci non nulla. Pellentesque ac turpis turpis. Aliquam erat volutpat. Proin semper auctor mauris vel tempor. Ut eget turpis neque. Nam ultricies tortor eu odio ultricies euismod. Nulla rhoncus iaculis felis vulputate euismod. Maecenas sapien arcu, gravida eu tincidunt vel, ultricies ullamcorper neque.</p>
									  <small><a href="#" title="">John Doe</a><cite> | client @ Famous Company</cite></small>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
						
					</div>
				</div>
			</div>
			<!-- // Comments Widget END -->
			
		</div>
		<div class="span6">
		
			<!-- Traffic Sources Pie Chart -->
			<div class="widget" data-toggle="collapse-widget" data-collapse-closed="false">
				<div class="widget-head">
					<h4 class="heading glyphicons pie_chart"><i></i><?php echo $translate->_('traffic_sources'); ?></h4>
				</div>
				<div class="widget-body">
					<div id="pie" style="height: 221px;"></div>
				</div>
			</div>
			<!-- // Traffic Sources Pie Chart END -->
			
		</div>
	</div>
</div>