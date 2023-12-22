@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Dashboard', 'value' => "Students", 'value2' => "List Group Member"])
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                    <h3 class="kt-portlet__head-title">
                        Learned history
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin: Search Form -->
                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-2 order-xl-1">
                            <div class="row align-items-center">
                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                    <div class="kt-input-icon kt-input-icon--left">
                                        <input type="text" class="form-control" placeholder="Search..."
                                               id="generalSearch">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>
                                    </div>
                                </div>
{{--                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">--}}
{{--                                    <div class="kt-form__group kt-form__group--inline">--}}
{{--                                        <div class="kt-form__label">--}}
{{--                                            <label>Status:</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="kt-form__control">--}}
{{--                                            <select class="form-control bootstrap-select" id="kt_form_status">--}}
{{--                                                <option value="">All</option>--}}
{{--                                                <option value="1">Pending</option>--}}
{{--                                                <option value="2">Delivered</option>--}}
{{--                                                <option value="3">Canceled</option>--}}
{{--                                                <option value="4">Success</option>--}}
{{--                                                <option value="5">Info</option>--}}
{{--                                                <option value="6">Danger</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <!--end: Search Form -->
            </div>
            <div class="kt-portlet__body kt-portlet__body--fit">

                <!--begin: Datatable -->
                <table class="kt-datatable" id="html_table" width="100%">
                    <thead>
                    <tr>
                        <th title="Field #1">Subject Name</th>
                        <th title="Field #2">Subject Code</th>
                        <th title="Field #3">Class</th>
                        <th title="Field #4">Credit Points</th>
                        <th title="Field #5">Semester</th>
                        <th title="Field #6">Grade</th>
                        <th title="Field #7">Status</th>
                        <th title="Field #8">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($group_member as $item)
                        <?php
                        $num_of_credit = $subject::find($item->subject_id)->num_of_credit;
                        ?>
                        <tr>
                            <td>{{ $item->psubject_name }}</td>
                            <td>{{ $item->psubject_code }}</td>
                            <td>{{ $item->psubject_code .' '. $item->pterm_name }}</td>
                            <td>{{ $num_of_credit }}</td>
                            <td>{{ $item->pterm_name }}</td>
                            <td>{{ $item->grade }}</td>
                            <td align="right">
                                @if($item->is_finish == 0)
                                    5
                                @else
                                    @if($item->val <= 0)
                                        2
                                    @else
                                        4
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <!--end: Datatable -->
            </div>
        </div>
    </div>
@endsection
