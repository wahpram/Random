<?php
    include 'query.php';
    $result = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <div class="box-model">
            <h1>DATA MAHASISWA</h1>

            <table class="table">

                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <?php  
                    foreach ($result as $value) {
                ?>

                <tr>
                    <td> <?php echo $value["NIM"] ?> </td>
                    <td> <?php echo $value["Namamhs"] ?> </td>
                    <td> <?php echo $value["Alamatmhs"] ?> </td>
                    <td> <?php echo $value["Kontakmhs"] ?> </td>
                    <td>
                        <a href="edit.php?NIM=<?php echo $value['NIM'] ?>"><button class="click button-6">Edit</button></a>
                        <a href="delete.php?NIM=<?php echo $value['NIM']; ?>" onclick="return confirm('Delete Data?')"><button class="click">Delete</button></a>
                    </td>
                </tr>

                <?php 
                    }
                ?>

            </table>
            
            <div class="submit">
                <a href="tambah.php"><button id="submit" class="button-6"> Tambah Data</button></a>
            </div>

        </div>
            
    </div>
</body>
</html>
