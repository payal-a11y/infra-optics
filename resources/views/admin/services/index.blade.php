@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Services page</h4>
    </div>

    <div class="card-body">
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3">
            Add New Service
        </a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Intro</th>
            <th>Image</th>
            <th width="180">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->title }}</td>
                <td>{{ $service->intro }}</td>
                <td>
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" width="80">
                    @else
                        No Image
                    @endif
                </td>

                <td>
                    <!-- EDIT BUTTON -->
                    <a href="{{ route('admin.services.edit', $service->id) }}"
                       class="btn btn-sm btn-primary">
                        Edit
                    </a>

                    <!-- DELETE BUTTON -->
                    <form action="{{ route('admin.services.destroy', $service->id) }}"
                          method="POST"
                          style="display:inline-block"
                          onsubmit="return confirm('Are you sure you want to delete this service?');">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-danger">
                            Delete
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
