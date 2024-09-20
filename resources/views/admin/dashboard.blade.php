@extends('layouts.admin')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
    <section class="row text-light">
        <x-stat-card title="Total Users" value="1,234" color="primary" />
        <x-stat-card title="Total Sales" value="$12,345" color="success" />
        <x-stat-card title="Active Projects" value="45" color="warning" />

        <x-table title="User Data" :rows="$users" />

    </section>
@endsection
