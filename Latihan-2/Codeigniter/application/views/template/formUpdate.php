<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Data</h1>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="modal-body">
        <?php foreach ($produk as $brg) { ?>
          <form method="POST" action="<?php echo base_url() . 'C_barang/update'; ?>">
            <div class="form-group">
              <label>Kode</label>
              <input type="text" class="form-control" name="code" value="<?php echo $brg->kode; ?>">

              <label>Nama Barang</label>
              <input type="text" class="form-control" name="barang" value="<?php echo $brg->nama_barang; ?>">


              <label for="">Satuan</label>
              <select class="form-control" name="satuan" placeholder="-Satuan-" value="<?php echo $brg->satuan; ?>">
                <option value="Satuan">Satuan</option>
                <option value="Unit">Unit</option>
                <option value="Pasang">Pasang</option>
                <option value="Set">Set</option>
              </select>
              <!-- <input type="text" class="form-control" name="satuan" value="<?php echo $brg->satuan; ?>"> -->

              <label for="">Jumlah</label>
              <input type="text" class="form-control" name="jumlah" value="<?php echo $brg->jumlah; ?>">


              <label>Harga</label>
              <input type="text" class="form-control" name="harga" value="<?php echo $brg->harga; ?>">
            </div>

            <div class="modal-footer">
              <?php echo anchor('C_barang/index', '<div class="btn btn-danger" data-dismiss="modal">Close</div>') ?>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        <?php } ?>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
</div>
<!-- /.content-wrapper-->