<div class="form-group">
    <label for="EmployeeFullName" class="col-sm-2">Full Name</label>
    <div class="col-sm-4">
        <input class="form-control" name="EmployeeFullName" id="EmployeeFullName" placeholder="Employee Full Name" value="{{ old('EmployeeFullName', $employee->EmployeeFullName ?? null) }}">
    </div>
</div>

<div class="form-group">
    <label for="EmployeeNumber" class="col-sm-2">Employee Number</label>
    <div class="col-sm-4">
        <input class="form-control"  name="EmployeeNumber"  id="EmployeeNumber" placeholder="Your Body"   value="{{ old('EmployeeNumber', $employee->EmployeeNumber ?? null) }}" >
    </div>
</div>

@if( $errors->any())
<ul>
    @foreach( $errors->all() as $error)
    <li> {{ $error }} </li>
    @endforeach
</ul>
@endif
