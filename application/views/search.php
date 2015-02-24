<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h1>Search Results<br>
				<small>3,849 items returned searching for '<?php echo $result; ?>'</small>
			</h1>
			<form action="<?php echo site_url(); ?>page/search" method="POST" role="form">
			
				<div class="form-group">
					<label for="inputQuery" class="sr-only">by Name</label>
					<div class="input-group">
						<input type="text" name="querySearch" id="inputQuery" class="form-control input-lg" value="<?php echo $result; ?>" placeholder="search everything ...">
						<div class="input-group-btn">
							<button type="submit" class="btn btn-primary btn-lg" type="button" >
								<span class="fa fa-search"></span>
							</button>
						</div>
					</div>
				</div>
				<h4>SHOW: <span class="text-success">All</span> / <span class="text-muted">Museums</span> / <span class="text-muted">Events</span> / <span class="text-muted">Collections</span> / <span class="text-muted">News</span> / <span class="text-muted">Blog</span></h4>
			</form>

			<!-- RESULT IN MUSEUM -->
			<div class="row">
				<div class="col-md-12">
					<h3>9 Results in Museums</h3>
				</div>
				<div class="col-md-11 col-md-offset-1">
					<div class="row">
						<div class="col-md-3 col-xs-12">
							<div class="border-inset">
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
						<div class="col-md-3 col-xs-12">
							<div class="border-inset">
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
						<div class="col-md-3 col-xs-12">
							<div class="border-inset">
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
						<div class="col-md-3 col-xs-12">
							<div class="border-inset">
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
				<div class="col-md-11 col-md-offset-1">
					<h3><small><a href="<?php echo site_url(); ?>page/participants">MORE RESULT &rarr; </a></small></h3>
				</div>
			</div>
		</div>
	</div>
</div>