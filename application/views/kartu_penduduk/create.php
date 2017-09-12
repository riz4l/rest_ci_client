   <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Add Kartu Penduduk <a href="<?php echo base_url()?>index.php/kartu_penduduk" class="btn btn-info btn-sm" style="float:right"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></h2>
                        <?php
                          if($this->session->flashdata('sukses')){
                            echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a><strong>Success!</strong> Data has been saved. </div>';
                          }else if($this->session->flashdata('gagal')){
                             echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a><strong>Error!</strong> Data cant saved. </div>';
                          }
                        ?>
                        <form name="form1" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/kartu_penduduk/create_function">
                          <div class="form-group <?php if(form_error('nik')){ echo 'has-error';}?>">
                            <label>NIK</label>
                            <input class="form-control" name="nik" placeholder="Nik" >
                            <span style="color:#a94442;"><?php echo form_error('nik'); ?></span>
                          </div>
                          <div class="form-group <?php if(form_error('nama')){ echo 'has-error';}?>">
                            <label>Nama</label>
                            <input class="form-control" name="nama" placeholder="Nama Lengkap" >
                            <span style="color:#a94442;"><?php echo form_error('nama'); ?></span>
                          </div>
                          <div class="row">
                            <div class="col-xs-6">
                              <div class="form-group <?php if(form_error('tempat_lahir')){ echo 'has-error';}?>">
                                <label>Tempat Lahir</label>
                                <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" >
                                <span style="color:#a94442;"><?php echo form_error('tempat_lahir'); ?></span>
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="form-group <?php if(form_error('tanggal_lahir')){ echo 'has-error';}?>">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" name="tanggal_lahir" id="datepicker" placeholder="Tanggal Lahir" >
                                <span style="color:#a94442;"><?php echo form_error('tanggal_lahir'); ?></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Jenis_kelamin</label>
                           <select class="form-control" name="jenis_kelamin">
                              <option value="0">Select</option>
                              <option value="laki-laki">Laki-laki</option>
                              <option value="perempuan">Perempuan</option>
                           </select>

                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" cols="4"></textarea>
                          </div>
                          <div class="row">
                          <div class="col-xs-3">
                              <div class="form-group">
                                <label>RT</label>
                                <input class="form-control" name="rt" placeholder="RT" >
                              </div>
                            </div>
                            <div class="col-xs-3">
                              <div class="form-group">
                                <label>RW</label>
                                <input class="form-control" name="rw" placeholder="RW" >
                              </div>
                            </div>
                            <div class="col-xs-3">
                              <div class="form-group">
                                <label>Desa/Kelurahan</label>
                                <input class="form-control" name="desa" placeholder="Desa/Kelurahan" >
                              </div>
                            </div>
                            <div class="col-xs-3">
                              <div class="form-group">
                                <label>Kecamatan</label>
                                <input class="form-control" name="kecamatan" placeholder="Kecamatan" >
                              </div>
                            </div>
                          </div>
                          <div class="form-group <?php if(form_error('agama')){ echo 'has-error';}?>">
                            <label>Agama</label>
                            <select class="form-control" name="agama">
                              <option value="0">Select</option>
                              <option value="islam">Islam</option>
                              <option value="hindu">Hindu</option>
                              <option value="budha">Budha</option>
                              <option value="kristen">Kristen</option>
                              <option value="konguchu">Konguchu</option>
                            </select>
                            <span style="color:#a94442;"><?php echo form_error('agama'); ?></span>
                          </div>
                          <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                              <option value="0">Select</option>
                              <option value="belum_kawin">Belum Kawin</option>
                              <option value="menikah">Menikah</option>
                           </select>
                          </div>
                          <div class="form-group">
                            <label>Pekerjaan</label>
                            <input name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                          </div>
                          <div class="form-group <?php if(form_error('berlaku_hingga')){ echo 'has-error';}?>">
                            <label>Berlaku Hingga</label>
                            <input name="berlaku_hingga" id="datepicker_berlaku" class="form-control" placeholder="Berlaku Hingga">
                            <span style="color:#a94442;"><?php echo form_error('berlaku_hingga'); ?></span>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-info">Save</button>
                            <a href="<?php echo base_url()?>index.php/kartu_penduduk" class="btn btn-default">Cancel</a>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- /#page-content-wrapper -->