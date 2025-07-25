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
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Full Name">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Position</label>
            <input name="position" type="text" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}" placeholder="Job Position">
            @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Office</label>
            <input name="office" type="text" class="form-control @error('office') is-invalid @enderror" value="{{ old('office') }}" placeholder="Office Location">
            @error('office')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Age</label>
            <input name="age" type="number" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}" placeholder="Age">
            @error('age')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Start Date</label>
            <input name="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}">
            @error('start_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Salary</label>
            <input name="salary" type="number" class="form-control @error('salary') is-invalid @enderror" value="{{ old('salary') }}" placeholder="Salary in USD">
            @error('salary')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
