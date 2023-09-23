@extends('admin.layouts.main')
@section('title', 'Create')



@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Users', 'value' => "List User", 'value2' => ""])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label col-md-4">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                    <h3 class="kt-portlet__head-title">
                        Items List
                    </h3>
                </div>
            </div>
            <div class="kt-portlet">
                <div class="kt-portlet__body">
                    <div class="kt-pricing-1">
                        <div class="kt-pricing-1__items row">
                            @foreach($items as $item)
                                <div class="kt-pricing-1__item col-lg-3">
                                    <div class="kt-pricing-1__visual">
                                        <span class="kt-pricing-1__icon kt-font-warning"><img src="{{ asset("assets/admin/images/items/$item->images") }}" style="width: 200px; height: 200px" alt=""></span>
                                    </div>
                                    <span class="kt-pricing-1__price" style="font-size: 2rem">{{ $item->gold }} <img width="20px" src="{{ asset('assets/admin/images/dong-coin.jpg') }}" alt=""></span>
                                    <h2 class="kt-pricing-1__subtitle text-uppercase"><a href="{{ route('items.detail', ['id' => $item->id]) }}" style="color: #0f0f16">{{ $item->name_item }}</a> </h2>
                                    <div class="kt-pricing-1__btn">
                                        <a href="{{ route('items.detail', ['id' => $item->id]) }}" class="btn btn-info btn-wide btn-uppercase btn-bolder btn-sm">
                                            PURCHASE
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
