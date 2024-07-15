<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Treatment </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* Ubah font untuk seluruh halaman */
        body {
            font-family: "Arial", sans-serif;
        }

        /* Atur font untuk judul */
        .title {
            font-family: "Verdana", sans-serif;
        }

        /* Atur font untuk teks biasa */
        .content {
            font-family: "Roboto", sans-serif;
        }

        .card-header{
            background-color: #edada3;
        }

         /* Gaya untuk header tabel */
        .table-head {
            background-color: #3273dc;
            color: #fff;
        }

        .table-head th {
            font-weight: bold;
            background-color: #fdb0c0; /* Ubah warna background */
            color: #4a4a4a; /* Ubah warna teks */
        }
        /* Gaya untuk tabel */
        .table-container {
            overflow-x: auto;
        }

        /* Gaya untuk header tabel */
        .table-head {
            background-color: #3273dc;
            color: #fff;
        }

        .table-head th {
            font-weight: bold;
        }

        /* Gaya untuk body tabel */
        .table-body tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-body tr:hover {
            background-color: #f6f5e1;
        }

        /* Gaya untuk kolom pertama pada tabel */
        .table-body td:first-child {
            color: black;
            font-weight: bold;
        }
        </style>
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered"> Treatment ˚˖𓍢ִ໋🩰✧🩷˚.🎀༘⋆ </h1>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Daftar Treatment 𓍢ִ໋🌷͙֒✧° 
                    </p>
                    <a href="#" class="card-header-icon" aria-label="more options">
                        <button class="button is-primary" data-toggle="modal" data-target="#addTreatmentModal">Tambah Treatment</button>
                    </a>
                </header>
                <div class="card-content">
                    <div class="table-container">
                        <table class="table is-bordered is-fullwidth">
                            <thead class="table-head">
                                <tr>
                                    <th>NO</th>
                                    <th>ID</th>
                                    <th>Name Treatment</th>
                                    <th>Selling Price</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-body" id="treatmentTableBody">
                                <!-- Data akan diisi di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Tambah Treatment -->
    <div class="modal" id="addTreatmentModal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Tambah Treatment</p>
                <button class="delete" aria-label="close" data-dismiss="modal"></button>
            </header>
            <section class="modal-card-body">
                <form id="addTreatmentForm">
                    <div class="field">
                        <label class="label">Nama Treatment</label>
                        <div class="control">
                            <input class="input" type="text" id="nama" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Deskripsi</label>
                        <div class="control">
                            <textarea class="textarea" id="deskripsi" required></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Harga</label>
                        <div class="control">
                            <input class="input" type="number" id="harga" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Nama Pelanggan</label>
                        <div class="control">
                            <input class="input" type="text" id="namaPelanggan" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">ID Pelanggan</label>
                        <div class="control">
                            <input class="input" type="text" id="idPelanggan" required>
                        </div>
                    </div>
                </form>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" type="submit" form="addTreatmentForm">Tambah</button>
                <button class="button" aria-label="close" data-dismiss="modal">Batal</button>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // Data dummy untuk contoh
        let treatments = [{
                id: 1,
                nama: 'Facial',
                deskripsi: 'Facial treatment',
                harga: 150000,
                namaPelanggan: 'John Doe',
                idPelanggan: '001'
            },
            {
                id: 2,
                nama: 'Massage',
                deskripsi: 'Full body massage',
                harga: 200000,
                namaPelanggan: 'Jane Smith',
                idPelanggan: '002'
            },
        ];

        function loadTreatments() {
            const tableBody = document.getElementById('treatmentTableBody');
            tableBody.innerHTML = '';
            treatments.forEach(treatment => {
                const row = `<tr>
                    <td>${treatment.id}</td>
                    <td>${treatment.nama}</td>
                    <td>${treatment.deskripsi}</td>
                    <td>${formatCurrency(treatment.harga)}</td>
                    <td>${treatment.namaPelanggan}</td>
                    <td>${treatment.idPelanggan}</td>
                    <td>
                        <button class="button is-danger is-small" onclick="editTreatment(${treatment.id})">Edit</button>
                        <button class="button is-warning is-small" onclick="deleteTreatment(${treatment.id})">Hapus</button>
                    </td>
                </tr>`;
                tableBody.innerHTML += row;
            });
        }

        function addTreatment(event) {
            event.preventDefault();
            const nama = document.getElementById('nama').value;
            const deskripsi = document.getElementById('deskripsi').value;
            const harga = document.getElementById('harga').value;
            const namaPelanggan = document.getElementById('namaPelanggan').value;
            const idPelanggan = document.getElementById('idPelanggan').value;
            const newTreatment = {
                id: treatments.length + 1,
                nama,
                deskripsi,
                harga,
                namaPelanggan,
                idPelanggan
            };
            treatments.push(newTreatment);
            loadTreatments();
            document.getElementById('addTreatmentForm').reset();
            document.getElementById('addTreatmentModal').classList.remove('is-active');
        }

        function editTreatment(id) {
            // Fungsi untuk edit treatment
            alert('Edit treatment ' + id);
        }

        function deleteTreatment(id) {
            treatments = treatments.filter(treatment => treatment.id !== id);
            loadTreatments();
        }

        function formatCurrency(amount) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(amount);
        }

        document.getElementById('addTreatmentForm').addEventListener('submit', addTreatment);

        window.onload = loadTreatments;
    </script>
</body>

</html>