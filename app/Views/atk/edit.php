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
                            <h6 class="m-0 font-weight-bold text-primary text-left">Form Edit Data ATK </h6>
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
                                      <div class="card">
                                        <?php echo form_open_multipart('atk/update/' . $atk['atk_id']); ?>
                                        <div class="card-body">
                                          <?php echo form_hidden('atk_id', $atk['atk_id']); ?>
                                          <div class="row">
                                            <div class="col-md-6">

                                              <div class="form-group">
                                                <?php echo form_label('Kode Barang', 'kode_barang'); ?>
                                                <?php echo form_input('kode_barang', $atk['kode_barang'],

                                                 ['class' => 'form-control', 'placeholder' => 'atk Document']
                                                 
                                                 ); ?>
                                              </div>
                                              <div class="form-group">
                                                <?php echo form_label('Nama Barang', 'nama_barang'); ?>
                                                <?php echo form_input('nama_barang', $atk['nama_barang'], 

                                                ['class' => 'form-control', 'placeholder' => 'atk kode']);

                                                 ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Jenis Barang', 'jenis_barang');
                                                echo form_dropdown('jenis_barang', [
                                                    
                                                    ''          => 'Pilih', 
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

                                                ], $inputs['jenis_barang'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php echo form_label('Stock Awal', 'stock_awal'); ?>
                                                <?php echo form_input('stock_awal', $atk['stock_awal'], 

                                                ['class' => 'form-control']);

                                                 ?>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <?php echo form_label('Stock Masuk', 'stock_masuk'); ?>
                                                <?php echo form_input('stock_masuk', $atk['stock_masuk'], 

                                                ['class' => 'form-control']);

                                                 ?>
                                              </div>

                                               <div class="form-group">
                                                <?php echo form_label('Stock Keluar', 'stock_keluar'); ?>
                                                <?php echo form_input('stock_keluar', $atk['stock_keluar'], 

                                                ['class' => 'form-control']);

                                                 ?>
                                              </div>
                                               <div class="form-group">
                                                <?php echo form_label('Stock Akhir', 'stock_akhir'); ?>
                                                <?php echo form_input('stock_akhir', $atk['stock_akhir'], 

                                                ['class' => 'form-control']);

                                                 ?>
                                              </div>
                                               <div class="form-group">
                                                 <?php echo form_label('Staff Verified', 'karyawan'); ?>
                                                 <?php echo form_dropdown('karyawan_id', $karyawan, $atk['karyawan_id'], ['class' => 'form-control']); ?>
                                                </div>

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-footer">
                                        <a href="<?php echo base_url('atk'); ?>" class="btn btn-outline-info"> <i class="nav-icon fas fa-backward"></i> Back</a>
                                        <button type="submit" class="btn btn-primary float-right"> <i class="nav-icon fas fa-save"></i> Update Data</button>
                                      </div>
                                      <?php echo form_close(); ?>
                                    </div>
                                  </div> 
                              
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