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
                    <h1 class="h3 mb-2 text-gray-800 text-center">Form Data ATK</h1>
                    <p class="mb-4 text-center">Pengecekan data secara rutin akan terciptanya konsistensi data yang baik</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-left">Form Tambah Data ATK </h6>
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
                                      <?php echo form_open_multipart('atk/store'); ?>
                                      <div class="card">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Kode Barang');
                                                $kodebarang = [
                                                  'type'  => 'text',
                                                  'name'  => 'kode_barang',
                                                  'id'    => 'kode_barang',
                                                  'value' => $inputs['kode_barang'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Kode Barang'
                                                ];
                                                echo form_input($kodebarang);
                                                ?>
                                              </div>

                                              <div class="form-group">
                                                <?php
                                                echo form_label('nama barang');
                                                $namabarang = [
                                                  'type'  => 'text',
                                                  'name'  => 'nama_barang',
                                                  'id'    => 'nama_barang',
                                                  'value' => $inputs['nama_barang'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Nama barang'
                                                ];
                                                echo form_input($namabarang);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Jenis Barang', 'jenis_barang');
                                                echo form_dropdown('jenis_barang', ['' => 'Pilih',
                                                  'Alat Tulis'  => 'Alat Tulis', 
                                                  'Perekat'     => 'Perekat',
                                                  'Kertas HVS'  => 'Kertas HVS',
                                                  'Ordner'      => 'Ordner',
                                                  'Amplop'      => 'Amplop',
                                                  'Stapler'     => 'Stapler',
                                                  'Staples'     => 'Staples',
                                                  'Memo'        => 'Memo',
                                                  'Cutter'      => 'Cutter',
                                                  'Box'         => 'Box'

                                                
                                                  ],
                                                  $inputs['jenis_barang'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Stock Awal');
                                                $stock_awal = [
                                                  'type'  => 'number',
                                                  'name'  => 'stock_awal',
                                                  'id'    => 'stock_awal',
                                                  'value' => $inputs['stock_awal'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Stock Awal Barang'
                                                ];
                                                echo form_input($stock_awal);
                                                ?>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Stock Masuk');
                                                $stock_masuk = [
                                                  'type'  => 'number',
                                                  'name'  => 'stock_masuk',
                                                  'id'    => 'stock_masuk',
                                                  'value' => $inputs['stock_masuk'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Stock Masuk Barang'
                                                ];
                                                echo form_input($stock_masuk);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Stock Keluar');
                                                $stock_keluar = [
                                                  'type'  => 'number',
                                                  'name'  => 'stock_keluar',
                                                  'id'    => 'stock_keluar',
                                                  'value' => $inputs['stock_keluar'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Stock Keluar Barang'
                                                ];
                                                echo form_input($stock_keluar);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Stock Akhir');
                                                $stock_akhir = [
                                                  'type'  => 'number',
                                                  'name'  => 'stock_akhir',
                                                  'id'    => 'stock_akhir',
                                                  'value' => $inputs['stock_akhir'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Stock Akhir Barang'
                                                ];
                                                echo form_input($stock_akhir);
                                                ?>
                                              </div>
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
                                        <a href="<?php echo base_url('atk'); ?>" class="btn btn-outline-info float-left"> <i class="nav-icon fas fa-backward"></i> Back</a>
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