@extends('backend.layouts.master')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-8">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('subjects.index') }}">Study</a>
                </li>
                <li class="active">
                    <strong>Question</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-title">
                        <h5>Select Your Answer</h5>
                        <a onclick="finishedStudy()" href="javascript:void(0)" class="btn btn-sm btn-danger pull-right m-t-n-xs" type="button">
                            <strong>Finished</strong>
                        </a>
                    </div>

                    <div class="ibox-content">

                        @include('flash-messages.flash-messages')

                        <div class="row">
                            <form class="form-horizontal" method="POST" action="{{ route('study.select-subject') }}">
                                @csrf

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="m-b-sm" style="font-size: 14px">What is your name ?</label>
                                        <div class="i-checks"><label> <input name="options[]" type="checkbox" value=""> <i></i> Option one </label></div>
                                        <div class="i-checks"><label> <input name="options[]" type="checkbox" value=""> <i></i> Option two checked </label></div>
                                        <div class="i-checks"><label> <input name="options[]" type="checkbox" value=""> <i></i> Option one </label></div>
                                        <div class="i-checks"><label> <input name="options[]" type="checkbox" value=""> <i></i> Option two checked </label></div>
                                        @error('options') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <button class="btn btn-sm btn-primary pull-left m-t-n-xs m-r-xs" type="submit">
                                            <strong>Submit</strong>
                                        </button>
                                        <a href="#" class="btn btn-sm btn-info pull-left m-t-n-xs" type="button">
                                            <strong>Skip</strong>
                                        </a>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        //show confirm message when delete table row
        function finishedStudy() {
            swal({
                title: "Are you sure?",
                text: "You want to finished yor study for today!",
                type: "warning",
                showCancelButton: true,
                allowOutsideClick: true,
                confirmButtonColor: "#1ab394",
                confirmButtonText: "Yes, finished study!",
                closeOnConfirm: true
            }, function () {
                //go to action and show welcome message for again join with us.
            });
        }
    </script>
@endsection

