<?php include("../layouts/header.php") ?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Layout Demo -->
  <div class="card mb-4">
    <h5 class="card-header">Tambah Kategori</h5>
    <div class="card-body">
      <form action="">
        <div class="mb-3">
          <label for="namaKategori" class="form-label">Nama Kategori</label>
          <input type="text" class="form-control" id="namaKategori" placeholder="Masukkan nama kategori" name="nama-kategori" />
        </div>
        <div class="mb-3">
          <label for="descKategori" class="form-label">Deskripsi Kategori</label>
          <textarea class="form-control" id="descKategori" rows="3" name="desc-kategori"></textarea>
        </div>
        <div class="d-flex align-items-center">
          <a href="./category.php" class="btn btn-secondary me-2">Kembali</a>
          <button class="btn btn-primary" type="submit">Tambah</button>
        </div>
      </form>
    </div>
  </div>
  <!--/ Layout Demo -->
</div>
<!-- / Content -->
<?php include("../layouts/footer.php") ?>