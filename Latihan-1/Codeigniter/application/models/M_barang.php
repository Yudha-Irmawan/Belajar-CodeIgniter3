<?php
class M_barang extends CI_Model
{
    public function get_produk()
    {
        return $this->db->get('db_barang')->result_array();
    }

    public function tambah_data($table, $data)
    {
        $this->db->insert($data, $table);
    }

    public function delete_data($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function edit_data($data, $table)
    {
        return $this->db->get($table, $data);
    }
}
