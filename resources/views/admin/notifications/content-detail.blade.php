
@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Notifications', 'value' => "Activities", 'value2' => ""])
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__media kt-hidden-">
                            <!--<img src="assets/media/users/100_13.jpg" alt="image">-->
                        </div>
                        <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                            JM
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">
                                    Công dân toàn cầu<br><i style="font-size:14px">Người đăng: hungnv3 vào lúc 10:30:47 ngày 31/10/2022</i>																<i class="flaticon2-correct"></i>
                                </a>

                            </div>
                            <div class="kt-widget__subhead">
                                {{ $detail->full_text }}
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
