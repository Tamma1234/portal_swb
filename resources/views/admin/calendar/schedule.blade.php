@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'calendar', 'value' => "Schedule", 'value2' => ""])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div class="kt-portlet" id="kt_portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon-map-location"></i>
												</span>
                            <h3 class="kt-portlet__head-title">
                                Schedule
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="kt_calendar"></div>
                    </div>
                </div>

                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection
