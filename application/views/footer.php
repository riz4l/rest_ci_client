</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- datepicker -->
    <script src="<?php echo base_url()?>assets/datepicker/bootstrap-datepicker.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $('#datepicker').datepicker({
      format:'yyyy-mm-dd'
    });
    $('#datepicker_berlaku').datepicker({
      format:'yyyy-mm-dd'
    });
    </script>

</body>

</html>
