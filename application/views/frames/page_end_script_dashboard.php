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
      color: '#aaa',
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
            url: "<?php echo base_url('server/get_agregat_cacah') ?>",
            type: "GET",
            dataType: "json",
            success: function(result) {
                bar.animate(result['total_cacah'] / result['total_beban']); // CHANGE ME
				console.log(result['total_cacah'] / result['total_beban']);
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
			ajax: '<?php echo base_url() ?>' + 'server/get_agregat_listing',
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
        date: '2/19/2018 23:59:59',
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
