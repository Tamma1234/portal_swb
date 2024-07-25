@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'calendar', 'value' => "Schedule", 'value2' => ""])
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div class="kt-portlet" id="kt_portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon-map-location"></i>
												</span>
                            <h3 class="kt-portlet__head-title">
                                Schedule
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="kt_calendar"></div>
                    </div>
                </div>

                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var KTCalendarBasic = function() {

            return {
                //main function to initiate the module
                init: function() {
                    var calendarEl = document.getElementById('kt_calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

                        isRTL: KTUtil.isRTL(),
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay'
                        },

                        height: 800,
                        contentHeight: 780,
                        aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

                        nowIndicator: true,

                        views: {
                            dayGridMonth: { buttonText: 'month' },
                            timeGridWeek: { buttonText: 'week' },
                            timeGridDay: { buttonText: 'day' }
                        },

                        defaultView: 'dayGridMonth',

                        editable: true,
                        eventLimit: true, // allow "more" link when too many events
                        navLinks: true,
                        events: "{{ route('student.list') }}",

                        eventRender: function(info) {

                            var element = $(info.el);
                            var event = info.event;
                            var formattedStartDate = moment(event.start).format('HH:mm');
                            var formattedEndDate = moment(event.end).format('HH:mm');
                            let formatStarEnnDate = formattedStartDate +' - '+ formattedEndDate;
                            // Update the event title with the formatted start date
                            element.find('.fc-time').html(formatStarEnnDate);

                            if (info.event.extendedProps && info.event.extendedProps.description) {
                                if (element.hasClass('fc-day-grid-event')) {
                                    element.data('content', info.event.extendedProps.description);
                                    element.data('placement', 'top');
                                    KTApp.initPopover(element);
                                } else if (element.hasClass('fc-time-grid-event')) {
                                    element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                                } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                    element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                                }
                            }
                        }
                    });
                    calendar.render();
                }
            };
        }();

        jQuery(document).ready(function() {
            KTCalendarBasic.init();
        });

    </script>
@endsection
