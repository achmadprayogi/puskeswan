<br>

    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">



        <div class="row">

          <div class="col-md-6">



            <div class="card card-danger">

              <div class="card-header">

                <h3 class="card-title">Data kelurahan</h3>

              </div>

             <form action="<?=site_url('kelurahan/proses')?>" method="post" class="form-horizontal">

                <div class="card-body">

                  <input type="hidden" name="id" value="<?=$row->kelurahan_id?>">

                  

                  

                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-4 col-form-label">Kota</label>

                    <div class="col-sm-8">

                      <select class="form-control select2bs4"  name="kota_id" id="kota_id">

                        <option value="">Pilih Kota</option>

                      

                             <?php foreach($kota as $kta):?>
                      
                      <option value="<?=$kta['kota_id'];?>"><?= $kta['nama_kota'];?></option>
                      
                      <?php endforeach;?>
 
                        </select>


                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-4 col-form-label">Kecamatan</label>

                    <div class="col-sm-8">

                      <select class="form-control select2bs4"  name="kecamatan_id" id="kecamatan_id" style="width: 100%;">

                         <option value=""  selected>- Pilih -</option>


                        </select>


                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">Kode Kelurahan</label>

                    <div class="col-sm-8">

                      <input type="text" name="kode" class="form-control" value="<?=$row->kode?>" id="kode" placeholder="Kode kelurahan">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nama kelurahan</label>

                    <div class="col-sm-8">

                      <input type="text" name="nama_kelurahan" class="form-control" value="<?=$row->nama_kelurahan?>" id="nama)=_kelurahan" placeholder="Nama kelurahan">

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


            
    });
  </script>


   

 