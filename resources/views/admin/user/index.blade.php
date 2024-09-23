@extends('layouts.admin')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
    <section class="row text-light">
        <div class="col-12">
            <x-table title="User Data" :rows="$users" />
        </div>
    </section>
@endsection
