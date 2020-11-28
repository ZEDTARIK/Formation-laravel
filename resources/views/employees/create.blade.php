@extends('_layout')
@section('content')


<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">Create New Employee</div>
            <div class="panel-body">
          
                <form method="POST" class="form-horizontal" action="{{ route('employees.store') }}">
                    @csrf 
                    @include('employees.form')   

                        <div class="form-group">
                            <div class="col-sm-6 text-center">
                                <button type="submit" class="btn btn-success">Add Employee</button>
                            </div>
                        </div>
                </form>
                
                
            </div>
          </div>
    </div>
</div>

@endsection