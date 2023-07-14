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
            @foreach($cates as $cate)
                <?php
                    $contents = $content->where('catid', $cate->id)->get();
                    ?>
                <div class="col-xl-4 col-lg-6 order-lg-2 order-xl-1">

                    <!--begin:: Widgets/New Users-->
                    <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    <a href="#" >
                                        {{ $cate->title }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                        @foreach($contents as $item)
                        <div class="kt-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" >
                                    <div class="kt-widget4">
                                        <div class="kt-widget4__item">
                                            <div class="kt-widget4__info">
                                                <a href="{{ route('notification.detail', ['id' => $item->id]) }}" class="kt-widget4__username" style="font-weight: 700">
                                                    {{ $item->title }}
                                                </a>
                                                <p class="kt-widget4__text">
                                                   Người đăng: {{ $item->last_modifier }} vào lúc {{ $item->modified }}
                                                </p>
                                            </div>
                                            <a href="#" class="btn btn-sm btn-label-brand btn-bold">Detail</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!--end:: Widgets/New Users-->
                </div>
            @endforeach

        </div>

    </div>
@endsection
