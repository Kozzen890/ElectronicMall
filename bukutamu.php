<?php

include_once("helper/koneksi.php");


$query = mysqli_query($koneksi, "SELECT * FROM tamu");
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
        <h1>Buku Tamu</h1>
        <hr>
        <a href="tambah_tamu.php" class="btn btn-success">Tambah Tamu</a>
        <br>
        <br>
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Pesan</td>
                <td>Aksi</td>
            </tr>
            <?php 
            while($row = mysqli_fetch_assoc($query)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['pesan']."</td>";
                echo "<td><a href='edit_tamu.php?id=".$row['id']."' class='btn btn-primary' style='margin:5px'>Edit</a><a href='hapus_tamu.php?id=".$row['id']."' class='btn btn-danger' style='margin:5px'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>