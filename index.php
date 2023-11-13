<!DOCTYPE html>
<html lang="en">

<?php
  include 'proses.php';
?>


<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="header">
    <img src="Logo_UPG.png" alt="Logo" class="logo">
        Form Mahasiswa <font color="orange">UPG</font>
        <div class="copyright">
    <p>.</p>
</div>
</div>
    

    <div class="content">
        <form method="post" action="proses.php">
            <table  border="2" style="width: 400px;">
                <tr>
                    <td align="center" colspan="3" bgcolor="black">
                        <font color="#1DE606" size="3px">
                            <b>Isi Data Anda Di Bawah Ini Dengan Lengkap!</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Nim</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Nama Mahasiswa</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Alamat</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <select name="alamat">
                            <option value="kota/kabupaten">kota/kabupaten</option>
                            <option value="Kabupaten Lebak">Kabupaten Lebak</option>
                            <option value="Kabupaten Pandeglang">Kabupaten Pandeglang</option>
                            <option value="Kabupaten Serang">Kabupaten Serang</option>
                            <option value="Kabupaten Tangerang">Kabupaten Tangerang</option>
                            <option value="Kota Cilegon">Kota Cilegon</option>
                            <option value="Kota Serang">Kota Serang</option>
                            <option value="Kota Tangerang">Kota Tangerang</option>
                            <option value="Kota Tangerang Selatan">Kota Tangerang Selatan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">No.Tlpn</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="tlpn">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="aliceblue"> &nbsp </td>
                    <td bgcolor="aliceblue"> &nbsp </td>
                    <td bgcolor="aliceblue">
                        <input type="submit" name="submit" value="SIMPAN">
                        <input type="reset" value="RESET">
                    </td>
                </tr>
            </table>
        </form>

        <br>
        <table align="center" border="1" style="width: 1250px;">
            <tr>
                <th bgcolor="yellow">#</th>
                <th bgcolor="yellow">Nim</th>
                <th bgcolor="yellow">Nama Mahasiswa</th>
                <th bgcolor="yellow">Alamat</th>
                <th bgcolor="yellow">No Telp</th>
                <th bgcolor="yellow">Aksi</th>
            </tr>
            <?php
        $no = 1;
        $data = mysqli_query($penghubung, "SELECT * FROM mahasiswa");
        while($d = mysqli_fetch_array($data)){
        
        
        ?>
        <tr>
          <td bgcolor="white"><?php echo $no++ ?></td>
          <td bgcolor="white"><?php echo $d['nim']?></td>
          <td bgcolor="white"><?php echo $d['nama']?></td>
          <td bgcolor="white"><?php echo $d['alamat']?></td>
          <td bgcolor="white"><?php echo $d['tlpn']?></td>
          <td bgcolor="white"><a href="hapus.php?id=<?php echo $d['nim']; ?>">Hapus</a> | <a href="edit.php?id=<?php echo $d['nim']; ?>">Edit</a></td>
        </tr>

        <?php
        }
        ?>
        </table></br>
    </div>

   

    <script>feather.replace();</script>

</body>
</html>
