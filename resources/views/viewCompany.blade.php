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
                        View Company
                    </div>
                </div>
                
                    <div class="card-body p-5">
                        <div class="row">
                           <div class="col text-center">
                            <img src="{{asset('/storage/'.$company->logo)}}" alt="Logo" class="rounded-circle img-thumbnail" width="20%">
                           </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="Name">
                                        Company Name
                                    </label>
                                    <input type="text" placeholder="Enter Name" value="{{$company->name}}" class="form-control bg-primary bg-opacity-25" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Email">
                                        Company Email
                                    </label>
                                    <input type="text" placeholder="Enter Email" value="{{$company->email}}" class="form-control bg-primary bg-opacity-25" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="website">
                                        Company Website
                                    </label>
                                    <input type="text" value="{{$company->website}}" class="form-control bg-primary bg-opacity-25" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 text-center">
                            <div class="col">
                               <a href="{{route('company.index')}}" class="btn btn-success">Back</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
