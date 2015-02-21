<!-- <header class="header-bg">
	<div class="container">
		<div class="header-bg-text">
			<h1>BLOGS</h1>
			<p>A simple, one page website template for quickly building one page websites using Bootstrap 3.</p>
		</div>
	</div>
</header> -->
<!-- <div class="mini-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-offset-3">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">User > Abdurrahman Maududi</li>
				</ol>
			</div>
		</div>
	</div>
</div> -->

<!-- RIGHT -->
<div class="container box">
	<div class="row">
		<div class="col-md-9 col-md-offset-3">
			<div id="add-post">
				<button class="btn btn-danger btn-lg" data-toggle="modal" href='#write-blog'>
					<span class="fa fa-pencil"></span>&nbsp;&nbsp;<strong>write blog</strong>
				</button>
			</div>
		</div>
	</div>

	<!-- PROFILE -->
	<div class="row">
		<div class="col-md-3">
			<div id="prof-pic">
				<img src="<?php echo base_url() . 'img/blogs/kitten.jpg' ?>" alt="" class="img-responsive">
			</div>
			<div id="prof-info">
				<h3 id="prof-name">Abdurrahman Maududi&nbsp;<span class="fa fa-edit"></span></h3>
				<p id="prof-bio">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Fuga saepe optio aspernatur itaque cupiditate est dicta,
					quibusdam quia asperiores reiciendis?
					&nbsp;<span class="pull-right fa fa-edit"></span>
				</p>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<ul class="nav nav-pills">
							<li class="active"><a href="#">Posts</a></li>
							<li><a href="#">Drafts</a></li>
						</ul>
					</h3>
				</div>
				<div class="panel-body" id="user-posts">

					<?php for ($i=0; $i < 5; $i++) : ?>

					<div class="blog-item">
						.
						<div class="blog-item-body">
							<h4>
								<a href="<?php echo site_url(); ?>page/blogs/1">Visiting Transportation Museum</a>
								<div class="pull-right">
									<button class="btn btn-success"><span class="fa fa-fw fa-edit"></span>&nbsp;&nbsp;edit</button>
									<button class="btn btn-warning"><span class="fa fa-fw fa-trash-o"></span>&nbsp;&nbsp;delete</button>
								</div>
							</h4>
							<p class="blog-item-info"><span class="fa fa-fw fa-calendar"></span> 12 Dec 2014</p>
							<p>
								Pada permukaan otak kecil sapi-sapi itu dipasang elekroda (microchip) yang disebut Electro Encephalograph (EEG).
								EEG dipasang dipermukaan otak yang menyentuh titik (panel) rasa sakit, untuk merekam dan mencatat derajat rasa sakit ketika disembelih.
								<a href="" class="bolder">Read more &raquo;</a>
							</p>
						</div>
					</div>

					<?php endfor; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END RIGHT -->

<!-- MODAL BLOG -->
<div class="modal fade" id="write-blog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?php echo site_url(); ?>" class="form-horizontal" method="POST" role="form">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Post Something!</h4>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label for="inputBlogTitle" class="col-sm-2 control-label">Title</label>
						<div class="col-sm-10">
							<input type="text" name="blogTitle" id="inputBlogTitle" class="form-control" placeholder="Type title here ..." required="required" />
						</div>
					</div>
					<div class="form-group">
						<label for="inputBlogContent" class="col-sm-2 control-label">Content :</label>
						<div class="col-sm-10">
							<textarea name="blogContent" id="inputBlogContent" class="form-control textarea" required="required"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">
						<span class="fa fa-fw fa-pencil"></span>&nbsp; Post it!</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->