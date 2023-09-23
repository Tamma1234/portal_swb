
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
                        History My Gold
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body kt-portlet__body--fit">
                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable">
                    <thead>
                    <tr>
                        <th title="Field #1">STT</th>
                        <th title="Field #2">Name Event</th>
                        <th title="Field #3">Gold</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach($studentEvent as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->name_event }}</td>
                            <td>{{ $item->gold }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <!--end: Datatable -->
            </div>
        </div>
    </div>
@endsection
