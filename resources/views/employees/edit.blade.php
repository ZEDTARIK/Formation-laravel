@extends('_layout')
@section('content')


<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
        <div class="panel-heading">Edit Employee N° {{ $employee->id }}</div>
            <div class="panel-body">
          
                <form method="POST" class="form-horizontal" action="{{ route('employees.update', ['employee' => $employee->id]) }}">
                    @csrf 
                    @method('PUT')
                    @include('employees.form')   

                        <div class="form-group">
                            <div class="col-sm-9 mx-auto">
                                <div class="btn-toolbar">
                                    <button type="submit" class="btn btn-warning">Edit Employee</button>
                                    <a href="{{ route("employees.index")}}" role="button" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                </form>
                
                
            </div>
          </div>
    </div>
</div>

@endsection