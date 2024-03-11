@extends('layouts.appmaster')
@section('content')
    <div class="page-body">
        <div class="title-header">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h2>{{ $title }}</h2>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('admin.packages.index') }}" class="btn btn-block btn-light">Back to list</a>
                </div>
            </div>

        </div>
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
                <form class="theme-form theme-form-2 mega-form" role="form"
                    action="{{ route('admin.packages.update', $data->id) }}" autocomplete="off" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-lg-2 col-md-3 mb-0" name="from">From</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="from" tabindex="4" type="text"
                                    value="{{ $data->from }}">
                                @if ($errors->has('from'))
                                    <span class="text-danger">{{ $errors->first('from') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-lg-2 col-md-3 mb-0" name="to">To</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="to" tabindex="4" type="text"value="{{ $data->to }}">
                                 @if ($errors->has('to'))
                                <span class="text-danger">{{ $errors->first('to') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Route Plan</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="route_plan" type="text"value="{{ $data->route_plan }}">
                                 @if ($errors->has('route_plan'))
                                <span class="text-danger">{{ $errors->first('route_plan') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Distance</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="distance" type="text"value="{{ $data->distance }}">
                                 @if ($errors->has('distance'))
                                <span class="text-danger">{{ $errors->first('distance') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Type</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="type" type="text"value="{{ $data->type }}">
                                 @if ($errors->has('type'))
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Price</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="price" type="number"value="{{ $data->price }}">
                                 @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Extra Fare</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="extra_fare"
                                    type="text"value="{{ $data->extra_fare }}">
                                @if ($errors->has('extra_fare'))
                                    <span class="text-danger">{{ $errors->first('extra_fare') }}</span>
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
                                <input class="form-control" name="image_alt" type="text"value="">
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
