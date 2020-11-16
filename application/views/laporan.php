<br>

<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Laporan Pelayanan Kesehatan Hewan</h3>   

              <a href="<?php echo base_url('laporan/export'); ?>" class="btn btn-info float-right" role="button">Cetak Laporan</a>
             <!--  <button type="button" id="tombol" onclick="Swal.fire('Hello','Yakin','success')">Tes</button>  -->
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Periksa</th>
                  <th>Nama Pemilik</th>
                  <th>Alamat</th>
                  <th>Kecamatan</th>
                  <th>Jenis Hewan</th>
                  <th>Jenis Kelamin</th>
                  <th>Berat Badan</th>
                  <th>Temperatur</th>
                  <th>Diagnosa</th>
                </tr>
                </thead>
                <tbody>
              <?php $no = 1;
                foreach($row->result() as $key => $data){

        
                
               ?> 

                <tr>
                  <td><?=$no++?></td>
                  <td><?=$data->tanggal_periksa?></td>
                  <td><?=$data->nama_pemilik?></td>
                  <td><?=$data->alamat?></td>
                  <td><?=$data->nama_kecamatan?></td>
                  <td><?=$data->spesies?></td>
                  <td><?=$data->jenis_kelamin?></td>
                  <td><?=$data->berat?> Kg</td>
                  <td><?=$data->temperatur?> °C</td>
                  <td><?=$data->diagnosa?></td>
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

    <div class="modal fade" id="modal-detail">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Pemeriksaan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" table-responsive>
              <table id="example" class="table table-bordered no-margin">
                  <tbody>
                    <tr>
                      <th style="">Nama Pemilik</th>
                      <td><span id="pemilik_id"></span></td>
                    </tr>
                    <tr>
                      <th style="">Nama Hewan</th>
                      <td><span id="pasien_id"></span></td>
                    </tr>
                    <tr>
                      <th style="">Spesies</th>
                      <td><span id="spesies"></span></td>
                    </tr>
                    <tr>
                      <th style="">Jenis Kelamin</th>
                      <td><span id="jenis_kelamin"></span></td>
                    </tr>
                    <tr>
                      <th style="">Makan</th>
                      <td><span id="makan"></span></td>
                    </tr>
                    <tr>
                      <th style="">Minum</th>
                      <td><span id="minum"></span></td>
                    </tr>
                    <tr>
                      <th style="">Muntah</th>
                      <td><span id="muntah"></span></td>
                    </tr>
                    <tr>
                      <th style="">Diare</th>
                      <td><span id="diare"></span></td>
                    </tr>
                    <tr>
                      <th style="">Vaksin</th>
                      <td><span id="vaksin"></span></td>
                    </tr>
                    <tr>
                      <th style="">Obat Cacing</th>
                      <td><span id="obat_cacing"></span></td>
                    </tr>
                    <tr>
                      <th style="">Lain-Lain</th>
                      <td><span id="lain_lain"></span></td>
                    </tr>
                    <tr>
                      <th style="">Berat Badan</th>
                      <td><span id="berat"></span></td>
                    </tr>
                    <tr>
                      <th style="">Temperatur</th>
                      <td><span id="temperatur"></span></td>
                    </tr>
                    <tr>
                      <th style="">Pulsus</th>
                      <td><span id="pulsus"></span></td>
                    </tr>
                    <tr>
                      <th style="">Respirasi</th>
                      <td><span id="respirasi"></span></td>
                    </tr>
                    <tr>
                      <th style="">Mata</th>
                      <td><span id="mata"></span></td>
                    </tr>
                    <tr>
                      <th style="">Hidung</th>
                      <td><span id="hidung"></span></td>
                    </tr>
                    <tr>
                      <th style="">Mulut</th>
                      <td><span id="mulut"></span></td>
                    </tr>
                    <tr>
                      <th style="">Telinga</th>
                      <td><span id="telinga"></span></td>
                    </tr>
                    <tr>
                      <th style="">Kulit</th>
                      <td><span id="kulit"></span></td>
                    </tr>
                    <tr>
                      <th style="">Ekstrimitas</th>
                      <td><span id="ekstrimitas"></span></td>
                    </tr>
                    <tr>
                      <th style="">Rongga Dada</th>
                      <td><span id="rongga_dada"></span></td>
                    </tr>
                    <tr>
                      <th style="">Rongga Perut</th>
                      <td><span id="rongga_perut"></span></td>
                    </tr>
                    <tr>
                      <th style="">Kelenjar</th>
                      <td><span id="kelenjar"></span></td>
                    </tr>
                    <tr>
                      <th style="">Dehidrasi</th>
                      <td><span id="dehidrasi"></span></td>
                    </tr>
                    <tr>
                      <th style="">Diagnosa</th>
                      <td><span id="diagnosa"></span></td>
                    </tr>
                    <tr>
                      <th style="">Prognosa</th>
                      <td><span id="prognosa"></span></td>
                    </tr>
                    <tr>
                      <th style="">Obat</th>
                      <td><span id="obat"></span></td>
                    </tr>
                   
                    <tr>
                      <th style="">Tindakan</th>
                      <td><span id="tindakan"></span></td>
                    </tr>
                    <tr>
                      <th style="">Keterangan</th>
                      <td><span id="keterangan"></span></td>
                    </tr>
                    <tr>
                      <th style="">Obat Resep</th>
                      <td><span id="obat_resep"></span></td>
                    </tr>
                    <tr>
                      <th style="">Jumlah Resep</th>
                      <td><span id="jumlah_resep"></span></td>
                    </tr>
                    <tr>
                      <th style="">Dokter</th>
                      <td><span id="dokter"></span></td>
                    </tr>
                  </tbody>
              </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
