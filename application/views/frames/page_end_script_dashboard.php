<!-- Countdown CSS -->
<link href="<?php echo base_url('resources/css/countdown.css')?>" rel="stylesheet">
<!-- Progress Bar JavaScript -->
<script type="text/javascript" src="<?php echo base_url('resources/vendor/progressbar/dist/progressbar.js')?>"></script>
<!-- DataTables -->
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.responsive.min.js')?>"></script>
<script type="text/javascript">
    // progressbar.js@1.0.0 version is used
    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
	var table;
    var bar = new ProgressBar.Circle(progress_bar, { // Progress Cacah
      color: '#3f3f3f', <!-- #aaa -->
      // This has to be the same size as the maximum width to
      // prevent clipping
      strokeWidth: 15,
      trailWidth: 1,
      easing: 'easeInOut',
      duration: 1500,
      text: {
        autoStyleContainer: false
      },
      from: { color: '#FF0000', width: 10 },
      to: { color: '#7FFF00', width: 10 },
      // Set default step function for all animate calls
      step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);

        var value = (circle.value());
        if (value === 0) {
          circle.setText('');
        } else {
          circle.setText('<h1>'+ (value*100).toFixed(1) + '%</h1><h3>Tercacah</h3>');//---->ganti tulisan 
        }

      }
    });
    bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar.text.style.fontSize = '4rem';

    bar.animate(0);  // Progress Number from 0.0 to 1.0

      function checkProgresCacah(kuesioner) {
          var beban_cacah = parseInt('<?php echo $beban_cacah ?>');
        $.ajax({
            url: "<?php echo base_url('Server/get_progresscacahtotal_control') ?>", //'server/get_agregat_cacah'
            type: "GET",
            dataType: "json",
            success: function(data) {
                bar.animate(data/100); // CHANGE ME (result['total_cacah'] / result['total_beban'])
				//console.log(result['total_cacah'] / result['total_beban']);
				//console.log(result);
            }

        });
      setTimeout(checkProgresCacah, 5000, kuesioner);
    }

    var temp;

    function checkProgresListing(kuesioner) {
    	table.ajax.reload();
		temp = setTimeout(checkProgresListing, 5000, kuesioner);
    }

    $(document).ready(function(){
		$('a').tooltip();
        var kuesioner_cacah = 'build_susenas_kor_1481356172_core'; // CHANGE ME
		table = $('#tabel_listing').DataTable({
			
                        //ajax: '<?php echo base_url() ?>' + 'server/get_agregat_listing',
			//columns: [
				//{data: "nama_kabupaten"},
				//{data: "jumlah"},
			//],
                        ajax: '<?php echo base_url() ?>' + 'pkl/get_progress_perkabkot_control',
			columns: [
				{data: "nama_kabupaten"},
				{data: "jumlah"},
			],
			pagination: false,
			dom: "t",
			order: [[1, 'desc']],
			footerCallback: function ( row, data, start, end, display ) {
            	var api = this.api(), data;
				total = api
			   .column( 1)
			   .data()
			   .reduce( function (a, b) {
				   return parseInt(a) + parseInt(b);
			   }, 0 );
				$( api.column(1).footer() ).html(
                	total
            	);
			}
		});
        setTimeout(checkProgresListing, 1000);
        setTimeout(checkProgresCacah, 1000, kuesioner_cacah);
    });
</script>

<script src="<?php echo base_url('resources/js/jquery.countdown.min.js')?>"></script>
<script type="text/javascript">
    $('#example').countdown({
        date: '3/2/2019 23:59:59',
		offset: +7,
	    day: 'Hari',
	    days: 'Hari',
	    hour: 'Jam',
	    hours: 'Jam',
	    minute: 'Menit',
	    minutes: 'Menit',
	    second: 'Detik',
	    seconds: 'Detik',
    });
</script>

<!--<script src="<?php echo base_url() ?>resources/js/jquery-3.3.1.min.js"> </script> -->
 
                                <!-- Progress total per kabkot -->
                                <script>
                                $(document).ready(function(){
                                    $('#tampilkanTotalperkabkot').click(function(){
                                        $('#progressTotaljembrana').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_progresstotaljembrana_control",
                                            method: "GET",
                                            success: function(data) {
                                            var html = `${data}%`
                                            $('#progressTotaljembrana').append(html);}                                                
                                        });
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#tampilkanTotalperkabkot').click(function(){
                                        $('#progressTotaltabanan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_progresstotaltabanan_control",
                                            method: "GET",
                                            success: function(data) {
                                            var html = `${data}%`
                                            $('#progressTotaltabanan').append(html);}                                                
                                        });
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#tampilkanTotalperkabkot').click(function(){
                                        $('#progressTotalbadung').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_progresstotalbadung_control",
                                            method: "GET",
                                            success: function(data) {
                                           var html = `${data}%`
                                            $('#progressTotalbadung').append(html);}                                               
                                        });
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#tampilkanTotalperkabkot').click(function(){
                                        $('#progressTotalgianyar').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_progresstotalgianyar_control",
                                            method: "GET",
                                            success: function(data) {
                                            var html = `${data}%`
                                            $('#progressTotalgianyar').append(html);}                                                
                                        });
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#tampilkanTotalperkabkot').click(function(){
                                        $('#progressTotalklungkung').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_progresstotalklungkung_control",
                                            method: "GET",
                                            success: function(data) {
                                            var html = `${data}%`
                                            $('#progressTotalklungkung').append(html);}                                                
                                        });
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#tampilkanTotalperkabkot').click(function(){
                                        $('#progressTotalbangli').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_progresstotalbangli_control",
                                            method: "GET",
                                            success: function(data) {
                                            var html = `${data}%`
                                            $('#progressTotalbangli').append(html);}                                               
                                        });
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#tampilkanTotalperkabkot').click(function(){
                                        $('#progressTotalkarang_asem').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_progresstotalkarang_asem_control",
                                            method: "GET",
                                            success: function(data) {
                                            var html = `${data}%`
                                            $('#progressTotalkarang_asem').append(html);}                                               
                                        });
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#tampilkanTotalperkabkot').click(function(){
                                        $('#progressTotalbuleleng').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_progresstotalbuleleng_control",
                                            method: "GET",
                                            success: function(data) {
                                            var html = `${data}%`
                                            $('#progressTotalbuleleng').append(html);}                                                
                                        });
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#tampilkanTotalperkabkot').click(function(){
                                        $('#progressTotaldenpasar').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_progresstotaldenpasar_control",
                                            method: "GET",
                                            success: function(data) {
                                            var html = `${data}%`
                                            $('#progressTotaldenpasar').append(html);}                                               
                                        });
                                    });
                                });
                                </script>
                                
                                
                                
                                
                                
                                
                                
                               <!-- Dropdown kecamatan dari formkabkot ok-->
                               <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#formKecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_allkecamatan_control?kabkot_id="+kabkot_id,
                                            method: "GET",//"POST", <!-- type -->
                                            //data: {kabkot_id: kabkot_id}, <!-- 'kako_id='+kabkot_id, --> <!-- response -->
                                            success: function(data) {
                                            var htmlawal = '<option selected disabled value="">...</option>';
                                            $('#formKecamatan').append(htmlawal);
                                            for(var i = 0; i<data.length ; i++){
                                                var html = `<option value ="${data[i].id_kecamatan}">${data[i].nama_kecamatan}</option>`;
                                                $('#formKecamatan').append(html); <!-- data -->                                                
                                                }                                            
                                            }                                                
                                        });
                                    });
                                });
                                </script>
                                <!-- Frame kabkot dari formkabkot ok-->
                                 <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#frameKabkot').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_embedkabkot_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#frameKabkot').attr("src","https://www.google.com/maps/"+data[0].embed_kabkot); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- frame kecamatan dari formkabkot ok BERUBAH jadi reset all-->
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        $('#frameKecamatan').attr("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1010292.4352177527!2d114.51104914828034!3d-8.455072623045481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali!5e0!3m2!1sid!2sid!4v1546617299915");
                                    });
                                });
                                </script> 
                                <!-- frame kecamatan dari formkecamatan ok-->
                                <script>
                                $(document).ready(function(){
                                    $('#formKecamatan').change(function(){
                                        var kecamatan_id = $(this).val();
                                        $('#frameKecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_embedkecamatan_control?kecamatan_id="+kecamatan_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#frameKecamatan').attr("src","https://www.google.com/maps/"+data[0].embed_kecamatan); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- table nama kabkot awal dari formkabkot ok-->
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#tableNamakabkot').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_tablenamakabkot_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#tableNamakabkot').append(data[0].nama_kabkot); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                               <!-- table nama kecamatan awal dari formkabkot ok
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#tableNamakecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Pkl/get_tablenamakecamatanawal_control?kabkot_id="+kabkot_id,
                                            method: "GET",                                                                                 
                                            success: function(data) {
                                                $('#tableNamakecamatan').append(data[0].nama_kecamatan); 
                                            }
                                        });
                                    });
                                });
                                </script> -->
                                <!-- table nama kecamatan dari formkecamatan -->
                                <script>
                                $(document).ready(function(){
                                    $('#formKecamatan').change(function(){
                                        var kecamatan_id = $(this).val();
                                        $('#tableNamakecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_tablenamakecamatan_control?kecamatan_id="+kecamatan_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#tableNamakecamatan').append(data[0].nama_kecamatan); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                
                                
                                
                                
                                
                                <!-- progress cacah kabkot -->
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#tableProgresscacahkabkot').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_tableprogresscacahkabkot_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                var html = `${data}%`
                                                $('#tableProgresscacahkabkot').append(html); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- progress cacah kecamatan -->
                                <script>
                                $(document).ready(function(){
                                    $('#formKecamatan').change(function(){
                                        var kecamatan_id = $(this).val();
                                        $('#tableProgresscacahkecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_tableprogresscacahkecamatan_control?kecamatan_id="+kecamatan_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                var html = `${data}%`
                                                $('#tableProgresscacahkecamatan').append(html); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                
                                
                                
                                <!-- script pereset kecamatan saat ganti kabkot -->
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var persen_nol = 0%;
                                        $('#tableProgresscacahkecamatan').empty();
                                        $('#tableProgresscacahkecamatan').append(persen_nol);
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var persen_nol = 0%;
                                        $('#tableProgressubinankecamatan').empty();
                                        $('#tableProgressubinankecamatan').append(persen_nol);
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var persen_nol = 0%;
                                        $('#tableProgressksakecamatan').empty();
                                        $('#tableProgressksakecamatan').append(persen_nol);
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var angka_nol = 0;
                                        $('#tableUnitterlistingkecamatan').empty();
                                        $('#tableUnitterlistingkecamatan').append(angka_nol);
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var angka_nol = 0;
                                        $('#tableUbinantercacahkecamatan').empty();
                                        $('#tableUbinantercacahkecamatan').append(angka_nol);
                                    });
                                });
                                </script>
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                       $('#tableNamakecamatan').empty(); 
                                       });
                                });
                                </script> 
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var angka_nol = 0;
                                        $('#tableKsatercacahkecamatan').empty();
                                        $('#tableKsatercacahkecamatan').append(angka_nol);
                                    });
                                });
                                </script>
                                
                                
                                
                                
                                
                                
                                
                                
                                <!-- terlisting kabkot -->
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#tableUnitterlistingkabkot').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_tableunitterlistingkabkot_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#tableUnitterlistingkabkot').append(data[0].unit_terlisting); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- terlisting kecamatan -->
                                <script>
                                $(document).ready(function(){
                                    $('#formKecamatan').change(function(){
                                        var kecamatan_id = $(this).val();
                                        //var kabkot_id = $('formKabkot').val();
                                        //var kabkot = "kabkot_id=";
                                        //var kecamatan = "&kecamatan_id=";
                                        //var gabungan_id = kabkot + kabkot_id + kecamatan + kecamatan_id;
                                        //gabungan_id+="kabkot_id="+kabkot_id;
                                        //gabungan_id+="&kecamatan_id="+kecamatan_id;
                                        $('#tableUnitterlistingkecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_tableunitterlistingkecamatan_control?kecamatan_id="+kecamatan_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#tableUnitterlistingkecamatan').append(data[0].unit_terlisting); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                 <!-- table Ksa tercacah kabkot dari formkabkot -->   
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#tableKsatercacahkabkot').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_tableksatercacahdanprogresskabkot_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#tableKsatercacahkabkot').append(data['tercacah']); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- table Ksa PROGRESS kabkot dari formkabkot -->   
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#tableProgressksakabkot').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_tableksatercacahdanprogresskabkot_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                var html = `${data['progress']}%`;
                                                $('#tableProgressksakabkot').append(html); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- table Ksa tercacah kecamatan dari formkkecamatan -->   
                                <script>
                                $(document).ready(function(){
                                    $('#formKecamatan').change(function(){
                                        var kecamatan_id = $(this).val();
                                        $('#tableKsatercacahkecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_tableksatercacahdanprogresskecamatan_control?kecamatan_id="+kecamatan_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#tableKsatercacahkecamatan').append(data['tercacah']); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- table Ksa progress kecamatan dari formkkecamatan -->   
                                <script>
                                $(document).ready(function(){
                                    $('#formKecamatan').change(function(){
                                        var kecamatan_id = $(this).val();
                                        $('#tableProgressksakecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Server/get_tableksatercacahdanprogresskecamatan_control?kecamatan_id="+kecamatan_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                            
                                                var html = `${data['progress']}%`;
                                                $('#tableProgressksakecamatan').append(html); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                