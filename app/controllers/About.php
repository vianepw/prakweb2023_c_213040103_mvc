<?php

class About extends Controller {

    public function index($nama = "Viane Pindhi Wardiyane", $pekerjaan = "mahasiswa", $umur = 21) {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    
    public function page() {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}

?>