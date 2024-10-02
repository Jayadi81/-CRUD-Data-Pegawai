<?php 
    include "koneksii.php";
    $qry_jabatan=mysqli_query($conn,"select * from jabatan");
    while($data_pegawai=mysqli_fetch_array($qry_jabatan)){ 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Registrasi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Welcome</h3>
                        <h3>Formulir Registrasi</h3>
                    </div>
                    <div class="card-body">
                        <form action="proses_registerasi.php" method="POST">
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
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
                                <input type="text" class="form-control" id="no_tlp" name="no_tlp">
                            </div>
                            <div class="mb-3">
                                <label class="nama_jabatan">Jabatan</label>
                                <select name="jabatan_id" class="form-control">
                                    <option></option>
                                    <?php
                            include "koneksii.php";
                            $qry_jabatan = mysqli_query($conn, "select * from jabatan");
                            while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                                echo '<option value="' . $data_jabatan['id_jabatan'] . '">' . $data_jabatan['nama_jabatan'] . '</option>';
                            }
                            ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pasword" class="form-label">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" id="pasword" name="pasword"
                                    placeholder="Konfirmasi kata sandi Anda">
                            </div>
                            <div class="d-grid">
                                <button type="submit" value="tambah pegawai" class="btn btn-primary">Daftar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>Sudah punya akun ? <a href="loginn.php">Masuk di sini</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.