<?php
    include 'header.php';
    $sql = 'SELECT * FROM users WHERE level = 2';
    $query = mysqli_query($konek, $sql);
?>
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="clearfix"></div>
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Data Pelanggan </h4>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <table id="bootstrap-data-table" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>E-Mail</th>
                                            <th>Nama Lengkap</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($data = mysqli_fetch_array($query)) : ?>
                                            <tr class=" pb-0">
                                                <td class="serial"><?= $data['email'] ?></td>
                                                <td class="setial"><?= $data['namaLengkap'] ?></td>
                                                <td> <?= $data['alamat'] ?></td>
                                                <td>  <?= $data['noTelp'] ?> </td>
                                                <td>
                                                    <a href="resetpassword.php?id=<?= $data['id'] ?>">
                                                        <button class="btn btn-warning">Reset Password</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div> <!-- /.card -->
                </div>  <!-- /.col-lg-8 -->
            </div>
        </div>
    </div>
    <!-- .animated -->
</div>
<?php
  include 'footer.php';
?>