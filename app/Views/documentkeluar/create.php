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
                    <h1 class="h3 mb-2 text-gray-800 text-center">Form Data Document Keluar</h1>
                    <p class="mb-4 text-center">Pengecekan data secara rutin akan terciptanya konsistensi data yang baik</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-left">Form Tambah Data Document Keluar </h6>
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
                                      <?php echo form_open_multipart('documentkeluar/store'); ?>
                                      <div class="card">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-6">

                                              <div class="form-group">
                                                <?php
                                                echo form_label('Kode Dokumen');
                                                $nama = [
                                                  'type'  => 'text',
                                                  'name'  => 'kode_dokumen',
                                                  'id'    => 'kode_dokumen',
                                                  'value' => $inputs['kode_dokumen'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Kode Dokumen'
                                                ];
                                                echo form_input($nama);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Document Type', 'document_type');
                                                echo form_dropdown('document_type', [
                                                  ''            => 'Pilih', 
                                                  'BRIDGE'      => 'BRIDGE',
                                                  'ALIGNMENT'   => 'ALIGNMENT',
                                                  'CULVERT'     => 'CULVERT',
                                                  'TUNNEL NO.3' => 'TUNNEL NO.3',
                                                  'SUBGRADE'    => 'SUBGRADE'
                                                
                                                ], $inputs['document_type'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Document Number');
                                                $documentNumber = [
                                                  'type'  => 'text',
                                                  'name'  => 'document_number',
                                                  'id'    => 'document_number',
                                                  'value' => $inputs['document_number'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Document Number'
                                                ];
                                                echo form_input($documentNumber);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Judul Dokumen');
                                                $judulDokumen = [
                                                  'type'  => 'text',
                                                  'name'  => 'judul_dokumen',
                                                  'id'    => 'judul_dokumen',
                                                  'value' => $inputs['judul_dokumen'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Judul Dokumen'
                                                ];
                                                echo form_input($judulDokumen);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Nomer Box Document');
                                                $nama = [
                                                  'type'  => 'text',
                                                  'name'  => 'nomer_box',
                                                  'id'    => 'nomer_box',
                                                  'value' => $inputs['nomer_box'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Nomer Box Document'
                                                ];
                                                echo form_input($nama);
                                                ?>
                                              </div>
                                                <div class="form-group">
                                                <?php
                                                echo form_label('Bahasa Document', 'bahasa');
                                                echo form_dropdown('bahasa', [
                                                  ''                       => 'Pilih', 
                                                  'ENGLISH & CHINESE'      => 'ENGLISH & CHINESE',
                                                  'ENGLISH'                => 'ENGLISH',
                                                  'CHINESE'                => 'CHINESE'
                                                ], $inputs['bahasa'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Status Document', 'status_document');
                                                echo form_dropdown('status_document', [
                                                  '' => 'Pilih', 
                                                  'Masuk' => 'Masuk', 
                                                  'Keluar' => 'Keluar'], 
                                                  $inputs['status_document'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label(' Jumlah Isi Document');
                                                $nama = [
                                                  'type'  => 'text',
                                                  'name'  => 'isi_box',
                                                  'id'    => 'isi_box',
                                                  'value' => $inputs['isi_box'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Jumlah Isi Dari Box Document'
                                                ];
                                                echo form_input($nama);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Vendor', 'vendor');
                                                echo form_dropdown('vendor', [
                                                  '' => 'Pilih', 
                                                  'KCIC' => 'KCIC', 
                                                  'CREC' => 'CREC',
                                                  'CRDC' => 'CRDC',
                                                  'CDJO' => 'CDJO'
                                                ], $inputs['vendor'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Tanggal Keluar Document');
                                                $tanggal_keluar = [
                                                  'type'  => 'date',
                                                  'name'  => 'tanggal_keluar',
                                                  'id'    => 'tanggal_keluar',
                                                  'value' => $inputs['tanggal_keluar'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan tanggal keluar Document'
                                                ];
                                                echo form_input($tanggal_keluar);
                                                ?>
                                              </div>
                                               <div class="form-group">
                                                <?php
                                                echo form_label('Approved', 'approved');
                                                echo form_dropdown('approved', $karyawan, $inputs['approved'], ['class' => 'form-control']);
                                                ?>
                                              </div> 
                                               <div class="form-group">
                                                <?php
                                                echo form_label('Jabatan ', 'jabatan');
                                                echo form_dropdown('jabatan', [
                                                  ''               => 'Pilih', 
                                                  'MANAGER'        => 'MANAGER',
                                                  'STAFF'          => 'STAFF',
                                                  'TRANSLATOR'     => 'TRANSLATOR',
                                                
                                                ], $inputs['jabatan'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              
                                            </div>
                                            <div class="col-md-12">
                                             <div class="form-group">
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
                                        <a href="<?php echo base_url('documentkeluar'); ?>" class="btn btn-outline-info float-left"> <i class="nav-icon fas fa-backward"></i> Back</a>
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