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
    <title>List User</title>

    
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
        <h4>DAFTAR BUKU PINJAM</h4>
        <hr>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Jatuh Tempo</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM pinjam") or die(mysqli_error($con));
                    if (mysqli_num_rows($query) == 0) {
                        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                        echo'
    <tr>
        <th scope="row">'.$no.'</th>
        <td>'.$data['nama'].'</td>
        <td>'.$data['buku_pinjam'].'</td>
        <td>'.$data['tgl_pinjam'].'</td>
        <td>'.$data['tgl_tempo'].'</td>
        <td>'.$data['tgl_kembali'].'</td>
        <td>
            <a href="./editPinjamanPage.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
            <a href="../process/kembaliProcess.php?id='.$data['id'].'"
                onClick="return confirm ( \'Yakin?\')">
                <i style="color: red" class="fa fa-trash"></i>
            </a>
        </td>
    </tr>';
    $no++;
    }
    }
    ?>
 </tbody>
 </table>
 </div>
 </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>