@extends('app')
@section('title', 'Add User')

@section('content')
<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Add New User</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following errors:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" placeholder="Full Name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <label>Position</label>
            <input name="position" type="text" class="form-control" placeholder="Job Position">
        </div>

        <div class="form-group">
            <label>Office</label>
            <input name="office" type="text" class="form-control" placeholder="Office Location">
        </div>

        <div class="form-group">
            <label>Age</label>
            <input name="age" type="number" class="form-control" placeholder="Age">
        </div>

        <div class="form-group">
            <label>Start Date</label>
            <input name="start_date" type="date" class="form-control">
        </div>

        <div class="form-group">
            <label>Salary</label>
            <input name="salary" type="number" class="form-control" placeholder="Salary in USD">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control" placeholder="Password">
        </div>


        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
