<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Penghapusan</title>
</head>
<body>

<script>
    var konfirmasi = confirm('Apakah Anda yakin ingin menghapus data pasien ini?');
    if (konfirmasi) {
        window.location.href = 'koneksi.php?idPasien=<?php echo $_GET["idPasien"]; ?>';
    } else {
        window.history.back();
    }
</script>

</body>
</html>
