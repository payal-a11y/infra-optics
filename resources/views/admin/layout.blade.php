<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.cdnfonts.com/css/hoosoe-lro" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    <style>
        body { font-family: 'Hoosoe LRO', sans-serif; }
    </style>
</head>
<body class="flex h-screen bg-gray-50">

    <!-- Sidebar (20%) -->
    <aside class="w-1/5 bg-gray-900 text-white flex flex-col">
        <!-- Project Name / Logo -->
        <div class="p-6 text-center border-b border-gray-700">
            <h1 class="text-2xl font-bold">InfraOptics</h1>
        </div>

        <!-- Navigation -->
<nav class="flex-1 mt-6">
    <ul>
        <li class="px-6 py-3 hover:bg-gray-800">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>

        <li class="px-6 py-3 hover:bg-gray-800">
            <a href="{{ route('admin.services.index') }}">Manage Services</a>
        </li>
<li class="px-6 py-3 hover:bg-gray-800">
    <a href="{{ route('admin.media.index') }}" class="nav-link">
        Media Library
    </a>
</li>
        <li class="px-6 py-3 hover:bg-gray-800"><a href="#">Users</a></li>
<li class="px-6 py-3 hover:bg-gray-800">
    <a href="{{ route('admin.settings.index') }}" class="nav-link">
        <i class="fa fa-cog"></i> Settings
    </a>
</li>    </ul>
</nav>

        <!-- Logout -->
        <div class="p-6 border-t border-gray-700">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 px-4 py-2 rounded">Logout</button>
            </form>
        </div>
    </aside>

    <!-- Dashboard Content (80%) -->
    <main class="flex-1 p-8 overflow-auto">
        @yield('content')
    </main>

</body>
</html>