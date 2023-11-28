<?php

class home_model
{
    private $table = 'row2';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    function getAllData()
    {
        $this->db->query("SELECT row2.id, img, row2.name, row2.address, lp, np, city.name AS cityName FROM " . $this->table . " JOIN city ON row2.cityID = city.id");
        return $this->db->result_set();
    }

    function detail($id)
    {
        $this->db->query("SELECT row2.name, row2.address, np, map, about, data_img.img1, data_img.img2, data_img.img3, data_img.img4, data_img.img5  FROM " . $this->table . " JOIN data_img ON data_img.row2id = row2.id WHERE row2.id = :id");
        $this->db->bind('id', $id);
        return $this->db->result_single();
    }
}
