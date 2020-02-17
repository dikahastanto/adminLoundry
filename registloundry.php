<?php
    include 'header.php';
?>
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="clearfix"></div>
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Registrasi Loundry </h4>
                        </div>
                        <div class="card-body card-block">
                            <form action="insertloundry.php" method="post">
                              <div class="form-group">
                                <label for="company" class=" form-control-label">E-Mail</label>
                                <input required type="email" name="email" placeholder="E-Mail" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class=" form-control-label">Nama Lengkap</label>
                                <input required type="text" name="namaLengkap" placeholder="Nama Lengkap" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class=" form-control-label">Alamat</label>
                                <input required type="text" name="alamat" placeholder="Alamat" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class=" form-control-label">No Telp</label>
                                <input required type="text" name="noTelp" placeholder="No Telp" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class=" form-control-label">No Rek</label>
                                <input required type="number" name="noRek" placeholder="No Rek" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class=" form-control-label">Nama Bank</label>
                                <input required type="text" name="namaBank" placeholder="Nama Bank" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class=" form-control-label">Atas Nama</label>
                                <input required type="text" name="atasNama" placeholder="atasNama" class="form-control">
                              </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-success">Registrasi</button>
                              </div>
                            </form>
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