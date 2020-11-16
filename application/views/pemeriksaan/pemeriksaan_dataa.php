  <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Data Pemeriksaan</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                  <li class="m-nav__item m-nav__item--home">
                    <a href="#" class="m-nav__link m-nav__link--icon">
                      <i class="m-nav__link-icon la la-home"></i>
                    </a>
                  </li>
                  <li class="m-nav__separator">-</li>
                  <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                      <span class="m-nav__link-text">Puskeswan</span>
                    </a>
                  </li>
                  <li class="m-nav__separator">-</li>
                  <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                      <span class="m-nav__link-text">Data Pemeriksaan</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Data Pemeriksaan
										</h3>
									</div>
								</div>
								
							</div>
							<div class="m-portlet__body">

								<!--b egin: Search Form -->
                <form action="<?=site_url('periksa')?>" class="" method="get">
                  <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                  <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                      <div class="form-group m-form__group row align-items-center">
                        <div class="col-md-4">
                          <div class="m-input-icon m-input-icon--left">
                            <input type="text" class="form-control m-input" placeholder="Cari..." id="generalSearch">
                            <span class="m-input-icon__icon m-input-icon__icon--left">
                              <span><i class="la la-search"></i></span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="input-daterange input-group">
                        <input type="text" class="form-control m-input" name="startdate" placeholder="Tanggal Awal" id="m_datepicker_1" />
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
                        </div>
                        <input type="text" class="form-control m-input" name="enddate" placeholder="Hingga Tanggal" id="m_datepicker_3" />
                        <button type="submit" class="btn btn-primary">Cari</button>
                      </div>
                      <span class="m-form__help">Masukkan Tanggal Pencarian</span> -->
                    </div>
                    
                    <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                      <a href="<?=site_url('periksa/add_periksa')?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                        <span>
                          <i class="la la-plus"></i>
                          <span>Tambah</span>
                        </span>
                      </a>
                      <div class="m-separator m-separator--dashed d-xl-none"></div>
                    </div>
                  </div>
                </div>
                </form>
								
								<!--end: Search Form -->

								<!--begin: Datatable -->
								<table class="m-datatable" id="html_table" width="100%">
									<thead>
										<tr>
											 <th>No</th>
							                  <th>Tanggal Periksa</th>
							                  <th>Nama Pemilik</th>
							                  <th>Alamat</th>
							                  <th>Telepon</th>
							                  <th>Nama Pasien</th>
							                  <th>Spesies</th>
							                  <th>Jenis Kelamin</th>
							                  <th>Data Pemeriksaan</th>
							                  <th>Action</th>
										</tr>
									</thead>
									<tbody>
								
									    <?php $no = 1;
                foreach($row->result() as $key => $data){

                $list_data_obat   = json_decode($data->data_obat); 
                $list_data_dokter = json_decode($data->data_dokter); 
                $list_data_tindakan = json_decode($data->data_tindakan); 
                $list_data_resep   = json_decode($data->data_resep); 

               // print_r($list_data_dokter);

                $data_obat1 ="";
                $data_dokter1 ="";
                $data_tindakan1 ="";
                $data_resep1 ="";

                
                foreach($list_data_obat as $key1 => $data1){
                   $obat1 = $data1->obat;
                   $jumlah1 = $data1->jumlah;
                   $data_obat1 .="( ".$obat1." ".$jumlah1." )";
 
                
                }

                foreach($list_data_dokter as $key2 =>$data2){
                    $dokter1 = $data2->dokter_id;
                 
                    $data_dokter1 .= "(".$dokter1.")";
  
                }

                foreach($list_data_tindakan as $key3 => $data3){
                   $tindakan1 = $data3->tindakan_id;
                   $data_tindakan1 .="( ".$tindakan1." )";
 
                
                }

                
                foreach($list_data_resep as $key4 => $data4){
                   $resep1 = $data4->resep_id;
                   $jumlah2 = $data4->jumlahh;
                   $data_resep1 .="( ".$resep1." ".$jumlah2." )";
 
                
                }
               
                
            ?> 

                <tr>
                  <td><?=$no++?></td>
                  <td><?=$data->tanggal_periksa?></td>
                  <td><?=$data->nama_pemilik?></td>
                  <td><?=$data->alamat?></td>
                  <td><?=$data->telepon?></td>
                  <td><?=$data->nama_pasien?></td>
                  <td><?=$data->spesies?></td>
                  <td><?=$data->jenis_kelamin?></td>
                  <td>
                  	  <a href="" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" id="detail"  data-toggle="modal" data-target="#modal-detail" title="View"  data-pemilik_id="<?=$data->nama_pemilik?>"
                         data-pasien_id ="<?=$data->nama_pasien?>"
                         data-spesies="<?=$data->spesies?>"
                         data-jenis_kelamin="<?=$data->jenis_kelamin?>"
                         data-makan="<?=$data->makan?>"
                         data-minum="<?=$data->minum?>"
                         data-muntah="<?=$data->muntah?>"
                         data-diare="<?=$data->diare?>"
                         data-vaksin="<?=$data->vaksin?>"
                         data-obat_cacing="<?=$data->obat_cacing?>"
                         data-lain_lain="<?=$data->lain_lain?>"
                         data-berat="<?=$data->berat?> Kg"
                         data-temperatur="<?=$data->temperatur?> °C"
                         data-pulsus="<?=$data->pulsus?>"
                         data-respirasi="<?=$data->respirasi?>"
                         data-mata="<?=$data->mata?>"
                         data-hidung="<?=$data->hidung?>"
                         data-mulut="<?=$data->mulut?>"
                         data-telinga="<?=$data->telinga?>"
                         data-kulit="<?=$data->kulit?>"
                         data-ekstrimitas="<?=$data->ekstrimitas?>"
                         data-rongga_perut="<?=$data->rongga_perut?>"
                         data-rongga_dada="<?=$data->rongga_dada?>"
                         data-kelenjar="<?=$data->kelenjar?>"
                         data-dehidrasi="<?=$data->dehidrasi?>"
                         data-diagnosa="<?=$data->diagnosa?>"
                         data-prognosa="<?=$data->prognosa?>"
                         data-obat="<?=$data_obat1?>"
                         data-tindakan="<?=$data_tindakan1?>"
                         data-keterangan="<?=$data->keterangan?>"
                         data-obat_resep="<?=$data_resep1?>"
                         data-dokter="<?=$data_dokter1?>"><i class="la la-eye"></i></a> 
                  </td>              
       	
                   <td>
		              <a href="<?=site_url('periksa/del/'.$data->id)?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View "><i class="la la-trash"></i></a>
		           </td>
		         </tr>
		                <?php
		              	} ?>
									
								  </tbody>
								</table>

								<!--end: Datatable -->
							</div>
						</div>
					</div>
				</div>
			</div>


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
              <table class="table table-bordered">
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
                      <th style="">Obat Resep</th>
                      <td><span id="obat_resep"></span></td>
                    </tr>
                    <tr>
                      <th style="">Keterangan</th>
                      <td><span id="keterangan"></span></td>
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

      <script>
        $(document).ready(function(){
          $(document).on('click','#detail',function(){
            var pemilik_id = $(this).data('pemilik_id');
            var pasien_id = $(this).data('pasien_id');
            var spesies = $(this).data('spesies');
            var jenis_kelamin = $(this).data('jenis_kelamin');
            var makan = $(this).data('makan');
            var minum = $(this).data('minum');
            var muntah = $(this).data('muntah');
            var diare = $(this).data('diare');
            var vaksin = $(this).data('vaksin');
            var obat_cacing = $(this).data('obat_cacing');
            var lain_lain = $(this).data('lain_lain');
            var berat = $(this).data('berat');
            var temperatur = $(this).data('temperatur');
            var pulsus = $(this).data('pulsus');
            var respirasi = $(this).data('respirasi');
            var mata = $(this).data('mata');
            var hidung = $(this).data('hidung');
            var mulut = $(this).data('mulut');
            var telinga = $(this).data('telinga');
            var kulit = $(this).data('kulit');
            var ekstrimitas = $(this).data('ekstrimitas');
            var rongga_dada = $(this).data('rongga_dada');
            var rongga_perut = $(this).data('rongga_perut');
            var kelenjar = $(this).data('kelenjar');
            var dehidrasi = $(this).data('dehidrasi');
            var diagnosa = $(this).data('diagnosa');
            var prognosa = $(this).data('prognosa');
            var obat = $(this).data('obat');
            var jumlah = $(this).data('jumlah');
            var tindakan = $(this).data('tindakan');
            var keterangan = $(this).data('keterangan');
            var obat_resep = $(this).data('obat_resep');
           
            var dokter = $(this).data('dokter');
            $('#pemilik_id').text(pemilik_id);
            $('#pasien_id').text(pasien_id);
            $('#spesies').text(spesies);
            $('#jenis_kelamin').text(jenis_kelamin);
            $('#makan').text(makan);
            $('#minum').text(minum);
            $('#muntah').text(muntah);
            $('#diare').text(diare);
            $('#vaksin').text(vaksin);
            $('#obat_cacing').text(obat_cacing);
            $('#lain_lain').text(lain_lain);
            $('#berat').text(berat);
            $('#temperatur').text(temperatur);
            $('#pulsus').text(pulsus);
            $('#respirasi').text(respirasi);
            $('#mata').text(mata);
            $('#hidung').text(hidung);
            $('#mulut').text(mulut);
            $('#telinga').text(telinga);
            $('#kulit').text(kulit);
            $('#ekstrimitas').text(ekstrimitas);
            $('#rongga_dada').text(rongga_dada);
            $('#rongga_perut').text(rongga_perut);
            $('#kelenjar').text(kelenjar);
            $('#dehidrasi').text(dehidrasi);
            $('#diagnosa').text(diagnosa);
            $('#prognosa').text(prognosa);
            $('#obat').text(obat);
            $('#jumlah').text(jumlah);
            $('#tindakan').text(tindakan);
            $('#keterangan').text(keterangan);
            $('#obat_resep').text(obat_resep);
          
            $('#dokter').text(dokter);
          })
        })

// $('#myDataTable').DataTable({
//     order: [[0, 'desc']],
// });
      </script>			