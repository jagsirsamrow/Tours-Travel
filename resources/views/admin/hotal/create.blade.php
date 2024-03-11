@extends('layouts.appmaster')
@section('content')
    <div class="page-body">
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
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
            <form class="theme-form theme-form-2 mega-form" role="form" action="{{ route('admin.team.store') }}"
                autocomplete="off" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header-1 my-4" style="text-align: center">
                    <h2>Team Details</h2>
                </div>

                <div class="row">
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-lg-2 col-md-3 mb-0" name="name">Post</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="post" tabindex="4" type="text">
                            @if ($errors->has('s_heading'))
                                <span class="text-danger">{{ $errors->first('post') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-lg-2 col-md-3 mb-0" name="name">Name</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="name" tabindex="4" type="text">
                            @if ($errors->has('s_heading'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-4 row align-items-center">
                        <label class="col-lg-2 col-md-3 col-form-label form-label-title">Email</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="email" type="email">
                            @if ($errors->has('s_heading'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label class="col-lg-2 col-md-3 col-form-label form-label-title">Contact Number</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="number" type="tel">
                            @if ($errors->has('number'))
                            <span class="text-danger">{{ $errors->first('number') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label class="col-lg-2 col-md-3 col-form-label form-label-title">Facebook Profile</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="facebook" type="text">
                            @if ($errors->has('s_heading'))
                            <span class="text-danger">{{ $errors->first('facebook') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label class="col-lg-2 col-md-3 col-form-label form-label-title">Twitter Profile</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="twitter" type="text">
                            @if ($errors->has('s_heading'))
                            <span class="text-danger">{{ $errors->first('twitter') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-lg-2 col-md-3 mb-0"> Banner</label>
                        <div class="col-md-9">
                            <input type="file" class="custom-file-input" name="banner" id="exampleInputFile"
                                tabindex="2">
                            <label class="custom-file-label" for="exampleInputFile"></label>
                            @if ($errors->has('banner'))
                                <span class="text-danger">{{ $errors->first('banner') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label class="col-lg-2 col-md-3 col-form-label form-label-title">Image Alt Tag</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="image_alt" type="text">
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <div class=" col-md-2">
                            <label>&nbsp;</label>
                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    
                   
                    
                </div>
            </form>
        </div>
    </div>
    @endsection
