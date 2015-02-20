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
			<li class="active">Collections</li>
		</ol>
	</div>
</div>

<!-- RIGHT -->
<div class="box">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="head-title">
					<h1>Collections :: <span class="text-muted">all</span></h1>
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
				<h2>749,236 results found</h2>
				<div class="row-colls" onclick="location.href='<?php echo site_url(); ?>page/collections/1'">
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo base_url(); ?>img/participants/museum-angkut.jpg" class="img-mus">
							<p class="museum-name"><span class="bolder">Musuem Angkut</span></p>
							<p class="museum-info">Batu, Jawa Timur</p>
							<p class="museum-info">90 items</p>
						</div>
						<div class="col-md-9">
							<?php foreach( $collections as $row ) : ?>
				
							<img src="<?php echo base_url() . 'img/collection/' . $row->foto_koleksi; ?>" class="img-coll">
				
							<?php endforeach; ?>
				
							<div class="more">
								<div class="more-item">More</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-colls" onclick="location.href='<?php echo site_url(); ?>page/collections/1'">
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo base_url(); ?>img/participants/museum-bank-indonesia.jpg" class="img-mus">
							<p class="museum-name"><span class="bolder">Musuem Bank Indonesia</span></p>
							<p class="museum-info">Jakarta Pusat</p>
							<p class="museum-info">294 items</p>
						</div>
						<div class="col-md-9">
							<?php foreach( $collections as $row ) : ?>
				
							<img src="<?php echo base_url() . 'img/collection/' . $row->foto_koleksi; ?>" class="img-coll">
				
							<?php endforeach; ?>
				
							<div class="more">
								<div class="more-item">More</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-colls" onclick="location.href='<?php echo site_url(); ?>page/collections/1'">
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo base_url(); ?>img/participants/museum-brawijaya.jpg" class="img-mus">
							<p class="museum-name"><span class="bolder">Musuem Brawijaya</span></p>
							<p class="museum-info">Malang</p>
							<p class="museum-info">37 items</p>
						</div>
						<div class="col-md-9">
							<?php foreach( $collections as $row ) : ?>
				
							<img src="<?php echo base_url() . 'img/collection/' . $row->foto_koleksi; ?>" class="img-coll">
				
							<?php endforeach; ?>
				
							<div class="more">
								<div class="more-item">More</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-colls" onclick="location.href='<?php echo site_url(); ?>page/collections/1'">
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo base_url(); ?>img/participants/museum-kereta-api.jpg" class="img-mus">
							<p class="museum-name"><span class="bolder">Musuem KAI</span></p>
							<p class="museum-info">Ambarawa, Jawa Tengah.</p>
							<p class="museum-info">26 items</p>
						</div>
						<div class="col-md-9">
							<?php foreach( $collections as $row ) : ?>
				
							<img src="<?php echo base_url() . 'img/collection/' . $row->foto_koleksi; ?>" class="img-coll">
				
							<?php endforeach; ?>
				
							<div class="more">
								<div class="more-item">More</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-colls" onclick="location.href='<?php echo site_url(); ?>page/collections/1'">
					<div class="row">
						<div class=" col-xs-12 col-md-3">
							<img src="<?php echo base_url(); ?>img/participants/museum-nasional.jpg" class="img-mus">
							<p class="museum-name"><span class="bolder">Musuem Nasional</span></p>
							<p class="museum-info">Jakarta Pusat</p>
							<p class="museum-info">51 items</p>
						</div>
						<div class=" col-xs-12 col-md-9">
							<?php foreach( $collections as $row ) : ?>
									
							<div class="collections-wrapper">
								<img src="<?php echo base_url() . 'img/collection/' . $row->foto_koleksi; ?>" class="img-coll">
							</div>
									
							<?php endforeach; ?>
									
							<div class="more">
								<div class="more-item">More</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END RIGHT -->