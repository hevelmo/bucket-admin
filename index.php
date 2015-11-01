<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html lang="en" class="no-js lt-ie10"> <![endif]-->
<html class="no-js" lang="en">
	<head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv='cache-control' content='no-cache' />
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />

		<meta class="temp" name="description" content="ThemeBucket"/>
		<meta class="temp" name="copyright"content="© Copyright 2015 Bucket-Admin">
		<meta class="temp" name="robots" content="index, follow">
		<link class="temp" rel="alternate" hreflang="en" href="http://bucket-admin.com.mx" />

		<title>Bucket | Admin</title>

		<!-- import css -->
        <link rel="stylesheet" href="css/import.css">
    	<!-- icon -->
        <link rel="apple-touch-icon" href="img/icon/apple-touch-icon.png">
        <link rel="shortcut icon" href="img/icon/favicon.ico">
        <!-- Google Analytics -->
        <!-- End -> Google Analytics -->
        <!--[if lt IE 9]>
        	<script src="lib/plugins/ie8-responsive-file-warning.js"></script>
		    <script src="lib/plugins/html5shiv.js"></script>
		<![endif]-->
		<!--[if lt IE 10]>
		    <script src="lib/plugins/media.match.js"></script>
		    <script src="lib/plugins/respond.js"></script>
		<![endif]-->
        <script>
            var nav = navigator.appName;

            if(nav == "Microsoft Internet Explorer"){
                // Detectamos si nos visitan desde IE
                if(nav == "Microsoft Internet Explorer"){
                    // Convertimos en minusculas la cadena que devuelve userAgent
                    var ie = navigator.userAgent.toLowerCase();
                    // Extraemos de la cadena la version de IE
                    var version = parseInt(ie.split('msie')[1]);

                    // Dependiendo de la version mostramos un resultado
                    switch(version){
                        case 6:
                            alert("Estas usando IE 6, es obsoleto. \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        case 7:
                            alert("Estas usando IE 7, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        case 8:
                            alert("Estas usando IE 8, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        /*case 9:
                            alert("Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v10 y v11 ");
                            console.log("Estas usando IE 9, mas o menos compatible");
                            break;*/
                        default:
                            console.log("Usas una version compatible");
                            break;
                    }
                }
            }
        </script>
	</head>
	<body class="">
		<section id="container">
			<!-- header start -->
			<header class="header fixed-top clearfix">
				<!-- logo start -->
				<div class="brand">
					<a href="" class="logo">
						<img src="img/logo.png" alt="">
					</a>
					<div class="sidebar-toggle-box">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<!-- logo end -->

				<div class="nav notify-row" id="top_menu">
					<!-- notification start -->
					<ul class="nav top-menu">
						<!-- settings start -->
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="fa fa-tasks"></i>
								<span class="badge bg-success">8</span>
							</a>
							<ul class="dropdown-menu extended tasks-bar">
								<li>
									<p class="">You have 8 pending tasks</p>
								</li>
								<li>
									<a href="#">
										<div class="task-info clearfix">
											<div class="desc pull-left">
												<h5>Target Sell</h5>
												<p>25% , Deadline  12 June’13</p>
											</div>
											<span class="notification-pie-chart pull-right" data-percent="45">
												<span class="percent"></span>
											</span>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="task-info clearfix">
											<div class="desc pull-left">
												<h5>Product Delivery</h5>
												<p>45% , Deadline  12 June’13</p>
											</div>
											<span class="notification-pie-chart pull-right" data-percent="78">
												<span class="percent"></span>
											</span>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="task-info clearfix">
											<div class="desc pull-left">
												<h5>Payment collection</h5>
												<p>87% , Deadline  12 June’13</p>
											</div>
											<span class="notification-pie-chart pull-right" data-percent="60">
												<span class="percent"></span>
											</span>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="task-info clearfix">
											<div class="desc pull-left">
												<h5>Target Sell</h5>
												<p>33% , Deadline  12 June’13</p>
											</div>
											<span class="notification-pie-chart pull-right" data-percent="90">
												<span class="percent"></span>
											</span>
										</div>
									</a>
								</li>
								<li class="external">
									<a href="#">See All Tasks</a>
								</li>
							</ul>
						</li>
						<!-- settings end -->
						<!-- inbox dropdown start-->
						<li id="header_inbox_bar" class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="fa fa-envelope-o"></i>
								<span class="badge bg-important">4</span>
							</a>
							<ul class="dropdown-menu extended inbox">
								<li>
									<p class="red">You have 4 Mails</p>
								</li>
								<li>
									<a href="#">
										<span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
										<span class="subject">
											<span class="from">Jonathan Smith</span>
											<span class="time">Just now</span>
										</span>
										<span class="message">
											Hello, this is an example msg.
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="photo"><img alt="avatar" src="img/avatar-mini-2.jpg"></span>
										<span class="subject">
											<span class="from">Jane Doe</span>
											<span class="time">2 min ago</span>
										</span>
										<span class="message">
											Nice admin template
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="photo"><img alt="avatar" src="img/avatar-mini-3.jpg"></span>
										<span class="subject">
											<span class="from">Tasi sam</span>
											<span class="time">2 days ago</span>
										</span>
										<span class="message">
											This is an example msg.
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
										<span class="subject">
											<span class="from">Mr. Perfect</span>
											<span class="time">2 hour ago</span>
										</span>
										<span class="message">
											Hi there, its a test
										</span>
									</a>
								</li>
								<li>
									<a href="#">See all messages</a>
								</li>
							</ul>
						</li>
						<!-- inbox dropdown end -->
						<!-- notification dropdown start-->
						<li id="header_notification_bar" class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="fa fa-bell-o"></i>
								<span class="badge bg-warning">3</span>
							</a>
							<ul class="dropdown-menu extended notification">
								<li>
									<p>Notifications</p>
								</li>
								<li>
									<div class="alert alert-info clearfix">
										<span class="alert-icon"><i class="fa fa-bolt"></i></span>
										<div class="noti-info">
											<a href="#"> Server #1 overloaded.</a>
										</div>
									</div>
								</li>
								<li>
									<div class="alert alert-danger clearfix">
										<span class="alert-icon"><i class="fa fa-bolt"></i></span>
										<div class="noti-info">
											<a href="#"> Server #2 overloaded.</a>
										</div>
									</div>
								</li>
								<li>
									<div class="alert alert-success clearfix">
										<span class="alert-icon"><i class="fa fa-bolt"></i></span>
										<div class="noti-info">
											<a href="#"> Server #3 overloaded.</a>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<!-- notification dropdown end -->
					</ul>
					<!--  notification end -->
				</div>

				<div class="top-nav clearfix">
					<!--search & user info start-->
					<ul class="nav pull-right top-menu">
						<li>
							<input type="text" class="form-control search" placeholder=" Search">
						</li>
						<!-- user login dropdown start-->
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<img alt="" src="img/avatar1_small.jpg">
								<span class="username">John Doe</span>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu extended logout">
								<li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
								<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
								<li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
							</ul>
						</li>
						<!-- user login dropdown end -->
						<li>
							<div class="toggle-right-box">
								<div class="fa fa-bars"></div>
							</div>
						</li>
					</ul>
					<!--search & user info end-->
				</div>
			</header>
			<!--header end-->

			<!--sidebar start-->
			<aside>
				<div id="sidebar" class="nav-collapse">
					<!-- sidebar menu start-->
					<div class="leftside-navigation">
						<ul class="sidebar-menu" id="nav-accordion">
							<li>
								<a class="active" href="index.html">
									<i class="fa fa-dashboard"></i>
									<span>Dashboard</span>
								</a>
							</li>
							<li class="sub-menu">
								<a href="javascript:;">
									<i class="fa fa-laptop"></i>
									<span>Layouts</span>
								</a>
								<ul class="sub">
									<li><a href="boxed_page.html">Boxed Page</a></li>
									<li><a href="horizontal_menu.html">Horizontal Menu</a></li>
									<li><a href="language_switch.html">Language Switch Bar</a></li>
								</ul>
							</li>
							<li class="sub-menu">
								<a href="javascript:;">
									<i class="fa fa-book"></i>
									<span>UI Elements</span>
								</a>
								<ul class="sub">
									<li><a href="general.html">General</a></li>
									<li><a href="buttons.html">Buttons</a></li>
									<li><a href="typography.html">Typography</a></li>
									<li><a href="widget.html">Widget</a></li>
									<li><a href="slider.html">Slider</a></li>
									<li><a href="tree_view.html">Tree View</a></li>
									<li><a href="nestable.html">Nestable</a></li>
									<li><a href="grids.html">Grids</a></li>
									<li><a href="calendar.html">Calender</a></li>
									<li><a href="draggable_portlet.html">Draggable Portlet</a></li>
								</ul>
							</li>
							<li>
								<a href="fontawesome.html">
									<i class="fa fa-bullhorn"></i>
									<span>Fontawesome </span>
								</a>
							</li>
							<li class="sub-menu">
								<a href="javascript:;">
									<i class="fa fa-th"></i>
									<span>Data Tables</span>
								</a>
								<ul class="sub">
									<li><a href="basic_table.html">Basic Table</a></li>
									<li><a href="responsive_table.html">Responsive Table</a></li>
									<li><a href="dynamic_table.html">Dynamic Table</a></li>
									<li><a href="editable_table.html">Editable Table</a></li>
								</ul>
							</li>
							<li class="sub-menu">
								<a href="javascript:;">
									<i class="fa fa-tasks"></i>
									<span>Form Components</span>
								</a>
								<ul class="sub">
									<li><a href="form_component.html">Form Elements</a></li>
									<li><a href="advanced_form.html">Advanced Components</a></li>
									<li><a href="form_wizard.html">Form Wizard</a></li>
									<li><a href="form_validation.html">Form Validation</a></li>
									<li><a href="file_upload.html">Muliple File Upload</a></li>
									<li><a href="dropzone.html">Dropzone</a></li>
									<li><a href="inline_editor.html">Inline Editor</a></li>
								</ul>
							</li>
							<li class="sub-menu">
								<a href="javascript:;">
									<i class="fa fa-envelope"></i>
									<span>Mail </span>
								</a>
								<ul class="sub">
									<li><a href="mail.html">Inbox</a></li>
									<li><a href="mail_compose.html">Compose Mail</a></li>
									<li><a href="mail_view.html">View Mail</a></li>
								</ul>
							</li>
							<li class="sub-menu">
								<a href="javascript:;">
									<i class=" fa fa-bar-chart-o"></i>
									<span>Charts</span>
								</a>
								<ul class="sub">
									<li><a href="morris.html">Morris</a></li>
									<li><a href="chartjs.html">Chartjs</a></li>
									<li><a href="flot_chart.html">Flot Charts</a></li>
									<li><a href="c3_chart.html">C3 Chart</a></li>
								</ul>
							</li>
							<li class="sub-menu">
								<a href="javascript:;">
									<i class=" fa fa-bar-chart-o"></i>
									<span>Maps</span>
								</a>
								<ul class="sub">
									<li><a href="google_map.html">Google Map</a></li>
									<li><a href="vector_map.html">Vector Map</a></li>
								</ul>
							</li>
							<li class="sub-menu">
								<a href="javascript:;">
									<i class="fa fa-glass"></i>
									<span>Extra</span>
								</a>
								<ul class="sub">
									<li><a href="blank.html">Blank Page</a></li>
									<li><a href="lock_screen.html">Lock Screen</a></li>
									<li><a href="profile.html">Profile</a></li>
									<li><a href="invoice.html">Invoice</a></li>
									<li><a href="pricing_table.html">Pricing Table</a></li>
									<li><a href="timeline.html">Timeline</a></li>
									<li><a href="gallery.html">Media Gallery</a></li><li><a href="404.html">404 Error</a></li>
									<li><a href="500.html">500 Error</a></li>
									<li><a href="registration.html">Registration</a></li>
								</ul>
							</li>
							<li>
								<a href="login.html">
									<i class="fa fa-user"></i>
									<span>Login Page</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- sidebar menu end-->
				</div>
			</aside>
			<!--sidebar end-->

			<!--main content start-->
			<section id="main-content">
				<section class="wrapper">
					<!-- Auxiliar Temporal Inputs's DIV -->
			    	<div id='hidden-inputs-session'></div>

			    	<!-- Auxiliar Temporal Inputs's DIV -->
			    	<div id='hidden-inputs-temporal'></div>

			    	<!--Templates's DIV-->
			    	<div class="wrapper_content_interactive" id='content-temporal-interactive'></div>
				</section>
			</section>
		</section>
		<!--right sidebar start-->
		<div class="right-sidebar">
			<div class="search-row">
				<input type="text" placeholder="Search" class="form-control">
			</div>
			<div class="right-stat-bar">
				<ul class="right-side-accordion">
					<li class="widget-collapsible">
						<a href="#" class="head widget-head red-bg active clearfix">
							<span class="pull-left">work progress (5)</span>
							<span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
						</a>
						<ul class="widget-container">
							<li>
								<div class="prog-row side-mini-stat clearfix">
									<div class="side-graph-info">
										<h4>Target sell</h4>
										<p>25%, Deadline 12 june 13</p>
									</div>
									<div class="side-mini-graph">
										<div class="target-sell"></div>
									</div>
								</div>
								<div class="prog-row side-mini-stat">
									<div class="side-graph-info">
										<h4>product delivery</h4>
										<p>55%, Deadline 12 june 13</p>
									</div>
									<div class="side-mini-graph">
										<div class="p-delivery">
											<div class="sparkline" data-type="bar" data-resize="true" data-height="30" data-width="90%" data-bar-color="#39b7ab" data-bar-width="5" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
										</div>
									</div>
								</div>
								<div class="prog-row side-mini-stat">
									<div class="side-graph-info payment-info">
										<h4>payment collection</h4>
										<p>25%, Deadline 12 june 13</p>
									</div>
									<div class="side-mini-graph">
										<div class="p-collection">
											<span class="pc-epie-chart" data-percent="45">
												<span class="percent"></span>
											</span>
										</div>
									</div>
								</div>
								<div class="prog-row side-mini-stat">
									<div class="side-graph-info">
										<h4>delivery pending</h4>
										<p>44%, Deadline 12 june 13</p>
									</div>
									<div class="side-mini-graph">
										<div class="d-pending"></div>
									</div>
								</div>
								<div class="prog-row side-mini-stat">
									<div class="col-md-12">
										<h4>total progress</h4>
										<p>50%, Deadline 12 june 13</p>
										<div class="progress progress-xs mtop10">
											<div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
												<span class="sr-only">50% Complete</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="widget-collapsible">
						<a href="#" class="head widget-head terques-bg active clearfix">
							<span class="pull-left">contact online (5)</span>
							<span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
						</a>
						<ul class="widget-container">
							<li>
								<div class="prog-row">
									<div class="user-thumb">
										<a href="#"><img src="img/avatar1_small.jpg" alt=""></a>
									</div>
									<div class="user-details">
										<h4><a href="#">Jonathan Smith</a></h4>
										<p>Work for fun</p>
									</div>
									<div class="user-status text-danger">
										<i class="fa fa-comments-o"></i>
									</div>
								</div>
								<div class="prog-row">
									<div class="user-thumb">
										<a href="#"><img src="img/avatar1.jpg" alt=""></a>
									</div>
									<div class="user-details">
										<h4><a href="#">Anjelina Joe</a></h4>
										<p>Available</p>
									</div>
									<div class="user-status text-success">
										<i class="fa fa-comments-o"></i>
									</div>
								</div>
								<div class="prog-row">
									<div class="user-thumb">
										<a href="#"><img src="img/chat-avatar2.jpg" alt=""></a>
									</div>
									<div class="user-details">
										<h4><a href="#">John Doe</a></h4>
										<p>Away from Desk</p>
									</div>
									<div class="user-status text-warning">
										<i class="fa fa-comments-o"></i>
									</div>
								</div>
								<div class="prog-row">
									<div class="user-thumb">
										<a href="#"><img src="img/avatar1_small.jpg" alt=""></a>
									</div>
									<div class="user-details">
										<h4><a href="#">Mark Henry</a></h4>
										<p>working</p>
									</div>
									<div class="user-status text-info">
										<i class="fa fa-comments-o"></i>
									</div>
								</div>
								<div class="prog-row">
									<div class="user-thumb">
										<a href="#"><img src="img/avatar1.jpg" alt=""></a>
									</div>
									<div class="user-details">
										<h4><a href="#">Shila Jones</a></h4>
										<p>Work for fun</p>
									</div>
									<div class="user-status text-danger">
										<i class="fa fa-comments-o"></i>
									</div>
								</div>
								<p class="text-center">
									<a href="#" class="view-btn">View all Contacts</a>
								</p>
							</li>
						</ul>
					</li>
					<li class="widget-collapsible">
						<a href="#" class="head widget-head purple-bg active">
							<span class="pull-left"> recent activity (3)</span>
							<span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
						</a>
						<ul class="widget-container">
							<li>
								<div class="prog-row">
									<div class="user-thumb rsn-activity">
										<i class="fa fa-clock-o"></i>
									</div>
									<div class="rsn-details ">
										<p class="text-muted">just now</p>
										<p>
											<a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
										</p>
									</div>
								</div>
								<div class="prog-row">
									<div class="user-thumb rsn-activity">
										<i class="fa fa-clock-o"></i>
									</div>
									<div class="rsn-details ">
										<p class="text-muted">2 min ago</p>
										<p>
											<a href="#">Jane Doe </a>Purchased new equipments for zonal office setup
										</p>
									</div>
								</div>
								<div class="prog-row">
									<div class="user-thumb rsn-activity">
										<i class="fa fa-clock-o"></i>
									</div>
									<div class="rsn-details ">
										<p class="text-muted">1 day ago</p>
										<p>
											<a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
										</p>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="widget-collapsible">
						<a href="#" class="head widget-head yellow-bg active">
							<span class="pull-left"> shipment status</span>
							<span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
						</a>
						<ul class="widget-container">
							<li>
								<div class="col-md-12">
									<div class="prog-row">
										<p>Full sleeve baby wear (SL: 17665)</p>
										<div class="progress progress-xs mtop10">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
												<span class="sr-only">40% Complete</span>
											</div>
										</div>
									</div>
									<div class="prog-row">
										<p>Full sleeve baby wear (SL: 17665)</p>
										<div class="progress progress-xs mtop10">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
												<span class="sr-only">70% Completed</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!--right sidebar end-->

		<!-- MAIN -->
		<script src="lib/jquery.js"></script>
		<script src="lib/modernizr.js"></script>
		<script src="lib/bootstrap.js"></script>
		<!-- PLUGINS -->
		<script src="lib/plugins/jquery-ui/jquery-ui-1.10.1.custom.js"></script>
		<script src="lib/plugins/jquery.dcjqaccordion.2.7.js"></script>
		<script src="lib/plugins/jquery.scrollTo-v1.4.6.js"></script>
		<script src="lib/plugins/jquery.slimscroll.js"></script>
		<script src="lib/plugins/jquery.nicescroll.js"></script>
		<!--[if lte IE 8]>
		<script language="javascript" type="text/javascript" src="lib/excanvas.js"></script>
		<![endif]-->
		<script src="lib/plugins/skycons.js"></script>
		<script src="lib/plugins/jquery.scrollTo-v1.4.8.js"></script>
		<script src="lib/plugins/jquery.easing.1.3.js"></script>
		<script src="lib/plugins/clndr.js"></script>


		<!-- CORE -->
		<script src="lib/jquery.gdb.js"></script>
		<!--<script src="lib/jquery.ui.js"></script>-->
		<script src="lib/underscore.js"></script>
		<script src="lib/moment.js"></script>
		<script src="lib/accounting.js"></script>
		<script src="lib/finch.js"></script>
		<!-- HANDLEBARS -->
		<script src="lib/handlebars.runtime.js"></script>
		<!-- FORMS -->
		<script src="lib/forms.js"></script>
		<script src="lib/sha512.js"></script>
		<!-- TEMPLATES -->
		<script src='templates/min/templates.min.js'></script>
		<!-- CORE -->
	    <script src='js/objects.js'></script>
	    <script src='js/method.js'></script>
	    <script src='js/model.js'></script>
	    <script src='js/room.js'></script>
	    <script src='js/main.js'></script>
		<?php /*
		<!-- TEMPLATES -->
		<script src='templates/min/templates.min.js'></script>
		<!-- Plugins -->
		<script src='lib/min/core.min.js'></script>
		<!-- CORE JS -->
		<script src='js/min/core.min.js'></script>
		*/ ?>
	</body>
</html>

