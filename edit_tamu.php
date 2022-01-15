<?php

include_once("helper/koneksi.php");

$id = $_GET['id'];

if(@$_POST){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $query = mysqli_query($koneksi, "UPDATE tamu SET nama='$nama', email='$email', pesan='$pesan' WHERE id='$id'");

}

$query = mysqli_query($koneksi, "SELECT * FROM tamu WHERE id='$id'");
$row = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Edit Tamu</h1>
        <hr>

        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>" required>
                    <br>
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>" required>
                    <br>
                    <label for="">Pesan</label>
                    <textarea name="pesan" class="form-control" cols="30" rows="10"><?= $row['pesan'] ?></textarea>
                    <br>
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </form>
            </div>
        </div>
            
    </div>
</body>
</html>