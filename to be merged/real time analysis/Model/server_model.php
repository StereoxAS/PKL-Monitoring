<?php  
	/**
	*
	*/
	class server_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->helper('array');
			$this->load->database();
		}

	function modul($modul){

				$this->db->where(array(
					'table_name' => $modul,
					'table_schema' => 'odk_prod'
					));

				$not = array('id', 'wilayah');
				$this->db->where_not_in('column_name',$not);
				$this->db->select('COLUMN_NAME');
			$que = $this->db->get('INFORMATION_SCHEMA.COLUMNS');


			// $que = $this->db->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = '$modul' AND table_schema = 'odk_prod' AND column_name <> 'id' AND column_name <> 'wilayah'");
			return $que->result_array();
	}


	function hasil($modul,$variabel){
		$this->db->group_by("$variabel");
		$select =   array(
                "count($variabel) as value",
                "$variabel as label"
            );
		$this->db->select($select);
		$que = $this->db->get("$modul");

		//$this->db->group_by($variabel);
		//$this->db->select(COUNT($variabel) as value, $variabel as label);
		//$que = $this->db->get($modul);
		//$que = $this->db->query("SELECT COUNT($variabel) as value, $variabel as label FROM $modul GROUP BY $variabel");
		return $que->result();
	}

	function check_data($modul,$variabel){
		$this->db->where(array(
					'table_name' => $modul,
					'table_schema' => 'odk_prod',
					'column_name' => $variabel
					));

		$this->db->select('DATA_TYPE');
		$que = $this->db->get('INFORMATION_SCHEMA.COLUMNS');
		//$que = $this->db->query("SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = '$modul' AND table_schema = 'odk_prod' AND column_name = '$variabel'");
		return $que->row();
	}

	function analysis($modul, $variabel){
		$this->db->group_by("$variabel");
		$this->db->order_by("COUNT($variabel)", 'DESC');
		$this->db->limit(1);
		$select =   array(
                "count($variabel) as MAX",
                "$variabel"
            );
		$this->db->select($select);
		$que = $this->db->get("$modul");

		//$que = $this->db->query("SELECT $variabel, COUNT($variabel) as MAX FROM $modul GROUP BY $variabel ORDER BY COUNT($variabel) DESC LIMIT 1");
		return $que->row();
	}

	function kuantitatif($modul, $variabel){
		$this->db->select("AVG($variabel) as mean");
		$que = $this->db->get("$modul");
		//$que = $this->db->query("SELECT AVG($variabel) as mean FROM $modul ");
		return $que->row();
	}

	function monitoring(){
		$que = $this->db->query("SELECT nama,judul,keterangan,status FROM dummy_form_pengaduan");
		return $que->result_array();
	}
}
?>
