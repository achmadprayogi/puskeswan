<br>

    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">



        <div class="row">

          <div class="col-md-6">



            <div class="card card-danger">

              <div class="card-header">

                <h3 class="card-title">Data Pemilik</h3>

              </div>

             <form action="<?=site_url('pemilik/proses')?>" method="post" class="form-horizontal">

                <div class="card-body">

                  <input type="hidden" name="id" value="<?=$row->pemilik_id?>">

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">NIK</label>

                    <div class="col-sm-8">

                      <input type="text" name="nik" class="form-control" value="<?=$row->nik?>" id="inputEmail3" placeholder="NIK">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Pemilik</label>

                    <div class="col-sm-8">

                      <input type="text" name="nama" class="form-control" value="<?=$row->nama?>" id="inputEmail3" placeholder="Nama pemilik">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">Alamat</label>

                    <div class="col-sm-8">

                      <input type="text" name="alamat" class="form-control" value="<?=$row->alamat?>" id="inputEmail3" placeholder="Alamat">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-4 col-form-label">Kota</label>

                    <div class="col-sm-8">

                     <select class="form-control select2bs4"  name="kota_id" id="kota">

                        <option value="">Pilih Kota</option>

                        <?php
                            foreach ($kota as $kta) {
                                ?>
                                <option <?php echo $kota_selected == $kta->kota_id ? 'selected="selected"' : '' ?> 
                                    value="<?php echo $kta->kota_id ?>"><?php echo $kta->nama_kota ?></option>
                                <?php
                            }
                            ?>

                             <!--  <?php

                            //  if(!empty($kota)){

                             //     foreach($kota as $kta){ 

                                //      echo '<option value="'.$kta['kota_id'].'">'.$kta['nama_kota'].'</option>';



                          //        }

                       //       }else{

                             //     echo '<option value="">Kota Tidak Teredia</option>';

                 //             }

                              ?> -->

                        </select>

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-4 col-form-label">Kecamatan</label>

                    <div class="col-sm-8">

                      <select class="form-control select2bs4"  name="kecamatan_id" id="kecamatan" style="width: 100%;">

                         <option value="" >- Pilih -</option>

                          <?php
                            foreach ($kecamatan as $kec) {
                                ?>
                                <!--di sini kita tambahkan class berisi id provinsi-->
                                <option <?php echo $kecamatan_selected == $kec->kota_id ? 'selected="selected"' : '' ?> 
                                    class="<?php echo $kec->kota_id ?>" value="<?php echo $kec->kecamatan_id ?>"><?php echo $kec->nama_kecamatan ?></option>
                                <?php
                            }
                            ?>
                         

                        </select>

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-4 col-form-label">Kelurahan</label>

                    <div class="col-sm-8">

                      <select class="form-control select2bs4"   name="kelurahan_id" id="kelurahan" style="width: 100%;" >

                           <option value="" >- Pilih -</option>

                             <?php
                            foreach ($kelurahan as $kel) {
                                ?>
                                <!--di sini kita tambahkan class berisi id kota-->
                                <option <?php echo $kelurahan_selected == $kel->kecamatan_id ? 'selected="selected"' : '' ?>  

                                    class="<?php echo $kel->kecamatan_id ?>" value="<?php echo $kel->kelurahan_id ?>"><?php echo $kel->nama_kelurahan ?></option>

                                <?php
                            }

                            ?>
                        </select>

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">Telepon</label>

                    <div class="col-sm-8">

                      <input type="text" name="telepon" class="form-control" value="<?=$row->telepon?>" placeholder="Telepon">

                    </div>

                  </div>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">

                  <button type="submit" name="<?=$page?>" class="btn btn-info">Simpan</button>

                  <button type="button"  onclick="history.go(-1);"  class="btn btn-default float-right">Batal</button>

                </div>

                <!-- /.card-footer -->

              </form>

              <!-- /.card-body -->

            </div>

          </div>

        </div>



      </div><!-- /.container-fluid -->

    </section>
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.chained.min.js') ?>"></script>
        
        <script>
            $("#kecamatan").chained("#kota"); // disini kita hubungkan kota dengan provinsi
            $("#kelurahan").chained("#kecamatan"); // disini kita hubungkan kecamatan dengan kota
        </script>

    <!-- /.content -->

 