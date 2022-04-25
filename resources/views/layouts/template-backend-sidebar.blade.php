@extends('layouts.template-backend')

@section('main-sidebar')

<!--begin::Aside-->
<div class="aside aside-left d-flex flex-column" id="kt_aside">
    <!--begin::Brand-->
    <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-4 py-lg-8">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="assets/media/logos/logo-letter-9.png" class="max-h-30px" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Nav Wrapper-->
    <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pt-7">
        <!--begin::Nav-->
        <ul class="nav flex-column">
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Latest Projects">
                <a href="#" class="nav-link btn btn-icon btn-clean btn-icon-white btn-lg active">
                    <i class="flaticon2-protection icon-lg"></i>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Data Tiket">



                <a href="/tiket" class="nav-link btn btn-icon btn-icon-white btn-lg" role="tab">
                    <i class="icon-l fas fa-ticket-alt"></i>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Data Petugas">
                <a href="#" class="nav-link btn btn-icon btn-icon-white btn-lg" data-toggle="tab" data-target="#kt_aside_tab_2" role="tab">
                    <i class="icon-l fas fa-user-plus"></i>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Riwayat">
                <a href="#" class="nav-link btn btn-icon btn-icon-white btn-lg" data-toggle="tab" data-target="#kt_aside_tab_3" role="tab">
                    <i class="icon-l fas fa-file-invoice-dollar"></i>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Data pemesanan tiket">
                <a href="/dtpemesanantiket" class="nav-link btn btn-icon btn-icon-white btn-lg">
                    <i class="icon-l fas fa-fax"></i>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Laporan">
                <a href="#" class="nnav-link btn btn-icon btn-icon-white btn-lg" data-toggle="tab" data-target="#kt_aside_tab_5" role="tab">
                    <i class="icon-xl fas fa-chart-line"></i>
                </a>
            </li>
            <!--end::Item-->
        </ul>
        <!--end::Nav-->
    </div>
    <!--end::Nav Wrapper-->
    <!--begin::Footer-->
    <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-8">
        <!--begin::Quick Panel-->
        <a href="#" class="btn btn-icon btn-clean btn-lg mb-1" id="kt_quick_panel_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Quick Panel">
            <span class="svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </a>
        <!--end::Quick Panel-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Aside-->

@endsection