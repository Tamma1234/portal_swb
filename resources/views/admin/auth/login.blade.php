<html lang="en">

<!-- begin::Head -->
<head>
    <base href="../../../">
    <meta charset="utf-8"/>
    <title>Swinburne | VN</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    @include('admin.templates.css')
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login" style="background-image: url({{ asset('assets/admin/images/banner-swinburne.jpg') }})">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                            <img src="{{ asset('assets/admin/images/logo.png') }}">
                    </div>

                    <div class="kt-login__signin">
                        <form class="kt-form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <select class="form-control" id="campus_id" name="campus_id">
                                    <option value="">Choose location</option>
                                    @if(!empty($campus))
                                        {
                                        @for($i = 0; $i < count($campus); $i++)
                                            <option {{ $campusCode == $campus[$i]->campus_code ? 'selected' : ""}}
                                                    value="{{ $campus[$i]->campus_code}}">{{ $campus[$i]->campus_name }}</option>
                                        @endfor
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <button id="btn_login_google" type="button" class="btn btn-danger btn-block" style="width: 100%"> <i class="fab fa-google"></i> Sign In With Google</button>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-login__actions">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->
@include('admin.templates.script')

<!--end::Page Scripts -->
</body>
<!-- end::Body -->
</html>
