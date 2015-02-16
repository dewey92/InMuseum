<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
		Dashboard <small>Museum Profile</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard
			</li>
		</ol>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Profil Museum</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<p><b>Nama</b></p>
					</div>
					<div class="col-md-9">
						<p><?php echo $profile->nama_museum; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p><b>Deskripsi</b></p>
					</div>
					<div class="col-md-9">
						<p><?php echo $profile->deskripsi_museum; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p><b>Alamat</b></p>
					</div>
					<div class="col-md-9">
						<p><?php echo $profile->alamat_museum; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p><b>Akses</b></p>
					</div>
					<div class="col-md-9">
						<p><?php echo $profile->akses_ke_museum; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p><b>Telp</b></p>
					</div>
					<div class="col-md-9">
						<p><?php echo $profile->telp_museum; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p><b>Fax</b></p>
					</div>
					<div class="col-md-9">
						<p><?php echo $profile->fax_museum; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p><b>E-mail</b></p>
					</div>
					<div class="col-md-9">
						<p><?php echo $profile->email_museum; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<p><b>Twitter</b></p>
					</div>
					<div class="col-md-9">
						<p><?php echo $profile->twitter_museum; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->