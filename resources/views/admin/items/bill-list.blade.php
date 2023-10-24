@extends('admin.layouts.main')
@section('title', 'Index')
@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Student', 'value' => "Student status", 'value2' => ""])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label col-md-4">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                    <h3 class="kt-portlet__head-title">
                        Bill List
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body" id="form-table-search">
                <table class="table table-striped- table-bordered table-hover table-checkable">
                    <thead>
                    </thead>
                    <tbody id="tbody">
                    <tr>
                        <td>User Code</td>
                        <td>{{ $user->user_code }}</td>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td>{{ $full_name }}</td>
                    </tr>
                    </tbody>
                </table>
                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>NAME ITEM</th>
                        <th>IMAGES</th>
                        <th>GOLD</th>
                        <th>QUANTITY</th>
                        <th>DATE</th>
                    </tr>
                    </thead>
                    <tbody id="tbody">
                    <?php $i = 1; ?>
                    @foreach($bills as $item)
                        <?php $image = $item->items ? $item->items->images : ""; ?>
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->items ? $item->items->name_item : "" }}</td>
                            <td><img src="https://drive.google.com/uc?export=view&id={{ $item->items ? $item->items->images : "" }}" width="100px" height="100px" alt=""> </td>
                            <td>{{ $item->gold }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->date_time }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!--end: Datatable -->
            </div>
        </div>
    </div>
@endsection
