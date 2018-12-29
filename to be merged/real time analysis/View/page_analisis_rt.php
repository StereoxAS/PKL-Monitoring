<!-- Page Content -->
 <script src="<?php echo base_url()?>resources/vendor/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>resources/vendor/morrisjs/morris.min.js"></script>

<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Analisis Real Time</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Analisis Berdasarkan
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Pilih Modul</label>
                                <select id="select_modul" name="select_modul" class="form-control">
                                    <option disabled selected value="">Pilih Modul</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Variabel Penting</label>
                                <select disabled id="select_variabel" name ="select_variabel" class="form-control">
                                    <option selected value="">Pilih Variabel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            <!-- /.panel -->
            </div>
        <!-- /.col-lg-12 -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Charts
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div hidden id="test1"></div>
                    <div hidden id="test2"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Interpretasi
                </div>
                <!-- /.panel-heading -->
                <div hidden id = "interpretasi" name = "interpretasi" class="panel-body">
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<script type="text/javascript">
var test;

    $("#modul").change(function () {
        $("#test1").prop("hidden",true);
        $("#test2").prop("hidden",true);
          var modul = $(this).val();
          console.log(modul);
        $.ajax({
            url: "<?php echo base_url('dummy/list_variabel/')?>" + modul,
            type: "GET",
            dataType: "JSON",
            success: function(result){
                // alert(result);
                // console.log(result);
                $("#interpretasi").prop("hidden",true);
                $("#variabel").prop("disabled",false);
                $("#variabel").empty();
                $("#variabel").append($("<option></option>").val("").html("Pilih Variabel").prop('disabled',false,'selected',true));
                $.each(result, function(key, item){
                    $("#variabel").append($("<option><\/option)").val(item).html(item));
                });
            },
            error: function(result){
                console.log(result);
            }

        });

    });

        var chart = Morris.Bar({
                duration: 1400,
                element: 'test1',
                data: [{
                    "label" : null,
                    "value" : null
                    }],
                xkey: 'label',
                ykeys: ['value'],
                labels: ['Persentase Progres Pencacahan'],
                hideHover: 'auto',
                resize: true

            });

        var donut = Morris.Donut({
          element: 'test2',
          data: [{
                    "labels" : null,
                    "value" : null
                }]
        });


    $("#variabel").change(function(){

        var variabel = $(this).val()
        var modul = $("#modul").val();


        $.ajax({
            url: "<?php echo base_url('dummy/hasil/')?>"+modul+"/"+variabel,
            type: "GET",
            dataType: "JSON",

            success: function(result){

                if(result['tipe']!='int'){ //donut
                    $("#interpretasi").empty();
                    $("#test1").prop("hidden",true);
                    $("#test2").prop("hidden",false);
                    donut.setData(result['data']);
                    $("#interpretasi").prop("hidden",false);
                    $("#interpretasi").append($("<p>Variabel tertinggi pada modul "+modul+" , dan variabel "+variabel+" ada pada variabel bernama "+result['varmax']+" dengan jumlah "+result['max']+"</p>"));


                }else{ //hist
                    $("#interpretasi").empty();
                    $("#test2").prop("hidden",true);
                    $("#test1").prop("hidden",false);
                    chart.setData(result['data']);
                    $("#interpretasi").prop("hidden",false);
                    $("#interpretasi").append($("<p>Variabel tertinggi pada modul "+modul+" , dan variabel "+variabel+" ada pada variabel bernama "+result['varmax']+" dengan jumlah "+result['max']+" dan rata rata sebesar "+result['mean']+"</p>"));
                }
                // alert(result['']);
                    //alert(JSON.stringify(result));
                  //alert(JSON.stringify(result));
                    //chart.setData(result['data']);
                    // console.log(result);

            }
        });
    });


</script>
