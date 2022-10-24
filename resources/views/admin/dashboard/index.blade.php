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
                        <div class="kt-widget__media kt-hidden-">
                            <img src="assets/media/users/100_1.jpg" alt="image">
                        </div>
                        <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                            JM
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">
                                    {{ $user->user_surname .' '. $user->user_middlename .' '. $user->user_givenname }}
                                    <i class="flaticon2-correct kt-font-success"></i>
                                </a>
                            </div>
                            <div class="kt-widget__subhead">
                                <a href="#"><i class="flaticon2-new-email"></i>{{ $user->user_email }}</a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>{{ $user->nganh }} </a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>{{ $user->nganh }} </a>
                                <a href="#"><i class="flaticon2-placeholder"></i>{{ $user->nganh }}</a>
                            </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__desc">
                                    I distinguish three main text objektive could be merely to inform people.
                                    <br> A second could be persuade people.You want people to bay objective
                                </div>
                                <div class="kt-widget__progress">
                                    <div class="kt-widget__text">
                                        Progress
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        78%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__bottom">
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Earnings</span>
                                <span class="kt-widget__value"><span>$</span>249,500</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-confetti"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Expenses</span>
                                <span class="kt-widget__value"><span>$</span>164,700</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-pie-chart"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Net</span>
                                <span class="kt-widget__value"><span>$</span>782,300</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-file-2"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">73 Tasks</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
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
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <div class="kt-widget__details">
                                <div class="kt-section__content kt-section__content--solid">
                                    <div class="kt-media-group">
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                                            <img src="assets/media/users/100_1.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                                            <img src="assets/media/users/100_10.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                                            <img src="assets/media/users/100_11.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <img src="assets/media/users/100_3.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <span>+5</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Portlet-->

        <!--begin:: Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__media kt-hidden">
                            <img src="assets/media/users/100_1.jpg" alt="image">
                        </div>
                        <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden-">
                            MP
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">
                                    Matt Pears
                                </a>
                                <div class="kt-widget__action">
                                    <button type="button" class="btn btn-label-success btn-sm btn-upper">ask</button>&nbsp;
                                    <button type="button" class="btn btn-brand btn-sm btn-upper">hire</button>
                                </div>
                            </div>
                            <div class="kt-widget__subhead">
                                <a href="#"><i class="flaticon2-new-email"></i>matt@stream.com</a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>Designer</a>
                                <a href="#"><i class="flaticon2-placeholder"></i>America</a>
                            </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__desc">
                                    I distinguish three main text objektive could be merely to inform people.
                                    <br> A second could be persuade people.You want people to bay objective
                                </div>
                                <div class="kt-widget__progress">
                                    <div class="kt-widget__text">
                                        Progress
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        53%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__bottom">
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Earnings</span>
                                <span class="kt-widget__value"><span>$</span>145,200</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-confetti"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Expenses</span>
                                <span class="kt-widget__value"><span>$</span>274,230</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-pie-chart"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Net</span>
                                <span class="kt-widget__value"><span>$</span>461,120</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-file-2"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">45 Tasks</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-chat-1"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">968 Comments</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <div class="kt-widget__details">
                                <div class="kt-section__content kt-section__content--solid">
                                    <div class="kt-media-group">
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                                            <img src="assets/media/users/100_1.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                                            <img src="assets/media/users/100_10.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                                            <img src="assets/media/users/100_11.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
                                            <img src="assets/media/users/100_2.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <img src="assets/media/users/100_3.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <span>+3</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Portlet-->

        <!--begin:: Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__media kt-hidden-">
                            <img src="assets/media/users/100_10.jpg" alt="image">
                        </div>
                        <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                            ChS
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">
                                    Charlie Stone
                                    <i class="flaticon2-correct kt-font-success"></i>
                                </a>
                                <div class="kt-widget__action">
                                    <button type="button" class="btn btn-label-success btn-sm btn-upper">ask</button>&nbsp;
                                    <button type="button" class="btn btn-brand btn-sm btn-upper">hire</button>
                                </div>
                            </div>
                            <div class="kt-widget__subhead">
                                <a href="#"><i class="flaticon2-new-email"></i>charlie@stone.com</a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>Web Developer</a>
                                <a href="#"><i class="flaticon2-placeholder"></i>London</a>
                            </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__desc">
                                    I distinguish three main text objektive could be merely to inform people.
                                    <br> A second could be persuade people.You want people to bay objective
                                </div>
                                <div class="kt-widget__progress">
                                    <div class="kt-widget__text">
                                        Progress
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        76%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__bottom">
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Earnings</span>
                                <span class="kt-widget__value"><span>$</span>542,500</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-confetti"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Expenses</span>
                                <span class="kt-widget__value"><span>$</span>675,500</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-pie-chart"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Net</span>
                                <span class="kt-widget__value"><span>$</span>412,400</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-file-2"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">35 Tasks</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-chat-1"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">598 Comments</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <div class="kt-widget__details">
                                <div class="kt-section__content kt-section__content--solid">
                                    <div class="kt-media-group">
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                                            <img src="assets/media/users/100_1.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                                            <img src="assets/media/users/100_10.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                                            <img src="assets/media/users/100_11.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
                                            <img src="assets/media/users/100_2.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <img src="assets/media/users/100_3.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <span>+3</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Portlet-->

        <!--begin:: Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__media kt-hidden">
                            <img src="assets/media/users/100_1.jpg" alt="image">
                        </div>
                        <div class="kt-widget__pic kt-widget__pic--brand kt-font-brand kt-font-boldest kt-hidden-">
                            SF
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">
                                    Sergei Ford
                                </a>
                                <div class="kt-widget__action">
                                    <button type="button" class="btn btn-label-success btn-sm btn-upper">ask</button>&nbsp;
                                    <button type="button" class="btn btn-brand btn-sm btn-upper">hire</button>
                                </div>
                            </div>
                            <div class="kt-widget__subhead">
                                <a href="#"><i class="flaticon2-new-email"></i>sergei@ford .com</a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>Angular Developer</a>
                                <a href="#"><i class="flaticon2-placeholder"></i>Germany</a>
                            </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__desc">
                                    I distinguish three main text objektive could be merely to inform people.
                                    <br> A second could be persuade people.You want people to bay objective
                                </div>
                                <div class="kt-widget__progress">
                                    <div class="kt-widget__text">
                                        Progress
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        46%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__bottom">
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Earnings</span>
                                <span class="kt-widget__value"><span>$</span>349,900</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-confetti"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Expenses</span>
                                <span class="kt-widget__value"><span>$</span>654,200</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-pie-chart"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Net</span>
                                <span class="kt-widget__value"><span>$</span>876,323</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-file-2"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">54 Tasks</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-chat-1"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">683 Comments</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <div class="kt-widget__details">
                                <div class="kt-section__content kt-section__content--solid">
                                    <div class="kt-media-group">
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                                            <img src="assets/media/users/100_1.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                                            <img src="assets/media/users/100_10.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                                            <img src="assets/media/users/100_11.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
                                            <img src="assets/media/users/100_2.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <img src="assets/media/users/100_3.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <span>+3</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Portlet-->

        <!--begin:: Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__media kt-hidden-">
                            <img src="assets/media/users/100_3.jpg" alt="image">
                        </div>
                        <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                            JM
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">
                                    Jason Muller
                                    <i class="flaticon2-correct kt-font-success"></i>
                                </a>
                                <div class="kt-widget__action">
                                    <button type="button" class="btn btn-label-success btn-sm btn-upper">ask</button>&nbsp;
                                    <button type="button" class="btn btn-brand btn-sm btn-upper">hire</button>
                                </div>
                            </div>
                            <div class="kt-widget__subhead">
                                <a href="#"><i class="flaticon2-new-email"></i>jason@siastudio.com</a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>PR Manager </a>
                                <a href="#"><i class="flaticon2-placeholder"></i>Melbourne</a>
                            </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__desc">
                                    I distinguish three main text objektive could be merely to inform people.<br>
                                    A second could be persuade people.You want people to bay objective
                                </div>
                                <div class="kt-widget__progress">
                                    <div class="kt-widget__text">
                                        Progress
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-success" role="progressbar" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        56%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__bottom">
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Earnings</span>
                                <span class="kt-widget__value"><span>$</span>559,500</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-confetti"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Expenses</span>
                                <span class="kt-widget__value"><span>$</span>435,700</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-pie-chart"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Net</span>
                                <span class="kt-widget__value"><span>$</span>642,300</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-file-2"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">53 Tasks</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-chat-1"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">348 Comments</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <div class="kt-widget__details">
                                <div class="kt-section__content kt-section__content--solid">
                                    <div class="kt-media-group">
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                                            <img src="assets/media/users/100_1.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                                            <img src="assets/media/users/100_10.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                                            <img src="assets/media/users/100_11.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <img src="assets/media/users/100_3.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <span>+5</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Portlet-->

        <!--begin:: Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__media kt-hidden">
                            <img src="assets/media/users/100_1.jpg" alt="image">
                        </div>
                        <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden-">
                            MP
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">
                                    Matt Pears
                                </a>
                                <div class="kt-widget__action">
                                    <button type="button" class="btn btn-label-success btn-sm btn-upper">ask</button>&nbsp;
                                    <button type="button" class="btn btn-brand btn-sm btn-upper">hire</button>
                                </div>
                            </div>
                            <div class="kt-widget__subhead">
                                <a href="#"><i class="flaticon2-new-email"></i>matt@stream.com</a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>Designer</a>
                                <a href="#"><i class="flaticon2-placeholder"></i>America</a>
                            </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__desc">
                                    I distinguish three main text objektive could be merely to inform people.<br>
                                    A second could be persuade people.You want people to bay objective
                                </div>
                                <div class="kt-widget__progress">
                                    <div class="kt-widget__text">
                                        Progress
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        53%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__bottom">
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Earnings</span>
                                <span class="kt-widget__value"><span>$</span>145,200</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-confetti"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Expenses</span>
                                <span class="kt-widget__value"><span>$</span>274,230</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-pie-chart"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Net</span>
                                <span class="kt-widget__value"><span>$</span>461,120</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-file-2"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">45 Tasks</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-chat-1"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">968 Comments</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <div class="kt-widget__details">
                                <div class="kt-section__content kt-section__content--solid">
                                    <div class="kt-media-group">
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                                            <img src="assets/media/users/100_1.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                                            <img src="assets/media/users/100_10.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                                            <img src="assets/media/users/100_11.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <img src="assets/media/users/100_3.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <span>+5</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Portlet-->

        <!--begin:: Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__media kt-hidden-">
                            <img src="assets/media/users/100_2.jpg" alt="image">
                        </div>
                        <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                            ChS
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">
                                    Charlie Stone
                                    <i class="flaticon2-correct kt-font-success"></i>
                                </a>
                                <div class="kt-widget__action">
                                    <button type="button" class="btn btn-label-success btn-sm btn-upper">ask</button>&nbsp;
                                    <button type="button" class="btn btn-brand btn-sm btn-upper">hire</button>
                                </div>
                            </div>
                            <div class="kt-widget__subhead">
                                <a href="#"><i class="flaticon2-new-email"></i>charlie@stone.com</a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>Web Developer</a>
                                <a href="#"><i class="flaticon2-placeholder"></i>London</a>
                            </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__desc">
                                    I distinguish three main text objektive could be merely to inform people.<br>
                                    A second could be persuade people.You want people to bay objective
                                </div>
                                <div class="kt-widget__progress">
                                    <div class="kt-widget__text">
                                        Progress
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        76%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__bottom">
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Earnings</span>
                                <span class="kt-widget__value"><span>$</span>542,500</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-confetti"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Expenses</span>
                                <span class="kt-widget__value"><span>$</span>675,500</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-pie-chart"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Net</span>
                                <span class="kt-widget__value"><span>$</span>412,400</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-file-2"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">35 Tasks</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-chat-1"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">598 Comments</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <div class="kt-widget__details">
                                <div class="kt-section__content kt-section__content--solid">
                                    <div class="kt-media-group">
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                                            <img src="assets/media/users/100_1.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                                            <img src="assets/media/users/100_10.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                                            <img src="assets/media/users/100_11.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <img src="assets/media/users/100_3.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <span>+5</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Portlet-->

        <!--begin:: Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__media kt-hidden">
                            <img src="assets/media/users/100_1.jpg" alt="image">
                        </div>
                        <div class="kt-widget__pic kt-widget__pic--brand kt-font-brand kt-font-boldest kt-hidden-">
                            SF
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">
                                    Sergei Ford
                                </a>
                                <div class="kt-widget__action">
                                    <button type="button" class="btn btn-label-success btn-sm btn-upper">ask</button>&nbsp;
                                    <button type="button" class="btn btn-brand btn-sm btn-upper">hire</button>
                                </div>
                            </div>
                            <div class="kt-widget__subhead">
                                <a href="#"><i class="flaticon2-new-email"></i>sergei@ford .com</a>
                                <a href="#"><i class="flaticon2-calendar-3"></i>Angular Developer</a>
                                <a href="#"><i class="flaticon2-placeholder"></i>Germany</a>
                            </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__desc">
                                    I distinguish three main text objektive could be merely to inform people.<br>
                                    A second could be persuade people.You want people to bay objective
                                </div>
                                <div class="kt-widget__progress">
                                    <div class="kt-widget__text">
                                        Progress
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        46%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__bottom">
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Earnings</span>
                                <span class="kt-widget__value"><span>$</span>349,900</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-confetti"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Expenses</span>
                                <span class="kt-widget__value"><span>$</span>654,200</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-pie-chart"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">Net</span>
                                <span class="kt-widget__value"><span>$</span>876,323</span>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-file-2"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">54 Tasks</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-chat-1"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">683 Comments</span>
                                <a href="#" class="kt-widget__value kt-font-brand">View</a>
                            </div>
                        </div>
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <div class="kt-widget__details">
                                <div class="kt-section__content kt-section__content--solid">
                                    <div class="kt-media-group">
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                                            <img src="assets/media/users/100_1.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                                            <img src="assets/media/users/100_10.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                                            <img src="assets/media/users/100_11.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <img src="assets/media/users/100_3.jpg" alt="image">
                                        </a>
                                        <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                                            <span>+5</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Portlet-->

        <!--Begin::Pagination-->
        <div class="row">
            <div class="col-xl-12">

                <!--begin:: Components/Pagination/Default-->
                <div class="kt-portlet">
                    <div class="kt-portlet__body">

                        <!--begin: Pagination-->
                        <div class="kt-pagination kt-pagination--brand">
                            <ul class="kt-pagination__links">
                                <li class="kt-pagination__link--first">
                                    <a href="#"><i class="fa fa-angle-double-left kt-font-brand"></i></a>
                                </li>
                                <li class="kt-pagination__link--next">
                                    <a href="#"><i class="fa fa-angle-left kt-font-brand"></i></a>
                                </li>
                                <li>
                                    <a href="#">...</a>
                                </li>
                                <li>
                                    <a href="#">29</a>
                                </li>
                                <li>
                                    <a href="#">30</a>
                                </li>
                                <li class="kt-pagination__link--active">
                                    <a href="#">31</a>
                                </li>
                                <li>
                                    <a href="#">32</a>
                                </li>
                                <li>
                                    <a href="#">33</a>
                                </li>
                                <li>
                                    <a href="#">34</a>
                                </li>
                                <li>
                                    <a href="#">...</a>
                                </li>
                                <li class="kt-pagination__link--prev">
                                    <a href="#"><i class="fa fa-angle-right kt-font-brand"></i></a>
                                </li>
                                <li class="kt-pagination__link--last">
                                    <a href="#"><i class="fa fa-angle-double-right kt-font-brand"></i></a>
                                </li>
                            </ul>
                            <div class="kt-pagination__toolbar">
                                <select class="form-control kt-font-brand" style="width: 60px">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <span class="pagination__desc">
														Displaying 10 of 230 records
													</span>
                            </div>
                        </div>

                        <!--end: Pagination-->
                    </div>
                </div>

                <!--end:: Components/Pagination/Default-->
            </div>
        </div>

        <!--End::Pagination-->
    </div>
@endsection
