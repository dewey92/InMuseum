<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
		Dashboard <small>News</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard
			</li>
			<li>
				News
			</li>
		</ol>
	</div>
</div>
<!-- /.row -->
<div class="row" style="margin: 20px 0">
	<div class="col-lg-12">
		<button class="btn btn-info col-md-2 col-md-offset-5" id="butmodal" data-toggle="modal" data-target="#addCollection">
			<span class="glyphicon glyphicon-plus"></span>
			Add News
		</button>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="addCollection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo site_url(); ?>admin/add_news" method="post" class="form-horizontal" id="form-add-collection" role="form" enctype="multipart/form-data">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">Add News!</h4>
					</div>
					<div class="modal-body">
						
						<div class="form-group">
							<label for="inputName" class="col-sm-2 control-label">News Title</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputName" name="judul_berita" placeholder="Name..">
							</div>
						</div>
						<div class="form-group">
							<label for="inputDescription" class="col-sm-2 control-label">Content</label>
							<div class="col-sm-10">
								<textarea class="form-control textarea" id="inputDescription" rows="3" name="deskripsi_berita" placeholder="Description.."></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPhoto" class="col-sm-2 control-label">Photo</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" id="inputPhoto" name="userfile" placeholder="Usage Year..">
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" class="btn btn-primary" value="Add Collection" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-4">
		<ul class="pagination">
			<li><a href="#">&laquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
	</div>
</div>

<div class="row">

	<?php foreach( $news as $row ) : ?>

		<div class="col-lg-10">
			<div class="media">
				<a class="pull-left" href="#">
					<img src="<?php echo base_url(); ?>img/collection/<?php echo $row->foto_berita; ?>" alt="" class="media-object" width="100" height="100">
				</a>
				<div class="media-body">
					<h4 class="media-heading"><?php echo $row->judul_berita; ?></h4>
					<?php echo $row->isi_berita; ?>
				</div>
			</div>
		</div>
		<div class="col-lg-2">
			<button class="btn btn-success">Edit</button>
			<button class="btn btn-danger">Delete</button>
		</div>

	<?php endforeach; ?>

</div>
<!-- /.row -->