@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Media Library</h4>
    </div>

    <div class="card-body">

        <div class="row">
            @foreach($files as $file)
                <div class="col-md-3 text-center mb-4">

                    {{-- Image Preview --}}
                    <div class="border p-2" style="height:180px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $file) }}" class="img-fluid">
                    </div>

                    {{-- File Path --}}
                    <div class="small text-muted mt-1">
                        {{ $file }}
                    </div>

                    {{-- Delete Button --}}
                    <form action="{{ route('admin.media.delete') }}" method="POST" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="file" value="{{ $file }}">
                        <button onclick="return confirm('Delete this file?')" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection