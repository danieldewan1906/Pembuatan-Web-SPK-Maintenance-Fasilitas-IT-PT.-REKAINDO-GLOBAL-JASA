<!DOCTYPE html>
<html><head>
	<title>SPK MAINTENANCE FASILITAS IT REKA</title>
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/uploads/logo.png" />
	<style>
			@page {
                margin: 100px 25px;
            }

            header {
                position: fixed;
                top: -70px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                /*background-color: #03a9f4;*/
                /*color: white;*/
                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: 200px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                /*background-color: #03a9f4;*/
                /*color: white;*/
                text-align: center;
                line-height: 35px;
            }
		.line-title{
			border: 0;
			border-style: unset;
			border-top: 1px solid #000;
		}
	</style>
</head><body>
	
		<header>

			<img src="<?php echo base_url()?>./assets/img/header2.png" style="position: absolute; width: 750px; height: auto;">
			
		</header>
	<!-- <table style="width: 175%;">
		<tr>
			<td align="center">
				<span style="line-height: 1.6; font-weight: bold;">
					PT. REKAINDO 
					<br>GLOBAL JASA
					<br>www.ptrekaindo.co.id
				</span>
			</td>
		</tr>
	</table>

	<hr class="line-title"> -->

	<!-- <table border="0" width="520" height="100" align="center">
		<tr bolder="2">
			<td  rowspan="2" align="center"><img src="<?php echo base_url()?>./assets/uploads/reka.png" width="75"></td>
			<td  rowspan="2" align="center"><b>SPK MAINTENANCE <br>FASILITAS IT REKA</b></td>
		</tr>


	</table> -->
	<br>
	<br>
	<!-- <div style="width:auto; height:auto; border: 1px solid black;"> -->
	<div class="col-3">
		<table border="0" cellpadding="5" width="400" height="100" align="center">
			<br>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td>Nama User </td>
				<td>:</td>
				<td><?php echo $data_user->nama_user?></td>
			</tr>
			<tr>
				<td></td>
				<td>Unit Kerja </td>
				<td>:</td>
				<td><?php echo $data_user->unit_kerja?></td>
			</tr>
			<tr>
				<td></td>
				<td>Ruang atau Gedung </td>
				<td>:</td>
				<td><?php echo $data_user->ruang?></td>
			</tr>
			<br>
			<tr>
				<td></td>
				<td><b><br>Data Maintenance Fasilitas IT</b></td>
			</tr>
			<tr>
				<td></td>
				<td><br>Nomor Inventaris</td>
				<td><br>:</td>
				<td><br><?php echo $data_user->no_inventaris?></td>
			</tr>
			<tr>
				<td></td>
				<td>Nama Fasilitas</td>
				<td>:</td>
				<td><?php echo $data_user->nama_fasilitas?></td>
			</tr>
			<tr>
				<td></td>
				<td>Merk</td>
				<td>:</td>
				<td><?php echo $data_user->merk?></td>
			</tr>
			<tr>
				<td></td>
				<td>Tanggal Perbaikan</td>
				<td>:</td>
				<td><?php echo $data_user->tgl_perbaikan?></td>
			</tr>
			<tr>
				<td></td>
				<td>Jam</td>
				<td>:</td>
				<td><?php echo $data_user->jam?></td>
			</tr>
			<tr>
				<td></td>
				<td>Jenis Kerusakan</td>
				<td>:</td>
				<td><?php echo $data_user->jenis_kerusakan?></td>
			</tr>
			<tr>
				<td></td>
				<td>Perawatan yang Dilakukan</td>
				<td>:</td>
				<td><?php echo $data_user->perawatan?></td>
			</tr>
			<tr>
				<td></td>
				<td>Keterangan</td>
				<td>:</td>
				<td><?php echo $data_user->keterangan?></td>
			</tr>
		</table>
	</div>
	<br>
	<table border="0" cellpadding="5" width="400" height="100" align="center">
		<tr>
			<td></td>
			<td>Pemeriksa
				<p><br><br><br><?php echo $data_user->personil?></p>
			</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>User
				<p><br><br><br><?php echo $data_user->nama_user?></p>
			</td>
		</tr>
	</table>
<!-- </div> -->

	<!-- <hr class="line-title"> -->

	<footer>

    	<img src="<?php echo base_url()?>./assets/img/footer2.png" style="position: absolute; width: 744px; height: auto;">
		
	</footer>

</body></html>