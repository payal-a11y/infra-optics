@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4  class=" text-2xl">Edit Service</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data"  class="flex flex-col bg-white p-[40px] mt-[20px]">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <div class="mb-3">
                <label class="form-label">Title</label><br>
                <input class="bg-sky-50 h-[30px] mb-[20px] w-full" type="text" name="title" class="form-control" value="{{ $service->title }}" required>
            </div>

            {{-- Intro --}}
            <div class="mb-3">
                <label class="form-label">Intro</label><br>
                <textarea class="bg-sky-50 h-[30px] mb-[20px] w-full h-5" name="intro" class="form-control" rows="4" required>{{ $service->intro }}</textarea>
            </div>

            {{-- Current Image --}}
            <div class="mb-3">
                <label class="form-label d-block">Current Image</label>

                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" width="150" class="mb-3 rounded">
                @else
                    <p>No image uploaded</p>
                @endif
            </div>

            {{-- New Image Upload --}}
            <div class="mb-3">
                <label class="form-label">Replace Image (optional)</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="flex gap-4">

                        {{-- Save Button --}}
            <button class=" bg-green-600 w-fit text-white px-5 py-2 mt-5 rounded-xl" type="submit" class="btn btn-success">Update Service</button>

            <a class=" bg-red-600 w-fit text-white px-5 py-2 mt-5 rounded-xl" href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                Cancel
            </a>
            </div>


        </form>

    </div>
</div>
@endsection