<!-- 4. $MAIN_MENU =================================================================================

		Main menu
		
		Notes:
		* to make the menu item active, add a class 'active' to the <li>
		  example: <li class="active">...</li>
		* multilevel submenu example:
			<li class="mm-dropdown">
			  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
			  <ul>
				<li>...</li>
				<li class="mm-dropdown">
				  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
				  <ul>
					<li>...</li>
					...
				  </ul>
				</li>
				...
			  </ul>
			</li>
-->
	<div id="main-menu" role="navigation">
		<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div id="main-menu-inner" style="overflow: hidden; width: auto; height: 100%;">
            <!-- Login info
			<div class="menu-content top animated fadeIn" id="menu-content-demo">
				<!-- Menu custom content demo
					 CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
					 Javascript: html/assets/demo/demo.js
				 
				<div>
					<div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold">John</span></div>

					<img src="Images/1.jpg" alt="" class="">
					<div class="btn-group">
						<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
						<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
						<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
						<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
					</div>
					<a href="#" class="close">×</a>
				</div>
			</div> -->
			<ul class="navigation">
				<li class=" active">
					<a href="./index.php"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Dashboard</span></a>
				</li>
				<li class="mm-dropdown mm-dropdown-root">
					<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="menu-icon fa fa-th"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Layouts</span><span class="label label-warning">Updated</span></a>
					<ul class="mmc-dropdown-delay animated fadeInLeft">
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/layouts-grid.html"><span class="mm-text">Grid</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/layouts-main-menu.html"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">Main menu</span><span class="label label-warning">Updated</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="http://infinite-woodland-5276.herokuapp.com/stat-panels.html"><i class="menu-icon fa fa-tasks"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Stat panels</span></a>
				</li>
				<li>
					<a href="http://infinite-woodland-5276.herokuapp.com/widgets.html"><i class="menu-icon fa fa-flask"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Widgets</span></a>
				</li>
				<li class="mm-dropdown mm-dropdown-root">
					<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="menu-icon fa fa-desktop"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">UI elements</span></a>
					<ul class="mmc-dropdown-delay animated fadeInLeft">
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/ui-buttons.html"><span class="mm-text">Buttons</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/ui-typography.html"><span class="mm-text">Typography</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/ui-tabs.html"><span class="mm-text">Tabs &amp; Accordions</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/ui-modals.html"><span class="mm-text">Modals</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/ui-alerts.html"><span class="mm-text">Alerts &amp; Tooltips</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/ui-components.html"><span class="mm-text">Components</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/ui-panels.html"><span class="mm-text">Panels</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/ui-jqueryui.html"><span class="mm-text">jQuery UI</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/ui-icons.html"><span class="mm-text">Icons</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/ui-utility-classes.html"><span class="mm-text">Utility classes</span></a>
						</li>
					</ul>
				</li>
				<li class="mm-dropdown mm-dropdown-root">
					<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="menu-icon fa fa-check-square"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Form components</span></a>
					<ul class="mmc-dropdown-delay animated fadeInLeft">
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/forms-layouts.html"><span class="mm-text">Layouts</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/forms-general.html"><span class="mm-text">General</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/forms-advanced.html"><span class="mm-text">Advanced</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/forms-pickers.html"><span class="mm-text">Pickers</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/forms-validation.html"><span class="mm-text">Validation</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/forms-editors.html"><span class="mm-text">Editors</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="http://infinite-woodland-5276.herokuapp.com/tables.html"><i class="menu-icon fa fa-table"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Tables</span></a>
				</li>
				<li>
					<a href="http://infinite-woodland-5276.herokuapp.com/charts.html"><i class="menu-icon fa fa-bar-chart-o"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Charts</span></a>
				</li>
				<li class="mm-dropdown mm-dropdown-root">
					<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Pages</span><span class="label label-success">16</span></a>
					<ul class="mmc-dropdown-delay animated fadeInLeft">
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-search.html"><span class="mm-text">Search results</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-pricing.html"><span class="mm-text">Plans &amp; pricing</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-faq.html"><span class="mm-text">FAQ</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-profile.html"><span class="mm-text">Profile</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-timeline.html"><span class="mm-text">Timeline</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-signin.html"><span class="mm-text">Sign In</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-signup.html"><span class="mm-text">Sign Up</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-signin-alt.html"><span class="mm-text">Sign In Alt</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-signup-alt.html"><span class="mm-text">Sign Up Alt</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-invoice.html"><span class="mm-text">Invoice</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-404.html"><span class="mm-text">Error 404</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-500.html"><span class="mm-text">Error 500</span></a>
						</li>
						<li class="mm-dropdown">
							<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="menu-icon fa fa-envelope"></i><span class="mm-text">Messages</span></a>
							<ul>
								<li>
									<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-inbox.html"><span class="mm-text">Inbox</span></a>
								</li>
								<li>
									<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-show-email.html"><span class="mm-text">Show message</span></a>
								</li>
								<li>
									<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-new-email.html"><span class="mm-text">New message</span></a>
								</li>
							</ul>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/pages-blank.html"><span class="mm-text">Blank page</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="http://infinite-woodland-5276.herokuapp.com/complete-ui.html"><i class="menu-icon fa fa-briefcase"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Complete UI</span></a>
				</li>
				<li>
					<a href="http://infinite-woodland-5276.herokuapp.com/color-builder.html"><i class="menu-icon fa fa-tint"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Color Builder</span></a>
				</li>
				<li class="mm-dropdown mm-dropdown-root">
					<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="menu-icon fa fa-sitemap"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Menu levels</span><span class="badge badge-primary">6</span></a>
					<ul class="mmc-dropdown-delay animated fadeInLeft">
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="mm-text">Menu level 1.1</span><span class="badge badge-danger">12</span><span class="label label-info">21</span></a>
						</li>
						<li>
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="mm-text">Menu level 1.2</span></a>
						</li>
						<li class="mm-dropdown">
							<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="mm-text">Menu level 1.3</span><span class="label label-warning">5</span></a>
							<ul>
								<li>
									<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="mm-text">Menu level 2.1</span></a>
								</li>
								<li class="mm-dropdown">
									<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="mm-text">Menu level 2.2</span></a>
									<ul>
										<li class="mm-dropdown">
											<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="mm-text">Menu level 3.1</span></a>
											<ul>
												<li>
													<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="mm-text">Menu level 4.1</span></a>
												</li>
											</ul>
										</li>
										<li>
											<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="mm-text">Menu level 3.2</span></a>
										</li>
									</ul>
								</li>
								<li>
									<a tabindex="-1" href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="mm-text">Menu level 2.2</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul> <!-- / .navigation -->
			<div class="menu-content animated fadeIn">
				<a href="http://infinite-woodland-5276.herokuapp.com/pages-invoice.html" class="btn btn-primary btn-block btn-outline dark">Create Invoice</a>
			</div>
		</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; height: 741px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div> <!-- / #main-menu-inner -->
	</div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->