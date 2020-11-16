<br>
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar kecamatan</h3>    
              <a href="<?=site_url('kecamatan/add')?>" class="btn btn-info float-right" role="button">Tambah Data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10%">No</th>
                   <th width="20%">Kode</th>
                  <th width="20%">Nama kecamatan</th>
                  <th width="20%">Nama kota</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach($row->result() as $key => $data){?>   
                <tr>
                  <td><?=$no++?></td>
                   <td><?=$data->kode_kecamatan?></td>
                  <td><?=$data->nama_kecamatan?></td>
                  <td><?=$data->nama_kota?></td>
                  <td>
                      <a href="<?=site_url('kecamatan/edit/'.$data->kecamatan_id)?>" class="btn btn-primary btn-xs"><i class="fa fa-pen" ></i> Edit</a>
                      <a href="<?=site_url('kecamatan/del/'.$data->kecamatan_id)?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fa fa-trash" ></i> Delete</a>
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