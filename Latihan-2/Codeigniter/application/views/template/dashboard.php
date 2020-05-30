<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                + Tambah
            </button><br><br>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>jumlah</th>
                    <th>Harga</th>
                    <th colspan="2">Aksi</th>
                </tr>

                <?php
                $no = 1;
                foreach ($produk as $pack) : ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pack['kode']; ?></td>
                        <td><?= $pack['nama_barang']; ?></td>
                        <td><?= $pack['satuan']; ?></td>
                        <td><?= $pack['jumlah']; ?></td>
                        <td><?= $pack['harga']; ?></td>
                        <td onclick="javasript : return confirm('Yakin ingin dihapus?')"><?= anchor('C_barang/delete/' . $pack['kode'], '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
                        <td>
                            <div><?= anchor('C_barang/edit/' . $pack['kode'], '<div class="btn btn-success"><i class="fa fa-edit"></i></div>'); ?></div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url() . 'C_barang/add'; ?>">
                                <div class="form-group">
                                    <label for="">Kode</label>
                                    <input type="text" class="form-control" name="code" placeholder="Masukan Code">

                                    <label for="">Nama Barang</label>
                                    <input type="text" class="form-control" name="barang" placeholder="Nama Barang">

                                    <label for="">Satuan</label>
                                    <input type="text" class="form-control" name="satuan" placeholder="Satuan Barang">

                                    <label for="">Jumlah</label>
                                    <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Barang">

                                    <label for="">Harga</label>
                                    <input type="text" class="form-control" name="harga" placeholder="Harga Barang">
                                </div>

                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->