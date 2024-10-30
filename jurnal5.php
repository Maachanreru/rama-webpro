
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <left>
    <h4>Tambah Barang</h4>
    <form action="" method="post">
    <table>
        <tr>
            <td>
                Nama Barang :
            </td>
            <td>
                <input type="text" placeholder="" name="nama_barang" required>
            </td>
        </tr>
        <tr>
            <td>
                Kategori Barang : 
            </td>
            <td>
                <input type="text" placeholder="" name="kategori_barang" required>
            </td>
        </tr>
        <tr>
            <td>
                Harga Barang :
            </td>
            <td>
                <input type="number" placeholder="" maxlength="8" name="harga_barang" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="tambah_barang" value="Tambah Barang">
            </td>
        </tr>
    </table>
    </form>
    <br>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Kategori</td>
            <td>Harga</td>
        </tr>
        <?php
        $no=1;
            $data_barang=mysqli_query($koneksi,"SELECT * FROM data_barang ORDER BY nama_barang ASC");
        while ($tampil_barang=mysqli_fetch_array($data_barang)) {
            ?>
            <tr>
                <td><?= $no++; ?>.</td>
                <td><?= $tampil_barang['nama_barang']; ?></td>
                <td><?= $tampil_barang['kategori_barang']; ?></td>
                <td><?= $tampil_barang['harga_barang']; ?></td>
            </tr>
        <?php } ?>
    </table>
    </left>
    
</body>
</html>