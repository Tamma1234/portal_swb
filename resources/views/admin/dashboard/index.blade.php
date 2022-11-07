@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Dashboard', 'value' => "", 'value2' => ""])
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--begin:: Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        {{--                        <div class="kt-widget__media kt-hidden-">--}}
                        {{--                            <img src="assets/media/users/100_1.jpg" alt="image">--}}
                        {{--                        </div>--}}
                        {{--                        <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">--}}
                        {{--                            JM--}}
                        {{--                        </div>--}}
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__title">
                                    {{ $user->user_surname .' '. $user->user_middlename .' '. $user->user_givenname }}
                                    <i class="flaticon2-correct kt-font-success"></i>
                                </a>
                            </div>
                            <div class="kt-widget__subhead">
                                <a href="#"><i class="flaticon2-new-email"></i>{{ $user->user_email }}</a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>{{ $user->nganh }} </a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>{{ $user->nganh }} </a>
                            </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__desc">
                                    <a href="#" class="kt-widget__value kt-font-brand">
                                        <i class="flaticon2-placeholder"></i>
                                        {{ $user->user_address }}
                                    </a>
                                </div>
                                <div class="kt-widget__progress">
                                    <div class="kt-widget__text">
                                        Progress
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-success" role="progressbar" style="width: 65%;"
                                             aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        {{ $countGroup }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__bottom">
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-file-2"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">{{ $countGroup }} Group</span>
                                <a href="{{ route('student.index') }}" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-chat-1"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">{{ count($comment) }}</span>
                                <a href="{{ route('queries.history') }}" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--end:: Portlet-->

        <!--begin:: Portlet-->
        <div class="row">
            @foreach($events as $event)
                <div class="col-xl-6">
                    <!--begin:: Portlet-->
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__body kt-portlet__body--fit">

                            <!--begin::Widget -->
                            <div class="kt-widget kt-widget--project-1">
                                <div class="kt-widget__head">
                                    <div class="kt-widget__label">
                                        <div class="kt-widget__info kt-margin-t-5">
                                            <a href="#" class="kt-widget__title">
                                                {{ $event->name_event }}  <span
                                                    class="btn btn-label-brand btn-sm btn-bold btn-upper">EVENT</span>
                                            </a>
                                            <span class="kt-widget__desc">
																{{ $event->description_event }}
															</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__body">
                                    <div class="kt-widget__stats">
                                        <div class="kt-widget__item">
															<span class="kt-widget__date">
																Start Date
															</span>
                                            <div class="kt-widget__label">
                                                <span
                                                    class="btn btn-label-brand btn-sm btn-bold btn-upper">{{ $event->start_date }}</span>
                                            </div>
                                        </div>
                                        <div class="kt-widget__item">
															<span class="kt-widget__date">
																Due Date
															</span>
                                            <div class="kt-widget__label">
                                                <span
                                                    class="btn btn-label-danger btn-sm btn-bold btn-upper">{{ $event->end_date }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::Widget -->
                        </div>
                    </div>
                    <!--end:: Portlet-->
                </div>
            @endforeach
        </div>

        <!--End::Pagination-->
    </div>
@endsection
