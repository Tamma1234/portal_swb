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
    <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{ asset('assets/admin/images/bg-sw.png') }});">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="{{ asset('assets/admin/images/logo.png') }}">
                        </a>
                    </div>
                    <div class="kt-login__signin">
                        <form class="kt-form" method="POST" action="{{ route('login.post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                {{--                                <label for="exampleSelect1">Choose Campus</label>--}}
                                <select class="form-control" id="campus_id" name="campus_id">
                                    <option value="">Choose Campus</option>
                                    @if(!empty($campus))
                                        {
                                        @for($i = 0; $i < count($campus); $i++)
                                            <option {{ $campus_id == $campus[$i]->id ? 'selected' : ""}}
                                                    value="{{ Request::url() }}?campus_id={{$campus[$i]->id}}">{{ $campus[$i]->campus_name }}</option>
                                        @endfor
                                    @endif
                                </select>
                            </div>
                            <div class="input-group form-group">
                                <input type="text" class="form-control" placeholder="Username:" name="user_login">
                            </div>
                            @error('user_login')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="input-group form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <div class="row" style="margin-top: 15px">
                                    <div class="col-sm-6 col-md-8">
                                        <a href="{{route('login.redirect')}}" id="kt_login_signin_submit" class="btn btn-dark kt-login__btn-primary" style="width: 100%"> <i class="fab fa-google"></i>Sign In With Google</a>
                                    </div>
                                    <div class="col-6 col-md-4" style="margin: auto">
                                        <button type="submit" class="btn btn-primary">Login</button>
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
