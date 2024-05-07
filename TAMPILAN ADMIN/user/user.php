<?php include("../layouts/header.php") ?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Layout Demo -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3>User</h3>
    <a href="tambah-user.php" class="btn btn-primary">Tambah User</a>
  </div>
  <div class="card">
    <h5 class="card-header">List User</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td>
              <strong>1</strong>
            </td>
            <td>Admin</td>
            <td>admin@admin.com</td>
            <td>
              <span class="badge bg-label-danger me-1">ADMIN</span>
            </td>
            <td>
              <div class="d-flex">
                <a href="./edit-user.php" class="btn btn-primary">Edit</a>
                <button class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#modalHapus">Hapus</button>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <strong>1</strong>
            </td>
            <td>Editor</td>
            <td>editor@editor.com</td>
            <td>
              <span class="badge bg-label-primary me-1">EDITOR</span>
            </td>
            <td>
              <div class="d-flex">
                <a href="edit-user.html" class="btn btn-primary">Edit</a>
                <button class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#modalHapus">Hapus</button>
              </div>
            </td>
          </tr>
          <!-- MODAL HAPUS -->
          <div class="modal fade" id="modalHapus" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0 text-center">
                  <h4>Hapus User</h4>
                  <p>Apakah anda yakin ingin menghapus user ini?</p>
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-danger">Hapus</button>
                </div>
              </div>
            </div>
          </div>
          <!-- MODAL HAPUS -->
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Layout Demo -->
</div>
<!-- / Content -->
<?php include("../layouts/footer.php") ?>