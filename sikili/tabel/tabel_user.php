<?php
include("konek.php");
include("header.php");

$sql = "SELECT * FROM users;";

$usersql = mysqli_query($konek, $sql);

$user = mysqli_fetch_all($usersql, MYSQLI_ASSOC);

$o = 1;
?>
    <body>
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2>Tabel Users</h2>
                    <table id="tabelUser" class="table table-striped table-hover border">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10%;">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Role</th>
                                <th scope="col" style="width: 20%;">Created At</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php if (count($user) > 0): ?>
                                <?php foreach($user as $i): ?>
                                    <tr>
                                        <td><?= $o++; ?></td>
                                        <td><?= $i['id']; ?></td>
                                        <td><?= $i['username']; ?></td>
                                        <td><?= $i['password']; ?></td>
                                        <td><?= $i['role']; ?></td>
                                        <td><?= $i['created_at']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6">Data Belum Di Isi</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>