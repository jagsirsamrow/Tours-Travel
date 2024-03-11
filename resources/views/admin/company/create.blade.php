@extends('layouts.appmaster')
@section('content')
    <!-- New User start -->
    <div class="page-body">
        <div>
            @if (session('status'))
                <section class="content">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('status') }}
                            </div>
                        </div>
                    </div>
                </section>
            @elseif(session('failed'))
                <section class="content">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('failed') }}
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button">Company Details</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button">Website Details</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                            <form class="theme-form theme-form-2 mega-form" role="form"
                                                action="{{ route('company_profile') }}" autocomplete="off" method="POST"
                                                enctype="form-data">
                                                @csrf
                                                <div class="card-header-1">
                                                    <h5>Company Details</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-lg-2 col-md-3 mb-0"
                                                            name="name">Company Name</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" placeholder="Company Name"
                                                                name="c_name" value="{{ $data->c_name }}"type="text">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Company
                                                            Email</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" name="c_email"
                                                                placeholder="Company Email"
                                                                value="{{ $data->c_email }}"type="email">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-lg-2 col-md-3 mb-0"
                                                            name="name">Company Mobile No</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="text" name="c_mobile"
                                                                placeholder="Company Mobile No"
                                                                value="{{ $data->c_mobile }}">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-lg-2 col-md-3 mb-0">Other Mobile
                                                            No</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="text" name="c_other_mobile"
                                                                placeholder="Other Mobile No"
                                                                value="{{ $data->c_other_mobile }}">
                                                        </div>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-lg-2 col-md-3 mb-0">Company
                                                            Address</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <textarea class="form-control" name="c_address" placeholder="Company Address">{{ $data->c_address }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-lg-2 col-md-3 mb-0">Company
                                                            Google Map</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <textarea class="form-control" name="c_map" placeholder="Company Google Map">{{ $data->c_map }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <div class=" col-md-2">
                                                            <label>&nbsp;</label>
                                                            <button type="submit" name="Update"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                            <div class="card-header-1">
                                                <h5>Website Details</h5>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-md-2 mb-0">Website Fevicon Icon</label>
                                                <div class="col-md-9">
                                                    <img src="{{ asset('storage/' . $data->c_fevi) }}"
                                                        style="width: 100px;height: 100px;" class="c_fevi">
                                                    <a href="javascript:void(0);" title="Change Website Fevicon Icon"
                                                        data-type="c_fevi" class="change-logo"><i
                                                            class="fa fa-edit"></i></a>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-md-2 mb-0">Website logo</label>
                                                <div class="col-md-9">
                                                    <img src="{{ asset('storage/' . $data->c_logo) }}"
                                                        style="width: 100px;height: 100px;" class="c_logo">
                                                    <a href="javascript:void(0);" title="Change Website Logo"
                                                        data-type="c_logo" class="change-logo"><i
                                                            class="fa fa-edit"></i></a>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-md-2 mb-0">Website Small Logo</label>
                                                <div class="col-md-9">
                                                    <img src="{{ asset('storage/' . $data->c_logo_2) }}"
                                                        style="width: 100px;height: 100px;" class="c_logo_2">
                                                    <a href="javascript:void(0);" title="Change Website Small Logo"
                                                        data-type="c_logo_2" class="change-logo"><i
                                                            class="fa fa-edit"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New User End -->
@endsection
@section('script')
    <div class="modal fade" id="website_logo">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Logo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" id="website_logo_frm" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf
                        <input type="hidden" name="type" id="logo_type">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12 alert alert-success" id="logo_div"
                                    style="display: none;">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputFile">Select Pic</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="file"
                                                id="exampleInputFile" tabindex="1">
                                            <label class="custom-file-label" for="exampleInputFile">Choose logo
                                                file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-light" data-dismiss="modal" tabindex="3">Close</button>
                    <button type="submit" class="btn btn-primary" tabindex="2" id="change_logo" name="save">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var logo_type = '';
        $('.change-logo').click(function() {
            logo_type = $(this).data('type');
            $('#logo_type').val(logo_type);
            $('#website_logo').modal('show');
        });
        $('#change_logo').click(function() {
            var formData = new FormData($("#website_logo_frm")[0]);
            $.ajax({
                url: "{{ route('change_logo') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.success) {
                        $('#website_logo').modal('hide');
                        $('.' + logo_type).attr('src', './storage/' + res.data[logo_type]);
                        showToast('success', 'Success!', 'Logo has been changed.');
                    } else {
                        showToast('danger', 'Error!', res.message);
                    }

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });
    </script>
@endsection
