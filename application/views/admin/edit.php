<?php $this->load->view('template/header_admin') ?>
<div class="content-wrapper">
	<div class="container-fluid">

		<i class="fa fa-pencil-square-o" style="font-size: 25px;color: black">
			<span style="color: black">DATA TIKET</span>
		</i>
		<hr style="height:1px;border:none;color:#333;background-color:#333;">
		<form action="<?php echo base_url('Staff/EditData') ?>" method="post" style="color: black">
			<h5 style="color: black"><b>Data User</b></h5>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="no">Nomor Tiket</label>
					<input type="text" name="no_tiket" class="form-control" id="no_tiket" value="<?php echo $data_user->no_tiket?>" readonly>
				</div>
				<div class="form-group col-md-6">
					<label for="no">Tanggal Daftar Maintenance</label>
					<input type="text" name="tgl_tiket_masuk" class="form-control" id="tgl_tiket_masuk" value="<?php echo $data_user->tgl_tiket_masuk?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" name="nama_user" class="form-control" id="nama_user" value="<?php echo $data_user->nama_user?>" readonly>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="ruang">Ruang / Gedung</label>
					<input type="text" name="ruang" class="form-control" id="ruang" value="<?php echo $data_user->ruang?>" readonly>
				</div>
				<div class="form-group col-md-6">
					<label for="unit_kerja">Unit Kerja</label>
					<input type="text" name="unit_kerja" class="form-control" id="unit_kerja" value="<?php echo $data_user->unit_kerja?>" readonly>
				</div>
			</div>

			<br>
			<h5><b>Data Maintenance Fasilitas IT</b></h5>
			<div class="form-group">
				<label for="no_inventaris">Nomor Inventaris</label>
				<input type="text" name="no_inventaris" class="form-control" id="no_inventaris" value="<?php echo $data_user->no_inventaris?>" readonly>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="nama_fasilitas">Nama Fasilitas</label>
					<br>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="nama_fasilitas" value="Komputer" <?php if($data_user->nama_fasilitas=='Komputer') echo 'checked'?> disabled> Komputer<br>
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="nama_fasilitas" value="Laptop" <?php if($data_user->nama_fasilitas=='Laptop') echo 'checked'?> disabled> Laptop<br>
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="nama_fasilitas" value="Proyektor" <?php if($data_user->nama_fasilitas=='Proyektor') echo 'checked'?> disabled> Proyektor<br>
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="nama_fasilitas" value="Printer" <?php if($data_user->nama_fasilitas=='Printer') echo 'checked'?> disabled> Printer<br>
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="nama_fasilitas" value="Kabel LAN" <?php if($data_user->nama_fasilitas=='Kabel LAN') echo 'checked'?> disabled> Kabel LAN<br>
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="nama_fasilitas" value="Lainnya" <?php if($data_user->nama_fasilitas=='Lainnya') echo 'checked'?> disabled> Lainnya
							<input type="text" name="nama_fasilitas" class="form-control" id="nama_fasilitas" placeholder="Keterangan Lainnya" disabled="">
						</label>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label for="merk" class="form-label">Merk</label>
					<input type="text" name="merk" class="form-control" id="merk" value="<?php echo $data_user->merk?>" readonly>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="tgl_perbaikan">Tanggal Perbaikkan</label>
					<input type="date" name="tgl_perbaikan" class="form-control" value="<?php echo $data_user->tgl_perbaikan?>" id="tgl_perbaikan" placeholder="Tanggal Perbaikkan">
				</div>
				<div class="form-group col-md-6">
					<label for="jam">Jam</label>
					<input type="time" name="jam" class="form-control" value="<?php echo $data_user->jam?>" id="jam" placeholder="Jam">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="jenis_kerusakan">Jenis Kerusakan</label>
					<input type="text" name="jenis_kerusakan" class="form-control" id="jenis_kerusakan" value="<?php echo $data_user->jenis_kerusakan?>" readonly>
				</div>
				<div class="form-group col-md-6">
					<label for="perawatan">Perawatan yang dilakukan</label>
					<input type="text" name="perawatan" class="form-control" value="<?php echo $data_user->perawatan?>" id="perawatan" placeholder="Perawatan yang dilakukan">
				</div>
			</div>
			<div class="form-group">
				<label for="keterangan">Keterangan</label>
				<textarea class="form-control" name="keterangan" value="" id="keterangan" rows="3" placeholder="Keterangan"><?php echo $data_user->keterangan?></textarea>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="personil">Personil</label>
						<select class="custom-select" id="personil" name="personil">
							<option class="form-control" name="personil" value="" selected>-- Pilih Personil --</option>
							<option class="form-control" name="personil" value="Rizky Ryan Raditya" <?php if($data_user->personil=='Rizky Ryan Raditya') echo 'selected'?>>Rizky Ryan Raditya</option>
							<option class="form-control" name="personil" value="Tamara Dhea Pramesti" <?php if($data_user->personil=='Tamara Dhea Pramesti') echo 'selected'?>>Tamara Dhea Pramesti</option>
						</select>
				</div>
				<div class="form-group col-md-6">
					<label for="status">Status</label>
						<select class="custom-select" id="status" name="status">
							<option class="form-control" name="status" value="0" <?php if($data_user->status=='0') echo 'selected'?>>Belum dicek</option>
							<option class="form-control" name="status" value="1" <?php if($data_user->status=='1') echo 'selected'?>>Sudah dicek</option>
						</select>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="<?php echo base_url('Staff/detail/'). $data_user->no_tiket ?>" style="color: #FFFFFF" class="btn btn-secondary" style="border-radius: 20px">Kembali</a>

		</form>
<?php $this->load->view('template/footer_admin') ?>