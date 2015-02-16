<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
		Dashboard <small>Events</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard
			</li>
			<li>
				Events
			</li>
		</ol>
	</div>
</div>
<!-- /.row -->
<div class="row" style="margin: 20px 0">
	<div class="col-lg-12">
		<button class="btn btn-info col-md-2 col-md-offset-5" id="butmodal" data-toggle="modal" data-target="#addEvent">
			<span class="glyphicon glyphicon-plus"></span>
			Add Event
		</button>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">Add Event!</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" id="form-add-event" role="form">
						<div class="form-group">
							<label for="inputName" class="col-sm-2 control-label">Event Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputName" name="nama_event" placeholder="Name..">
							</div>
						</div>
						<div class="form-group">
							<label for="inputDescription" class="col-sm-2 control-label">Description</label>
							<div class="col-sm-10">
								<textarea class="form-control textarea" id="inputDescription" rows="3" name="deskripsi_event" placeholder="Description.."></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputCategory" class="col-sm-2 control-label">Event Name</label>
							<div class="col-sm-10">
								<select class="form-control" id="inputCategory" name="id_kategori_event" placeholder="Name..">

									<?php foreach($categories as $row) : ?>

										<option value="<?php echo $row->id_kategori_event ?>"><?php echo $row->nama_kategori_event ?></option>

									<?php endforeach;?>

								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputStartDate" class="col-sm-2 control-label">Start Date</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="inputStartDate" name="tgl_mulai_event" placeholder="Start date..">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEndDate" class="col-sm-2 control-label">End Date</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="inputEndDate" name="tgl_selesai_event" placeholder="End date..">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="save-event">Add Event</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Events</h3>
			</div>
			<div class="panel-body">

				<?php foreach( $events as $row ): ?>

					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="<?php echo base_url(); ?>img/event/Cable1.png" alt="..." width="64" height="64">
						</a>
						<div class="media-body">
							<h4 class="media-heading"><b><?php echo ucfirst($row->nama_event); ?></b></h4>
							<?php echo $row->deskripsi_event; ?>
	
							<table>
								<tr>
									<td><b>Mulai</b></td>
									<td> : </td>
									<td> <?php echo $row->tgl_mulai_event; ?></td>
								</tr>
								<tr>
									<td><b>Selesai</b></td>
									<td> : </td>
									<td> <?php echo $row->tgl_selesai_event; ?></td>
								</tr>
							</table>
						</div>
					</div>

				<?php endforeach; ?>

			</div>
		</div>
	</div>
</div>
<!-- /.row -->