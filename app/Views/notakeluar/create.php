<?php echo view('_partials/head'); ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php echo view('_partials/sidebar'); ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php echo view('_partials/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 text-center">Form Data Nota Keluar</h1>
                    <p class="mb-4 text-center">Pengecekan data secara rutin akan terciptanya konsistensi data yang baik</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-left">Form Tambah Data Nota Keluar </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <?php
                                      $inputs = session()->getFlashdata('inputs');
                                      $errors = session()->getFlashdata('errors');
                                      if (!empty($errors)) { ?>
                                        <div class="alert alert-danger" role="alert">
                                          Whoops! Ada kesalahan saat input data, yaitu:
                                          <ul>
                                            <?php foreach ($errors as $error) : ?>
                                              <li><?= esc($error) ?></li>
                                            <?php endforeach ?>
                                          </ul>
                                        </div>
                                      <?php } ?>
                                      <?php echo form_open_multipart('notakeluar/store'); ?>
                                      <div class="card">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Kode Nota');
                                                $kodenota = [
                                                  'type'  => 'text',
                                                  'name'  => 'kode_nota',
                                                  'id'    => 'kode_nota',
                                                  'value' => $inputs['kode_nota'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan kode nota'
                                                ];
                                                echo form_input($kodenota);
                                                ?>
                                              </div>

                                              <div class="form-group">
                                                <?php
                                                echo form_label('nama barang keluar');
                                                $namabarang = [
                                                  'type'  => 'text',
                                                  'name'  => 'nama_barang',
                                                  'id'    => 'nama_barang',
                                                  'value' => $inputs['nama_barang'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan nama barang'
                                                ];
                                                echo form_input($namabarang);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Jumlah barang keluar');
                                                $nama = [
                                                  'type'  => 'text',
                                                  'name'  => 'jumlah_barang',
                                                  'id'    => 'jumlah_barang',
                                                  'value' => $inputs['jumlah_barang'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Jumlah barang'
                                                ];
                                                echo form_input($nama);
                                                ?>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Tanggal Keluar Nota');
                                                $tanggal_keluar = [
                                                  'type'  => 'date',
                                                  'name'  => 'tanggal_keluar',
                                                  'id'    => 'tanggal_keluar',
                                                  'value' => $inputs['tanggal_keluar'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan tanggal keluar'
                                                ];
                                                echo form_input($tanggal_keluar);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Status Nota', 'status_document');
                                                echo form_dropdown('status_document', ['' => 'Pilih', 'Masuk' => 'Masuk', 'Keluar' => 'Keluar'], $inputs['status_document'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('vendor Receiver', 'vendor');
                                                echo form_dropdown('vendor', ['' => 'Pilih Vendor', 'KJB' => 'KJB', 'HSRCC' => 'HSRCC'], $inputs['vendor'], ['class' => 'form-control']);
                                                ?>
                                              </div>

                                            </div>
                                            <div class="col-md-12">
                                              <div class="form-group ">
                                                <?php
                                                echo form_label('Penanggung Jawab Data', 'staff');
                                                echo form_dropdown('karyawan_id', $karyawan, $inputs['karyawan_id'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-footer">
                                        <a href="<?php echo base_url('notakeluar'); ?>" class="btn btn-outline-info float-left"> <i class="nav-icon fas fa-backward"></i> Back</a>
                                        <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-save"></i> Simpan</button>
                                      </div>
                                    </div>
                                  </div>
                                     <?php echo form_close(); ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php echo view('_partials/footer')?>

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php echo view('_partials/logout'); ?>

<?php echo view('_partials/script'); ?>
</body>

</html>