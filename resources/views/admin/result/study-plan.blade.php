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
                        Grade View
                    </h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                    <!--begin::Portlet-->
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        Course
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
                                                <th>No.</th>
                                                <th>Unit Code</th>
                                                <th>Unit Name</th>
                                                <th>Credit Points</th>
                                                <th>Grade</th>
                                                <th>Status</th>
                                                <th>Semester</th>
                                                <th>No. of Enrollment</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                            @foreach($listCurriculumCore as $item)
                                                <?php
                                                    $coureResults = $coureResult
                                                        ->where('subject_id', $item->subject_id)
                                                        ->where('student_login', $user_login)
                                                        ->get();
                                                    $totalResult = count($coureResults);
                                                    $coureResult = $coureResult
                                                        ->where('subject_id', $item->subject_id)
                                                        ->where('student_login', $user_login)
                                                        ->select('grade', 'pterm_name', 'val', 'is_finish')
                                                        ->first();
                                                    ?>
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $item->skill_code }}</td>
                                                    <td>{{ $item->subject_name }}</td>
                                                    <td>{{ $item->number_of_credit }}</td>
                                                    <td>{{ $coureResult->grade }}</td>
                                                    <td>{{ $coureResult->pterm_name }}</td>
                                                    <td>
                                                        @if($coureResult->val == 1)
                                                            <span
                                                                class="btn btn-bold btn-sm btn-font-sm  btn-label-success">Pass</span>
                                                        @elseif($coureResult->val == 0 && $coureResult->is_finish == 2)
                                                            <span
                                                                class="btn btn-bold btn-sm btn-font-sm  btn-label-danger">Fail</span>
                                                        @else
                                                            <span
                                                                class="btn btn-bold btn-sm btn-font-sm  btn-label-primary">Transfer</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $totalResult }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Form-->
                        </div>
                <!--end::Portlet-->
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Major
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
                                        <th>No.</th>
                                        <th>Unit Code</th>
                                        <th>Unit Name</th>
                                        <th>Credit Points</th>
                                        <th>Grade</th>
                                        <th>Semester</th>
                                        <th>Status</th>
                                        <th>No. of Enrollment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($listCurriculumMajor as $item)
                                            <?php
                                            $coureResults = $coureResult
                                                ->where('subject_id', $item->subject_id)
                                                ->where('student_login', $user_login)
                                                ->get();
                                            $totalResult = count($coureResults);
                                            $coureResult = $coureResult
                                                ->where('subject_id', $item->subject_id)
                                                ->where('student_login', $user_login)
                                                ->select('grade', 'pterm_name', 'val', 'is_finish')
                                                ->first();
                                            ?>
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $item->skill_code }}</td>
                                            <td>{{ $item->subject_name }}</td>
                                            <td>{{ $item->number_of_credit }}</td>
                                            <td>{{ $coureResult->grade }}</td>
                                            <td>{{ $coureResult->pterm_name }}</td>
                                            <td>
                                                @if($coureResult->val == 1)
                                                    <span
                                                        class="btn btn-bold btn-sm btn-font-sm  btn-label-success">Pass</span>
                                                @elseif($coureResult->val == 0 && $coureResult->is_finish == 2)
                                                    <span
                                                        class="btn btn-bold btn-sm btn-font-sm  btn-label-danger">Fail</span>
                                                @else
                                                    <span
                                                        class="btn btn-bold btn-sm btn-font-sm  btn-label-primary">Transfer</span>
                                                @endif
                                            </td>
                                            <td>{{ $totalResult }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Elective
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
                                        <th>No.</th>
                                        <th>Unit Code</th>
                                        <th>Unit Name</th>
                                        <th>Credit Points</th>
                                        <th>Grade</th>
                                        <th>Status</th>
                                        <th>Semester</th>
                                        <th>No. of Enrollment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($listCurriculumElective as $item)
                                            <?php
                                            $coureResults = $coureResult
                                                ->where('subject_id', $item->subject_id)
                                                ->where('student_login', $user_login)
                                                ->get();
                                            $totalResult = count($coureResults);
                                            $coureResult = $coureResult
                                                ->where('subject_id', $item->subject_id)
                                                ->where('student_login', $user_login)
                                                ->select('grade', 'pterm_name', 'val', 'is_finish')
                                                ->first();
                                            ?>
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $item->skill_code }}</td>
                                            <td>{{ $item->subject_name }}</td>
                                            <td>{{ $item->number_of_credit }}</td>
                                            <td>{{ $coureResult->grade }}</td>
                                            <td>{{ $coureResult->pterm_name }}</td>
                                            <td>
                                                @if($coureResult->val == 1)
                                                    <span
                                                        class="btn btn-bold btn-sm btn-font-sm  btn-label-success">Pass</span>
                                                @elseif($coureResult->val == 0 && $coureResult->is_finish == 2)
                                                    <span
                                                        class="btn btn-bold btn-sm btn-font-sm  btn-label-danger">Fail</span>
                                                @else
                                                    <span
                                                        class="btn btn-bold btn-sm btn-font-sm  btn-label-primary">Transfer</span>
                                                @endif
                                            </td>
                                            <td>{{ $totalResult }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection

