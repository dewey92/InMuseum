<section id="explanation">
	<h2>Explore Everything about Museums across Indonesia</h2>
</section>

<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<!-- <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class=""></li>
		<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="2" class=""></li>
	</ol> -->
	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
		<div class="item active">
			<!-- Set the first background image using inline CSS below. -->
			<div class="fill" style="background-image:url('<?php echo base_url() ?>assets/img/home-museums.jpg');"></div>
			<div class="carousel-caption">
				<h1>Have a Trip to Museums?</h1>
				<p class="big">
					Type your destination city and find the museums nearby
				</p>
				<div class="row">
					<form action="<?php echo site_url(); ?>" method="POST" role="form">
						<div class="input-group">
							<div class="col-md-7">
								<input type="text" name="museumCity" id="inputMuseumCity" class="form-control input-lg" placeholder="Type your destination city ..." autofocus />
								<div class="input-group-btn">
									<button type="submit" class="btn btn-lg btn-primary" type="button" >
										<span class="fa fa-search"></span>
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- <div class="item">
			Set the second background image using inline CSS below.
			<div class="fill" style="background-image:url('<?php echo base_url() ?>assets/img/home-events.jpg');"></div>
			<div class="carousel-caption">
				<h1>Events & Exhibitions</h1>
				<p class="big">
					Join the various events and exhibitions held by the museums
				</p>
				<a href="<?php echo site_url(); ?>page/events" class="btn btn-lg btn-primary col-md-4">Explore Events &rarr;</a>
			</div>
		</div> -->
		<!-- <div class="item">
			Set the third background image using inline CSS below.
			<div class="fill" style="background-image:url('<?php echo base_url() ?>assets/img/home-collections.jpg');"></div>
			<div class="carousel-caption">
				<h1>What's Inside the Museums</h1>
				<p class="big">
					Look at the rich museums collections for over 729,408 objects 
				</p>
				<a href="<?php echo site_url(); ?>page/events" class="btn btn-lg btn-primary col-md-4">Collections &rarr;</a>
			</div>
		</div> -->
	</div>
	<!-- Controls -->
	<!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a> -->
</header>

<div id="events-section">
	<div class="container">
		<h1>Events</h1>
		<!-- EVENTS -->
		<div class="row">
			<div class="col-md-3 col-xs-12">
				<div class="frame">
					<img src="<?php echo base_url() ?>img/event/event_1.jpg">
				</div>
				<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_1.jpg)"></div> -->
				<div class="featured-info">
					<h4><a href="<?php echo site_url() ?>page/events/1">Peder Balke</a></h4>
					<p>by <span class="bolder">Museum Brawijaya</span></p>
					<p>Date : 24 Sept - 29 Sept '14 </p>
					<p style="margin-top:10px">
						<span class="label label-default">#lectures</span>
					</p>
				</div>
			</div>
			<div class="col-md-3 col-xs-12">
				<div class="frame">
					<img src="<?php echo base_url() ?>img/event/event_2.jpg">
				</div>
				<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_2.jpg)"></div> -->
				<div class="featured-info">
					<h4><a href="<?php echo site_url() ?>page/events/1">Balinese Art Exhibition</a></h4>
					<p>by <span class="bolder">Museum Nasional</span></p>
					<p>Date : 26 Sept - 3 Nov '14 </p>
					<p style="margin-top:10px">
						<span class="label label-default">#exhibition</span>
					</p>
				</div>
			</div>
			<div class="col-md-3 col-xs-12">
				<div class="frame">
					<img src="<?php echo base_url() ?>img/event/event_3.jpg">
				</div>
				<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_3.jpg)"></div> -->
				<div class="featured-info">
					<h4><a href="<?php echo site_url() ?>page/events/1">Balinese Art Exhibition</a></h4>
					<p>by <span class="bolder">Museum Nasional</span></p>
					<p>Date : 26 Sept - 3 Nov '14 </p>
					<p style="margin-top:10px">
						<span class="label label-default">#exhibition</span>
					</p>
				</div>
			</div>
			<div class="col-md-3 col-xs-12">
				<div class="frame">
					<img src="<?php echo base_url() ?>img/event/event_4.jpg">
				</div>
				<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_4.jpg)"></div> -->
				<div class="featured-info">
					<h4><a href="<?php echo site_url() ?>page/events/1">New Artifacts Found</a></h4>
					<p>by <span class="bolder">Museum Bank Indonesia</span></p>
					<p>Date : 26 Sept - 1 Nov '14 </p>
					<p style="margin-top:10px">
						<span class="label label-default">#competition</span>
						<span class="label label-default">#event</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- NEWS -->
<div id="news-section">
	<div class="container">
		<div class="row">
			<div class="col-md-3 title-element">
				<h2>In the News</h2>
				<p>News about museums. Commentary and archival information about museums</p>
				<p>
					<a href="<?php echo site_url(); ?>page/news" class="btn btn-primary btn-block">MORE NEWS &raquo;</a>
				</p>
			</div>
			<div class="col-md-9 news-highlight">
				<div class="col-md-6 col-xs-12">
					<div class="news-item">
						<div class="row">
							<div class="col-xs-3 news-left">
								<div>Sunday</div>
								<div>06 Jan</div>
							</div>
							<div class="col-xs-9 news-right">
								<a href="<?php echo site_url(); ?>page/news/1">Hari Anti-korupsi</a>
								<div>by Museum KAI</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="news-item">
						<div class="row">
							<div class="col-xs-3 news-left">
								<div>Tuesday</div>
								<div>13 Jan</div>
							</div>
							<div class="col-xs-9 news-right">
								<a href="<?php echo site_url(); ?>page/news/1">Ajang Apresiasi film PIALA MAYA 2014</a>
								<div>by Museum Bank Indonesia</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="news-item">
						<div class="row">
							<div class="col-xs-3 news-left">
								<div>Thursday</div>
								<div>15 Jan</div>
							</div>
							<div class="col-xs-9 news-right">
								<a href="<?php echo site_url(); ?>page/news/1">Penghargaan Museum Lover</a>
								<div>by Museum Nasional</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="news-item">
						<div class="row">
							<div class="col-xs-3 news-left">
								<div>Monday</div>
								<div>09 Feb</div>
							</div>
							<div class="col-xs-9 news-right">
								<a href="<?php echo site_url(); ?>page/news/1">Bedah Buku Laut dan Kebudayaan</a>
								<div>by Museum Keramik Jakarta</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="news-item">
						<div class="row">
							<div class="col-xs-3 news-left">
								<div>Saturday</div>
								<div>14 Feb</div>
							</div>
							<div class="col-xs-9 news-right">
								<a href="<?php echo site_url(); ?>page/news/1">Festival Pembaca Indonesia</a>
								<div>by Museum Brawijaya</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="news-item">
						<div class="row">
							<div class="col-xs-3 news-left">
								<div>Friday</div>
								<div>20 Feb</div>
							</div>
							<div class="col-xs-9 news-right">
								<a href="<?php echo site_url(); ?>page/news/1">Launching Program Kids Read</a>
								<div>by Museum KAI</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- COLLECTIONS -->
<div id="coll-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align:center">
				<h2>Explore</h2>
				<p>Explore what's inside the museums</p>
				<!-- <p>
					<a href="<?php echo site_url(); ?>page/news" class="btn btn-default">READ MORE NEWS</a>
				</p> -->
			</div>
			<div class="col-md-12">
				<div class="row" id="masonry-grid">
					<?php foreach($collections as $row) : ?>
	
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 grid-item">
						<div class="thumbnail">
							<img src="<?php echo base_url() . 'img/collection/' . $row->foto_koleksi ?>" class="img-responsive" alt="">
							<div class="caption">
								<h4><?php echo $row->nama_koleksi; ?> <span class="title">(<?php echo $row->nama_kategori_koleksi; ?>)</span></h4>
								<p><a href="" title=""><?php echo $row->nama_museum; ?></a></p>
							</div>
						</div>
					</div>
	
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>