<?php
class mahasiswa_model
{
    private $tabel = 'mahasiswa';
    private $db;
    public function __construct()
    {
        $this->db = new database();
    }
    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function insertDataMhs($data)
    {
        $query = "INSERT INTO " . $this->tabel . " VALUES " . "('',:nama, :nrp, :email, :prodi)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusDataMhs($id){
        $query = "DELETE FROM ".$this->tabel." WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
