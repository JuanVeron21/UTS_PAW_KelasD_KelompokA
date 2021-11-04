<?php
    include '../component/sidebar.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>FORM PEMINJAMAN</title>
  </head>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow:
0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4>FORM PEMINJAMAN</h4>
        <hr>
        <form action="../process/pinjamProcess.php" method="post">
        <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text"class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama Peminjam">
            </div>
            <div class="mb-3">
                <label for="buku_pinjam" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="buku_pinjam" name="buku_pinjam" aria-describedby="emailHelp" placeholder="Judul Buku yang Dipinjam">
            </div>
            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" aria-describedby="emailHelp" placeholder="Tanggal Pinjam">
            </div>
            <div class="mb-3">
                <label for="tgl_tempo" class="form-label">Tanggal Jatuh Tempo</label>
                <input type="date" class="form-control" id="tgl_tempo" name="tgl_tempo" aria-describedby="emailHelp" placeholder="Tanggal Jatuh Tempo">
            </div>
            <div class="mb-3">
                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" aria-describedby="emailHelp" placeholder="Tanggal Kembali">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="pinjam">Pinjam</button>
            </div>
        </form>
    </div>
            </aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>