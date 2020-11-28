@extends('_layout')

@section('content')

    <div class="row" >
        <div class="col-md-12">
        <a href="{{ route('employees.create') }}" class="btn btn-primary" role="button">Add New Employee</a>
        </div>
    </div>

        <div class="row" style="margin-top: 3px">
            <div class="col-md-12">
                
                <div class="panel panel-default">
                    <div class="panel-heading">List Employees</div>
                    <div class="panel-body">
                        
                        <table class="table table-hover table-bordered table-sm-responsive">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Employee Number</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($employees as $employee)
                                <tr>
                                <td>{{ $employee->EmployeeFullName}}</td>
                                <td>{{ $employee->EmployeeNumber}}</td>
                                    <td>
                                        <a href="{{ route('employees.edit', ['employee' => $employee->id])}}" class="btn btn-primary btn-sm" role="button">Edit</a> 
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('employees.destroy', ['employee' => $employee->id]) }}">
                                            @csrf 
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>Data Not Found</tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                  </div>
            </div>
        </div>

@endsection