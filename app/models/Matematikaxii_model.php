<?php

class Matematikaxii_model{
    private $table = 'matematikaxii';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllMatematikaxii()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getMatematikaxiiById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataMatematikaxii($data)
    {
      $query = "INSERT INTO matematikaxii 
                VALUES 
              ('', :namaMateri, :penjelasan )";
      $this->db->query($query);
      $this->db->bind('namaMateri', $data['namaMateri']);
      $this->db->bind('penjelasan', $data['penjelasan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataMatematikaxii($id)
    {
      $query = "DELETE FROM matematikaxii WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
