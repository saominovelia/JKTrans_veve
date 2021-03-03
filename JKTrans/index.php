<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <br/>
    
        <?php 
        if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
        echo "Data berhasil di input.";
        }else if($pesan == "update"){
        echo "Data berhasil di update.";
        }else if($pesan == "hapus"){
        echo "Data berhasil di hapus.";
        }
        }
    ?>
    <br/>
    <a class="tombol" href="tambah.php">+ Tambah Data Baru</a>
    <h3>Data user</h3>
    <table border="1" class="table">
        <tr>
            <th>Id</th>
            <th>SP</th>
            <th>Colli</th>
            <th>Berat Barang</th>
            <th>Franco</th>
            <th>Confrankert</th>
            <th>Penerima</th>
            <th>Keterangan</th>
            <th>Opsi</th> 
        </tr>
    <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM tb_data");
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
        <tr>
            <td> <?php echo $data['id']; ?> </td>
            <td> <?php echo $data['SP']; ?> </td>
            <td> <?php echo $data['colli']; ?> </td>
            <td> <?php echo $data['berat_barang']; ?> </td>
            <td> <?php echo $data['franco']; ?> </td>
            <td> <?php echo $data['confrankert']; ?> </td>
            <td> <?php echo $data['penerima_barang']; ?> </td>
            <td> <?php echo $data['keterangan']; ?> </td>
            <td>
            <a class="edit" href="edit.php?id= <?php echo $data['id']; ?>">Edit</a> |
            <a class="hapus" href="hapus.php?id= <?php echo $data['id']; ?>">Hapus</a> 
            </td>
        </tr>
        <?php  } ?>
    </table>
</body>
</html>