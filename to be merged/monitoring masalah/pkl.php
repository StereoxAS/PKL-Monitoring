<?php

/**
*
*/
class pkl extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->library('session');
	}

	function get_aggregate(){
        // header('Content-Type: application/json');
        $this->load->model('progress_keseluruhan_model');
        $jumlah = $this->progress_keseluruhan_model->getCountAggregate(
			'dummy_kode_kelurahan','sample_core','sample_repeat_test','_backend_actions','_form_info','_form_info_fileset'
			,'build_susenas_kor_1481356172_core','sample_group_test_select_multiple_2'); //changeme
        $result = array('jumlah' => $jumlah);
        echo json_encode($result); exit();
	}

	function get_listing(){
        // header('Content-Type: application/json');
        $this->load->model('progress_keseluruhan_model');
        $jumlah = $this->progress_keseluruhan_model->getCountAggregate(
			'dummy_kode_kelurahan','sample_core','sample_repeat_test','_backend_actions','_form_info','_form_info_fileset'
			,'sample_video_test_bn','sample_group_test_select_multiple_2'); //changeme
        $result = array('jumlah' => $jumlah);
        echo json_encode($result); exit();
	}

	function data_monitoring_masalah(){
		$this->load->model('monitoring_masalah_model');
		$datanya = $this->monitoring_masalah_model->get_monitoring_masalah('dummy_form_pengaduan','dummy_form_pengaduan_gambar');//changeme
		$result = array('data' => $datanya);
		echo json_encode($result); exit();
	}

	function dashboard(){
		$this->load->model('progress_keseluruhan_model');


		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_dashboard');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end');
	}

	function unit_cacah(){
		$this->load->model('map_model');
		$data['LocsG'] = $this->map_model->groupMap_uc();

		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_search_unit_cacah');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_map', $data);
		$this->load->view('frames/page_end');
	}

	function profile_unit_cacah($id){
		$this->load->model('map_model');
		$this->load->model('uc_model');
		$data['LocsG'] = $this->map_model->single_map($id);
		$data_uc['detail'] = $this->uc_model->detail_uc($id);

		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_unit_cacah', $data_uc);

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_map', $data);
		$this->load->view('frames/page_end');
	}

	function pcl(){
		$this->load->model('map_model');
		$data['LocsG'] = $this->map_model->groupMap_pcl();

		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_search_pcl');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_map', $data);
		$this->load->view('frames/page_end');
	}

	function profile_pcl($id){
		$this->load->model('map_model');
		$this->load->model('pcl_model');
		$data['LocsG'] = $this->map_model->single_map_pcl($id);
		$data_p['detail'] = $this->pcl_model->detail_pcl($id);

		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_pcl', $data_p);

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_map', $data);
		$this->load->view('frames/page_end');
	}

	function progres_agregat(){
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_progres_agregat');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_chart');
		$this->load->view('frames/page_end_table');
		$this->load->view('frames/page_end');
	}

	function progres_pencacahan(){
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_progres');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_chart');
		$this->load->view('frames/page_end');
	}

	function analisis_realtime(){
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_analisis_rt');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_chart');
		$this->load->view('frames/page_end');
	}

	function monitoring_masalah(){
		$this->load->model('map_model');
		$data['LocsG'] = $this->map_model->groupMap_pcl();

		$this->load->view('frames/page_head_dynamic_table');
		$this->load->view('frames/nav');

		$this->load->view('contents/monitoring_masalah');

		$this->load->view('frames/wrapper_end');
		// $this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_map', $data);
		$this->load->view('frames/page_end');
	}

}
?>
