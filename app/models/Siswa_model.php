<?php

class Siswa_model{
    private $table = 'dataSiswa';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllSiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getSiswaById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataSiswa($data)
    {
      $query = "INSERT INTO dataSiswa 
                VALUES 
              ('', :namaSiswa, :NIS, :jenisKelamin, :tanggalLahir, :alamatRumah)";
      $this->db->query($query);
      $this->db->bind('namaSiswa', $data['namaSiswa']);
      $this->db->bind('NIS', $data['NIS']);
      $this->db->bind('jenisKelamin', $data['jenisKelamin']);
      $this->db->bind('tanggalLahir', $data['tanggalLahir']);
      $this->db->bind('alamatRumah', $data['alamatRumah']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataSiswa($id)
    {
      $query = "DELETE FROM dataSiswa WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
