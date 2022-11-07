@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Queries', 'value' => "", 'value2' => ""])
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--Begin::App-->
        <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

            <!--Begin:: App Aside Mobile Toggle-->
            <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                <i class="la la-close"></i>
            </button>

            <!--End:: App Aside Mobile Toggle-->

            <!--Begin:: App Aside-->
            <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

                <!--begin:: Widgets/Applications/User/Profile1-->
                <div class="kt-portlet ">
                    <div class="kt-portlet__head  kt-portlet__head--noborder">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                <i class="flaticon-more-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Export Options
                                        <span data-toggle="kt-tooltip" data-placement="right"
                                              title="Click to learn more...">
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1"
                                                                     class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<circle fill="#000000" opacity="0.3" cx="12"
                                                                                cy="12" r="10"/>
																		<rect fill="#000000" x="11" y="10" width="2"
                                                                              height="7" rx="1"/>
																		<rect fill="#000000" x="11" y="7" width="2"
                                                                              height="2" rx="1"/>
																	</g>
																</svg> </span>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support</span>
                                            <span class="kt-nav__link-badge">
																	<span
                                                                        class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip"
                                           data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>

                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fit-y">

                        <!--begin::Widget -->
                        <div class="kt-widget kt-widget--user-profile-1">
                            <div class="kt-widget__head">
                                <div class="kt-widget__media">
                                    <img src="{{ asset('storage/images/636382c3288a0_306039235_khiet-dan.png' ) }}"
                                         alt="image">
                                </div>
                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="#" class="kt-widget__username">
                                            {{ $user->user_surname .' '. $user->user_middlename .' '. $user->user_givenname  }}
                                            <i class="flaticon2-correct kt-font-success"></i>
                                        </a>
                                        <span class="kt-widget__subtitle">
														Major: {{ $user->nganh }}
															</span>
                                    </div>
                                    <div class="kt-widget__action">
                                        <button type="button" class="btn btn-info btn-sm">chat</button>&nbsp;
                                        <button type="button" class="btn btn-success btn-sm">follow</button>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget__body">
                                <div class="kt-widget__content">
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">Email:</span>
                                        <a href="#" class="kt-widget__data">{{ $user->user_email }}</a>
                                    </div>
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">Phone:</span>
                                        <a href="#" class="kt-widget__data">{{ $user->user_telephone }}</a>
                                    </div>
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">Location: </span>
                                        <span class="kt-widget__data col-lg-9 col-xl-8">{{ $user->user_address }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end::Widget -->
                    </div>
                </div>

                <!--end:: Widgets/Applications/User/Profile1-->
            </div>

            <!--End:: App Aside-->

            <!--Begin:: App Content-->
            <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">Account Information</h3>
                                </div>
                            </div>
                            <form class="kt-form kt-form--label-right">
                                <div class="kt-portlet__body">
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-section__body">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Full name:</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" disabled
                                                           value="{{ $user->user_surname .' '. $user->user_middlename .' '. $user->user_givenname }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">User code:</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" disabled
                                                           value="{{ $user->user_code }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">User code AU:</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" disabled
                                                           value="{{ $user->user_code_au }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">DOB:</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" disabled
                                                           value="{{ $user->user_DOB }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Gender:</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    @if($user->gender == 1)
                                                        <input class="form-control" disabled type="text" value="Male">
                                                    @else
                                                        <input class="form-control" disabled type="text" value="Female">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Address:</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" disabled
                                                           value="{{ $user->user_address }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Course:</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" disabled
                                                           value="{{ $user->nganh }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Major:</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" disabled
                                                           value="{{ $user->curriculums ? $user->curriculums->chuyen_nganh : "" }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Study Status:</label>
                                                <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control" disabled type="text" value="Male">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--End:: App Content-->
        </div>

        <!--End::App-->
    </div>
@endsection



