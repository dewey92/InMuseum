<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>emuseum</title>

		<?php

		echo link_tag('assets/css/bootstrap.min.css');
		echo link_tag('assets/css/bootstrapXL.css');
		echo link_tag('assets/css/font-awesome.min.css');
		echo link_tag('assets/css/bootstrap-social.css');
		echo link_tag('assets/css/custom.css');

		switch ($page) {
			case 'index':
				echo link_tag('assets/css/index.css');
				break;
			case 'events':
				echo link_tag('assets/css/events.css');
				echo link_tag('assets/css/responsive-calendar.css');
				break;
			case 'news':
				echo link_tag('assets/css/news.css');
				break;
			case 'blogs':
				echo link_tag('assets/css/blogs.css');
				echo link_tag('assets/css/bootstrap-wysihtml5.css');
				break;
			case 'collections':
				echo link_tag('assets/css/collections.css');
				break;
			case 'participants':
				echo link_tag('assets/css/museums.css');
				break;
			case 'user_profile':
				echo link_tag('assets/css/user_profile.css');
				echo link_tag('assets/css/bootstrap-wysihtml5.css');
				break;
			default:
				# code...
				break;
		}; ?>

		<script src="<?php echo base_url() ;?>assets/js/modernizr.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	</head>
	<body>
		<!-- NAVBAR TOP -->
		<nav class="navbar navbar-default navbar-fixed-top" id="main-nav" role="navigation">
			<div class="container-fluid container-nav">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url(); ?>">InMuseum</a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<!-- <form class="navbar-form navbar-left" action="<?php echo site_url(); ?>page/search" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="What are you looking for?">
						</div>
						<button type="submit" class="btn btn-default">
							<span class="fa fa-search"></span>&nbsp;&nbsp;Search
						</button>
					</form>
					<ul class="nav navbar-nav">
						<li><a href="#" data-toggle="modal" data-target="#adv-search">Advanced Search &raquo;</a></li>
					</ul> -->
					<ul class="nav navbar-nav navbar-right">
						<li <?php if( $page == 'index' ) echo 'class="active"'?>>
							<a href="<?php echo site_url(); ?>">Home</a>
						</li>
						<li <?php if( $page == 'participants' ) echo 'class="active"'?>>
							<a href="<?php echo site_url(); ?>page/participants">Museums List</a>
						</li>
						<li class="dropdown <?php if( $page == 'events' ) echo 'active'; ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Events <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li <?php if( $page == 'events' ) echo 'class="active"'?>>
									<a href="<?php echo site_url(); ?>page/events">All</a>
								</li>
								<li class="divider"></li>
								<?php foreach ($kategori_event as $row) : ?>

								<li><a href="<?php echo site_url(); ?>page/events">
									<?php echo $row->nama_kategori_event; ?>
								</a></li>

								<?php endforeach; ?>
							</ul>
						</li>
						<li <?php if( $page == 'collections' ) echo 'class="active"'?>>
							<a href="<?php echo site_url(); ?>page/collections">Collections</a>
						</li>
						<li <?php if( $page == 'news' ) echo 'class="active"'?>>
							<a href="<?php echo site_url(); ?>page/news">News</a>
						</li>
						<li <?php if( $page == 'blogs' ) echo 'class="active"'?>>
							<a href="<?php echo site_url(); ?>page/blogs">Blog</a>
						</li>
						<!-- <li <?php if( $page == 'contact' ) echo 'class="active"'?>>
							<a href="<?php echo site_url(); ?>page/contact">Contact</a>
						</li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="fa fa-fw fa-globe"></span>
								Language <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li class="active"><a href="">
									ENGLISH
								</a></li>
								<li><a href="">
									INDONESIAN
								</a></li>
							</ul>
						</li>

						<?php if ( !  $this->session->userdata('id_user') ) : ?>
						<li>
							<a href="#" data-toggle="modal" data-target="#signin">
								<span class="fa fa-fw fa-power-off"></span> Login / Register
							</a>
						</li>
						<?php else : ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="fa fa-fw fa-user"></span> Waspada <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li <?php if( $page == 'user_profile' ) echo 'class="active"'?>>
									<a href="<?php echo site_url(); ?>page/user_profile"><span class="fa fa-fw fa-user"></span> Profile</a>
								</li>
								<li class="divider"></li>
								<li><a href="<?php echo site_url(); ?>page/log_out"><span class="fa fa-fw fa-power-off"></span> Logout</a></li>
							</ul>
						</li>
						<?php endif; ?>
						<li id="search-box"><a href="" data-toggle="modal" data-target="#adv-search"><span class="fa fa-lg fa-search"></span></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<div id="box-overlay"></div>
		<nav id="quick-list">
			<div id="wrapper-quick-list">
				<p>A quick access to the list of museums available on the site</p>
				<form action="" method="POST" role="form">
					<div class="form-group">
						<label for="quickAccess" class="from-label sr-only">label</label>
						<input type="text" class="form-control" id="quickAccess" placeholder="Type a museum or city ...">
					</div>
				</form>
				<hr>
				<div class="list-group">
					<?php foreach($daftar_museum as $row): ?>
					<a href="#" class="list-group-item"><?php echo $row->nama_museum;?></a>
					<?php endforeach; ?>
				</div>
			</div>
			<div id="toggle-quick-list">
				<span class="fa fa-fw fa-2x fa-institution"></span>
				<p>Quick Access</p>
			</div>
		</nav>
		<div id="main-body">
			<div id="main-content">
				
				<?php echo $content; ?>

				<footer>
					<div class="container">
						<div class="row">
							<!-- CONTACT -->
							<div class="col-md-3">
								<h4>CONTACT US</h4>
								<address>
									<strong>Twitter, Inc.</strong><br>
									795 Folsom Ave, Suite 600<br>
									San Francisco, CA 94107<br>
									<abbr title="Phone">P:</abbr> (123) 456-7890
								</address>

								<address>
									<strong>Full Name</strong><br>
									<a href="mailto:#">first.last@example.com</a>
								</address>
							</div>
							<!-- EVENTS -->
							<div class="col-md-3">
								<h4>EVENTS</h4>
								<ul class="list-unstyled">
									<?php foreach ($kategori_event as $row) {
										echo '<li>' . anchor('page/events', $row->nama_kategori_event) . '</li>';
									} ?>
								</ul>
							</div>
							<!-- COLLECTIONS -->
							<div class="col-md-3">
								<h4>COLLECTIONS</h4>
								<ul class="list-unstyled">
									<?php foreach ($kategori_koleksi as $row) {
										echo '<li>' . anchor('page/events', $row->nama_kategori_koleksi) . '</li>';
									} ?>
								</ul>
							</div>
							<!-- MORE -->
							<div class="col-md-3">
								<h4>MORE</h4>
								<ul class="list-unstyled">
									<li><a href="">News</a></li>
									<li><a href="">Participants</a></li>
									<li><a href="">Blog</a></li>
									<li><a href="">About</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div id="footer-bottom">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">All Content is ©2012-2015 InMuseum Art and Culture Collaboration. All Rights Reserved.</div>
								<div class="col-sm-6"></div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>

		<!-- Modal Adv Search -->
		<div class="modal fade" id="adv-search">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="<?php echo site_url(); ?>page/search" method="POST" role="form">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Search</h4>
						</div>
						<div class="modal-body">					
							<div class="form-group">
								<label for="select-search">Select Field</label>
								<select name="categorySearch" id="select-search" class="form-control">
									<option value="all" selected>All</option>
									<option value="events">Events</option>
									<option value="news">News</option>
									<option value="blogs">Blogs</option>
									<option value="collections">Collections</option>
									<option value="museums">Museums</option>
								</select>
							</div>
							<div class="form-group">
								<label for="inputQuery">Query :</label>
								<input type="text" name="querySearch" id="inputQuery" class="form-control input-lg" required placeholder="Type your query search here...">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">
								<span class="fa fa-fw fa-search"></span>&nbsp; Search</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- Modal Sign in -->
		<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="<?php echo site_url(); ?>page/log_in" method="post" class="form-horizontal" role="form">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel">
								Login/Register
								<abbr title="why sign in?">
									<span class="fa fa-info-circle"></span>
								</abbr>
							</h4>
						</div>
						<div class="modal-body">
		
							<h4>Log in with : </h4>
		
							<div class="row">
								<div class="col-md-4">
									<a class="btn btn-block btn-social btn-google-plus" href="<?php echo site_url(); ?>page/log_in">
										<i class="fa fa-google-plus"></i> Google
									</a>
								</div>
								<div class="col-md-4">
									<a class="btn btn-block btn-social btn-facebook" href="<?php echo site_url(); ?>page/log_in">
										<i class="fa fa-facebook"></i> Facebook
									</a>
								</div>
								<div class="col-md-4">
									<a class="btn btn-block btn-social btn-twitter" href="<?php echo site_url(); ?>page/log_in">
										<i class="fa fa-twitter"></i> Twitter
									</a>
								</div>
							</div>

							<hr>

							<div id="slide-signin">
								<p>Or Log in with Your Account</p>
								
								<div class="form-group">
									<label for="inputUsername" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputUsername" name="username" placeholder="Username.." required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPass" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPass" name="password" placeholder="Password..." required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										<input type="submit" class="btn btn-primary" value="Sign In" />
									</div>
								</div>
							</div>
							<div id="slide-signup" style="display:none">
								<p>Or sign up if you dont have account</p>
								
								<div class="form-group">
									<label for="inputEmail" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassUp" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPassUp" name="password-up" placeholder="Password..." required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassUp2" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPassUp2" name="password-up2" placeholder="Confirm password..." required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										<input type="submit" class="btn btn-primary" value="Sign Up" />
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" id="button-to-signup">Don't have account yet? &raquo;</a>
							<a href="#" id="button-to-signin" style="display:none">&laquo; Or Sign in</a>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/typeahead.min.js"></script>
		<script>
			$('.dropdown-menu').on('click', function(e) {
				e.stopPropagation();
			});

			$('.disabled').find('a').removeAttr('href');
			$('#main-body').css('top', $('.navbar#main-nav').height());

			// Buat signin
			$('#button-to-signup').click(function(){
				$('#slide-signin').fadeOut();
				$('#button-to-signup').fadeOut()
				.queue(function() {
					$('#slide-signup').fadeIn();
					$('#button-to-signin').fadeIn();

					$( this ).dequeue();
				});
			});
			$('#button-to-signin').click(function(){
				$('#slide-signup').fadeOut();
				$('#button-to-signin').fadeOut()
				.queue(function() {
					$('#slide-signin').fadeIn();
					$('#button-to-signup').fadeIn();

					$( this ).dequeue();
				});
			});

			// Buat quick-list
			$(function() {
				$('#toggle-quick-list').click(function() {
					$('#quick-list').toggleClass('open');
					$('#box-overlay').toggleClass('open');
					$('#quickAccess').focus();
				});
				$('#box-overlay').click(function() {
					$('#quick-list').removeClass('open');
					$(this).removeClass('open');
				});
			});

			// Go to museum
			$('.go-to-museum').popover({
				trigger: 'focus',
				html: true,
				content: '<a href="<?php echo site_url()?>page/profile/1">Go to full profile &rarr;</a>'
			});

		</script>

		<?php if ($page == 'index') : ?>

		<script>
			$(function() {
				var inputCity = $('#inputMuseumCity');
				var len = inputCity.val().length;
				inputCity[0].setSelectionRange(len, len);
			});
		</script>

		<?php elseif ($page == 'collections') : ?>

		<script src="<?php echo base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/masonry.pkgd.min.js"></script>
		<script>
			/*$('input#inputMuseumCity').focus(function() {
				$('#myCarousel').carousel('pause');
			});*/
			// jQuery
			var $container = $('#masonry-grid').masonry({
			  itemSelector: '.grid-item'
			});

			$container.imagesLoaded( function() {
				$container.masonry();
			});

			$('.thumbnail a').click( function() {
				var img = $(this).parent('.thumbnail').find('img');
				$('#modal-img-collection img').attr('src', $(img).attr('src'));

				$('#modal-img-collection').modal('show');
			});

			//Tooltip
			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			});

			/*(function($) {
 
				$.fn.parallax = function(options) {
					var windowHeight = $(window).height();

					// Establish default settings
					var settings = $.extend({
						speed        : 0.15
					}, options);
			
					// Iterate over each object in collection
					return this.each( function() {
			 
						// Save a reference to the element
						var $this = $(this);
			 
						// Set up Scroll Handler
						$(document).scroll(function(){
			 
								var scrollTop = $(window).scrollTop();
									var offset = $this.offset().top;
									var height = $this.outerHeight();
			 
						// Check if above or below viewport
						if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
							return;
						}
			 
						var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
			 
							 // Apply the Y Background Position to Set the Parallax Effect
							$this.css('background-position', 'center ' + yBgPosition + 'px');
							
						});
					});
				}
			}(jQuery));
			$('.bg-index').parallax();*/

			// Image
			/*$(function() {
				resizeImg();
				$(window).resize(function() {
					resizeImg();
				});

				function resizeImg() {
					var elm = $('.img-bg');
					elm.each(function(i) {
						$(this).css( 'height', $(this).width() * (9/16) );
					});
				}
			});*/

		</script>

		<?php elseif ($page == 'blogs' OR $page == 'user_profile' ) : ?>

		<script src="<?php echo base_url() ?>assets/js/wysihtml5-0.3.0.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap3-wysihtml5.js"></script>

		<script type="text/javascript">
			$('.textarea').wysihtml5(); // Editor
		</script>

		<?php elseif ($page == 'events' ) : ?>

		<script src="<?php echo base_url() ?>assets/js/responsive-calendar.min.js"></script>
		<script>
			$( document ).ready( function() {
				$('.responsive-calendar').responsiveCalendar({
					events: {
						"2015-02-27": {"number": 5, "badgeClass": "badge-warning", "url": "http://w3widgets.com/responsive-calendar"},
						"2015-02-26": {"number": 1, "badgeClass": "badge-warning", "url": "http://w3widgets.com"}, 
						"2015-02-03": {"number": 3, "badgeClass": "badge-error"}
					}
				});
			});
		</script>

		<?php elseif ($page == 'participants' ) : ?>

		<script>
			$('#searchMuseums').typeahead({
				source: <?php echo $kota; ?>
			});
		</script>

		<?php endif; ?>

	</body>
</html>