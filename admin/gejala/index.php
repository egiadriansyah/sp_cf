<?php require '../../functions.php'; ?>
<?php include '../templates/header.php'; ?>
<?php include '../templates/sidebar.php'; ?>
<?php include '../templates/topbar.php' ?>

<?php
$gejala = mysqli_query($conn, "SELECT * FROM tbl_gejala");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Gejala</h1>
    <hr>
    <a href="tambah.php" class="btn btn-primary mb-4">Tambah Data</a>

    <!-- DataTales Example -->
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
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Gejala</th>
                            <th>Kode Gejala</th>
                            <th>Kode Kerusakan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($gejala as $row) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row['nama_gejala']; ?></td>
                                <td><?= $row['kode_gejala']; ?></td>
                                <td><?= $row['kode_kerusakan']; ?></td>
                                <td>
                                    <a href="ubah.php" class="btn btn-success">ubah</a> |
                                    <a href="hapus.php?id=<?= $row["id_gejala"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin anda ingin menghapus?');">Hapus</a>
                                </td>
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