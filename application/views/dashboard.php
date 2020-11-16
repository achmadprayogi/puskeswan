 <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3>
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
                      <span class="m-nav__link-text">Dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

       <div class="m-content">
        <div class="m-portlet ">
              <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                  <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::Total Profit-->
                    <div class="m-widget24">
                      <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                          Jumlah Pemeriksaan
                        </h4><br>
                        <span class="m-widget24__desc">
                          Bulan Ini
                        </span>
                        <span class="m-widget24__stats m--font-brand">
                          <?=$this->fungsi->hitung_pemeriksaan()?>
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                          <div class="progress-bar m--bg-brand" role="progressbar" style="width: <?=$this->fungsi->hitung_pemeriksaan()?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200"></div>
                        </div>
                         <span class="m-widget24__change">
                       
                        </span>
                        <span class="m-widget24__number">
                          
                        </span>
                      </div>
                    </div>

                    <!--end::Total Profit-->
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Feedbacks-->
                    <div class="m-widget24">
                      <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                          Jumlah Pasien
                        </h4><br>
                        <span class="m-widget24__desc">
                          Total
                        </span>
                        <span class="m-widget24__stats m--font-info">
                          <?=$this->fungsi->hitung_pasien()?>
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                          <div class="progress-bar m--bg-info" role="progressbar" style="width: <?=$this->fungsi->hitung_pasien()?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                       
                      </div>
                    </div>

                    <!--end::New Feedbacks-->
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Orders-->
                    <div class="m-widget24">
                      <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                          Jumlah Pemilik
                        </h4><br>
                        <span class="m-widget24__desc">
                          Total
                        </span>
                        <span class="m-widget24__stats m--font-danger">
                          <?=$this->fungsi->hitung_pemilik()?>
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                          <div class="progress-bar m--bg-danger" role="progressbar" style="width: <?=$this->fungsi->hitung_pemilik()?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>          
                      </div>
                    </div>

                    <!--end::New Orders-->
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Users-->
                    <div class="m-widget24">
                      <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                          Jumlah Dokter
                        </h4><br>
                        <span class="m-widget24__desc">
                          TOtal
                        </span>
                        <span class="m-widget24__stats m--font-success">
                         <?=$this->fungsi->hitung_user()?>
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                          <div class="progress-bar m--bg-success" role="progressbar" style="width: <?=$this->fungsi->hitung_user()?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>

                    <!--end::New Users-->
                  </div>
                </div>
              </div>
            </div>
            <div class="m-portlet">
              <div class="m-portlet__body m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                  <div class="col-md-12 col-lg-12 col-xl-4">

                    <!--begin:: Widgets/Stats2-1 -->
                    <div class="m-widget1">
                      <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                          <div class="col">
                            <h3 class="m-widget1__title">Jumlah Pemeriksaan</h3>
                            <span class="m-widget1__desc">Total Seluruhnya</span>
                          </div>
                          <div class="col m--align-right">
                            <span class="m-widget1__number m--font-brand">+<?=$this->fungsi->hitung_pemeriksaan()?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--end:: Widgets/Stats2-1 -->
                  </div>
                </div>
              </div>
            </div>
          </div>
