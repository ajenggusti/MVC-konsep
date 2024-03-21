<?php
class mahasiswa extends controller{
    public function index(){
        $data['judulpage'] = "Halaman Mahasiswa";
        $data['mhs'] = $this->model('mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judulpage'] = "Halaman Detail Mahasiswa";
        $data['plis']= "klkl";
        $data['mhs'] = $this->model('mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
    public function tambahDataMhs(){
        // var_dump($_POST);
        if($this->model('mahasiswa_model')->insertDataMhs($_POST) > 0){
            flasher::setFlash('Berhasil', ' Ditambahkan', 'success');
            header("Location: ". BASEURL . "/mahasiswa");
            exit;
        }else{
            flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header("Location: ". BASEURL."/mahasiswa");
        }
    }
    public function hapusDataMhs($id){
        if($this->model('mahasiswa_model')->hapusDataMhs($id) > 0){
            flasher::setFlash('Berhasil', ' Dihapus', 'success');
            header("Location: ". BASEURL . "/mahasiswa");
            exit;
        }else{
            flasher::setFlash('Gagal', ' dihapus', 'danger');
            header("Location: ". BASEURL."/mahasiswa");
        }
    }
    public function editDataMhs(){
        
    }
}