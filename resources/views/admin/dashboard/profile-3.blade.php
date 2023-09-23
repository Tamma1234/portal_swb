@extends('admin.layouts.main')
@section('title', 'Create')

@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Queries', 'value' => "", 'value2' => ""])
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!-- Wizard container -->
        <div class="wizard-container">
            <div class="card wizard-card" data-color="red" id="wizard">
                <form action="{{ route('upload.drive') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="wizard-header">
                        <h3 class="wizard-title">
                            COMPLETE YOUR APPLICATION PORTAL
                        </h3>
                        <h5>HOÀN THIỆN HỒ SƠ NHẬP HỌC</h5>
                    </div>
                    <div class="wizard-navigation">
                        <ul>
                            <li><a href="#sectiona" data-toggle="tab">SECTION A</a></li>
                            <li><a href="#captain" data-toggle="tab">Contact</a></li>
                            <li><a href="#sectionb" data-toggle="tab">SECTION B</a></li>
                            <li><a href="#sectionc" data-toggle="tab">SECTION C</a></li>
                            <li><a href="#sectiond" data-toggle="tab">SECTION D</a></li>
                            <li><a href="#sectione" data-toggle="tab">SECTION E</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="sectiona">
                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                                 data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">Enter your Account Details</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v4__form">
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
                                                            <input type="radio" name="gender" value="0"> Male/ Nam
                                                            <span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--success">
                                                            <input type="radio" name="gender" value="1">Female/ Nữ
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
                                                    <input type="tel" class="form-control" name="dob"
                                                           placeholder="phone" value="001166879546">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="user_email"
                                                           placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Phone/Di động</label>
                                                    <input type="text" class="form-control" name="phone_number"
                                                           placeholder="Phone Number" value="0984153654">
                                                    <span
                                                        class="form-text text-muted">Please enter your phone number.</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="captain">
                            <h4 class="info-text">What type of room would you want? </h4>
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
                                        <input type="text" class="form-control" name="phone_number_1"
                                               placeholder="Phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" name="user_email_2"
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
                        <div class="tab-pane" id="sectionb">
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
                                            <input type="radio" name="radio4"> September
                                            <span></span>
                                        </label>
                                        <label class="kt-radio kt-radio--brand">
                                            <input type="radio" name="radio4"> January
                                            <span></span>
                                        </label>
                                        <label class="kt-radio kt-radio--brand">
                                            <input type="radio" name="radio4"> May
                                            <span></span>
                                        </label>
                                        <label class="kt-radio kt-radio--brand">
                                            <input type="radio" name="radio4"> Year
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="sectionc">
                            <div class="kt-heading kt-heading--md">Have you taken an English proficiency test?: (*):
                            </div>
                            <div class="kt-radio-inline">
                                <label class="kt-radio kt-radio--bold kt-radio--success">
                                    <input type="radio" name="radio2" id="english_yes"> Yes/Có
                                    <span></span>
                                </label>
                                <label class="kt-radio kt-radio--bold kt-radio--success">
                                    <input type="radio" name="radio2" id="english_no"> No/Không
                                    <span></span>
                                </label>
                            </div>
                            <div class="kt-footer" id="english_test" style="display: none">
                                <div class="form-group">
                                    <label>Please attach a certified copy of your results, or submit it immediately when
                                        available/Nếu có, đính kèm bản sao công chứng của kết quả hoặc nộp trực tiếp tại
                                        StudentHQ sớm nhất có thể. Cung cấp thông tin về kết quả của bạn:</label>
                                </div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__form">
                                        <div class="row">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="sectiond">
                            <div class="kt-heading kt-heading--md">Upload and submit your documents/ Nộp hồ sơ</div>
                            <div class="form-group form-group-last">
                                <div class="alert alert-secondary" role="alert">
                                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                    <div class="alert-text">
                                        *Note: All files (except for ID image) must be scanned and uploaded as a PDF
                                        Lưu ý: Tất cả các file (ngoại trừ file ảnh thẻ) phải được scan và tải lên dưới
                                        dạng PDF
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
                                                    1. Application form.(<a class="font-weight-bold text-danger">Download
                                                        Form HERE</a>)
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    Đơn đăng ký nhập học
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div>
                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                               title="" data-original-title="Choose file">
                                                            <i class="flaticon-upload"></i>
                                                            <input type="file" name="application_file"
                                                                   accept=".png, .jpg, .jpeg">
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                              title="" data-original-title="Cancel avatar">
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
                                                    2. A certified copy of your temporary high school certificate with a
                                                    notarised English translation
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    Bản công chứng Giấy tốt nghiệp tạm thời kèm bản dịch tiếng Anh
                                                    (File: PDF)(*)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-wizard-v2__review-item">
                                        <div class="form-group row">
                                            <div class="col-sm-11">
                                                <div class="kt-wizard-v2__review-title">
                                                    3. A certified copy of official high school certificate with a
                                                    notarised English translation
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    Bản công chứng Bằng tốt nghiệp THPT kèm bản dịch tiếng Anh (File:
                                                    PDF)
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div>
                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                               title="" data-original-title="Choose file">
                                                            <i class="flaticon-upload"></i>
                                                            <input type="file" name="certified_file"
                                                                   accept=".png, .jpg, .jpeg">
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                              title="" data-original-title="Cancel avatar">
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
                                                    4. A certified copy of your high school transcripts (Grade 10,11,12)
                                                    with a notarised English translation
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    Bản công chứng học bạ THPT kèm bản dịch tiếng Anh (File: PDF).(*)
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div>
                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                               title="" data-original-title="Choose file">
                                                            <i class="flaticon-upload"></i>
                                                            <input type="file" name="transcripts_file"
                                                                   accept=".png, .jpg, .jpeg">
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                              title="" data-original-title="Cancel avatar">
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
                                                    5. Photograph (3x4cm) taken within the last six months.
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    Ảnh (3x4cm) chụp trong sáu tháng gần nhất (File: JPEG)(*)
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div>
                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                               title="" data-original-title="Choose file">
                                                            <i class="flaticon-upload"></i>
                                                            <input type="file" name="photograph_file"
                                                                   accept=".png, .jpg, .jpeg">
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                              title="" data-original-title="Cancel avatar">
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
                                                    6. A certified copy of your ID card or passport
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    Một bản sao công chứng Chứng minh nhân dân.(File: PDF)(*)
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div>
                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                               title="" data-original-title="Choose file">
                                                            <i class="flaticon-upload"></i>
                                                            <input type="file" name="certified_copy"
                                                                   accept=".png, .jpg, .jpeg">
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                              title="" data-original-title="Cancel avatar">
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
                                                    7. A copy of your English language certificate (IELTS / TOEFL / PTE)
                                                    with validity of two years.(File: PDF)
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    Một bản sao chứng chỉ Anh ngữ (IELTS / TOEFL / PTE) có thời hạn
                                                    trong vòng hai năm.
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div>
                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                               title="" data-original-title="Choose file">
                                                            <i class="flaticon-upload"></i>
                                                            <input type="file" name="english_language"
                                                                   accept=".png, .jpg, .jpeg">
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                              title="" data-original-title="Cancel avatar">
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
                                                    8. Other Documents – If applicable (bachelor's degree certificate
                                                    and academic transcript, personal statement…)
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    Các giấy khác – nộp nếu có.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="sectione">
                            <div class="kt-form__section kt-form__section--first">
                                <div class="kt-wizard-v2__review">
                                    <div class="kt-wizard-v2__review-item">
                                        <div class="form-group row">
                                            <div class="col-sm-11">
                                                <div class="kt-wizard-v2__review-title">
                                                    <h3>Cơ sở Hà Nội:</h3>
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    <labal>Tầng 1 - Swinburne Innovation Space tại số 80 Duy Tân, Dịch
                                                        Vọng Hậu, Cầu Giấy, Hà Nội.
                                                    </labal>
                                                    <br>
                                                    <labal>Phone/Số điện thoại: 0939 403 555</labal>
                                                    <br>
                                                    <labal>Email: Swinburne@fe.edu.vn</labal>
                                                </div>
                                                <div class="kt-wizard-v2__review-title">
                                                    <h3>Cơ sở Hồ Chí Minh:</h3>
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    <labal>Tầng 1- Swinburne HCM tại A35 Đ. Bạch Đằng, Phường 2, Tân
                                                        Bình, Thành phố Hồ Chí Minh.
                                                    </labal>
                                                    <br>
                                                    <labal>Phone/Số điện thoại: 0387 148 555</labal>
                                                    <br>
                                                    <labal>Email: Swinburne@fe.edu.vn</labal>
                                                </div>
                                                <div class="kt-wizard-v2__review-title">
                                                    <h3>Cơ sở Đà Nẵng:</h3>
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    <labal>2Q, 2A Đ. 2 Tháng 9, P, Hải Châu, Đà Nẵng.</labal>
                                                    <br>
                                                    <labal>Phone/Số điện thoại: 0896 630 555</labal>
                                                    <br>
                                                    <labal>Email: Swinburne@fe.edu.vn</labal>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-footer">
                        <div class="pull-right">
                            <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next'
                                   value='Next'/>
                            <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish'
                                   value='Finish'/>
                        </div>
                        <div class="pull-left">
                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous'
                                   value='Previous'/>
                            <div class="footer-checkbox">
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes">
                                        </label>
                                        Subscribe to our newsletter
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div> <!-- wizard container -->
    </div>

@endsection
@section('script')
    <script src="{{asset('assets/admin/js/wizard/wizard-3.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('#english_yes').on("click", function () {
                $('#english_test').css("display", 'block');
            })

            $('#english_no').on("click", function () {
                $('#english_test').css("display", 'none');
            })
        })
    </script>
@endsection
@section('css')
    <link href="{{asset('assets/admin/css/wizard/wizard.css')}}" rel="stylesheet" type="text/css"/>
@endsection
