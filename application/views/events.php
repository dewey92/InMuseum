<header class="header-bg header-bg-cover">
	<div class="container">
		<div class="header-bg-text">
			<h1>EVENTS & EXHIBITIONS</h1>
			<p>Join the various events and exhibitions held by the museums</p>
		</div>
	</div>
</header>
<div class="mini-bar">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>">Home</a></li>
			<li class="active">Events</li>
		</ol>
	</div>
</div>

<!-- RIGHT -->
<div class="box">
	<div class="container">
		<!-- EVENTS -->
		<div class="row">
			<div class="col-sm-12">
				<div class="head-title">
					<h1>
						Ongoing Events :: <span class="text-muted">all</span>
					</h1>
				</div>
				<!-- FILTER -->
				<div class="filter">
					<div class="row">
						<div class="col-md-8 col-lg-6 col-lg-offset-3">
							<form action="" method="POST" role="form">
								<div class="form-group has-feedback">
									<label class="sr-only" for="searchEvents">label</label>
									<input type="text" class="form-control input-lg" id="searchEvents" placeholder="Search events ..." aria-describedby="helpBlock" autofocus />
									<span class="fa fa-lg fa-search form-control-feedback" aria-hidden="true"></span>
									<span id="helpBlock" class="help-block">Start typing event titles, cities, or museum names</span>
								</div>
							</form>
						</div>
						<div class="col-md-4 col-lg-3 col-lg-offset">
							<div class="btn-group pull-right">
								<div class="btn-group">
									<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">by Category <span class="caret"></span></button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">All</a></li>
										<li class="divider"></li>
										<?php foreach ($kategori_event as $row) : ?>

										<li><a href="#">
											<?php echo $row->nama_kategori_event . ' (' . rand(3,50) . ')'; ?>
										</a></li>

										<?php endforeach; ?>
									</ul>
								</div>
								<div class="btn-group pull-right">
									<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">by Date <span class="caret"></span></button>
									<ul class="dropdown-menu" role="menu">
										<li>
											<div class="filter-options-box">
												<div class="responsive-calendar" id="event-date">
													<div class="controls">
														<a class="pull-left" data-go="prev">
															<div class="btn btn-sm btn-primary">Prev</div>
														</a>
														<h4><span data-head-month></span> <span data-head-year></span></h4>
														<a class="pull-right" data-go="next">
															<div class="btn btn-sm btn-primary">Next</div>
														</a>
													</div><hr/>
													<div class="day-headers">
														<div class="day header">Mon</div>
														<div class="day header">Tue</div>
														<div class="day header">Wed</div>
														<div class="day header">Thu</div>
														<div class="day header">Fri</div>
														<div class="day header">Sat</div>
														<div class="day header">Sun</div>
													</div>
													<div class="days" data-group="days"></div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
					</div>
					</div>
				</div>
				
				<?php for ($i=0; $i < 3; $i++) : ?>
				
				<article class="content">
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<div class="col-sm-12">
									<div class="event-date-meta">
										<h3><time>12 February - 16 February 2015</time></h3>
										<h2><a href="<?php echo base_url(); ?>page/events/1">New Artifacts Found at Singosari</a></h2>
									</div>
									<p class="by-museum">by <a href="">Museum Nasional</a></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 event-meta bolder">
									<div class="event-type-meta">
										<p><span class="category">Exhibition</span></p>
										<p>1:00pm - 2:30pm</p>
										<p>IDR 10,000</p>
									</div>
									<div class="event-place-meta">
										<p>Jalan Brawijaya No. 35, Jakarta Pusat</p>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="event-description-meta">
										<p>Join us for a screening of Rebecca Horn’s best-known feature film and homage to Buster Keaton: Buster’s Bedroom, starring Donald Sutherland</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xl-3 col-xl-offset-1">
							<span class="pull-right">
								<a href="<?php echo site_url(); ?>page/events/1">
									<img src="<?php echo base_url(); ?>img/event/event_1.jpg" class="img-responsive">
								</a>
							</span>
						</div>
					</div>
				</article>
				<article class="content">
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<div class="col-sm-12">
									<div class="event-date-meta">
										<h3><time>Saturday, 14 February 2015</time></h3>
										<h2><a href="<?php echo base_url(); ?>page/events/1">Train Prototype Workshop</a></h2>
									</div>
									<p class="by-museum">by <a href="">Museum KAI</a></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 event-meta bolder">
									<div class="event-type-meta">
										<p><span class="category">Workshop</span></p>
										<p>10:00am - 1:00pm</p>
										<p>IDR 25,000</p>
									</div>
									<div class="event-place-meta">
										<p>Jalan Bitung No. 1, Ambarawa</p>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="event-description-meta">
										<p>Join us for a screening of Rebecca Horn’s best-known feature film and homage to Buster Keaton: Buster’s Bedroom, starring Donald Sutherland</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xl-3 col-xl-offset-1">
							<span class="pull-right">
								<a href="<?php echo site_url(); ?>page/events/1">
									<img src="<?php echo base_url() ?>img/event/event_2.jpg" class="img-responsive">
								</a>
							</span>
						</div>
					</div>
				</article>
				
				<?php endfor; ?></div>
			
		</div>
		<!-- LOAD -->
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="more-button">
					<button class="btn btn-default col-xs-12">Load More ...</button>
				</div>
			</div>
		</div>
		<!-- UPCOMING -->
		<div class="row box">
			<div class="col-md-12">
				<h1>Upcoming Events</h1>
			</div>
			<div class="col-md-3 col-xs-12">
				<div class="frame">
					<img src="<?php echo base_url() ?>img/event/event_1.jpg">
				</div>
				<!-- <div class="img-bg header-bg-cover" style="background-image:url(<?php echo base_url() ?>img/event/event_1.jpg)"></div> -->
				<div class="featured-info">
					<h4><a href="<?php echo site_url() ?>page/events/1">Lecture on The Awareness of Indonesian Culture</a></h4>
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
					<h4><a href="<?php echo site_url() ?>page/events/1">Maggi Hambling: Walls of Water</a></h4>
					<p>by <span class="bolder">Museum Angkut</span></p>
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
					<h4><a href="<?php echo site_url() ?>page/events/1">Peder Balke</a></h4>
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
<!-- END RIGHT -->