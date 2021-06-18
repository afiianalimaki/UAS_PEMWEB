<?php

class Matematikaxi_model{
    private $table = 'matematikaxi';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllMatematikaxi()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getMatematikaxiById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataMatematikaxi($data)
    {
      $query = "INSERT INTO matematikaxi 
                VALUES 
              ('', :namaMateri, :penjelasan )";
      $this->db->query($query);
      $this->db->bind('namaMateri', $data['namaMateri']);
      $this->db->bind('penjelasan', $data['penjelasan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataMatematikaxi($id)
    {
      $query = "DELETE FROM matematikaxi WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
