<br>

    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">



        <div class="row">

          <div class="col-md-6">

            <div class="card card-danger">

              <div class="card-header">

                <h3 class="card-title">Data Kota</h3>

              </div>

              <?php echo validation_errors(); ?>

             <form action="" method="post" class="form-horizontal" id="formField">

                <div class="card-body">

                  <div class="form-group row">

                    <label for="kode" class="col-sm-4 col-form-label">Kode</label>

                    <div class="col-sm-8">

                      <input type="text" class="form-control" name="kode" id="kode" value="" placeholder="Kode">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="nama" class="col-sm-4 col-form-label">Nama Kota</label>

                    <div class="col-sm-8">

                      <input type="text" class="form-control" name="nama" value="<?=set_value('nama')?>" id="nama" placeholder="Nama Kota">

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

                      <th style="">Kode</th>

                      <td><span id="kodee"></span></td>

                    </tr>

                      <tr>

                      <th style="">Nama Kota</th>

                      <td><span id="namaa"></span></td>

                    </tr>

    </tbody>

                   

                </table>

</div>

              

                



            </div>



            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>

               <a href="#" id="submit" class="btn btn-success success">Simpan</a>

            </div>

        </div>

    </div>

</div>



<script type="text/javascript">

    $('#submitBtn').click(function() {

       $('#kodee').text($('#kode').val());

       $('#namaa').text($('#nama').val());

       

});





$('#submit').click(function(){



    $('#formField').submit();

    

});

</script>



 