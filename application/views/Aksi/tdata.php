<div class="container mt-5">
  <div class="row">
    <form class="forms-sample" method="post" action="<?php echo base_url('aksi/fungsiTambah') ?>" enctype="multipart/form-data">
        <div class="row">
          <div class="form-group mt-3 col-md-6 col-sm-12  col-xs-12">
            <label>Nama Produk</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Produk" name="nama_produk">
          </div>
          <div class="form-group mt-3 col-md-6 col-sm-12  col-xs-12">
            <label>keterangan</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="keterangan" name="keterangan">
          </div>
          <div class="form-group mt-3 col-md-6 col-sm-12  col-xs-12">
            <label>Harga</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="harga" name="harga">
          </div>
          <div class="form-group mt-3 col-md-6 col-sm-12  col-xs-12">
            <label>Jumlah</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Jumlah" name="jumlah">
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary mr-2 mt-3"><a style="color:white; text-decoration: none;">Tambah</a> </button>
        <button class="btn btn-light mt-3"><a href="<?php echo base_url('/') ?>" style="color:black; text-decoration: none;">Batal</a></button>
      </form>
  </div>
</div>