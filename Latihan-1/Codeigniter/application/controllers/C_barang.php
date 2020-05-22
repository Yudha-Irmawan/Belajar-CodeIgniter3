<?php
class C_barang extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_barang');
        $data['produk'] = $this->M_barang->get_produk();

        $this->load->view('template/dashboard', $data);
    }

    public function tambah_aksi()
    {
        $kode = $this->input->POST('code');
        $barang = $this->input->POST('barang');
        $harga = $this->input->POST('harga');

        $data = array(
            'kode'          => $kode,
            'nama_barang'   => $barang,
            'harga'         => $harga
        );

        $this->load->model('M_barang');
        $this->M_barang->tambah_data($data, 'db_barang');
        redirect('C_barang/index');
    }

    public function delete($kode)
    {
        $data = array(
            'kode' => $kode
        );
        $this->load->model('M_barang');
        $this->M_barang->delete_data($data, 'db_barang');
        redirect('C_barang/index');
    }

    public function edit($kode)
    {
        $kunci = array(
            'kode' => $kode
        );
        $this->load->model('M_barang');
        $data['produk'] = $this->M_barang->edit_data($kunci, 'db_barang')->result();

        $this->load->view('template/formUpdate', $data);
    }


    public function update()
    {
        $kode = $this->input->POST('code');
        $nama = $this->input->POST('barang');
        $harga = $this->input->POST('harga');

        $data = array(
            'kode'            => $kode,
            'nama_barang'     => $nama,
            'harga'           => $harga
        );
        $kunci = array('kode' => $kode);
        $this->load->model('M_barang');
        $this->M_barang->ubah_data($kunci, $data, 'db_barang');
        redirect('C_barang/index');
    }
}
