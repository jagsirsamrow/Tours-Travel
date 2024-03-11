@extends('layouts.appmaster')
@section('content')
    <div class="page-body">
        <div class="title-header">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h2>{{$title}}</h2>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('admin.cars.index') }}" class="btn btn-block btn-light">Back to list</a>
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
            <form class="theme-form theme-form-2 mega-form" role="form" action="{{ route('admin.blogscat.update',$data->id) }}"
                autocomplete="off" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                   
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-lg-2 col-md-3 mb-0" name="name">Name</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="name" tabindex="4" type="text" value="{{$data->name}}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-lg-2 col-md-3 mb-0" name="name">Publish</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="publish" tabindex="4" type="text" value="{{$data->publish}}">
                            @if ($errors->has('publish'))
                                <span class="text-danger">{{ $errors->first('publish') }}</span>
                            @endif
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
