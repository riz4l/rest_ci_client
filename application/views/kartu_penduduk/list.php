   <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Data Kartu Penduduk <a href="<?php echo base_url()?>index.php/kartu_penduduk/create" class="btn btn-info btn-sm" style="float:right"><span class="glyphicon glyphicon-plus"></span> Add</a></h2>
                        <?php
                          if($this->session->flashdata('sukses')){
                            echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a><strong>Success!</strong> Data has been delete. </div>';
                          }else if($this->session->flashdata('gagal')){
                             echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a><strong>Error!</strong> Data cant delete. </div>';
                          }
                        ?>
                        <table class="table table-hover table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIK</th>
                              <th>Nama</th>
                              <th>Tempat Lahir</th>
                              <th>Tanggal Lahir</th>
                              <th>Jenis Kelamin</th>
                              <th width="15%">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                                $no = 0;
                                foreach($data_ktp as $ktp){
                                $no++;
                            ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><a href="#myModal<?php echo $no; ?>" data-toggle="modal" title="Click For Detail"><?php echo $ktp->nik;?></a></td>
                              <td><?php echo $ktp->nama;?></td>
                              <td><?php echo $ktp->tempat_lahir;?></td>
                              <td><?php echo $ktp->tanggal_lahir;?></td>
                              <td><?php echo $ktp->jenis_kelamin;?></td>
                              <td>
                                <a href="<?php echo base_url()?>index.php/kartu_penduduk/edit/<?php echo $ktp->nik;?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                <a href="<?php echo base_url()?>index.php/kartu_penduduk/delete/<?php echo $ktp->nik;?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ?');"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                              </td>
                            </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $no;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Detail Data Kartu Penduduk</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>Nik : <?php echo $ktp->nik;?></p>
                                        <p>Nama : <?php echo $ktp->nama;?></p>
                                        <p>Tempat Lahir : <?php echo $ktp->tempat_lahir;?></p>
                                        <p>Tanggal Lahir : <?php echo $ktp->tanggal_lahir;?></p>
                                        <p>Jenis Kelamin : <?php echo $ktp->jenis_kelamin;?></p>
                                        <p>Alamat : <?php echo $ktp->alamat;?> RT <?php echo $ktp->rt?>/RW <?php echo $ktp->rw?>, Desa <?php echo $ktp->desa;?>, Kecamatan <?php echo $ktp->kecamatan;?></p>
                                        <p>Agama : <?php echo $ktp->agama;?></p>
                                        <p>Status : <?php echo $ktp->status;?></p>
                                        <p>Pekerjaan : <?php echo $ktp->pekerjaan;?></p>
                                        <p>Berlaku Hingga : <?php echo $ktp->berlaku_hingga;?></p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            <?php } ?>
                          </tbody>
                        </table>
                        <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- /#page-content-wrapper -->