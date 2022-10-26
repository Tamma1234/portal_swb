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
                                        <div class="progress-bar kt-bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <span class="kt-widget__title">648 Comments</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--end:: Portlet-->

        <!--begin:: Portlet-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin:: Portlet-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body kt-portlet__body--fit">

                        <!--begin::Widget -->
                        <div class="kt-widget kt-widget--project-1">
                            <div class="kt-widget__head">
                                <div class="kt-widget__label">
                                    <div class="kt-widget__media">
															<span class="kt-media kt-media--lg kt-media--circle">
																<img src="assets/media/project-logos/3.png" alt="image">
															</span>
                                    </div>
                                    <div class="kt-widget__info kt-margin-t-5">
                                        <a href="#" class="kt-widget__title">
                                            Nexa - Next generation SAAS
                                        </a>
                                        <span class="kt-widget__desc">
																Creates Limitless possibilities
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
                                            <span class="btn btn-label-brand btn-sm btn-bold btn-upper">07 may, 18</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
															<span class="kt-widget__date">
																Due Date
															</span>
                                        <div class="kt-widget__label">
                                            <span class="btn btn-label-danger btn-sm btn-bold btn-upper">07 0ct, 18</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="kt-widget__text">
														I distinguish three main text objecttives.First, your objective could
														be merely to inform people.A second be to persuade people.
													</span>
                            </div>
                        </div>

                        <!--end::Widget -->
                    </div>
                </div>
                <!--end:: Portlet-->
            </div>
            <div class="col-xl-6">

                <!--begin:: Portlet-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body kt-portlet__body--fit">

                        <!--begin::Widget -->
                        <div class="kt-widget kt-widget--project-1">
                            <div class="kt-widget__head">
                                <div class="kt-widget__label">
                                    <div class="kt-widget__media">
															<span class="kt-media kt-media--lg kt-media--circle kt-hidden-">
																<img src="assets/media/project-logos/4.png" alt="image">
															</span>
                                        <span class="kt-media kt-media--lg kt-media--circle kt-hidden">
																<img src="assets/media/users/100_11.jpg" alt="image">
															</span>
                                    </div>
                                    <div class="kt-widget__info kt-margin-t-5">
                                        <a href="#" class="kt-widget__title">
                                            B & Q - Food Company
                                        </a>
                                        <span class="kt-widget__desc">
																Tasty food for everyone
															</span>
                                    </div>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                        <i class="flaticon-more-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                    <span class="kt-nav__link-text">Reports</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                    <span class="kt-nav__link-text">Messages</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                    <span class="kt-nav__link-text">Charts</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                    <span class="kt-nav__link-text">Members</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                    <span class="kt-nav__link-text">Settings</span>
                                                </a>
                                            </li>
                                        </ul>
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
                                            <span class="btn btn-label-brand btn-sm btn-bold btn-upper">24 auf, 17</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
															<span class="kt-widget__date">
																Due Date
															</span>
                                        <div class="kt-widget__label">
                                            <span class="btn btn-label-danger btn-sm btn-bold btn-upper">07 0ct, 18</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item flex-fill">
                                        <span class="kt-widget__subtitel">Progress</span>
                                        <div class="kt-widget__progress d-flex  align-items-center">
                                            <div class="progress" style="height: 5px;width: 100%;">
                                                <div class="progress-bar kt-bg-success" role="progressbar" style="width: 92%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="kt-widget__stat">
																	92%
																</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="kt-widget__text">
														I distinguish three main text objecttives.First, your objective could
														be merely to inform people.A second be to persuade people.
														You want people buy your products
													</span>
                                <div class="kt-widget__content">
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__subtitle">Budget</span>
                                        <span class="kt-widget__value"><span>$</span>132,200</span>
                                    </div>
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__subtitle">Expances</span>
                                        <span class="kt-widget__value"><span>$</span>43,520</span>
                                    </div>
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__subtitle">Members</span>
                                        <div class="kt-media-group">
                                            <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                                                <img src="assets/media/users/100_7.jpg" alt="image">
                                            </a>
                                            <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                                                <img src="assets/media/users/100_3.jpg" alt="image">
                                            </a>
                                            <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                                                <img src="assets/media/users/100_2.jpg" alt="image">
                                            </a>
                                            <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
                                                <img src="assets/media/users/100_13.jpg" alt="image">
                                            </a>
                                            <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                                <img src="assets/media/users/100_4.jpg" alt="image">
                                            </a>
                                            <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                                <span>+3</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget__footer">
                                <div class="kt-widget__wrapper">
                                    <div class="kt-widget__section">
                                        <div class="kt-widget__blog">
                                            <i class="flaticon2-list-1"></i>
                                            <a href="#" class="kt-widget__value kt-font-brand">56 Tasks</a>
                                        </div>
                                        <div class="kt-widget__blog">
                                            <i class="flaticon2-talk"></i>
                                            <a href="#" class="kt-widget__value kt-font-brand">745 Comments</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__section">
                                        <button type="button" class="btn btn-brand btn-sm btn-upper btn-bold">details</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end::Widget -->
                    </div>
                </div>

                <!--end:: Portlet-->
            </div>
        </div>

        <!--End::Pagination-->
    </div>
@endsection
