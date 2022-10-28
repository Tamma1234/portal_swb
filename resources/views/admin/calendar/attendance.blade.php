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
                        <select class="custom-select form-control">
                            @foreach($terms as $term)
                            <option selected="{{ $term->id }}">{{ $term->term_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-xl-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Bordered Table
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
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jhon</td>
                                        <td>Stone</td>
                                        <td>@jhon</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Lisa</td>
                                        <td>Nilson</td>
                                        <td>@lisa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
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
