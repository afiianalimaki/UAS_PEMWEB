<?php

class Kimiax_model{
    private $table = 'kimiax';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllKimiax()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getKimiaxById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataKimiax($data)
    {
      $query = "INSERT INTO kimiax 
                VALUES 
              ('', :namaMateri, :penjelasan)";
      $this->db->query($query);
      $this->db->bind('namaMateri', $data['namaMateri']);
      $this->db->bind('penjelasan', $data['penjelasan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataKimiax($id)
    {
      $query = "DELETE FROM kimiax WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
