<html>

<head>
  <title>Ini adalah laporan barangku</title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="modal-dialog" role="document" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php foreach ($produk as $brg) { ?>
          <form method="POST" action="<?php echo base_url() . 'C_barang/update'; ?>">
            <div class="form-group">
              <label>Kode</label>
              <input type="text" class="form-control" name="code" value="<?php echo $brg->kode; ?>">

              <label>Nama Barang</label>
              <input type="text" class="form-control" name="barang" value="<?php echo $brg->nama_barang; ?>">

              <label for="">Satuan</label>
              <input type="text" class="form-control" name="satuan" value="<?php echo $brg->satuan; ?>">

              <label for="">Jumlah</label>
              <input type="text" class="form-control" name="jumlah" value="<?php echo $brg->jumlah; ?>">


              <label>Harga</label>
              <input type="text" class="form-control" name="harga" value="<?php echo $brg->harga; ?>">
            </div>

            <div class="modal-footer">
              <?php echo anchor('C_barang/index', '<div class="btn btn-danger" data-dismiss="modal">Close</div>') ?>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
      </div>
    </div>
    </form>
  <?php } ?>
  </div>
  </div>
  </div>
</body>

</html>