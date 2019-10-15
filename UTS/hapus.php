<?php
    $koneksi = mysqli_connect('localhost','root','','l200170175');
    $kode = $_GET['nip'];
    $hapus = "DELETE FROM dosen_ganjil WHERE nip='$kode'";
    $data=mysqli_query($koneksi, $hapus);

    if($data > 0){
        echo "
            <script>
                alert('Data berhaisl dihapus');
                document.location.href='ujian.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal dihapus');
                document.location.href='ujian.php';
            </script>
        ";
    }
?>