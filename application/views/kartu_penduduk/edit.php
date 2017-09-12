   <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Edit Kartu Penduduk <a href="<?php echo base_url()?>index.php/kartu_penduduk" class="btn btn-info btn-sm" style="float:right"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></h2>
                        <?php
                          if($this->session->flashdata('sukses')){
                            echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a><strong>Success!</strong> Data has been updated. </div>';
                          }else if($this->session->flashdata('gagal')){
                             echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a><strong>Error!</strong> Data cant updated. </div>';
                          }
                        ?>
                        <form name="form1" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/kartu_penduduk/edit_function">
                          <div class="form-group <?php if(form_error('nik')){ echo 'has-error';}?>">
                            <label>NIK</label>
                            <input class="form-control" name="nik" placeholder="Nik" value="<?php echo $data_ktp[0]->nik;?>" readonly >
                            <span style="color:#a94442;"><?php echo form_error('nik'); ?></span>
                          </div>
                          <div class="form-group <?php if(form_error('nama')){ echo 'has-error';}?>">
                            <label>Nama</label>
                            <input class="form-control" name="nama" placeholder="Nama Lengkap"  value="<?php echo $data_ktp[0]->nama;?>">
                            <span style="color:#a94442;"><?php echo form_error('nama'); ?></span>
                          </div>
                          <div class="row">
                            <div class="col-xs-6">
                              <div class="form-group <?php if(form_error('tempat_lahir')){ echo 'has-error';}?>">
                                <label>Tempat Lahir</label>
                                <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $data_ktp[0]->tempat_lahir;?>" >
                                <span style="color:#a94442;"><?php echo form_error('tempat_lahir'); ?></span>
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div class="form-group <?php if(form_error('tanggal_lahir')){ echo 'has-error';}?>">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" name="tanggal_lahir" id="datepicker" placeholder="Tanggal Lahir" value="<?php echo $data_ktp[0]->tanggal_lahir;?>" >
                                <span style="color:#a94442;"><?php echo form_error('tanggal_lahir'); ?></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Jenis_kelamin</label>
                           <select class="form-control" name="jenis_kelamin">
                              <option value="0">Select</option>
                              <option value="laki-laki" <?php if($data_ktp[0]->jenis_kelamin=="laki-laki"){?> selected="selected" <?php }?>>Laki-laki</option>
                              <option value="perempuan" <?php if($data_ktp[0]->jenis_kelamin=="perempuan"){?> selected="selected" <?php }?>>Perempuan</option>
                           </select>

                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" cols="4"><?php echo $data_ktp[0]->alamat;?></textarea>
                          </div>
                          <div class="row">
                          <div class="col-xs-3">
                              <div class="form-group">
                                <label>RT</label>
                                <input class="form-control" name="rt" placeholder="RT" value="<?php echo $data_ktp[0]->rt;?>" >
                              </div>
                            </div>
                            <div class="col-xs-3">
                              <div class="form-group">
                                <label>RW</label>
                                <input class="form-control" name="rw" placeholder="RW" value="<?php echo $data_ktp[0]->rw;?>">
                              </div>
                            </div>
                            <div class="col-xs-3">
                              <div class="form-group">
                                <label>Desa/Kelurahan</label>
                                <input class="form-control" name="desa" placeholder="Desa/Kelurahan" value="<?php echo $data_ktp[0]->desa;?>">
                              </div>
                            </div>
                            <div class="col-xs-3">
                              <div class="form-group">
                                <label>Kecamatan</label>
                                <input class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?php echo $data_ktp[0]->kecamatan;?>" >
                              </div>
                            </div>
                          </div>
                          <div class="form-group <?php if(form_error('agama')){ echo 'has-error';}?>">
                            <label>Agama</label>
                            <select class="form-control" name="agama">
                              <option value="0">Select</option>
                              <option value="islam" <?php if($data_ktp[0]->agama=="islam"){?> selected="selected" <?php }?>>Islam</option>
                              <option value="hindu" <?php if($data_ktp[0]->agama=="hindu"){?> selected="selected" <?php }?>>Hindu</option>
                              <option value="budha" <?php if($data_ktp[0]->agama=="budha"){?> selected="selected" <?php }?>>Budha</option>
                              <option value="kristen" <?php if($data_ktp[0]->agama=="kristen"){?> selected="selected" <?php }?>>Kristen</option>
                              <option value="konguchu" <?php if($data_ktp[0]->agama=="konguchu"){?> selected="selected" <?php }?>>Konguchu</option>
                            </select>
                            <span style="color:#a94442;"><?php echo form_error('agama'); ?></span>
                          </div>
                          <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                              <option value="0">Select</option>
                              <option value="belum_kawin" <?php if($data_ktp[0]->status=="belum_kawin"){?> selected="selected" <?php }?>>Belum Kawin</option>
                              <option value="menikah" <?php if($data_ktp[0]->status=="menikah"){?> selected="selected" <?php }?>>Menikah</option>
                           </select>
                          </div>
                          <div class="form-group">
                            <label>Pekerjaan</label>
                            <input name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?php echo $data_ktp[0]->pekerjaan;?>">
                          </div>
                          <div class="form-group <?php if(form_error('berlaku_hingga')){ echo 'has-error';}?>">
                            <label>Berlaku Hingga</label>
                            <input name="berlaku_hingga" id="datepicker_berlaku" class="form-control" placeholder="Berlaku Hingga" value="<?php echo $data_ktp[0]->berlaku_hingga;?>">
                            <span style="color:#a94442;"><?php echo form_error('berlaku_hingga'); ?></span>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-info">Save Change</button>
                            <a href="<?php echo base_url()?>index.php/kartu_penduduk" class="btn btn-default">Cancel</a>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- /#page-content-wrapper -->