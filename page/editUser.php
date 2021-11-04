<?php
    include '../component/sidebar.php';
?>

<?php
    $id = $_GET["id"];
    $sql = mysqli_query($con,"SELECT * FROM peminjam WHERE id='$id'");
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
    <title>Edit Peminjam Page</title>
  </head>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 5px 10px 18px #888888;" >
        <h4 >Edit User</h4>
        <hr>
        <form action="../process/editUserProcess.php?id='.$data['id'].'" method="post">
        <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text"class="form-control" id="nama" required name="nama" aria-describedby="emailHelp" placeholder="Nama" value = "'.$data['nama'].'">
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" id="npm" required name="npm" aria-describedby="emailHelp" placeholder="NPM" value = "'.$data['npm'].'">
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control" id="prodi" required name="prodi" aria-describedby="emailHelp" placeholder="Prodi" value = "'.$data['prodi'].'">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" required name="email" aria-describedby="emailHelp" placeholder="Email" value = "'.$data['email'].'">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required name="password" aria-describedby="emailHelp" placeholder="Password" value = "'.$data['password'].'">
            </div>
        
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editUser">Edit User</button>
            </div>
        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>'
?>