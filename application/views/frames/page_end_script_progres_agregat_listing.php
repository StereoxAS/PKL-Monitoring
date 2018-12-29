<!-- Echarts JavaScripts -->
<script src="<?php echo base_url()?>resources/vendor/echarts/echarts-all.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url('resources/vendor/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('resources/vendor/datatables-plugins/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('resources/vendor/datatables-responsive/dataTables.responsive.js')?>"></script>

<script type="text/javascript">
    var dps = [];
    var dps_label = [];
    var chart;
    var chartSeries;
    var option;
    var updateInterval = 1000;
    var table;
    var timer;

    var updateChartTable = function () {
        //tambahkan jquary data baru dari database
        $.ajax({
            // CHANGE ME
            url: '<?php echo base_url() ?>' + 'server/get_agregat_listing',
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                // Update Chart
                if (dps.length > result['data'].length) { // different data set length, harus buat chart dari awal
                    chart.clear();
                    bar_chart(result);
                } else { // same dataset length, tinggal refresh chartnya
                    dps = [];
                    dps_label = [];
                    for (var i = 0; i < result["data"].length; i++) {
                        dps[i] = parseInt(result["data"][i]["jumlah"]);
                        dps_label[i] = result["data"][i]["wilayah"];
                    }
                    chartSeries[0].data = dps;
                    option.xAxis[0].data = dps_label;
                    chart.setSeries(chartSeries);
                    chart.setOption(option);
                    chart.refresh();
                }
            }
        });
        // Update Table
        table.ajax.reload();
    }

    function endAndStartUpdateChartTable() { // ends previous update, start a new one
        clearInterval(timer);
        timer = setInterval(updateChartTable, updateInterval);
    }

    function bar_chart(result) {
        dps = [];
        dps_label = [];
        for (var i = 0; i < result["data"].length; i++) {
            dps[i] = parseInt(result["data"][i]["jumlah"]);
            dps_label[i] = result["data"][i]["wilayah"];
        }

        chart = echarts.init(document.getElementById('chart_listing_agregat'));
        chartSeries = [
            {
                name: 'Persentase Listing',
                type: 'bar',
                data: dps
            }
        ];

        option = {
            title : {
                text: 'Persentase Listing',
                x:'center'
            },
            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            xAxis : [
                {
                    type : 'category',
                    data : dps_label
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            calculable : true,
            series : chartSeries
        };
        chart.setOption(option);
    }

    $(document).ready(function() {
        $.ajax({
            // CHANGE ME
            url: '<?php echo base_url() ?>' + 'server/get_agregat_listing',
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                // Initialize Chart
                bar_chart(result);
                // Initialize Table
                table = $('#table_listing').DataTable({
                    order: [[1, "desc"],[0, "asc"]],
                    // CHANGE ME
                    ajax: '<?php echo base_url() ?>' + 'server/get_agregat_listing',
                    columns: [
                        {data: "wilayah"},
                        {data: "jumlah"},
                        {
                            data: "id" ,
                            render:function (data, type, full, meta) {
                                return "<a href='"+ '<?php echo base_url('pkl/progres_listing/')?>' + data + "'>" + "Lihat Detail" + "</a>";
                            }
                        },
                    ],
                    responsive: true,
                    bInfo: false,
                    bFilter: false,
                    bPaginate: false
                });
            }
        });

        // update chart after specified interval
        endAndStartUpdateChartTable();
    });
</script>
<!-- /.end_script -->
