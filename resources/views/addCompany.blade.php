@if (!session()->has('id'))
    <script>
        window.location = "/login";
    </script>
@endif

@extends('layout.masterlayout')
@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4>Dashboard</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Lexa</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Add New Company
                    </div>
                </div>
                <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="Name">
                                        Company Name
                                    </label>
                                    <input type="text" placeholder="Enter Name" name="name" class="form-control">
                                    @error('name')
                                        <span class="text-danger mt-4">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Email">
                                        Company Email
                                    </label>
                                    <input type="text" placeholder="Enter Email" name="username" class="form-control">
                                    @error('username')
                                        <span class="text-danger mt-4">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="logo">
                                        Company Logo
                                    </label>
                                    <input type="file" name="logo" class="form-control">
                                    @error('logo')
                                        <span class="text-danger mt-4">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="website">
                                        Company Website
                                    </label>
                                    <input type="text" name="website" class="form-control"
                                        placeholder="Company Website Link">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 text-center">
                            <div class="col">
                                <input type="submit" name="Add" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
