<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->model('mahasiswa_model');

        if($this->session->nim!=NULL){
            redirect('Pkl');
        } else {
            $this->load->view('login');
        }
    }

    public function verification() {
        $this->load->helper(array('form', 'url'));
        $this->load->model('mahasiswa_model');
        $this->load->library('session');
        $nim = $this->input->post('nim');
        $password = $this->input->post('password');
        $verifikasi = $this->mahasiswa_model->verifikasi($nim, $password);
        
        if ($verifikasi==1) {
            $sekre = $this->mahasiswa_model->cek_sekre($nim);
            $this->session->set_userdata('nim',$nim);
            $this->session->unset_userdata('nama');
            $this->session->unset_userdata('email');
            $this->session->set_userdata('sekre',$sekre[0]['level']);
            $this->session->set_userdata('nama',$sekre[0]['nama']);
//            $this->session->set_userdata('email',$sekre[0]['email']);
//            $this->session->set_userdata('id_modul',$sekre[0]['id_modul']);
//            $this->session->set_userdata('id_seksi',$sekre[0]['id_seksi']);
//            $this->session->set_userdata('id_subseksi',$sekre[0]['id_subseksi']);
//            $this->session->set_userdata('narasumber',$sekre[0]['narasumber']);
//            $this->session->set_userdata('jabatan',$sekre[0]['jabatan']);
            redirect('Pkl');
        } else if($verifikasi ==2){
            $dosen = $this->mahasiswa_model->get_nip($email);            
            $this->session->set_userdata('email',$email);
            $this->session->set_userdata('nim',$dosen[0]['nip']);                
            redirect('Pkl');
        }else {
            redirect('login');
        }
    }

    public function forgot_password() {
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper(array('form', 'url'));
        $this->load->model('mahasiswa_model');
        $this->load->library('session');
        $nim = $this->input->post('nim');
        $this->session->set_userdata('nom',$nim);
            //$this->load->library('email');
            //$config['protocol']    = 'smtp';
            //$config['smtp_host']    = 'tls://smtp.gmail.com';
            //$config['smtp_host'] = 'mx1.idhostinger.com.';
            //$config['smtp_host'] = 'smtp.elasticemail.com';
            //smtp25.elasticemail.com
            //$config['smtp_port'] = '25';
            //$config['smtp_port'] = '2525';
            //$config['smtp_port']    = '465';
            //$config['smtp_timeout'] = '7';
            //$config['smtp_user']    = 'sipadupkl56@gmail.com';
            //$config['smtp_user'] = 'resetpassword@sipadu-pkl56.hol.es';
            //$config['smtp_pass']    = 'pkl56yes';
            //$config['charset']    = 'iso-8859-1';
            //$config['smtp_secure'] = "tls";
            //$config['crlf'] = "\r\n";
            //$config['newline']    = "\r\n";
            //$config['mailtype'] = 'html'; // or html
            //$config['validation'] = TRUE; // bool whether to validate email or not

            //$this->email->initialize($config);

        $characters = '123456789zxcvbnmasdfghjkqwertyuipZXCVBNMASDFGHJKLQWERTYUP';
        $password_baru = '';
        for ($i = 0; $i<8; $i++) {
            $password_baru .=$characters[rand(0, strlen($characters)-1)];
        }

        $text ='<html><h4>Password untuk akun SIPADU PKL 56 dengan username '.$nim.' akan direset.</h4>
        <br/>
        <p>Kode verifikasi reset password untuk akun '.$nim.' adalah '.$password_baru.' <br/>
        Jika anda ingin mereset password akun SIPADU PKL 56 anda, masukkan kode di atas pada link <a href="http://pkl.stis.ac.id/monitoring/index.php/Login/resetpassword">berikut.</a><br/>
        Setelah melakukan verifikasi kode di atas menjadi password sementara Anda. Anda dapat login dengan password menggunakan kode di atas. Anda dapat mengubah kembali password Anda di menu Profil.</p>
        </html>';

            //$this->email->from('sipadupkl56@gmail.com', 'SIPADU PKL 56');
            //$this->email->from('resetpassword@sipadu-pkl56.hol.es', 'SIPADU PKL 56');
            //$this->email->to(implode(',', $recipients));
            //$this->email->to($nim.'@stis.ac.id');
            //$this->email->subject('Reset password akun SIPADU PKL 56');
            //$this->email->message($text);
            //$this->email->send();

        $this->load->library('Phpmailer');

        $mail = new Phpmailer;
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPSecure = 'tls';
        $mail->Port = "587";
        $mail->Username = "sipadupkl56@gmail.com";
        $mail->Password = "pkl56yes";
        $mail->SetFrom('sipadupkl56@gmail.com', 'SIPADU PKL 56');

        $mail->addAddress($nim."@stis.ac.id");
        $mail->isHTML(true);
        $mail->Subject = "Reset Password akun SIPADU PKL 56";
        $mail->Body = $text;

        if(!$mail->send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
            redirect('Login');
        }
        else
        {
            $this->mahasiswa_model->savekode($nim,$password_baru);
            $this->load->view('template/LogPageHead');
            $this->load->view('kode_verifikasi');
        }
    }

    public function resetpassword() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->model('mahasiswa_model');
        $this->load->view('template/LogPageHead');
        $this->load->view('kode_verifikasi');

    }

    public function resetpass() {
        $this->load->helper(array('form', 'url'));
        $this->load->model('mahasiswa_model');
        $this->load->library('session');
        $nom = $this->session->userdata('nom');
        $kode = $this->input->post('kode');
        $cek = $this->mahasiswa_model->cekkode($nom,$kode);
        if ($cek==1) {
            $this->mahasiswa_model->update_password($nom,$kode);
            $this->load->view('template/LogPageHead');
            $this->load->view('popmessage');
        } else {
            echo print_r($nom);
                // $this->load->view('template/LogPageHead');
                // $this->load->view('kode_verifikasi');
            redirect('Login/resetpassword');
        }
    }

}
?>
