<?php include("../layouts/header.php") ?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Layout Demo -->
  <div class="card mb-4">
    <h5 class="card-header">Tambah User</h5>
    <div class="card-body">
      <form action="">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username" />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email" />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" />
        </div>
        <div class="mb-3">
          <label for="role" class="form-label">Pilih role</label>
          <select class="form-select" id="role" aria-label="Default select example">
            <option selected disabled>Pilih role</option>
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
          </select>
        </div>
        <div class="d-flex align-items-center">
          <a href="./user.php" class="btn btn-secondary me-2">Kembali</a>
          <button class="btn btn-primary" type="submit">Tambah</button>
        </div>
      </form>
    </div>
  </div>
  <!--/ Layout Demo -->
</div>
<!-- / Content -->
<?php include("../layouts/footer.php") ?>