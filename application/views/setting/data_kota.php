<br>
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Kota</h3>    
              <a href="<?=site_url('setting/add_kota')?>" class="btn btn-info float-right" role="button">Tambah Data</a>
            </div>
            

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10%">No</th>
                  <th width="20%">Kode</th>
                  <th width="40%">Kota</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach($row->result() as $key => $data){?>   
                <tr>
                  <td><?=$no++?></td>
                  <td><?=$data->kode?></td>
                  <td><?=$data->nama_kota?></td>
                  <td>
                    
                    <form action="<?=site_url('setting/del_kota')?>" method="post">
                      <a href="<?=site_url('setting/edit_kota/'.$data->kota_id)?>" class="btn btn-primary btn-xs"><i class="fa fa-pen" ></i> Edit</a>
                      <input type="hidden" value="<?=$data->kota_id?>" name="kota_id">
                      <button class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fa fa-trash"> Delete</i></button>
                  </form>
                  </td>
                </tr>
                <?php
              } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>