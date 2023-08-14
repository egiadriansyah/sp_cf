<?php
include '../templates/header.php';
include '../templates/sidebar.php';
include '../templates/topbar.php';

?>
<?php
require '../../functions.php';
if (isset($_POST['submit'])) {

    // cek apakah data berhasi / tidak?
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
        </script>";
    }
}

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Gejala</h1>
    <hr>
    <form method="post">
        <div class="form-group row">
            <label for="nama_gejala" class="col-sm-2 col-form-label">Nama Gejala</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_gejala" name="nama_gejala">
            </div>
        </div>
        <div class="form-group row">
            <label for="kode_gejala" class="col-sm-2 col-form-label">Kode Gejala</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kode_gejala" name="kode_gejala">
            </div>
        </div>
        <div class="form-group row">
            <label for="kode_kerusakan" class="col-sm-2 col-form-label">Kode Kerusakan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kode_kerusakan" name="kode_kerusakan">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include '../templates/footer.php'; ?>