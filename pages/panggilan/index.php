<!-- Aplikasi Antrian Berbasis Web 
******************************************
* Developer   : Indra Styawantoro
* Company     : Pustaka Koding
* Release     : Agustus 2021
* Update      : -
* Website     : pustakakoding.com
* E-mail      : pustaka.koding@gmail.com
* WhatsApp    : +62-813-7778-3334
-->

<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Antrian Berbasis Web">
    <meta name="author" content="Indra Styawantoro">

    <!-- Title -->
    <title>Aplikasi Antrian Berbasis Web</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

    <!-- Custom Style -->
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container pt-4">
            <div class="d-flex flex-column flex-md-row px-4 py-3 mb-4 bg-white rounded-2 shadow-sm">
                <!-- judul halaman -->
                <div class="d-flex align-items-center me-md-auto">
                    <i class="bi-mic-fill text-success me-3 fs-3"></i>
                    <h1 class="h5 pt-2">Panggilan Antrian</h1>
                </div>
                <!-- breadcrumbs -->
                <div class="ms-5 ms-md-0 pt-md-3 pb-md-0">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://pustakakoding.com/"><i class="bi-house-fill text-success"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                            <li class="breadcrumb-item" aria-current="page">Antrian</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <!-- menampilkan informasi jumlah antrian -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-start">
                                <div class="feature-icon-3 me-4">
                                    <i class="bi-people text-warning"></i>
                                </div>
                                <div>
                                    <p id="jumlah-antrian" class="fs-3 text-warning mb-1"></p>
                                    <p class="mb-0">Jumlah Antrian</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-start">
                                <div class="feature-icon-3 me-4">
                                    <i class="bi-person-check text-success"></i>
                                </div>
                                <div>
                                    <p id="antrian-sekarang" class="fs-3 text-success mb-1"></p>
                                    <p class="mb-0">Antrian Loket 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-start">
                                <div class="feature-icon-3 me-4">
                                    <i class="bi-person-check text-success"></i>
                                </div>
                                <div>
                                    <p id="antrian-sekarang2" class="fs-3 text-success mb-1"></p>
                                    <p class="mb-0">Antrian Loket 2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-start">
                                <div class="feature-icon-3 me-4">
                                    <i class="bi-person-check text-success"></i>
                                </div>
                                <div>
                                    <p id="antrian-sekarang3" class="fs-3 text-success mb-1"></p>
                                    <p class="mb-0">Antrian Loket 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-start">
                                <div class="feature-icon-3 me-4">
                                    <i class="bi-person-plus text-info"></i>
                                </div>
                                <div>
                                    <p id="antrian-selanjutnya" class="fs-3 text-info mb-1"></p>
                                    <p class="mb-0">Antrian Selanjutnya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-start">
                                <div class="feature-icon-3 me-4">
                                    <i class="bi-person text-danger"></i>
                                </div>
                                <div>
                                    <p id="sisa-antrian" class="fs-3 text-danger mb-1"></p>
                                    <p class="mb-0">Sisa Antrian</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table id="tabel-antrian" class="table table-bordered table-striped table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th>Nomor Antrian</th>
                                    <th>Status</th>
                                    <th>Loket 1</th>
                                    <th>Loket 2</th>
                                    <th>Loket 3</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-4">
        <div class="container">
            <hr class="my-4">
            <!-- copyright -->
            <div class="copyright text-center mb-2 mb-md-0">
                &copy; 2021 - <a href="https://pustakakoding.com/" target="_blank" class="text-brand text-decoration-none">Pustaka Koding</a>. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- load file audio bell antrian -->
    <audio id="tingtung" src="../../assets/audio/tingtung.mp3"></audio>

    <!-- jQuery Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- DataTables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <!-- Responsivevoice -->
    <!-- Get API Key -> https://responsivevoice.org/ -->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=jQZ2zcdq"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Fungsi untuk mengambil
            // tampilkan informasi antrian
            $('#jumlah-antrian').load('get_jumlah_antrian.php');
            $('#antrian-sekarang').load('get_antrian_sekarang.php');
            $('#antrian-sekarang2').load('get_antrian_sekarang2.php');
            $('#antrian-sekarang3').load('get_antrian_sekarang3.php');
            $('#antrian-selanjutnya').load('get_antrian_selanjutnya.php');
            $('#sisa-antrian').load('get_sisa_antrian.php');

            // menampilkan data antrian menggunakan DataTables
            var table = $('#tabel-antrian').DataTable({
                "lengthChange": false, // non-aktifkan fitur "lengthChange"
                "searching": false, // non-aktifkan fitur "Search"
                "ajax": "get_antrian.php", // url file proses tampil data dari database
                // menampilkan data
                "columns": [{
                        "data": "no_antrian",
                        "width": '250px',
                        "className": 'text-center'
                    },
                    {
                        "data": "status",
                        "visible": false
                    },
                    {
                        "data": null,
                        "orderable": false,
                        "searchable": false,
                        "width": '100px',
                        "className": 'text-center',
                        "render": function(data, type, row, meta) {
                            var btn;

                            // Jika tidak ada data "status"
                            if (data["status"] === "") {
                                btn = "-";
                            }
                            // Jika status = 0, tampilkan button panggil hijau
                            else if (data["status"] === "0") {
                                btn = "<button class=\"btn btn-success btn-sm rounded-circle btn_mic\"><i class=\"bi-mic-fill\"></i></button>";
                            }
                            // Jika status = 1 dan kolom ini adalah loket yang diklik, tampilkan ceklis dan silang
                            else if (data["status"] === "1" && meta.col === selectedLoket + 1) {
                                btn = "<div class='button-group d-flex justify-content-center align-items-center'>" + // Menggunakan d-flex dan justify-content-center
                                    "<button class=\"btn btn-warning btn-sm rounded-circle btn_mic\"><i class=\"bi-mic-fill\"></i></button>" +
                                    "<button class=\"btn btn-success btn-sm rounded-circle mx-1 confirm-check\" title=\"Confirm\"><i class=\"bi-check-circle-fill\"></i></button>" +
                                    "<button class=\"btn btn-danger btn-sm rounded-circle cancel-check\" title=\"Cancel\"><i class=\"bi-x-circle-fill\"></i></button>" +
                                    "</div>";


                            }
                            // Jika status = 2, tampilkan button ceklis hijau
                            else if (data["status"] === "2") {
                                btn = "<button class=\"btn btn-secondary btn-sm rounded-circle\"><i class=\"bi-mic-fill\"></i></button>";
                            }
                            // Jika status = 1 tapi kolom ini bukan loket yang diklik, tampilkan mikrofon kuning saja
                            else if (data["status"] === "1") {
                                btn = "<button class=\"btn btn-warning btn-sm rounded-circle\"><i class=\"bi-mic-fill\"></i></button>";
                            }

                            return btn;
                        }
                    },
                    {
                        "data": null,
                        "orderable": false,
                        "searchable": false,
                        "width": '100px',
                        "className": 'text-center',
                        "render": function(data, type, row, meta) {
                            var btn;

                            // Jika tidak ada data "status"
                            if (data["status"] === "") {
                                btn = "-";
                            }
                            // Jika status = 0, tampilkan button panggil hijau
                            else if (data["status"] === "0") {
                                btn = "<button class=\"btn btn-success btn-sm rounded-circle btn_mic\"><i class=\"bi-mic-fill\"></i></button>";
                            }
                            // Jika status = 1 dan kolom ini adalah loket yang diklik, tampilkan ceklis dan silang
                            else if (data["status"] === "1" && meta.col === selectedLoket + 1) {
                                btn = "<div class='button-group d-flex justify-content-center align-items-center'>" + // Menggunakan d-flex dan justify-content-center
                                    "<button class=\"btn btn-warning btn-sm rounded-circle btn_mic\"><i class=\"bi-mic-fill\"></i></button>" +
                                    "<button class=\"btn btn-success btn-sm rounded-circle mx-1 confirm-check\" title=\"Confirm\"><i class=\"bi-check-circle-fill\"></i></button>" +
                                    "<button class=\"btn btn-danger btn-sm rounded-circle cancel-check\" title=\"Cancel\"><i class=\"bi-x-circle-fill\"></i></button>" +
                                    "</div>";


                            }
                            // Jika status = 2, tampilkan button ceklis hijau
                            else if (data["status"] === "2") {
                                btn = "<button class=\"btn btn-secondary btn-sm rounded-circle\"><i class=\"bi-mic-fill\"></i></button>";
                            }
                            // Jika status = 1 tapi kolom ini bukan loket yang diklik, tampilkan mikrofon kuning saja
                            else if (data["status"] === "1") {
                                btn = "<button class=\"btn btn-warning btn-sm rounded-circle\"><i class=\"bi-mic-fill\"></i></button>";
                            }

                            return btn;
                        }
                    },
                    {
                        "data": null,
                        "orderable": false,
                        "searchable": false,
                        "width": '100px',
                        "className": 'text-center',
                        "render": function(data, type, row, meta) {
                            var btn;

                            // Jika tidak ada data "status"
                            if (data["status"] === "") {
                                btn = "-";
                            }
                            // Jika status = 0, tampilkan button panggil hijau
                            else if (data["status"] === "0") {
                                btn = "<button class=\"btn btn-success btn-sm rounded-circle btn_mic\"><i class=\"bi-mic-fill\"></i></button>";
                            }
                            // Jika status = 1 dan kolom ini adalah loket yang diklik, tampilkan ceklis dan silang
                            else if (data["status"] === "1" && meta.col === selectedLoket + 1) {
                                btn = "<div class='button-group d-flex justify-content-center align-items-center'>" + // Menggunakan d-flex dan justify-content-center
                                    "<button class=\"btn btn-warning btn-sm rounded-circle btn_mic\"><i class=\"bi-mic-fill\"></i></button>" +
                                    "<button class=\"btn btn-success btn-sm rounded-circle mx-1 confirm-check\" title=\"Confirm\"><i class=\"bi-check-circle-fill\"></i></button>" +
                                    "<button class=\"btn btn-danger btn-sm rounded-circle cancel-check\" title=\"Cancel\"><i class=\"bi-x-circle-fill\"></i></button>" +
                                    "</div>";


                            }
                            // Jika status = 2, tampilkan button ceklis hijau
                            else if (data["status"] === "2") {
                                btn = "<button class=\"btn btn-secondary btn-sm rounded-circle\"><i class=\"bi-mic-fill\"></i></button>";
                            }
                            // Jika status = 1 tapi kolom ini bukan loket yang diklik, tampilkan mikrofon kuning saja
                            else if (data["status"] === "1") {
                                btn = "<button class=\"btn btn-warning btn-sm rounded-circle\"><i class=\"bi-mic-fill\"></i></button>";
                            }

                            return btn;
                        }
                    },
                ],
                "order": [
                    [0, "desc"] // urutkan data berdasarkan "no_antrian" secara descending
                ],
                "iDisplayLength": 10, // tampilkan 10 data per halaman
            });

            var selectedLoket;
            $('#tabel-antrian tbody').on('click', '.confirm-check', function() {
                var data = table.row($(this).parents('tr')).data();
                var id = data["id"];
                $.ajax({
                    type: "POST",
                    url: "update_konfirmasi.php",
                    data: {
                        id: id,
                        status: "2",
                        selectedLoket: selectedLoket // Mengirimkan selectedLoket ke server
                    },
                    success: function() {
                        table.ajax.reload(null, false); // Reload tabel tanpa reset pagination
                    }
                });
            });


            $('#tabel-antrian tbody').on('click', '.cancel-check', function() {
                var data = table.row($(this).parents('tr')).data();
                var id = data["id"];

                $.ajax({
                    type: "POST",
                    url: "update_konfirmasi.php",
                    data: {
                        id: id,
                        status: "0" // Update status menjadi 0 untuk mengulang panggilan
                    },
                    success: function() {
                        table.ajax.reload(null, false); // Reload tabel tanpa reset pagination
                    }
                });
            });


            // panggilan antrian dan update data
            // panggilan antrian dan update data

            $('#tabel-antrian tbody').on('click', '.btn_mic', function() {
                // ambil data dari datatables 
                var data = table.row($(this).parents('tr')).data();
                // buat variabel untuk menampilkan data "id"
                var id = data["id"];
                // buat variabel untuk menampilkan audio bell antrian
                var bell = document.getElementById('tingtung');

                // mainkan suara bell antrian
                bell.pause();
                bell.currentTime = 0;
                bell.play();

                // set delay antara suara bell dengan suara nomor antrian
                durasi_bell = bell.duration * 770;

                // deteksi loket yang diklik
                var loket = $(this).closest('td').index();
                selectedLoket = $(this).closest('td').index(); // Mendapatkan indeks kolom (loket)

                // mainkan suara nomor antrian sesuai loket
                setTimeout(function() {
                    if (selectedLoket === 1) { // Loket 1
                        responsiveVoice.speak("Nomor Antrian, " + data["no_antrian"] + ", menuju, loket, 1", "Indonesian Male", {
                            rate: 0.9,
                            pitch: 1,
                            volume: 1
                        });
                    } else if (selectedLoket === 2) { // Loket 2
                        responsiveVoice.speak("Nomor Antrian, " + data["no_antrian"] + ", menuju, loket, 2", "Indonesian Male", {
                            rate: 0.9,
                            pitch: 1,
                            volume: 1
                        });
                    } else if (selectedLoket === 3) { // Loket 3
                        responsiveVoice.speak("Nomor Antrian, " + data["no_antrian"] + ", menuju, loket, 3", "Indonesian Male", {
                            rate: 0.9,
                            pitch: 1,
                            volume: 1
                        });
                    }
                }, durasi_bell);

                // proses update data
                $.ajax({
                    type: "POST", // mengirim data dengan method POST
                    url: "update.php", // url file proses update data
                    // tentukan data yang dikirim
                    data: {
                        id: id,
                        // loket: loket
                    }
                });

                // updateActionButtons(loket - 1);
            });

            setInterval(function() {
                $('#jumlah-antrian').load('get_jumlah_antrian.php').fadeIn("slow");
                $('#antrian-sekarang').load('get_antrian_sekarang.php').fadeIn("slow");
                $('#antrian-sekarang2').load('get_antrian_sekarang2.php').fadeIn("slow");
                $('#antrian-sekarang3').load('get_antrian_sekarang3.php').fadeIn("slow");
                $('#antrian-selanjutnya').load('get_antrian_selanjutnya.php').fadeIn("slow");
                $('#sisa-antrian').load('get_sisa_antrian.php').fadeIn("slow");
                table.ajax.reload(null, false);
            }, 1000);
        });
    </script>
</body>

</html>