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
            <div class="col-xl-12 col-lg-12">
                <!--begin:: Widgets/Audit Log-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-toolbar">
                            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab11_content"
                                       role="tab">
                                        Items
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab12_content" role="tab">
                                        Events
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kt_widget4_tab11_content">
                                <div class="container">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="kt_widget4_tab12_content">
                                <div class="row">
                                    @foreach($events as $event)
                                        <?php $event_swin = \App\Models\StudentEvent::where('user_code', $user->user_code)->where('event_id', $event->id)->first();
                                        ?>
                                        <div class="col-xl-6">
                                            <!--begin:: Portlet-->
                                            <div class="kt-portlet kt-callout kt-callout--brand">
                                                <div class="kt-portlet__body kt-portlet__body--fit">

                                                    <!--begin::Widget -->
                                                    <div class="kt-widget kt-widget--project-1">
                                                        <div class="kt-widget__head">
                                                            <div class="kt-widget__label">
                                                                <div class="kt-widget__info kt-margin-t-5">
                                                                    <a href="#" class="kt-widget__title">
                                                                        {{ $event->name_event }} <span
                                                                            class="btn btn-label-brand btn-sm btn-bold btn-upper">{{ $event->gold }} GOLD</span>
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
                                                                @if($dayNow < $event->end_date)
                                                                    <div class="kt-callout__action"
                                                                         style="margin: auto">
                                                                        {{--                                                                        <a href="#"--}}
                                                                        {{--                                                                           class="btn btn-custom btn-bold btn-upper btn-font-sm  btn-primary">Join</a>--}}
                                                                        @if($event_swin == null)
                                                                            <div
                                                                                class="buttons d-flex flex-row mt-2 gap-3">
                                                                                <button type="button"
                                                                                        class="btn btn-primary"
                                                                                        data-toggle="modal"
                                                                                        data-target="#exampleModal-{{ $event->id }}">
                                                                                    Join
                                                                                </button>
                                                                                {{--                                <button class="btn btn-dark">Add to Basket</button>--}}
                                                                            </div>
                                                                            <form
                                                                                action="{{ route('store.event', ['id' => $event->id]) }}"
                                                                                method="post"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <div class="modal fade"
                                                                                     id="exampleModal-{{ $event->id }}"
                                                                                     tabindex="-1"
                                                                                     aria-labelledby="exampleModalLabel"
                                                                                     aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    Events</h5>
                                                                                                <input type="hidden"
                                                                                                       name="event_id"
                                                                                                       value="{{ $event->id }}">
                                                                                                <button type="button"
                                                                                                        class="close"
                                                                                                        data-dismiss="modal"
                                                                                                        aria-label="Close">
                                                                                                    <span
                                                                                                        aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                Are you sure you want to
                                                                                                join the event?
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                        class="btn btn-secondary"
                                                                                                        data-dismiss="modal">
                                                                                                    Close
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                        class="btn btn-primary">
                                                                                                    Yes
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        @else
                                                                            <div class="buttons">
                                                                                <span class="btn btn-outline-primary"
                                                                                   href="#"
                                                                                   data-abc="true">Joined</span>
                                                                                {{--                                <button class="btn btn-dark">Add to Basket</button>--}}
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                @else
                                                                    <div class="kt-callout__action"
                                                                         style="margin: auto; margin-top: 40px">
                                                                        <input class="btn btn-success disabled"
                                                                               value="End">
                                                                    </div>
                                                                @endif
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
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Audit Log-->
            </div>
            {{--            <div class="kt-portlet">--}}
            {{--                <div class="kt-portlet__body">--}}
            {{--                    <div class="kt-pricing-1">--}}
            {{--                        <div class="kt-pricing-1__items row">--}}
            {{--                            @foreach($items as $item)--}}
            {{--                                <div class="kt-pricing-1__item col-lg-3">--}}
            {{--                                    <div class="kt-pricing-1__visual">--}}
            {{--                                        <span class="kt-pricing-1__icon kt-font-warning"><img src="{{ asset("assets/admin/images/items/$item->images") }}" style="width: 200px; height: 200px" alt=""></span>--}}
            {{--                                    </div>--}}
            {{--                                    <span class="kt-pricing-1__price" style="font-size: 2rem">{{ $item->gold }} <img width="20px" src="{{ asset('assets/admin/images/dong-coin.jpg') }}" alt=""></span>--}}
            {{--                                    <h2 class="kt-pricing-1__subtitle text-uppercase"><a href="{{ route('items.detail', ['id' => $item->id]) }}" style="color: #0f0f16">{{ $item->name_item }}</a> </h2>--}}
            {{--                                    <div class="kt-pricing-1__btn">--}}
            {{--                                        <a href="{{ route('items.detail', ['id' => $item->id]) }}" class="btn btn-info btn-wide btn-uppercase btn-bolder btn-sm">--}}
            {{--                                            PURCHASE--}}
            {{--                                        </a>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            @endforeach--}}

            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
@endsection

