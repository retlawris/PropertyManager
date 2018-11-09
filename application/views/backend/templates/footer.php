<!-- Concatenated plugins -->
<script src="<?php echo base_url(); ?>salon/js/app.js"></script>
<!-- Salon js -->
<script src="<?php echo base_url(); ?>salon/js/salon.js"></script>

<!--CDN JS -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>salon/js/datepicker/datepicker.min.js"></script>

<script>

    $(document).ready(function() {
        $('#data-table1').DataTable({
            "bLengthChange": false,
            responsive: true
        });
        $('#data-table2').DataTable({
            "bLengthChange": false
        });
        $('[data-toggle="datepicker"]').datepicker();
    } );

</script>


</body>

</html>
