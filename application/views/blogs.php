<header class="header-bg header-bg-cover">
	<div style="background: rgba(0,0,0,0.8)"></div>
	<div class="container">
		<div class="header-bg-text">
			<h1>BLOG</h1>
			<p>InMuseum Bloog brings together perspectives from our members and an expanding network of guest contributors, exploring provocative art and ideas from around the world.</p>
		</div>
	</div>
</header>
<div class="mini-bar">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Blogs</li>
		</ol>
	</div>
</div>

<div class="container">
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<strong><span class="fa fa-info-circle"></span> Info</strong> Please 
		<a href="" class="alert-link" data-toggle="modal" data-target="#signin">login</a> to be able to write blogs.
	</div>
</div>

<!-- RIGHT -->
<div class="container">
	<!-- RECENT BLOGS -->
	<div class="row">
		<div class="col-md-9">
			<div class="wrap-content">
				<div class="head-title">
					<h2>Recent Posts</h2>
				</div>
				
				<?php for ($i=0; $i < 5; $i++) : ?>
				
				<div class="blog-item">
					<img class="author-photo img-circle" src="<?php echo base_url() . 'img/blogs/kitten.jpg' ?>" alt="Kitten">
					<div class="blog-item-body">
						<h4><a href="<?php echo site_url(); ?>page/blogs/1">Visiting Transportation Museum</a></h4>
						<p class="blog-item-info">
							<span class="fa fa-fw fa-user"></span> by <a href="">Abdurrahman Maududi</a> | 
							<span class="fa fa-fw fa-calendar"></span> 12 Dec 2014
						</p>
						<p>
							Hampir 2 tahun saya tinggal di Ibukota Jakarta, tapi tak sekalipun saya pernah menginjakkan kaki di museum nasional,
							padahal hampir setiap hari saya melewati gedung yang terletak tepat di depan halte busway Monas ini.
							Dengan seorang teman, akhirnya saya memutuskan untuk mengunjungi museum nasional atau lebih dikenal dengan sebutan museum gajah.
							<a href="" class="bolder">Read more &raquo;</a>
						</p>
					</div>
				</div>
				
				<?php endfor; ?>
				
				<!-- LOAD -->
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="more-button">
							<button class="btn btn-default col-xs-12">Load More ...</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- POPULAR BLOGS -->
		<div class="col-md-3">
			<div class="right-right">
				<div class="row">
					<div class="col-md-12">
						<div class="head-title">
							<h2>Search Blogs</h2>
						</div>
						<div class="col-md-12 col-xs-12">
							<form action="<?php echo site_url(); ?>" method="POST" class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputOnlyBlogs">by Keyword</label>
									<div class="input-group">
										<input type="text" name="onlyBlogs" id="inputOnlyBlogs" class="form-control" placeholder="search blogs ...">
										<div class="input-group-btn">
											<button type="submit" class="btn btn-primary" type="button" >
												<span class="fa fa-search"></span>
											</button>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="blogArchieve">Archieve</label>
									<div class="input-group">
										<ul class="list-unstyled">
											<li><a href="#">November 2014</a></li>
											<li><a href="#">December 2014</a></li>
											<li><a href="#">January 2015</a></li>
											<li><a href="#">February 2015</a></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<div class="head-title">
							<h2>Featured Posts</h2>
						</div>
					</div>
					<div class="col-md-12 col-xs-12 content">
						<h4><a href="<?php echo base_url(); ?>page/blogs/1">My Experience in Digging Artifact</a></h4>
						<p>
							by <a href="" class="by-museum">Haq Faruqie</a> | 13 October 2014
						</p>
					</div>
					<div class="col-md-12 col-xs-12 content">
						<h4><a href="<?php echo base_url(); ?>page/blogs/1">Family Trip: Museum!</a></h4>
						<p>
							by <a href="" class="by-museum">Ali Fahmi</a> | 8 September 2014
						</p>
					</div>
					<div class="col-md-12 col-xs-12 content">
						<h4><a href="<?php echo base_url(); ?>page/blogs/1">Views on Indonesian Museums</a></h4>
						<p>
							by <a href="" class="by-museum">Fatah Hilman</a> | 29 Desember 2014
						</p>
					</div>
					<div class="col-md-12 col-xs-12 content">
						<h4><a href="<?php echo base_url(); ?>page/blogs/1">My Experience in Digging Artifact</a></h4>
						<p>
							by <a href="" class="by-museum">Haq Faruqie</a> | 13 October 2014
						</p>
					</div>
					<div class="col-md-12 col-xs-12 content">
						<h4><a href="<?php echo base_url(); ?>page/blogs/1">Family Trip: Museum!</a></h4>
						<p>
							by <a href="" class="by-museum">Ali Fahmi</a> | 8 September 2014
						</p>
					</div>
					<div class="col-md-12 col-xs-12 content">
						<h4><a href="<?php echo base_url(); ?>page/blogs/1">Views on Indonesian Museums</a></h4>
						<p>
							by <a href="" class="by-museum">Fatah Hilman</a> | 29 Desember 2014
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END RIGHT -->