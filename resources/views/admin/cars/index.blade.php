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
                    <h2>{{ $title }}</h2>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('admin.cars.create') }}" class="btn btn-block btn-light">Add Cars</a>
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
                                                <th>Cars Image</th>
                                                <th>Model</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Price</th>
                                                <th>Passengers</th>
                                                <th>Bags</th>
                                                <th>Extra Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($list as $item)
                                                <tr>
                                                    <td>
                                                        <span>
                                                            <img src="{{ asset('storage/' . $item->banner) }}"
                                                                alt="users">
                                                        </span>
                                                    </td>

                                                    <td>{{ $item->model }}</td>

                                                    <td>{{ $item->name }}</td>

                                                    <td>{{ $item->type }}</td>
                                                    <td>{{ $item->price }}</td>

                                                    <td>{{ $item->passenger }}</td>

                                                    <td>{{ $item->bags }}</td>
                                                    <td>{{ $item->extra_fare }}</td>
                                                    <td>
                                                        <ul>
                                                            {{-- <li>
                                                            <a href="order-detail.html">
                                                                <span class="lnr lnr-eye"></span>
                                                            </a>
                                                        </li> --}}

                                                            <li>
                                                                <a href="{{ route('admin.cars.edit', $item->id) }}">
                                                                    <span class="lnr lnr-pencil"></span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <form action="{{ route('admin.cars.destroy', $item->id) }}"
                                                                    method="POST" id="delete_form_{{ $item->id }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="" class=" btn-sm delete-confirm"
                                                                        data-id="{{ $item->id }}"><i
                                                                            class="fa fa-trash"></i></button>

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
                                       {{$list->links()}}
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
