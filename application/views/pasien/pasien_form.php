<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<br>

    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">



        <div class="row">

          <div class="col-md-9">

            <div class="card card-danger">

              <div class="card-header">

                <h3 class="card-title">Data Pasien</h3>

              </div>

             <form action="<?=site_url('pasien/proses')?>" method="post" class="form-horizontal">

                <div class="card-body">

                  <input type="hidden" name="id" value="<?=$row->pasien_id?>">

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Hewan</label>

                    <div class="col-sm-9">

                      <input type="text" name="nama" class="form-control" value="<?=$row->nama?>" id="inputEmail3" placeholder="Nama">

                    </div>

                  </div>

                  <div class="form-group row">

                  <label for="inputEmail3" class="col-sm-2 col-form-label">Spesies</label>

                  <div class="col-sm-9">

                    <select class="form-control select2bs4" name="spesies_id" style="width: 100%;">

                          <option value="">- Pilih -</option>

                          <?php foreach ($spesies->result() as $key => $data) { ?>

                            <option value="<?=$data->spesies_id?>"<?=$data->spesies_id == $row->spesies_id ? "selected" : null?>><?=$data->nama?></option>

                         <?php }?>

                        </select>

                  </div>

                </div>

                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>

                    <div class="col-sm-9">

                      <div class="form-check">

                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Jantan" <?php echo ($row->jenis_kelamin=='Jantan')?'checked':'' ?>>

                          <label class="form-check-label">Jantan</label>

                        </div>

                        <div class="form-check">

                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Betina" <?php echo ($row->jenis_kelamin=='Betina')?'checked':'' ?>

                           <label class="form-check-label">Betina</label>

                        </div>

                    </div>

                  </div>

                   <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-2 col-form-label">Warna</label>

                    <div class="col-sm-9">

                      <input type="text" class="form-control" value="<?=$row->warna?>" name="warna" id="inputPassword3" placeholder="Warna">

                    </div>

                  </div>

                  <div class="form-group row">

                  <label class="col-sm-2 col-form-label">Tanggal Lahir</label>

                  <div class="col-sm-9">

                   <div class="input-group date">
                        <input type="text" class="form-control m-input" value="<?=$row->tanggal_lahir?>" placeholder="Select date" id="m_datepicker_2" name="tanggal_lahir"/>
                       <!--  <input type="text" id="m_datepicker_2" name="tanggal_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?=$row->tanggal_lahir?>"/> -->

                       <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="la la-calendar-check-o"></i>
                          </span>
                        </div>

                    </div>              

                  </div>                 

                </div>

                <div class="form-group row">

                 <label for="age" class="col-sm-2 col-form-label">Umur</label>

                    <div class="col-sm-9">

                      <input type="text" class="form-control" readonly value="<?=$row->umur?>" name="umur" id="age" placeholder="Umur">

                    </div>

                </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Filter Pemilik</label>

                    <div class="col-sm-3">

                    



                        <select class="form-control select2bs4"  name="kota_id" id="kota_id">


                              <option value="">-Pilih Kota-</option>
                      
                              <?php foreach($kota as $kta):?>
                              
                              <option value="<?=$kta['kota_id'];?>"><?= $kta['nama_kota'];?></option>
                              
                              <?php endforeach;?>
                    
                        </select>

                   

                    </div>

                    <div class="col-sm-3">

                

                        <select class="form-control select2bs4" id="kecamatan_id" name="kecamatan_id" style="width: 100%;">

                          <option value="0">- Pilih -</option>

                          

                        </select>

                   

                    </div>

                    <div class="col-sm-3">

                

                        <select class="form-control select2bs4" id="kelurahan_id" name="kelurahan_id" style="width: 100%;">

                          <option value="1">- Pilih -</option>

                          

                        </select>

                   

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pemilik</label>

                    <div class="col-sm-9">

                      <select class="form-control select2bs4" name="pemilik_id" id="pemilik_id" style="width: 100%;">

                       <option value="" >- Pilih -</option>

                       <!--  <?php foreach ($pemilik->result() as $key => $data) { ?>

                            <option value="<?=$data->pemilik_id?>"<?=$data->pemilik_id == $row->pemilik_id ? "selected" : null?>><?=$data->nama?></option>

                         <?php }?> -->

                        </select>

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>

                    <div class="col-sm-9">

                            <!-- <select class="form-control select2bs4" type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"></select>  -->

                          <input type="text" id="alamat" readonly class="form-control" value="<?=$row->alamat?>" name="alamat" id="inputPassword3" placeholder="Alamat">

                         

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-2 col-form-label">Telepon</label>

                    <div class="col-sm-9">

                        <!-- <select class="form-control select2bs4" type="text" class="form-control" name="telepon" id="telepon" placeholder="Alamat"></select>  -->

                      <input type="text" class="form-control" readonly value="<?=$row->telepon?>" name="telepon" id="telepon" placeholder="Telepon">

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



      </div><!-- /.container-fluid -->

    </section>

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
            
    });

  </script>

   

    <!-- /.content -->



<!-- <script type="text/javascript">

$(document).ready(function () {

             

  $('#reservationdate').datepicker

    ({  

             onSelect: function(value,ui) {

               var birthDay = document.getElementById("reservationdate").value;

                var DOB = new Date(birthDay); //  dateFormat: 'dd/mm/yy'

                var today = new Date();

                age = today.getFullYear() - ui.selectedYear;

                document.getElementById('umur').value = age;

                console.log(age);

            }

     });  



  });

</script>

  -->