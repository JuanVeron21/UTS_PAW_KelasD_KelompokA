<?php
   include '../component/sidebar.php';
?>

<?php
    $id = $_GET["id"];
    $sql = mysqli_query($con,"SELECT * FROM pinjam WHERE id = '$id'");
    $data = mysqli_fetch_array($sql);
    echo'
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Edit Pinjaman</title>
  </head>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 5px 10px 18px #888888;" >
        <h4 >Edit Pinjaman</h4>
        <hr>
        <form action="../process/editPinjamanProcess.php?id='.$data['id'].'" method="post">
        <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text"class="form-control" id="nama" required name="nama" aria-describedby="emailHelp" placeholder="Nama Peminjam" value = "'.$data['nama'].'">
            </div>
            <div class="mb-3">
                <label for="buku_pinjam" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="buku_pinjam" required name="buku_pinjam" aria-describedby="emailHelp" placeholder="Judul Buku yang Dipinjam" value = "'.$data['buku_pinjam'].'">
            </div>
            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tgl_pinjam" required name="tgl_pinjam" aria-describedby="emailHelp" placeholder="Tanggal Pinjam" value = "'.$data['tgl_pinjam'].'">
            </div>
            <div class="mb-3">
                <label for="tgl_tempo" class="form-label">Tanggal Jatuh Tempo</label>
                <input type="date" class="form-control" id="tgl_tempo" required name="tgl_tempo" aria-describedby="emailHelp" placeholder="Tanggal Jatuh Tempo" value = "'.$data['tgl_tempo'].'">
            </div>
            <div class="mb-3">
                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tgl_kembali" required name="tgl_kembali" aria-describedby="emailHelp" placeholder="Tanggal Kembali" value = "'.$data['tgl_kembali'].'">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editPinjam">Edit Pinjam</button>
            </div>
        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>'
?>