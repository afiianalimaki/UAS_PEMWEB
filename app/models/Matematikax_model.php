<?php

class Matematikax_model{
    private $table = 'matematikax';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllMatematikax()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getMatematikaxById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataMatematikax($data)
    {
      $query = "INSERT INTO matematikax 
                VALUES 
              ('', :namaMateri, :penjelasan )";
      $this->db->query($query);
      $this->db->bind('namaMateri', $data['namaMateri']);
      $this->db->bind('penjelasan', $data['penjelasan']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataMatematikax($id)
    {
      $query = "DELETE FROM matematikax WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
