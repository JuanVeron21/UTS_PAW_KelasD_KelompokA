<?php
    include '../component/sidebarAdmin.php';
?>

<?php
    $id = $_GET["id"];
    $sql = mysqli_query($con,"SELECT * FROM book WHERE id = '$id'");
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
    <title>Edit Mahasiswa Page</title>
  </head>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 5px 10px 18px #888888;" >
        <h4 >Edit Buku</h4>
        <hr>
        <form action="../process/editBukuProcess.php?id='.$data['id'].'" method="post">
        <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text"class="form-control" id="judul" required name="judul" aria-describedby="emailHelp" placeholder="Judul Buku" value = "'.$data['judul'].'">
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" id="jenis" required name="jenis" aria-describedby="emailHelp" placeholder="Jenis Buku" value = "'.$data['jenis'].'">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" required name="penulis" aria-describedby="emailHelp" placeholder="Penulis Buku" value = "'.$data['penulis'].'">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" required name="penerbit" aria-describedby="emailHelp" placeholder="Penerbit Buku" value = "'.$data['penerbit'].'">
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun Terbit</label>
                <input type="tel" class="form-control" id="tahun" required name="tahun" aria-describedby="emailHelp" placeholder="Tahun Terbit Buku" value = "'.$data['tahun'].'">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="tel" class="form-control" id="stok" required name="stok" aria-describedby="emailHelp" placeholder="Jumlah Stok Buku" value = "'.$data['stok'].'">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editBuku">Edit Buku</button>
            </div>
        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>'
?>