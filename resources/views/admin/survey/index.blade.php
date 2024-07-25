@extends('admin.layouts.main')
@section('title', 'Register')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Clubs', 'value' => "Register", 'value2' => ""])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--Begin::Section-->
        <div class="row">
            @foreach($surveys as $survey)
                <div class="col-xl-3">
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__body kt-portlet__body--fit-y">
                            <!--begin::Widget -->
                            <div class="kt-widget kt-widget--user-profile-4">
                                <div class="kt-widget__head">
                                    <div class="kt-widget__content">
                                        <div class="kt-widget__section">
                                            <a href="{{ route('survey.detail', ['id' => $survey->id])}}"
                                               class="kt-widget__username">
                                                {{ $survey->name }}
                                            </a>
                                            <div class="kt-widget__button">
                                                <img src="https://drive.google.com/uc?export=view&id="
                                                     onerror="this.src='{{ asset('assets/admin/images/no-image.jpg') }}'"
                                                     style="width: 150px; height: 150px">
                                            </div>
                                            <div class="kt-widget__action"><a
                                                    href="{{ route('survey.detail', ['id' => $survey->id])}}"
                                                    class="btn btn-label-brand btn-bold btn-sm btn-upper">
                                                    Your Survey
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Widget -->
                        </div>

                    </div>
                </div>
            @endforeach

                @if(session('success'))
            <div class="modal fade" id="popup_survey_success" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Successfully</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {!! session('success') !!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                        </div>
                    </div>
                </div>
            </div>
                @endif
        </div>


    </div>
@endsection
@section('script')
    <script language="javascript">
        $(window).on('load', function () {
            $('#popup_survey_success').modal('show');
        });
    </script>

    @endsection
