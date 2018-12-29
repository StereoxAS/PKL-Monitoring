    <!-- DataTables -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.responsive.min.js')?>"></script>

    <!-- Echarts JavaScripts -->
    <script src="<?php echo base_url()?>resources/vendor/echarts/echarts-all.js"></script>
    <!-- Google Map Script -->
    <script src="https://maps.google.com/maps/api/js?libraries=geometry&v=3.7&key=AIzaSyDQFjRggMlnBZO62jcu0-awkKaSiA50kho&libraries=places"></script>
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
	<script>
		var userId;
		var btn_nim, nim;
		var alert_fail;
		var OneSignal = OneSignal || [];
		OneSignal.push(["init", {
			appId: "ff97759f-67c3-4c10-91fb-541ad544d34d",
			subdomainName: "pkl-stis",
			autoRegister: true
		}]);

		OneSignal.push(function() {
	  		OneSignal.getUserId(function(userId) {
	    		this.userId = userId;
				console.log(userId);
	  		});
		});

		$("#tabel_pcl").on('click', 'button[id*=button_track_pcl_]:not(.disabled)', function () {
			btn_nim = "#" + $(this).attr('id');
			nim = btn_nim.replace("#button_track_pcl_", "");
			nim = nim.replace("_", ".");
			$('button[id*=button_track_]').addClass('disabled');
			$(btn_nim).html("Mencari ... <i class='fa fa-spinner fa-spin'>");
			$.ajax({
	            url: 'http://pkl.stis.ac.id/service/request_location.php',
	            type: 'POST',
				data: {'userId':userId, 'nim':nim},
	            dataType: 'json',
	            success: function(result) {
					console.log(result);
					alert_fail = setTimeout(function(){
						$("button[id*='button_track_']").removeClass('disabled');
						$('#alert_gagal').removeClass('hidden');
						init_map();
						smoothScroll('#scrollTarget');
						$(btn_nim).html('Tampilkan di peta');
					}, 30000);
				},
				error: function (result) {
					console.log(result);
				}
			});
		});
	</script>


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
		}

        $(document).ready(function() {
			$('.btn').tooltip();
            // Inisiasi map
			init_map();

            table = $('#tabel_pcl').DataTable({
                ajax: '<?php echo base_url() ?>' + 'server/get_tabel_pcl', // CHANGE ME
				displayLength: 25,
				oLanguage: {
					oPaginate: {
						sFirst: "Pertama",
						sLast: "Terakhir",
						sNext: "Berikutnya",
						sPrevious: "Sebelumnya",
					},
					sSearch: "Cari PCL",
					sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ PCL",
					sInfoEmpty: "Tidak ada hasil ditemukan",
					sZeroRecords: "Tidak ada hasil ditemukan",
					sLengthMenu: "Menampilkan _MENU_ PCL",
					sInfoFiltered: " (hasil filter dari _MAX_ PCL)",
					sEmptyTable: "Tidak ada data tersedia",
					sLoadingRecords: "Memuat data ..."
			    },
                columns: [
                    {data: "nim",
                            render:function (data, type, full, meta) {
                                temp_nim = data.replace('.', '_');
                                return data;
                            }

                    },
                    {data: "nama",
                            render:function (data, type, full, meta) {
                                temp_nama = data;
                                return temp_nama;
                            }
                    },
                    {data: "kortim"},
                    {data: "wilayah_kerja",
                        render:function (data, type, full, meta) {
                                if (data == null) {
                                    return "Tidak ada";
                                }else{
                                    return data;
                                }
                            }
                    },
                    {
                        data: "progress",
                            render:function (data,type, full, meta){
                                if (data != null) {
                                    return "<div class='progress progress-striped active' style='margin-bottom: 0%;'><div class='progress-bar progress-bar-success' role='progressbar' style='width: "+parseFloat(data)*100+"%;'>"+parseFloat(data)*100+"%</div></div>"
                              }else{
                                //    return "<div class='progress progress-striped active' style='margin-bottom: 0%;'><div class='progress-bar progress-bar-success' role='progressbar' style='width: 0%;'>0%</div></div>"
								return "<td class='center'>Belum ada</td>"
                            }
                        }
                    },
                    {
                        data: null,
                            render:function (data, type, full, meta) {
                                return "<td class='text-center'><center><button id='button_track_uc_" + temp_nim + "' type='button' class='btn btn-primary btn-xs'>Tampilkan di peta</button></center></td>"
                            }
                    },
                    {
                        data: null ,
                            render:function (data, type, full, meta) {
                                return "<td class='text-center'><center><button id='button_track_pcl_" + temp_nim + "' type='button' class='btn btn-primary btn-xs'>Tampilkan di peta</button></center></td>"
                            }
                    }
                ],
                order: [[0, 'asc']],
                responsive: true,
				columnDefs: [
					{
						width: "12.5%",
						targets: [0,1,2,3,4,5,6],
					}
				]

            });
			// Preload nim
			var search_nim = <?php echo json_encode($nim) ?>;
			if (search_nim != null) {
				table.search(search_nim).draw();
				smoothScroll('#tabel_pcl');
			}

        });

		function smoothScroll(div) {
			$('html, body').animate({
				scrollTop: $(div).offset().top
			}, 1000);
		}


    $('#reload').click(function () {
        table.ajax.reload();
		$('.btn').tooltip();
    });

		function clearMarkers() {
			for (var i = 0; i < markers.length; i++) {
			  markers[i].setMap(null);
			}
			marker = [];

		}

		function drop_then_add(pcl) {
			clearMarkers();
			var position = new google.maps.LatLng(parseFloat(pcl['latitude']), parseFloat(pcl['longitude']));
			map.setZoom(16);
			addMarkerWithTimeout(position, pcl, 1000);
			map.setCenter(position);
		}

		function addMarkerWithTimeout(position, info, timeout) {
			window.setTimeout(function() {
				var marker = new google.maps.Marker({
					position: position,
					map: map,
					animation: google.maps.Animation.DROP,
					title: info['nama']
				});
			  markers.push(marker);
			  google.maps.event.addListener(marker,'click', (function(marker, info, infowindow){
				  return function() {
					infowindow.setContent(
						"<b>" + info['nama'] + "</b>" +
						"<br>" +
						"(akurasi : " + info['akurasi'] + ")"
					);
					// addInformation(info);
					infowindow.open(map,marker);
					};
				})(marker, info, infowindow));
			}, timeout);
		}

		// Handler on receive push tracking
		OneSignal.push(function() {
			OneSignal.on('notificationDisplay', function (event) {
				console.log(event);
				clearTimeout(alert_fail);
				var pcl = event.data;
				drop_then_add(pcl);
				$('#alert_gagal').addClass('hidden');
				smoothScroll('#scrollTarget');
				$("button[id*='button_track_']").removeClass('disabled');
				$(btn_nim).html('Tampilkan di peta');
			});
		});

    </script>
