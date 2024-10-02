<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Pegawai</title>
</head>
<body>
<div class="container mt-5">
    <h2>Data Pegawai</h2>
    <table class="table table-bordered">
    <div>
     <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PT.Perusahaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_pegawai.php">Data Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tugas.php">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
    </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px"></div>
        <thead>
        <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Jenis Kelamin</th>
            <th>No.Telepon</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Tunjangan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
            include "koneksii.php";
            $qry_pegawai = mysqli_query($conn, "select * from pegawai join jabatan on jabatan.id_jabatan=pegawai.jabatan_id");
            $no = 0;
            while ($data_pegawai = mysqli_fetch_array($qry_pegawai)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_pegawai['nik'] ?></td>
                    <td><?= $data_pegawai['nama'] ?></td>
                    <td><?= $data_pegawai['alamat'] ?></td>
                    <td><?= $data_pegawai['username'] ?></td>
                    <td><?= $data_pegawai['jenis_kelamin'] ?></td>
                    <td><?= $data_pegawai['no_tlp'] ?></td>
                    <td><?= $data_pegawai['nama_jabatan'] ?>
                    <td><?= $data_pegawai['gaji_pokok'] ?>
                    <td><?= $data_pegawai['tunjangan'] ?></td>
                    <td><a href="edit_pegawai.php?id_pegawai=<?= $data_pegawai['id_pegawai'] ?>"
                        class="btn btn-success">Ubah</a> | <a href="hapus_pegawai.php?id_pegawai=<?= $data_pegawai['id_pegawai'] ?>"
                        onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></
                    </td>

                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>