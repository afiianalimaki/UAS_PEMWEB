<?php

class Kimiaxii_model{
    private $table = 'kimiaxii';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllKimiaxii()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getKimiaxiiById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataKimiaxii($data)
    {
      $query = "INSERT INTO kimiaxii 
                VALUES 
              ('', :namaMateri, :penjelasan)";
      $this->db->query($query);
      $this->db->bind('namaMateri', $data['namaMateri']);
      $this->db->bind('penjelasan', $data['penjelasan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataKimiaxii($id)
    {
      $query = "DELETE FROM kimiaxii WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
