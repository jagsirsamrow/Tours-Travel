@extends('layouts.appmaster')
@section('content')
    <div class="page-body">
        <div class="title-header">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h2>{{$title}}</h2>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('admin.sliders.index') }}" class="btn btn-block btn-light">Back to list</a>
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
            <form class="theme-form theme-form-2 mega-form" role="form" action="{{ route('admin.sliders.update',$data->id) }}"
                autocomplete="off" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-lg-2 col-md-3 mb-0" name="name">Slider Heading</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="s_heading" tabindex="4" type="text"   value="{{$data->s_heading}}">
                            @if ($errors->has('s_heading'))
                                <span class="text-danger">{{ $errors->first('s_heading') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-4 row align-items-center">
                        <label class="col-lg-2 col-md-3 col-form-label form-label-title">Slider Content</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="s_content" type="text"  value="{{$data->s_content}}">
                        </div>
                    </div>



                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-lg-2 col-md-3 mb-0">Slider Banner</label>
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
                            <input class="form-control" name="image_alt" type="text"  value="{{$data->image_alt}}">
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
