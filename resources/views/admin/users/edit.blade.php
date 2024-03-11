
@extends('layouts.appmaster')
@section('content')
<!-- Settings Section Start -->
<div class="page-body">
    <div class="title-header">
        <h5>Edit User </h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Details Start -->
                        <div class="card">
                            <div class="card-body">
                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">First Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"
                                                    placeholder="Enter Your First Name" value="{{$user->name}}">
                                            </div>
                                        </div>

                                       

                                        
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Enter Email
                                                Address</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="email"
                                                    placeholder="Enter Your Email Address" value="{{$user->email}}">
                                            </div>
                                        </div>

                                      

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password"
                                                    placeholder="Enter Your Password" value="{{$user->password}}">
                                            </div>
                                        </div>

                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Settings Section End -->
@endsection
