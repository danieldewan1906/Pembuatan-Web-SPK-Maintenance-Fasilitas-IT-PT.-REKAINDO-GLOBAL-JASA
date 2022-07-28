<?php $this->load->view('template/header_admin') ?>
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb__list r-list">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        <li class="breadcrumb__group">
	        	<i class="fa fa-home" style="font-size: 16px; color: black">&nbsp;</i>
	          	<a href="<?php echo base_url('Staff') ?>" class="breadcrumb__point r-link">
	          		<span style="color: black;">Beranda&nbsp;&nbsp;&nbsp;</span>
	          	</a>
	          	<span class="breadcrumb__divider" aria-hidden="true"  style="color: black;">›&nbsp;&nbsp;&nbsp;</span>
	        </li>
	        <li class="breadcrumb__group">
	        	<i class="fa fa-list-alt" style="font-size: 16px;color: black;">&nbsp;</i>
	          	<span style="color: black;">Data Tiket</span>
	        </li>
      	</ol>
      	<br>
		<!-- End Breadcrumbs -->
		<div class="card mb-3">
			<div class="card-header" style="background-color: #e3f2fd; color: black">
				<i class="fa fa-table"></i> DATA TIKET
			</div>
			<!-- Button trigger modal -->
			<div class="card-body">
				<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('Cetak/excel'); ?>"><button type="button" class="btn btn-primary"><i class="fa fa-fw fa-print"></i>Export Data</button></a>
				<br>
				<br> -->
			<?php if ($this->session->flashdata('message')) { ?>
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?=$this->session->flashdata('message');?>
			</div>
			<?php } ?>
				<p></p>
				<div class="table-responsive">
					<table class="table table-bordered" id="example" width="100%" cellspacing="0">
						<tr>
							<thead>
								<th style="background-color: #e3f2fd; color:#1C1F4C;">NOMOR TIKET</th>
								<th style="background-color: #e3f2fd; color:#1C1F4C;">TANGGAL TIKET MASUK</th>
								<th style="background-color: #e3f2fd; color:#1C1F4C;">NAMA USER</th>
								<th style="background-color: #e3f2fd; color:#1C1F4C;">UNIT KERJA</th>
								<th style="background-color: #e3f2fd; color:#1C1F4C;">RUANG ATAU GEDUNG</th>
								<th style="background-color: #e3f2fd; color:#1C1F4C;">PERSONIL</th>
								<th style="background-color: #e3f2fd; color:#1C1F4C;">STATUS</th>
								<th style="background-color: #e3f2fd; color:#1C1F4C;">AKSI</th>
							</thead>
						</tr>
					</table>
<?php $this->load->view('template/footer_admin') ?>