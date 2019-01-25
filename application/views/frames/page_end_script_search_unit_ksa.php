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
	var table;
	var focusedLatitude = -8.6726769;
	var focusedLongitude = 115.1542326;
	
	function init_map() {
		map = new google.maps.Map(document.getElementById('gmap'), 
		{
			zoom: 16,
			center: {lat: focusedLatitude, lng: focusedLongitude}, // default map location
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		bounds = new google.maps.LatLngBounds();
	}

	$(document).ready(function() {
		$('.btn').tooltip();
		// Inisiasi map
		init_map();

		table = $('#tabel_unit_ksa').DataTable(
		{
			ajax: '<?php echo base_url() ?>' + 'server/get_progress_ksa', // refers ke Controller > Server > get_progress_ksa > Web Service dari KSA
			displayLength: 25,
			oLanguage: 
			{
				oPaginate: 
				{
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
				{"data": "id_segmen"},
				{"data": "nama_desa"},
				{"data": "nama_kec"},
				{"data": "nama_kab"},
				{"data": "nama_strata",},
				{"data": "nim_pcl",},
				{"data": "lat_segmen"},
				{"data": "log_segmen"},
				{"data": null,
					render:function (data, type, full, meta) 
					{
						if (full['log_segmen'] != null && full['lat_segmen'] != null) 
						{
							//Bootstrap button css. btn = button, btn-info = button jenis info, btn-block = ukuran span button
							return "<td><button id='button_track_uc' type='button' class='btn btn-info btn-sm btn-block'>Tampilkan di Peta</button></td>"
						} else 
						{
							return "Lokasi tidak Valid";
						}
					}
				},
			],
			order: [[1, 'asc']],
			columnDefs: [
							{
								// table row ke targets[x] akan di set visible dan searchable nya
								// 0 berarti tabel pertama dari kiri
								// Negatif dihitung dari kanan
								targets: [],
								visible: false,
								searchable: false
							},
							{
								targets: [0,1,2,3,5,6,7,8],
								width: "12%",
								className: 'dt-body-center',
							},
							{
								targets: [4],
								width: "20%",
								className: 'dt-body-center',
							}
						],
			responsive: true
		});

	});

// Button reload map
$('#reload').click(function () 
{
	table.ajax.reload();
	$('.btn').tooltip('hide');
});
// Button clear map
$('#clear_all').click(function () 
{
	init_map();
	$('.btn').tooltip('hide');
});
	
	// JavaScript smoothScroll
	// https://www.w3schools.com/howto/howto_css_smooth_scroll.asp#section2
	function smoothScroll(div) 
	{
		$('html, body').animate(
		{
			scrollTop: $(div).offset().top
		}, 750);
	}

	function clearMarkers() {
		for (var i = 0; i < markers.length; i++) {
		  markers[i].setMap(null);
		}
		marker = [];

	}

	function drop_then_add(unit_cacah) 
	{
		var position = new google.maps.LatLng(parseFloat(unit_cacah['lat_segmen']), parseFloat(unit_cacah['log_segmen']));
		map.setZoom(14);
		addMarkerWithTimeout(position, unit_cacah, 1000);
		bounds.extend(position);
		map.fitBounds(bounds);
	}

	function addMarkerWithTimeout(position, info, timeout) 
	{
		window.setTimeout(function() 
		{
			// Nama marker di map
			var marker = new google.maps.Marker(
			{
				position: position,
				map: map,
				animation: google.maps.Animation.DROP,
				title: "Segmen " + info['id_segmen']
			});
		  markers.push(marker);
		  google.maps.event.addListener(marker,'click', (function(marker, info, infowindow)
		  {
			  return function() 
			  {
				// informasi marker pada map
				infowindow.setContent(
					"<b> Segmen " + info['id_segmen'] + "</b>" +
					"<br>" +
					"Lokasi Segmen &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " + info['nama_desa'] + ", " + info['nama_kec'] +
					"<br>" +
					"Penanggung Jawab : " + info['nim_pcl']
				);
				infowindow.open(map,marker);
				};
			})(marker, info, infowindow));
		}, timeout);
	}
	
	// "Tampilkan pada Peta" onClick listener
	$("#tabel_unit_ksa").on('click', 'tr', function ()  
	{
		// var row_data = table.row($(this).parents('tr')).data(); // obsolete
		var row_data = table.row( this ).data();
		console.log( table.row( this ).data() ); // debug tr data
		drop_then_add(row_data);
		// Parameter  tujuan html ID buat Smooth Scroll
		smoothScroll('#daftarUnitKSATop');
	});
</script>