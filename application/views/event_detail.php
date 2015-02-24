<!-- <header class="header-bg header-bg-cover">
	<div class="container">
		<div class="header-bg-text">
			<h1 style="font-size: 50px;">Train Prototype Exhibition</h1>
		</div>
	</div>
</header>
<div class="mini-bar">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Events</a></li>
			<li class="active">Train Prototype Exhibition</li>
		</ol>
	</div>
</div> -->
<div class="box">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<p class="text-center" style="font-size: 17px;"><a href="<?php echo site_url(); ?>page/events">&larr;Back to Events</a></p>
				<div class="event-detail-header">
					<h2 class="text-primary">Saturday, 14 February 2015</h2>
					<h1>Train Prototype Workshop</h1>
				</div>
				<figure class="event-detail-img">
					<img src="<?php echo base_url(); ?>img/event/event_4.jpg" alt="" class="img-responsive center-block">
					<figcaption><br></figcaption>
				</figure>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="<?php echo site_url()?>page/events">Events</a></li>
					<li class="active">Train Prototype Exhibition</li>
				</ol>
			</div>
		</div>
		<hr>
	</div>
</div>

<!-- RIGHT -->
<div class="box">
	<div class="container">
		<!-- EVENTS -->
		<div class="row">
			<!-- INFO -->
			<div class="col-md-4">
				<h3>Event Information</h3>
				<p class="by-museum">by <a href="">Museum Nasional</a></p>
				<div id="event-info">
					<hr>
					<p><span class="fa fa-fw fa-lg fa-calendar"></span>&nbsp; Saturday, 14 February 2015</p>
					<p><span class="fa fa-fw fa-lg fa-clock-o"></span>&nbsp; 8.00am - 8.00pm</p>
					<p><span class="fa fa-fw fa-lg fa-ticket"></span>&nbsp; IDR 2,500</p>
					<p><span class="fa fa-fw fa-lg fa-map-marker"></span>&nbsp; Jalan Merdeka Barat No. 35, Jakarta Pusat</p>
					<p><span class="fa fa-fw fa-lg fa-phone"></span>&nbsp; +62 857-8532-4570</p>
				</div>
				<div id="map-canvas" style="height: 300px"></div>
			</div>
			<div class="col-md-8">
				<div class="event-detail-description">
					<p class="lead">For 33 years, Dazzle contemporary jewellery selling exhibitions have been an eagerly anticipated annual barometer of all that is new, quality and exciting in the sector, bringing together the most innovative and skilled proponents of the art; whether the big, collectable names or rising stars, hand picked from the annual graduate shows.</p>
					<p>After losing their longstanding National Theatre residency last year, Dazzle were thrilled to take a short trot down the South Bank to gallery@oxo – a venue so suited to exhibiting and selling what is, essentially, wearable art. This year they bring their largest ever Dazzle exhibition to the space, showcasing 90 designers from 20 countries, selling 4,000 handmade pieces, all unique and all ready to take home.</p>
					<p>With materials ranging from plastic to platinum to pearls, styles from finely figurative to stridently sculptural to classic contemporary, designers hailing from Bogota to Brighton and prices spanning £12 to £3,500, there is a Dazzler for everyone; making it the perfect place for some unusually civilized Christmas shopping for truly special gifts, whether watches, necklaces, earrings, rings, brooches, bracelets, bangles or cufflinks.</p>
					<p>Similarly inspired by their materials, graduate Terri Campbell’s delicate work incorporates found pieces, including animal horn and wool sourced from her Scottish farm; and fellow rising young star Harriet Rose Knight bends birch wood into outsized, organic shapes, celebrating the colour and sweeping grain of the wood.</p>
					<p>For the first time, the Dazzle Extras section of the exhibition will also host a range of stunning handmade contemporary leather bags by designer Steve Harkin, whose bags feature in the permanent collection of the City of Paris Museum of Fashion and by Wolfram Lohr. Both bring traditional skills and sublime workmanship together with cutting edge design and vibrant colours: an equally fitting a description of the exquisite, hand woven scarves which are being specially imported for Dazzle this year from Japan’s famous NUNO textile house. Made on obi-sash-making, NUNO combine the ancient tsutsu-oritechnique typically used for formal kimonos, with vivid, modern design and can be found in major museum collections around the world .. and very probably in your own collection come November!</p>
					</p>
					<hr>
					<div class="share">
						<p>Share via: &nbsp;
							<a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
							<a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
							<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
						</p>
						<p><a href="<?php echo site_url(); ?>page/blogs" class="btn btn-info">&laquo; Back to Events</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END RIGHT -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
	var map;

	function initialize() {
		var loc = new google.maps.LatLng(-6.176402,106.82159);
		var mapOptions = {
			center: loc,
			zoom: 16,
			scrollwheel:false,
			zoomControl : false,
			panControl : false,
			streetViewControl : false,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false
		};

		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var marker = new google.maps.Marker({
			position: loc,
			map: map,
			title: 'Event'
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>