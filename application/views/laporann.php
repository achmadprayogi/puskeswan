 <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Laporan</h3>
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
                      <span class="m-nav__link-text">Laporan</span>
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
											Laporan
										</h3>
									</div>
								</div>
								
							</div>
							<div class="m-portlet__body">

								<!--begin: Search Form -->
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

											
										</div>
										
										<div class="col-xl-4 order-1 order-xl-2 m--align-right">
											<a href="<?php echo base_url('laporan/export'); ?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-print"></i>
													<span>Export Excel</span>
												</span>
											</a>
											<div class="m-separator m-separator--dashed d-xl-none"></div>
										</div>
									</div>
								</div>

								<!--end: Search Form -->

								<!--begin: Datatable -->
								<table class="m-datatable" id="html_table" width="100%">
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

								<!--end: Datatable -->
							</div>
						</div>
					</div>
				</div>
			</div>