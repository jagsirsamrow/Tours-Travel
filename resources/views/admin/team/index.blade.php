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
        <div class="title-header">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h2>{{$title}}</h2>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('admin.team.create') }}" class="btn btn-block btn-light">Add Team mamber</a>
                </div>
            </div>

        </div>

        <!-- Table Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-desi">
                                    <table class="table table-striped all-package">
                                        <thead>
                                            <tr>
                                                <th>Slider Image</th>
                                                <th>Post</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($list as $item)
                                            
                                            <tr>
                                                <td>
                                                    <span>
                                                        <img src="{{ asset('storage/' . $item->banner) }}" alt="users">
                                                    </span>
                                                </td>

                                                <td>{{ $item->post }}</td>

                                                <td>{{ $item->name }}</td>

                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>
                                                    <ul>
                                                        {{-- <li>
                                                            <a href="order-detail.html">
                                                                <span class="lnr lnr-eye"></span>
                                                            </a>
                                                        </li> --}}

                                                        <li>
                                                            <a href="{{ route('admin.team.edit',$item->id) }}">
                                                                <span class="lnr lnr-pencil"></span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <form action="{{ route('admin.team.destroy',$item->id) }}" method="POST" id="delete_form_{{$item->id}}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="" class=" btn-sm delete-confirm" data-id="{{$item->id}}"><i class="fa fa-trash"></i></button>

                                                            </form>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination Box Start -->
                        <div class=" pagination-box">
                            <nav class="ms-auto me-auto " aria-label="...">
                                <ul class="pagination pagination-primary">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript:void(0)">Previous</a>
                                    </li>

                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Table End -->


    </div>
@endsection
