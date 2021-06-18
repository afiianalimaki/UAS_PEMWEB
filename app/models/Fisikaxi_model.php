<?php

class Fisikaxi_model{
    private $table = 'fisikaxi';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllFisikaxi()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getFisikaxiById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataFisikaxi($data)
    {
      $query = "INSERT INTO fisikaxi 
                VALUES 
              ('', :namaMateri, :penjelasan)";
      $this->db->query($query);
      $this->db->bind('namaMateri', $data['namaMateri']);
      $this->db->bind('penjelasan', $data['penjelasan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataFisikaxi($id)
    {
      $query = "DELETE FROM fisikaxi WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
