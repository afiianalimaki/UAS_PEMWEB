<?php

class Biologixi_model{
    private $table = 'biologixi';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllBiologixi()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getBiologixiById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataBiologixi($data)
    {
      $query = "INSERT INTO biologixi 
                VALUES 
              ('', :namaMateri, :penjelasan)";
      $this->db->query($query);
      $this->db->bind('namaMateri', $data['namaMateri']);
      $this->db->bind('penjelasan', $data['penjelasan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataBiologixi($id)
    {
      $query = "DELETE FROM biologixi WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
