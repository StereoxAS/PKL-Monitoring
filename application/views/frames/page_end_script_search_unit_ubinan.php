<!-- DataTables -->
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.responsive.min.js')?>"></script>
<!-- Echarts JavaScripts -->
<script src="<?php echo base_url()?>resources/vendor/echarts/echarts-all.js"></script>
<!-- Google Map Script -->
<script src="https://maps.google.com/maps/api/js?libraries=geometry&v=3.7&key=AIzaSyDQFjRggMlnBZO62jcu0-awkKaSiA50kho&libraries=places"></script>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
<script type="text/javascript">
	var map;
	var markers = [];
	var bounds = new google.maps.LatLngBounds();
	var infowindow = new google.maps.InfoWindow();
	var currentLocation;
	var autocomplete;
	var table;
	var currentTab;
	var interv2;
	var temp_nim;
	var temp_nama;
	var hasil;
	var get_data;
	var get_nama;
	var lat;
	var lon;

	function init_map() {
		map = new google.maps.Map(document.getElementById('gmap'), {
			zoom: 10,
			center: {lat: -2.7410513, lng: 106.4405872}, // default Babel
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		bounds = new google.maps.LatLngBounds();
	}

	$(document).ready(function() {
		$('.btn').tooltip();
		// Inisiasi map
		init_map();

		table = $('#tabel_unit_ubinan').DataTable({
			ajax: '<?php echo base_url() ?>' + 'server/get_tabel_unit_ubinan', // CHANGE ME
			displayLength: 25,
			oLanguage: {
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Berikutnya",
					sPrevious: "Sebelumnya",
				},
				sSearch: "Cari Unit Ubinan",
				sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Unit Ubinan",
				sInfoEmpty: "Tidak ada hasil ditemukan",
				sZeroRecords: "Tidak ada hasil ditemukan",
				sLengthMenu: "Menampilkan _MENU_ Unit Cacah",
				sInfoFiltered: " (hasil filter dari _MAX_ Unit Cacah)",
				sEmptyTable: "Tidak ada data tersedia",
				sLoadingRecords: "Memuat data ..."
			},
			columns: [
				{data: "akurasi"},
				{data: "latitude"},
				{data: "longitude"},
				{
					data: "id_subsegmen",
				},
				{
					data: "nim",
				},
				{
					data: null,
						render:function (data, type, full, meta) {
							if (full['longitude'] != null && full['latitude'] != null) {
								return "<td class='text-center'><center><button id='button_track_uc' type='button' class='btn btn-primary btn-xs'>Tampilkan di peta</button></center></td>"
							} else {
								return "Lokasi tidak tersedia";
							}
							// return full['akurasi'];
						}
				},
			],
			order: [[1, 'asc']],
			columnDefs: [
							{
								targets: [0,1,2],
								visible: false,
								searchable: false
							},
							{
								width: "12.5%",
								targets: [3,4,5],
							}
						],
			responsive: true
		});

	});

$('#reload').click(function () {
	table.ajax.reload();
	$('.btn').tooltip('hide');
});

$('#clear_all').click(function () {
	init_map();
	$('.btn').tooltip('hide');
});

	function smoothScroll(div) {
		$('html, body').animate({
			scrollTop: $(div).offset().top
		}, 1000);
	}

	function clearMarkers() {
		for (var i = 0; i < markers.length; i++) {
		  markers[i].setMap(null);
		}
		marker = [];

	}

	function drop_then_add(unit_cacah) {
		var position = new google.maps.LatLng(parseFloat(unit_cacah['latitude']), parseFloat(unit_cacah['longitude']));
		map.setZoom(16);
		addMarkerWithTimeout(position, unit_cacah, 1000);
		bounds.extend(position);
		map.fitBounds(bounds);
	}

	function addMarkerWithTimeout(position, info, timeout) {
		window.setTimeout(function() {
			var marker = new google.maps.Marker({
				position: position,
				map: map,
				animation: google.maps.Animation.DROP,
				title: info['namaKrt']
			});
		  markers.push(marker);
		  google.maps.event.addListener(marker,'click', (function(marker, info, infowindow){
			  return function() {
				infowindow.setContent(
					"<b>" + info['namaKrt'] + "</b>" +
					"<br>" +
					"(akurasi : " + info['akurasi'] + ")"
				);
				// addInformation(info);
				infowindow.open(map,marker);
				};
			})(marker, info, infowindow));
		}, timeout);
	}
</script>

<script>
	$("#tabel_unit_cacah").on('click', '#button_track_uc', function ()  {
		var row_data = table.row($(this).parents('tr')).data();
		console.log([row_data['latitude'], row_data['longitude']]);
		drop_then_add(row_data);
		smoothScroll('#gmap');
	});
</script>
