@extends('layouts.admin')

@section('title', 'View Details')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Details for {{ $row['name'] ?? 'Unknown' }}</h2>
    <div class="card">
        <div class="card-header">
            User Details
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($row as $key => $value)
                    <li class="list-group-item">
                        <strong>{{ ucfirst($key) }}:</strong>
                        
                        @if (is_string($value) && preg_match('/\.(jpeg|jpg|png|gif)$/i', $value))
                            <!-- Agar ma'lumot rasm bo'lsa -->
                            <img src="{{ asset($value) }}" alt="Image" style="max-width: 100px; border-radius: 5px;">
                        @else
                            <!-- Oddiy matn ko'rsatish uchun -->
                            {{ $value }}
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
