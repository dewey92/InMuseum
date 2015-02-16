<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>SB Admin - Bootstrap Admin Template</title>
		<!-- Bootstrap Core CSS -->
		<?php
			echo link_tag('assets/css/bootstrap.min.css');
			echo link_tag('assets/css/ark.css');
			echo link_tag('assets/css/sb-admin.css');
			echo link_tag('assets/css/bootstrap-wysihtml5.css');
			echo link_tag('assets/css/font-awesome.min.css');
		?>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="theme-style">
		<div id="wrapper">
			<!-- Navigation -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url(); ?>admin/dashboard">SB Admin</a>
				</div>
				<!-- Top Menu Items -->
				<ul class="nav navbar-right top-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<li <?php if( $page == 'dashboard' ) echo 'class="active"'?>>
							<a href="<?php echo site_url(); ?>admin/dashboard"><i class="fa fa-fw fa-home"></i> Dashboard</a>
						</li>
						<li <?php if( $page == 'events' ) echo 'class="active"'?>>
							<a href="<?php echo site_url(); ?>admin/events"><i class="fa fa-fw fa-calendar"></i> Events & Exhibitions</a>
						</li>
						<li <?php if( $page == 'collections' ) echo 'class="active"'?>>
							<a href="<?php echo site_url(); ?>admin/collections"><i class="fa fa-fw fa-database"></i> Collections</a>
						</li>
						<li <?php if( $page == 'news' ) echo 'class="active"'?>>
							<a href="<?php echo site_url(); ?>admin/news"><i class="fa fa-fw fa-list-ul"></i> News</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			<div id="page-wrapper">
				<div class="container-fluid">
					
					<?php echo $content; ?>

				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- /#page-wrapper -->
		</div>
		<!-- /#wrapper -->
		<!-- jQuery Version 1.11.0 -->
		<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<!-- Rich Text Editor JavaScript -->
		<script src="<?php echo base_url() ?>assets/js/wysihtml5-0.3.0.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap3-wysihtml5.js"></script>

		<script type="text/javascript">
			$('.textarea').wysihtml5(); // Editor
		</script>

		<?php if( $page == 'events') : ?>

			<script type="text/javascript">
				$('button#save-event').click( function() {
					$.post( "<?php echo site_url() ?>admin/add_event", $('form#form-add-event').serialize() )
					.done(function( result ) {
						alert( "Data Loaded: " + result );
					});
				});
			</script>

		<?php elseif( $page == 'collections') : ?>

			<script type="text/javascript">
				$('button#save-collection').click( function() {
					$.post( "<?php echo site_url() ?>admin/add_collection", $('form#form-add-collection').serialize() )
					.done(function( result ) {
						alert( "Data Loaded: " + result );
					});
				});
			</script>

		<?php endif; ?>
	</body>
</html>