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
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="tabel/users.php" class="btn btn-outline-primary">Tabel User</a>
                                <a href="tabel/tabel_user.php" class="btn btn-outline-primary">Tabel-User Mentah</a>
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
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="create_new/siswa_input.php" class="btn btn-outline-warning">Buat Akun Siswa</a>
                                <a href="create_new/guru_input.php" class="btn btn-outline-warning">Buat Akun Guru</a>
                                <a href="create_new/admin_input.php" class="btn btn-outline-warning">Buat Akun Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</head>