@extends('app')
@section('title', 'Edit User')

@section('content')
<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Edit User</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Position</label>
            <input name="position" type="text" class="form-control @error('position') is-invalid @enderror" value="{{ old('position', $user->position) }}">
            @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Office</label>
            <input name="office" type="text" class="form-control @error('office') is-invalid @enderror" value="{{ old('office', $user->office) }}">
            @error('office')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Age</label>
            <input name="age" type="number" class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $user->age) }}">
            @error('age')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Start Date</label>
            <input name="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date', $user->start_date) }}">
            @error('start_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label>Salary</label>
            <input name="salary" type="number" class="form-control @error('salary') is-invalid @enderror" value="{{ old('salary', $user->salary) }}">
            @error('salary')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
