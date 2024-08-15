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
                        Edit Employee
                    </div>
                </div>
                <form action="{{ route('employee.update',$employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="Name">
                                        First Name
                                    </label>
                                    <input type="text" placeholder="Enter First Name" name="fname"
                                        class="form-control @error('fname')
                                            is-invalid
                                        @enderror" value="{{$employee->firstname}}">
                                    @error('fname')
                                        <span class="text-danger mt-4">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Email">
                                        Last Name
                                    </label>
                                    <input type="text" placeholder="Enter Email" name="lname" class="form-control @error('lname')
                                        is-invalid
                                    @enderror" value="{{$employee->lastname}}">
                                    @error('lname')
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
                                        Employee Email
                                    </label>
                                    <input type="text" name="username" class="form-control @error('username')
                                        is-invalid
                                    @enderror" placeholder="Enter Email" value="{{$employee->email}}">
                                    @error('username')
                                        <span class="text-danger mt-4">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Phone">
                                        Employee Phone
                                    </label>
                                    <input type="text" name="phone" class="form-control @error('phone')
                                        is-invalid
                                    @enderror"
                                        placeholder="Enter Phone Number" value="{{$employee->phone}}">
                                    @error('phone')
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
                                    <label for="website">
                                        Select Company
                                    </label>
                                    <select class="form-select @error('cid')
                                        is-invalid
                                    @enderror" name="cid" id="">
                                        <option value="{{$employee->cid}}" selected hidden>{{$employee->getcompany->name}}</option>
                                        @foreach ($company as $value)
                                            @if ($employee->cid != $value->id)
                                            <option value="{{ $value->id }}"> {{ $value->name }} </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('cid')
                                    <span class="text-danger mt-4">
                                        {{ $message }}
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 text-center">
                            <div class="col">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
