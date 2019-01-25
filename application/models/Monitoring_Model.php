<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring_Model extends CI_Model
{
    public function get_daftar_unit_ksa()
	{
        $data =$this->db->query("SELECT g.*, u.*, d.nama_desa, k.nama_kec, t.nama_kab, nama_strata, nama_status, 
                                    nama_fase FROM subsegmen u, segmen g, desa d, kecamatan k, kabkota t, 
                                    fase_tanam f, status_segmen e, strata r
                                    WHERE u.id_segmen=g.id_segmen AND g.id_desa = d.id_desa AND d.id_kec = k.id_kec 
                                    AND k.id_kab = t.id_kab AND u.id_fase=f.id_fase AND e.id_status = g.id_status AND 
                                    r.id_strata= g.id_strata ;");
        if ($data->num_rows()) {
            return $data->result_array();
        }
        return FALSE;
    }
    
    public function get_dataSegmen($id_segmen){
        $data = $this->db->query("SELECT DISTINCT g.*, nama_strata ,nama_desa, nama_kec, nama_kab, nama_status
                                    FROM segmen g,desa d,kecamatan k,kabkota t, status_segmen c, 
                                    strata s WHERE id_segmen='".$id_segmen."' AND g.id_desa = d.id_desa AND 
                                    d.id_kec = k.id_kec AND k.id_kab = t.id_kab AND g.id_strata = s.id_strata AND 
                                    g.id_status = c.id_status AND s.id_strata= g.id_strata;" );
        $list = $this->db->query("SELECT id_subsegmen FROM subsegmen WHERE id_segmen =".$id_segmen.";");
        $list_idSubsegmen = $list->result_array();      
        $count = 0;
        for($i=0; $i<count($list_idSubsegmen) ;$i++){
            $id_subsegmen = $list_idSubsegmen[$i]['id_subsegmen'];
            $id_foto_data = $this->db->query("SELECT MAX(id_foto) as idfoto FROM foto_amatan WHERE 
                                            id_subsegmen=".$id_subsegmen." AND status_foto=1;");
            $id_foto = $id_foto_data->row()->idfoto;
            if($id_foto!=NULL){
            $hasil = $this->db->query("SELECT status_foto FROM foto_amatan WHERE id_foto = '".$id_foto."';");
                if($hasil->result_array()[0]['status_foto'] > 0){
                    $count++;
                }
            }
        }
        $temp = $count; 
        $temp2 = "";
        if($count == 9){
            $temp2="Sudah Selesai";
        }else{
            $temp2="Belum Selesai";
        }
        if ($data->num_rows()) {
            $row = $data->row();
            $row->progress = $temp;
            $row->status_segmen = $temp2;
            return $row; 
        }
        return FALSE;
    }

    public function get_allsegmenaktif(){
        $data = $this->db->query("SELECT id_segmen FROM segmen WHERE id_status=1;");
        if ($data->num_rows()) {
            return $data->result_array();
        }
        return FALSE;
    }

    public function get_desaaktif(){
       $desa= $this->db->query("SELECT DISTINCT s.id_desa, nama_desa FROM segmen s, desa d WHERE
        s.id_desa = d.id_desa ;");
        if ($desa->num_rows()) {
            return $desa->result_array();
        }
        return FALSE;
    }

    public function get_segmendesaaktif($id_desa){
        $segmen = $this->db->query("SELECT DISTINCT id_segmen FROM segmen WHERE id_desa = '".$id_desa."';");                            
        if ($segmen->num_rows()) {
            return $segmen->result_array();
        }
        return FALSE;
    }

    public function get_kecamatanaktif(){
        $desa= $this->db->query("SELECT DISTINCT d.id_kec , nama_kec FROM desa d, segmen g, kecamatan k WHERE 
                                d.id_kec=k.id_kec AND d.id_desa=g.id_desa ;");
         if ($desa->num_rows()) {
             return $desa->result_array();
         }
         return FALSE;
    }

    public function get_segmenkecamatanaktif($id_kec){
        $segmen = $this->db->query("SELECT DISTINCT id_segmen FROM segmen g, desa d WHERE g.id_desa = d.id_desa 
                                     AND d.id_kec= '".$id_kec."';" );                            
        if ($segmen->num_rows()) {
            return $segmen->result_array();
        }
        return FALSE;
    }

    public function get_kabupatenaktif(){
        $kab= $this->db->query("SELECT DISTINCT k.id_kab , nama_kab FROM desa d, segmen g, kecamatan k , kabkota t WHERE 
                                d.id_kec=k.id_kec AND d.id_desa=g.id_desa AND k.id_kab = t.id_kab ;");
         if ($kab->num_rows()) {
             return $kab->result_array();
         }
         return FALSE;
    }

    public function get_segmenkabupatenaktif($id_kab){
        $segmen = $this->db->query("SELECT DISTINCT id_segmen FROM segmen g, desa d, kecamatan k WHERE g.id_desa = d.id_desa 
                                    AND d.id_kec= k.id_kec AND  k.id_kab='".$id_kab."';");                            
        if ($segmen->num_rows()) {
            return $segmen->result_array();
        }
        return FALSE;
    }

    public function get_segmenditerima($id_segmen){
        $list = $this->db->query("SELECT id_subsegmen FROM subsegmen WHERE id_segmen ='.$id_segmen.';");
        $list_idSubsegmen = $list->result_array();      
        $count = 0;
        for($i=0; $i<count($list_idSubsegmen) ;$i++){
            $id_subsegmen = $list_idSubsegmen[$i]['id_subsegmen'];
            $id_foto_data = $this->db->query("SELECT MAX(id_foto) as idfoto FROM foto_amatan WHERE 
                                            id_subsegmen=".$id_subsegmen." AND status_foto=1;");
            $id_foto = $id_foto_data->row()->idfoto;
            if($id_foto!=NULL){
            $hasil = $this->db->query("SELECT status_foto FROM foto_amatan WHERE id_foto = '".$id_foto."';");
                if($hasil->result_array()[0]['status_foto'] > 0){
                    $count++;
                }
            }
        }
        $temp = $count; 
        if ($count > 8){
            $selesai = 1;
        }else{
            $selesai = 0;
        }  
        if ($selesai) {
            return $selesai;
        }
        return FALSE;
    }

    public function get_totalsubsegmenditerima($id_subsegmen){   
            $count=0;
            $id_foto_data = $this->db->query("SELECT MAX(id_foto) as idfoto FROM foto_amatan WHERE 
                                            id_subsegmen='".$id_subsegmen."' AND status_foto=1;");
            $id_foto = $id_foto_data->row()->idfoto;
            if($id_foto!=NULL){
            $hasil = $this->db->query("SELECT status_foto FROM foto_amatan WHERE id_foto = '".$id_foto."';");
                if($hasil->result_array()[0]['status_foto'] > 0){
                    $count++;
                }
        	}
        	return $count;
    }

    public function get_subsegmen($id_segmen){
        $id_subsegmen= $this->db->query("SELECT id_subsegmen FROM subsegmen WHERE id_segmen = '".$id_segmen."' ;");
        if ($id_subsegmen) {
            return $id_subsegmen->result_array();
        }
        return FALSE; 
    }

    public function get_fase_sub($id_subsegmen){
        $fase= $this->db->query("SELECT id_fase FROM subsegmen WHERE id_subsegmen='".$id_subsegmen."';");
        return $fase->row()->id_fase;
    }

    public function get_strata_seg($id_segmen){
        $strata= $this->db->query("SELECT id_strata FROM segmen WHERE id_segmen='".$id_segmen."';");
        return $strata->row()->id_strata;
    }

    public function get_nim_pcl(){
        $pcl = $this->db->query("SELECT DISTINCT nim_pcl, nama FROM segmen g, user u WHERE g.nim_pcl = u.nim ;");
        if($pcl->num_rows()){
            return $pcl->result_array();
        }
        return false;
    }

    public function get_segmen_by_nim($nim_pcl){
        $id_segmen = $this->db->query("SELECT id_segmen FROM segmen WHERE nim_pcl = '".$nim_pcl."' ;");
        if($id_segmen->num_rows()){
            return $id_segmen->result_array();
        }
        return false;
    }

    public function get_dataSegmenkab($id_kab){
        $data = $this->db->query("SELECT DISTINCT b.id_kab, b.nama_kab FROM kabkota b,
                                     desa d, kecamatan c, segmen s, subsegmen g WHERE s.id_desa = d.id_desa AND
                                     d.id_kec = c.id_kec AND c.id_kab = b.id_kab AND b.id_kab='".$id_kab."';");
        $data2 = $this->db->query("SELECT DISTINCT ( SELECT COUNT(s.id_segmen) FROM segmen s, desa d, kecamatan c,
                                     kabkota b  WHERE s.id_desa = d.id_desa AND d.id_kec = c.id_kec AND c.id_kab =
                                     b.id_kab AND b.id_kab='".$id_kab."') AS jumlah_segmen FROM kabkota b, desa d, 
                                     kecamatan c, segmen s, subsegmen g WHERE s.id_desa = d.id_desa AND d.id_kec =
                                     c.id_kec AND c.id_kab = b.id_kab;");
        $dataSub = $this->db->query("SELECT DISTINCT ( SELECT COUNT(g.id_subsegmen) FROM subsegmen g, segmen s, desa d, kecamatan c,
                                     kabkota b  WHERE g.id_segmen=s.id_segmen AND s.id_desa = d.id_desa AND  d.id_kec = c.id_kec AND c.id_kab =
                                     b.id_kab AND b.id_kab='".$id_kab."') AS jumlah_subsegmen FROM kabkota b, desa d, 
                                     kecamatan c, segmen s, subsegmen g WHERE s.id_desa = d.id_desa AND d.id_kec =
                                     c.id_kec AND c.id_kab = b.id_kab;");
        $data3 = $this->db->query("SELECT DISTINCT s.id_segmen FROM kabkota b,
                                     desa d, kecamatan c, segmen s, subsegmen g WHERE s.id_desa = d.id_desa AND
                                     d.id_kec = c.id_kec AND b.id_kab='".$id_kab."' AND c.id_kab = b.id_kab;");
        

        ##mengambil strata  
        $temp3 = $data2->result_array()[0]['jumlah_segmen'];
        $temp4 = $dataSub->result_array()[0]['jumlah_subsegmen'];
        $temp2 = 0;
        $temo2 = 0;
        $temn2 = 0;

        for($i=0; $i<$temp3; $i++){
        
            $data4 = $this->db->query("SELECT DISTINCT id_subsegmen FROM subsegmen WHERE id_segmen='".$data3->result_array()[$i]['id_segmen']."';");
            $data5 = $this->db->query("SELECT (SELECT COUNT(id_subsegmen) FROM subsegmen WHERE id_segmen='".$data3->result_array()[$i]['id_segmen']."') AS jumlah_subsegmen_part;");
            $jumsub = $data5->result_array()[0]['jumlah_subsegmen_part'];

            for($is=0; $is<$jumsub; $is++){
                $count2 = $this->db->query("SELECT COUNT(status_foto) FROM (SELECT status_foto,id_subsegmen,id_foto FROM
                foto_amatan WHERE id_subsegmen='".$data4->result_array()[$is]['id_subsegmen']."' AND
                id_foto IN (SELECT MAX(id_foto) FROM (SELECT id_foto FROM foto_amatan WHERE id_subsegmen
                ='".$data4->result_array()[$is]['id_subsegmen']."') AS ID))
                AS status WHERE status_foto = 1 ORDER BY id_subsegmen ;");

                if($count2->result_array()[0]['COUNT(status_foto)'] == 1){
                    $temp2=$temp2+1;
                    $temn2=$temn2+1;
                }else{
                $temp2=$temp2;
                $temn2=$temn2;
                }
            }
            if($temp2 == 9){
                $temo2=$temo2+1;
            }else{
                $temo2=$temo2;
            }
        }

        
        if($temp3==0){
            $temp=0;
        }else{
        $temp=$temo2/$temp3;}

        if($temp4==0){
            $temp6=0;
        } else
        $temp6 = $temn2/$temp4;

     #mengambil fase

        if ($data->num_rows()) {
            $row = $data->row();
            $row->jumlah_segmen = $temp3;
            $row->jumlah_segmen_selesai = $temo2;
            $row->progress_segmen = $temp*100;
            $row->jumlah_subsegmen = $temp4;
            $row->jumlah_subsegmen_selesai = $temn2;
            $row->progress_subsegmen = $temp6*100;
            return $data->row_array(); 
        }
        return FALSE;
    }
  
    public function get_strata_kab($id_kab){
        $dataStrata = $this->db->query("SELECT sum(s.id_strata = 'S0') Bukan_sawah, sum(s.id_strata ='S1') 
                                    Sawah_irigasi, sum(s.id_strata = 'S2') Sawah_bukan_irigasi, sum(s.id_strata
                                    = 'S3') Tegalan FROM desa d,kabkota b, kecamatan c, segmen s WHERE s.id_desa =
                                    d.id_desa AND d.id_kec = c.id_kec AND c.id_kab =
                                    b.id_kab AND b.id_kab='".$id_kab."';");
        if ($dataStrata->num_rows()) {
            return $dataStrata->row_array(); 
        }
        return FALSE;
    }

    public function get_fase_kab($id_kab){
        $dataFase = $this->db->query("SELECT DISTINCT sum(a.id_fase = '1') vegetatif_1, sum(a.id_fase = '2')
                                vegetatif_2, sum(a.id_fase = '3') generatif, sum(a.id_fase = '4') panen, sum(a.id_fase
                                = '5') persiapan_lahan, sum(a.id_fase = '6') puso, sum(a.id_fase = '7') sawah_bukan_padi,
                                sum(a.id_fase = '8') bukan_sawah FROM desa d,kabkota b, kecamatan c, segmen s, subsegmen a
                                WHERE s.id_segmen=a.id_segmen AND s.id_desa = d.id_desa AND d.id_kec = c.id_kec AND c.id_kab =b.id_kab AND 
                                b.id_kab='".$id_kab."';") ;
        if ($dataFase->num_rows()) {
            return $dataFase->row_array();
        }
        return FALSE; 
    }
    
    public function get_datapcl($nim_pcl){
		$data = $this->db->query("SELECT s.nim_pcl, u.nama FROM segmen s, user u WHERE s.nim_pcl=u.nim AND s.nim_pcl='".$nim_pcl."';");
		$data2 = $this->db->query("SELECT count(id_segmen) AS jumlah_segmen FROM segmen WHERE nim_pcl='".$nim_pcl."';");

		$dat = $data2->result_array()[0]['jumlah_segmen'];

		$data3 = $this->db->query("SELECT DISTINCT id_segmen FROM segmen WHERE
                                    id_status=1 AND nim_pcl='".$nim_pcl."';");

        $dataSub = $this->db->query("SELECT count(g.id_subsegmen) AS jumlah_subsegmen FROM subsegmen g, segmen s WHERE s.nim_pcl ='".$nim_pcl."' AND s.id_segmen=g.id_segmen;");
        $countsub = $dataSub->result_array()[0]['jumlah_subsegmen'];
        
        $temp2=0;
		for($i=0; $i<$data2->result_array()[0]['jumlah_segmen']; $i++){

        $count2 = $this->db->query("SELECT COUNT(status_foto) FROM  
        (SELECT status_foto,id_subsegmen,id_foto FROM foto_amatan WHERE id_subsegmen IN (SELECT g.id_subsegmen
        FROM subsegmen g, segmen s WHERE s.id_segmen=g.id_segmen AND s.id_segmen =
        '".$data3->result_array()[$i]['id_segmen']."')) AS status WHERE status_foto = 1;");

         $dat2 = $count2->result_array()[0]['COUNT(status_foto)'];
         #get subsegmen
        if($dat2 == 9){
           $temp2=$temp2+1;
        }else{
           $temp2=$temp2;
        }
        }

        $temp5= 0;
        for($i=0; $i<$data2->result_array()[0]['jumlah_segmen']; $i++){

        $count3 = $this->db->query("SELECT COUNT(status_foto) FROM  
        (SELECT status_foto,id_subsegmen,id_foto FROM foto_amatan WHERE id_subsegmen IN (SELECT g.id_subsegmen
        FROM subsegmen g, segmen s, desa d, kecamatan c,kabkota b  WHERE s.id_segmen=g.id_segmen AND s.id_segmen =
        '".$data3->result_array()[$i]['id_segmen']."' AND s.id_desa = d.id_desa AND  d.id_kec = c.id_kec AND c.id_kab =
        b.id_kab)) AS status WHERE status_foto = 1;");

        if($count3->result_array()[0]['COUNT(status_foto)'] !=0){
           $temp5=$temp5+$count3->result_array()[0]['COUNT(status_foto)'];
        }else{
           $temp5=$temp5;
        }
        }
        if($dat==0){
        $temp=0;
        }else{
        $temp=$temp2/$dat;}

        if($countsub==0){
        $temp6=0;
        } else
        $temp6 = $temp5/$countsub;
		if ($data->num_rows()) {
            $row = $data->row();
            $row->jumlah_segmen = $dat;
            $row->progress_segmen = $temp*100;
            $row->jumlah_subsegmen = $countsub;
            $row->jumlah_subsegmen_selesai = $temp5;
            $row->progress_subsegmen = $temp6*100;
            return $data->row_array(); 
        }
        return FALSE;
	}

}
