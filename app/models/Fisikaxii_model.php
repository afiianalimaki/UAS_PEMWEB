<?php

class Fisikaxii_model{
    private $table = 'fisikaxii';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllFisikaxii()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getFisikaxiiById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataFisikaxii($data)
    {
      $query = "INSERT INTO fisikaxii 
                VALUES 
              ('', :namaMateri, :penjelasan)";
      $this->db->query($query);
      $this->db->bind('namaMateri', $data['namaMateri']);
      $this->db->bind('penjelasan', $data['penjelasan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataFisikaxii($id)
    {
      $query = "DELETE FROM fisikaxii WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
