@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Queries', 'value' => "", 'value2' => ""])
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2"
                     data-ktwizard-state="step-first">
                    <div class="kt-grid__item kt-wizard-v2__aside">
{{--                        <form action="{{ route('upload.drive') }}" method="POST" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                            <input type="file" name="file">--}}
{{--                            <input type="submit" value="Submit" class="btn-success">--}}
{{--                        </form>--}}
                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v2__nav">
                            <div class="kt-wizard-v2__nav-items kt-wizard-v2__nav-items--clickable">

                                <!--doc: Replace A tag with SPAN tag to disable the step link click -->
                                <div class="kt-wizard-v2__nav-item" data-ktwizard-type="step"
                                     data-ktwizard-state="current">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-globe"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                ECTION A: PERSONAL DETAILS
                                            </div>
                                            <div class="kt-wizard-v2__nav-label-desc">
                                                THÔNG TIN CÁ NHÂN
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v2__nav-item" data-ktwizard-type="step">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-bus-stop"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                Swinburne to contact
                                            </div>
                                            <div class="kt-wizard-v2__nav-label-desc">
                                                Swinburne Việt Nam thông báo với những người thân
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v2__nav-item" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-responsive"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                SECTION B
                                            </div>
                                            <div class="kt-wizard-v2__nav-label-desc">
                                                COURSE PREFERENCES
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v2__nav-item" data-ktwizard-type="step">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-trophy"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                SECTION C
                                            </div>
                                            <div class="kt-wizard-v2__nav-label-desc">
                                                ENGLISH PROFICIENCY TEST
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v2__nav-item" data-ktwizard-type="step">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-truck"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                SECTION D: SUBMIT DOCUMENTS ONLINE
                                            </div>
                                            <div class="kt-wizard-v2__nav-label-desc">
                                                TẢI LÊN TÀI LIỆU
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v2__nav-item" data-ktwizard-type="step">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-confetti"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                SECTION E: SUBMIT HARD DOCUMENTS
                                            </div>
                                            <div class="kt-wizard-v2__nav-label-desc">
                                                NỘP HỒ SƠ TRỰC TIẾP TẠI CƠ SỞ HỌC TẬP
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end: Form Wizard Nav -->
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">

                        <!--begin: Form Wizard Form-->
                        <form class="kt-form" id="kt_form" style="width: 100%" action="{{ route('upload.drive') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!--begin: Form Wizard Step 1-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content"
                                 data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">Contact/ Liên lạc</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__form">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>FullName/ Họ và tên</label>
                                                    <input type="text" class="form-control" name="full_name"
                                                           placeholder="Full Name">
                                                    <span
                                                        class="form-text text-muted">Please enter your first name.</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Gender/ Giới tính</label>
                                                    <div class="kt-radio-inline">
                                                        <label class="kt-radio kt-radio--success">
                                                            <input type="radio" name="radio2"> Male/ Nam
                                                            <span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--success">
                                                            <input type="radio" name="radio2" checked="">Female/ Nữ
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Date of birth/ Ngày, tháng, năm</label>
                                                    <input type="date" class="form-control" name="date">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>ID number/ Số CMND</label>
                                                    <input type="tel" class="form-control" name="phone"
                                                           placeholder="phone" value="001166879546">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email"
                                                           placeholder="Email">
                                                    <span
                                                        class="form-text text-muted">Please enter your email address.</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Phone/Di động</label>
                                                    <input type="text" class="form-control" name="phone"
                                                           placeholder="Phone Number" value="0984153654">
                                                    <span
                                                        class="form-text text-muted">Please enter your phone number.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Permanent home address/ Nơi đăng ký hộ khẩu thường trú (ghi trên
                                                CMND)</label>
                                            <input type="text" class="form-control" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label>Postal address/ Địa chỉ nhận thư(*)</label>
                                            <input type="text" class="form-control" name="Postal address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Step 1-->

                            <!--begin: Form Wizard Step 2-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">I agree for Swinburne to contact the below nominees:/ Tôi đồng ý cho phép Swinburne Việt Nam thông báo với những người thân dưới đây trong các trường hợp</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__form">

                                        <div class="form-group">
                                            <label>* Contact 1’s full name (Parent/guardian) / Họ và tên người
                                                thân (Phụ huynh, người giám hộ) 1</label>
                                            <input type="text" class="form-control" name="contact"
                                                   placeholder="Contact 1's full name">
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Relationship/ Mối quan hệ:</label>
                                                    <input type="text" class="form-control" name="relationship"
                                                           placeholder="Relationship/ Mối quan hệ">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Phone number/ Số điện thoại</label>
                                                    <input type="text" class="form-control" name="phone_number"
                                                           placeholder="Phone number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="text" class="form-control" name="email"
                                                           placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Occupation/ Nghề nghiệp</label>
                                                    <input type="text" class="form-control" name="occupation"
                                                           placeholder="Occupation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>* Contact 2nd full name (Parent/guardian) / Họ và tên người thân (Phụ
                                                huynh, người giám hộ) 2:</label>
                                            <input type="text" class="form-control" name="contact_2">
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Relationship/ Mối quan hệ</label>
                                                    <input type="text" class="form-control" name="relationship_2"
                                                           placeholder="Relationship">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Phone number/ Số điện thoại</label>
                                                    <input type="text" class="form-control" name="phone_number_2"
                                                           placeholder="Phone number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email_2"
                                                           placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Occupation/ Nghề nghiệp</label>
                                                    <input type="text" class="form-control" name="occupation"
                                                           placeholder="Occupation">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 2-->

                            <!--begin: Form Wizard Step 3-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
                                <div class="kt-form__section kt-form__section--first" style="width: max-content">
                                    <div class="kt-wizard-v2__form">
                                        <div class="form-group">
                                            <label class="kt-heading kt-heading--md">Your application campus/ Cơ sở đăng
                                                ký nhập học</label>
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio2"> Swinburne Hanoi
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio2"> Swinburne Ho Chi Minh
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio2"> Swinburne Danang
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="kt-heading kt-heading--md">Bachelor of Information and
                                                Communication Technology Major/ Cử nhân ngành Công nghệ thông
                                                tin</label>
                                            <div class="kt-radio-list">
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Software Technology/ Công nghệ
                                                    phần mềm
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Systems Management/ Quản trị hệ
                                                    thống
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="kt-heading kt-heading--md">Bachelor of Business Major / Cử
                                                nhân ngành Kinh doanh</label>
                                            <div class="kt-radio-list">
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> International Business/ Kinh
                                                    doanh quốc tế
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Business Administration/ Quản trị
                                                    kinh doanh
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Marketing
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="kt-heading kt-heading--md">Bachelor of Media and
                                                Communication/ Cử nhân ngành Truyền thông đa phương tiện</label>
                                            <div class="kt-radio-list">
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Social Media/ Truyền thông xã hội
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Advertising/ Quảng cáo
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Public relations/ Truyền thông và
                                                    Quan hệ công chúng
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="kt-heading kt-heading--md">Bachelor of Computer Science/ Cử
                                                nhân ngành khoa học máy tính</label>
                                            <div class="kt-radio-list">
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Artificial Intelligence/ Trí tuệ
                                                    nhân tạo
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Internet of Things/ IoT
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Software Development/ Phát triển
                                                    phần mềm
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="kt-heading kt-heading--md">Semester Major Intake (which
                                                semester are the students expected to be eligible to study the
                                                major?)</label>
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> September
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> January
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> May
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--brand">
                                                    <input type="radio" name="radio3"> Year
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 3-->

                            <!--begin: Form Wizard Step 4-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Have you taken an English proficiency test?: (*):</div>
                                <div class="form-group">
                                    <label></label>
                                </div>
                                <div class="form-group">
                                    <label>Please attach a certified copy of your results, or submit it immediately when
                                        available/Nếu có, đính kèm bản sao công chứng của kết quả hoặc nộp trực tiếp tại
                                        StudentHQ sớm nhất có thể. Cung cấp thông tin về kết quả của bạn:</label>
                                </div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__form">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label class="kt-radio kt-radio--brand">
                                                        <input type="radio" name="radio3"> IELTS: Date of test/Ngày thi:
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h5 class="font-weight-bold">Listening</h5>
                                            <div class="col-1">
                                                <input type="text" size="2">
                                            </div>
                                            <h5 class="font-weight-bold">Reading </h5>
                                            <div class="col-1">
                                                <input type="text" size="2">
                                            </div>
                                            <h5 class="font-weight-bold">Writing </h5>
                                            <div class="col-1">
                                                <input type="text" size="2">
                                            </div>
                                            <h5 class="font-weight-bold">Speaking </h5>
                                            <div class="col-1">
                                                <input type="text" size="2">
                                            </div>
                                            <h5 class="font-weight-bold">Overall </h5>
                                            <div class="col-1">
                                                <input type="text" size="2">
                                            </div>


                                        </div>
                                        <div class="form-group">
                                            <label class="kt-radio kt-radio--brand">
                                                <input type="radio" name="radio3"> Khác
                                                <span></span>
                                            </label>
                                            <input class="col-5 form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Upload and submit your documents/ Nộp hồ sơ</div>
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            *Note: All files (except for ID image) must be scanned and uploaded as a PDF
                                            Lưu ý: Tất cả các file (ngoại trừ file ảnh thẻ) phải được scan và tải lên dưới dạng PDF
                                            Compulsory
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__review">
                                        <div class="kt-wizard-v2__review-item">
                                            <div class="form-group row">
                                                <div class="col-sm-11">
                                                    <div class="kt-wizard-v2__review-title">
                                                        1. Application form.(<a class="font-weight-bold text-danger">Download Form HERE</a>)
                                                    </div>
                                                    <div class="kt-wizard-v2__review-content">
                                                        Đơn đăng ký nhập học
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="">Preview</a>
                                                    <div>
                                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Choose file">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
														<i class="fa fa-times"></i>
													</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v2__review-item">
                                            <div class="form-group row">
                                                <div class="col-sm-11">
                                                    <div class="kt-wizard-v2__review-title">
                                                        1.  A notarised copy of your original senior high school graduation certificate with a<br>
                                                        notarised English translation.
                                                    </div>
                                                    <div class="kt-wizard-v2__review-content">
                                                        Một bản sao công chứng bằng tốt nghiệp THPT hoặc giấy chứng nhận tốt nghiệp<br>
                                                        THPT tạm thời (dịch thuật tiếng Anh kèm bản tiếng Việt) - lưu ý: Giấy chứng nhận tốt<br>
                                                        nghiệp THPT tạm thời chỉ có giá trị trong vòng một năm kể từ ngày cấp, sinh viên<br>
                                                        phải nộp bằng tốt nghiệp nếu tốt nghiệp trên một năm.
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div>
                                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Choose file">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
														<i class="fa fa-times"></i>
													</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v2__review-item">
                                            <div class="form-group row">
                                                <div class="col-sm-11">
                                                    <div class="kt-wizard-v2__review-title">
                                                        3. A notarised copy of your original academic transcripts from years 10, 11, 12 with a <br>
                                                        notarised English translation.
                                                    </div>
                                                    <div class="kt-wizard-v2__review-content">
                                                        Một bản sao công chứng học bạ lớp 10, 11, 12 (dịch thuật tiếng Anh kèm bản tiếng Việt).
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div>
                                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Choose file">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
														<i class="fa fa-times"></i>
													</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v2__review-item">
                                            <div class="form-group row">
                                                <div class="col-sm-11">
                                                    <div class="kt-wizard-v2__review-title">
                                                        4. Photograph (3x4cm) taken within the last six months.
                                                        Ảnh (3x4cm) chụp trong sáu tháng gần nhất
                                                    </div>

                                                </div>
                                                <div class="col-sm-1">
                                                    <div>
                                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Choose file">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
														<i class="fa fa-times"></i>
													</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v2__review-item">
                                            <div class="form-group row">
                                                <div class="col-sm-11">
                                                    <div class="kt-wizard-v2__review-title">
                                                        5. A notarised copy of your ID card or passport.
                                                        Một bản sao công chứng Chứng minh nhân dân.
                                                    </div>

                                                </div>
                                                <div class="col-sm-1">
                                                    <div>
                                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Choose file">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
														<i class="fa fa-times"></i>
													</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v2__review-item">
                                            <div class="form-group row">
                                                <div class="col-sm-11">
                                                    <div class="kt-wizard-v2__review-title">
                                                        6. A copy of your English language certificate (IELTS / TOEFL / PTE) with validity of two years. <br>
                                                        Một bản sao chứng chỉ Anh ngữ (IELTS / TOEFL / PTE) có thời hạn trong vòng hai năm.
                                                    </div>

                                                </div>
                                                <div class="col-sm-1">
                                                    <div>
                                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Choose file">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
														<i class="fa fa-times"></i>
													</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Form Wizard Step 5-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">SUBMIT HARD DOCUMENTS/NỘP HỒ SƠ TRỰC TIẾP TẠI CƠ SỞ HỌC TẬP
                                </div>
                                <div class="kt-form__section kt-form__section--first">

                                </div>
                            </div>

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                <button
                                    class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                    data-ktwizard-type="action-prev">
                                    Previous
                                </button>
                                <button type="submit" class="btn btn-success" data-ktwizard-type="action-submit">Submit</button>
                                <button
                                    class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                    data-ktwizard-type="action-next">
                                    Next Step
                                </button>
                            </div>
                            <!--end: Form Actions -->
                        </form>
                        <!--end: Form Wizard Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



