<?php

class Fisikax_model{
    private $table = 'fisikax';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllFisikax()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getFisikaxById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataFisikax($data)
    {
      $query = "INSERT INTO fisikax 
                VALUES 
              ('', :namaMateri, :penjelasan)";
      $this->db->query($query);
      $this->db->bind('namaMateri', $data['namaMateri']);
      $this->db->bind('penjelasan', $data['penjelasan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataFisikax($id)
    {
      $query = "DELETE FROM fisikax WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
