@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Notifications', 'value' => "", 'value2' => ""])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        {{--        <div class="kt-portlet kt-portlet--mobile">--}}
        {{--            <div class="kt-portlet__head kt-portlet__head--lg">--}}
        {{--                <div class="kt-portlet__head-label">--}}
        {{--										<span class="kt-portlet__head-icon">--}}
        {{--											<i class="kt-font-brand flaticon2-line-chart"></i>--}}
        {{--										</span>--}}
        {{--                    <h3 class="kt-portlet__head-title">--}}
        {{--                        Academic--}}
        {{--                    </h3>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="row">

                <div class="col-xl-12 col-lg-12 ">

                    <!--begin:: Widgets/New Users-->
                    <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    <a href="#" >
                                       Parent
                                    </a>
                                </h3>
                            </div>
                        </div>
                            <div class="kt-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" >
                                        <div class="kt-widget4">
                                            <div class="kt-widget4__item">
                                                <div class="kt-widget4__info">

                                                </div>
                                                <a href="#" class="btn btn-sm btn-label-brand btn-bold">Detail</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!--end:: Widgets/New Users-->
                </div>

        </div>

    </div>
@endsection
