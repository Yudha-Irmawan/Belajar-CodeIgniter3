<?php
class M_barang extends CI_Model
{
    public function get_produk()
    {
        return $this->db->get('tb_barang')->result_array();
    }

    public function add_data($table, $data)
    {
        $this->db->insert($data, $table);
    }

    public function delete_data($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function edit_data($table, $data)
    {
        return $this->db->get_where($data, $table);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
