<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Server extends CI_Controller {

    function __construct(){
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        parent::__construct();
        $this->load->model('Server_Model');
        $this->load->helper('statistik');
    }

    public function index() {
        echo "Hayo ngapain?";
    }

    function login() { // Database kedua
        header('Content-Type: application/json');
        $username = $this->input->get("username");
        $password = $this->input->get("password");
        $login = $this->Server_Model->login($username,$password);
        $result = array();
        if($login) {
            $result['nama'] = $login->nama;
            $result['nim'] = $login->nim;
            $result['idTim'] = $login->id_tim;
            $result['isKoor'] = $this->Server_Model->isKoor($username);
            if (!$result['isKoor']) {
                $result['nimKoor'] = $login->nim_koor;
                $result['nimKoor'] = $login->nim_koor;
                # code...
            }
            // if (!$result['isKoor']) {
            //     $result['nimKoor'] = $login->nim_koor;
            // }
            // $result['anggota_tim'] = ($login->nim == $login->nim_koor) ? $this->Server_Model->get_anggota_tim($username) : null;
            // if ($result['isKoor']) {
            //     $nim_wilayah_kerja = array_column($result['anggota_tim'], 'nim'); // nim yang digunakan untuk mencari wilayah kerja
            // } else {
            //     $nim_wilayah_kerja = $username; // nim yang digunakan untuk mencari wilayah kerja
            // }
            // $result['wilayah_kerja'] = $this->Server_Model->get_wilayah_kerja($nim_wilayah_kerja);
            // for ($i=0; $i < count($result['wilayah_kerja']); $i++) {
            //     $kode_bs = $result['wilayah_kerja'][$i]['blok_sensus'];
            //     $result['wilayah_kerja'][$i]['blok_sensus'] = array(
            //                                                     'kode_bs' => $kode_bs,
            //                                                     'ruta_cacah' => [array('nama' => 'luqman', 'long' => '100', 'lat' => '200'),array('nama' => 'luqman', 'long' => '100', 'lat' => '200'),array('nama' => 'luqman', 'long' => '100', 'lat' => '200'), array('nama' => 'luqman', 'long' => '100', 'lat' => '200')]
            //                                                   );
            // }
            // $result['beban_cacah'] = 0;
            // foreach ($result['wilayah_kerja'] as $wilayah) {
            //   $result['beban_cacah'] += $wilayah['beban_cacah'];
            // }
            $result['status'] = 'success';
        } else {
            $result['status'] = 'failed';
        }
        echo json_encode($result); exit();
    }

    function get_extra_content($nim){
        header('Content-Type: application/json');
        $result = array(); $total_progress = 0;
        $isValid = $this->Server_Model->check_nim($nim);
        if ($isValid) {
            $result['status'] = 'valid';
            $isKoor = $this->Server_Model->isKoor($nim);
            if ($isKoor) {
                $anggota_tim = $this->Server_Model->get_anggota_tim($nim);
                for ($i=0; $i < count($anggota_tim); $i++) {
                    $anggota_tim[$i]['wilayah_kerja'] = $this->Server_Model->get_wilayah_kerja($anggota_tim[$i]['nim']);
                    foreach ($anggota_tim[$i]['wilayah_kerja'] as $wilayah) {
                        $total_progress += $wilayah->progress;
                    }
                    $anggota_tim[$i]['total_progress'] = $total_progress;
                    // $anggota['detail_cacah'] = $this->Server_Model->get_detail_cacah$anggota);
                    // echo json_encode($anggota['detail_cacah']);
                }
                $result['anggota_tim'] = $anggota_tim;
            } else {
                $result['wilayah_kerja'] = $this->Server_Model->get_wilayah_kerja($nim);
                foreach ($result['wilayah_kerja'] as $wilayah) {
                    $total_progress += $wilayah->progress;
                }
                $result['total_progress'] = $total_progress;
            }
        } else {
            $result['status'] = 'invalid';
        }
        echo json_encode($result); exit();
    }

    function get_jumlah_cacah($nim){ // Database pertama
        header('Content-Type: application/json');
        $jumlah = $this->Server_Model->get_jumlah_cacah($nim);
        $result = array('jumlah' => $jumlah);
        echo json_encode($result); exit();
    }

    // SERVICE GET DATA
    function get_list_kabupaten() { // Database pertama
        header('Content-Type: application/json');
        $result = $this->Server_Model->get_list_kabupaten();
        echo json_encode($result);
    }

    function get_list_kecamatan($id_kabupaten) { // Database pertama
        header('Content-Type: application/json');
        $result = $this->Server_Model->get_list_kecamatan($id_kabupaten);
        echo json_encode($result);
    }

    function get_list_kelurahandesa($id_kabupaten, $id_kecamatan) { // Database pertama
        header('Content-Type: application/json');
        $result = $this->Server_Model->get_list_kelurahandesa($id_kabupaten, $id_kecamatan);
        echo json_encode($result);
    }

    function get_list_bloksensus($id_kabupaten, $id_kecamatan, $id_kelurahandesa) { // Database pertama
        header('Content-Type: application/json');
        $result = $this->Server_Model->get_list_bloksensus($id_kabupaten, $id_kecamatan, $id_kelurahandesa);
        echo json_encode($result);
    }

    function get_agregat_cacah() { // Database pertama
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_agregat_cacah();
        $total_cacah = 0; $total_beban = 0;
        foreach ($data as $item) {
            $total_cacah += $item->jumlah;
            $total_beban += $item->beban_cacah;
        }
        $result = array(
                    'data' => $data,
                    'total_cacah' => $total_cacah, // agregat di dashoard
                    'total_beban' => $total_beban, // agregat di dashoard
                );
        echo json_encode($result); exit();
    }

    function get_detail_cacah($wilayah1 = NULL) {
        header('Content-Type: application/json');
        // wilayah1 : NULL > tidak ada filter kabupaten di agregat tiap BS

        $data = $this->Server_Model->get_detail_cacah($wilayah1);
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_agregat_listing() {
        header('Content-Type: application/json');

        $data = $this->Server_Model->get_agregat_listing();
        $total_listing = 0; $total_beban = 0;
        foreach ($data as $item) {
            $total_listing += $item->jumlah;
        }
        $result = array(
                    'data' => $data,
                    'total_listing' => $total_listing, // agregat di dashoard
                );
        echo json_encode($result); exit();
    }

    function get_detail_listing($wilayah1 = NULL) {
        header('Content-Type: application/json');
        // wilayah1 : NULL > tidak ada filter kabupaten di agregat tiap BS

        $data = $this->Server_Model->get_detail_listing($wilayah1);
        $result = array('data' => $data);
        var_dump($data);
        echo json_encode($result); exit();
    }
	
	function get_detail_ksa($wilayah1 = NULL) 
	{
        header('Content-Type: application/json');
        // wilayah1 : NULL > tidak ada filter kabupaten di agregat tiap BS

        $data = $this->Server_Model->get_detail_ksa();
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }
    
    function get_detail_ubinan($wilayah1 = NULL){
        header('Content-Type: application/json');
        // wilayah1 : NULL > tidak ada filter kabupaten di agregat tiap BS

        $data = $this->Server_Model->get_detail_ubinan($wilayah1);
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_list_modul() { // Database pertama -> konversi nanti
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_modul();
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_list_variabel() { // Database pertama -> konversi nanti
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_variabel();
        //$chart = $this->Server_Model->dummy_variabel($modul);
        $result = $data;
        echo json_encode($result); exit();
    }

    function get_analysis_multivariabel($modul,$variabel_pertama,$variabel_kedua) { // Database pertama -> konversi nanti
        header('Content-Type: application/json');
        $result = $this->Server_Model->analysis_variabel_model($modul,$variabel_pertama,$variabel_kedua);
        echo json_encode($result); exit();
    }

    function get_variabel($modul, $variabel) { // Database pertama -> konversi nanti
        header('Content-Type: application/json');
        $tipe = $this->Server_Model->get_variabel_tipe($modul, $variabel)->tipe;
        $data = $this->Server_Model->get_variabel_data($modul, $variabel, $tipe);
        $result = array(
                    'tipe' => $tipe,
                    'data' => $data
                );
        echo json_encode($result); exit();
    }

    function get_list_unit_cacah($wilayah1 = NULL, $wilayah2 = NULL, $wilayah3 = NULL, $wilayah4 = NULL) { // Database pertama
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_unit_cacah($wilayah1, $wilayah2, $wilayah3, $wilayah4);
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_unit_cacah($nama) { // Database pertama
        header('Content-Type: application/json');
        $nama = urldecode($nama);
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_unit_cacah($nama);
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_list_pcl($wilayah1 = NULL, $wilayah2 = NULL, $wilayah3 = NULL, $wilayah4 = NULL) { // Database pertama + kedua
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_pcl($wilayah1, $wilayah2, $wilayah3, $wilayah4);
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_pcl($nim) { // Database kedua
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_pcl($nim);
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_list_masalah() { // Database kedua
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_masalah();
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }
function get_list_all() { // Database kedua
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_all();
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }
function get_list_masalah_narasumber($kode=0) { // Database kedua
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_masalah_narasumber($kode);
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_log_kuesioner() { // Database ketiga
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_log_kuesioner();
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    // UNDER CONSTRUCTION
    function set_monitoring_status($id, $status) {
        $this->Server_Model->set_monitoring_status($id, $status);
    }

    function sent_get_location($id) { // CHANGE ME : Mungkin nanti diganti pake nim
        $this->load->library('ci_pusher');
        $pusher = $this->ci_pusher->get_pusher();
        $event = $pusher->trigger($id, 'my_event', array('message' => 'Hello World'));
        echo json_encode($event);
    }
    
    function sent_email() {
        header('Content-Type: application/json');
        $this->load->library('email');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => '14.8261@stis.ac.id', // change it to yours
            'smtp_pass' => '', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $this->email->initialize($config);
        $email = $this->input->post('email');
        $lat = $this->input->post('lat');
        $lng = $this->input->post('lng');

        $url_map = "https://maps.googleapis.com/maps/api/staticmap?center=$lat,$lng&zoom=14&size=640x640&scale=2&markers=$lat,$lng&key=AIzaSyArVsYMGMdGVut1E0k1i7S8dMZGcd2_M-8";
        $link = "http://maps.google.com/maps?&z=14&q=$lat+$lng&ll=$lat+$lng";

        // $message = "<div><a href='$link'><img src='$url_map'></a></div>";
        // $this->email->set_newline("\r\n");
        // $this->email->from('14.8261@stis.ac.id'); // change it to yours
        // $this->email->to($email);// change it to yours
        // $this->email->message($message);
        // $this->email->subject('Hasil pencarian lokasi');
        // if($this->email->send()){
        //     $status = 'success';
        // } else {
        //     $status = 'success';
        // }
        $result = array(
                    'url_map' => $url_map,
                    'link' => $link,
                    // 'status' => $status
                );
        echo json_encode($result); exit();
    }

    public function get_analysis_rt($modul,$variabel){
         header('Content-Type: application/json');

        if(strpos($variabel, ',') !== false){//kalo dalam variabel ada komma
            $new_array = explode(',',$variabel);

            $var1 = $new_array[0];
            $var2 = $new_array[1];

            $result_que = $this->Server_Model->get_double_variabel($modul,$var1,$var2);
            $result_jumlah_var1 = $this->Server_Model->get_count_variabel($modul,$var1);
            $result_jumlah_var2 = $this->Server_Model->get_count_variabel($modul,$var2);
            $result_jenis_var1 = $this->Server_Model->get_variabel_tipe($modul,$var1);
            $result_jenis_var2 = $this->Server_Model->get_variabel_tipe($modul,$var2);

            $tipe_var1 = $result_jenis_var1->tipe;
            $tipe_var2 = $result_jenis_var2->tipe;

            if($tipe_var1!='int' && $tipe_var1!='decimal' && $tipe_var2!='int' && $tipe_var2!='decimal'){

                    $result = array('data' => $result_que,
                              'jumlah_var1' => $result_jumlah_var1->jumlah_var,
                              'jumlah_var2' => $result_jumlah_var2->jumlah_var,
                              'jenis_var1' => $result_jenis_var1->tipe,
                              'jenis_var2' => $result_jenis_var2->tipe
                              );
            }else{

                    $result = array('data' => $result_que,
                              'jumlah_var1' => $result_jumlah_var1->jumlah_var,
                              'jumlah_var2' => $result_jumlah_var2->jumlah_var,
                              'jenis_var1' => $result_jenis_var1->tipe,
                              'jenis_var2' => $result_jenis_var2->tipe
                              );
            }


            echo json_encode($result); exit();

        }else{ // kalau dia variabel tunggal
            $result_analysis = $this->Server_Model->analysis($modul,$variabel);
            $max = $result_analysis->MAX;
            $varmax = $result_analysis->$variabel;

            $data = $this->Server_Model->get_variabel_tipe($modul,$variabel);
            $tipe = $data->tipe; //change

            if($tipe!='int' && $tipe!='decimal' && $tipe!='float'){ // kalau dia kualitatif
            	//check variabel lookup

            	$result_kualitatif = $this->Server_Model->hasil_kuali($modul,$variabel);
                $result = array('data' => $result_kualitatif,
                            'tipe' => $tipe,
                            'max' => $max,
                            'varmax' => $varmax);
                echo json_encode($result); exit();
            }else{ // kalau dia kuantitatif
                $result_kuantitatif = $this->Server_Model->hasil_kuanti($modul,$variabel);

                $result = array_column($result_kuantitatif, $variabel);

                $result_final = [];
                //handler null
                for ($i=0; $i <count($result) ; $i++) {
                    if($result[$i] == null){
                        $result[$i] = "0";
                        array_push($result_final, $result[$i]);
                    }else{
                        array_push($result_final, $result[$i]);
                    }

                }

        // echo json_encode($result);
                $result = array('data' => $result_final,
                                'tipe' => $tipe,
                                'max' => find_max($result),
                                'min' => find_min($result),
                                'mean' => find_mean($result),
                                'stdev' => find_stdev($result),
                                'vars' => find_variance($result),
                                'q1' => find_q1($result),
                                'med' => find_med($result),
                                'q3' => find_q3($result),
                                'modus' => find_modus($result),
                                'range' => find_range($result),
                                // 'skewness' => find_skewness($result),
                                // 'kurtosis' => find_kurtosis($result),
                                'histogram' => find_histogram($result));
                echo json_encode($result); exit();

             }

        }
    }

    public function dummy($modul,$variabel){
        $result = $this->Server_Model->hasil_kuanti($modul,$variabel);
        $result = array_column($result, $variabel);
        // echo json_encode($result);
        echo "max: " . find_max($result) . "<br>";
        echo "min: " . find_min($result) . "<br>";
        echo "med: " . find_med($result) . "<br>";
        echo "range: " . find_range($result) . "<br>";
        echo "modus: " . find_modus($result) . "<br>";
        echo "q1: " . find_q1($result) . "<br>";
        echo "q3: " . find_q3($result) . "<br>";
        echo "variance: " . find_variance($result) . "<br>";
        echo "standar deviasi: " . find_stdev($result) . "<br>";
        // echo "skewness :". find_skewness($result) . "<br>";
        // echo "kurtosis :". find_kurtosis($result) . "<br>";
        skewnessandkurtosis($result, $skew, $kurt);
        echo "<p>skewness = $skew </p>";
        echo "<p>kurtosis=$kurt</p>";
        echo "histogram array :". json_encode(find_histogram($result)) . "<br>";
        echo "rata - rata :". find_mean($result) . "<br>";

        //$result = array('max' => find_max($result_que));
    }

    public function get_tabel_listing($kab){
        $percentage = [];

        $result = $this->Server_Model->get_tabel_listing($idBs);
        // for ($i=0; $i <count($result) ; $i++) {
        //     $percentage[$i] = ($result[$i]['progress']*100).%;
        //     # code...
        // }
        // $result['progress'] = "<div class='progress progress-striped active' style='margin-bottom:0%;'><div class='progress-bar progress-bar-success' role='progress-bar' style='width: 68%;'>".$result['progress'].<
        $result = array('data' => $result);
        echo json_encode($result);
    }

    public function get_tabel_unit_cacah(){
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_tabel_unit_cacah();
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    public function get_tabel_pcl(){
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_tabel_pcl();
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }
    
    public function get_tabel_unit_ubinan(){
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_tabel_unit_ubinan();
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }
    /////////////////////////////////////////////////////////////////ROZAN CONTROL////////////////////////////////////////////////////////////////////
        
        function get_maptematik_faseksa(){
            $fase_id=$this->input->get('fase_id');
            $nama_var_pembagi = "jumlah_subsegmen_selesai";
            $data_maptematik_faseksa = array();
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $maptematik_faseksa = file_get_contents($url_ksa);
            $maptematik_faseksa_decode = json_decode($maptematik_faseksa, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($maptematik_faseksa_decode); $i++){
                
                switch (intval($maptematik_faseksa_decode[$i]['id_kab'])) {
        case 5101:
		$data_maptematik_faseksa['jembrana'] = round((intval($maptematik_faseksa_decode[$i][$fase_id])/intval($maptematik_faseksa_decode[$i][$nama_var_pembagi]))*1000);
		break;
	case 5102:
		$data_maptematik_faseksa['tabanan'] = round((intval($maptematik_faseksa_decode[$i][$fase_id])/intval($maptematik_faseksa_decode[$i][$nama_var_pembagi]))*1000);
		break;
	case 5103:
		$data_maptematik_faseksa['badung'] = round((intval($maptematik_faseksa_decode[$i][$fase_id])/intval($maptematik_faseksa_decode[$i][$nama_var_pembagi]))*1000);
		break;
	case 5104:
		$data_maptematik_faseksa['gianyar'] = round((intval($maptematik_faseksa_decode[$i][$fase_id])/intval($maptematik_faseksa_decode[$i][$nama_var_pembagi]))*1000);
		break;
	case 5105:
		$data_maptematik_faseksa['klungkung'] = round((intval($maptematik_faseksa_decode[$i][$fase_id])/intval($maptematik_faseksa_decode[$i][$nama_var_pembagi]))*1000);
		break;
	case 5106:
		$data_maptematik_faseksa['bangli'] = round((intval($maptematik_faseksa_decode[$i][$fase_id])/intval($maptematik_faseksa_decode[$i][$nama_var_pembagi]))*1000);
		break;
        case 5107:
		$data_maptematik_faseksa['karang_asem'] = round((intval($maptematik_faseksa_decode[$i][$fase_id])/intval($maptematik_faseksa_decode[$i][$nama_var_pembagi]))*1000);
		break;
        case 5108:
		$data_maptematik_faseksa['buleleng'] = round((intval($maptematik_faseksa_decode[$i][$fase_id])/intval($maptematik_faseksa_decode[$i][$nama_var_pembagi]))*1000);
		break;
        case 5171:
		$data_maptematik_faseksa['denpasar'] = round((intval($maptematik_faseksa_decode[$i][$fase_id])/intval($maptematik_faseksa_decode[$i][$nama_var_pembagi]))*1000);
		break;
	default:
		
		break;
                }
                                      };
            
            //$character = json_decode($json);
            //echo $character->name;
            //$data_tableksatercacahkankot = $this->Server_Model->get_tableksatercacahkabkot_model($kabkot_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_maptematik_faseksa));
        }
        
        function get_embedkecamatanawal_control(){
            $kabkot_id=$this->input->get('kabkot_id');
           // $embed_kabkot = $this->Server_Model->get_embed_kabkott($idembed);
            $kecamatan_id = ( $kabkot_id * 1000 ) +10;
            $data_embedkecamatanawal = $this->Server_Model->get_embedkecamatanawal_model($kecamatan_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_embedkecamatanawal));
        }
        
        function get_embedkecamatan_control(){
            $kecamatan_id=$this->input->get('kecamatan_id');
           // $embed_kabkot = $this->Server_Model->get_embed_kabkott($idembed);
            $data_embedkecamatan = $this->Server_Model->get_embedkecamatan_model($kecamatan_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_embedkecamatan));
        }
        
        function get_embedkabkot_control(){
            $kabkot_id=$this->input->get('kabkot_id');
           // $embed_kabkot = $this->Server_Model->get_embed_kabkott($idembed);
            $data_embedkabkot = $this->Server_Model->get_embedkabkot_model($kabkot_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_embedkabkot));
        }
        
        function get_allkecamatan_control(){
            $kabkot_id=$this->input->get('kabkot_id');
            $data_allkecamatan = $this->Server_Model->get_allkecamatan_model($kabkot_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_allkecamatan));
        }
        
        function get_tablenamakabkot_control(){
            $kabkot_id=$this->input->get('kabkot_id');
            $data_tablenamakabkotawal = $this->Server_Model->get_tablenamakabkot_model($kabkot_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_tablenamakabkotawal));
        }
        
        function get_tablenamakecamatanawal_control(){
            $kabkot_id=$this->input->get('kabkot_id');
            $kecamatan_id = ($kabkot_id * 1000) + 10;
            $data_tablenamakecamatanawal = $this->Server_Model->get_namakecamatanawal_model($kecamatan_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_tablenamakecamatanawal));
        }
        
        function get_tablenamakecamatan_control(){
            $kecamatan_id=$this->input->get('kecamatan_id');
            $data_tablenamakecamatan = $this->Server_Model->get_namakecamatan_model($kecamatan_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_tablenamakecamatan));
        }
        
        function get_tableksatercacahdanprogresskabkot_control(){
            $kabkot_id=$this->input->get('kabkot_id');
            $tercacahdanprogress_ksa_kabkot = array();
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_tableksatercacahdanprogresskabkot = file_get_contents($url_ksa);
            $data_tableksatercacahdanprogresskabkot_decode = json_decode($data_tableksatercacahdanprogresskabkot, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_tableksatercacahdanprogresskabkot_decode); $i++){
				if ($data_tableksatercacahdanprogresskabkot_decode[$i]['id_kab']=$kabkot_id) {
                                        $tercacahdanprogress_ksa_kabkot['tercacah'] = $data_tableksatercacahdanprogresskabkot_decode[$i]['jumlah_segmen_selesai'];
					$tercacahdanprogress_ksa_kabkot['progress'] = $data_tableksatercacahdanprogresskabkot_decode[$i]['progres_segmen'];
					break;
					};};
            $tercacahdanprogress_ksa_kabkot['progress'] = round($tercacahdanprogress_ksa_kabkot['progress'],2);
            //$character = json_decode($json);
            //echo $character->name;
            //$data_tableksatercacahkankot = $this->Server_Model->get_tableksatercacahkabkot_model($kabkot_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($tercacahdanprogress_ksa_kabkot));
        }
        
        function get_tableksatercacahdanprogresskecamatan_control(){
            $kecamatan_id=$this->input->get('kecamatan_id');
            $tercacahdanprogress_ksa_kecamatan = array();
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kec_progress";
            $data_tableksatercacahdanprogresskecamatan = file_get_contents($url_ksa);
            $data_tableksatercacahdanprogresskecamatan_decode = json_decode($data_tableksatercacahdanprogresskecamatan, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_tableksatercacahdanprogresskecamatan_decode); $i++){
				if ($data_tableksatercacahdanprogresskecamatan_decode[$i]['id_kec']=$kecamatan_id) {
                                        $tercacahdanprogress_ksa_kecamatan['tercacah'] = $data_tableksatercacahdanprogresskecamatan_decode[$i]['jumlah_segmen_selesai'];
					$tercacahdanprogress_ksa_kecamatan['progress'] = $data_tableksatercacahdanprogresskecamatan_decode[$i]['progres_segmen'];
					break;
					};};
            $tercacahdanprogress_ksa_kecamatan['progress'] = round($tercacahdanprogress_ksa_kecamatan['progress'],2);
            //$character = json_decode($json);
            //echo $character->name;
            //$data_tableksatercacahkankot = $this->Server_Model->get_tableksatercacahkabkot_model($kabkot_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($tercacahdanprogress_ksa_kecamatan));
        }
        
        function get_tableunitterlistingkabkot_control(){
            $kabkot_id=$this->input->get('kabkot_id');
            $kabkot_id_new = $kabkot_id - 5100;
            $data_tableunitterlistingkabkot = $this->Server_Model->get_tableunitterlistingkabkot_model($kabkot_id_new);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_tableunitterlistingkabkot));
        }
        
        function get_tableunitterlistingkecamatan_control(){
            //$kabkot_id=$this->input->get('kabkot_id');
            $kecamatan_id=$this->input->get('kecamatan_id');
            $kabkot_id = $kecamatan_id / 1000;
            $kabkot_id_floor = floor($kabkot_id);
            $kabkot_id_new = $kabkot_id_floor - 5100;
            //$kabkot_id_new = $kabkot_id - 5100;
            //$pengurang_kecamatan = $kabkot_id * 1000;
            $kecamatan_id_new = $kecamatan_id - ($kabkot_id_floor * 1000);
            //$kecamatan_id_new = $kecamatan_id - 5100;
            $data_tableunitterlistingkecamatan = $this->Server_Model->get_tableunitterlistingkecamatan_model($kabkot_id_new,$kecamatan_id_new);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_tableunitterlistingkecamatan));
        }
        
        //function get_progresscacahtotal_control(){
            //$data = file_get_contents(<url of that website>);
            //$data = json_decode($data, true); // Turns it into an array, change the last argument to false to make it an object
            
            //$character = json_decode($json);
            //echo $character->name;
//            $data_progresscacahtotal_ksa = json_decode(file_get_contents());
//            $data_progresscacahtotal_ubinan = json_decode($this->Server_Model->get_progresscacahtotal_ubinan_model());
//            $data_progresscacahtotal_pencacahan = json_decode($this->Server_Model->get_progresscacahtotal_pencacahan_model());
            //$data_progresscacahtotal = $data_progresscacahtotal_ksa-> . $data_progresscacahtotal_ubinan-> . $data_progresscacahtotal_pencacahan-> ;
            //$this->output
                    //->set_content_type('application/json')
                    //->set_output(json_encode($data_progresscacahtotal));
            //$data_progresscacahtotal_ksa_txt = json_decode();
            //$data_progresscacahtotal_ubinan_txt = json_decode();
            //$data_progresscacahtotal_pencacahan_txt = json_decode();
        //}
        
        function get_progresstotaljembrana_control(){
            $kabkot_id=5101;
            $progress_ksa_kabkot=0;
            $progress_ubinan_kabkot=0;
            $progress_cacah_kabkot=0;
            $progress_total=0;
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_progress_ksa_kabkot = file_get_contents($url_ksa);
            $data_progress_ksa_kabkot_decode = json_decode($data_progress_ksa_kabkot, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_progress_ksa_kabkot_decode); $i++){
				if ($data_progress_ksa_kabkot_decode[$i]['id_kab']=$kabkot_id) {
                                        $progress_ksa_kabkot = intval($data_progress_ksa_kabkot_decode[$i]['progres_segmen']);
					break;
					};};
            
            $kabkot_id_new=$kabkot_id - 5100;
            $akumulasi_tercacah_nim = array();
            $data_tableprogresscacahkabkot_nim = $this->Server_Model->get_tableprogresscacahkabkot_nim_model($kabkot_id_new);
            $data_tableprogresscacahkabkot_beban = $this->Server_Model->get_tableprogresscacahkabkot_beban_model($kabkot_id_new);
            for($i=0; $i < count($data_tableprogresscacahkabkot_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkabkot_tercacah_nim_model(intval($data_tableprogresscacahkabkot_nim[$i]['nim']));
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $progress_cacah_kabkot += intval($akumulasi_tercacah_nim[$i]);
				};
            $progress_cacah_kabkot = $progress_cacah_kabkot / intval($data_tableprogresscacahkabkot_beban[0]['beban']);
           
            
            $progress_total= ($progress_ksa_kabkot + $progress_ubinan_kabkot + $progress_cacah_kabkot)/3;
            $progress_total= round($progress_total,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($progress_total));
                                        
            
            }
        
        function get_progresstotaltabanan_control(){
            $kabkot_id=5102;
            $progress_ksa_kabkot=0;
            $progress_ubinan_kabkot=0;
            $progress_cacah_kabkot=0;
            $progress_total=0;
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_progress_ksa_kabkot = file_get_contents($url_ksa);
            $data_progress_ksa_kabkot_decode = json_decode($data_progress_ksa_kabkot, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_progress_ksa_kabkot_decode); $i++){
				if ($data_progress_ksa_kabkot_decode[$i]['id_kab']=$kabkot_id) {
                                        $progress_ksa_kabkot = intval($data_progress_ksa_kabkot_decode[$i]['progres_segmen']);
					break;
					};};
            
            $kabkot_id_new=$kabkot_id - 5100;
            $akumulasi_tercacah_nim = array();
            $data_tableprogresscacahkabkot_nim = $this->Server_Model->get_tableprogresscacahkabkot_nim_model($kabkot_id_new);
            $data_tableprogresscacahkabkot_beban = $this->Server_Model->get_tableprogresscacahkabkot_beban_model($kabkot_id_new);
            for($i=0; $i < count($data_tableprogresscacahkabkot_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkabkot_tercacah_nim_model(intval($data_tableprogresscacahkabkot_nim[$i]['nim']));
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $progress_cacah_kabkot += intval($akumulasi_tercacah_nim[$i]);
				};
            $progress_cacah_kabkot = $progress_cacah_kabkot / intval($data_tableprogresscacahkabkot_beban[0]['beban']);
           
            
            $progress_total= ($progress_ksa_kabkot + $progress_ubinan_kabkot + $progress_cacah_kabkot)/3;
            $progress_total= round($progress_total,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($progress_total));
                                        
            
            }
        
        function get_progresstotalbadung_control(){
            $kabkot_id=5103;
            $progress_ksa_kabkot=0;
            $progress_ubinan_kabkot=0;
            $progress_cacah_kabkot=0;
            $progress_total=0;
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_progress_ksa_kabkot = file_get_contents($url_ksa);
            $data_progress_ksa_kabkot_decode = json_decode($data_progress_ksa_kabkot, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_progress_ksa_kabkot_decode); $i++){
				if ($data_progress_ksa_kabkot_decode[$i]['id_kab']=$kabkot_id) {
                                        $progress_ksa_kabkot = intval($data_progress_ksa_kabkot_decode[$i]['progres_segmen']);
					break;
					};};
            
            $kabkot_id_new=$kabkot_id - 5100;
            $akumulasi_tercacah_nim = array();
            $data_tableprogresscacahkabkot_nim = $this->Server_Model->get_tableprogresscacahkabkot_nim_model($kabkot_id_new);
            $data_tableprogresscacahkabkot_beban = $this->Server_Model->get_tableprogresscacahkabkot_beban_model($kabkot_id_new);
            for($i=0; $i < count($data_tableprogresscacahkabkot_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkabkot_tercacah_nim_model(intval($data_tableprogresscacahkabkot_nim[$i]['nim']));
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $progress_cacah_kabkot += intval($akumulasi_tercacah_nim[$i]);
				};
            $progress_cacah_kabkot = $progress_cacah_kabkot / intval($data_tableprogresscacahkabkot_beban[0]['beban']);
           
            
            $progress_total= ($progress_ksa_kabkot + $progress_ubinan_kabkot + $progress_cacah_kabkot)/3;
            $progress_total= round($progress_total,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($progress_total));
                                        
            
            }
        
        function get_progresstotalgianyar_control(){
            $kabkot_id=5104;
            $progress_ksa_kabkot=0;
            $progress_ubinan_kabkot=0;
            $progress_cacah_kabkot=0;
            $progress_total=0;
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_progress_ksa_kabkot = file_get_contents($url_ksa);
            $data_progress_ksa_kabkot_decode = json_decode($data_progress_ksa_kabkot, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_progress_ksa_kabkot_decode); $i++){
				if ($data_progress_ksa_kabkot_decode[$i]['id_kab']=$kabkot_id) {
                                        $progress_ksa_kabkot = intval($data_progress_ksa_kabkot_decode[$i]['progres_segmen']);
					break;
					};};
            
            $kabkot_id_new=$kabkot_id - 5100;
            $akumulasi_tercacah_nim = array();
            $data_tableprogresscacahkabkot_nim = $this->Server_Model->get_tableprogresscacahkabkot_nim_model($kabkot_id_new);
            $data_tableprogresscacahkabkot_beban = $this->Server_Model->get_tableprogresscacahkabkot_beban_model($kabkot_id_new);
            for($i=0; $i < count($data_tableprogresscacahkabkot_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkabkot_tercacah_nim_model(intval($data_tableprogresscacahkabkot_nim[$i]['nim']));
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $progress_cacah_kabkot += intval($akumulasi_tercacah_nim[$i]);
				};
            $progress_cacah_kabkot = $progress_cacah_kabkot / intval($data_tableprogresscacahkabkot_beban[0]['beban']);
           
            
            $progress_total= ($progress_ksa_kabkot + $progress_ubinan_kabkot + $progress_cacah_kabkot)/3;
            $progress_total= round($progress_total,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($progress_total));
                                        
            
            }
        
        function get_progresstotalklungkung_control(){
            $kabkot_id=5105;
            $progress_ksa_kabkot=0;
            $progress_ubinan_kabkot=0;
            $progress_cacah_kabkot=0;
            $progress_total=0;
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_progress_ksa_kabkot = file_get_contents($url_ksa);
            $data_progress_ksa_kabkot_decode = json_decode($data_progress_ksa_kabkot, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_progress_ksa_kabkot_decode); $i++){
				if ($data_progress_ksa_kabkot_decode[$i]['id_kab']=$kabkot_id) {
                                        $progress_ksa_kabkot = intval($data_progress_ksa_kabkot_decode[$i]['progres_segmen']);
					break;
					};};
            
            $kabkot_id_new=$kabkot_id - 5100;
            $akumulasi_tercacah_nim = array();
            $data_tableprogresscacahkabkot_nim = $this->Server_Model->get_tableprogresscacahkabkot_nim_model($kabkot_id_new);
            $data_tableprogresscacahkabkot_beban = $this->Server_Model->get_tableprogresscacahkabkot_beban_model($kabkot_id_new);
            for($i=0; $i < count($data_tableprogresscacahkabkot_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkabkot_tercacah_nim_model(intval($data_tableprogresscacahkabkot_nim[$i]['nim']));
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $progress_cacah_kabkot += intval($akumulasi_tercacah_nim[$i]);
				};
            $progress_cacah_kabkot = $progress_cacah_kabkot / intval($data_tableprogresscacahkabkot_beban[0]['beban']);
           
            
            $progress_total= ($progress_ksa_kabkot + $progress_ubinan_kabkot + $progress_cacah_kabkot)/3;
            $progress_total= round($progress_total,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($progress_total));
                                        
            
            }
        
        function get_progresstotalbangli_control(){
            $kabkot_id=5106;
            $progress_ksa_kabkot=0;
            $progress_ubinan_kabkot=0;
            $progress_cacah_kabkot=0;
            $progress_total=0;
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_progress_ksa_kabkot = file_get_contents($url_ksa);
            $data_progress_ksa_kabkot_decode = json_decode($data_progress_ksa_kabkot, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_progress_ksa_kabkot_decode); $i++){
				if ($data_progress_ksa_kabkot_decode[$i]['id_kab']=$kabkot_id) {
                                        $progress_ksa_kabkot = intval($data_progress_ksa_kabkot_decode[$i]['progres_segmen']);
					break;
					};};
            
            $kabkot_id_new=$kabkot_id - 5100;
            $akumulasi_tercacah_nim = array();
            $data_tableprogresscacahkabkot_nim = $this->Server_Model->get_tableprogresscacahkabkot_nim_model($kabkot_id_new);
            $data_tableprogresscacahkabkot_beban = $this->Server_Model->get_tableprogresscacahkabkot_beban_model($kabkot_id_new);
            for($i=0; $i < count($data_tableprogresscacahkabkot_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkabkot_tercacah_nim_model(intval($data_tableprogresscacahkabkot_nim[$i]['nim']));
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $progress_cacah_kabkot += intval($akumulasi_tercacah_nim[$i]);
				};
            $progress_cacah_kabkot = $progress_cacah_kabkot / intval($data_tableprogresscacahkabkot_beban[0]['beban']);
           
            
            $progress_total= ($progress_ksa_kabkot + $progress_ubinan_kabkot + $progress_cacah_kabkot)/3;
            $progress_total= round($progress_total,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($progress_total));
                                        
            
            }
        
        function get_progresstotalkarang_asem_control(){
            $kabkot_id=5107;
            $progress_ksa_kabkot=0;
            $progress_ubinan_kabkot=0;
            $progress_cacah_kabkot=0;
            $progress_total=0;
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_progress_ksa_kabkot = file_get_contents($url_ksa);
            $data_progress_ksa_kabkot_decode = json_decode($data_progress_ksa_kabkot, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_progress_ksa_kabkot_decode); $i++){
				if ($data_progress_ksa_kabkot_decode[$i]['id_kab']=$kabkot_id) {
                                        $progress_ksa_kabkot = intval($data_progress_ksa_kabkot_decode[$i]['progres_segmen']);
					break;
					};};
            
            $kabkot_id_new=$kabkot_id - 5100;
            $akumulasi_tercacah_nim = array();
            $data_tableprogresscacahkabkot_nim = $this->Server_Model->get_tableprogresscacahkabkot_nim_model($kabkot_id_new);
            $data_tableprogresscacahkabkot_beban = $this->Server_Model->get_tableprogresscacahkabkot_beban_model($kabkot_id_new);
            for($i=0; $i < count($data_tableprogresscacahkabkot_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkabkot_tercacah_nim_model(intval($data_tableprogresscacahkabkot_nim[$i]['nim']));
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $progress_cacah_kabkot += intval($akumulasi_tercacah_nim[$i]);
				};
            $progress_cacah_kabkot = $progress_cacah_kabkot / intval($data_tableprogresscacahkabkot_beban[0]['beban']);
           
            
            $progress_total= ($progress_ksa_kabkot + $progress_ubinan_kabkot + $progress_cacah_kabkot)/3;
            $progress_total= round($progress_total,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($progress_total));
                                        
            
            }
        
        function get_progresstotalbuleleng_control(){
            $kabkot_id=5108;
            $progress_ksa_kabkot=0;
            $progress_ubinan_kabkot=0;
            $progress_cacah_kabkot=0;
            $progress_total=0;
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_progress_ksa_kabkot = file_get_contents($url_ksa);
            $data_progress_ksa_kabkot_decode = json_decode($data_progress_ksa_kabkot, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_progress_ksa_kabkot_decode); $i++){
				if ($data_progress_ksa_kabkot_decode[$i]['id_kab']=$kabkot_id) {
                                        $progress_ksa_kabkot = intval($data_progress_ksa_kabkot_decode[$i]['progres_segmen']);
					break;
					};};
            
            $kabkot_id_new=$kabkot_id - 5100;
            $akumulasi_tercacah_nim = array();
            $data_tableprogresscacahkabkot_nim = $this->Server_Model->get_tableprogresscacahkabkot_nim_model($kabkot_id_new);
            $data_tableprogresscacahkabkot_beban = $this->Server_Model->get_tableprogresscacahkabkot_beban_model($kabkot_id_new);
            for($i=0; $i < count($data_tableprogresscacahkabkot_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkabkot_tercacah_nim_model(intval($data_tableprogresscacahkabkot_nim[$i]['nim']));
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $progress_cacah_kabkot += intval($akumulasi_tercacah_nim[$i]);
				};
            $progress_cacah_kabkot = $progress_cacah_kabkot / intval($data_tableprogresscacahkabkot_beban[0]['beban']);
           
            
            $progress_total= ($progress_ksa_kabkot + $progress_ubinan_kabkot + $progress_cacah_kabkot)/3;
            $progress_total= round($progress_total,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($progress_total));
                                        
            
            }
        
        function get_progresstotaldenpasar_control(){
            $kabkot_id=5171;
            $progress_ksa_kabkot=0;
            $progress_ubinan_kabkot=0;
            $progress_cacah_kabkot=0;
            $progress_total=0;
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_progress_ksa_kabkot = file_get_contents($url_ksa);
            $data_progress_ksa_kabkot_decode = json_decode($data_progress_ksa_kabkot, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_progress_ksa_kabkot_decode); $i++){
				if ($data_progress_ksa_kabkot_decode[$i]['id_kab']=$kabkot_id) {
                                        $progress_ksa_kabkot = intval($data_progress_ksa_kabkot_decode[$i]['progres_segmen']);
					break;
					};};
            
            $kabkot_id_new=$kabkot_id - 5100;
            $akumulasi_tercacah_nim = array();
            $data_tableprogresscacahkabkot_nim = $this->Server_Model->get_tableprogresscacahkabkot_nim_model($kabkot_id_new);
            $data_tableprogresscacahkabkot_beban = $this->Server_Model->get_tableprogresscacahkabkot_beban_model($kabkot_id_new);
            for($i=0; $i < count($data_tableprogresscacahkabkot_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkabkot_tercacah_nim_model(intval($data_tableprogresscacahkabkot_nim[$i]['nim']));
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $progress_cacah_kabkot += intval($akumulasi_tercacah_nim[$i]);
				};
            $progress_cacah_kabkot = $progress_cacah_kabkot / intval($data_tableprogresscacahkabkot_beban[0]['beban']);
           
            
            $progress_total= ($progress_ksa_kabkot + $progress_ubinan_kabkot + $progress_cacah_kabkot)/3;
            $progress_total= round($progress_total,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($progress_total));
                                        
            
            }
        
        function get_progresscacahtotal_control(){
           
            $progress_ksa = 0;
            $progress_ubinan = 0;
            $progress_cacah = 0;
            $progress_total=0;
            $url_ksa="http://0f3957d8.ngrok.io/pklserver/api/Monitoring/kab_progress";
            $data_progress_ksa = file_get_contents($url_ksa);
            $data_progress_ksa_decode = json_decode($data_progress_ksa, true); // Turns it into an array, change the last argument to false to make it an object
            for($i=0; $i < count($data_progress_ksa_decode); $i++){
				$progress_ksa += intval($data_progress_ksa_decode[$i]['progres_segmen']);
				};
                                
            
            $data_tableprogresscacahtotal_beban = $this->Server_Model->get_tableprogresscacahtotal_totalbeban_model();
            $data_tableprogresscacahtotal_tercacah = $this->Server_Model->get_tableprogresscacahtotal_totaltercacah_model();
            $progress_cacah_= intval($data_tableprogresscacahtotal_beban[0]['beban']) / intval($data_tableprogresscacahtotal_tercacah[0]['hasil']);
           
            
            $progress_total= ($progress_ksa + $progress_ubinan + $progress_cacah)/3;
            $progress_total= round($progress_total,2);
            
            //$tercacahdanprogress_ksa_kabkot['progress'] = round($tercacahdanprogress_ksa_kabkot['progress'],2);
            //$character = json_decode($json);
            //echo $character->name;
            //$data_tableksatercacahkankot = $this->Server_Model->get_tableksatercacahkabkot_model($kabkot_id);
            
//            $data_api_ksa = file_get_contents(<url of that website>);
//            $data_ksa = json_decode($data, true);
//            $data_ubinan = $this->Server_Model->get_progresscacahtotalubinan_model($kabkot_id);
//            $data_cacah = $this->Server_Model->get_progresscacahtotalcacah_model($kabkot_id);
//            $data_progresscacahtotal_cacah = $data_ksa->total_cacah + $data_ubinan->total_cacah + $data_cacah->total_cacah;
//            $data_progresscacahtotal_beban = $data_ksa->total_beban + $data_ubinan->total_beban + $data_cacah->total_beban;
//            $data_progresscacahtotal = array('total_cacah'=>$data_progresscacahtotal_cacah, 'total_beban'=>$data_progresscacahtotal_beban);
              $progress_total;
              $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($progress_total));
        }

        function get_tableprogresscacahkabkot_control(){
            $kabkot_id=$this->input->get('kabkot_id');
            $kabkot_id_new=$kabkot_id - 5100;
            $data_tableprogresscacahkabkot=0;
            $akumulasi_tercacah_nim = array();
            //$data_tableprogresscacahkabkot_tercacah;
            $data_tableprogresscacahkabkot_nim = $this->Server_Model->get_tableprogresscacahkabkot_nim_model($kabkot_id_new);
            $data_tableprogresscacahkabkot_beban = $this->Server_Model->get_tableprogresscacahkabkot_beban_model($kabkot_id_new);
            for($i=0; $i < count($data_tableprogresscacahkabkot_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkabkot_tercacah_nim_model(intval($data_tableprogresscacahkabkot_nim[$i]['nim']));
				//$data_tableprogresscacahkabkot_tercacah = $data_tableprogresscacahkabkot_tercacah + intval($akumulasi_tercacah_nim[0]['hasil']);
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $data_tableprogresscacahkabkot += intval($akumulasi_tercacah_nim[$i]);
				//$data_tableprogresscacahkabkot_tercacah = $data_tableprogresscacahkabkot_tercacah + intval($akumulasi_tercacah_nim[0]['hasil']);
				};
            $data_tableprogresscacahkabkot = $data_tableprogresscacahkabkot / intval($data_tableprogresscacahkabkot_beban[0]['beban']);
            //$data_tableprogresscacahkabkot_tercacah=intval($akumulasi_tercacah_nim[0])+intval($akumulasi_tercacah_nim[1]);
            //$data_tableprogresscacahkabkot=($data_tableprogresscacahkabkot_tercacah / $data_tabeprogresscacahkabkot_beban[0]['beban'])*100;
            //$data_tableprogresscacahkabkot=round($data_tableprogresscacahkabkot,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_tableprogresscacahkabkot));
        }
        
        function get_tableprogresscacahkecamatan_control(){
            $kecamatan_id=$this->input->get('kecamatan_id');
            $kabkot_id = $kecamatan_id / 1000;
            $kabkot_id_floor = floor($kabkot_id);
            $kabkot_id_new = $kabkot_id_floor - 5100;
            $kecamatan_id_new = $kecamatan_id - ($kabkot_id_floor * 1000);
            
            $data_tableprogresscacahkecamatan=0;
            $akumulasi_tercacah_nim = array();
            //$data_tableprogresscacahkabkot_tercacah;
            $data_tableprogresscacahkecamatan_nim = $this->Server_Model->get_tableprogresscacahkecamatan_nim_model($kabkot_id_new, $kecamatan_id_new);
            $data_tableprogresscacahkecamatan_beban = $this->Server_Model->get_tableprogresscacahkecamatan_beban_model($kabkot_id_new, $kecamatan_id_new);
            for($i=0; $i < count($data_tableprogresscacahkecamatan_nim); $i++){
                                $akumulasi_tercacah_nim[$i]=$this->Server_Model->get_tableprogresscacahkecamatan_tercacah_nim_model(intval($data_tableprogresscacahkecamatan_nim[$i]['nim']));
				//$data_tableprogresscacahkabkot_tercacah = $data_tableprogresscacahkabkot_tercacah + intval($akumulasi_tercacah_nim[0]['hasil']);
				};
            for($i=0; $i < count($akumulasi_tercacah_nim); $i++){
                                $data_tableprogresscacahkecamatan += intval($akumulasi_tercacah_nim[$i]);
				//$data_tableprogresscacahkabkot_tercacah = $data_tableprogresscacahkabkot_tercacah + intval($akumulasi_tercacah_nim[0]['hasil']);
				};
            $data_tableprogresscacahkecamatan = $data_tableprogresscacahkecamatan / intval($data_tableprogresscacahkecamatan_beban[0]['beban']);
            //$data_tableprogresscacahkabkot_tercacah=intval($akumulasi_tercacah_nim[0])+intval($akumulasi_tercacah_nim[1]);
            //$data_tableprogresscacahkabkot=($data_tableprogresscacahkabkot_tercacah / $data_tabeprogresscacahkabkot_beban[0]['beban'])*100;
            //$data_tableprogresscacahkabkot=round($data_tableprogresscacahkabkot,2);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_tableprogresscacahkecamatan));
        }
        
        
}
?>
