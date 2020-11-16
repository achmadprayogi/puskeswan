<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-6">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Edit Data Kota</h3>
              </div>
             <form action="" method="post" class="form-horizontal">
                <div class="card-body">
                  <input type="hidden" name="kota_id" value="<?=$row->kota_id?>">
                  <div class="form-group row">
                    <label for="kode" class="col-sm-4 col-form-label">Kode</label>
                    <div class="col-sm-8">
                  <input type="text" class="form-control" name="kode" value="<?=$this->input->post('kode') ? $this->input->post('kode') : $row->kode?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama Kota</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nama" value="<?=$this->input->post('nama') ? $this->input->post('nama') : $row->nama_kota?>" id="nama" placeholder="Nama Kota">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <button type="submit" class="btn btn-default float-right">Batal</button>
                </div>
              </form>
            </div>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 