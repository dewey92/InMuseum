<header class="header-bg header-bg-cover">
	<div class="container">
		<div class="header-bg-text">
			<h1>COLLECTIONS</h1>
			<p>The following collections are displayed according to the museums paricipating in the site</p>
		</div>
	</div>
</header>
<div class="mini-bar">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>">Home</a></li>
			<li><a href="<?php echo site_url(); ?>page/collections">Collections</a></li>
			<li class="active">Museum Nasional</li>
		</ol>
	</div>
</div>

<!-- RIGHT -->
<div class="container box">
	<div class="row">
		<div class="col-md-12">
			<div class="head-title">
				<h1>Collections :: <a tabindex="0" class="text-muted go-to-museum" data-toggle="popover" data-placement="right">Museum Nasional</a></h1>
			</div>
			<!-- FILTER -->
			<div class="filter">
				<div class="row">
					<div class="col-md-8 col-lg-6 col-lg-offset-3">
						<form action="" method="POST" role="form">
							<div class="form-group has-feedback">
								<label class="sr-only" for="searchCollections">label</label>
								<input type="text" class="form-control input-lg" id="searchCollections" placeholder="Search collections ..." aria-describedby="helpBlock" autofocus />
								<span class="fa fa-lg fa-search form-control-feedback" aria-hidden="true"></span>
								<span id="helpBlock" class="help-block">Start typing collection names, its museum, or cities</span>
							</div>
						</form>
					</div>
					<div class="col-md-4 col-lg-3 col-lg-offset">
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">by Type <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">All</a></li>
									<li class="divider"></li>
									<?php foreach($classifications as $row) : ?>
										<li data-toggle="tooltip" data-placement="left" title="Description goes here">
											<a href="#" title=""><?php echo $row->nama_kategori_koleksi . ' (' . rand(20,1000) . ')'; ?></a>
										</li>
									<?php endforeach;?>
								</ul>
							</div>
							<!-- <div class="btn-group">
								<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">View <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Museums</a></li>
									<li><a href="#">Items</a></li>
								</ul>
							</div> -->
							<div class="btn-group pull-right">
								<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Sort <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">by Newest</a></li>
									<li><a href="#">A > Z</a></li>
									<li><a href="#">Z > A</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h2>38,721 results found</h2>
			<div class="row">
				<div class="col-md-12">
					<div class="row" id="masonry-grid">
						<?php $this->load->helper('directory'); 
						foreach ( directory_map('./img/collection/') as $map) : ?>
						
						<div class="col-xs-6 col-sm-4 col-md-3 grid-item">
							<div class="thumbnail">
								<a href="#">
									<img src="<?php echo base_url() . 'img/collection/' . $map; ?>" class="img-responsive">
								</a>
								<div class="caption">
									<h5>Kendi Sejarah</h5>
									<p>Rectangular pedestal with seven horses, the heads of which have been chopped off</p>
								</div>
							</div>
						</div>
						
						<?php endforeach; ?>

					</div>

					<!-- LOAD -->
					<div class="row">
						<div class="col-sm-12">
							<div class="more-button vertical-center flex-column">
								<button class="btn btn-default">Load More ...</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- END RIGHT -->

<!-- MODAL -->
<div class="modal fade" id="modal-img-collection">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Kendi Sejarah</h4>
			</div>
			<div class="modal-body">
				<div class="flex-center">
					<img src="" class="img-responsive">
				</div>
				<h4>Description</h4>
				<p>
					This hand plaited object, made from the leaves of the lontar palm, represents Dewi Sri (the Goddess of Rice)
					and is placed amongst the offerings during Persembahan (offering) rituals. Additionally,
					after each harvest season, when every grain of rice has been stored in the granary,
					Cili are also placed inside these storage facilities, known as lumbung padi
				</p>
				<hr>
				<h4>More Detail</h4>
				<dl class="dl-horizontal">
					<dt>Classifications</dt>
					<dd>Ethnography</dd>
					<dt>Origin</dt>
					<dd>Vietnam</dd>
					<dt>Found</dt>
					<dd>Jakarta</dd>
					<dt>Age of Use</dt>
					<dd>15th Century</dd>
				</dl>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->