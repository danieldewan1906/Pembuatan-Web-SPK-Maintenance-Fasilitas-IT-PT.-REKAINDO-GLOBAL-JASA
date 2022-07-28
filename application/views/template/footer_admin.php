<!--  <div class="modal fade" id="modal-delete">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color: black"><b>Yakin akan menghapus data ini?</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" id="formDelete">
          <center><button class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button class="btn btn-danger" type="submit">Hapus</button></center>
        </form>
      </div>
    </div>
  </div>
</div> -->

</div>
</div>
</div>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto"style="color: black">
            <span>Copyright &copy; </span>
            <a class="text-reset fw-bold" href="https://ptrekaindo.co.id/#/"><i>PT. REKAINDO GLOBAL JASA</i></a>
        </div>
    </div>
</footer>

</div>
<!-- Blank div to give the page height to preview the fixed vs. static navbar-->
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
</div>

<!-- end Content-->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- Bootstrap core JavaScript-->
<!-- <script src="<?php echo base_url()?>bs/vendor/jquery/jquery.min.js"></script> -->
<script src="<?php echo base_url()?>bs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url()?>bs/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<!-- <script src="<?php echo base_url()?>bs/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>bs/vendor/datatables/dataTables.bootstrap4.js"></script> -->
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url()?>bs/js/sb-admin.min.js"></script>
<script src="<?php echo base_url()?>assets/select/dist/js/bootstrap-select.js"></script>
<!-- Custom scripts for this page-->
<script src="<?php echo base_url()?>bs/js/sb-admin-datatables.min.js"></script>
<script src="<?php echo base_url()?>bs/vendor/jQuery_datatables/jquery-3.5.1.js"></script>
<script src="<?php echo base_url()?>bs/vendor/jQuery_datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>bs/vendor/jQuery_datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>  
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>  
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>  
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
<!-- <script type="text/javascript">
  $(document).ready(function() {
   var tables = $('#example').DataTable({
    "dom"       :"lBfrtip",
    "processing":true,
    "serverSide":true,
    "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
    "ajax":{
      url : "<?php echo site_url('Staff/databaseUser')?>",
      type : "POST"
    },
    "columnDefs":
    [
    {
      "targets":0,
      "data":"no_tiket",
      "render": function (data, type, row) {
        return '<div style="color: black">'+data+'</div>'
        }
    },
    {
      "targets":1,
      "data":"tgl_tiket_masuk",
      "render": function (data, type, row) {
        return '<div style="color: black">'+data+'</div>'
        }
    },
    {
      "targets":2,
      "data":"nama_user",
      "render": function (data, type, row) {
        return '<div style="color: black">'+data+'</div>'
        }
    },

    {
      "targets":3,
      "data":"unit_kerja", 
      "render": function (data, type, row) {
        return '<div style="color: black">'+data+'</div>'
        }
    },
    {
      "targets":4,
      "data":"ruang",
      "render": function (data, type, row) {
        return '<div style="color: black">'+data+'</div>'
        }
    },
    {
      "targets":5,
      "data":"personil",
      "render": function (data, type, row) {
        return '<div style="color: black">'+data+'</div>'
      }
    },
    {
      "targets":6,
      "data":"status",
      "render": function (data, type, row) {
        if (data == 0) {
            return '<span class="badge badge-danger">Belum dicek</span>';
        } else {
            return '<span class="badge badge-success">Sudah dicek</span>';
          }
        }
    },
    {
      "targets":7,
      "data":null,
      "searchable":false,
      "render":function(data,type,full,meta){
        return '<center><a href="<?=site_url()?>/Staff/detail/'+data["no_tiket"]+'"><button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a> <a href="<?=site_url()?>/Cetak/index/'+data["no_tiket"]+'"><button type="button" class="btn btn-success"><i class="fa fa-fw fa-print"></i></button></a> <a href="#modal-delete" data-toggle="modal" onclick="'+$('#modal-delete #formDelete').attr('action','<?=site_url()?>/Staff/delete/'+data["no_tiket"]+'')+'" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i></a></center>';
      }
    },
    ]
  });
 });
</script> -->
<script>
  $(document).ready(function() {
    var dataTable1 = $('#example').DataTable({
      "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
       "ajax":{  
              url:"<?php echo site_url('Staff/datauser')?>",
              type:"POST"             
         },
        scrollY:'250px',
        dom: 'lBfrtip',
        buttons: [
            {
                extend: 'excel',
                exportOptions: {
                columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [{
            targets: -1,
            visible: false
        }]
    });
  });
</script>
</body>

</html>