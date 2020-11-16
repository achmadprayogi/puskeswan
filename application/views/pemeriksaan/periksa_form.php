<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-8">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Data Periksa</h3>
              </div>
              <?php echo validation_errors(); ?>
             <form action="" method="post" class="form-horizontal" id="formField">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kode" class="col-sm-3 col-form-label">Tanggal Periksa</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="tanggal_periksa" id="tanggal_periksa" value="<?php ini_set('date.timezone', 'Asia/Jakarta');
                    echo date('Y-m-d H:i:s'); ?>" placeholder="Kode">
                    </div>
                  </div>
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Filter Pemilik</label>
                    <div class="col-sm-3">
                      <select class="form-control select2bs4"  name="kota_id" id="kota_id">
                         <option value="">-Pilih Kota-</option>
                      
                              <?php foreach($kota as $kta):?>
                              
                              <option value="<?=$kta['kota_id'];?>"><?= $kta['nama_kota'];?></option>
                              
                              <?php endforeach;?>
                        </select>
                   
                    </div>
                    <div class="col-sm-3">
                
                        <select class="form-control select2bs4"  name="kecamatan_id" id="kecamatan_id" style="width: 100%;">
                         <option value=""  selected>- Pilih -</option>
                         
                        </select>
                   
                    </div>
                    <div class="col-sm-3">
                
                        <select class="form-control select2bs4"   name="kelurahan_id" id="kelurahan_id" style="width: 100%;" >
                           <option value="" selected>- Pilih -</option>
                         
                            
                        </select>
                   
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pemilik_id" class="col-sm-3 col-form-label">Nama Pemilik</label>
                    <div class="col-sm-6">
                
                       <select class="form-control select2bs4" name="pemilik_id" id="pemilik_id" style="width: 100%;">
                       <option value="" disabled selected>- Pilih -</option>
                          
                        </select>                   
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                     <!--  <select class="form-control select2bs4" type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"></select>  -->
                      <input type="text" id="alamat" readonly class="form-control-plaintext" value="" name="alamat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Telepon</label>
                    <div class="col-sm-9">
                     <!--  <select class="form-control select2bs4" type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"></select>  -->
                      <input type="text" id="telepon" readonly class="form-control-plaintext" value="" name="telepon">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pasien" class="col-sm-3 col-form-label">Pasien</label>
                    <div class="col-sm-3">
                        <select class="form-control select2bs4" name="pasien_id" id="pasien_id" style="width: 100%;">
                          
                        </select>
                   
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="spesies" class="col-sm-3 col-form-label">Spesies</label>
                    <div class="col-sm-9">
                      <!-- <select class="form-control select2bs4" name="spesies" id="spesies" readonly="readonly" style="width: 100%;"></select> -->
                   <input type="text" class="form-control-plaintext" readonly value="" name="spesies" id="spesies" >
            
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-3">
                         <input type="text" class="form-control" readonly value="" name="tanggal_lahir" id="tanggal_lahir">
                    </div>
  					<label for="umur" class="col-sm-1 col-form-label">Umur</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" readonly value="" name="umur" id="umur">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="warna" class="col-sm-3 col-form-label">Warna</label>
                    <div class="col-sm-9">
                      <!--  <select class="form-control select2bs4" name="warna" id="warna" readonly style="width: 100%;">
                          
                        </select> -->
                        <input type="text" class="form-control-plaintext" readonly value="" name="warna" id="warna" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                       <!-- <select class="form-control select2bs4" name="jenis_kelamin" id="jenis_kelamin" readonly style="width: 100%;">
                          
                        </select> -->
                        <input type="text" class="form-control-plaintext" readonly value="" name="jenis_kelamin" id="jenis_kelamin" >
                    </div>
                  </div>

                 <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Anamnesa</h3>
                </div>
                 <div class="card-body">
                <div class="row">
                  <div class="col-lg-10">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Makan</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('makan'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="makan" id="makan" value="Normal" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Minum</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('minum'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="minum" id="minum" value="Normal" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Muntah</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('muntah'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Tidak';}">
                        </span>
                      </div>
                      <input type="text" id="muntah" name="muntah" value="Tidak" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Diare</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('diare'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Tidak';}">
                        </span>
                      </div>
                     
                      <input type="text" id="diare" name="diare" value="Tidak" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Vaksin</label>
                    <div class="col-sm-9">
                     <div class="input-group">                      
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('vaksin'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Sudah';}">
                        </span>
                      </div>
                     
                      <input type="text" id="vaksin" name="vaksin" value="Sudah" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Obat Cacing</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                         <input type="checkbox" onclick="var input = document.getElementById('obat_cacing'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Sudah';}">
                        </span>
                      </div>
                      <input type="text" id="obat_cacing" name="obat_cacing" value="Sudah" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lain_lain" class="col-sm-3 col-form-label">Lain-Lain</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="lain_lain"  id="lain_lain" placeholder="Lain-Lain">
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              </div>

              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Pemeriksaan</h3>
                </div>
                 <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                  <div class="form-group row">
                    <label for="berat" class="col-sm-3 col-form-label">Berat Badan (Kg)</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="berat" id="berat" placeholder="Berat Badan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="temperatur" class="col-sm-3 col-form-label">Temperatur (°C)</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="temperatur" id="temperatur" placeholder="Temperatur">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pulsus" class="col-sm-3 col-form-label">Pulsus (Denyut/Menit)</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="pulsus" id="pulsus" placeholder="Pulsus">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="respirasi" class="col-sm-3 col-form-label">Respirasi</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="respirasi" id="respirasi" placeholder="Respirasi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Mata</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('mata'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="mata" id="mata" value="Normal" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Hidung</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('hidung'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="hidung" id="hidung" value="Normal" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Mulut</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('mulut'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="mulut" id="mulut" value="Normal" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Telinga</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('telinga'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="telinga" id="telinga" value="Normal" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kulit</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('kulit'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="kulit" id="kulit" value="Normal" readonly="" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Ekstrimitas</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('ekstrimitas'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="ekstrimitas" value="Normal" readonly="" id="ekstrimitas" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Rongga Perut</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('rongga_perut'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="rongga_perut" value="Normal" readonly="" id="rongga_perut" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Rongga Dada</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('rongga_dada'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="rongga_dada" value="Normal" readonly="" id="rongga_dada" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kelenjar</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox" onclick="var input = document.getElementById('kelenjar'); if(this.checked){ input.removeAttribute('readonly'); input.focus(); input.value='';}else{
                             input.setAttribute('readonly',''); 
                             input.value='Normal';}">
                        </span>
                      </div>
                      <input type="text" name="kelenjar" value="Normal" readonly="" id="kelenjar" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pernah di Obati</label>
                    <div class="col-sm-9">
                     <div class="input-group">
                      <input type="text" name="pernahdiobati"  id="pernahdiobati" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Dehidrasi</label>
                    <div class="col-sm-9">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" onclick="var input = document.getElementById('dehidrasi'); if (this.checked) {input.value = 'Ya'} document.getElementById('dehidrasi2').checked = false;" id="dehidrasi1" name="dehidrasi1" >
                          <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" onclick="var input = document.getElementById('dehidrasi'); if (this.checked) {input.value = 'Tidak'} document.getElementById('dehidrasi1').checked = false;" id="dehidrasi2" name="dehidrasi2" >
                          <label class="form-check-label">Tidak</label>
                        
                        </div>
                         <input type="text" hidden class="form-control" name="dehidrasi" id="dehidrasi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Diagnosa</label>
                    <div class="col-sm-9">
                     <select name="diagnosa" id="diagnosa" class="form-control select2bs4" style="width: 100%;">
                                  <option value=""  selected>- Pilih -</option>
                                    <?php foreach ($diagnosa->result() as $key => $data) { ?>
                                    <option value="<?=$data->name?>"<?=$data->diagnosa_id?>><?=$data->name?></option>
                                    <?php }?>
                                 </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Prognosa</label>
                    <div class="col-sm-9">
                      
                      <div class="form-check">
                          <input class="form-check-input" type="radio" onclick="var input = document.getElementById('prognosa'); if (this.checked) {input.value = 'Fausta'} document.getElementById('prognosa2').checked = false; document.getElementById('prognosa3').checked = false;" name="prognosa1" id="prognosa1" >
                          <label class="form-check-label">Fausta</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio"   onclick="var input = document.getElementById('prognosa'); if (this.checked) {input.value = 'Infausta'} document.getElementById('prognosa1').checked = false; document.getElementById('prognosa3').checked = false;" name="prognosa2" id="prognosa2">
                          <label class="form-check-label ">Infausta</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio"   onclick="var input = document.getElementById('prognosa'); if (this.checked) {input.value = 'Dubius'} document.getElementById('prognosa1').checked = false; document.getElementById('prognosa2').checked = false;" name="prognosa3" id="prognosa3">
                          <label class="form-check-label ">Dubius</label>
                        </div>
                     
                    </div>
                    <input type="text" hidden class="form-control" name="prognosa" id="prognosa">
                  </div>
                  </div>
                </div>
              </div>
              </div>

              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Obat</h3>
                </div>
                 <div class="card-body">
                <div class="row">
                  <div class="col-lg-10">
                  <div class="form-group row">
                    <label for="obat" class="col-sm-3 col-form-label">Obat</label>
                    <div class="col-sm-9"> 
                     <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Obat</th>
                            <th>Jumlah</th>
                            
                            <th>Aksi</th>
                          </tr>
                          <tr>
                            <td>#</td>
                            <td width="30%">
                            
                           <select name="obat" id="obat" class="form-control select2bs4" style="width: 100%;">
                                  <option value=""  selected>- Pilih -</option>
                                    <?php foreach ($obat->result() as $key => $data) { ?>
                                       <option value="<?=$data->nama?>"><?=$data->nama?></option>
                                    <?php }?>
                                 </select>
                             <!--  <input type="text" name="obat" id="obat" size="50"> --> 
                            </td>
                            <td>
                              <div class="form-group row">
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah">
                                </div>
                              </div><!-- <input type="text" name="jumlah" id="jumlah" size="50"> -->
                            </td>
                            <!-- <td width="30%">
                               <div class="form-group row">
                   
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan" readonly>
                                
                              </div>
                              </div>
                            </td> -->
                            <td><center><a class="btn btn-default" name="" id="add_detail"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> </center></td>
                          </tr>
                        </thead>
                        <tbody id="out_detail">

                        </tbody>
                      </table>
                     <input type="text" hidden class="form-control" name="list_detail" id="list_detail" placeholder="Diagnosa">
                    </div>
                    
                  </div>
                  </div>
                </div>
              </div>
              </div>

              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Tindakan</h3>
                </div>
                 <div class="card-body">
                <div class="row">
                  <div class="col-lg-10">
                  <div class="form-group row">
                    <label for="obat" class="col-sm-3 col-form-label">Tindakan</label>
                    <div class="col-sm-9"> 
                     <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Tindakan</th>
                            <th>Aksi</th>
                          </tr>
                          <tr>
                            <td>#</td>
                            <td width="50%">
                                 <select name="tindakan_id" id="tindakan_id" class="form-control select2bs4" style="width: 100%;">
                                  <option value=""  selected>- Pilih -</option>
                                    <?php foreach ($tindakan->result() as $key => $data) { ?>
                                       <option value="<?=$data->nama?>"<?=$data->tindakan_id?>><?=$data->nama?></option>
                                    <?php }?>
                                 </select>
                             <!--  <input type="text" name="obat" id="obat" size="50"> --> 
                            </td>
                            <td><center><a class="btn btn-default" name="add_tindakan" id="add_tindakan"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> </center></td>
                          </tr>
                        </thead>
                        <tbody id="out_detail_tindakan">

                        </tbody>
                      </table>
                     <input type="text" hidden class="form-control" name="list_detail_tindakan" id="list_detail_tindakan" placeholder="Diagnosa">
                    </div>
                    
                  </div>
                  </div>
                </div>
              </div>
              </div>

              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Resep</h3>
                </div>
                 <div class="card-body">
                <div class="row">
                  <div class="col-lg-10">
                  <div class="form-group row">
                    <label for="obat" class="col-sm-3 col-form-label">Resep</label>
                    <div class="col-sm-9"> 
                     <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Resep Obat</th>
                            <th>Dosis</th>
                            <th>Aksi</th>
                          </tr>
                          <tr>
                            <td>#</td>
                            <td width="50%">
                                 <select name="resep_id" id="resep_id" class="form-control select2bs4" style="width: 100%;">
                                  <option value=""  selected>- Pilih -</option>
                                    <?php foreach ($resep->result() as $key => $data) { ?>
                                        <option value="<?=$data->nama?>"<?=$data->resep_id?>><?=$data->nama?></option>
                                    <?php }?>
                                 </select>
                             <!--  <input type="text" name="obat" id="obat" size="50"> --> 
                            </td>
                            <td>
                              <div class="form-group row">
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="jumlahh" id="jumlahh" placeholder="dosis">
                                </div>
                              </div><!-- <input type="text" name="jumlah" id="jumlah" size="50"> -->
                            </td>
                            <td><center><a class="btn btn-default" name="add_obat_resep" id="add_obat_resep"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> </center></td>
                          </tr>
                        </thead>
                        <tbody id="out_detail_obat_resep">

                        </tbody>
                      </table>
                     <input type="text" hidden class="form-control" name="list_obat_resep" id="list_obat_resep" placeholder="Diagnosa">
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="keterangan"  id="keterangan" placeholder="Keterangan">
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-lg-10">
                  <div class="form-group row">
                    <label for="obat" class="col-sm-3 col-form-label">Dokter Yang Menangani</label>
                    <div class="col-sm-9"> 
                     <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th width="10%">No</th>
                            <th>Nama Dokter</th>
                            <th width="20%">Aksi</th>
                          </tr>
                          <tr>
                            <td>#</td>
                            <td width="50%">
                                 <select name="dokter_id" id="dokter_id" class="form-control select2bs4" style="width: 100%;">
                                  <option value=""  selected>- Pilih -</option>
                                    <?php foreach ($dokter->result() as $key => $data) { ?>
                                      <option value="<?=$data->nama_dokter?>"<?=$data->dokter_id?>><?=$data->nama_dokter?></option>
                                   <?php }?>
                                 </select>
                            </td>        
                            <td><center><a class="btn btn-default" name="add_dokter" id="add_dokter"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> </center></td>
                          </tr>
                        </thead>
                        <tbody id="out_detail_dokter">

                        </tbody>
                      </table>
                     <input type="text" hidden class="form-control" name="list_detail_dokter" id="list_detail_dokter" placeholder="Diagnosa">
                    </div>
                    
                  </div>
                  </div>



                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                 <!--  <button type="submit" class="btn btn-info">Simpan</button> -->
                   <button type="button" name="btn" class="btn btn-info" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" >Simpan</button>
                 <!--  <button type="submit" class="btn btn-default float-right">Batal</button> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               Apakah Anda Yakin Akan Menyimpan Data Sebagai Berikut?
            </div>
            <div class="modal-body">
                
<div class="modal-body" table-responsive>
  <table class="table table-bordered no-margin">
             <tbody>
                    <tr>
                      <th style="">Tanggal Periksa</th>
                      <td><span id="tanggal"></span></td>
                    </tr>
                    <tr>
                      <th style="">Nama Pemilik</th>
                      <td><span id="pemilik"></span></td>
                    </tr>
                    <tr>
                      <th style="">Alamat</th>
                      <td><span id="alamatt"></span></td>
                    </tr>
                    <tr>
                      <th style="">Telepon</th>
                      <td><span id="teleponn"></span></td>
                    </tr>
                    <tr>
                      <th style="">Nama Pasien</th>
                      <td><span id="pasien"></span></td>
                    </tr>
                    <tr>
                      <th style="">Spesies</th>
                      <td><span id="spesiess"></span></td>
                    </tr>
                    <tr>
                      <th style="">Tanggal Lahir</th>
                      <td><span id="tanggal_lahirr"></span></td>
                    </tr>
                    <tr>
                      <th style="">Warna</th>
                      <td><span id="warnaa"></span></td>
                    </tr>
                    <tr>
                      <th style="">Jenis Kelamin</th>
                      <td><span id="jk"></span></td>
                    </tr>
                    <tr>
                      <th style="">Makan</th>
                      <td><span id="mkn"></span></td>
                    </tr>
                    <tr>
                      <th style="">Minum</th>
                      <td><span id="mnm"></span></td>
                    </tr>
                    <tr>
                      <th style="">Muntah</th>
                      <td><span id="mth"></span></td>
                    </tr>
                    <tr>
                      <th style="">Diare</th>
                      <td><span id="diaree"></span></td>
                    </tr>
                    <tr>
                      <th style="">Vaksin</th>
                      <td><span id="vksn"></span></td>
                    </tr>
                    <tr>
                      <th style="">Obat Cacing</th>
                      <td><span id="obt_ccg"></span></td>
                    </tr>
                    <tr>
                      <th style="">Lain Lain</th>
                      <td><span id="lnln"></span></td>
                    </tr>
                     <tr>
                      <th style="">Berat Badan</th>
                      <td><span id="beratt"></span></td>
                    </tr>
                    <tr>
                      <th style="">Temperatur</th>
                      <td><span id="temperaturr"></span></td>
                    </tr>
                    <tr>
                      <th style="">Pulsus</th>
                      <td><span id="pulsuss"></span></td>
                    </tr>
                    <tr>
                      <th style="">Respirasi</th>
                      <td><span id="respirasii"></span></td>
                    </tr>
                    <tr>
                      <th style="">Mata</th>
                      <td><span id="mataa"></span></td>
                    </tr>
                    <tr>
                      <th style="">Hidung</th>
                      <td><span id="hidungg"></span></td>
                    </tr>
                    <tr>
                      <th style="">Mulut</th>
                      <td><span id="mulutt"></span></td>
                    </tr>
                    <tr>
                      <th style="">Telinga</th>
                      <td><span id="telingaa"></span></td>
                    </tr>
                    <tr>
                      <th style="">Kulit</th>
                      <td><span id="kulitt"></span></td>
                    </tr>
                    <tr>
                      <th style="">Ekstrimitas</th>
                      <td><span id="ekstrimitass"></span></td>
                    </tr>
                    <tr>
                      <th style="">Rongga Dada</th>
                      <td><span id="rongga_dadaa"></span></td>
                    </tr>
                    <tr>
                      <th style="">Rongga Perut</th>
                      <td><span id="rongga_perutt"></span></td>
                    </tr>
                    <tr>
                      <th style="">Kelenjar</th>
                      <td><span id="kelenjarr"></span></td>
                    </tr>
                    <tr>
                      <th style="">Pernah Diobati</th>
                      <td><span id="pernahdiobatii"></span></td>
                    </tr>
                    <tr>
                      <th style="">Dehidrasi</th>
                      <td><span id="dehidrasii"></span></td>
                    </tr>
                    <tr>
                      <th style="">Diagnosa</th>
                      <td><span id="diagnosaa"></span></td>
                    </tr>
                    <tr>
                      <th style="">Prognosa</th>
                      <td><span id="prognosaa"></span></td>
                    </tr>
                    <tr>
                      <th style="">Obat</th>
                      <td><span id="obatt"></span></td>
                    </tr>
                     <tr>
                      <th style="">Tindakan</th>
                      <td><span id="tindakann"></span></td>
                    </tr>   
                    <tr>
                      <th style="">Obat Resep</th>
                      <td><span id="obat_resepp"></span></td>
                    </tr>
                    <tr>
                      <th style="">Keterangan</th>
                      <td><span id="keterangann"></span></td>
                    </tr>
                    <tr>
                      <th style="">Dokter</th>
                      <td><span id="dokterr"></span></td>
                    </tr>
            </tbody>               
    </table>
</div>
              
                

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               <a href="#" id="submit" class="btn btn-success success">Simpan</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#submitBtn').click(function() {
       $('#tanggal').text($('#tanggal_periksa').val());
       $('#pemilik').text($('#pemilik_id').val());
       $('#alamatt').text($('#alamat').val());
       $('#teleponn').text($('#telepon').val());
       $('#pasien').text($('#pasien_id').val());
       $('#spesiess').text($('#spesies').val());
       $('#tanggal_lahirr').text($('#tanggal_lahir').val());
       $('#warnaa').text($('#warna').val());
       $('#jk').text($('#jenis_kelamin').val());
       $('#mkn').text($('#makan').val());
       $('#mnm').text($('#makan').val());
       $('#mth').text($('#minum').val());
       $('#diaree').text($('#muntah').val());
       $('#vksn').text($('#diare').val());
       $('#obt_ccg').text($('#obat_cacing').val());
       $('#lnln').text($('#lain_lain').val());
       $('#beratt').text($('#berat').val());
       $('#temperaturr').text($('#temperatur').val());
       $('#pulsuss').text($('#pulsus').val());
       $('#respirasii').text($('#respirasi').val());
       $('#mataa').text($('#mata').val());
       $('#hidungg').text($('#hidung').val());
       $('#mulutt').text($('#mulut').val());
       $('#telingaa').text($('#telinga').val());
       $('#kulitt').text($('#kulit').val());
       $('#ekstrimitass').text($('#ekstrimitas').val());
       $('#rongga_perutt').text($('#rongga_perut').val());
       $('#rongga_dadaa').text($('#rongga_dada').val());
       $('#kelenjarr').text($('#kelenjar').val());
       $('#pernahdiobatii').text($('#pernahdiobati').val());
       $('#dehidrasii').text($('#dehidrasi').val());
       $('#diagnosaa').text($('#diagnosa').val());
       $('#prognosaa').text($('#prognosa').val());
       $('#obatt').text($('#list_detail').val());
        $('#tindakann').text($('#list_detail_tindakan').val());
       $('#obat_resepp').text($('#list_obat_resep').val());
       $('#keterangann').text($('#keterangan').val());
       $('#dokterr').text($('#list_detail_dokter').val());
      
       
});


$('#submit').click(function(){

    $('#formField').submit();
    
});
</script>

<script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
 <!--  <script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script> -->
<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>




<script type="text/javascript">
var list_detail = [];

  // ------------- add_detail_bantuan
    $("#add_detail").click(function(){
      var obat   = $("#obat").val();
      var jumlah   = $("#jumlah").val();

      // console.log("ok");

      var tmp_data = {
        "obat":obat,
        "jumlah":jumlah
      };

      if(ck_val_detail() == true){
        list_detail.push(tmp_data);
        $("#list_detail").val(JSON.stringify(list_detail));
        cl_fm_detail();
      }else{
        alert("Input Data Salah");
      }
      render_tbl_detail();
    });

    function render_tbl_detail(){
      var str_list_detail = "";

      var nomor = 0;
      for(let i in list_detail){
        // console.log(list_detail[i]);
        nomor ++;
        str_list_detail += "<tr><td>"+nomor+"</td>"+
            "<td>"+list_detail[i].obat+"</td>"+
            "<td>"+list_detail[i].jumlah+"</td>"+
            "<td><center<a href=\"javascript:void(0)\" onclick=\"del_detail('"+i+"')\" class=\"btn btn-default\" ><i class=\"fa fa-minus\" </i></a></center></td></tr>";
      }

      $("#out_detail").html(str_list_detail);
    }

    function ck_val_detail(){
      var obat   = $("#obat").val();
      var jumlah   = $("#jumlah").val();
      var sts_ck = false;
      if(obat != "" && jumlah != ""){

        // console.log("ck_val_detail true");
        sts_ck = true;
      }
      return sts_ck;
    }

    function del_detail(i){
      list_detail.splice(i,1);
      console.log(list_detail);
      $("#list_detail").val(JSON.stringify(list_detail));

      render_tbl_detail();
    }
    function cl_fm_detail(){
      var obat   = $("#obat").val("");
      var jumlah   = $("#jumlah").val("");

      $("#obat").focus();
    }

  </script>

    <script type="text/javascript">
var list_detail_dokter = [];

  // ------------- add_detail_bantuan
    $("#add_dokter").click(function(){
      var dokter_id   = $("#dokter_id").val();
     

      // console.log("ok");

      var tmp_data1 = {
        "dokter_id":dokter_id,
        
      };

      if(ck_val_detail1() == true){
        list_detail_dokter.push(tmp_data1);
        $("#list_detail_dokter").val(JSON.stringify(list_detail_dokter));
        cl_fm_detail1();
      }else{
        alert("Data tidak sempurna");
      }
      render_tbl_detail1();
    });

    function render_tbl_detail1(){
      var str_list_detail_dokter = "";

      var nomor=0;
      for(let i in list_detail_dokter){
        // console.log(list_detail[i]);
        nomor++;
        str_list_detail_dokter += "<tr><td>"+nomor+"</td>"+
            "<td>"+list_detail_dokter[i].dokter_id+"</td>"+
            "<td><center><a href=\"javascript:void(0)\" onclick=\"del_detail1('"+i+"')\" class=\"btn btn-default\" ><i class=\"fa fa-minus\" </i></a></center></td></tr>";
      }

      $("#out_detail_dokter").html(str_list_detail_dokter);
    }

    function ck_val_detail1(){
      var dokter_id   = $("#dokter_id").val();
      var sts_ck = false;
      if(dokter_id != ""){

        // console.log("ck_val_detail true");
        sts_ck = true;
      }
      return sts_ck;
    }

    function del_detail1(i){
      list_detail_dokter.splice(i,1);
      console.log(list_detail_dokter);
      $("#list_detail_dokter").val(JSON.stringify(list_detail_dokter));

      render_tbl_detail1();
    }
    function cl_fm_detail1(){
      var dokter_id   = $("#dokter_id").val("");
      

      $("#dokter_id").focus();
    }

  </script>


  <script type="text/javascript">
var list_detail_tindakan = [];

  // ------------- add_detail_bantuan
    $("#add_tindakan").click(function(){
      var tindakan_id   = $("#tindakan_id").val();
     

      // console.log("ok");

      var tmp_data2 = {
        "tindakan_id":tindakan_id,
        
      };

      if(ck_val_detail2() == true){
        list_detail_tindakan.push(tmp_data2);
        $("#list_detail_tindakan").val(JSON.stringify(list_detail_tindakan));
        cl_fm_detail2();
      }else{
        alert("Data tidak sempurna");
      }
      render_tbl_detail2();
    });

    function render_tbl_detail2(){
      var str_list_detail_tindakan = "";
      
      var nomor = 0;
      
      for(let i in list_detail_tindakan){
        // console.log(list_detail[i]);
        nomor++;
        str_list_detail_tindakan += "<tr><td>"+nomor+"</td>"+
            "<td>"+list_detail_tindakan[i].tindakan_id+"</td>"+
            "<td><center><a href=\"javascript:void(0)\" onclick=\"del_detail1('"+i+"')\" class=\"btn btn-default\" ><i class=\"fa fa-minus\" </i></a></center></td></tr>";
      }

      $("#out_detail_tindakan").html(str_list_detail_tindakan);
    }

    function ck_val_detail2(){
      var tindakan_id   = $("#tindakan_id").val();
      var sts_ck = false;
      if(tindakan_id != ""){

        // console.log("ck_val_detail true");
        sts_ck = true;
      }
      return sts_ck;
    }

    function del_detail2(i){
      list_detail_tindakan.splice(i,1);
      console.log(list_detail_tindakan);
      $("#list_detail_tindakan").val(JSON.stringify(list_detail_tindakan));

      render_tbl_detail2();
    }
    function cl_fm_detail2(){
      var tindakan_id   = $("#tindakan_id").val("");
      

      $("#tindakan_id").focus();
    }

  </script>

  <script type="text/javascript">
var list_obat_resep = [];

  // ------------- add_detail_bantuan
    $("#add_obat_resep").click(function(){
      var resep_id   = $("#resep_id").val();
      var jumlahh   = $("#jumlahh").val();

      // console.log("ok");

      var tmp_data4 = {
        "resep_id":resep_id,
        "jumlahh":jumlahh
      };

      if(ck_val_detail4() == true){
        list_obat_resep.push(tmp_data4);
        $("#list_obat_resep").val(JSON.stringify(list_obat_resep));
        cl_fm_detail4();
      }else{
        alert("Data tidak sempurna");
      }
      render_tbl_detail4();
    });

    function render_tbl_detail4(){
      var str_list_obat_resep = "";


      var nomor=0;
      for(let i in list_obat_resep){
        // console.log(list_detail[i]);
        nomor++;
        str_list_obat_resep += "<tr><td>"+nomor+"</td>"+
            "<td>"+list_obat_resep[i].resep_id+"</td>"+
            "<td>"+list_obat_resep[i].jumlahh+"</td>"+
            "<td><center<a href=\"javascript:void(0)\" onclick=\"del_detail4('"+i+"')\" class=\"btn btn-default\" ><i class=\"fa fa-minus\" </i></a></center></td></tr>";
      }

      $("#out_detail_obat_resep").html(str_list_obat_resep);
    }

    function ck_val_detail4(){
      var resep_id   = $("#resep_id").val();
      var jumlahh   = $("#jumlahh").val();
      var sts_ck = false;
      if(resep_id != "" && jumlahh != ""){

        // console.log("ck_val_detail true");
        sts_ck = true;
      }
      return sts_ck;
    }

    function del_detail4(i){
      list_obat_resep.splice(i,1);
      console.log(list_obat_resep);
      $("#list_obat_resep").val(JSON.stringify(list_obat_resep));

      render_tbl_detail4();
    }
    function cl_fm_detail4(){
      var resep_id   = $("#resep_id").val("");
      var jumlahh   = $("#jumlahh").val("");

      $("#resep_id").focus();
    }
  </script>


   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js" integrity="sha512-7yA/d79yIhHPvcrSiB8S/7TyX0OxlccU8F/kuB8mHYjLlF1MInPbEohpoqfz0AILoq5hoD7lELZAYYHbyeEjag==" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#kota_id').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    method : "POST", 
                    url : "<?=base_url('pemilik/get_kecamatan')?>",
                    data : {id: id},
                     async : true,
                    dataType : "JSON",
                    success: function(response){

                        $('#kecamatan_id').html(response);
                    }
                });
             
            });

      $('#kecamatan_id').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    method : "POST", 
                    url : "<?=base_url('pemilik/get_kelurahan')?>",
                    data : {id: id},
                     async : true,
                    dataType : "JSON",
                    success: function(response){

                        $('#kelurahan_id').html(response);
                    }
                });
             
            }); 
      $('#kelurahan_id').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    method : "POST", 
                    url : "<?=base_url('pemilik/get_pemilik')?>",
                    data : {id: id},
                     async : true,
                    dataType : "JSON",
                    success: function(response){

                        $('#pemilik_id').html(response);
                    }
                });
             
            });
        $('#pemilik_id').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    method : "POST", 
                    url : "<?=base_url('pemilik/get_pasien')?>",
                    data : {id: id},
                     async : true,
                    dataType : "JSON",
                    success: function(response){

                        $('#pasien_id').html(response);
                    }
                });
             
            });     
            
    });

  </script>

 