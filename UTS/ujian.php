<html>
    <?php
        $koneksi = mysqli_connect('localhost','root','','l200170175');
    ?>
    <head>
        <title>L200170175</title>
    </head>
    <body>
        <form action="ujian.php" method="post">
            <table>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td><input type="text" name="nip" id="nip" size="10"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" size="10"></td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>:</td>
                    <td><input type="text" name="fakultas" id="fakultas" size="10"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="textarea" name="alamat" id="alamat"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td></td>
                    <td><input type="submit" value="submit" name="submit"></td>
                    <td><input type="reset" value="reset" name="reset"></td>
                </tr>
            </table>
        </form>
        <?php
            error_reporting(E_ALL^E_NOTICE);

            $nip = $_POST["nip"];
            $nama = $_POST["nama"];
            $fakultas = $_POST["fakultas"];
            $alamat = $_POST["alamat"];
            $submit = $_POST["submit"];
            $insert = "INSERT INTO dosen_ganjil VALUES('$nip','$nama','$fakultas','$alamat')";

            if($submit){
                if($nip==""){
                    echo "NIP tidak boleh kosong<br>";
                }elseif($nama==""){
                    echo "Nama tidak boleh kosong<br>";
                }elseif($fakultas==""){
                    echo "Fakultas tidak boleh kosong<br>";
                }elseif($alamat=""){
                    echo "Alamat tidak boleh kosong<br>";
                }else{
                    mysqli_query($koneksi, $insert);
                    echo "Data Berhasil Di Input<br>";
                }       
            }
        ?>
        <hr>
        <form action="ujian.php" method="post">
            <table border='2'>
                <tr>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Fakultas</td>
                    <td>Alamat</td>
                    <td>Aksi</td>
                </tr>
                <?php
                    $pkey = $_GET['nip'];
                    $data = mysqli_query($koneksi, "SELECT * FROM dosen_ganjil");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $d[0] ?></td>
                            <td><?php echo $d[1]; ?></td>
                            <td><?php echo $d[2]; ?></td>
                            <td><?php echo $d[3]; ?></td>
                            <td>
                                <a href="hapus.php?nip=<?php echo $d[0]; ?>">HAPUS</a>
                            </td>
                        </tr>
                        <?php 
                    }
                ?>
            </table>
        </form>
    </body>
</html>