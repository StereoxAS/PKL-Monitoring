<?php

/**
*
*/
class Pkl extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->library('session');
	$this->load->model('Server_Model');
	if($this->session->nim == NULL){
            redirect('login');
        }
        
	}

	function index() {
		// echo json_encode($_SESSION["nim"]);
		$this->dashboard();
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
	
	function set_autocomplete($unit){
		$autocomplete = [];
		switch ($unit) {
			case 'unit_cacah':
				$result = $this->Server_Model->get_autocomplete_unit_cacah();
				foreach ($result as $value) {
					array_push($autocomplete, $value['namaKrt']);
				}
				break;
			case 'pcl':
				$result = $this->Server_Model->get_autocomplete_pcl();
				foreach ($result as $value) {
					$autocomplete_data = $value['nama'] . " | " . $value['nim'];
					array_push($autocomplete, $autocomplete_data);
				}
				break;
		}
		return $autocomplete;
	}
        
        
        
        
        /*
        function get_kabkot(){
            $result = $this->Server_Model->get_kabkot_model();
        }
        
         function get_kecamatan(){
            $result = $this->Server_Model->get_kecamatan_model();
        }
         
         */
        
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
        
        function get_tableksatercacahkabkot_control(){
            $kabkot_id=$this->input->get('kabkot_id');
            $data_tableksatercacahkankot = $this->Server_Model->get_tableksatercacahkabkot_model($kabkot_id);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data_tableksatercacahkabkot));
        }
        
	function dashboard(){
		$data['autocomplete_nav'] = $this->set_autocomplete('pcl');
		$data['beban_cacah'] = $this->Server_Model->get_beban_cacah();
                $data['all_kabkot'] = $this->Server_Model->get_kabkot_model();
                /*$kakakoko = $this->input->post('kabkot_id');
                $data['kkprint']=$kakakoko;
                $data['all_kecamatan'] = $this->Server_Model->get_kecamatan_model($kakakoko); */
               
                /* $idembedd;
                $data['embedkabkot'] = $this->get_embed_kabkot($idembedd);
                $data['embedkec'] = $this->get_embed_kecamatan($idembedd); 
                 */
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav', $data);

		$this->load->view('contents/page_dashboard', $data);

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_dashboard', $data);
		$this->load->view('frames/page_end');
	}

	// MENU INFORMASI LISTING
	function progres_listing($id_kabupaten = NULL){
		$data['autocomplete_nav'] = $this->set_autocomplete('pcl');
		$data['id_kabupaten'] = $id_kabupaten; // id_kabupaten apabila halaman dipanggil dari progres agregat listing
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav', $data);

		$this->load->view('contents/page_progres_listing_table');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_progres_listing', $data);
		$this->load->view('frames/page_end');
	}

	// MENU INFORMASI PENCACAHAN
	function search_unit_cacah(){
		$data['autocomplete_nav'] = $this->set_autocomplete('pcl');
		// echo json_encode($data['autocomplete']);
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav', $data);

		$this->load->view('contents/page_search_unit_cacah');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_search_unit_cacah', $data);
		$this->load->view('frames/page_end');
	}

	function search_pcl($nim = NULL){
		$data['autocomplete_nav'] = $this->set_autocomplete('pcl');
		$data['nim'] = $nim;

		$this->load->view('frames/page_head');
		$this->load->view('frames/nav', $data);

		$this->load->view('contents/page_search_pcl');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_search_pcl', $data);
		$this->load->view('frames/page_end');
	}

	// MENU PROGRESS PENCACAHAN
	function progres_cacah($id_kabupaten = NULL){
		$data['autocomplete_nav'] = $this->set_autocomplete('pcl');
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav', $data);

		$this->load->view('contents/page_progres_cacah_table');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_progres_cacah', $data);
		$this->load->view('frames/page_end');
	}
        
        // MENU PROGRES UBINAN
        function progres_ubinan($id_kabupaten = NULL){
                $data['autocomplete_nav'] = $this->set_autocomplete('pcl');
                $this->load->view('frames/page_head');
                $this->load->view('frames/nav', $data);
         
                $this->load->view('contents/page_progres_ubinan');
         
                $this->load->view('frames/wrapper_end');
                $this->load->view('frames/page_end_js');
//                $this->load->view('frames/page_end_script_progres_ubinan');
                $this->load->view('frames/page_end');
        }

	function analisis_realtime(){
		$data['autocomplete_nav'] = $this->set_autocomplete('pcl');
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav', $data);

		$this->load->view('contents/page_analisis_rt');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_analisis_realtime');
		$this->load->view('frames/page_end');
	}

	// MENU MONITORING MASALAH
	function monitoring_masalah(){
		$data['autocomplete_nav'] = $this->set_autocomplete('pcl');
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav', $data);

		$this->load->view('contents/monitoring_masalah');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_monitoring_masalah');
		$this->load->view('frames/page_end');
	}

	// MENU LOG KUESIONER
	function log_kuesioner(){
		$data['autocomplete_nav'] = $this->set_autocomplete('pcl');
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav', $data);

		$this->load->view('contents/log_kuesioner');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_log_kuesioner');
		$this->load->view('frames/page_end');
	}
	
	// MENU KSA (NEW)
	function monitoring_ksa($id_kabupaten = NULL){
		$data['autocomplete_nav'] = $this->set_autocomplete('pcl');
		$data['id_kabupaten'] = $id_kabupaten; // id_kabupaten apabila halaman dipanggil dari progres agregat listing
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav', $data);

		$this->load->view('contents/page_progres_listing_table');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_progres_listing', $data);
		$this->load->view('frames/page_end');
	}

}
?>
