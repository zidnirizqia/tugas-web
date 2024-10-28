<?php
// pengecekan ajax request untuk mencegah direct access file
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
    // panggil file "database.php" untuk koneksi ke database
    require_once "../../config/database.php";

    // ambil tanggal sekarang
    $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

    // sql statement untuk menghapus data antrean berdasarkan tanggal hari ini
    $reset = mysqli_query($mysqli, "DELETE FROM tbl_antrian WHERE tanggal='$tanggal'")
              or die('Ada kesalahan pada query reset : ' . mysqli_error($mysqli));

    // cek hasil query
    if ($reset) {
        // jika proses reset berhasil, tampilkan pesan sukses
        echo "Sukses";
    } else {
        // jika proses reset gagal, tampilkan pesan gagal
        echo "Gagal";
    }
}
?>
