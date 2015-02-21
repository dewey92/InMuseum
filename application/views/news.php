<header class="header-bg">
	<div class="container">
		<div class="header-bg-text">
			<h1>NEWS</h1>
			<p>News about museums. Commentary and archival information about museums</p>
		</div>
	</div>
</header>
<div class="mini-bar">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>">Home</a></li>
			<li class="active">News</li>
		</ol>
	</div>
</div>

<!-- RIGHT -->
<div class="container box">
	<!-- NEWS -->
	<div class="row">
		<div class="col-md-9">
			<div class="wrap-content">
				<div class="head-title">
					<h1>Latest News</h1>
				</div>

				<?php for ($i=0; $i < 5; $i++) : ?>

				<div class="main-news">
					<div class="row">
						<div class="col-md-4">
							<a href="<?php echo site_url(); ?>page/news/1">
								<img src="<?php echo base_url() ?>img/news/bule.jpg" class="img-responsive">
							</a>
						</div>
						<div class="col-md-8" style="padding-left:0">
							<h4 class="bolder"><a href="<?php echo site_url(); ?>page/news/1">New Artifacts Found at Singosari</a></h4>
							<p class="by-museum">by <a href="<?php echo site_url(); ?>page/profile/1">Museum Nasional</a> | 24 December 2014</p>
							<p class="news-caption">
								For 33 years, Dazzle contemporary jewellery selling exhibitions have been an eagerly anticipated annual barometer of all that is new, quality and exciting in the sector,
								bringing together the most innovative and skilled proponents of the art; whether the big, collectable names or rising stars, hand picked from the annual graduate shows.
								<br><a href="" class="bolder">Read more &raquo;</a>
							</p>
						</div>
					</div>
				</div>

				<?php endfor; ?>

				<!-- PAGINATION -->
				<div class="row">
					<div class="col-sm-12">
						<div class="more-button vertical-center flex-column">
							<button class="btn btn-default">Load More ...</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- HOT -->
		<div class="col-md-3">
			<div class="row">
					<div class="col-md-12">
						<div class="head-title">
							<h2>Search News</h2>
						</div>
						<div class="col-md-12 col-xs-12">
							<form action="<?php echo site_url(); ?>" method="POST" class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputOnlyNews">by Name</label>
									<div class="input-group">
										<input type="text" name="onlyNews" id="inputOnlyNews" class="form-control" placeholder="search events ...">
										<div class="input-group-btn">
											<button type="submit" class="btn btn-primary" type="button" >
												<span class="fa fa-search"></span>
											</button>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="inputOnlyMuseums">by Museum</label>
									<div class="input-group">
										<select name="onlyMuseums" id="inputOnlyMuseums" class="form-control">
											<option value="0" selected>All</option>
											<?php foreach( $daftar_museum as $row ): ?>
											<option value="<?php echo $row->id_museum; ?>"><?php echo $row->nama_museum; ?></option>
											<?php endforeach; ?>
										</select>
										<div class="input-group-btn">
											<button type="submit" class="btn btn-primary" type="button" >
												<span class="fa fa-search"></span>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<div class="head-title">
						<h2>Hot News</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="pop-news">
								<h4 class="bolder"><a href="<?php echo base_url(); ?>page/events/1">Lecture on The Awareness of Indonesian Culture</a></h4>
								<p>by <a href="">Museum Bank Indonesia</a></p>
							</div>
							<div class="pop-news">
								<h4 class="bolder"><a href="<?php echo base_url(); ?>page/events/1">Ajang Apresiasi film PIALA MAYA 2014</a></h4>
								<p>by <a href="">Museum Bank Indonesia</a></p>
							</div>
							<div class="pop-news">
								<h4 class="bolder"><a href="<?php echo base_url(); ?>page/events/1">Hari Anti-korupsi</a></h4>
								<p>by <a href="">Museum Vredeburg</a></p>
							</div>
							<div class="pop-news">
								<h4 class="bolder"><a href="<?php echo base_url(); ?>page/events/1">Bedah Buku Laut dan Kebudayaan</a></h4>
								<p>by <a href="">Museum Keramik Jakarta</a></p>
							</div>
							<div class="pop-news">
								<h4 class="bolder"><a href="<?php echo base_url(); ?>page/events/1">Festival Pembaca Indonesia</a></h4>
								<p>by <a href="">Museum Brawijaya</a></p>
							</div>
							<div class="pop-news">
								<h4 class="bolder"><a href="<?php echo base_url(); ?>page/events/1">Launching Program Kids Read</a></h4>
								<p>by <a href="">Museum KAI</a></p>
							</div>
							<div class="pop-news">
								<h4 class="bolder"><a href="<?php echo base_url(); ?>page/events/1">Seminar Kajian Museum Nasional</a></h4>
								<p>by <a href="">Museum Nasioal</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END RIGHT -->