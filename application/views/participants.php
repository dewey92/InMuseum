<header class="header-bg header-bg-cover">
	<div class="header-bg-text">
		<div class="container">
			<h1>MUSEUMS LIST</h1>
			<p>Following is the list of museums currently available on the site</p>
		</div>
	</div>
</header>
<div class="mini-bar">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Museums List</li>
		</ol>
	</div>
</div>

<div class="box">
	<div class="container">
		<div class="row">
			<div class="head-title">
				<h1>Museums List :: <span class="text-muted">all cities</span></h1>
			</div>
			<h2 style="margin-top:0">
				<small>
					The list of museums and other collections participating in inMuseum Network is growing weekly.
					If your institution is interested in participating, please contact us at <strong>inmuseum@gmail.com</strong>.
					Following is the list of museums currently available on the site:
				</small>
			</h2>
			<!-- FILTER -->
			<div class="filter">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<form action="" method="POST" role="form">
							<div class="form-group has-feedback">
								<label class="sr-only" for="searchMuseums">label</label>
								<input type="text" class="form-control input-lg" id="searchMuseums" placeholder="Search museums ..." aria-describedby="helpBlock" autofocus />
								<span class="fa fa-lg fa-search form-control-feedback" aria-hidden="true"></span>
								<span id="helpBlock" class="help-block">Start typing <strong>museum names, types, or cities</strong></span>
							</div>
						</form>
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<div class="btn-group pull-right">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Sort museums <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">A > Z</a></li>
								<li><a href="#">Z > A</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<p class="list-participants content">
				<img src="<?php echo base_url(); ?>img/participants/museum-nasional.jpg" alt="" />
				<a href="<?php echo site_url()?>page/profile/1">Museum Nasional Indonesia</a>
				- Jakarta Pusat.
			</p>
			<p class="list-participants content">
				<img src="<?php echo base_url(); ?>img/participants/museum-bank-indonesia.jpg" alt="" />
				<a href="">Museum Bank Indonesia</a>
				- Kota Tua, Jakarta Pusat.
			</p>
			<p class="list-participants content">
				<img src="<?php echo base_url(); ?>img/participants/museum-brawijaya.jpg" alt="" />
				<a href="">Museum Brawijaya</a>
				- Lowokwaru, Malang, Jawa Timur.
			</p>
			<p class="list-participants content">
				<img src="<?php echo base_url(); ?>img/participants/museum-singosari.jpg" alt="" />
				<a href="">Museum Singosari</a>
				- Singosari, Malang, Jawa Timur.
			</p>
			<p class="list-participants content">
				<img src="<?php echo base_url(); ?>img/participants/museum-kereta-api.jpg" alt="" />
				<a href="">Museum KAI</a>
				- Ambarawa, Jawa Tengah.
			</p>
			<p class="list-participants content">
				<img src="<?php echo base_url(); ?>img/participants/museum-vredeburg.jpg" alt="" />
				<a href="">Museum Vredeburg</a>
				- Yogyakarta.
			</p>
			<p class="list-participants content">
				<img src="<?php echo base_url(); ?>img/participants/museum-angkut.jpg" alt="" />
				<a href="">Museum Angkut</a>
				- Batu, Jawa Timur.
			</p>
		</div>
	</div>
</div>