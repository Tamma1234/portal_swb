@extends('admin.layouts.main')
@section('title', 'Index')
@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Clubs', 'value' => "Detail", 'value2' => ""])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">{{ $survey->name }}</h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-light alert-elevate fade show" role="alert">
                                    <div class="alert-text">
{{--                                       <p class="font-weight-bold font-italic">Congratulations on your upcoming graduation from Swinburne Vietnam!</p>--}}
{{--                                       <p class="font-italic" style="color: #646c9a">With the hope that all students upon graduation receive tailored career support from Swinburne Vietnam to help you land your dream job, please take a moment to fill out this survey. This will help us understand your job status, aspirations, interests, and career goals, enabling us to provide personalized support as you transition into the workforce.</p>--}}
{{--                                       <p class="font-italic" style="color: #646c9a">Thank you for your submission!</p>--}}
                                        {!! htmlspecialchars_decode($survey->description) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--begin::Form-->
                        <?php
                            $i = 1;
                        ?>
                        <form class="kt-form" action="{{ route('survey.store', ['id' => $survey->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @foreach($questions as $question)
                                <div class="form-group">
                                    <label class="font-weight-bold">{{ $i++ }}. {!! htmlspecialchars_decode($question->name) !!}</label>
                                    @if($question->type == 1)
                                        <div class="kt-radio-list">
                                            @foreach ($question->children as $child)
                                                <label class="kt-radio">
                                                    <input type="radio" name="answer[{{ $question->id }}]" value="{{ $child->id }}"> {{ $child->name }}
                                                    <span></span>
                                                </label>
                                            @endforeach
                                            @error('answer')
                                            <div class="alert alert-solid-danger alert-bold">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    @elseif($question->type == 2)
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-1 col-form-label">Job Title:</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" name="title_job" placeholder="Enter Title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-1 col-form-label">Company:</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" name="company" placeholder="Enter Company">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-1 col-form-label">Industry:</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" name="industry" placeholder="Enter Industry">
                                            </div>
                                        </div>
                                        @error('answers')
                                        <div class="alert alert-solid-danger alert-bold">{{ $message }}</div>
                                        @enderror
                                    @else
                                        <div class="form-group form-group col-md-6" style="margin: auto">
                                            <label class="col-form-label"></label>
                                            <div class="">
                                                <div class="dropzone dropzone-default dropzone-success"
                                                     style="height: 92px;margin: auto;padding: 0;"
                                                     id="kt_dropzone_"
                                                     data-dropzone-id="">
                                                    <div class="dropzone-msg dz-message needsclick">
                                                        <h3 class="dropzone-msg-title">Click to upload.</h3>
                                                        <span
                                                            class="dropzone-msg-desc">Upload file: PDF</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" name="file" accept=".pdf"
                                               id="file_" data-file-id=""
                                               style="display: none">
                                        @error('file')
                                        <div class="alert alert-solid-danger alert-bold">{{ $message }}</div>
                                        @enderror
                                    @endif
                                </div>
                            @endforeach
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                            <a href="https://swinx.swin.edu.vn/term/index" type="reset" name="file"
                                               class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).on('click', '[id^="kt_dropzone_"]', function () {
            let dropzoneId = $(this).data('dropzone-id');
            $(`#file_${dropzoneId}`).click();
        });

        $(document).on('change', 'input[type="file"][id^="file_"]', function () {
            let fileId = $(this).data('file-id');
            let file = $(this).val();
            let fileName = file.split("\\").pop();
            let name = $(`#kt_dropzone_${fileId} .dropzone-msg-title`).text(fileName);
        });
    </script>
@endsection
