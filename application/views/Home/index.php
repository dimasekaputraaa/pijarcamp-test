<div class="container">
    	<div class="row">
    		<div class="openig">
    			<div class="tagline mt-5">
    				<h5 style="text-align: center;">Selamat Datang Ditoko kami!</h5>
    			</div>
    			<div class="aksibtn mt-5">
    				<a href="<?php echo base_url('/aksi/tambah') ?>"><button type="button" class="btn btn-primary">Tambah Data</button></a>
    			</div>
    		</div>
    		<div class="tabel mt-3">
    			<table class="table">
				  <thead class="table-light">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nama Produk</th>
				      <th scope="col">Keterangan</th>
				      <th scope="col">Harga</th>
				      <th scope="col">Jumlah</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <?php 
				      $no=0;
				      foreach ($produk as $pr){ 
				      $no++	
				      ?>
				      <th scope="row"><?php echo $no?></th>
				      <td><?= $pr['nama_produk'] ?></td>
				      <td><?= $pr['keterangan'] ?></td>
				      <td><?= $pr['harga'] ?></td>
				      <td><?= $pr['jumlah'] ?></td>
				      <td>
				      	<a href="<?php echo base_url('aksi/ubah') ?>/<?= $pr['id'] ?>"><span class="badge text-bg-info">Update</span></a>
				      	<a href="<?php echo base_url('aksi/fungsiHapus') ?>/<?= $pr['id'] ?>"><span class="badge text-bg-danger">Hapus</span></a>
				      </td>
				    </tr>
				    <?php } ?> 
				  </tbody>
				</table>
    		</div>
    	
    	</div>
    </div>