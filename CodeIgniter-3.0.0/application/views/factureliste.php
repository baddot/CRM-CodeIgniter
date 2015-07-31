<?php
 if( !empty($results) ) {
    foreach($results as $row) {
        echo '<tr>';
        echo '<td>'.$row->id_facture.'</td>';
        echo '<td>'.$row->id_client.'</td>';
        echo '<td>'.$row->nom_facture.'</td>';
        echo '<td>'.$row->date_facture.'</td>';
		 echo '<td>'.$row->remise.'</td>';
        echo '<td>'.$row->prix_tva.'</td>';
		
        
        echo '</tr>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Materia - Admin Template">
	<meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
	<meta name="author" content="solutionportal">
	<!-- <base href="/"> -->

	<title>Liste de factures </title>
	
	<!-- Icons -->
     <link href="<?php echo base_url('public/fonts/ionicons/css/ionicons.min.css')?>" rel="stylesheet"> 
     <link href="<?php echo base_url('public/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
    <link href="<?php echo base_url('public/styles/plugins/waves.css')?>" rel="stylesheet"> 
     <link href="<?php echo base_url('public/styles/plugins/perfect-scrollbar.css')?>" rel="stylesheet"> 
	<link rel="stylesheet" href="styles/plugins/waves.css">
	<link rel="stylesheet" href="styles/plugins/perfect-scrollbar.css">
	
	<!-- Css/Less Stylesheets -->
	<!-- build:css styles/bootstrap.min.css -->
    <link href="<?php echo base_url('public/styles/vendors/bootstrap.min.css')?>" rel="stylesheet"> 
	<link rel="stylesheet" href="styles/vendors/bootstrap.min.css">
	<!-- /build -->
	<!-- build:css styles/main.min.css -->
    <link href="<?php echo base_url('public/styles/main.less')?>" rel="stylesheet"> 
	<link rel="stylesheet/less" href="styles/main.less">	
	<!-- /build -->


	 
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]--> 

	
</head>
<body id="app" class="app off-canvas">
	
	<!-- header -->
	<header class="site-head" id="site-head">
		<ul class="list-unstyled left-elems">
			<!-- nav trigger/collapse -->
			<li>
				<a href="javascript:;" class="nav-trigger ion ion-drag"></a>
			</li>
			<!-- #end nav-trigger -->

			<!-- Search box -->
			<li>
				<div class="form-search hidden-xs">
					<form id="site-search" action="javascript:;">
						<input type="search" class="form-control" placeholder="Type here for search...">
						<button type="submit" class="ion ion-ios-search-strong"></button>
					</form>
				</div>
			</li>	<!-- #end search-box -->

			<!-- site-logo for mobile nav -->
			<li>
				<div class="site-logo visible-xs">
					<a href="javascript:;" class="text-uppercase h3">
						<span class="text">Materia</span>
					</a>
				</div>
			</li> <!-- #end site-logo -->

			<!-- fullscreen -->
			<li class="fullscreen hidden-xs">
				<a href="javascript:;"><i class="ion ion-qr-scanner"></i></a>

			</li>	<!-- #end fullscreen -->

			<!-- notification drop -->
			<li class="notify-drop hidden-xs dropdown">
				<a href="javascript:;" data-toggle="dropdown">
					<i class="ion ion-speakerphone"></i>
					<span class="badge badge-danger badge-xs circle">3</span>
				</a>

				<div class="panel panel-default dropdown-menu">
					<div class="panel-heading">
						You have 3 new notifications 
						<a href="javascript:;" class="right btn btn-xs btn-pink mt-3">Show All</a>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-archive left bg-success"></span>
									<div class="desc">
										<strong>App downloaded</strong>
										<p class="small text-muted">1 min ago</p>
									</div>
								</a>
							</li>
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-alert-circled left bg-danger"></span>
									<div class="desc">
										<strong>Application Error</strong>
										<p class="small text-muted">4 hours ago</p>
									</div>
								</a>
							</li>
							<li class="clearfix">
								<a href="javascript:;">
									<span class="ion ion-person left bg-info"></span>
									<div class="desc">
										<strong>New User Registered</strong>
										<p class="small text-muted">2 days ago</p>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>

			</li>	<!-- #end notification drop -->

		</ul>

		<ul class="list-unstyled right-elems">
			<!-- profile drop -->
			<li class="profile-drop hidden-xs dropdown">
				<a href="javascript:;" data-toggle="dropdown">
					<img src="images/admin.jpg" alt="admin-pic">
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="javascript:;"><span class="ion ion-person">&nbsp;&nbsp;</span>Profile</a></li>
					<li><a href="javascript:;"><span class="ion ion-settings">&nbsp;&nbsp;</span>Settings</a></li>
					<li class="divider"></li>
					<li><a href="javascript:;"><span class="ion ion-lock-combination">&nbsp;&nbsp;</span>Lock Screen</a></li>
					<li><a href="javascript:;"><span class="ion ion-power">&nbsp;&nbsp;</span>Logout</a></li>
				</ul>
			</li>
			<!-- #end profile-drop -->

			<!-- sidebar contact -->
			<li class="floating-sidebar">
				<a href="javascript:;">
					<i class="ion ion-grid"></i>
				</a>
				<div class="sidebar-wrap" data-perfect-scrollbar>
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#sidebar-chat-tab" data-toggle="tab">Chat</a>
						</li>
						<li>
							<a href="#sidebar-info-tab" data-toggle="tab">Info</a>
						</li>
					</ul> <!-- #end nav-tabs -->
					<div class="tab-content">
						<div class="tab-pane active" id="sidebar-chat-tab">
							<div class="chat-tab tab clearfix">
								<h5 class="title mt0 mb20">Online</h5>
								<div class="user-container mb15">
									<img src="images/sample/1.jpg" alt="">
									<div class="desc">
										<p class="mb0">John Wick</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;San Franciso, USA</p>

									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/2.jpg" alt="">
									<div class="desc">
										<p class="mb0">George K.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;California, USA</p>
									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/3.jpg" alt="">
									<div class="desc">
										<p class="mb0">Shello Dse.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Berlin, Germany</p>
									</div>
									<span class="ion ion-record avail right away"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/4.jpg" alt="">
									<div class="desc">
										<p class="mb0">Lucas Tower</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Paris, France</p>
									</div>
									<span class="ion ion-record avail right away"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/5.jpg" alt="">
									<div class="desc">
										<p class="mb0">Hey Win</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Hongkong, China</p>
									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/6.jpg" alt="">
									<div class="desc">
										<p class="mb0">Kelvin L.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Moscow, Russia</p>
									</div>
									<span class="ion ion-record avail right on"></span>
								</div>

								<h5 class="title mt0 mb20">Offline</h5>

								<div class="user-container mb15">
									<img src="images/sample/7.jpg" alt="">
									<div class="desc">
										<p class="mb0">Martin Xx.</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;xxx, yyy</p>
									</div>
									<span class="ion ion-record avail right off"></span>
								</div>

								<div class="user-container mb15">
									<img src="images/sample/2.jpg" alt="">
									<div class="desc">
										<p class="mb0">Lorem Ipsum</p>
										<p class="xsmall"><span class="ion ion-location"></span>&nbsp;Virginia, USA</p>
									</div>
									<span class="ion ion-record avail right off"></span>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="sidebar-info-tab">
							<div class="info-tab tab clearfix">
								<h5 class="title mt0 mb20">Work in Progress</h5>
								<ul class="list-unstyled mb15 clearfix">
									<li>
										<div class="clearfix mb10">
											<small class="left">App Upload</small>
											<small class="right">80%</small>
										</div>
										<div class="progress-xs progress">
											<div class="progress-bar progress-bar-primary" style="width: 80%;"></div>
										</div>
									</li>
									<li>
										<div class="clearfix mb10">
											<small class="left">Creating Assets</small>
											<small class="right">50%</small>
										</div>
										<div class="progress-xs progress">
											<div class="progress-bar progress-bar-danger" style="width: 50%;"></div>
										</div>
									</li>
									<li>
										<div class="clearfix mb10">
											<small class="left">New UI 2.0</small>
											<small class="right">90%</small>
										</div>
										<div class="progress-xs progress">
											<div class="progress-bar progress-bar-success" style="width: 90%;"></div>
										</div>
									</li>
								</ul>

								<h5 class="title mt0 mb20">Settings</h5>
								<div class="clearfix mb15">
									<div class="left">
										<p>Show me online</p>
									</div>

									<div class="right">
										<div class="ui-toggle ui-toggle-success ui-toggle-xs">
											<label>
												<input type="checkbox" checked> 
												<span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="clearfix mb15">
									<div class="left">
										<p>Notifications</p>
									</div>

									<div class="right">
										<div class="ui-toggle ui-toggle-success ui-toggle-xs">
											<label>
												<input type="checkbox"> 
												<span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="clearfix mb15">
									<div class="left">
										<p>Enable History</p>
									</div>

									<div class="right">
										<div class="ui-toggle ui-toggle-success ui-toggle-xs">
											<label>
												<input type="checkbox" checked> 
												<span></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- #end tab content -->
				</div> <!-- #end sidebar-wrap -->
			</li>

		</ul>

	</header>
	<!-- #end header -->


	<!-- main-container -->
	<div class="main-container clearfix">
		<!-- main-navigation -->
		<aside class="nav-wrap" id="site-nav" data-perfect-scrollbar>
			<div class="nav-head">
				<!-- site logo -->
				<a href="index.html" class="site-logo text-uppercase">
					<i class="ion ion-disc"></i>
					<span class="text">Materia</span>
				</a>
			</div>

			<!-- Site nav (vertical) -->

			<nav class="site-nav clearfix" role="navigation">
				<div class="profile clearfix mb15">
					<img src="images/admin.jpg" alt="admin">
					<div class="group">
						<h5 class="name">Robert Smith</h5>
						<small class="desig text-uppercase">UX Designer</small>
					</div>
				</div>

				<!-- navigation -->
				<ul class="list-unstyled clearfix nav-list mb15">
					<li>
						<a href="index.html">
							<i class="ion ion-monitor"></i>
							<span class="text">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="email.inbox.html">
							<i class="ion ion-email"></i>
							<span class="text">Email</span>
						</a>
					</li>

					<li>
						<a href="calendar.html">
							<i class="ion ion-calendar"></i>
							<span class="text">Calendar</span>
							<span class="badge badge-xs badge-danger">hot</span>
						</a>
					</li>
					<li>
						<a href="material.html">
							<i class="ion ion-icecream"></i>
							<span class="text">Material</span>
							<span class="badge badge-xs badge-success">new</span>
						</a>
					</li>
					
					<li>
						<a href="javascript:;">
							<i class="ion ion-android-options"></i>
							<span class="text">UI Kit</span>
							<i class="arrow ion-chevron-left"></i>
							<span class="badge badge-xs badge-info">10</span>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="ui.buttons.html">Buttons</a></li>
							<li><a href="ui.typography.html">Typography</a></li>
							<li><a href="ui.grids.html">Grids</a></li>
							<li><a href="ui.panels.html">Panels</a></li>
							<li><a href="ui.notifications.html">Notifications</a></li>
							<li><a href="ui.tabs.html">Tabs &amp; Accordion</a></li>
							<li><a href="ui.progress-bars.html">Progress Bars</a></li>
							<li><a href="ui.extras.html">Extras</a></li>
						</ul>
					</li>

					<li>
						<a href="javascript:;">
							<i class="ion ion-asterisk"></i>
							<span class="text">Icons</span>
							<i class="arrow ion-chevron-left"></i>
							<span class="badge badge-xs badge-primary">2</span>
						</a>
						<ul class="inner-drop nested list-unstyled">
							<li><a href="icons.html">Font Awesome</a></li>
						</ul>
					</li>

					<li>
						<a href="javascript:;">
							<i class="ion ion-stats-bars"></i>
							<span class="text">Charts</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="charts.c3.html">C3</a></li>
							<li><a href="charts.sparklines.html">Sparklines</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:;">
							<i class="ion ion-document-text"></i>
							<span class="text">Forms</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="forms.elements.html">Elements</a></li>
						</ul>
					</li>
					<li>
						<a href="gmap.html">
							<i class="ion ion-map"></i>
							<span class="text">Maps</span>
						</a>
					</li>
					<li class="active">
						<a href="tables.html">
							<i class="ion ion-clipboard"></i>
							<span class="text">Tables</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="ion ion-printer"></i>
							<span class="text">Pages</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="pages.signin.html">Sign In</a></li>
							<li><a href="pages.signup.html">Sign Up</a></li>
							<li><a href="pages.forget-pass.html">Forget Pass</a></li>
							<li><a href="pages.404.html">404</a></li>
							<li><a href="pages.lockscreen.html">Lock Screen</a></li>
							<li><a href="pages.timeline.html">Timeline</a></li>
							<li><a href="pages.search.html">Search</a></li>
							<li><a href="pages.invoice.html">Invoice</a></li>
						</ul>
					</li>
				</ul> <!-- #end navigation -->
			</nav>

			<!-- nav-foot -->
			<footer class="nav-foot">
				<p>2015 &copy; <span>MATERIA</span></p>
			</footer>

		</aside>
		<!-- #end main-navigation -->

		<!-- content-here -->
		<div class="content-container" id="content">

			<div class="page page-ui-tables">
				<ol class="breadcrumb breadcrumb-small">
					<li>Home</li>
					<li class="active"><a href="#/tables/tables">Tables</a></li>
				</ol>

				<div class="page-wrap">
					<!-- row -->
					<div class="row">
						<!-- Basic Table -->
						<div class="col-md-12">
							<div class="panel panel-lined panel-hovered mb20 table-responsive basic-table">
								<div class="panel-heading">
									Basic Table 
									<div class="btn-group btn-group-sm right">
										<button type="button" class="btn btn-default btable-bordered" data-table-class="table-bordered">Bordered</button>
										<button type="button" class="btn btn-default btable-striped" data-table-class="table-stiped">Striped</button>
										<button type="button" class="btn btn-default btable-condensed" data-table-class="table-condensed">Condensed</button>
										<button type="button" class="btn btn-default btable-hover" data-table-class="table-hover">Hover</button>
									</div>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th class="col-lg-1"><button type="button" class="btn btn-default btn-sm fa fa-trash"></th>
												<th>ID_facture</th>
												<th>ID_client</th>
												<th>Nom Facture</th>
												
												<th class="col-lg-2">Date</th>
                                                <th>Remise</th>
                                                <th>Prix_TVA</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="ui-checkbox ui-checkbox-primary ml5">
														<label><input type="checkbox"><span></span>
														</label>
													</div>
												</td>
												<td>My First Blog</td>
												<td>Johnny</td>
												<td>Web Design</td>
												<td>
													<label class="label label-pink mr5">wordpress</label>
													<label class="label label-pink mr5">blog</label>
												</td>
												<td>20-3-2004</td>
											</tr>
											<tr>
												<td>
													<div class="ui-checkbox ui-checkbox-primary ml5">
														<label><input type="checkbox"><span></span>
														</label>
													</div>
												</td>
												<td>How to Design</td>
												<td>Jenifer</td>
												<td>design</td>
												<td>
													<label class="label label-primary mr5">photoshop</label>
													<label class="label label-primary mr5">illustrator</label>
												</td>
												<td>2-4-2012</td>
											</tr>
											<tr>
												<td>
													<div class="ui-checkbox ui-checkbox-primary ml5">
														<label><input type="checkbox"><span></span>
														</label>
													</div>
												</td>
												<td>Something is missing</td>
												<td>Joe</td>
												<td>uncategorized</td>
												<td>
													<label class="label label-success mr5">abc</label>
													<label class="label label-success mr5">def</label>
													<label class="label label-success mr5">ghi</label>
												</td>
												<td>20-5-2013</td>
											</tr>
											<tr>
												<td>
													<div class="ui-checkbox ui-checkbox-primary ml5">
														<label><input type="checkbox"><span></span>
														</label>
													</div>
												</td>
												<td>Learn a new language</td>
												<td>Rinky</td>
												<td>language</td>
												<td>
													<label class="label label-danger mr5">C++</label>
													<label class="label label-danger mr5">Java</label>
													<label class="label label-danger mr5">PHP</label>
												</td>
												<td>10-5-2014</td>
											</tr>
											<tr>
												<td>
													<div class="ui-checkbox ui-checkbox-primary ml5">
														<label><input type="checkbox"><span></span>
														</label>
													</div>
												</td>
												<td>I love singing. Do you?</td>
												<td>AJ</td>
												<td>singing</td>
												<td>
													<label class="label label-info mr5">music</label>
												</td>
												<td>20-10-2014</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>

						<!-- Data Table -->
						<div class="col-md-12">
							<div class="panel panel-lined table-responsive panel-hovered mb20 data-table" style="padding-bottom: 20px">
								<div class="panel-heading">Data Table</div>
								<div class="panel-body">
									<div class="small text-bold left mt5">
										Show&nbsp;
										<select class="lengthSelect">
											<option value="5">5</option>
											<option value="10" selected>10</option>
											<option value="20">20</option>
											<option value="50">50</option>
										</select> 
										&nbsp;entries
									</div>

									<form class="form-horizontal right col-lg-4" action="javascript:;">
										<input type="text" class="form-control input-sm searchInput" placeholder="Type keyword">
									</form>
								</div>
							<!-- data table -->
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>
											Rendering Engine
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
										<th>
											Browser
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
										<th>
											Platform(s)
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
										<th>
											Engine Version
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
										<th>
											CSS Grade
											<div class="th">
												<i class="fa fa-caret-up icon-up"></i>
												<i class="fa fa-caret-down icon-down"></i>
											</div>
										</th>
									</tr>
								</thead>
								<tbody>
									<!-- data initialize via script, can also be load via ajax -->
								</tbody>
							</table>
							<!-- #end data table -->	
							
						</div>
					</div>	
						
						
					</div>
					<!-- #end row -->
				</div> <!-- #end page-wrap -->
			</div>
			

		</div>
		<!-- #end content-container -->

	</div> <!-- #end main-container -->


	<!-- theme settings -->
	<div class="site-settings clearfix hidden-xs">
		<div class="settings clearfix">
			<div class="trigger ion ion-settings left"></div>
			<div class="wrapper left">
				<ul class="list-unstyled other-settings">
					<li class="clearfix mb10">
						<div class="left small">Nav Horizontal</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox" id="navHorizontal"> 
								<span>&nbsp;</span> 
							</label>
						</div>
						
						
					</li>
					<li class="clearfix mb10">
						<div class="left small">Fixed Header</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox"  id="fixedHeader"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
					<li class="clearfix mb10">
						<div class="left small">Nav Full</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox"  id="navFull"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
				</ul>
				<hr/>
				<ul class="themes list-unstyled" id="themeColor">
					<li data-theme="theme-zero" class="active"></li>
					<li data-theme="theme-one"></li>
					<li data-theme="theme-two"></li>
					<li data-theme="theme-three"></li>
					<li data-theme="theme-four"></li>
					<li data-theme="theme-five"></li>
					<li data-theme="theme-six"></li>
					<li data-theme="theme-seven"></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- #end theme settings -->


	

	<!-- Dev only -->
	<!-- build:remove -->
	<script src="scripts/dev/less.min.js"></script>	
	<!-- /build -->

	<!-- Vendors -->
	<!-- build:js scripts/vendors.js -->
	<script src="scripts/vendors/jquery.min.js"></script> 
	<script src="scripts/vendors/bootstrap.min.js"></script>
	<!-- /build -->


	<script src="scripts/plugins/screenfull.js"></script>
	<script src="scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="scripts/plugins/waves.min.js"></script>
	<script src="scripts/plugins/jquery.dataTables.min.js"></script>
	<script src="scripts/app.js"></script>
	<script src="scripts/tables.init.js"></script>

</body>
</html>