<!-- Dynamic Table -->
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.data-tables').DataTable({

            responsive: true,
            bInfo: false,
            bFilter: true,
            bPaginate: true
        });
    });
</script>
