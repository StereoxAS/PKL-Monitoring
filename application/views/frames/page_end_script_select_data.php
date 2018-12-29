<script type="text/javascript">
    var daftar_id = ['kabupaten','kecamatan','kelurahandesa'];
    function get_select_data(select_id, url, init = null) {
        if (init != null) {
            daftar_id[0] = init;
        }
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                $(select_id).empty();
                if (true) {
                    $(select_id).append($('<option>', {
                        value : null,
                        text : 'Pilih Salah Satu',
                        selected : true,
                        disabled : true,
                    }));
                }
                var selected;
                $.each(result, function (key, value) {
                    if (init != null) {
                        selected = (value['id'] == init) ? true : false;
                    }
                    var text;
                    if (select_id == '#select_bloksensus') {
                         text = value['id'];                        
                    } else {
                        text = value['nama'];
                    }
                    $(select_id).append($('<option>', {
                        value: value['id'],
                        text : text,
                        selected: selected
                    }));
                });
            }
        });
    }

    // Perubahan option ketika select diubah
    $("select[id*='select_']").change(function () {
        var id = $(this).attr("id");
        var nama = id.split('_')[1];
        // console.log(id);
        var select_updated = '';
        var select_parameter = '';
        var url = ''
        console.log($(this).val());
        switch (nama) {
            case 'kabupaten':
                select_updated = '#select_kecamatan';
                daftar_id[0] = $(this).val();
                daftar_id.splice(1,2); $("#select_kecamatan").empty(); $("#select_kelurahandesa").empty(); $("#select_bloksensus").empty();
                url = '<?php echo base_url() ?>' + 'server/get_list_kecamatan';
                break;
            case 'kecamatan':
                select_updated = '#select_kelurahandesa';
                daftar_id[1] = $(this).val();
                daftar_id.splice(2,1); $("#select_kelurahandesa").empty(); $("#select_bloksensus").empty();
                url = '<?php echo base_url() ?>' + 'server/get_list_kelurahandesa';
                break;
            case 'kelurahandesa':
                select_updated = '#select_bloksensus';
                daftar_id[2] = $(this).val(); $("#select_bloksensus").empty();
                url = '<?php echo base_url() ?>' + 'server/get_list_bloksensus';
                break;
        }
        if (nama != 'bloksensus') {
            $.each(daftar_id, function (key, value) {
                select_parameter += '/' + value;
            });
            console.log(url + select_parameter);
            console.log(daftar_id);
            get_select_data(select_updated, (url + select_parameter));
        }
    });
</script>
