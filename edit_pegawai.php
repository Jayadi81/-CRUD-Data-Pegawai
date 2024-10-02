
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Pegawai</title>
</head>
<body>
<?php
    include "koneksii.php";
    $qry_get_pegawai = mysqli_query($conn, "select * from pegawai where id_pegawai = '" . $_GET['id_pegawai'] . "'");
    $data_pegawai = mysqli_fetch_array($qry_get_pegawai);
    ?>
<div class="container mt-5">
    <h2>Edit Data Pegawai</h2>
    <form action="proses_edit_pegawai.php" method="POST">
        <input type="hidden" name="id_pegawai" value="<?php echo $data_pegawai['id_pegawai']; ?>">
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_pegawai['nik']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_pegawai['nama']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required><?php echo $data_pegawai['alamat']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                    <option></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
        </div>
        <div class="mb-3">
            <label for="no_tlp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?php echo $data_pegawai['no_tlp']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="jabatan_id" class="form-label">Jabatan</label>
            <select class="form-control" id="jabatan_id" name="jabatan_id" required>
                <?php
                // Ambil daftar jabatan dari tabel jabatan
                $jabatan_sql = "SELECT * FROM jabatan";
                $jabatan_result = $conn->query($jabatan_sql);
                while ($jabatan = $jabatan_result->fetch_assoc()) {
                    echo '<option value="' . $jabatan['id_jabatan'] . '" ' . ($jabatan['nama_jabatan'] == $data_pegawai['jabatan_id'] ? 'selected' : '') . '>' . $jabatan['nama_jabatan'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
                <label for="pasword" class="form-label">Password</label>
                <input type="password" class="form-control" id="pasword" name="pasword" required>
            </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
</body>
</html>

<?php $conn->close(); ?>



