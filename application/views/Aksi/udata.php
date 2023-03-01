<div class="container mt-5">
  <div class="row">
    <form class="forms-sample" method="post" action="<?php echo base_url('aksi/fungsiUbah') ?>" enctype="multipart/form-data">
        <div class="row">
          <div class="form-group mt-3 col-sm-6">
            <label>Nama Produk</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Produk" name="nama_produk" value="<?php echo $queryAlldetail->nama_produk ?>">
          </div>
          <div class="form-group mt-3 col-sm-6">
            <label>keterangan</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="keterangan" name="keterangan" value="<?php echo $queryAlldetail->keterangan ?>">
          </div>
          <div class="form-group mt-3 col-sm-6">
            <label>Harga</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="harga" name="harga" value="<?php echo $queryAlldetail->harga ?>">
          </div>
          <div class="form-group mt-3 col-sm-6">
            <label>Jumlah</label>
            <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Jumlah" name="jumlah" value="<?php echo $queryAlldetail->jumlah ?>">
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary mr-2 mt-3"><a style="color:white; text-decoration: none;">Ubah</a> </button>
        <button class="btn btn-light mt-3"><a href="<?php echo base_url('') ?>" style="color:black; text-decoration: none;">Batal</a></button>
      </form>
  </div>
</div>