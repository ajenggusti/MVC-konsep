<?php
class About extends Controller{
    public function index($judulpage="Halaman about",$nama = "Ajeng", $profesi ="Mahasiswi", $umur=20){
        $data["judulpage"]= $judulpage;
        $data["nama"] = $nama;
        $data["profesi"]=$profesi;
        $data["umur"] = $umur;
        $this->view('templates/header',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer',$data);
    }
    public function page($judulpage="Halaman page"){
        $data['judulpage']=$judulpage;
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}