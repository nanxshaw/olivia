    <div class="col-md-12 footer"><label class="">Cloud Astro &copy; 2019</label></div>
</body>
</html>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/register.js"></script>


<script>
$(document).ready( function () {
    $('#table_id').DataTable( {
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ]
    } );

    $('.dataTables_filter input').addClass('form-control');
    $('.dataTables_length select').addClass('form-control');
});
</script>