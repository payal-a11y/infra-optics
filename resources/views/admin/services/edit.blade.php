@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Service</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <div class="mb-3">
                <label class="form-label">Service Title</label>
                <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
            </div>

            {{-- Intro --}}
            <div class="mb-3">
                <label class="form-label">Intro</label>
                <textarea name="intro" class="form-control" rows="4" required>{{ $service->intro }}</textarea>
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

            {{-- Save Button --}}
            <button type="submit" class="btn btn-success">Update Service</button>

            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>
</div>
@endsection