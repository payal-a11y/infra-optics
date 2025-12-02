@extends('admin.layout')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Menus</h1>

    <table class="table-auto w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-3 border">Menu Name</th>
                <th class="p-3 border">Location</th>
                <th class="p-3 border">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($menus as $menu)
                <tr>
                    <td class="p-3 border">{{ $menu->name }}</td>
                    <td class="p-3 border">{{ $menu->location }}</td>
                    <td class="p-3 border">
                        <a href="{{ route('admin.menus.edit', $menu->id) }}"
                           class="bg-blue-600 text-white px-4 py-2 rounded">
                           Edit Menu
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
