<?php require("header.php"); ?>
<body>
    <div class="container-lg">
        <div class="container px-4 text-center">
            <h1>Main Menu</h1>
            <div class="row align-items-start">
                <div class="col">
                    <div class="card">
                        <div class="card-head">
                            <p class="p-3"><h3>Tabels</h3></p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <h5>Tabel User</h5>
                            <div class="mb-3">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="tabel/users.php" class="btn btn-outline-primary">Tabel User</a>
                                    <a href="tabel/tabel_user.php" class="btn btn-outline-secondary">Tabel-User Mentah</a>
                                </div>
                            </div>
                            <h5>Tabel Mapel</h5>
                            <div class="mb3">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="tabel/mapel.php" class="btn btn-outline-primary">Tabel Mapel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-head">
                            <p class="p-3"><h3>Buat Baru</h3></p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <h5>Buat Akun</h5>
                            <div class="mb-3">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="create_new/siswa_input.php" class="btn btn-outline-warning">Buat Akun Siswa</a>
                                    <a href="create_new/guru_input.php" class="btn btn-outline-warning">Buat Akun Guru</a>
                                    <a href="create_new/admin_input.php" class="btn btn-outline-warning">Buat Akun Admin</a>
                                </div>
                            </div>
                            <h5>Buat Mapel</h5>
                            <div class="mb-3">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="create_new/mapel_input.php" class="btn btn-outline-success">Buat Mapel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</head>