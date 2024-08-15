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
                        View Employee
                    </div>
                </div>
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="Name">
                                        First Name
                                    </label>
                                    <input type="text" placeholder="Enter First Name" name="fname"
                                        class="form-control bg-info bg-opacity-25" value="{{$employee->firstname}}" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Email">
                                        Last Name
                                    </label>
                                    <input type="text" placeholder="Enter Email" name="lname" class="form-control bg-info bg-opacity-25" value="{{$employee->lastname}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="logo">
                                        Employee Email
                                    </label>
                                    <input type="text" name="username" class="form-control bg-info bg-opacity-25" placeholder="Enter Email" value="{{$employee->email}}" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Phone">
                                        Employee Phone
                                    </label>
                                    <input type="text" name="phone" class="form-control bg-info bg-opacity-25"
                                        placeholder="Enter Phone Number" value="{{$employee->phone}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-group w-50 m-auto">
                                    <label for="website">
                                        Select Company
                                    </label>
                                    <select class="form-select bg-info bg-opacity-25" name="cid" id="" disabled>
                                        <option value="{{ $employee->cid }}" selected>{{ $employee->getcompany->name }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 text-center">
                            <div class="col">
                                <a href="{{route('employee.index')}}" class="btn btn-info">Back</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
