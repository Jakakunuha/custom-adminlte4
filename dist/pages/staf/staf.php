<?php
$title = 'Staf';
require_once '../../../app/controllers/StafController.php';

// Pastikan $data_staf terdefinisi sebagai array
if (!isset($data_staf)) {
  $data_staf = [];
}
?>

<!doctype html>
<html lang="en">
<!--begin::Head-->
<?php include('../layout/header.php'); ?>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::Header-->
    <?php include('../layout/navbar.php'); ?>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <?php include('../layout/sidebar.php'); ?>
    <!--end::Sidebar-->

    <!-- Content Wrapper. Contains page content -->
    <main class="app-main">
      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <?php include('../layout/breadcrumb.php'); ?>
        </div>
        <!--end::Container-->
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Staf</h3>
                </div>
                <div class="card-body">
                  <a href="tambah-staf.php" class="btn btn-primary btn-sm bi bi-person-plus-fill"> Tambah</a>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($data_staf as $staf): ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $staf['nama'] ?></td>
                          <td><?= $staf['nip'] ?></td>
                          <td><?= $staf['alamat'] ?></td>
                          <td><?= $staf['email'] ?></td>
                          <td>
                            <!-- <a href="ubah-staf.php?id=<?= $staf['id_staf'] ?>" class="btn btn-warning btn-sm">Ubah</a>
                            <a href="hapus-staf.php?id=<?= $staf['id_staf'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</a> -->
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <?php include('../layout/footer.php'); ?>
    <!--end::Footer-->
  </div>


  <!--end::App Wrapper-->
</body>
<!--end::Body-->

</html>