@extends('admin.layouts.main')
@section('title', 'Register')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Clubs', 'value' => "Register", 'value2' => ""])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--Begin::Section-->
        <div class="row">
            @foreach($clubs as $item)
                <?php
                $userClub = \App\Models\UserClub::where('club_id', $item->id)->where('user_code', $user_code)->first();
                ?>
                <div class="col-xl-3">
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <form action="{{ route('clubs.store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="club_id">
                            <div class="kt-portlet__body kt-portlet__body--fit-y">
                                <!--begin::Widget -->
                                <div class="kt-widget kt-widget--user-profile-4">
                                    <div class="kt-widget__head">
                                        <div class="kt-widget__content">
                                            <div class="kt-widget__section">
                                                <a href="#" class="kt-widget__username">
                                                    {{ $item->name }}
                                                </a>
                                                <div class="kt-widget__button">
                                                    <span
                                                        class="btn btn-label btn-sm">{{ $item->description }}</span>
                                                </div>
                                                @if($userClub)
                                                    <div class="kt-widget__action">
                                                        <a href="{{ route('club.detail', ['id' => $item->id]) }}"
                                                                class="btn btn-label-brand btn-bold btn-sm btn-upper">
                                                            View Club
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="kt-widget__action">
                                                        <button type="submit"
                                                                class="btn btn-label-brand btn-bold btn-sm btn-upper">
                                                            Register
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Widget -->
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
            {{--            <div class="col-xl-3">--}}
            {{--                <div class="kt-portlet kt-portlet--height-fluid">--}}
            {{--                    <div class="kt-portlet__head kt-portlet__head--noborder">--}}
            {{--                        <div class="kt-portlet__head-label">--}}
            {{--                            <h3 class="kt-portlet__head-title">--}}
            {{--                            </h3>--}}
            {{--                        </div>--}}
            {{--                        <div class="kt-portlet__head-toolbar">--}}
            {{--                            <a href="#" class="btn btn-clean btn-icon" data-toggle="dropdown">--}}
            {{--                                <i class="flaticon-more-1"></i>--}}
            {{--                            </a>--}}
            {{--                            <div class="dropdown-menu dropdown-menu-right">--}}
            {{--                                <ul class="kt-nav">--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Reports</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-send"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Messages</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Charts</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-avatar"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Members</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-settings"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Settings</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                </ul>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="kt-portlet__body kt-portlet__body--fit-y kt-margin-b-40">--}}

            {{--                        <!--begin::Widget -->--}}
            {{--                        <div class="kt-widget kt-widget--user-profile-4">--}}
            {{--                            <div class="kt-widget__head">--}}
            {{--                                <div class="kt-widget__media">--}}
            {{--                                    <img class="kt-widget__img kt-hidden-" src="assets/media/project-logos/2.png" alt="image">--}}
            {{--                                    <img class="kt-widget__img kt-hidden" src="assets/media/users/300_21.jpg" alt="image">--}}
            {{--                                    <div class="kt-widget__pic kt-widget__pic--success kt-font-success kt-font-boldest kt-hidden">--}}
            {{--                                        MP--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="kt-widget__content">--}}
            {{--                                    <div class="kt-widget__section">--}}
            {{--                                        <a href="#" class="kt-widget__username">--}}
            {{--                                            B & Q - Food Company--}}
            {{--                                        </a>--}}
            {{--                                        <div class="kt-widget__button">--}}
            {{--                                            <span class="btn btn-label-danger btn-sm">Rejected</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="kt-widget__action">--}}
            {{--                                            <button type="button" class="btn btn-label-brand btn-bold btn-sm btn-upper">view project</button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                        <!--end::Widget -->--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="col-xl-3">--}}
            {{--                <div class="kt-portlet kt-portlet--height-fluid">--}}
            {{--                    <div class="kt-portlet__head kt-portlet__head--noborder">--}}
            {{--                        <div class="kt-portlet__head-label">--}}
            {{--                            <h3 class="kt-portlet__head-title">--}}
            {{--                            </h3>--}}
            {{--                        </div>--}}
            {{--                        <div class="kt-portlet__head-toolbar">--}}
            {{--                            <a href="#" class="btn btn-clean btn-icon" data-toggle="dropdown">--}}
            {{--                                <i class="flaticon-more-1"></i>--}}
            {{--                            </a>--}}
            {{--                            <div class="dropdown-menu dropdown-menu-right">--}}
            {{--                                <ul class="kt-nav">--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Reports</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-send"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Messages</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Charts</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-avatar"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Members</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-settings"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Settings</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                </ul>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="kt-portlet__body kt-portlet__body--fit-y kt-margin-b-40">--}}

            {{--                        <!--begin::Widget -->--}}
            {{--                        <div class="kt-widget kt-widget--user-profile-4">--}}
            {{--                            <div class="kt-widget__head">--}}
            {{--                                <div class="kt-widget__media">--}}
            {{--                                    <img class="kt-widget__img kt-hidden-" src="assets/media/project-logos/3.png" alt="image">--}}
            {{--                                    <img class="kt-widget__img kt-hidden" src="assets/media/users/300_2.jpg" alt="image">--}}
            {{--                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-hidden">--}}
            {{--                                        JM--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="kt-widget__content">--}}
            {{--                                    <div class="kt-widget__section">--}}
            {{--                                        <a href="#" class="kt-widget__username">--}}
            {{--                                            Introducing New Feature--}}
            {{--                                        </a>--}}
            {{--                                        <div class="kt-widget__button">--}}
            {{--                                            <span class="btn btn-label-success btn-sm">Active</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="kt-widget__action">--}}
            {{--                                            <button type="button" class="btn btn-label-brand btn-bold btn-sm btn-upper">view project</button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                        <!--end::Widget -->--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="col-xl-3">--}}
            {{--                <div class="kt-portlet kt-portlet--height-fluid">--}}
            {{--                    <div class="kt-portlet__head kt-portlet__head--noborder">--}}
            {{--                        <div class="kt-portlet__head-label">--}}
            {{--                            <h3 class="kt-portlet__head-title">--}}
            {{--                            </h3>--}}
            {{--                        </div>--}}
            {{--                        <div class="kt-portlet__head-toolbar">--}}
            {{--                            <a href="#" class="btn btn-clean btn-icon" data-toggle="dropdown">--}}
            {{--                                <i class="flaticon-more-1"></i>--}}
            {{--                            </a>--}}
            {{--                            <div class="dropdown-menu dropdown-menu-right">--}}
            {{--                                <ul class="kt-nav">--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Reports</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-send"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Messages</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Charts</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-avatar"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Members</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="kt-nav__item">--}}
            {{--                                        <a href="#" class="kt-nav__link">--}}
            {{--                                            <i class="kt-nav__link-icon flaticon2-settings"></i>--}}
            {{--                                            <span class="kt-nav__link-text">Settings</span>--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                </ul>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="kt-portlet__body kt-portlet__body--fit-y kt-margin-b-40">--}}

            {{--                        <!--begin::Widget -->--}}
            {{--                        <div class="kt-widget kt-widget--user-profile-4">--}}
            {{--                            <div class="kt-widget__head">--}}
            {{--                                <div class="kt-widget__media">--}}
            {{--                                    <img class="kt-widget__img kt-hidden-" src="assets/media/project-logos/4.png" alt="image">--}}
            {{--                                    <img class="kt-widget__img kt-hidden" src="assets/media/users/300_1.jpg" alt="image">--}}
            {{--                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-hidden">--}}
            {{--                                        AP--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="kt-widget__content">--}}
            {{--                                    <div class="kt-widget__section">--}}
            {{--                                        <a href="#" class="kt-widget__username">--}}
            {{--                                            Stanton, Friesen and Grant--}}
            {{--                                        </a>--}}
            {{--                                        <div class="kt-widget__button">--}}
            {{--                                            <span class="btn btn-label-brand btn-sm">Active</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="kt-widget__action">--}}
            {{--                                            <button type="button" class="btn btn-label-brand btn-bold btn-sm btn-upper">view project</button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                        <!--end::Widget -->--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>


    </div>
@endsection
