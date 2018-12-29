<?php

/**
*
*/
class dummy extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('server_model');
	}

    public function list_variabel($modul) {
        // $var = $_GET['modul'];
        // $result = $this->server_model->modul($modul);
        // echo json_encode($result); exit();
        $result = $this->server_model->modul($modul);
        $result = array_column($result, 'COLUMN_NAME');
        echo json_encode($result); exit();
    }

    public function hasil($modul,$variabel){

            // $hasil = $_GET['jawaban'];
            $result_que = $this->server_model->hasil($modul,$variabel);
            //echo json_encode($hasil);
            $result_analysis = $this->server_model->analysis($modul,$variabel);

            //echo json_encode($result_analysis);
            $max = $result_analysis->MAX;
            $varmax = $result_analysis->$variabel;

            $data = $this->server_model->check_data($modul,$variabel);
            $tipe = $data->DATA_TYPE;

            $result_kuantitatif = $this->server_model->kuantitatif($modul,$variabel);
            $mean = $result_kuantitatif->mean;

        if($tipe!='int'){
            $result = array('data' => $result_que,
                            'tipe' => $tipe,
                            'max' => $max,
                            'varmax' => $varmax);
            echo json_encode($result); exit();
         }else{
            $result = array('data' => $result_que,
                            'tipe' => $tipe,
                            'max' => $max,
                            'varmax' => $varmax,
                            'mean' => $mean);
            echo json_encode($result); exit();

         }
    }

    public function monitoring(){
        $result = $this->server_model->monitoring();
        echo json_encode($result); exit();

    }

}
?>
