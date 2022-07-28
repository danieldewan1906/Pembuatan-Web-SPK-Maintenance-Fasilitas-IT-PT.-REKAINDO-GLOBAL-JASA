<!--  </div>
</div>
</div>
</div> -->
<!-- </div>

</div> -->
</div>
<!-- Blank div to give the page height to preview the fixed vs. static navbar-->
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
</div>
<!-- end Content-->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url()?>bs/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>bs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url()?>bs/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url()?>bs/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>bs/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url()?>bs/js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="<?php echo base_url()?>bs/js/sb-admin-datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>bs/vendor/jQuery-1.6.1/jquery.min.js"></script>
<script>
  $(function(){
    $(":radio.form-check-input").click(function(){
      $("#form-lain").hide()
      if($(this).val() == "Lainnya"){
        $("#form-lain").slideDown("fast");
      }else{
        $("#form-lain").slideUp("fast");
        $('#nama_fasilitas').attr("disabled", true); 
      }
    });
  });
</script>
</body>

</html>