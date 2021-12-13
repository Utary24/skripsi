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
                    <h1 class="h3 mb-2 text-gray-800 text-center">Form Data Document Masuk</h1>
                    <p class="mb-4 text-center">Pengecekan data secara rutin akan terciptanya konsistensi data yang baik</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-left">Form Tambah Data Document Masuk </h6>
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
                                      <?php echo form_open_multipart('documentmasuk/store'); ?>
                                      <div class="card">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Kode Dokumen Masuk');
                                                $kode_dokumen = [
                                                  'type'  => 'text',
                                                  'name'  => 'kode_dokumen',
                                                  'id'    => 'kode_dokumen',
                                                  'value' => $inputs['kode_dokumen'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Kode Document Masuk'
                                                ];
                                                echo form_input($kode_dokumen);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Document Type ', 'document_type');
                                                echo form_dropdown('document_type', ['' => 'Pilih Document Type', 'BRIDGE' => 'BRIDGE', 'ALIGNMENT' => 'ALIGNMENT', 'CULVERT' => 'CULVERT', 'TUNNEL NO.3' => 'TUNNEL NO.3', 'SUBGRADE' => 'SUBGRADE'], $inputs['document_type'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Kode Dokumen Number');
                                                $dokumen_number = [
                                                  'type'  => 'text',
                                                  'name'  => 'document_number',
                                                  'id'    => 'document_number',
                                                  'value' => $inputs['document_number'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Kode Document Number'
                                                ];
                                                echo form_input($dokumen_number);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Judul Dokumen');
                                                $dokumen_number = [
                                                  'type'  => 'text',
                                                  'name'  => 'judul_dokumen',
                                                  'id'    => 'judul_dokumen',
                                                  'value' => $inputs['judul_dokumen'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Masukan Judul Dokumen'
                                                ];
                                                echo form_input($dokumen_number);
                                                ?>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Bahasa', 'bahasa');
                                                echo form_dropdown('bahasa', ['' => 'Pilih Bahasa', 'ENGLISH & CHINESE' => 'ENGLISH & CHINESE', 'ENGLISH' => 'ENGLISH', 'CHINESE' => 'CHINESE'], $inputs['bahasa'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Status Document Masuk', 'status_document');
                                                echo form_dropdown('status_document', ['' => 'Pilih Status Document', 'Masuk' => 'Masuk', 'Keluar' => 'Keluar'], $inputs['status_document'], ['class' => 'form-control']);
                                                ?>
                                              </div>
                                              <div class="form-group">
                                                <?php
                                                echo form_label('Tanggal Masuk Document');
                                                $tanggalmasuk = [
                                                  'type'  => 'date',
                                                  'name'  => 'tanggal_masuk',
                                                  'id'    => 'tanggal_masuk',
                                                  'value' => $inputs['tanggal_masuk'],
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Tanggal Masuk Document'
                                                ];
                                                echo form_input($tanggalmasuk);
                                                ?>
                                              </div>
                                               <div class="form-group">
                                                <?php
                                                echo form_label('Vendor', 'vendor');
                                                echo form_dropdown('vendor', ['' => 'Pilih Vendor', 'KJB' => 'KJB', 'HSRCC' => 'HSRCC'], $inputs['vendor'], ['class' => 'form-control']);
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
                                        <a href="<?php echo base_url('documentmasuk'); ?>" class="btn btn-outline-info float-left"> <i class="nav-icon fas fa-backward"></i> Back</a>
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