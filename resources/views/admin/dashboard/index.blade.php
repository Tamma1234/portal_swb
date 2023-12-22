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
                                <a href="#"><i
                                        class="flaticon2-calendar-3"></i>{{ $user->curriculums ? $user->curriculums->chuyen_nganh : "" }}
                                </a>
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
                                        Progress ({{ $count_status_fee }}/{{ $count_type_fee }})
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-success" role="progressbar" style="width: 65%;"
                                             aria-valuenow="{{ $process }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        @if($process != "")
                                            {{ round($process) }}%
                                        @endif
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
                        {{--                        <div class="kt-widget__item">--}}
                        {{--                            <div class="kt-widget__icon">--}}
                        {{--                                <i class="flaticon-chat-1"></i>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="kt-widget__details">--}}
                        {{--                                <span class="kt-widget__title">{{ count($comment) }}</span>--}}
                        {{--                                <a href="{{ route('queries.history') }}" class="kt-widget__value kt-font-brand">View</a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                            <div class="kt-widget__details">
                                @if($totalGold->total == null)
                                    <span class="kt-widget__title">0 Gold</span>
                                @else
                                    <span class="kt-widget__title">{{ $totalGold->total }} Gold</span>
                                @endif
                                <a href="{{ route('gold.list') }}" class="kt-widget__value kt-font-brand">View</a>
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
                <?php $student_event = \App\Models\StudentEvent::where('user_code', $user->user_code)->where('event_id', $event->id)->first();?>
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
                                                {{ $event->name_event }} <span
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
                                    @if($student_event == null)
                                        <button type="submit" class="btn btn-outline-danger active">
                                            Register
                                        </button>
                                    @else

                                        <button type="button" disabled class="btn btn-info active">
                                            joined
                                        </button>

                                    @endif
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
@section('script')
    <script language="javascript">

        var notificationsWrapper = $('.kt-header__topbar-item--langs');
        var notificationsToggle = notificationsWrapper.find('div[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('i[data-count]');
        var notificationsCount = parseInt(notificationsCountElem.data('count'));
        var notifications = notificationsWrapper.find('div.kt-notification');
        if (notificationsCount <= 0) {
            notificationsWrapper.show();
        }
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('2a371882663fd536655c', {
            cluster: 'ap1',
            authEndpoint: "{{ url('api/broadcasting/auth') }}",
            encrypted: true,
            auth: {
                headers: {
                    "X-CSRF-Token": "{{ csrf_token() }}"
                }
            }
        });

            {{--// Bind a function to a Event (the full Laravel class)--}}
        let id = "{{ \Illuminate\Support\Facades\Auth::id()  }}";
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            alert(JSON.stringify(data));
            // var existingNotifications = notifications.html();
            // var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
            // var newNotificationHtml = `
            //          <a href="/queries/detail/${data.id}" class="kt-notification__item">
            //           <div class="kt-notification__item-icon">
            //         <i class="flaticon2-line-chart kt-font-success"></i>
            //          </div>
            //         <div class="kt-notification__item-details">
            //         <div class="kt-notification__item-title">
            //            ` + data.question + `
            //         </div>
            //          <div class="kt-notification__item-time">` + data.date + `
            //          </div>
            //        </div>
            //         </a>`;
            // notifications.html(newNotificationHtml + existingNotifications);
            // notificationsCount += 1;
            // notificationsCountElem.attr('data-count', notificationsCount);
            // notificationsWrapper.find('.badge-warning').text(notificationsCount);
            // notificationsWrapper.show();
        });

    </script>

@endsection
