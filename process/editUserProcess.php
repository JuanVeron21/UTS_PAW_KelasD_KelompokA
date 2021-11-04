<?php
    if(isset($_POST['editUser']))
    {

        include('../db.php');
        $id = $_GET['id']; 
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $prodi = $_POST['prodi'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $queryUpdate = mysqli_query($con,"UPDATE peminjam SET nama='$nama', npm='$npm',prodi='$prodi',email='$email',password='$password' WHERE id='$id'") or die(mysqli_error($con));

        if($queryUpdate)
        {
            echo '<script>alert("Edit Data Success"); window.location = "../page/listUser.php"</script>';
        }
        else
        {
        echo '<script>alert("Edit Data Failed");</script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>