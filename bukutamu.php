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
    <title>Buku Tamu | Electronic Mall</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <header class="relative bg-white">
        <nav aria-label="Top" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="h-16 flex items-center">

                    <!-- Logo -->
                    <div class="ml-4 flex lg:ml-0">
                        <a href="index.html">
                            <span class="sr-only">Workflow</span>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                                alt="">
                        </a>
                    </div>

                    <!-- Flyout menus -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="h-full flex space-x-8">
                            <a href="index.html"
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800"
                                style="cursor:pointer">Beranda</a>

                            <a
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800"
                                style="cursor:pointer">Product</a>

                            <a href="about.html"
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800"
                                style="cursor:pointer">About</a>

                            <a href="bukutamu.php"
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800"
                                style="cursor:pointer">Buku Tamu</a>
                        </div>
                    </div>

                    <div class="ml-auto flex items-center">
                        <!-- Cart -->
                        <div class="ml-4 flow-root lg:ml-6" @click="togglePage('cartPage')">
                            <a href="cart.html" class="group -m-2 p-2 flex items-center">
                                <!-- Heroicon name: outline/shopping-bag -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                <span
                                    class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <strong><h1 style="font-size: 32px; margin-top: 24px;" >Buku Tamu</h1></strong>
        <br>
        <a href="tambah_tamu.php" class="btn btn-success">Tambah Tamu</a>
        <br>
        <br>
        <table class="table" style="margin: 3px;">
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