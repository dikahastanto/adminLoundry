<?php
    include 'header.php';


    $sql = "SELECT tr.*, pr.nama, pr.harga, owner.namaLengkap as Owner, pelanggan.namaLengkap as namaPelanggan FROM tb_transaksi tr JOIN tb_produk pr ON tr.idProduk = pr.id JOIN users pelanggan ON pelanggan.id = tr.idPelanggan JOIN users owner ON owner.id = pr.idUser";
    $query = mysqli_query($konek,$sql);

    $jumlahLoundry = mysqli_num_rows(mysqli_query($konek, 'SELECT * FROM users WHERE level = 1'));
    $jumlahPelanggan = mysqli_num_rows(mysqli_query($konek, 'SELECT * FROM users WHERE level = 2'));
    $jumlahTransaksi = mysqli_num_rows(mysqli_query($konek, 'SELECT * FROM tb_transaksi'));
    $totalTransaksi = mysqli_fetch_array(mysqli_query($konek, 'SELECT SUM(harga) AS total FROM tb_transaksi JOIN tb_produk ON tb_transaksi.idProduk = tb_produk.id'));
?>
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"><?= $jumlahLoundry ?></span></div>
                                    <div class="stat-heading">Owner</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"><?= $jumlahPelanggan ?></span></div>
                                    <div class="stat-heading">Pelanggan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-cart"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">3435</span></div>
                                    <div class="stat-heading">Transaksi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">Rp. <span class="count"><?= $totalTransaksi['total'] ?></span>,-</div>
                                    <div class="stat-heading">Total Transaksi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->
        <div class="clearfix"></div>
        <!-- Orders -->
        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Transaksi </h4>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id Transaksi</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Owner</th>
                                    <th>Pelanggan</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data = mysqli_fetch_array($query)) : ?>
                                    <tr>
                                        <td class="serial"><?= $data['idTransaksi'] ?></td>
                                        <td class="setial"><?= $data['nama'] ?></td>
                                        <td> Rp.<?= $data['harga'] ?>,- </td>
                                        <td>  <?= $data['Owner'] ?> </td>
                                        <td> <?= $data['namaPelanggan'] ?> </td>
                                        <td><?= date('d-M-Y', strtotime($data['created_at'])) ?></td>
                                        <td class="serial">
                                            <?php if ($data['status'] == 0): ?>
                                                <span class="badge badge-danger">
                                                    Menunggu Konfirmasi
                                                </span>
                                            <?php elseif ($data['status'] == 1): ?>
                                                <span class="badge badge-warning">
                                                    Sedang Diproses
                                                </span>
                                            <?php else: ?>
                                                <span class="badge badge-success">
                                                    Selesai
                                                </span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- .animated -->
</div>
<?php
  include 'footer.php';
?>