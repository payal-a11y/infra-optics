@extends('admin.layout')

@section('content')
<div class="card">
    <div class=" flex gap-6 items-center mb-[20px]">
        <h4 class=" text-2xl">Services</h4>
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3 py-2 px-2 border-2 border-blue-950 bg-[#111827] text-white rounded-xl
                ">
            Add New Service
        </a>
    </div>

    <div class="card-body">


<table class="table table-bordered border-collapse border border-gray-400">
    <thead>
        <tr class="bg-gray-300 py-2 px-3 text-left">
            <th class="p-[20px]">Title</th>
            <th>Intro</th>
            <th>Image</th>
            <th class="p-[20px]">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
            <tr>
                <td class=" font-bold p-[20px]">{{ $service->title }}</td>
                <td class="w-5xl">{{ $service->intro }}</td>
                <td class=" w-32">
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" width="120">
                    @else
                        No Image
                    @endif
                </td>

                <td class="justify-items-end">
                    <!-- EDIT BUTTON -->
                    <a href="{{ route('admin.services.edit', $service->id) }}"
                       class="btn btn-sm btn-primary">
                       <i class="fa-regular fa-pen-to-square text-green-600 "></i>
                    </a>

                    <!-- DELETE BUTTON -->
                    <form action="{{ route('admin.services.destroy', $service->id) }}"
                          method="POST"
                          style="display:inline-block"
                          onsubmit="return confirm('Are you sure you want to delete this service?');">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-danger">
                           <i class="fa-regular fa-circle-xmark text-red-600"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>
@endsection
