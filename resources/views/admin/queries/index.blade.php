@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Queries', 'value' => "", 'value2' => ""])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                    <h3 class="kt-portlet__head-title">
                        Student Enquiry Form
                    </h3>
                </div>
            </div>
            <form class="kt-form" method="post" action="{{ route('queries.send') }}" enctype="multipart/form-data">
                @csrf
                <div class="kt-portlet__body ">
                    <div class="row">
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6">
                            <div class="form-group ">
                                <label>What are your Enquiries <code>*</code></label>
                                <div class="kt-radio-list">
                                    <label class="kt-radio">
                                        <input type="radio" name="waye" value="Attendance">Attendance
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="waye" value="Academic calendar">Timetable
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="waye" value="Well-being issues">Well-being issues
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="waye" value="Change/Defer/Transfer of course">Change/Defer/Transfer
                                        (<i>Please complete a <a
                                                href="https://swinburne-vn.edu.vn/wp-content/uploads/2022/03/Defer-or-course-transfer-form-1.pdf"
                                                target="_blank">Defer or course transfer form</a> and attach file below</i>)
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="waye" value="Leave of Absense">Leave of Absense (<i>"Please
                                            complete a <a
                                                href="https://swinburne-vn.edu.vn/wp-content/uploads/2022/03/Leave-of-absence.pdf"
                                                target="_blank">Leave of absence form</a> and attach file below</i>)
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="waye" value="SWithdrawal from course">Withdrawal from
                                        course (<i>"Please complete a <a
                                                href="https://swinburne-vn.edu.vn/wp-content/uploads/2022/03/Withdrawal-from-course-application.pdf"
                                                target="_blank">Withdrawal from course form</a> and attach file
                                            below</i>)
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="waye" value="Study plan/ course advices">Study plan/
                                        course advices
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="waye" value="Clubs and Activities">Clubs and
                                        Activities
                                        <span></span>
                                    </label>
                                    <label class="kt-radio">
                                        <input type="radio" name="waye" value="Other" checked>Other
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">What is your question?:<code>*</code></label>
                                <textarea class="form-control" id="exampleTextarea" rows="3" name="question"></textarea>
                                <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">File:<code>*</code></label>
                                <input class="uppy-input-label btn btn-light-primary btn-sm" type="file" name="file"
                                       id="file">
                                <span></span>
                            </div>
                        </div>
                        <div class="col-xl-3"></div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-xl-3"></div>
                            <div class="col-xl-6">
                                <input type="submit" class="btn btn-brand" name="submit" value="Submit">
                            </div>
                            <div class="col-xl-3"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('6d3ed469de3a9cc60527', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
@endsection
