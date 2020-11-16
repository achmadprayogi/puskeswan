<br>

    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">



        <div class="row">

          <div class="col-md-6">



            <div class="card card-danger">

              <div class="card-header">

                <h3 class="card-title">Tambah Data Diagnosa</h3>

              </div>

             <form action="<?=site_url('diagnosa/proses')?>" method="post" class="form-horizontal">

                <div class="card-body">

                  <input type="hidden" name="id" value="<?=$row->diagnosa_id?>">

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">Kode</label>

                    <div class="col-sm-8">

                      <input type="text" name="kode" class="form-control" value="<?=$row->name?>" id="inputEmail3" placeholder="Kode">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">Name</label>

                    <div class="col-sm-8">

                      <input type="text" name="name" class="form-control" value="<?=$row->name?>" id="inputEmail3" placeholder="Name">

                    </div>

                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">Alternative</label>

                    <div class="col-sm-8">

                      <input type="text" name="alternative" class="form-control" value="<?=$row->name?>" id="inputEmail3" placeholder="Alternative">

                    </div>

                  </div>

                  </div>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">

                  <button type="submit" name="<?=$page?>" class="btn btn-info">Simpan</button>

                  <button type="submit" class="btn btn-default float-right">Batal</button>

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

 