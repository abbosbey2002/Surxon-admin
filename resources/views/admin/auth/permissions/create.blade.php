@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Create New Permission</h2>
        <form action="{{ route('permissions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Permission Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Create Permission</button>
        </form>
    </div>
@endsection
