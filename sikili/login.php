<?php
require("konek.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                   <h3>Form Login</h3>
                </div>
                <div class="card-body">
                    <h4>Masukan Data Akun</h4>
                    <hr>
                    <form action="aksi/akun/aksi_login.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" name="username" id="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input class="form-control" type="password" name="password" id="password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Masuk</button>
                            <button type="reset" class="btn btn-secondary">Kembali</button>
                        </div>
                    </form>
                    <div class="mb-3"><a href="create_new/admin_input.php" class="link-secondary link-underline-opacity-25 link-underline-opacity-100-hover">Buat Akun Baru</a></div>
                </div>
            </div>
        </div>
    </body>
</html>