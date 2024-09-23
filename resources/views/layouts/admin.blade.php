<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Panel - Dark Mode')</title>
    <!-- Importing Bootstrap CSS and Custom CSS via Vite -->
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <!-- Sidebar Component -->
        <x-sidebar />

        <!-- Main Content -->
        <div class="content col-11">
            <header class="d-flex border justify-content-between align-items-center">
                <h1 class="">@yield('header', 'Dashboard')</h1>
                <button id="toggleSidebar" class="btn btn-dark">Toggle Sidebar</button>
            </header>

            {{-- Main content --}}
            @yield('content')
        </div>
    </div>

    <!-- Importing Bootstrap JS and Custom JS via Vite -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/js/app.js'])
</body>

</html>
