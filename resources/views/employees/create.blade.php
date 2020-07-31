@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Create new Employee</h3>
                <a class="btn btn-primary" href="{{ route('home') }}" role="button"><span><i class="fas fa-long-arrow-alt-left"></i> Back to dashboard</span></a>
            </div>
            <div class="card-body">
                <form action="{{ route('employees.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" name="fname" class="form-control" value="{{ old('fname') }}">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" value="{{ old('lname') }}">
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" name="gender" class="form-control" value="{{ old('gender') }}">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                    </div>

                    <div class="form-group">
                        <label>Select Position</label>
                        <select class="form-control" name="positions_id">
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}">
                                    {{ $position->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-success" type="submit">Submit</button>

                    <a class="btn btn-info" href="{{ route('home') }}" role="button"><span>Cancel</span></a>
                    
                </form>
            </div>
        </div>
    </div>
@endsection