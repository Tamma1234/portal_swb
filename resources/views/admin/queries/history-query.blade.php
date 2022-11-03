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
                                        <th>#</th>
                                        <th>Queries_type</th>
                                        <th>Question</th>
                                        <th>File</th>
                                        <th>File response</th>
                                        <th>Status</th>
                                        <th>Note</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($queries as $item)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $item->queries_type }}</td>
                                            <td>{{ $item->question }}</td>
                                            <td>{{ $item->file_name }}</td>
                                            <td>{{ $item->file_response }}</td>
                                            <td>{{ $item->querries_status }}</td>
                                            <td>{{ $item->note_xu_ly }}</td>
{{--                                            <td>--}}
{{--                                                @if($coureResult->val == 1)--}}
{{--                                                    <span--}}
{{--                                                        class="btn btn-bold btn-sm btn-font-sm  btn-label-success">Pass</span>--}}
{{--                                                @elseif($coureResult->val == 0 && $coureResult->is_finish == 2)--}}
{{--                                                    <span--}}
{{--                                                        class="btn btn-bold btn-sm btn-font-sm  btn-label-danger">Fail</span>--}}
{{--                                                @else--}}
{{--                                                    <span--}}
{{--                                                        class="btn btn-bold btn-sm btn-font-sm  btn-label-primary">Transfer</span>--}}
{{--                                                @endif--}}
{{--                                            </td>--}}
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

