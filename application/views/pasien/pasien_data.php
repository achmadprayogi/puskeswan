<br>
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar pasien</h3>    
              <a href="<?=site_url('pasien/add')?>" class="btn btn-info float-right" role="button">Tambah Data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Spesies</th>
                  <th>Jenis Kelamin</th>
                  <th>Warna</th>
                  <th>Tanggal Lahir, Umur</th>
                  <th>Pemilik</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach($row->result() as $key => $data){?>   
                <tr>
                  <td><?=$no++?></td>
                  <td><?=$data->nama?></td>
                  <td><?=$data->nama_spesies?></td>
                  <td><?=$data->jenis_kelamin?></td>
                  <td><?=$data->warna?></td>
                  <td><?=$data->tanggal_lahir?><br><?=$data->umur?></td>
                  <td><?=$data->nama_pemilik?></td>
                  <td><?=$data->alamat?></td>
                  <td><?=$data->telepon?></td>
                  <td>
                      <a href="<?=site_url('pasien/edit/'.$data->pasien_id)?>" class="btn btn-primary btn-xs"><i class="fa fa-pen" ></i> Edit</a>
                      <a href="<?=site_url('pasien/del/'.$data->pasien_id)?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fa fa-trash" ></i> Hapus</a>
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
      <!-- <?php
       $date =  new DateTime ("1995-03-05");
       $date2 = new DateTime();
       
       echo $date->diff($date2)->format("%y Tahun %m Bulan");
      ?> -->
     
      <!-- /.row -->
    </section>