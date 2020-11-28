<div class="form-group">
    <label for="EmployeeFullName" class="col-sm-2 control-label">Full Name</label>
    <div class="col-sm-4">
        <input class="form-control"  placeholder="Employee Full Name" type="text" id="EmployeeFullName" name="EmployeeFullName"  value={{ old('EmployeeFullName', $employee->EmployeeFullName ?? null) }} >
    </div>
</div>

<div class="form-group">
    <label for="EmployeeNumber" class="col-sm-2 control-label">Employee Number</label>
    <div class="col-sm-4">
        <input class="form-control" placeholder="Your Body" type="text" id="EmployeeNumber"  name="EmployeeNumber"  value={{ old('EmployeeNumber', $employee->EmployeeNumber ?? null)}} >
    </div>
</div>

@if( $errors->any())
<ul>
    @foreach( $errors->all() as $error)
    <li> {{ $error }} </li>
    @endforeach
</ul>
@endif
