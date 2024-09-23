@extends('layouts.admin') @section('content')
    <div class="container">
        <h2>Create New Role</h2>
        <form action="{{ route('roles.store') }}" method="POST"> @csrf <div class="form-group"> <label for="name">Role
                    Name</label> <input type="text" class="form-control" id="name" name="name" required> </div>
            <button type="submit" class="btn btn-primary mt-2">Create Role</button>
        </form>
    </div>
@endsection
