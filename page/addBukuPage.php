<?php
    include '../component/sidebarAdmin.php'
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
    <title>Tambah Buku</title>
  </head>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow:
0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >TAMBAH BUKU</h4>
        <hr>
        <form action="../process/createBukuProcess.php" method="post">
        <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text"class="form-control" id="judul" required name="judul" aria-describedby="emailHelp" placeholder="Judul Buku">
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" id="jenis" required name="jenis" aria-describedby="emailHelp" placeholder="Jenis Buku">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" required name="penulis" aria-describedby="emailHelp" placeholder="Penulis Buku">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" required name="penerbit" aria-describedby="emailHelp" placeholder="Penerbit Buku">
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun Terbit</label>
                <input type="tel" class="form-control" id="tahun" required name="tahun" aria-describedby="emailHelp" placeholder="Tahun Terbit Buku">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="tel" class="form-control" id="stok" required name="stok" aria-describedby="emailHelp" placeholder="Stok Buku">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="tambahBuku">Tambah Buku</button>
            </div>
        </form>
    </div>
            </aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>