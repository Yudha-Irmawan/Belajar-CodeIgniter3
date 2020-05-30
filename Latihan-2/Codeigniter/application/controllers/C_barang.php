<?php
class C_barang extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_barang');
        $data['produk'] = $this->M_barang->get_produk();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/dashboard', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $kode = $this->input->POST('code');
        $barang = $this->input->POST('barang');
        $satuan = $this->input->POST('satuan');
        $jumlah = $this->input->POST('jumlah');
        $harga = $this->input->POST('harga');

        $data = array(
            'kode'          => $kode,
            'nama_barang'   => $barang,
            'satuan'        => $satuan,
            'jumlah'        => $jumlah,
            'harga'         => $harga
        );

        $this->load->model('M_barang');
        $this->M_barang->add_data($data, 'tb_barang');
        redirect('C_barang/index');
    }

    public function delete($kode)
    {
        $data = array(
            'kode' => $kode
        );
        $this->load->model('M_barang');
        $this->M_barang->delete_data($data, 'tb_barang');
        redirect('C_barang/index');
    }

    public function edit($kode)
    {
        $kunci = array(
            'kode' => $kode
        );
        $this->load->model('M_barang');
        $data['produk'] = $this->M_barang->edit_data($kunci, 'tb_barang')->result();

        $this->load->view('template/formUpdate', $data);
    }


    public function update()
    {
        $kode = $this->input->POST('code');
        $nama = $this->input->POST('barang');
        $satuan = $this->input->POST('satuan');
        $jumlah = $this->input->POST('jumlah');
        $harga = $this->input->POST('harga');

        $data = array(
            'kode'            => $kode,
            'nama_barang'     => $nama,
            'satuan'          => $satuan,
            'jumlah'          => $jumlah,
            'harga'           => $harga
        );
        $kunci = array('kode' => $kode);
        $this->load->model('M_barang');
        $this->M_barang->update_data($kunci, $data, 'tb_barang');
        redirect('C_barang/index');
    }
}
