@if (!session()->has('id'))
    <script>
        window.location = "/login";
    </script>
@endif
@if (session()->has('status'))
<script>
    alert('{{ session()->get('status') }}');
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
                    <li class="breadcrumb-item active">employee</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row my-2">
        <div class="col"></div>
        <div class="col text-end">
            <a href="{{route('employee.create')}}" class="btn btn-primary">
                Add New
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-info bg-opacity-25 border-bottom border-info">
                    <div class="card-title text-info">
                        <h5>Employees List</h5>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Company
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $count =1;
                            @endphp
                            @foreach ($employee as $value )
                            <tr>
                                <th scope="row" >
                                    {{$count}}
                                </th>
                                <td>
                                   {{$value->firstname." ".$value->lastname}}
                                </td>
                                <td>
                                    {{$value->email}}
                                </td>
                                <td>
                                    {{$value->phone}}
                                </td>
                                <td>
                                    {{$value->getcompany->name}}
                                </td>
                                <td>
                                    <form action="{{route('employee.destroy',$value->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <a href="{{route('employee.edit',$value->id)}}" class="btn btn-warning">
                                        Edit
                                    </a>
                                    <a href="{{route('employee.show',$value->id)}}" class="btn btn-primary">
                                        View
                                    </a>
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @php
                                $count ++;
                            @endphp
                            @endforeach 
                            {{-- <tr>
                                <td colspan="4">
                                    {{"no result"}}
                                </td>
                            </tr> --}}
                        </tbody>
                        <tfoot>
                            {{$employee->links('pagination::bootstrap-5')}}
                        </tfoot>
                    </table>
                    {{$employee->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
