@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Parent Engagement', 'value' => "", 'value2' => ""])

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
                                @if($user->parent_active == 0)
                                    <span class="color-danger">
                                         You have granted parents permission to view your class schedule and transcript. If you do not want to give parents permission to view, you can click to decline below
                                </span>
                                @else
                                    <span class="color-danger">
                                          Do you want to show your parents your study results? (note that parents are the ones who pay for you to go to school)
                                    </span>
                                @endif
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Form-->
                        <form class="kt-form" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-3">
														<span class="kt-switch kt-switch--lg kt-switch--icon">
															<label>
																<input type="checkbox"
                                                                       {{ $user->parent_active == 0 ? "checked" : "" }} name="session_check"
                                                                       id="parent_check">
																<span></span>
															</label>
														</span>
                                </div>
                            </div>
                        </form>
                        @if($user->parent_active == 0)
                            <form class="kt-form" method="POST">
                                @csrf
                                <div class="check-parent" id="check-all">
                                    <div class="form-group row">
                                        <div class="">
														<span
                                                            class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
															<label>
																<input type="checkbox" checked="checked" name="" id="calendar">
																<span></span>
															</label>
														</span>
                                        </div>
                                        <label class="col-3 col-form-label">Calendar</label>
                                    </div>
                                    <div class="form-group row">
                                        <div class="">
														<span
                                                            class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
															<label>
																<input type="checkbox" checked="checked" name="" id="graduation">
																<span></span>
															</label>
														</span>
                                        </div>
                                        <label class="col-3 col-form-label">Graduation</label>
                                    </div>
                                    <div class="form-group row">
                                        <div class="">
														<span
                                                            class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
															<label>
																<input type="checkbox" checked="checked" name="" id="events">
																<span></span>
															</label>
														</span>
                                        </div>
                                        <label class="col-3 col-form-label">Events</label>
                                    </div>
                                </div>
                            </form>
                    @endif
                    <!--end::Form-->
                    </div>
                </div>
                <!--end:: Widgets/New Users-->
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script>
        $('#parent_check').on("click", function () {
            let parent_active = "";
            let parent_check = $('#parent_check').is(":checked");

            var _token = $('input[name="_token"]').val();
            if (parent_check == true) {
                $("#check-all").show();

                parent_active = 0;
            } else {
                $("#check-all").hide();
                parent_active = 1;
            }
            $.ajax({
                url: "{{ route('parent.store') }}",
                type: 'POST',
                data: {parent_active: parent_active, _token: _token},
            }).done(function (response) {
                // Gọi hàm renderCart trả về cart item con
                Swal.fire({
                    title: "Success!",
                    text: response,
                    icon: "success"
                });
                location.reload();
            });
        });

        $('#calendar').on("click", function () {
            let calendar_active = "";
            let event_active = "";
            let graduation_active = "";
            let calendar = $('#calendar').is(":checked");
            let grade = $('#graduation').is(":checked");
            let event = $('#events').is(":checked");
            var _token = $('input[name="_token"]').val();

            if (grade == true) {
                graduation_active = 0;
            } else {
                graduation_active = 1;
            }

            if (calendar == true) {
                calendar_active = 0;
            } else {
                calendar_active = 1;
            }
            if (event == true) {
                event_active = 0;
            } else {
                event_active = 1;
            }
            $.ajax({
                url: "{{ route('setting.store') }}",
                type: 'POST',
                data: {calendar_active: calendar_active,event_active:event_active,graduation_active:graduation_active, _token: _token},
            }).done(function (response) {
                // Gọi hàm renderCart trả về cart item con
            });
        });

        {{--$('#graduation').on("click", function () {--}}
        {{--    let graduation_active = "";--}}
        {{--    let grade = $('#graduation').is(":checked");--}}
        {{--    var _token = $('input[name="_token"]').val();--}}

        {{--    if (grade == true) {--}}
        {{--        graduation_active = 0;--}}
        {{--    } else {--}}
        {{--        graduation_active = 1;--}}
        {{--    }--}}
        {{--    $.ajax({--}}
        {{--        url: "{{ route('setting.store') }}",--}}
        {{--        type: 'POST',--}}
        {{--        data: {graduation_active: graduation_active, _token: _token},--}}
        {{--    }).done(function (response) {--}}
        {{--        // Gọi hàm renderCart trả về cart item con--}}
        {{--    });--}}
        {{--})--}}

        {{--$('#events').on("click", function () {--}}
        {{--    let event_active = "";--}}
        {{--    let event = $('#events').is(":checked");--}}
        {{--    var _token = $('input[name="_token"]').val();--}}

        {{--    if (event == true) {--}}
        {{--        event_active = 0;--}}
        {{--    } else {--}}
        {{--        event_active = 1;--}}
        {{--    }--}}

        {{--    $.ajax({--}}
        {{--        url: "{{ route('setting.store') }}",--}}
        {{--        type: 'POST',--}}
        {{--        data: $("form").serialize(),--}}
        {{--    }).done(function (response) {--}}
        {{--        // Gọi hàm renderCart trả về cart item con--}}
        {{--    });--}}
        {{--})--}}
    </script>
@endsection
