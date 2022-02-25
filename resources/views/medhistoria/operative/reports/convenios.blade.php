@extends('medhistoria.layouts.app')
@section('title', __('trans.patients'))

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugin/DataTables/css/jquery.dataTables.min.css') }}"/>
@endsection

@section('content')
    <!-- Bread crumb and right sidebar toggle -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h2 class="txt_blue_bold mb-0">{{ __('trans.agreements') }}</h2>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="ver información del paciente">{{ __('trans.home') }}</a>
                </li>
                <li class="breadcrumb-item ">{{ __('trans.agreements') }}</li>
            </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->

    <!-- Container fluid  -->
    <div class="container-fluid">
        <div class="card card-body content_search">
            <div class="row">
                <div class="col-md-4 col-xl-6 py-1">
                    <form>
                        <input type="text" class="form-control product-search pad_search" id="input-search" placeholder="Búsqueda de Convenios">
                    </form>
                </div>

                <div class="col-md-8 col-xl-6 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <a href="{{ route('medhistoria.patients.create') }}" id="btn-add-contact" class="btn btn-info align-self-center fs-7 fw_bold py-2 d-flex">
                        <i data-feather="plus"></i> &nbsp; {{ __('trans.add-agreement') }}
                    </a>
                </div>
            </div>
        </div>

        <div class="card card-body pad_content_table">
            <table class="data_table">
                <thead>
                    <tr>
                        <th class="txt_blue_light">{{ __('trans.code') }}</th>
                        <th class="txt_blue_light">{{ __('trans.name') }}</th>
                        <th class="txt_blue_light">{{ __('trans.company_type') }}</th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">S123458</span>
                        </td>
                        <td class="pt-4 pb-3">   
                            <h5 class="txt_blue_bold fs-9 m-0" >Soy Salud</h5>
                            <span class="txt_blue_300 fs-9">EPS</span>
                        </td>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">Privada</span>
                        </td>
                        <td class="pad_icon_table pt-4 pb-3">
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ver información">
                                <i data-feather="eye" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Decargar información">
                                <i data-feather="edit-3" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Formalidad de pago">
                                <i data-feather="credit-card" class="icon_info"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">S123458</span>
                        </td>
                        <td class="pt-4 pb-3">   
                            <h5 class="txt_blue_bold fs-9 m-0" >Soy Salud</h5>
                            <span class="txt_blue_300 fs-9">EPS</span>
                        </td>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">Privada</span>
                        </td>
                        <td class="pad_icon_table pt-4 pb-3">
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ver información">
                                <i data-feather="eye" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Decargar información">
                                <i data-feather="edit-3" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Formalidad de pago">
                                <i data-feather="credit-card" class="icon_info"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">S123458</span>
                        </td>
                        <td class="pt-4 pb-3">   
                            <h5 class="txt_blue_bold fs-9 m-0" >Soy Salud</h5>
                            <span class="txt_blue_300 fs-9">EPS</span>
                        </td>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">Privada</span>
                        </td>
                        <td class="pad_icon_table pt-4 pb-3">
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ver información">
                                <i data-feather="eye" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Decargar información">
                                <i data-feather="edit-3" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Formalidad de pago">
                                <i data-feather="credit-card" class="icon_info"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">S123458</span>
                        </td>
                        <td class="pt-4 pb-3">   
                            <h5 class="txt_blue_bold fs-9 m-0" >Soy Salud</h5>
                            <span class="txt_blue_300 fs-9">EPS</span>
                        </td>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">Privada</span>
                        </td>
                        <td class="pad_icon_table pt-4 pb-3">
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ver información">
                                <i data-feather="eye" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Decargar información">
                                <i data-feather="edit-3" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Formalidad de pago">
                                <i data-feather="credit-card" class="icon_info"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">S123458</span>
                        </td>
                        <td class="pt-4 pb-3">   
                            <h5 class="txt_blue_bold fs-9 m-0" >Soy Salud</h5>
                            <span class="txt_blue_300 fs-9">EPS</span>
                        </td>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">Privada</span>
                        </td>
                        <td class="pad_icon_table pt-4 pb-3">
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ver información">
                                <i data-feather="eye" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Decargar información">
                                <i data-feather="edit-3" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Formalidad de pago">
                                <i data-feather="credit-card" class="icon_info"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">S123458</span>
                        </td>
                        <td class="pt-4 pb-3">   
                            <h5 class="txt_blue_bold fs-9 m-0" >Soy Salud</h5>
                            <span class="txt_blue_300 fs-9">EPS</span>
                        </td>
                        <td class="pt-4 pb-3">
                            <span class="txt_blue_300 fs-9">Privada</span>
                        </td>
                        <td class="pad_icon_table pt-4 pb-3">
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ver información">
                                <i data-feather="eye" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Decargar información">
                                <i data-feather="edit-3" class="icon_info"></i>
                            </a>
                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Formalidad de pago">
                                <i data-feather="credit-card" class="icon_info"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Container fluid  -->
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('plugin/DataTables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugin/DataTables/Responsive-2.2.9/js/dataTables.responsive.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.data_table').DataTable( {
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
                },

                targets: [3],
                responsive: true,
                paging:   false,
                ordering: true,
                info:     false,
                searching: false,
                stripeClasses: [],

                columnDefs: [
                    { orderable: false, targets: -1 }
                ]
            });
        });

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        })
    </script>
@endsection