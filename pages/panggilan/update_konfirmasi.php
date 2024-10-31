<?php
// pengecekan ajax request untuk mencegah direct access file, agar file tidak bisa diakses secara langsung dari browser
// jika ada ajax request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
    // panggil file "database.php" untuk koneksi ke database
    require_once "../../config/database.php";

    // mengecek data post dari ajax
    if (isset($_POST['id'])) {
        // ambil data hasil post dari ajax
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $status = mysqli_real_escape_string($mysqli, $_POST['status']);
        $selectedLoket = mysqli_real_escape_string($mysqli, $_POST['selectedLoket']); // Ambil selectedLoket
        // ambil tanggal dan waktu update data
        $updated_date = gmdate("Y-m-d H:i:s", time() + 60 * 60 * 7);

        // Menyusun query SQL
        $update_query = "UPDATE tbl_antrian SET status='$status', updated_date='$updated_date'";

        // Jika status adalah 2, update kolom loket
        if ($status == "2") {
            $update_query .= ", loket='$selectedLoket'";
        }

        // Tambahkan kondisi WHERE
        $update_query .= " WHERE id='$id'";

        // Eksekusi query
        $update = mysqli_query($mysqli, $update_query)
            or die('Ada kesalahan pada query update : ' . mysqli_error($mysqli));
    }
}
