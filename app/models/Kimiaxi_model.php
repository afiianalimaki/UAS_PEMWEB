<?php

class Kimiaxi_model{
    private $table = 'kimiaxi';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllKimiaxi()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getKimiaxiById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataKimiaxi($data)
    {
      $query = "INSERT INTO kimiaxi 
                VALUES 
              ('', :namaMateri, :penjelasan)";
      $this->db->query($query);
      $this->db->bind('namaMateri', $data['namaMateri']);
      $this->db->bind('penjelasan', $data['penjelasan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataKimiaxi($id)
    {
      $query = "DELETE FROM kimiaxi WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
