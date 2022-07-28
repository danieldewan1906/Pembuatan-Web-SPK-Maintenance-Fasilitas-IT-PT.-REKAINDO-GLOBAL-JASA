<?php $this->load->view('template/header_user') ?>

<div class="container" style="margin-top: 75px">
	<div class="jumbotron">
		<h1 class="display-5">Pendaftaran SPK Maintenance Fasilitas IT REKA</h1>
		<p class="lead">Sistem Pendaftaran SPK Maintenance Fasilitas IT merupakan sebuah aplikasi untuk mendaftarkan masalah fasilitas IT yang ada pada <b>PT. REKAINDO GLOBAL JASA</b>. Silahkan melakukan pendaftaran pada tombol <b>Daftar Sekarang</b> atau klik menu <b>Daftar Tiket</b> untuk melakukan pengisian formulir maintenance fasilitas IT.</p>
		<p class="lead">
			<a class="btn btn-primary btn-ms" href="<?php echo base_url('User/form_user') ?>" role="button">Daftar Sekarang</a>
		</p>
	</div>

	<div class="text-center p-4">
		<i>© 2021 Copyright</i>
		<a class="text-reset fw-bold" href="https://ptrekaindo.co.id/#/">PT. REKAINDO GLOBAL JASA</a>
	</div>
</div>


<?php $this->load->view('template/footer_user') ?>
