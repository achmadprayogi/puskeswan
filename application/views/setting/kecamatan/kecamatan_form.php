<br>

    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">



        <div class="row">

          <div class="col-md-6">



            <div class="card card-danger">

              <div class="card-header">

                <h3 class="card-title"><?=$page?> kecamatan</h3>

              </div>

             <form action="<?=site_url('kecamatan/proses')?>" method="post" class="form-horizontal">

                <div class="card-body">

                  <input type="hidden" name="id" value="<?=$row->kecamatan_id?>">

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">Kode kecamatan</label>

                    <div class="col-sm-8">

                      <input type="text" name="kode" class="form-control" value="<?=$row->kode?>" id="inputEmail3" placeholder="Kode kecamatan">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nama kecamatan</label>

                    <div class="col-sm-8">

                      <input type="text" name="nama_kecamatan" class="form-control" value="<?=$row->nama_kecamatan?>" id="inputEmail3" placeholder="Nama kecamatan">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-4 col-form-label">Kota</label>

                    <div class="col-sm-8">

                    <select class="form-control select2bs4"  name="kota_id" id="kota_id">

                        <option value="">Pilih Kota</option>

                              <?php foreach ($kota->result() as $key => $data) { ?>

                            <option value="<?=$data->kota_id?>"<?=$data->kota_id == $row->kota_id ? "selected" : null?>><?=$data->nama_kota?></option>

                         <?php }?>


                        </select>


                    </div>

                  </div>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">

                  <button type="submit" name="<?=$page?>" class="btn btn-info">Simpan</button>

                  <button type="button" onclick="history.go(-1);" class="btn btn-default float-right">Batal</button>

                </div>

                <!-- /.card-footer -->

              </form>

              <!-- /.card-body -->

            </div>

          </div>

        </div>



      </div><!-- /.container-fluid -->

    </section>

    <!-- /.content -->

 