<?php

class cms_model
{
    private $table = 'row3';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // function getData()
    // {
    //     $this->db->query("SELECT * FROM " . $this->table);
    //     return $this->db->result_set();
    // }

    function getData($page = 1)
    {
        $itemsPerPage = 10;
        $offset = ($page - 1) * $itemsPerPage;

        $query = "SELECT * FROM " . $this->table . " LIMIT :limit OFFSET :offset";
        $this->db->query($query);
        $this->db->bind(':limit', $itemsPerPage, PDO::PARAM_INT);
        $this->db->bind(':offset', $offset, PDO::PARAM_INT);

        return $this->db->result_set();
    }

    function hapus($data)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
