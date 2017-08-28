@extends('layouts/default') {{-- Page title --}} @section('title') Sweet Alert @stop {{-- local styles --}} @section('header_styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/sweetalert2/css/sweetalert2.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/custom_css/sweet_alert2.css')}}">@stop {{-- Page Header--}} @section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Sweet Alert</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li> Pages</li>
        <li class="active">
            Sweet Alert
        </li>
    </ol>
</section>
@stop {{-- Page content --}} @section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-bell" aria-hidden="true"></i>
                                Sweet Alerts
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <!--=============panel content starting=============-->
                <div class="row m-a-10">
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body success_alert text-center">
                                <h5> Success Alert <i class="fa fa-check-circle-o"></i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body ok_message text-center">
                                <h5> Ok Message <i class="fa fa-thumbs-o-up"></i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body basicalert text-center ">
                                <h5> Alert <i class="fa fa-bell-o"></i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body ip_alert text-center">
                                <h5> Ip Alert <i class="fa fa-info-circle"></i></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--first row end-->
                <div class="row m-a-10">
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body custom_icon text-center">
                                <h5> Custom Image <i class="fa fa-picture-o"></i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body custom_html text-center">
                                <h5> Custom Html <i class="fa fa-code"></i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body auto_close text-center">
                                <h5> Alert Auto Close <i class="fa fa-magic"></i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body prom_alert text-center">
                                <h5> Prompt Alert <i class="fa fa-tree"></i></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--second row end-->
                <div class="row m-a-10">
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body text-center" id="info-alert">
                                <h5> Info Alert <i class="fa fa-info"></i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body text-center" id="success-alert">
                                <h5> Successfully <i class="fa fa-check"></i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body text-center" id="warning-alert">
                                <h5> Warning Alert <i class="fa fa-exclamation"></i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel  panel-default hvr-sweep-to-right">
                            <div class="panel-body text-center" id="danger-alert">
                                <h5> Danger Alert <i class="fa fa-times"></i></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--third row end-->
                <!--=================== panel content end ======================-->
            </div>
            <!--end of panel body-->
        </div>
    </div>
</div> @stop {{-- local scripts --}} @section('footer_scripts')
<script type="text/javascript" src="{{asset('vendors/sweetalert2/js/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom_js/sweetalert.js')}}"></script>@stop
