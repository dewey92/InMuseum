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
				<p>
					Find the museums nearby
				</p>
				<form action="<?php echo site_url(); ?>" method="POST" role="form">
					<div class="form-group wrap-form-mega">
						<div class="wrap-icon-mega">
							<span class="fa fa-4x fa-map-marker"></span>
						</div>
						<input type="text" name="museumCity" id="inputMuseumCity" class="form-control input-lg form-mega" value="Depok" placeholder="Type your destination city ..." autocomplete="off" autofocus />
					</div>
				</form>
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

<!-- MUSEUMS -->
<div class="home-section">
	<div class="container">
		<h1>Museums near 'Depok'&nbsp;&nbsp;<small><a href="<?php echo site_url(); ?>page/participants">View all museums in the city &rarr;</a></small></h1>
		<div class="row flex">
			<div class="col-md-3 col-xs-12 flex">
				<div class="border-inset flex-item">
					<div class="frame">
						<img src="<?php echo base_url() ?>img/participants/museum-bank-indonesia.jpg">
					</div>
					<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_1.jpg)"></div> -->
					<div class="wrap-item-caption">
						<h4><a href="<?php echo site_url() ?>page/profile/1">Museum Bank Indonesia</a></h4>
						<p>Jl. Pintu Besar Utara No.4, Kota Jakarta Barat, DKI Jakarta 11110</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 flex">
				<div class="border-inset flex-item">
					<div class="frame">
						<img src="<?php echo base_url() ?>img/participants/museum-vredeburg.jpg">
					</div>
					<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_2.jpg)"></div> -->
					<div class="wrap-item-caption">
						<h4><a href="<?php echo site_url() ?>page/profile/1">Museum Vredeburg</a></h4>
						<p>Jl Jend A. Yani no 6, DIY Yogyakarta</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 flex">
				<div class="border-inset flex-item">
					<div class="frame">
						<img src="<?php echo base_url() ?>img/participants/museum-angkut.jpg">
					</div>
					<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_3.jpg)"></div> -->
					<div class="wrap-item-caption">
						<h4><a href="<?php echo site_url() ?>page/profile/1">Museum Angkut</a></h4>
						<p>Jalan Terusan Sultan Agung No.2, Kota Batu, Jawa Timur 65311</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 flex">
				<div class="border-inset flex-item">
					<div class="frame">
						<img src="<?php echo base_url() ?>img/participants/museum-kereta-api.jpg">
					</div>
					<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_4.jpg)"></div> -->
					<div class="wrap-item-caption">
						<h4><a href="<?php echo site_url() ?>page/profile/1">Museum Kereta Api</a></h4>
						<p>Jl. Stasiun, No. 1, Ambarawa, Jawa Tengah</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- EVENTS -->
<div class="home-section">
	<div class="container">
		<h1>Ongoing Events&nbsp;&nbsp;<small><a href="<?php echo site_url(); ?>page/events">View all events &rarr;</a></small></h1>
		<div class="row">
			<div class="col-sm-6 col-md-3 col-xs-12">
				<div class="border-inset">
					<div class="frame">
						<img src="<?php echo base_url() ?>img/event/event_1.jpg">
					</div>
					<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_1.jpg)"></div> -->
					<div class="wrap-item-caption">
						<h4><a href="<?php echo site_url() ?>page/events/1">New Artifacts Found</a></h4>
						<p class="event-by-museum">by <span class="bolder">Museum Brawijaya</span></p>
						<time>3 - 12 March 2015</time>
						<p style="margin-top:10px">
							<span class="label label-default">#seminar</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 col-xs-12">
				<div class="border-inset">
					<div class="frame">
						<img src="<?php echo base_url() ?>img/event/event_2.jpg">
					</div>
					<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_2.jpg)"></div> -->
					<div class="wrap-item-caption">
						<h4><a href="<?php echo site_url() ?>page/events/1">Train Prototype Workshop</a></h4>
						<p>by <span class="bolderprofile">Museum Nasional</span></p>
						<time>3 - 12 March 2015</time>
						<p style="margin-top:10px">
							<span class="label label-default">#workshop</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 col-xs-12">
				<div class="border-inset">
					<div class="frame">
						<img src="<?php echo base_url() ?>img/event/event_3.jpg">
					</div>
					<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_3.jpg)"></div> -->
					<div class="wrap-item-caption">
						<h4><a href="<?php echo site_url() ?>page/events/1">Balinese Art Exhibition</a></h4>
						<p>by <span class="bolder">Museum Nasional</span></p>
						<time>3 - 12 March 2015</time>
						<p style="margin-top:10px">
							<span class="label label-default">#exhibition</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 col-xs-12">
				<div class="border-inset">
					<div class="frame">
						<img src="<?php echo base_url() ?>img/event/event_4.jpg">
					</div>
					<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_4.jpg)"></div> -->
					<div class="wrap-item-caption">
						<h4><a href="<?php echo site_url() ?>page/events/1">Peder Balke</a></h4>
						<p>by <span class="bolder">Museum Bank Indonesia</span></p>
						<time>3 - 12 March 2015</time>
						<p style="margin-top:10px">
							<span class="label label-default">#competition</span>
							<span class="label label-default">#event</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- NEWS -->
<div class="home-section">
	<div class="container">
		<h1>In the News&nbsp;&nbsp;<small><a href="<?php echo site_url(); ?>page/news">View all news &rarr;</a></small></h1>
		<div class="row">
			<!-- <div class="col-md-3 title-element">
				<h2>In the News</h2>
				<p>News about museums. Commentary and archival information about museums</p>
				<p>
					<a href="<?php echo site_url(); ?>page/news" class="btn btn-primary btn-block">MORE NEWS &raquo;</a>
				</p>
			</div> -->
			<div class="col-md-12 news-highlight">
				<div class="col-md-4 col-xs-12">
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
				<div class="col-md-4 col-xs-12">
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
				<div class="col-md-4 col-xs-12">
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
				<div class="col-md-4 col-xs-12">
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
				<div class="col-md-4 col-xs-12">
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
				<div class="col-md-4 col-xs-12">
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