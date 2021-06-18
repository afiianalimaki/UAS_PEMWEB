<?php

class Guru_model{
    private $table = 'dataguru';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllGuru()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getGuruById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataGuru($data)
    {
      $query = "INSERT INTO dataguru 
                VALUES 
              ('', :namaGuru, :NIG, :jenisKelamin)";
      $this->db->query($query);
      $this->db->bind('namaGuru', $data['namaGuru']);
      $this->db->bind('NIG', $data['NIG']);
      $this->db->bind('jenisKelamin', $data['jenisKelamin']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataGuru($id)
    {
      $query = "DELETE FROM dataguru WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
