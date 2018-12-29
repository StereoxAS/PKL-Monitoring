<!-- Dynamic Table -->
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>

<script type="text/javascript">
    var table;
    $(document).ready(function() {
        table = $('#table_unit_cacah').DataTable({
            ajax: '<?php echo base_url('server/get_list_unit_cacah') ?>',
            columns: [
                {"data": "namaKrt"},
                {"data": "alamat"},
                {"data": "jenisBangunan"},
                {"data": "stratifikasi"},
            ],
            responsive: true,
            bInfo: false,
            bFilter: true,
            bPaginate: true
        });
    });

    $('#reload').click(function () {
        table.ajax.reload();
    });

</script>
