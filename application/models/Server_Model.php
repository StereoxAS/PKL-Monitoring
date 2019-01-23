<?php
/**
*
*/
class Server_Model extends CI_Model {

	function __construct(){
		parent::__construct();
        $this->load->database();
	}

	// SERVICE CAPI
	function login($username,$password){
		$db_jarlap = $this->load->database('pkl_sipadu_real', TRUE);

		$where = array(
					'sm.nim' => $username,
					'sm.password' => $password
				);
		$db_jarlap->select('sm.nama, sm.nim, st.nim_koor, st.id_tim');
		$db_jarlap->from('sipadu_mahasiswa sm');
		$db_jarlap->join('sipadu_timpencacah st', 'sm.id_tim = st.id_tim');
		$db_jarlap->where($where);
		$que = $db_jarlap->get();
		if ($que->num_rows() == 1){
			return $que->row();
		} else {
			return false;
		}
	}

	function check_nim($nim) {
		$db_jarlap = $this->load->database('pkl_sipadu_real', TRUE);
		$where = array('nim' => $nim);
		$db_jarlap->where($where);
		$que = $db_jarlap->get('sipadu_mahasiswa');
		if ($que->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}

	function isKoor($nim) {
		$db_jarlap = $this->load->database('pkl_sipadu_real', TRUE);
		$where = array('nim_koor' => $nim);
		$db_jarlap->where($where);
		$que = $db_jarlap->get('sipadu_timpencacah');
		if ($que->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}

	function get_anggota_tim($nim){
		$db_jarlap = $this->load->database('pkl_sipadu_real', TRUE);
		$db_jarlap->select('nim, nama, kelas, no_telepon');
		$db_jarlap->where('st.nim_koor',$nim);
		$db_jarlap->where('sm.nim <>', $nim);
		$db_jarlap->join('sipadu_timpencacah st', 'sm.id_tim = st.id_tim', 'left');
		$db_jarlap->from('sipadu_mahasiswa sm');
		$que = $db_jarlap->get();
		return $que->result_array();
	}

	function get_wilayah_kerja($nim) {
		$que = $this->db->query("
		SELECT t1.nama_bs, t1.kode_desa, t1.nama_desa, t1.kode_kecamatan, t1.nama_kecamatan, t1.kode_kabupaten, t1.nama_kabupaten, t2.jumlah, t1.beban_cacah, t2.jumlah/t1.beban_cacah as progress
		FROM
		(SELECT dkb.nama as nama_bs, dkd.id as kode_desa, dkd.nama as nama_desa, dkc.id as kode_kecamatan, dkc.nama as nama_kecamatan, dkk.id as kode_kabupaten, dkk.nama as nama_kabupaten, dkb.beban_cacah
		FROM dummy_kode_bloksensus dkb
		INNER JOIN dummy_kode_kelurahandesa dkd ON dkd.id = dkb.kelurahandesa AND dkd.kecamatan = dkb.kecamatan AND dkd.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kecamatan dkc ON dkc.id = dkb.kecamatan AND dkc.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kabupaten dkk ON dkk.id = dkb.kabupaten
		WHERE dkb.nim = $nim) t1
		LEFT OUTER JOIN
		(SELECT COUNT(DISTINCT(n.unique_id_instance)) as jumlah, n.nim, ks.BLOK1_GROUP1_B1_6 as nama_bs, ks.BLOK1_B1_4 kode_desa, ks.BLOK1_B1_3 as kode_kecamatan, ks.BLOK1_B1_2 as kode_kabupaten
 		FROM VSENPKL56_15_1_BETA_CORE ks
 		INNER JOIN pkl_kortimpcl_real.notif n ON n.unique_id_instance = ks._URI
		WHERE n.status_isian = 'Clear' AND n.status = 'Final' AND form_id = 'vsenpkl56_15.1_beta' AND n.nim = '$nim'
 		GROUP BY ks.BLOK1_GROUP1_B1_6
 		) t2
 		ON t1.kode_kabupaten = t2.kode_kabupaten AND t1.kode_kecamatan = t2.kode_kecamatan AND t1.kode_desa = t2.kode_desa AND t1.nama_bs = t2.nama_bs");
        return $que->result();
		// return $que->result_array();
	}

	function get_koordinat_kerja($blok_sensus) {
		// (SELECT COUNT(*) as jumlah, dbs.uploader as nim, dbs.noBs as kode_bs, dbs.desa as kode_desa, dbs.kecamatan as kode_kecamatan, dbs.kabupaten as kode_kabupaten
		// FROM backup_datart drt
		// INNER JOIN backup_databs dbs ON dbs.idBs = drt.idBs AND dbs.uploader = drt.uploader AND dbs.device_id = drt.device_id
		// $where2
		// GROUP BY dbs.noBs) t2
	}

	function get_jumlah_cacah($nim){
		$db_kortimpcl = $this->load->database('pkl_kortimpcl_real', TRUE);
		$where = array(
					'nim' => $nim,
					'status_isian' => 'Clear',
					'status' => 'Final',
				);
		$db_kortimpcl->where($where);
		return $db_kortimpcl->count_all_results('notif');
	}

	// MENU INFORMASI PENCACAHAN
	function get_autocomplete_unit_cacah() {
		$column_nama = 'namaKrt';
		$this->db->select($column_nama);
		$this->db->order_by($column_nama);
		$this->db->from("backup_datart drt");
		$this->db->join("backup_datast dst", "dst.idRt = drt.idrt AND dst.uploader = drt.uploader");
		$this->db->join("backup_databs dbs", "dbs.idBs = drt.idBs AND dbs.uploader = drt.uploader");
		$que = $this->db->get();
		return $que->result_array();

	}

	function get_autocomplete_pcl(){
		$db_jarlap = $this->load->database('pkl58_sikoko', TRUE);

		$column_nama = 'nama';
		$column_nim = 'nim';
		$db_jarlap->select("nama, nim");
		$db_jarlap->from("sipadu_mahasiswa sm");
		$db_jarlap->join("sipadu_timpencacah st", "sm.id_tim = st.id_tim");
		$db_jarlap->where("sm.nim <> st.nim_koor");
		$db_jarlap->order_by($column_nama);
		$que = $db_jarlap->get();
		return $que->result_array();
	}
        
        
        
        
        
        
        
	function get_list_unit_cacah($wilayah1 = NULL, $wilayah2 = NULL, $wilayah3 = NULL, $wilayah4 = NULL) {
		// CHANGE ME :
		$where = array();
		if ($wilayah1 != NULL) { // Kasus agregat kabupaten
            $where['kabupaten'] = $wilayah1;
        }
        if ($wilayah2 != NULL) { // Kasus agregat kecamatan;
            $where['kecamatan'] = $wilayah2;
        }
        if ($wilayah3 != NULL) { // Kasus agregat kelurahandesa;
            $where['desa'] = $wilayah3;
        }
        if ($wilayah4 != NULL) { // Kasus agregat kecamatan;
            $where['noBs'] = $wilayah4;
        }
        $this->db->where($where);
				$this->db->from("backup_datart drt");
				$this->db->join("backup_datast dst", "dst.idRt = drt.idrt AND dst.uploader = drt.uploader");
				$this->db->join("backup_databs dbs", "dbs.idBs = drt.idBs AND dbs.uploader = drt.uploader");
				$que = $this->db->get();
        return $que->result();
    }

	function get_unit_cacah($nama) {
		$where = array('namaKrt' => $nama);
		$this->db->where($where);
		$this->db->from("backup_datart drt");
		$this->db->join("backup_datast dst", "dst.idRt = drt.idrt AND dst.uploader = drt.uploader");
		$this->db->join("backup_databs dbs", "dbs.idBs = drt.idBs AND dbs.uploader = drt.uploader");
		$que = $this->db->get();
    	return $que->result();
	}

	function get_list_pcl($wilayah1 = NULL, $wilayah2 = NULL, $wilayah3 = NULL, $wilayah4 = NULL){
		$where = array();
		if ($wilayah1 != NULL) { // Kasus agregat kabupaten
            $where['kabupaten'] = $wilayah1;
        }
        if ($wilayah2 != NULL) { // Kasus agregat kecamatan;
            $where['kecamatan'] = $wilayah2;
        }
        if ($wilayah3 != NULL) { // Kasus agregat kelurahandesa;
            $where['kelurahandesa'] = $wilayah3;
        }
        if ($wilayah4 != NULL) { // Kasus agregat kecamatan;
            $where['id'] = $wilayah4;
        }
		$this->db->select("sm.*, st.*");
        $this->db->where($where);
		$this->db->from("pkl_sipadu_real.sipadu_mahasiswa sm");
		$this->db->join("odk_prod.dummy_kode_bloksensus dkbs", "dkbs.nim = sm.nim", "inner");
		$this->db->join("pkl_sipadu_real.sipadu_timpencacah st", "sm.id_tim = st.id_tim", "inner");
		$this->db->distinct();
		$que = $this->db->get();
        return $que->result();
    }

	function get_pcl($nim) {
		$db_jarlap = $this->load->database('pkl_sipadu_real', TRUE);
		$table = 'sipadu_mahasiswa';
		$where = array('nim' => $nim);
		$db_jarlap->where($where);
		$que = $db_jarlap->get($table);
    	return $que->result();
	}

	// MENU PROGRESS PENCACAHAN
	function get_list_kabupaten() {
		// CHANGE ME
		$table = 'dummy_kode_kabupaten';
		$que = $this->db->get($table);
		return $que->result();
    }

    function get_list_kecamatan($id_kabupaten) {
		// CHANGE ME
		$table = 'dummy_kode_kecamatan';
		$where = array('kabupaten' => $id_kabupaten);
		$this->db->where($where);
		$que = $this->db->get($table);
		return $que->result();
    }

    function get_list_kelurahandesa($id_kabupaten, $id_kecamatan) {
		// CHANGE ME
		$table = 'dummy_kode_kelurahandesa';
		$where = array(
				'kabupaten' => $id_kabupaten,
				'kecamatan' => $id_kecamatan,
			);
		$this->db->where($where);
		$que = $this->db->get($table);
		return $que->result();
    }

    function get_list_bloksensus($id_kabupaten, $id_kecamatan, $id_kelurahandesa) {
		// CHANGE ME
		$table = 'dummy_kode_bloksensus';
		$where = array(
				'kabupaten' => $id_kabupaten,
				'kecamatan' => $id_kecamatan,
				'kelurahandesa' => $id_kelurahandesa
			);
		$this->db->where($where);
		$que = $this->db->get($table);
		return $que->result();
    }

	function get_beban_cacah($wilayah1 = NULL, $wilayah2 = NULL, $wilayah3 = NULL, $wilayah4 = NULL) {
		$this->db->select_sum('beban_cacah');
		if ($wilayah1 != NULL && $wilayah2 != NULL && $wilayah3 != NULL && $wilayah4 != NULL) {
			$where = array(
						'kabupaten' => $wilayah1,
						'kecamatan' => $wilayah2,
						'kelurahandesa' => $wilayah3,
						'nama' => $wilayah4,
					);
			$this->db->where($where);
		}
		$que = $this->db->get('dummy_kode_bloksensus');
		return $que->row()->beban_cacah;
	}

	function get_detail_cacah($wilayah1 = NULL, $nim = NULL) {
		// wilayah1 = kabupaten
		// nim = nim untuk melihat detail cacah by nim di get_extra_content
		// WHERE n.status_isian = 'Clear' AND n.status = 'Final'
		$where1 = ($wilayah1 !== NULL) ? "AND dkb.kabupaten = '$wilayah1'" : ""; // filter kabupaten di select 1
		$where2 = ($wilayah1 !== NULL) ? "AND ks.BLOK1_B1_2 = '$wilayah1'" : "" ; // filter kabupaten di select 2
		$wherenim1 = ($nim !== NULL) ? "AND dkb.nim = '$nim'" : "";
		$wherenim2 = ($nim !== NULL) ? "AND n.nim = '$nim'" : "";
		$join = ($nim !== NULL) ? "INNER JOIN" : "LEFT OUTER JOIN";

		$que = $this->db->query("
		SELECT t1.nim, t1.nama_bs, t1.kode_desa, t1.nama_desa, t1.kode_kecamatan, t1.nama_kecamatan, t1.kode_kabupaten, t1.nama_kabupaten, t2.jumlah, t1.beban_cacah, t2.jumlah/t1.beban_cacah as progress
		FROM
		(SELECT dkb.nim, dkb.nama as nama_bs, dkd.id as kode_desa, dkd.nama as nama_desa, dkc.id as kode_kecamatan, dkc.nama as nama_kecamatan, dkk.id as kode_kabupaten, dkk.nama as nama_kabupaten, dkb.beban_cacah
		FROM dummy_kode_bloksensus dkb
		INNER JOIN dummy_kode_kelurahandesa dkd ON dkd.id = dkb.kelurahandesa AND dkd.kecamatan = dkb.kecamatan AND dkd.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kecamatan dkc ON dkc.id = dkb.kecamatan AND dkc.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kabupaten dkk ON dkk.id = dkb.kabupaten WHERE 1
		$where1 $wherenim1) t1
		$join
		(SELECT COUNT(DISTINCT(n.unique_id_instance)) as jumlah, n.nim, ks.BLOK1_GROUP1_B1_6 as nama_bs, ks.BLOK1_B1_4 kode_desa, ks.BLOK1_B1_3 as kode_kecamatan, ks.BLOK1_B1_2 as kode_kabupaten
 		FROM VSENPKL56_15_1_BETA_CORE ks
 		INNER JOIN pkl_kortimpcl_real.notif n ON n.unique_id_instance = ks._URI
		WHERE n.status_isian = 'Clear' AND n.status = 'Final' AND n.form_id = 'vsenpkl56_15.1_beta' AND n.nim = ks.METADATA_NIM
		$where2 $wherenim2
 		GROUP BY ks.BLOK1_GROUP1_B1_6, ks.METADATA_NIM
 		) t2
 		ON t1.kode_kabupaten = t2.kode_kabupaten AND t1.kode_kecamatan = t2.kode_kecamatan AND t1.kode_desa = t2.kode_desa AND t1.nama_bs = t2.nama_bs AND t1.nim = t2.nim
		WHERE t1.kode_kabupaten <> '99'");
        return $que->result();
	}

	function get_agregat_cacah() {
		// WHERE n.status_isian = 'Clear' AND n.status = 'Final'
		// FROM VSENPKL56_15_1_BETA_CORE ks
		// AND n.form_id = 'vsenpkl56_15.1_beta'
		$que = $this->db->query("
		SELECT t1.kode_kabupaten, t1.nama_kabupaten, t2.jumlah, t1.beban_cacah, t2.jumlah/t1.beban_cacah as progress
		FROM
		(SELECT dkb.nama as nama_bs, dkd.id as kode_desa, dkd.nama as nama_desa, dkc.id as kode_kecamatan, dkc.nama as nama_kecamatan, dkk.id as kode_kabupaten, dkk.nama as nama_kabupaten, SUM(dkb.beban_cacah) as beban_cacah
		FROM dummy_kode_bloksensus dkb
		INNER JOIN dummy_kode_kelurahandesa dkd ON dkd.id = dkb.kelurahandesa AND dkd.kecamatan = dkb.kecamatan AND dkd.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kecamatan dkc ON dkc.id = dkb.kecamatan AND dkc.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kabupaten dkk ON dkk.id = dkb.kabupaten
		WHERE dkk.id <> '99'
		GROUP BY kode_kabupaten
		) t1
		LEFT OUTER JOIN
		(SELECT COUNT(DISTINCT(n.unique_id_instance)) as jumlah, ks.BLOK1_B1_2 as kode_kabupaten
		FROM VSENPKL56_15_1_BETA_CORE ks
 		INNER JOIN pkl_kortimpcl_real.notif n ON n.unique_id_instance = ks._URI
		WHERE n.status_isian = 'Clear' AND n.status = 'Final' AND n.form_id = 'vsenpkl56_15.1_beta'
		GROUP BY ks.BLOK1_B1_2
		) t2
		ON t1.kode_kabupaten = t2.kode_kabupaten");
        return $que->result();
	}

	function get_detail_listing(){
		$que = $this->db->query("
		SELECT t1.nim, t1.kode_bs, t1.kode_desa, t1.nama_desa, t1.kode_kecamatan, t1.nama_kecamatan, t1.kode_kabupaten, t1.nama_kabupaten, t2.jumlah
		FROM
		(SELECT dkb.id as kode_bs, dkb.nama as nama_bs, dkd.id as kode_desa, dkd.nama as nama_desa, dkc.id as kode_kecamatan, dkc.nama as nama_kecamatan, dkk.id as kode_kabupaten, dkk.nama as nama_kabupaten, dkb.nim
		FROM dummy_kode_bloksensus dkb
		INNER JOIN dummy_kode_kelurahandesa dkd ON dkd.id = dkb.kelurahandesa AND dkd.kecamatan = dkb.kecamatan AND dkd.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kecamatan dkc ON dkc.id = dkb.kecamatan AND dkc.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kabupaten dkk ON dkk.id = dkb.kabupaten WHERE dkk.id <> '99' ) t1
		LEFT OUTER JOIN
		(SELECT COUNT(*) as jumlah, bs FROM backup_datart GROUP BY bs ) t2
		ON t1.kode_bs = t2.bs");

		return $que->result();
	}

	function get_agregat_listing() {
        $que = $this->db->query("
		SELECT t1.kode_kabupaten, t1.nama_kabupaten, t2.jumlah
		FROM
		(SELECT dkb.nama as nama_bs, dkd.id as kode_desa, dkd.nama as nama_desa, dkc.id as kode_kecamatan, dkc.nama as nama_kecamatan, dkk.id as kode_kabupaten, dkk.nama as nama_kabupaten
		FROM dummy_kode_bloksensus dkb
		INNER JOIN dummy_kode_kelurahandesa dkd ON dkd.id = dkb.kelurahandesa AND dkd.kecamatan = dkb.kecamatan AND dkd.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kecamatan dkc ON dkc.id = dkb.kecamatan AND dkc.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kabupaten dkk ON dkk.id = dkb.kabupaten
		WHERE dkk.id <> '99'
		GROUP BY kode_kabupaten
		) t1
		LEFT OUTER JOIN
		(SELECT COUNT(*) as jumlah, SUBSTRING(kodeBs,3,2) as kode_kabupaten
		FROM backup_datart drt
		GROUP BY kode_kabupaten
		) t2
		ON t1.kode_kabupaten = t2.kode_kabupaten");
        return $que->result();
	}

	function get_list_modul() {
		// CHANGE ME
		$table = 'dummy_list_modul';
		$que = $this->db->get($table);
		return $que->result();
	}

	function get_modul_data($modul) {
		// CHANGE ME
		$table = 'dummy_list_modul';
		$where = array(
			'id' => $modul,
		);
		$this->db->where($where);
		$que = $this->db->get($table);
		return $que->row();
	}

	function get_list_variabel(){ // Fungsi untuk melihat daftar variabel yang ingin di analisis berdasarkan modul
		// CHANGE ME
		$table = 'dummy_list_variabel';
		$que = $this->db->get($table);
		return $que->result_array();
	}


	function get_variabel_tipe($modul, $variabel){
		$modul_data = $this->get_modul_data($modul);
		// CHANGE ME
		$kuesioner_modul = 'dummy_list_variabel';
		$where = array(
					'id' => $variabel
				);
		$this->db->where($where);
		$this->db->select('tipe');
		$que = $this->db->get($kuesioner_modul);
		//$que = $this->db->query("SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = '$modul' AND table_schema = 'odk_prod' AND column_name = '$variabel'");
		return $que->row();
	}

	function get_variabel_data($modul, $variabel, $tipe){
		$modul_data = $this->get_modul_data($modul);
		 // CHANGE ME
		$kuesioner_modul = 'VKD_PKL56_RT_V1_'.$modul_data->kuesioner;
		if ($tipe !== 'int' && $tipe !== 'decimal') {
			$select = array(
		                "COUNT($variabel) as value",
		                "$variabel as label"
		            );
			$this->db->group_by($variabel);
			$this->db->select($select);
		} else {
			$select = array("$variabel as value");
			$this->db->select($select);
		}
		$que = $this->db->get($kuesioner_modul);
		return $que->result();
	}

	// MENU MONITORING MASALAH
    function get_list_masalah() {
		/*$db_jarlap = $this->load->database('pkl_sipadu_real', TRUE);
		$db_jarlap->select('dp.*, kp.kategori, sm1.nama as nama_penanya, sm2.nama nama_kortim, sp.status');
		$db_jarlap->from('sipadu_daftar_pertanyaan dp');

        $db_jarlap->join('sipadu_kategori_pertanyaan kp', "kp.id = dp.kategori");
        $db_jarlap->join('sipadu_mahasiswa sm1', "sm1.nim = dp.nim");
        $db_jarlap->join('sipadu_mahasiswa sm2', "sm2.nim = dp.nim_kortim");
        $db_jarlap->join('sipadu_status_pertanyaan sp', "sp.id = dp.status");

        $que = $db_jarlap->get();
        return $que->result();*/
         
		$db_jarlap = $this->load->database('pkl58_sikoko', TRUE);
		 $SQL1="

            SELECT b.kategori,a.golongan,a.pertanyaan,a.jawaban, a.timestamp,c.status, d.nama as nama_penanya, e.nama as nama_kortim, b.penanggung_jawab FROM sipadu_daftar_pertanyaan a, sipadu_kategori_pertanyaan b, sipadu_status_pertanyaan c, sipadu_mahasiswa d, sipadu_mahasiswa e WHERE a.kategori=b.id AND a.status=c.id AND a.nim=d.nim AND a.nim_kortim=e.nim ORDER BY a.kategori DESC

           
            ";

        $Q = $db_jarlap->query($SQL1);
        return $Q->result_array();

    }
function get_list_all() {
		$db_jarlap = $this->load->database('pkl58_sikoko', TRUE);
		$db_jarlap->select('dp.*, kp.kategori, sm1.nama as nama_penanya, sm2.nama nama_kortim, sp.status');
		$db_jarlap->from('sipadu_daftar_pertanyaan dp');

        $db_jarlap->join('sipadu_kategori_pertanyaan kp', "kp.id = dp.kategori");
        $db_jarlap->join('sipadu_mahasiswa sm1', "sm1.nim = dp.nim");
        $db_jarlap->join('sipadu_mahasiswa sm2', "sm2.nim = dp.nim_kortim");
        $db_jarlap->join('sipadu_status_pertanyaan sp', "sp.id = dp.status");

        $que = $db_jarlap->get();
        return $que->result();
    }
function get_list_masalah_narasumber($kode) {
        $db_jarlap = $this->load->database('pkl_sipadu_real', TRUE);
        if ($kode ==1) {
        $SQL1="
            SELECT a.id, a.nim, b.kategori, a.wilayah, a.pertanyaan, a.golongan, c.nama as nama_penanya, a.timestamp, a.jawaban, d.nama as nama_kortim
FROM sipadu_daftar_pertanyaan a, sipadu_kategori_pertanyaan b, sipadu_mahasiswa c, sipadu_mahasiswa d
WHERE a.nim = c.nim AND a.kategori = b.id AND a.status = '3' AND a.kategori = '4' AND a.nim_kortim = d.nim ORDER BY a.jawaban, a.timestamp DESC
            ";
        $Q = $db_jarlap->query($SQL1);
        return $Q->result();
        } elseif ($kode ==2) {
        $SQL1="
            SELECT a.id, a.nim, b.kategori, a.wilayah, a.pertanyaan, a.golongan, c.nama as nama_penanya, a.timestamp, a.jawaban, d.nama as nama_kortim
FROM sipadu_daftar_pertanyaan a, sipadu_kategori_pertanyaan b, sipadu_mahasiswa c, sipadu_mahasiswa d
WHERE a.nim = c.nim AND a.kategori = b.id AND a.status = '3' AND a.kategori = '5' AND a.nim_kortim = d.nim ORDER BY a.jawaban, a.timestamp DESC
            ";
        $Q = $db_jarlap->query($SQL1);
        return $Q->result();
        } elseif ($kode ==3) {
        $SQL1="
SELECT a.id, a.nim, b.kategori, a.wilayah, a.pertanyaan, a.golongan, c.nama as nama_penanya, a.timestamp, a.jawaban, d.nama as nama_kortim
FROM sipadu_daftar_pertanyaan a, sipadu_kategori_pertanyaan b, sipadu_mahasiswa c, sipadu_mahasiswa d
WHERE a.nim = c.nim AND a.kategori = b.id AND a.status = '3' AND (a.kategori = '0' OR a.kategori = '1' OR a.kategori ='2' OR a.kategori ='3') AND a.nim_kortim = d.nim ORDER BY a.jawaban, a.timestamp DESC
            ";
        $Q = $db_jarlap->query($SQL1);
        return $Q->result();
        }
    }


	// MENU LOG KUESIONER
    function get_log_kuesioner() {
		$this->db->select('DISTINCT(n.unique_id_instance) as unique_id_instance, n._id, n.UploadName, n.status, n.time, sm1.nama as nama_pcl, sm2.nama as nama_kortim');
        $this->db->join('pkl_kortimpcl_real.notif n', "n.unique_id_instance = ks._URI AND n.nim = ks.METADATA_NIM");
        $this->db->join('pkl_sipadu_real.sipadu_mahasiswa sm1', "sm1.nim = n.nim");
        $this->db->join('pkl_sipadu_real.sipadu_mahasiswa sm2', "sm2.nim = n.kortim");
		$this->db->order_by('_id', 'DESC');
		// CHANGE ME : TABLE CORE KUESIONER
        $que = $this->db->get('pkl_odk_real.VSENPKL56_15_1_BETA_CORE ks');
        return $que->result();
    }

	function get_log_kuesionerb() {
		$this->db->select('n.*');
        // $this->db->join('pkl_sipadu_real.sipadu_mahasiswa sm1', "sm1.nim = n.nim");
        // $this->db->join('pkl_sipadu_real.sipadu_mahasiswa sm2', "sm2.nim = n.kortim");
		// $this->db->order_by('_id', 'DESC');
		// CHANGE ME : TABLE CORE KUESIONER
        $que = $this->db->get('pkl_sipadu_real.sipadu_mahasiswa n');
        return $que->result();
    }

	function analysis($modul, $variabel){
		$modul_data = $this->get_modul_data($modul);
		// CHANGE ME
		$kuesioner_modul = 'VKD_PKL56_RT_V1_'.$modul_data->kuesioner;

		if($variabel =='calculated'){
			$variabel = "(COALESCE(CACAH_BLOK8_B8_2_B8_2_A, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_B, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_C, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_D, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_E, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_F, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_G, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_H, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_I, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_J, 0)) AS alh";

			$this->db->group_by("alh");
			$this->db->order_by("COUNT(alh)", 'DESC');
			$this->db->limit(1);
			$select =   array(
            	    "count(alh) as MAX",
                	"alh"
            	);
			$this->db->select($select);
			$que = $this->db->get("$kuesioner_modul");
		}else{
			$this->db->group_by("$variabel");
			$this->db->order_by("COUNT($variabel)", 'DESC');
			$this->db->limit(1);
			$select =   array(
                	"count($variabel) as MAX",
                	"$variabel"
            	);
			$this->db->select($select);
			$que = $this->db->get("$kuesioner_modul");
			return $que->row();

		}

	}


	function get_lookup($variabel){
		// $tabel = 'dummy_list_variabel';
		// $where = array(
		// 	'id' => $variabel,
		// );
		// $this->db->where($where);
		$que = $this->db->query("SELECT * FROM dummy_list_variabel WHERE id = '$variabel'");
		return $que->row();

	}


	function hasil_kuali($modul,$variabel){
		$modul_data = $this->get_modul_data($modul);
		// CHANGE ME
		$kuesioner_modul = 'VKD_PKL56_RT_V1_'.$modul_data->kuesioner;

		$lookup_data = $this->get_lookup($variabel);
		$lookup = $lookup_data->lookup;

		switch ($lookup) {
			case '1':
				$que = $this->db->query("SELECT COUNT(b.nama_variabel) as value, b.nama_variabel as label FROM $kuesioner_modul a INNER JOIN list_kegiatan_terbanyak b on a.$variabel = b.id GROUP BY b.nama_variabel");
				return $que->result();

				break;
			case '2':
				$que = $this->db->query("SELECT COUNT(b.nama_variabel) as value, b.nama_variabel as label FROM $kuesioner_modul a INNER JOIN list_lapangan_usaha b on a.$variabel = b.id GROUP BY b.nama_variabel");
				return $que->result();

				break;
			case '3':
				$que = $this->db->query("SELECT COUNT(b.nama_variabel) as value, b.nama_variabel as label FROM $kuesioner_modul a INNER JOIN list_pendidikan_non_formal b on a.$variabel = b.id GROUP BY b.nama_variabel");
				return $que->result();

				break;
			case '4':
				$que = $this->db->query("SELECT COUNT(b.nama_variabel) as value, b.nama_variabel as label FROM $kuesioner_modul a INNER JOIN list_pendidikan_formal b on a.$variabel = b.id GROUP BY b.nama_variabel");
				return $que->result();

				break;
			default:
				$this->db->group_by("$variabel");
					$select =   array(
		                "count($variabel) as value",
		                "$variabel as label"
		            );
				$this->db->select($select);
				$que = $this->db->get("$kuesioner_modul");
				return $que->result();

				break;
		}

		// if($lookup!='0'){
		// 	if($lookup == '1'){
				// $que = $this->db->query("SELECT COUNT(b.nama_variabel) as value, b.nama_variabel as label FROM $kuesioner_modul a INNER JOIN list_kegiatan_terbanyak b on a.$variabel = b.id GROUP BY b.nama_variabel");
				// return $que->result();
		// 	}
		// }else{
			// $this->db->group_by("$variabel");
			// 	$select =   array(
	  //               "count($variabel) as value",
	  //               "$variabel as label"
	  //           );
			// $this->db->select($select);
			// $que = $this->db->get("$kuesioner_modul");
			// return $que->result();
		// }
	}



	function hasil_kuanti($modul,$variabel){
		$modul_data = $this->get_modul_data($modul);
		// CHANGE ME
		$kuesioner_modul = 'VKD_PKL56_RT_V1_'.$modul_data->kuesioner;
		if($variabel =='calculated'){
			$variabel = "(COALESCE(CACAH_BLOK8_B8_2_B8_2_A, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_B, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_C, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_D, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_E, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_F, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_G, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_H, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_I, 0)+COALESCE(CACAH_BLOK8_B8_2_B8_2_J, 0)) as alh";
		}

		$this->db->select("$variabel");
		$que = $this->db->get("$kuesioner_modul");
		return $que->result_array();
	}

	function kuantitatif($modul, $variabel){
		$modul_data = $this->get_modul_data($modul);
		// CHANGE ME
		$kuesioner_modul = 'VKD_PKL56_RT_V1_'.$modul_data->kuesioner;

		$this->db->select("AVG(var2) AS average, ((AVG(var2*var2) - AVG(var2)*AVG(var2))/(COUNT(var1)-1)) AS variance, SQRT(((AVG(var2*var2) - AVG(var2)*AVG(var2))/(COUNT(var1)-1))) AS stdev, MIN(var2) AS min, MAX(var2) AS max");
		$que = $this->db->get("$kuesioner_modul");
		return $que->row();
	}

	function analysis_variabel_model($modul,$variabel_pertama,$variabel_kedua){
		switch($modul){
			case 1:
				$modul_data = $this->get_modul_data($modul);
				// CHANGE ME
				$kuesioner_modul = 'VKD_PKL56_RT_V1_'.$modul_data->kuesioner;

				$que_satu = $this->db->query("SELECT DISTINCT($variabel_pertama) as var1 FROM $kuesioner_modul");
				$que_satu = $que_satu->result();

				$que_kedua = $this->db->query("SELECT DISTINCT($variabel_kedua) as var2 FROM $kuesioner_modul");
				$que_kedua = $que_kedua->result();

				$arr = [];
				foreach ($que_satu as $row1) {

					$var = [];
					foreach ($que_kedua as $row2) {
						$que = $this->db->query("SELECT COUNT($variabel_pertama) as jumlah FROM $kuesioner_modul WHERE $variabel_pertama='$row1->var1' AND $variabel_kedua='$row2->var2'");
						$que = $que->row();

						$var['var1'] = $row1->var1;
						$var['var2'] = $row2->var2;
						$var['jumlah'] = $que->jumlah;
						array_push($arr, $var);
					}
				}
				return $arr;

				break;
			case 2:
				$modul_data = $this->get_modul_data($modul);
				// CHANGE ME
				$kuesioner_modul = 'VKD_PKL56_RT_V1_'.$modul_data->kuesioner;


				break;
			case 3:
				$modul_data = $this->get_modul_data($modul);
				// CHANGE ME
				$kuesioner_modul = 'VKD_PKL56_RT_V1_'.$modul_data->kuesioner;


				break;
		}
	}

	function get_count_variabel($modul,$var1){
				$modul_data = $this->get_modul_data($modul);
				// CHANGE ME
				$kuesioner_modul = 'VKD_PKL56_RT_V1_'.$modul_data->kuesioner;
				$que = $this->db->query("SELECT COUNT(DISTINCT($var1)) as jumlah_var FROM $kuesioner_modul");

				return $que->row();

	}


		function get_double_variabel($modul,$var1,$var2){
				$modul_data = $this->get_modul_data($modul);
				$tipe_var1 = $this->get_variabel_tipe($modul,$var1);
				$tipe_var2 = $this->get_variabel_tipe($modul,$var2);

				// CHANGE ME
				$kuesioner_modul = 'VKD_PKL56_RT_V1_'.$modul_data->kuesioner;

				$tipe_var1 = $tipe_var1->tipe;
				$tipe_var2 = $tipe_var2->tipe;

				if($tipe_var1!='int' && $tipe_var1!='decimal' || $tipe_var2!='int' && $tipe_var2!='decimal'){


						$que_satu = $this->db->query("SELECT DISTINCT($var1) as var1 FROM $kuesioner_modul");
						$que_satu = $que_satu->result();

						$que_kedua = $this->db->query("SELECT DISTINCT($var2) as var2 FROM $kuesioner_modul");
						$que_kedua = $que_kedua->result();

						$arr = [];
						foreach ($que_satu as $row1) {

							$var = [];
							foreach ($que_kedua as $row2) {
								$que = $this->db->query("SELECT COUNT($var1) as jumlah FROM $kuesioner_modul WHERE $var1='$row1->var1' AND $var2='$row2->var2'");
								$que = $que->row();

								$var['var1'] = $row1->var1;
								$var['var2'] = $row2->var2;
								$var['jumlah'] = $que->jumlah;
								array_push($arr, $var);
							}
						}
						return $arr;
					}else if(($tipe_var1=='int' || $tipe_var1=='decimal') && ($tipe_var2=='int' || $tipe_var2=='decimal')){

						$que = $this->db->query("SELECT $var1,$var2 FROM $kuesioner_modul");

						$arr = $que->result();

						return $arr;

					}



		}


	function checker($var1,$var2){

	}

	// SERVICE LISTING
	function get_ruta($cmd, $nim, $kodeBs = NULL){
		if($cmd == 'kortim'){
			$que = $this->db->query("SELECT * FROM backup_datart WHERE nim_kortim = $nim");
			$check = $que->num_rows();
			$que = $que->result();
		}elseif ($cmd == 'nim') {
			$que = $this->db->query("SELECT * FROM backup_datart WHERE nim = $nim");
			$check = $que->num_rows();
			$que = $que->result();
		}elseif ($cmd == 'kodeBsk' && $kodeBs != NULL) {
			$que = $this->db->query("SELECT * FROM backup_datart WHERE nim = $nim_kortim AND kodeBs = $kodeBs");
			$check = $que->num_rows();
			$que = $que->result();
		}elseif ($cmd == 'kodeBsn' && $kodeBs != NULL) {
			$que = $this->db->query("SELECT * FROM backup_datart WHERE nim = $nim AND kodeBs = $kodeBs");
			$check = $que->num_rows();
			$que = $que->result();
		}

		$arr = [];
		if($check>0){
			foreach ($que as $row) {
				array_push($arr, array(
					'akurasi' => $row->akurasi,
					'alamat'=> $row->alamat,
		           	'bf'=> $row->bf,
		           	'bs'=> $row->bs,
		           	'jumlahArt23'=> $row->jumlahArt23,
		           	'jumlahArtBalita'=> $row->jumlahArtBalita,
		           	'jumlahArtKerja'=> $row->jumlahArtKerja,
		           	'namaKrt'=> $row->namaKrt,
		           	'pendidikanKrt'=> $row->pendidikanKrt,
		           	'noSegmen'=> $row->noSegmen,
		           	'noUrutRuta'=> $row->noUrutRuta,
		           	'jenisBangunan'=> $row->jenisBangunan,
		           	'kodeBs'=> $row->kodeBs,
		           	'latitude' => $row->latitude,
					'longitude' => $row->longitude,
		           	'idrt'=> $row->idrt,
		           	'type'=> $row->type,
		           	'uuid'=> $row->uuid
					)
				);
			}
		}

		return $arr;
	}

	function get_sample($cmd, $nim, $kodeBs = NULL){
		if($cmd == 'kortim'){
			$que = $this->db->query("SELECT * FROM backup_datast WHERE nim_kortim = $nim");
			$check = $que->num_rows();
			$que = $que->result();
		}elseif ($cmd == 'nim') {
			$que = $this->db->query("SELECT * FROM backup_datast WHERE nim = $nim");
			$check = $que->num_rows();
			$que = $que->result();
		}elseif ($cmd == 'kodeBsk' && $kodeBs != NULL) {
			$que = $this->db->query("SELECT * FROM backup_datast WHERE nim = $nim_kortim AND kodeBs = $kodeBs");
			$check = $que->num_rows();
			$que = $que->result();
		}elseif ($cmd == 'kodeBsn' && $kodeBs != NULL) {
			$que = $this->db->query("SELECT * FROM backup_datast WHERE nim = $nim AND kodeBs = $kodeBs");
			$check = $que->num_rows();
			$que = $que->result();
		}

		$arr = [];
		if($check>0){
			foreach ($que as $row) {
				array_push($var['dataSt'], array(
					'kodeBs'=> $row->kodeBs,
					'uuid'=> $row->uuid
					)
				);
			}
		}

		return $arr;
	}

	function post_ruta($nim, $nim_kortim, $json){
		$status = [];
		$this->db->delete('backup_datart', array('nim' => $nim));

		foreach ($json as $key) {
			$data = array(
				'nim' => $nim,
				'nim_kortim' => $nim_kortim,
				'akurasi' => $key['akurasi'],
				'alamat' => $key['alamat'],
				'bf' => $key['bf'],
				'bs' => $key['bs'],
				'jenisBangunan' => $key['jenisBangunan'],
				'jumlahArt23' => $key['jumlahArt23'],
				'jumlahArtBalita' => $key['jumlahArtBalita'],
				'jumlahArtKerja' => $key['jumlahArtKerja'],
				'kodeBs' => $key['kodeBs'],
				'latitude' => $key['latitude'],
				'longitude' => $key['longitude'],
				'namaKrt' => $key['namaKrt'],
				'noSegmen' => $key['noSegmen'],
				'noUrutRuta' => $key['noUrutRuta'],
				'pendidikanKrt' => $key['pendidikanKrt'],
				'uuid' => $key['uuid'],
				'idrt' => $key['idrt'],
				'type' => $key['type']
			);
				$this->db->insert('backup_datart', $data);
				// if ($hasil) {
					// array_push($status, 'true');
					// $message = 'sukses';
				// }else{
					// array_push($status, 'false');
					// $message = 'sukses';
				// }
		}
		// if (in_array('false', $status, true)) {
		// 	$message = 'false';
		// }else{
		// 	$message = 'true';
		// }
		// return $message;
	}

	function post_sample($nim, $nim_kortim, $json){
		$status = [];
		$this->db->delete('backup_datast', array('nim' => $nim, 'nim_kortim' => $nim_kortim));

		foreach ($input as $key) {
			$data = array(
				'nim' => $nim,
				'nim_kortim' => $nim_kortim,
				'kodeBs' => $key['kodeBs'],
				'uuid' => $key['uuid'],
			);
			$this->db->insert('backup_datast', $data);
			// if ($hasil) {
			// 	array_push($status, "true");
			// }else{
			// 	array_push($status, "false");
			// }
		}
		// if (in_array('false', $status, true)) {
		// 	$message = 'false';
		// }else{
		// 	$message = 'true';
		// }
		// return $message;
	}

	function get_tabel_listing($kab){

    	$que = $this->db->query("SELECT a.noBs as bs, b.uploader as nim_pencacah , e.nama as kabupaten , d.nama as kecamatan , f.nama as kelurahan, c.beban_cacah as unit_terlisting, c.jumlah as total_unit , (c.beban/c.jumlah) as progress FROM backup_databs a INNER JOIN backup_datart b ON a.uploader = b.uploader AND a.idBs = b.idBs INNER JOIN dummy_kode_bloksensus c ON a.noBs = c.id INNER JOIN dummy_kode_kecamatan d ON a.kecamatan = d.id INNER JOIN dummy_kode_kabupaten e ON a.kabupaten = e.id INNER JOIN dummy_kode_kelurahandesa f ON a.desa = f.id WHERE b.idBs = $idBs");
    	$que = $que->result_array();

    	return $que;


    }


    function get_tabel_pcl(){

  //   	$que = $this->db->query("
		// SELECT
		// 	t1.nim,
		//     t2.nama,
		//     t2.nama_koor as kortim,
		// 	GROUP_CONCAT(t1.kode_bs) as wilayah_kerja,
		// 	t1.kode_desa,
		// 	t1.nama_desa,
		// 	t1.kode_kecamatan,
		// 	t1.nama_kecamatan,
		// 	t1.kode_kabupaten,
		// 	t1.nama_kabupaten,
		// 	SUM(t3.jumlah) as jumlah,
		// 	SUM(t1.beban_cacah) as beban_cacah,
		// 	SUM(t3.jumlah / t1.beban_cacah) as progress
		// FROM
		// 	(
		// 		SELECT
		// 			dkb.id as kode_bs,
		// 			dkb.nama as nama_bs,
		// 			dkd.id as kode_desa,
		// 			dkd.nama as nama_desa,
		// 			dkc.id as kode_kecamatan,
		// 			dkc.nama as nama_kecamatan,
		// 			dkk.id as kode_kabupaten,
		// 			dkk.nama as nama_kabupaten,
		// 			dkb.beban_cacah,
		// 			dkb.nim
		// 		FROM
		// 			dummy_kode_bloksensus dkb
		// 			INNER JOIN dummy_kode_kelurahandesa dkd ON dkd.id = dkb.kelurahandesa
		// 			AND dkd.kecamatan = dkb.kecamatan
		// 			AND dkd.kabupaten = dkb.kabupaten
		// 			INNER JOIN dummy_kode_kecamatan dkc ON dkc.id = dkb.kecamatan
		// 			AND dkc.kabupaten = dkb.kabupaten
		// 			INNER JOIN dummy_kode_kabupaten dkk ON dkk.id = dkb.kabupaten
		// 	) t1
		// 	INNER JOIN (
		// 		SELECT
		// 			sm.nama,
		// 			sm.nim,
		// 			st.nim_koor,
		// 			sm1.nama as nama_koor
		// 		FROM
		// 			`pkl_sipadu_real`.`sipadu_mahasiswa` sm
		// 			INNER JOIN `pkl_sipadu_real`.`sipadu_timpencacah` st ON sm.id_tim = st.id_tim
		// 			INNER JOIN `pkl_sipadu_real`.`sipadu_mahasiswa` sm1 ON st.nim_koor = sm1.nim
		// 		WHERE
		// 			sm.nim <> st.nim_koor
		// 	) t2 ON t1.nim = t2.nim
		// 	LEFT OUTER JOIN (
		// 	SELECT
		// 			COUNT(DISTINCT(n.unique_id_instance)) as jumlah,
		// 			n.nim,
		// 			ks.BLOK1_GROUP1_B1_6 as nama_bs,
		// 			ks.BLOK1_B1_4 kode_desa,
		// 			ks.BLOK1_B1_3 as kode_kecamatan,
		// 			ks.BLOK1_B1_2 as kode_kabupaten
		//  		FROM
		// 			pkl_odk_real.VSENPKL56_15_1_BETA_CORE ks
		// 			INNER JOIN pkl_kortimpcl_real.notif n ON n.unique_id_instance = ks._URI
		// 		WHERE
		// 			n.status_isian = 'Clear'
		// 			AND n.status = 'Final'
		// 			AND n.form_id = 'vsenpkl56_15.1_beta'
		// 		GROUP BY
		// 			ks.BLOK1_GROUP1_B1_6
		// 	) t3 ON t1.kode_kabupaten = t3.kode_kabupaten
		// 	AND t1.kode_kecamatan = t3.kode_kecamatan
		// 	AND t1.kode_desa = t3.kode_desa
		// 	AND t1.nama_bs = t3.nama_bs
		// 	AND t1.nim = t3.nim
		// GROUP BY t1.nim");

  //   	$que = $que->result_array();
  //   	return $que;
  //   }
    	$db_jarlap = $this->load->database('pkl58_sikoko', TRUE);
		 $SQL1="

            
		SELECT a.prodi,a.nim, a.nama, b.nama as nama_kortim, c.nama_tim_real, d.nama_wilayah, c.nim_koor, a.no_hp FROM sipadu_mahasiswa a, sipadu_mahasiswa b, sipadu_timpencacah c, sipadu_wilayah d WHERE a.id_tim=c.id_tim AND c.nim_koor=b.nim AND a.id_wilayah=d.id_wilayah ORDER BY a.nim DESC
            ";

        $Q = $db_jarlap->query($SQL1);
        return $Q->result_array();
	}

    function get_tabel_unit_cacah(){

    	$que = $this->db->database('pkl58_monitoring', TRUE)->query("
		SELECT t1.nim, t1.kode_bs, t1.nama_bs, t1.nama_desa, t1.nama_kecamatan, t1.nama_kabupaten, t2.*
		FROM
		(SELECT dkb.id as kode_bs, dkb.nama as nama_bs, dkd.id as kode_desa, dkd.nama as nama_desa, dkc.id as kode_kecamatan, dkc.nama as nama_kecamatan, dkk.id as kode_kabupaten, dkk.nama as nama_kabupaten, dkb.nim
		FROM dummy_kode_bloksensus dkb
		INNER JOIN dummy_kode_kelurahandesa dkd ON dkd.id = dkb.kelurahandesa AND dkd.kecamatan = dkb.kecamatan AND dkd.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kecamatan dkc ON dkc.id = dkb.kecamatan AND dkc.kabupaten = dkb.kabupaten
		INNER JOIN dummy_kode_kabupaten dkk ON dkk.id = dkb.kabupaten) t1
		INNER JOIN
		(SELECT drt.* FROM backup_datart drt
		INNER JOIN backup_datast dst ON dst.kodeRuta = drt.kodeRuta AND dst.kodeBs = drt.kodeBs) t2
		ON t1.kode_bs = t2.kodeBs
		");
//    	$que = $que->result_array();
    	return $que->result;
    }
    
    function get_tabel_unit_ubinan(){
        $que = $this->load->database('pkl58_odk', TRUE);
        $que->select("kodeKecamatan, kodeKelurahandesa, noSegmen, kodeSubSegmen, strataPadi, longitude, latitude, nim");
        $que->from("data_tanah");
        $que = $que->get();
        return $que->result();
    }
	
	function get_detail_ksa()
	{
		$queKSA = $this->load->database('pkl58_ksa', true)->query("
		SELECT us.nim, us.nama, seg.id_segmen, kec.nama_kec, des.nama_desa, seg.id_status
		FROM user us
		LEFT JOIN segmen seg ON seg.nim_pcl = us.nim
		LEFT JOIN desa des ON seg.id_desa = des.id_desa
		LEFT JOIN kecamatan kec ON des.id_kec = kec.id_kec
		
		");

		return $queKSA->result();
	}
        
        function get_detail_ubinan(){
                $que = $this->load->database('pkl58_monitoring', TRUE)->query("
                SELECT u1.segmen, u1.nim, u1.id_kabupaten, u1.nama_kabupaten, u1.id_kecamatan, u1.nama_kecamatan 
                FROM dummy_ubinan u1
                ");
                return $que->result();
        }
        
//////////////////////////////////////////////////////////ROZAN MODEL////////////////////////////////////////////////////////////////////////////
        
        function get_embedkabkot_model($kabkot_id){
            
            $db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
            $db_jarlap->select("embed_kabkot");
            $db_jarlap->from("kabkot");
            $db_jarlap->where("id_kabkot = $kabkot_id");
            $que = $db_jarlap->get();
            return $que->result();
        }
        
        function get_embedkecamatan_model($kecamatan_id){
            
            $db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
            $db_jarlap->select("embed_kecamatan");
            $db_jarlap->from("kecamatan");
            $db_jarlap->where("id_kecamatan = $kecamatan_id");
            $que = $db_jarlap->get();
            return $que->result();
        }
        
        function get_embedkecamatanawal_model($kecamatan_id){
            
            $db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
            $db_jarlap->select("embed_kecamatan");
            $db_jarlap->from("kecamatan");
            $db_jarlap->where("id_kecamatan = $kecamatan_id");
            $que = $db_jarlap->get();
            return $que->result();
        }
        
        function get_kabkot_model(){
            $db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
            $db_jarlap->select("*");
            $db_jarlap->from("kabkot");
            $que = $db_jarlap->get();
            return $que->result();
        }
        
        function get_tablenamakabkot_model($kabkot_id){
            $db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
            $db_jarlap->select("nama_kabkot");
            $db_jarlap->from("kabkot");
            $db_jarlap->where("id_kabkot = $kabkot_id");
            $que = $db_jarlap->get();
            return $que->result();
        }
        
        function get_namakecamatanawal_model($kecamatan_id){
            $db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
            $db_jarlap->select("nama_kecamatan");
            $db_jarlap->from("kecamatan");
            $db_jarlap->where("id_kecamatan = $kecamatan_id");
            $que = $db_jarlap->get();
            return $que->result();
        }
        
        function get_namakecamatan_model($kecamatan_id){
            $db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
            $db_jarlap->select("nama_kecamatan");
            $db_jarlap->from("kecamatan");
            $db_jarlap->where("id_kecamatan = $kecamatan_id");
            $que = $db_jarlap->get();
            return $que->result();
		}
//atttry		
		function get_prodConfirmed_model($statusprod){
			$db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
			$db_jarlap->select("produktivitas");
			$db_jarlap->from("dummyproduktivitas");
			$db_jarlap->where("statusConfirmed=$statusprod");
			$que = $db_jarlap->get();
            return $que->result();
		}
		
		function get_prodTerkirim_model($statusprod){
			$db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
			$db_jarlap->select("produktivitas");
			$db_jarlap->from("dummyproduktivitas");
			$db_jarlap->where("statusTerkirim=$statusprod");
			$que = $db_jarlap->get();
            return $que->result();
		}

		function get_outlier_model($statusprod){	
						$que = $this->load->database('pkl58_monitoring', TRUE)->query("
					SELECT
								*
					
					FROM
								dummyproduktivitas
					WHERE
								produktivitas>80
					");
			
					$que = $que->result_array();
					return $que;
					}
        
        function get_progresscacahtotal_pencacahan_model(){
            
        }
        
        function get_progresscacahtotal_ubinan_model(){
            
        }
        
        function get_progressperkabkot_model(){
            
        }
        
        function get_tableunitterlistingkabkot_model($kabkot_id_new){
//            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
//            $db_jarlap->select("COUNT(*) AS unit_terlisting");
//            $db_jarlap->from("dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs");
//            $db_jarlap->where("dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0");
//            $que = $db_jarlap->get();
//            return $que->result();
            
            $que = $this->load->database('pkl58_odk', TRUE)->query("
		SELECT
                    COUNT(*) AS unit_terlisting
		
		FROM
                    dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs
                WHERE
                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0
		");

    	$que = $que->result_array();
    	return $que;
        }
        
        function get_tableptnkptercacahkabkot_model($kabkot_id_new){
//            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
//            $db_jarlap->select("COUNT(*) AS unit_terlisting");
//            $db_jarlap->from("dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs");
//            $db_jarlap->where("dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0");
//            $que = $db_jarlap->get();
//            return $que->result();
            
//            $que = $this->load->database('pkl58_odk', TRUE)->query("
//		SELECT
//                    COUNT(*) AS unit_terlisting
//		
//		FROM
//                    dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs
//                WHERE
//                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0
//		");
//
//    	$que = $que->result_array();
//    	return $que;
        }
        
        function get_tableprogresscacahkabkot_model($kabkot_id_new){
//            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
//            $db_jarlap->select("COUNT(*) AS unit_terlisting");
//            $db_jarlap->from("dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs");
//            $db_jarlap->where("dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0");
//            $que = $db_jarlap->get();
//            return $que->result();
            
//            $que = $this->load->database('pkl58_odk', TRUE)->query("
//		SELECT
//                    COUNT(*) AS unit_terlisting
//		
//		FROM
//                    dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs
//                WHERE
//                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0
//		");
//
//    	$que = $que->result_array();
//    	return $que;
        }
        
        function get_tableprogressubinankabkot_model($kabkot_id_new){
//            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
//            $db_jarlap->select("COUNT(*) AS unit_terlisting");
//            $db_jarlap->from("dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs");
//            $db_jarlap->where("dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0");
//            $que = $db_jarlap->get();
//            return $que->result();
            
//            $que = $this->load->database('pkl58_odk', TRUE)->query("
//		SELECT
//                    COUNT(*) AS unit_terlisting
//		
//		FROM
//                    dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs
//                WHERE
//                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0
//		");
//
//    	$que = $que->result_array();
//    	return $que;
        }
        
        function get_tableubinantercacahkabkot_model($kabkot_id_new){
//            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
//            $db_jarlap->select("COUNT(*) AS unit_terlisting");
//            $db_jarlap->from("dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs");
//            $db_jarlap->where("dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0");
//            $que = $db_jarlap->get();
//            return $que->result();
            
//            $que = $this->load->database('pkl58_odk', TRUE)->query("
//		SELECT
//                    COUNT(*) AS unit_terlisting
//		
//		FROM
//                    dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs
//                WHERE
//                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0
//		");
//
//    	$que = $que->result_array();
//    	return $que;
        }
        
        function get_tableunitterlistingkecamatan_model($kabkot_id_new,$kecamatan_id_new){
//            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
//            $db_jarlap->select("COUNT(*) AS unit_terlisting");
//            $db_jarlap->from("dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs");
//            $db_jarlap->where("dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0");
//            $que = $db_jarlap->get();
//            return $que->result();
            
            $que = $this->load->database('pkl58_odk', TRUE)->query("
		SELECT
                    COUNT(*) AS unit_terlisting
		
		FROM
                    dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs
                WHERE
                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new' AND dummy_kode_bloksensus.kecamatan LIKE '%$kecamatan_id_new'  AND backup_datart.keberadaanRuta<>0
		");

    	$que = $que->result_array();
    	return $que;
        }
        
        function get_tableubinantercacahkecamatan_model($kabkot_id_new,$kecamatan_id_new){
//            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
//            $db_jarlap->select("COUNT(*) AS unit_terlisting");
//            $db_jarlap->from("dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs");
//            $db_jarlap->where("dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0");
//            $que = $db_jarlap->get();
//            return $que->result();
            
//            $que = $this->load->database('pkl58_odk', TRUE)->query("
//		SELECT
//                    COUNT(*) AS unit_terlisting
//		
//		FROM
//                    dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs
//                WHERE
//                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new' AND dummy_kode_bloksensus.kecamatan LIKE '%$kecamatan_id_new'  AND backup_datart.keberadaanRuta<>0
//		");
//
//    	$que = $que->result_array();
//    	return $que;
        }
        
        function get_tableprogressubinankecamatan_model($kabkot_id_new,$kecamatan_id_new){
//            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
//            $db_jarlap->select("COUNT(*) AS unit_terlisting");
//            $db_jarlap->from("dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs");
//            $db_jarlap->where("dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0");
//            $que = $db_jarlap->get();
//            return $que->result();
            
//            $que = $this->load->database('pkl58_odk', TRUE)->query("
//		SELECT
//                    COUNT(*) AS unit_terlisting
//		
//		FROM
//                    dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs
//                WHERE
//                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new' AND dummy_kode_bloksensus.kecamatan LIKE '%$kecamatan_id_new'  AND backup_datart.keberadaanRuta<>0
//		");
//
//    	$que = $que->result_array();
//    	return $que;
        }
        
        function get_tableprogresscacahkecamatan_model($kabkot_id_new,$kecamatan_id_new){
//            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
//            $db_jarlap->select("COUNT(*) AS unit_terlisting");
//            $db_jarlap->from("dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs");
//            $db_jarlap->where("dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0");
//            $que = $db_jarlap->get();
//            return $que->result();
            
//            $que = $this->load->database('pkl58_odk', TRUE)->query("
//		SELECT
//                    COUNT(*) AS unit_terlisting
//		
//		FROM
//                    dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs
//                WHERE
//                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new' AND dummy_kode_bloksensus.kecamatan LIKE '%$kecamatan_id_new'  AND backup_datart.keberadaanRuta<>0
//		");
//
//    	$que = $que->result_array();
//    	return $que;
        }
        
        function get_tableptnkptercacahkecamatan_model($kabkot_id_new,$kecamatan_id_new){
//            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
//            $db_jarlap->select("COUNT(*) AS unit_terlisting");
//            $db_jarlap->from("dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs");
//            $db_jarlap->where("dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new'  AND backup_datart.keberadaanRuta<>0");
//            $que = $db_jarlap->get();
//            return $que->result();
            
//            $que = $this->load->database('pkl58_odk', TRUE)->query("
//		SELECT
//                    COUNT(*) AS unit_terlisting
//		
//		FROM
//                    dummy_kode_bloksensus INNER JOIN backup_datart ON dummy_kode_bloksensus.id = backup_datart.kodeBs
//                WHERE
//                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new' AND dummy_kode_bloksensus.kecamatan LIKE '%$kecamatan_id_new'  AND backup_datart.keberadaanRuta<>0
//		");
//
//    	$que = $que->result_array();
//    	return $que;
        }
        
        //function get_tableksatercacahkabkot_model($kabkot_id){
            //$db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
            //$db_jarlap->select("nama_kabkot");
            //$db_jarlap->from("kabkot");
            //$db_jarlap->where("id_kabkot = $kabkot_id");
            //$que = $db_jarlap->get();
            //return $que->result();
            
            
        //}
        
         function get_allkecamatan_model($kabkot_id){
            
            $db_jarlap = $this->load->database('pkl58_monitoring', TRUE);
            $db_jarlap->select("*");
            $db_jarlap->from("kecamatan");
            $db_jarlap->where(" id_kabkot = $kabkot_id ");
            $que = $db_jarlap->get();
            return $que->result();
        }

        function get_totalubinanjembrana_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        function get_totalcacahjembrana_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        
        function get_totalubinantabanan_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        function get_totalcacahtabanan_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        
        function get_totalubinanbadung_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        function get_totalcacahbadung_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        
        function get_totalubinangianyar_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        function get_totalcacahgianyar_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        
        function get_totalubinanklungkung_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        function get_totalcacahklungkung_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        
        function get_totalubinanbangli_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        function get_totalcacahbangli_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        
        function get_totalubinankarang_asem_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        function get_totalcacahkarang_asem_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        
        function get_totalubinanbuleleng_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        function get_totalcacahbuleleng_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        
        function get_totalubinandenpasar_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        function get_totalcacahdenpasar_model($kabkot_id){
            $que = $this->load->database('', TRUE)->query("
		SELECT
                FROM
                WHERE
            ");
            $que = $que->result_array();
    	    return $que;
        }
        
         function get_tableprogresscacahkabkot_nim_model($kabkot_id_new){
             $que = $this->load->database('pkl58_odk', TRUE)->query("
		SELECT
                    DISTINCT nim 
		FROM
                    dummy_kode_bloksensus
                WHERE
                    kabupaten LIKE '%$kabkot_id_new' 
		");

    	$que = $que->result_array();
    	return $que;
        }
        
        function get_tableprogresscacahkabkot_beban_model($kabkot_id_new){
            $que = $this->load->database('pkl58_odk', TRUE)->query("
		SELECT
                    COUNT(*) AS beban
		FROM
                    dummy_kode_bloksensus INNER JOIN backup_datast ON dummy_kode_bloksensus.id = backup_datast.kodeBs
                WHERE
                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new' 
		");

    	$que = $que->result_array();
    	return $que;
        }
        
        function get_tableprogresscacahkabkot_tercacah_nim_model($nim){
            $db_jarlap = $this->load->database('pkl58_kortimpcl', TRUE);
            $db_jarlap->select("COUNT(nim) AS hasil");
            $db_jarlap->from("notif");
            $db_jarlap->where("nim = $nim AND status = 'Final'"); //status clear dan final belum ditambahkan
            $que = $db_jarlap->get();
            return $que->result_array();
        }
        
        function get_tableprogresscacahkecamatan_nim_model($kabkot_id_new, $kecamatan_id_new){
             $que = $this->load->database('pkl58_odk', TRUE)->query("
		SELECT
                    DISTINCT nim 
		FROM
                    dummy_kode_bloksensus
                WHERE
                    kabupaten LIKE '%$kabkot_id_new' AND kecamatan LIKE '%$kecamatan_id_new'
		");

    	$que = $que->result_array();
    	return $que;
        }
        
        function get_tableprogresscacahkecamatan_beban_model($kabkot_id_new, $kecamatan_id_new){
            $que = $this->load->database('pkl58_odk', TRUE)->query("
		SELECT
                    COUNT(*) AS beban
		FROM
                    dummy_kode_bloksensus INNER JOIN backup_datast ON dummy_kode_bloksensus.id = backup_datast.kodeBs
                WHERE
                    dummy_kode_bloksensus.kabupaten LIKE '%$kabkot_id_new' AND dummy_kode_bloksensus.kecamatan LIKE '%$kecamatan_id_new'
		");

    	$que = $que->result_array();
    	return $que;
        }
        
        function get_tableprogresscacahkecamatan_tercacah_nim_model($nim){
            $db_jarlap = $this->load->database('pkl58_kortimpcl', TRUE);
            $db_jarlap->select("COUNT(nim) AS hasil");
            $db_jarlap->from("notif");
             $db_jarlap->where("nim = $nim AND status = 'Final'");
             //status clear dan final belum ditambahkan
            $que = $db_jarlap->get();
            return $que->result_array();
        }
        
        function get_tableprogresscacahtotal_totalbeban_model() {
            $db_jarlap = $this->load->database('pkl58_odk', TRUE);
            $db_jarlap->select("COUNT(*) AS beban");
            $db_jarlap->from("backup_datast");
            
            $que = $db_jarlap->get();
            return $que->result_array();
            
        }
        
        function get_tableprogresscacahtotal_totaltercacah_model() {
            $db_jarlap = $this->load->database('pkl58_kortimpcl', TRUE);
            $db_jarlap->select("COUNT(nim) AS hasil");
            $db_jarlap->from("notif");
            $db_jarlap->where("status = 'Final'");
            $que = $db_jarlap->get();
            return $que->result_array();
        }
        
}
