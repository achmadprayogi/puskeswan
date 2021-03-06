
<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

  <!-- begin::Head -->
  <head>
    <meta charset="utf-8" />
    <title>Puskeswan | Dinas Peternakan</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

    <!--end::Web font -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="<?=base_url()?>classic/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="<?=base_url()?>classic/vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>classic/vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles -->
    <link href="<?=base_url()?>classic/demos/default/assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="<?=base_url()?>classic/demos/default/assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="<?=base_url()?>classic/demos/default/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="<?=base_url()?>classic/demos/default/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="<?=base_url()?>classic/demos/default/assets/demo/media/img/logo/favicon.ico" />

    <!--Tambahan-->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/jquery-ui-1.12.1/jquery-ui.js">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">


  </head>

    <!-- end::Head -->

  <!-- begin::Body -->
  <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

      <!-- BEGIN: Header -->
      <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
          <div class="m-stack m-stack--ver m-stack--desktop">

            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-dark ">
              <div class="m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                  <a href="<?=site_url('dashboard')?>" class="m-brand__logo-wrapper">
                    <img alt="" src="<?=base_url()?>assets/logo_de.png" />
                  </a>
                </div>
                <div class="m-stack__item m-stack__item--middle m-brand__tools">

                  <!-- BEGIN: Left Aside Minimize Toggle -->
                  <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                  <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Responsive Header Menu Toggler -->
                  <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Topbar Toggler -->
                  <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                    <i class="flaticon-more"></i>
                  </a>

                  <!-- BEGIN: Topbar Toggler -->
                </div>
              </div>
            </div>

            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

              <!-- BEGIN: Horizontal Menu -->
              <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
              

              <!-- END: Horizontal Menu -->

              <!-- BEGIN: Topbar -->
              <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                <div class="m-stack__item m-topbar__nav-wrapper">
                  <ul class="m-topbar__nav m-nav m-nav--inline">
                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                     m-dropdown-toggle="click">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-topbar__userpic">
                          <img src="<?=base_url()?>assets/logo_dokter.png" class="m--img-rounded m--marginless" alt="" />
                        </span>
                        <span class="m-topbar__username m--hide">Nick</span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__header m--align-center" style="background: url(<?=base_url()?>classic/demos/default/assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                            <div class="m-card-user m-card-user--skin-dark">
                              <div class="m-card-user__pic">
                                <img src="<?=base_url()?>assets/logo_dokter.png" class="m--img-rounded m--marginless" alt="" />

                                <!--
            <span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
            -->
                              </div>
                              <div class="m-card-user__details">
                                <span class="m-card-user__name m--font-weight-500"><?=$this->fungsi->user_login()->nama?></span>
                                <a href="" class="m-card-user__email m--font-weight-300 m-link"><?=$this->fungsi->user_login()->alamat?></a>
                              </div>
                            </div>
                          </div>
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav m-nav--skin-light">
                                <li class="m-nav__section m--hide">
                                  <span class="m-nav__section-text">Section</span>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit">
                                </li>
                                <li class="m-nav__item">
                                  <a href="<?=site_url('auth/logout')?>" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li id="m_quick_sidebar_toggle" class="m-nav__item">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-nav__link-icon"><i class="flaticon-grid-menu"></i></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- END: Topbar -->
            </div>
          </div>
        </div>
      </header>

      <!-- END: Header -->

      <!-- begin::Body -->
      <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">

          <!-- BEGIN: Aside Menu -->
          <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
            <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
              <li class="m-menu__item " aria-haspopup="true"><a href="<?=site_url('dashboard')?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
                      <span class="m-menu__link-badge"></span> </span></span></a></li>
              <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Data</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
              </li>
              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-3"></i><span class="m-menu__link-text">Data</span><i
                   class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item " aria-haspopup="true"><a href="<?=site_url('pemilik')?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Data Pemilik</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="<?=site_url('pasien')?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Data Pasien</span></a></li>
                  </ul>
                </div>
              </li>
              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="<?=site_url('periksa')?>" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon   flaticon-settings"></i><span class="m-menu__link-text">Pemeriksaan</span></a>
              </li>
               <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="<?=site_url('laporan')?>" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon  flaticon-folder-1"></i><span class="m-menu__link-text">Laporan</span></a>
              </li>
              
              
              <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Setting</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
              </li>
               <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-map-location"></i><span class="m-menu__link-text">Wilayah</span><i
                   class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item " aria-haspopup="true"><a href="<?=site_url('setting')?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Kota</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="<?=site_url('kecamatan')?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Kecamatan</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="<?=site_url('kelurahan')?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Kelurahan</span></a></li>
                  </ul>
                </div>
              </li>
               <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="<?=site_url('dokter')?>" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Dokter</span></a>
              </li>
               <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="<?=site_url('spesies')?>" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon  flaticon-twitter-logo"></i><span class="m-menu__link-text">Spesies</span></a>
              </li>
               <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="<?=site_url('diagnosa')?>" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon  flaticon-twitter-logo"></i><span class="m-menu__link-text">Diagnosa</span></a>
              </li>
               <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="<?=site_url('obat')?>" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon  flaticon-menu-1"></i><span class="m-menu__link-text">Obat</span></a>
              </li>
            </ul>
          </div>

          <!-- END: Aside Menu -->
        </div>

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

          <!-- BEGIN: Subheader -->
          
          

            <?php echo $contents?>

          
        </div>
      </div>

      <!-- end:: Body -->

      <!-- begin::Footer -->
      <footer class="m-grid__item   m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
          <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
              <span class="m-footer__copyright">
                2020 &copy;  <a href="https://kominfo.malangkota.go.id" class="m-link">Dinas Komunikasi dan Informatika</a>
              </span>
            </div>
            <!-- <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
              <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">About</span>
                  </a>
                </li>
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">Privacy</span>
                  </a>
                </li>
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">T&C</span>
                  </a>
                </li>
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">Purchase</span>
                  </a>
                </li>
                <li class="m-nav__item m-nav__item">
                  <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                    <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                  </a>
                </li>
              </ul>
            </div> -->
          </div>
        </div>
      </footer>

      <!-- end::Footer -->
    </div>

    <!-- end:: Page -->

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
      <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->


    <!-- begin::Quick Nav -->

    <!--begin:: Global Mandatory Vendors -->
    <script src="<?=base_url()?>classic/vendors/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/wnumb/wNumb.js" type="text/javascript"></script>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="<?=base_url()?>classic/vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/autosize/dist/autosize.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/summernote/dist/summernote.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/markdown/lib/markdown.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/jstree/dist/jstree.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/raphael/raphael.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/morris.js/morris.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/chartist/dist/chartist.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>classic/vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle -->
    <script src="<?=base_url()?>classic/demos/default/assets/demo/base/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors -->
    <script src="<?=base_url()?>classic/demos/default/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    <script src="<?=base_url()?>classic/demos/default/assets/app/js/dashboard.js" type="text/javascript"></script>

    <!--end::Page Scripts -->

    <!--Tambahan-->
    <script src="<?=base_url()?>classic/demos/default/assets/demo/custom/crud/metronic-datatable/base/html-table.js" type="text/javascript"></script>
      <script src="<?=base_url()?>classic/demos/default/assets/demo/custom/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
      <script src="<?=base_url()?>classic/demos/default/assets/demo/custom/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
    


      <!-- Tambahan -->
      <!-- Select2 -->
      <script src="<?=base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>
      <script src="<?=base_url()?>assets/plugins/moment/moment.min.js"></script>
      <script src="<?=base_url()?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
      <script src="<?=base_url()?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     
      <script src="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
      <script src="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <script src="<?=base_url()?>assets/plugins/moment/moment.min.js"></script>
      <script src="<?=base_url()?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
      <script src="<?=base_url()?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>
      <script src="<?=base_url()?>assets/js/sf.js"></script>

      <script src="<?=base_url()?>classic/demos/default/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
      <script src="<?=base_url()?>classic/demos/default/assets/demo/custom/crud/datatables/search-options/advanced-search.js" type="text/javascript"></script>




      <script>
  $(function () {

    //Initialize Select2 Elements

    $('.select2').select2()



    //Initialize Select2 Elements

    $('.select2bs4').select2({

      theme: 'bootstrap4'

    })



    //Datemask dd/mm/yyyy

    $('#datemask').inputmask('yyyy/mm/dd', { 'placeholder': 'dd/mm/yyyy' })

    //Datemask2 mm/dd/yyyy

    $('#datemask2').inputmask('yyyy/mm/dd', { 'placeholder': 'mm/dd/yyyy' })

    //Money Euro

    $('[data-mask]').inputmask()



    //Date range picker

    $('#reservationdate').datetimepicker({

        format: 'YYYY/MM/DD'

    });

    //Date range picker

    $('#reservation').daterangepicker()

    //Date range picker with time picker

    $('#reservationtime').daterangepicker({

      timePicker: true,

      timePickerIncrement: 30,

      locale: {

        format: 'YYYY/MM/DD'

      }

    })

    //Date range as a button

    $('#daterange-btn').daterangepicker(

      {

        ranges   : {

          'Today'       : [moment(), moment()],

          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],

          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],

          'Last 30 Days': [moment().subtract(29, 'days'), moment()],

          'This Month'  : [moment().startOf('month'), moment().endOf('month')],

          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]

        },

        startDate: moment().subtract(29, 'days'),

        endDate  : moment()

      },

      function (start, end) {

        $('#reportrange span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'))

      }

    )



    //Timepicker

    $('#timepicker').datetimepicker({

      format: 'LT'

    })

    

    //Bootstrap Duallistbox

    $('.duallistbox').bootstrapDualListbox()



    //Colorpicker

    $('.my-colorpicker1').colorpicker()

    //color picker with addon

    $('.my-colorpicker2').colorpicker()



    $('.my-colorpicker2').on('colorpickerChange', function(event) {

      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());

    });



    $("input[data-bootstrap-switch]").each(function(){

      $(this).bootstrapSwitch('state', $(this).prop('checked'));

    });



  })

</script>
    
<script type="text/javascript">

    $(document).ready(function(){

        $('#pasien_id').change(function(){

            var id=$(this).val();

            $.ajax({

                url : "<?php echo base_url();?>pemeriksaan/get_data_pasien",

                method : "POST",

                data : {id: id},

                dataType : 'json',

                success: function(data){



                    var html = '';

                    var i;

                    for(i=0; i<data.length; i++){

                

                        html += data[i].warna;

                    }

                    $('#warna').val(html);

                }

            });

        });

    });

</script>

<script type="text/javascript">

    $(document).ready(function(){

        $('#pasien_id').change(function(){

            var id=$(this).val();

            $.ajax({

                url : "<?php echo base_url();?>pemeriksaan/get_data_pasien",

                method : "POST",

                data : {id: id},

                dataType : 'json',

                success: function(data){



                    var html = '';

                    var i;

                    for(i=0; i<data.length; i++){

                

                        html += data[i].nama_spesies;

                    }

                    $('#spesies').val(html);

                }

            });

        });

    });

</script>

<script type="text/javascript">

    $(document).ready(function(){

        $('#pasien_id').change(function(){

            var id=$(this).val();

            $.ajax({

                url : "<?php echo base_url();?>pemeriksaan/get_data_pasien",

                method : "POST",

                data : {id: id},

                dataType : 'json',

                success: function(data){



                    var html = '';

                    var i;

                    for(i=0; i<data.length; i++){

                

                        html += data[i].tanggal_lahir;

                    }

                    $('#tanggal_lahir').val(html);

                }

            });

        });

    });

</script>

<script type="text/javascript">

    $(document).ready(function(){

        $('#pasien_id').change(function(){

            var id=$(this).val();

            $.ajax({

                url : "<?php echo base_url();?>pemeriksaan/get_data_pasien",

                method : "POST",

                data : {id: id},

                dataType : 'json',

                success: function(data){



                    var html = '';

                    var i;

                    for(i=0; i<data.length; i++){

                

                        html +=data[i].jenis_kelamin;

                    }

                    $('#jenis_kelamin').val(html);

                }

            });

        });

    });

</script>

<script type="text/javascript">

    $(document).ready(function(){

        $('#pasien_id').change(function(){

            var id=$(this).val();

            $.ajax({

                url : "<?php echo base_url();?>pemeriksaan/get_data_pasien",

                method : "POST",

                data : {id: id},

                dataType : 'json',

                success: function(data){



                    var html = '';

                    var i;

                    for(i=0; i<data.length; i++){

                

                        html +=data[i].umur ;

                    }

                    $('#umur').val(html);

                }

            });

        });

    });

</script>





<script type="text/javascript">

    $(document).ready(function(){

        $('#pemilik_id').change(function(){

            var id=$(this).val();

            $.ajax({

                url : "<?php echo base_url();?>pemeriksaan/get_data",

                method : "POST",

                data : {id: id},

                dataType : 'json',

                success: function(data){



                    var html = '';

                    var i;

                    for(i=0; i<data.length; i++){

                

                        html += data[i].alamat;

                    }

                    $('#alamat').val(html);

                }

            });

        });

    });

</script>

<script type="text/javascript">

    $(document).ready(function(){

        $('#pemilik_id').change(function(){

            var id=$(this).val();

            $.ajax({

                url : "<?php echo base_url();?>pemeriksaan/get_data",

                method : "POST",

                data : {id: id},

                dataType : 'json',

                success: function(data){



                    var html = '';

                    var i;

                    for(i=0; i<data.length; i++){

                      

                        html += data[i].telepon;

                    }

                    $('#telepon').val(html);

                }

            });

        });

    });

</script>

<script type="text/javascript">

  $('#m_datepicker_2').datepicker({

    onSelect: function(value, ui) {

        var today = new Date(), 

            dob = new Date(value), 

            // age = new Date(today - dob).getFullYear()-1970;

            tahun = today.getFullYear() - dob.getFullYear();

            bulan = today.getMonth() - dob.getMonth();

        

        $('#age').val(tahun + ' Tahun ' + bulan + ' Bulan');

    

    },

   dateFormat: 'yy-mm-dd',

    maxDate: '+0d',

    yearRange: '2010:2021',

    changeMonth: true,

    changeYear: true

});

</script>
<script type="text/javascript">

  $('#m_datepicker_1').datepicker({


   dateFormat: 'yy-mm-dd',

    maxDate: '+0d',

    yearRange: '2010:2021',

    changeMonth: true,

    changeYear: true

});

</script>
<script type="text/javascript">

  $('#m_datepicker_3').datepicker({


   dateFormat: 'yy-mm-dd',

    maxDate: '+0d',

    yearRange: '2010:2021',

    changeMonth: true,

    changeYear: true

});

</script>
<script type="text/javascript">

    $(document).ready(function(){

        $('#obat').change(function(){

            var id=$(this).val();

            $.ajax({

                url : "<?php echo base_url();?>pemeriksaan/get_data_obat",

                method : "POST",

                data : {id: id},

                dataType : 'json',

                success: function(data){

                    var html = '';

                    var i;

                    for(i=0; i<data.length; i++){

                        html += data[i].satuan;

                        

                    }

                    $('#satuan').val(html);

                     

                }

            });

    });



});

</script>
  </body>

  <!-- end::Body -->
</html>