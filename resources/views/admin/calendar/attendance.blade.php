@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Calendar', 'value' => "Attendance", 'value2' => ""])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                    <h3 class="kt-portlet__head-title">
                        Attendance
                    </h3>
                </div>
            </div>
            <form class="kt-form">
                <div class="kt-portlet__body">
                    <div class="form-group">
                        <label>Semester</label>
                        <div></div>
                        <select class="custom-select form-control" id="term_id">
                            @foreach($terms as $term)
                                <option {{ $term_name == $term->term_name ? "selected" : "" }}
                                        value="{{ Request::url()}}?term_name={{ $term->term_name  }}">{{ $term->term_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-xl-12">
                @if($listAttendances != "")
                    <!--begin::Portlet-->
                    @foreach($listAttendances as $list)
                            <?php
                            $getAttendances = $attendance->where('groupid', $list->groupid)
                                ->where('user_login', $list->student_login)
                                ->orderBy('day', 'ASC')
                                ->get();
                            $attendance_absent = $list->attendance_absent;
                            $total_session = $list->total_session;
                            ?>
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        {{ $list->psubject_name }}
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">

                                <!--begin::Section-->
                                <div class="kt-section">
                                    <div class="kt-section__content">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                                <th>Note</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1; ?>
                                            @foreach($getAttendances as $item)
                                                    <?php
                                                    $slot_id = $item->activities->slot;
                                                    $slot_start = $slot->find($slot_id)->slot_start;
                                                    $slot_end = $slot->find($slot_id)->slot_end;
                                                    ?>
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $item->day }}</td>
                                                    <td>{{ $slot_start .' - '. $slot_end }}</td>
                                                    <td>
                                                        @if($item->val == 1)
                                                            <span
                                                                class="btn btn-bold btn-sm btn-font-sm  btn-label-success">Present</span>
                                                        @else
                                                            <span
                                                                class="btn btn-bold btn-sm btn-font-sm  btn-label-danger">Absent</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="5">
                                                    <div class="kt-widget15__item">
																<span class="kt-widget15__stats">
                                                                    @if(is_numeric($attendance_absent) && is_numeric($total_session))
                                                                    {{ round(($attendance_absent * 100) / $total_session) }}
                                                                        %
                                                                    @endif
																</span>
                                                        <span class="kt-widget15__text">Absent</span>
                                                        <div class="kt-space-10"></div>
                                                        <div class="progress kt-widget15__chart-progress--sm">
                                                            @if(is_numeric($attendance_absent) && is_numeric($total_session))
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                 style="width:
                                                                    {{ round(($attendance_absent * 100) / $total_session) }}%;"
                                                                 aria-valuenow="10"
                                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!--end::Section-->
                            </div>
                            <!--end::Form-->
                        </div>
                    @endforeach
                @endif
                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#term_id').change(function () {
            var url = $('#term_id').val();
            if (url) {
                window.location = url;
            }
            return false;
            {{--var term_name = $('#term_id').val();--}}
            {{--var data = {--}}
            {{--    term_name : term_name--}}
            {{--}--}}
            {{--$.ajax({--}}
            {{--    url: '{{ route('rooms.search') }}',--}}
            {{--    type: 'GET',--}}
            {{--    data: data--}}
            {{--}).done(function (response) {--}}
            {{--    $('#table-room').empty();--}}
            {{--    $('#table-room').html(response);--}}

            {{--})--}}
        });
    </script>
@endsection
