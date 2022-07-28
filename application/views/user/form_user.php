<?php $this->load->view('template/header_user') ?>

<!-- <div class="content-wrapper">
	<div class="container-fluid"> -->
		<div class="container p-3 my-3 border" style="margin-top: 75px">
			<h1 class="text-center">Form Pendaftaran Maintenance</h1>
			<!-- <div class="card"> -->
				<!-- <div class="card-header text-black" style="background-color: #e3f2fd">
					<i class="fa fa-pencil-square-o" style="font-size: 25px;">
						<span>DAFTAR TIKET</span></i>
				</div> -->
					<!-- <hr style="height:1px;border:none;color:#333;background-color:#333;"> -->

				<!-- <div class="card-body"> -->
					<form id="form" action="<?php echo base_url('User/AksiInsert') ?>" method="post">
							<?php if ($this->session->flashdata('message')) { ?>
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?=$this->session->flashdata('message');?>
								</div>
							<?php } ?>

							<div class="alert alert-primary">
                				<strong>Data User</strong>
            				</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="no">Nomor Tiket</label>
									<input type="text" name="no_tiket" class="form-control" id="no_tiket" value="<?= $notiket; ?>" readonly>
								</div>
								<div class="form-group col-md-6">
									<label for="no">Tanggal Daftar Maintenance</label>
									<input type="text" name="tgl_tiket_masuk" class="form-control" id="tgl_tiket_masuk" value="<?php echo date('d-m-Y'); ?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label for="nama">Nama Lengkap</label>
								<input type="text" name="nama_user" class="form-control" value="<?= set_value('nama_user')?>" id="nama_user" placeholder="Nama Lengkap">
								<?=form_error('nama_user')?>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="ruang">Ruang / Gedung</label>
									<select class="custom-select" id="ruang" name="ruang">
										<option class="form-control" name="ruang" value="none" selected>-- Ruang atau Gedung --</option>
										<option class="form-control" name="ruang" value="Office REKA Lt. 1">Office REKA Lt. 1</option>
										<option class="form-control" name="ruang" value="Office REKA Lt. 2">Office REKA Lt. 2</option>
										<option class="form-control" name="ruang" value="Office REKA Lt. 3">Office REKA Lt. 3</option>
										<option class="form-control" name="ruang" value="Workshop Sukosari">Workshop Sukosari</option>
										<option class="form-control" name="ruang" value="Area PT INKA (Persero)">Area PT INKA (Persero)</option>
									</select>
									<!-- <label for="ruang">Ruang / Gedung</label>
									<input type="text" name="ruang" class="form-control" value="<?= set_value('ruang')?>" id="ruang" placeholder="Ruang atau Gedung"> -->
									<?=form_error('ruang');?>
								</div>
								<div class="form-group col-md-6">
									<label for="unit_kerja">Unit Kerja</label>
									<select class="custom-select" id="unit_kerja" name="unit_kerja">
										<option class="form-control" name="unit_kerja" value="none" selected>-- Unit Kerja --</option>
										<option class="form-control" name="unit_kerja" value="QA & HSE">QA & HSE</option>
										<option class="form-control" name="unit_kerja" value="Bidding & Pricing">Bidding & Pricing</option>
										<option class="form-control" name="unit_kerja" value="Electrical & Mechanical Engineering">Electrical & Mechanical Engineering</option>
										<option class="form-control" name="unit_kerja" value="Logistic">Logistic</option>
										<option class="form-control" name="unit_kerja" value="PPC">PPC</option>
										<option class="form-control" name="unit_kerja" value="Production">Production</option>
										<option class="form-control" name="unit_kerja" value="Finance">Finance</option>
										<option class="form-control" name="unit_kerja" value="Quality & After Sales">Quality & After Sales</option>
										<option class="form-control" name="unit_kerja" value="IT & Maintenance">IT & Maintenance</option>
										<option class="form-control" name="unit_kerja" value="HR & GA">HR & GA</option>
									</select>
									<!-- <label for="unit_kerja">Unit Kerja</label>
									<input type="text" name="unit_kerja" class="form-control" value="<?= set_value('unit_kerja')?>" id="unit_kerja" placeholder="Unit Kerja"> -->
									<?=form_error('unit_kerja');?>
								</div>
							</div>

							<br>
							<div class="alert alert-primary">
                				<strong>Data Maintenance Fasilitas IT</strong>
            				</div>
            				
							<div class="form-group">
								<label for="no_inventaris">Nomor Inventaris</label>
								<input type="text" name="no_inventaris" class="form-control" value="<?= set_value('no_inventaris')?>" id="no_inventaris" placeholder="Nomor Inventaris" >
								<?=form_error('no_inventaris');?>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="nama_fasilitas">Nama Fasilitas</label>
									<br>
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="nama_fasilitas" value="Komputer"> Komputer<br>
										</label>
									</div>
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="nama_fasilitas" value="Laptop"> Laptop<br>
										</label>
									</div>
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="nama_fasilitas" value="Proyektor"> Proyektor<br>
										</label>
									</div>
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="nama_fasilitas" value="Printer"> Printer<br>
										</label>
									</div>
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="nama_fasilitas" value="Kabel LAN"> Kabel LAN<br>
										</label>
									</div>
									<br>
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="nama_fasilitas" value="Lainnya"> Lainnya
											<div id="form-lain" style="display:none">
												<input type="text" name="nama_fasilitas" class="form-control" id="nama_fasilitas" placeholder="Fasilitas Lainnya">
											</div>
										</label>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="merk" class="form-label">Merk</label>
									<input type="text" name="merk" class="form-control" value="<?= set_value('merk')?>" id="merk" placeholder="Merk">
									<?=form_error('merk');?>
								</div>
							</div>
			<!-- <div class="form-row">
				<div class="form-group col-md-6">
					<label for="tgl_perbaikan">Tanggal Perbaikkan</label>
					<input type="text" name="tgl_perbaikan" class="form-control" id="tgl_perbaikan" placeholder="Tanggal Perbaikkan" readonly="">
				</div>
				<div class="form-group col-md-6">
					<label for="jam">Jam</label>
					<input type="text" name="jam" class="form-control" id="jam" placeholder="Jam" readonly="">
				</div>
			</div -->
			<div class="form-group">
				<!-- <div class="form-group col-md-6"> -->
					<label for="jenis_kerusakan">Jenis Kerusakan</label>
					<input type="text" name="jenis_kerusakan" class="form-control" value="<?= set_value('jenis_kerusakan')?>" id="jenis_kerusakan" placeholder="Jenis Kerusakan">
					<?=form_error('jenis_kerusakan');?>
					<!-- </div> -->
				<!-- <div class="form-group col-md-6">
					<label for="perawatan">Perawatan yang dilakukan</label>
					<input type="text" name="perawatan" class="form-control" id="perawatan" placeholder="Perawatan yang dilakukan" readonly="">
				</div> -->
			</div>
			<!-- <div class="form-group">
				<label for="keterangan">Keterangan</label>
				<textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Keterangan" readonly=""></textarea>
			</div> -->
			<button type="submit" class="btn btn-primary" id="btn-submit">Submit</button>
		</form>
		<?php $this->load->view('template/footer_user') ?>