<?php include '../templates/header.php'; ?>
<?php include '../templates/sidebar.php'; ?>
<?php include '../templates/topbar.php' ?>

<?php require '../../functions.php';

$gejala = query("SELECT * FROM tbl_gejala");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Gejala</h1>
    <hr>
    <a href="tambah.php" class="btn btn-primary mb-4">Tambah Data</a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Gejala</th>
                            <th>Kode Gejala</th>
                            <th>Kode Kerusakan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($gejala as $g) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $g["nama_gejala"]; ?></td>
                            <td><?= $g["kode_gejala"]; ?></td>
                            <td><?= $g['kode_kerusakan']; ?></td>
                            <td>
                                <a href="ubah.php" class="btn btn-success">Ubah</a>
                                <a href="hapus.php" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include '../templates/footer.php'

?>