				<ul class="topnav pull-right">

					<!-- Dropdown -->

					<li class="dropdown dd-1 visible-desktop">
					</li>
					<!-- // Dropdown END -->

					<!-- Profile / Logout menu -->
					<li class="account dropdown dd-1">
						<a data-toggle="dropdown" href="my_account.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light" class="glyphicons logout lock"><span class="hidden-phone"><?php echo $user?></span><i></i></a>
						<ul class="dropdown-menu pull-right">
							<li class="profile">
								<span>
									<span class="heading">Profile <a href="/profile/" class="pull-right">edit</a></span>
									<span class="img"></span>
									<span class="details">
										<a href="my_account.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-light"><?php //echo $user?></a><br />
										Super Great Guy
									</span>
									<span class="clearfix"></span>
								</span>
							</li>
							<li>
								<span>
									<a class="btn btn-default btn-mini pull-right" href="/account/signoff">Sign Out</a>
								</span>
							</li>
						</ul>
					</li>
					<!-- // Profile / Logout menu END -->

				</ul>