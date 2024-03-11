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
            <form class="theme-form theme-form-2 mega-form" role="form" action="{{ route('admin.city.store') }}"
                autocomplete="off" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header-1 my-4" style="text-align: center">
                    <h2>City Details</h2>
                </div>

                <div class="row">
                    
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
                        <label class="col-lg-2 col-md-3 col-form-label form-label-title">State</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="state" type="text">
                            @if ($errors->has('state'))
                            <span class="text-danger">{{ $errors->first('state') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-lg-2 col-md-3 mb-0" name="name">District</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="district" tabindex="4" type="text">
                            @if ($errors->has('district'))
                                <span class="text-danger">{{ $errors->first('district') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-lg-2 col-md-3 mb-0" name="name">Publish</label>
                        <div class="col-md-9 col-lg-10">
                            <input class="form-control" name="publish" tabindex="4" type="number">
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
