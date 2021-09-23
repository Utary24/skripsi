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
                    <h1 class="h3 mb-2 text-gray-800 text-center">Form Data karyawan</h1>
                    <p class="mb-4 text-center">Pengecekan data secara rutin akan terciptanya konsistensi data yang baik</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-left">Form Tambah Data karyawan </h6>
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
                                      <?php echo form_open_multipart('karyawan/store'); ?>
                                      <div class="card">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Nama Karyawan');
                                                $nama_karyawan = [
                                                  'type'        => 'text',
                                                  'name'        => 'nama_karyawan',
                                                  'id'          => 'nama_karyawan',
                                                  'value'       => $inputs['nama_karyawan'],
                                                  'class'       => 'form-control',
                                                  'placeholder' => 'Masukan Nama Karyawan'
                                                ];
                                                echo form_input($nama_karyawan);
                                                ?>
                                              </div>

                                              <div class="form-group">
                                                <?php
                                                echo form_label('Divisi Karyawan');
                                                $namabarang = [
                                                  'type'        => 'text',
                                                  'name'        => 'divisi',
                                                  'id'          => 'divisi',
                                                  'value'       => $inputs['divisi'],
                                                  'class'       => 'form-control',
                                                  'placeholder' => 'Masukan Divisi Karyawan'
                                                ];
                                                echo form_input($namabarang);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Jabatan karyawan', 'jabatan');
                                                echo form_dropdown('jabatan', [

                                                  ''                      => 'Pilih',
                                                  'Manager'               => 'Manager', 
                                                  'Translator'            => 'Translator',
                                                  'Staff Engginer'        => 'Staff Engginer',
                                                  'General Affair'        => 'General Affair',
                                                  'HC'                    => 'HC',
                                                  
                                                  ],
                                                  $inputs['status'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Status karyawan', 'status');
                                                echo form_dropdown('status', [

                                                  ''           => 'Pilih',
                                                  'AKTIF'      => 'AKTIF', 
                                                  'OFF'        => 'OFF',

                                                  ],
                                                  $inputs['status'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Tanggal Masuk Karyawan');
                                                $stock_awal = [
                                                  'type'  => 'date',
                                                  'name'  => 'tanggalmasuk',
                                                  'id'    => 'tanggalmasuk',
                                                  'value' => $inputs['tanggalmasuk'],
                                                  'class' => 'form-control'                                                ];
                                                echo form_input($stock_awal);
                                                ?>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-footer">
                                        <a href="<?php echo base_url('karyawan'); ?>" class="btn btn-outline-info float-left"> <i class="nav-icon fas fa-backward"></i> Back</a>
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