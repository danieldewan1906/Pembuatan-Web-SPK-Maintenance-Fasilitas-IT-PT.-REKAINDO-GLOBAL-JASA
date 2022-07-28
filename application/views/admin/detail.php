<?php $this->load->view('template/header_admin') ?>
<div class="content-wrapper">
  <div class="container-fluid">

    <section class="content-header">   
      <h1 style="color: black">
        DETAIL TIKET MAINTENANCE
        <small>Preview</small>
      </h1>
      <hr style="height:1px;border:none;color:#333;background-color:#333;">
    </section>

    <!-- Main content -->
    <section class="content">    
      <div class="row">
        <!-- right column -->        
        <div class="col-md-8">             
          <div class="box">                
            <div class="box-header">                    
              <h4 class="box-title" style="color: black">Detail Nomor Tiket <b><?php echo $data_user->no_tiket?></b></h4>
            </div>
            <!-- /.box-header -->       
            <div class="box-body no-padding">                     
              <table class="table" style="color: black">
                <tr>                             
                  <td>Tanggal Tiket Masuk</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->tgl_tiket_masuk?></td>
                </tr>
                <tr>                             
                  <td>Nama User</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->nama_user?></td>
                </tr>
                <tr>                             
                  <td>Unit Kerja</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->unit_kerja?></td>
                </tr>
                <tr>                             
                  <td>Ruang atau Gedung</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->ruang?></td>
                </tr>
                <tr>                             
                  <td>Nomor Inventaris</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->no_inventaris?></td>
                </tr>
                <tr>                             
                  <td>Nama Fasilitas</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->nama_fasilitas?></td>
                </tr>
                <tr>                             
                  <td>Merk</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->merk?></td>
                </tr>
                <tr>                             
                  <td>Tanggal Perbaikan</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->tgl_perbaikan?></td>
                </tr>
                <tr>                             
                  <td>Jam</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->jam?></td>
                </tr>
                <tr>                             
                  <td>Jenis Kerusakan</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->jenis_kerusakan?></td>
                </tr>
                <tr>                             
                  <td>Perawatan yang Dilakukan</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->perawatan?></td>
                </tr>
                <tr>                             
                  <td>Keterangan</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->keterangan?></td>
                </tr>
                <tr>                             
                  <td>Personil</td>
                  <td>:</td>                              
                  <td><?php echo $data_user->personil?></td>
                </tr>
                <tr>                             
                  <td>Status</td>
                  <td>:</td>                              
                  <td><?=$data_user->status ? 'Sudah dicek' : 'Belum dicek' ?></td>
                </tr>
              </table>                   
              <div class="box-footer">
                <a href="<?php echo base_url('Staff/formEdit/'). $data_user->no_tiket ?>" style="color: #FFFFFF" class="btn btn-primary" style="border-radius: 20px">Edit</a>
                <a href="<?php echo base_url('Staff')?>" style="color: #FFFFFF" class="btn btn-secondary" style="border-radius: 20px">Kembali</a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <?php echo form_close(); ?>
<?php $this->load->view('template/footer_admin')?>