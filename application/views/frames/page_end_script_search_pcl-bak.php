<!-- Google Map Script -->
<script src="http://maps.google.com/maps/api/js?libraries=geometry&v=3.7&key=AIzaSyDQFjRggMlnBZO62jcu0-awkKaSiA50kho&libraries=places"></script>

<script src="<?php echo base_url('resources/vendor/google-map/maplace.js');?>"></script>

<!-- User Script -->
<script>
    var map;
    var markers = [];
    var bounds = new google.maps.LatLngBounds();
    var infowindow = new google.maps.InfoWindow();
    var currentLocation;
    var autocomplete;

    $(document).ready(function () {
        // Inisiasi select option kabupaten dan kecamatan
        var url = '<?php echo base_url() ?>' + 'server/get_list_kabupaten';
        get_select_data("#select_kabupaten", url);
        var nim = '<?php echo $nim; ?>';
        if(nim!=''){
          document.getElementById('autocomplete').value = nim;
          document.getElementById("btn_search").click();
        }
        //alert(nim);
       // document.getElementById('autocomplete').value = nim;
        // var url2 = '<?php echo base_url() ?>' + 'server/get_list_kecamatan/01';
        // get_select_data("#select_kecamatan", url2);

        // Inisiasi map
        map = new google.maps.Map(document.getElementById('gmap'), {
            zoom: 10,
            center: {lat: -2.7410513, lng: 106.4405872},
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var autocomplete_data = <?php echo json_encode($autocomplete) ?>; // Data autocomplete yang disediakan dari controller
        // console.log(autocomplete_data);
        $('#autocomplete').typeahead({
            source : autocomplete_data,
            fitToElement : true
        });

        // $('#div_info').slideUp();
        // $('#div_multiple').slideUp();
    });


    function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
        marker = [];

    }

    function drop_then_add(array_lokasi) {
        clearMarkers();
        for (var i = 0; i < array_lokasi.length; i++) {
            var position = new google.maps.LatLng(array_lokasi[i]['lat'], array_lokasi[i]['lng']);
            // console.log(position);
            addMarkerWithTimeout(position, array_lokasi[i], i * 1000);
            bounds.extend(position);
        }
        map.fitBounds(bounds);
    }

    function addInformation(info) {
        $('#autocomplete').val(info['nama'] + " | " + info['nim']);
        $('#info_nama').text(info['nama']);
        $('#info_kelas').text(info['kelas']);
        $('#info_tanggal_lahir').text(info['tgl_lahir']);
        $('#info_alamat').text(info['alamat']);
        $('#info_nomor_telepon').text(info['no_telepon']);
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
          google.maps.event.addListener(marker,'click', (function(marker,info,infowindow){
              return function() {
                infowindow.setContent(info['nama']);
                $('#div_multiple').slideUp();
                addInformation(info);
                $('#div_info').slideDown();
                // set current location to be sent via email
                currentLocation = new google.maps.LatLng(info['lat'], info['lng']);
                infowindow.open(map,marker);
                console.log(currentLocation);
                };
            })(marker,info,infowindow));
        }, timeout);
    }

    $('#form_search').submit(function (event) {
        var autocomplete = $('#autocomplete').val();
        var jumlah = autocomplete.length;
        if(jumlah == '7'){
            var nim = autocomplete;
        }else if(autocomplete == 'undefined'){
            document.getElementById('autocomplete').value = '';
        }else{
            autocomplete = autocomplete.split(" | ");
            var nim = autocomplete[1];
        }
        var lat,lng;
        $('#div_info').slideUp();
        $('#icon_search').attr('class', 'fa fa-spinner fa-spin');
        $.ajax({
            url: '<?php echo base_url('server/get_pcl/') ?>' + nim,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                //alert(no_ruta);
                console.log(result);
                $('#icon_search').attr('class', 'fa fa-search');
                if (result['data'].length == 1) {
                    $('#alert_success').fadeIn();
                    $('#alert_notfound').fadeOut();
                    addInformation(result['data'][0]);
                    $('#div_info').slideDown();
                    drop_then_add(result['data']);
                    console.log(result['data'][0]['lat']);
                    lat = parseFloat(result['data'][0]['lat']);
                    lng = parseFloat(result['data'][0]['lng']);
                    map.setCenter({lat: lat, lng: lng});
                    map.setZoom(14);
                    // set current location to be sent via email
                    currentLocation = new google.maps.LatLng(result['data'][0]['lat'], result['data'][0]['lng']);
                }else {
                    console.log('set default location');
                    map.setCenter({lat: -2.7410513, lng: 106.4405872});
                    map.setZoom(10);
                    $('#alert_success').fadeOut();
                    $('#alert_notfound').fadeIn();
                }
            }
        });
        event.preventDefault();
    });


    $('#btn_cari').click(function () {
        $('#autocomplete').val('');
        var parameter_cari = '';
        parameter_cari += ($("#select_kabupaten").val() != null) ? "/" + $("#select_kabupaten").val() : '';
        parameter_cari += ($("#select_kecamatan").val() != null) ? "/" + $("#select_kecamatan").val() : '';
        parameter_cari += ($("#select_kelurahandesa").val() != null) ? "/" + $("#select_kelurahandesa").val() : '';
        parameter_cari += ($("#select_bloksensus").val() != null) ? "/" + $("#select_bloksensus").val() : '';
        console.log(parameter_cari);
        var array_lokasi = [];
        $('#div_multiple').slideUp();
        $('#div_info').slideUp();
        $('#icon_search').attr('class', 'fa fa-spinner fa-spin');
        $.ajax({
            // CHANGE ME
            url: '<?php echo base_url('server/get_list_unit_cacah/') ?>' + parameter_cari,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                console.log(result);
                $('#icon_search').attr('class', 'fa fa-search');
                if (result['data'].length != 0) {
                    if (result['data'].length == 1) {
                        $('#alert_success').fadeIn();
                        $('#alert_multiple').fadeOut();
                        $('#alert_notfound').fadeOut();
                        array_lokasi.push(result['data'][0]); // Karena hanya ada 1 orang
                        addInformation(result['data'][0]); // Karena hanya ada 1 orang
                        $('#div_info').slideDown();
                    } else { // Ada unit cacah yang memiliki nama sama
                        $('#alert_success').fadeOut();
                        $('#alert_multiple').fadeIn();
                        $('#alert_notfound').fadeOut();
                        $.each(result['data'], function (key, value) {
                            array_lokasi.push(value);
                        });
                        $('#div_multiple').slideDown();
                    }
                    drop_then_add(array_lokasi);
                }else {
                    console.log('set default location');
                    map.setCenter({lat: -2.7410513, lng: 106.4405872});
                    map.setZoom(10);
                    $('#alert_success').fadeOut();
                    $('#alert_multiple').fadeOut();
                    $('#alert_notfound').fadeIn();
                }
            }
        });
    });

    $('#form_email').submit(function (event){
        $.ajax({
            // CHANGE ME
            url: '<?php echo base_url('server/sent_email') ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                    'email' : $('#email').val(),
                    'lat' : currentLocation.lat(),
                    'lng' : currentLocation.lng()
                    },
            success: function(result){
                console.log(result);
            },
            error: function(result){
                console.log(result);
            }
        });
        event.preventDefault();
    });
</script>
