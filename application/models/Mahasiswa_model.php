<?php
class mahasiswa_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function set_mahasiswa($data){
        return $this->db->insert('mahasiswa', $data);
    }
    function get_narasumber(){
        $SQL1="
        SELECT a.id, a.nim, b.kategori, a.wilayah, a.pertanyaan, a.golongan, c.nama, a.timestamp, a.jawaban
        FROM sipadu_daftar_pertanyaan a, sipadu_kategori_pertanyaan b, sipadu_mahasiswa c
        WHERE a.nim = c.nim AND a.kategori = b.id  AND a.status  = '3'
        ORDER BY a.jawaban, a.timestamp DESC
        ";
        $Q = $this->db->query($SQL1);
        return $Q->result_array();
    }
    function get_detail_narasumber($id){
        $SQL1="
        SELECT a.id, a.nim, b.kategori, a.wilayah, a.pertanyaan, a.golongan, c.nama, a.timestamp, a.jawaban
        FROM sipadu_daftar_pertanyaan a, sipadu_kategori_pertanyaan b, sipadu_mahasiswa c
        WHERE a.nim = c.nim AND a.kategori = b.id AND a.id = '".$id."'
        ORDER BY a.timestamp DESC
        ";
        $Q = $this->db->query($SQL1);
        return $Q->result_array();
    }
    function jawab_pertanyaan($data,$id){
        $SQL1="
        UPDATE sipadu_daftar_pertanyaan
        SET jawaban = '".$data['jawaban']."', golongan = '".$data['golongan']."'
        WHERE id= '".$id."'
        ";
        $Q = $this->db->query($SQL1);

    }
    function pertanyaan_baru($data){
        $SQL1="
        INSERT INTO `jarkom`.`sipadu_jarkom` (`id`, `nim`, `wilayah`, `kategori`, `pertanyaan`, `jawaban`, `golongan`, `status`, `timestamp`) VALUES ('4', ".$data['pengirim'].", ".$data['lokasi'].",".$data['kategori'].",".$data['pertanyaan'].",".$data['jawaban'].",".$data['golongan'].", '4' , CURRENT_TIMESTAMP);
        ";
        $Q = $this->db->query($SQL1);
    }
    function dashboardrapat(){
        $SQL1="SELECT DISTINCT * FROM sipadu_rapat,sipadu_rapat_seksi,sipadu_seksi,sipadu_modul,sipadu_subseksi WHERE sipadu_rapat.id_rapat=sipadu_rapat_seksi.id_rapat AND ( waktu_selesai>NOW() OR waktu_mulai>NOW()) AND sipadu_rapat_seksi.id_seksi=sipadu_seksi.id_seksi AND sipadu_rapat_seksi.id_modul=sipadu_modul.id_modul AND sipadu_rapat_seksi.id_subseksi=sipadu_subseksi.id_subseksi ORDER BY waktu_mulai ASC LIMIT 20 ";
        $Q = $this->db->query($SQL1);
        return $Q->result_array();
    }
    function getnotulensi(){
        $SQL1="
        SELECT a.nama_rapat, a.notulensi, c.nama_modul, d.nama_seksi, e.nama_subseksi, a.waktu_mulai FROM sipadu_rapat a, sipadu_rapat_seksi b, sipadu_modul c, sipadu_seksi d, sipadu_subseksi e
        WHERE a.notulensi IS NOT NULL AND a.id_rapat = b.id_rapat AND b.id_modul = c.id_modul AND d.id_seksi = b.id_seksi
        AND e.id_subseksi= b.id_subseksi ORDER BY a.waktu_mulai DESC";
        $Q = $this->db->query($SQL1);
        return $Q->result_array();
    }

    function upload_foto($info){
        $foto = array('foto' => $info['foto']);
        $nim = $info['nim'];
        $this->db->where('nim',$nim);
        $this->db->update('mahasiswa',$foto);
    }
    public function get_mahasiswa($nim,$password){
        if ($nim === FALSE)
        {
            $query = $this->db->get('mahasiswa');
            return $query->result_array();
        }
        $query = $this->db->get_where('mahasiswa', array('nim' => $nim,'password' => md5($password)));
        return $query->row_array();
    }


    public function verifikasi($nim, $email, $password){
        $kode = 0;
        
        $daftar_akses_email_dosen = array("rinaha@stis.ac.id", "dwybagus@stis.ac.id", "silfi_fitriana@stis.ac.id", "16.9083@stis.ac.id",
    "harwink@stis.ac.id","odry_syafwil@stis.ac.id","walujadi@stis.ac.id","suryanto@stis.ac.id","opan_97@stis.ac.id","budiasih@stis.ac.id",
    "indra@stis.ac.id","haiyinah_wijaya@yahoo.com","dewip@stis.ac.id","waris@stis.ac.id","yulianto@stis.ac.id","jeffryrhs@stis.ac.id",
    "setiadi@stis.ac.id","titik@stis.ac.id","sisi@stis.ac.id","hardius@stis.ac.id","dokhi@stis.ac.id","sriherwanto@stis.ac.id","erni@stis.ac.id",
    "arcana@stis.ac.id","theo@stis.ac.id","retna@stis.ac.id","sitim@stis.ac.id","nurcahyo@stis.ac.id","anang@stis.ac.id","nurseto@stis.ac.id",
    "m.ari@stis.ac.id","sukim@stis.ac.id","firdaus@stis.ac.id","sofyan@stis.ac.id","praze@stis.ac.id","agung@stis.ac.id","wahyudin@stis.ac.id",
    "ernapasaribu@stis.ac.id","timbang@stis.ac.id","nasrudin@stis.ac.id","ak.monika@stis.ac.id","lia@stis.ac.id","neli@stis.ac.id","noviabudi@stis.ac.id",
    "lizakurnia@stis.ac.id","setia.pramana@stis.ac.id","soegie@stis.ac.id","atis@stis.ac.id","byuniarto@stis.ac.id","budy@stis.ac.id","toza@stis.ac.id",
    "robertk@stis.ac.id","winih@stis.ac.id","krismanti@stis.ac.id","ekaria@stis.ac.id","febri@stis.ac.id","azka@stis.ac.id","arywahyu@stis.ac.id",
    "efridiah@stis.ac.id","raninoor@stis.ac.id","rifka.hakim@stis.ac.id","tria@stis.ac.id","siskarossa@stis.ac.id","aisyah.fy@stis.ac.id",
    "risnij@stis.ac.id","faridr@stis.ac.id","ibnu@stis.ac.id","ikayuni@stis.ac.id","raysastri@stis.ac.id","takdir@stis.ac.id","gamaputra@stis.ac.id",
    "rinirahani@stis.ac.id","sitimariyah@stis.ac.id","avi@stis.ac.id","lutfim@stis.ac.id", "vbnm@stis.ac.id");
        
        $daftar_akses_nim = array("16.9124", "16.9468", "16.9214", "16.8999", "16.9082", "16.9288", "16.9212", "16.9277", "16.9175", "16.9134", 
            "16.9275", "16.9338", "16.9278", 
            "16.9184", "16.9418", "16.9048", "16.9121", "16.9120", "16.9090", "16.9166", "16.9202", 
            "16.9404", "16.9309", "16.8974", "16.9286", "16.9227", "16.9386", "16.9036", 
            "16.1234");
        
        $table_mahasiswa = 'sipadu_mahasiswa';
        $table_dosen = 'sipadu_dosen';
        $where_mahasiswa = array (
            'nim' => $nim
        );
        $where_dosen = array (
            'email' => $email
        );
        $data_mahasiswa = $this->load->database('pkl58_sikoko', TRUE)->where($where_mahasiswa)->get($table_mahasiswa)->result();
        $data_dosen = $this->load->database('pkl58_sikoko', TRUE)->where($where_dosen)->get($table_dosen)->result();
        $hashed_password_mahasiswa = $data_mahasiswa['0']->password;
        $hashed_password_dosen = $data_dosen['0']->password;
       
        for ($i = 1; $i < count($daftar_akses_nim); $i++) {
            if($nim == $daftar_akses_nim[$i]){
            $kode = $kode + 3;
            }
        }
        
        for ($i = 1; $i < count($daftar_akses_email_dosen); $i++) {
            if($email == $daftar_akses_email_dosen[$i]){
            $kode = $kode + 4;
            }
        }
        
        if ($kode == 3){
            if (password_verify($password, $hashed_password_mahasiswa)) {
                $kode = $kode - 2;
                
                } 
        }
        
        if ($kode == 4){
            if (password_verify($password, $hashed_password_dosen)) {
                $kode = $kode - 2;
                } 
            }
            
//        $db_jarlap = $this->load->database('pkl58_sikoko', TRUE);
//        $kode = $db_jarlap->get_where('sipadu_mahasiswa', array('nim' => $nim))->num_rows();
        
         
            return $kode;
        
        
        //,'password' => md5($password)
        
//        $db_jarlap2 = $this->load->database('pkl58_sikoko', TRUE);
//            $db_jarlap2->select("password");
//            $db_jarlap2->from("sipadu_mahasiswa");
//            $db_jarlap2->where("nim = $nim");
//            $hashed_password = $db_jarlap2->get();
            
            
            
        
//        if($kode != 1){
//            $kode = $db_jarlap->get_where('sipadu_dosen', array('email' => $nim))->num_rows();
//            if ($kode==1) {
//                $kode = 2;
//            }
//        }
    }
    public function get_rapat_administrasi(){
        if ( $this->session->userdata('nim') == '14.8191') {
           $SQL1 ="
           SELECT DISTINCT a.id_rapat, a.nama_rapat, a.waktu_mulai, a.tempat, a.notulensi
           FROM sipadu_rapat a
           WHERE a.id_ketua='14.8191'
           ORDER BY a.id_rapat DESC
           ";
       }else {
        $SQL1 =" SELECT DISTINCT a.id_rapat, a.nama_rapat, a.waktu_mulai, a.tempat, a.notulensi
        FROM sipadu_rapat a, sipadu_mahasiswa c
        WHERE a.id_ketua='".$this->session->userdata('nim')."'
        OR '".$this->session->userdata('nim')."' = '14.8392' OR '".$this->session->userdata('nim')."' = '14.8115' OR '".$this->session->userdata('nim')."' = '14.7960'
        OR (c.id_modul = '".$this->session->userdata('id_modul')."'  AND '".$this->session->userdata('sekre')."'='2' AND a.id_ketua = c.nim)
        OR (c.id_modul = '".$this->session->userdata('id_modul')."' AND c.id_seksi = '".$this->session->userdata('id_seksi')."'  AND '".$this->session->userdata('sekre')."'='2' AND a.id_ketua = c.nim)
        ORDER BY a.id_rapat DESC
        ";
    }
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function hapus_rapat($id){
    $SQL1 ='
    DELETE FROM sipadu_rapat WHERE id_rapat = '.$id.'
    ';
    $Q = $this->db->query($SQL1);
    return $Q;
    $Q->free_result();
}
public function get_identitas_absensi($id){
    $SQL1 ='
    SELECT a.nama_rapat, a.waktu_mulai, a.tempat, a.waktu_selesai, a.agenda, a.prioritas_enum, c.nama_modul, d.nama_seksi, e.nama_subseksi FROM sipadu_rapat a, sipadu_rapat_seksi b, sipadu_modul c, sipadu_seksi d, sipadu_subseksi e WHERE a.id_rapat='.$id.' AND b.id_rapat = '.$id.' AND b.id_modul = c.id_modul AND b.id_seksi = d.id_seksi AND b.id_subseksi = e.id_subseksi
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function get_detail_absensi($id){
    $SQL1 ='
    SELECT b.is_wajib,b.presentase_presensi,b.id_peserta,a.nama, b.waktu_kedatangan
    FROM sipadu_absensirapat b, sipadu_mahasiswa a
    WHERE id_rapat='.$id.' AND b.id_peserta = a.nim
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function cek_sekre($nim){
    $db_jarlap = $this->load->database('pkl58_sikoko', TRUE);
    $SQL1 ="
    SELECT nama, email, level, id_seksi, id_subseksi, password
    FROM sipadu_mahasiswa
    WHERE nim = '".$nim."'
    ";
    $Q = $db_jarlap->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function get_nama_mahasiswa(){
    $SQL1 ='
    SELECT nama,nim
    FROM sipadu_mahasiswa
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function get_nama_dosen(){
    $SQL1 ='
    SELECT nama,nip
    FROM sipadu_dosen
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function get_nama_subseksi(){
    $SQL1 ='
    SELECT id_subseksi,nama_subseksi
    FROM sipadu_subseksi
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function hadir_semua($data){
    $SQL1 ="
    SELECT waktu_mulai FROM sipadu_rapat
    WHERE id_rapat = ".$data['id_rapat']."
    ";
    $Q = $this->db->query($SQL1);
    $waktu = $Q->result_array();

    $SQL1 = "
    UPDATE sipadu_absensirapat SET waktu_kedatangan = '".$waktu[0]['waktu_mulai']."', presentase_presensi = 100
    WHERE id_rapat = ".$data['id_rapat']."
    ";
    $Q = $this->db->query($SQL1);
    return $Q;
    $Q->free_result();
}
public function update_absensi($data){
    $SQL1 ="
    SELECT date(waktu_mulai) as waktu_mulai
    FROM sipadu_rapat
    WHERE id_rapat = ".$data['id_rapat']."
    ";
    $Q = $this->db->query($SQL1);
    $waktu = $Q->result_array();
    if ($data['waktu_kedatangan'] == NULL) {
        $waktu_kedatangan = NULL;
        $SQL1 = "
        UPDATE sipadu_absensirapat SET waktu_kedatangan = NULL, presentase_presensi = '0'
        WHERE id_rapat = ".$data['id_rapat']." AND id_peserta = '".$data['id_peserta']."'
        ";
    }else {
        $waktu_kedatangan = $waktu[0]['waktu_mulai'].' '.$data['waktu_kedatangan'];
        $SQL1 ="
        SELECT waktu_mulai as waktu_mulai
        FROM sipadu_rapat
        WHERE id_rapat = ".$data['id_rapat']."
        ";
        $Q = $this->db->query($SQL1);
        $waktu = $Q->result_array();
        $to_time = strtotime($waktu_kedatangan);
        $from_time = strtotime($waktu[0]['waktu_mulai']);
        $selisih =  round(($to_time - $from_time) / 60,2);
        if ($selisih <= 15 ) {
            $data['presentase_presensi'] = '100';
        } else if ($selisih <= 30) {
            $data['presentase_presensi'] = '50';
        } else {
            $data['presentase_presensi'] = '0';
        }
        $SQL1 = "
        UPDATE sipadu_absensirapat SET waktu_kedatangan = '".$waktu_kedatangan."', presentase_presensi = ".$data['presentase_presensi']."
        WHERE id_rapat = ".$data['id_rapat']." AND id_peserta = '".$data['id_peserta']."'
        ";
    }
    $Q = $this->db->query($SQL1);
    return $Q;
    $Q->free_result();
}
public function get_nama_modul(){
    $SQL1 ='
    SELECT id_modul, nama_modul
    FROM sipadu_modul
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function get_modul_terpilih($id){
    $SQL1 ='
    SELECT a.id_modul, c.nama_modul
    FROM sipadu_rapat_seksi a, sipadu_modul c
    WHERE a.id_rapat = '.$id.' AND a.id_modul = c.id_modul
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function get_seksi_terpilih($id){
    $SQL1 ='
    SELECT a.id_seksi, c.nama_seksi
    FROM sipadu_rapat_seksi a, sipadu_seksi c
    WHERE a.id_rapat = '.$id.' AND a.id_seksi = c.id_seksi
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function get_subseksi_terpilih($id){
    $SQL1 ='
    SELECT a.id_subseksi, c.nama_subseksi
    FROM sipadu_rapat_seksi a, sipadu_subseksi c
    WHERE a.id_rapat = '.$id.' AND a.id_subseksi = c.id_subseksi
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function subseksi($id_seksi){
    $SQL1 ="
    SELECT *
    FROM sipadu_subseksi
    WHERE id_subseksi LIKE '%".$id_seksi."%';
    ";
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
}
public function simpan_rapat($data){
    $data['waktu_selesai'] = $data['tanggal'].' '.$data['waktu_selesai'].':00';
    $data['waktu_mulai'] =  $data['tanggal'].' '.$data['waktu_mulai'].':00';
    $SQL1 ="
    UPDATE sipadu_rapat
    SET id_jenis_rapat = '".$data['id_jenis_rapat']."', nama_rapat = '".$data['nama_rapat']."', agenda = '".$data['agenda']."', tempat = '".$data['tempat']."', waktu_mulai = '".$data['waktu_mulai']."', waktu_selesai ='".$data['waktu_selesai']."', prioritas_enum = '".$data['is_wajib']."'
    WHERE id_rapat = ".$data['id']."
    ";
    $Q = $this->db->query($SQL1);
    $SQL1 ="
    DELETE FROM sipadu_absensirapat
    WHERE id_rapat = ".$data['id']."
    ";
    $Q = $this->db->query($SQL1);
    for ($i=0; $i < (count($data['mahasiswa'])) ; $i++) {
        $SQL1 ="
        INSERT INTO sipadu_absensirapat (id_rapat,id_peserta,waktu_kedatangan,is_wajib, presentase_presensi) VALUES (".$data['id'].", '".$data['mahasiswa'][$i]."', NULL, '".$data['is_wajib']."',0)
        ON DUPLICATE KEY UPDATE waktu_kedatangan = VALUES(waktu_kedatangan), id_peserta = VALUES(id_peserta)
        ";
        $Q = $this->db->query($SQL1);
    }
    return $Q;
    $Q->free_result();
}
public function get_identitas_edit($id){
    $SQL1 ='
    SELECT a.nama_rapat, a.waktu_mulai, a.tempat, a.waktu_selesai, a.agenda, a.prioritas_enum, a.id_jenis_rapat, c.jenis_rapat  FROM sipadu_rapat a, sipadu_jenisrapat c WHERE a.id_rapat='.$id.' AND a.id_jenis_rapat = c.id_jenis_rapat
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function get_mahasiswa_tambahan($id){
    $SQL1 ='
    SELECT a.nim, a.nama
    FROM sipadu_mahasiswa a, sipadu_absensirapat b
    WHERE a.nim= b.id_peserta AND b.id_rapat = '.$id.'
    ';
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function buat_rapat($data){

    $data['waktu_selesai'] = $data['tanggal'].' '.$data['waktu_selesai'].':00';
    $data['waktu_mulai'] =  $data['tanggal'].' '.$data['waktu_mulai'].':00';
    $SQL1 ="
    INSERT INTO sipadu_rapat(nama_rapat, id_jenis_rapat, tempat, waktu_mulai,prioritas_enum, waktu_selesai,agenda, id_ketua) VALUES ('".$data['nama_rapat']."','".$data['id_jenis_rapat']."', '".$data['tempat']."','".$data['waktu_mulai']."', '".$data['is_wajib']."', '".$data['waktu_selesai']."', '".$data['agenda']."', '".$data['id_ketua']."')
    ";
    $Q = $this->db->query($SQL1);
    $SQL1 ="
    SELECT id_rapat FROM sipadu_rapat WHERE nama_rapat = '".$data['nama_rapat']."' AND waktu_mulai = '".$data['waktu_mulai']."'
    ";
    $Q = $this->db->query($SQL1);
    $id = $Q->result_array();
    for ($i=0; $i < count($data['mahasiswa']) ; $i++) {
        if ($data['mahasiswa'] == $this->session->userdata('nim')) {
            $SQL1 ="
            INSERT INTO sipadu_absensirapat (id_rapat,id_peserta,waktu_kedatangan,is_wajib, presentase_presensi) VALUES (".$id[0]['id_rapat'].", '".$data['mahasiswa'][$i]."', '".$data['waktu_mulai']."', '".$data['is_wajib']."',100)
            ";
        } else {
            $SQL1 ="
            INSERT INTO sipadu_absensirapat (id_rapat,id_peserta,waktu_kedatangan,is_wajib, presentase_presensi) VALUES (".$id[0]['id_rapat'].", '".$data['mahasiswa'][$i]."', NULL, '".$data['is_wajib']."',0)
            ";
        }
        $Q = $this->db->query($SQL1);
    }
    if ( $this->session->userdata('nim') == '14.8191') {
        $SQL1 ="
        INSERT INTO sipadu_rapat_seksi(id_rapat, id_modul, id_seksi, id_subseksi) VALUES (".$id[0]['id_rapat'].",'12', '0','0')
        ";
    } else {
        $SQL1 ="
        INSERT INTO sipadu_rapat_seksi(id_rapat, id_modul, id_seksi, id_subseksi) VALUES (".$id[0]['id_rapat'].",'". $this->session->userdata('id_modul')."', '". $this->session->userdata('id_seksi')."','". $this->session->userdata('id_subseksi')."')
        ";
    }
    $Q = $this->db->query($SQL1);
    return $Q;
    $Q->free_result();
}
public function tambah($data){
    if ($data['id_seksi'] != '0' && $data['id_subseksi'] != '0') {
        $SQL1 ="
        SELECT nim, nama
        FROM sipadu_mahasiswa
        WHERE id_modul = '".$data['id_modul']."' AND id_seksi = '".$data['id_seksi']."' AND id_subseksi = '".$data['id_subseksi']."'
        ";
    } elseif ($data['id_seksi'] !='0') {
        $SQL1 ="
        SELECT nim, nama
        FROM sipadu_mahasiswa
        WHERE id_modul = '".$data['id_modul']."' AND id_seksi = '".$data['id_seksi']."'
        ";
    } else{
        $SQL1 ="
        SELECT nim,nama
        FROM sipadu_mahasiswa
        WHERE id_modul = '".$data['id_modul']."'
        ";
    }
    $Q = $this->db->query($SQL1);
    return $Q->result_array();
}
public function update_password($nim,$pass){
    $db_jarlap = $this->load->database('pkl_sipadu_real', TRUE);
    $password = array('password' => md5($pass));
    $db_jarlap->where('nim',$nim);
    $db_jarlap->update('mahasiswa',$password);
}
public function savekode($nim,$kode) {
    $db_jarlap = $this->load->database('pkl_sipadu_real', TRUE);
    $koderes = array('kodeLupaPass' => $kode);
    $db_jarlap->where('nim',$nim);
    $db_jarlap->update('mahasiswa',$koderes);
}
public function get_nip($email){
    $db_jarlap = $this->load->database('pkl58_sikoko', TRUE);
    $SQL1 ="
    SELECT nama, nip
    FROM sipadu_dosen
    WHERE email = '".$email."'
    ";
    $Q = $db_jarlap->query($SQL1);
    return $Q->result_array();
    $Q->free_result();
}
public function cekkode($nim,$kode){
    $db_jarlap = $this->load->database('pkl_sipadu_real', TRUE);
    return $db_jarlap->get_where('mahasiswa', array('nim' => $nim,'kodeLupaPass' => $kode))->num_rows();
}

public function change_monitoring_status($nim, $status) {
 $data = array(
    'status_monitoring' => $status,
);
 $where = array('nim' => $nim);
 $this->db->where($where);
 $this->db->replace('sipadu_mahasiswa', $data);
}

}
