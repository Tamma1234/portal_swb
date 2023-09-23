@extends('admin.layouts.main')
@section('title', 'Index')
@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Clubs', 'value' => "Detail", 'value2' => ""])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label col-md-2">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                    <h3 class="kt-portlet__head-title">
                        Detail Club
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body" id="form-table-search">
                <table class="table table-striped- table-bordered table-hover table-checkable">
                    <thead>
                    </thead>
                    <tbody id="tbody">
                    <tr>
                        <td>Name</td>
                        <td>{{ $club_detail->name }}</td>
                    </tr>
                    <tr>
                        <td>Des</td>
                        <td>{{ $club_detail->description }}</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>{{ $club_detail->date_thanh_lap }}</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped- table-bordered table-hover table-checkable" id="example">
                    <thead class="table-active">
                    <tr>
                        <th class="text-white">STT</th>
                        <th class="text-white">User Code</th>
                        <th class="text-white">Full Name</th>
                        <th class="text-white">Name Club</th>
                        <th class="text-white">Active</th>
                    </tr>
                    </thead>
                    <tbody id="tbody">
                    <?php $i = 1;?>
                    @foreach($user_club as $item)
                        <?php
                        $user = \App\Models\User::where('user_code', $item->user_code)->first();
                        $full_name = $user->user_surname . ' ' . $user->user_middlename . ' ' . $user->user_givenname;
                        ?>
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->user_code }}</td>
                            <td>{{ $full_name }}</td>
                            <td>{{ $club_detail->name }}</td>
                            <td>@if($item->permission == 3)
                                    <button type="button"
                                            class="btn btn-warning btn-elevate btn-pill btn-elevate-air btn-sm">
                                        Chairperson
                                    </button>
                                @else
                                    <button type="button"
                                            class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">
                                        Member
                                    </button>
                                @endif
                            </td>
{{--                            <td>--}}
{{--                                    <button type="button" class="btn" id="delete_club" data-id="{{ $item->id }}"--}}
{{--                                            data-toggle="kt-tooltip" title="Delete"--}}
{{--                                            data-original-title="Close"><i class="flaticon-delete"></i></button>--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!--end: Datatable -->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#submit-send").on('click', function () {
            var user_name = $("#message-text").val();
            var event_id = $("#event_id").val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "",
                method: 'POST',
                data: {user_name: user_name, _token: _token, event_id: event_id},
                success: function (data) {
                    if ($.isEmptyObject(data.error_type)) {
                        location.reload();
                        toastr.success(data.success);
                    } else {
                        $('#error_type').html(data.error_type);
                    }
                }
            });
        })

        $("#example").on("click", "#delete_club", function () {
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('delete.club') }}/" + id,
                type: 'GET',
            }).done(function (response) {
                // Gọi hàm renderCart trả về cart item con
                location.reload();
                toastr.success(response.msg_delete);
            });
        })
    </script>
    <script>
        $(document).ready(function () {
            var table = $('#example').DataTable({pageLength: 10});
            // Get the page info, so we know what the last is
            var pageInfo = table.page.info();
            // Set the ending interval to the last page
            endInt = pageInfo.end;
            // Current page
            currentInt = 0;
            // interval = setInterval(function () {
            //     // "Next" ...
            //     table.page(currentInt).draw('page');
            //
            //     // Increment the current page int
            //     currentInt++;
            //
            //     // If were on the last page, reset the currentInt to the first page #
            //     if (currentInt === pageInfo.pages) {
            //         currentInt = 0;
            //     }
            //     // console.log(currentInt);
            // }, 10000); // 3 seconds
        });
    </script>

@endsection
