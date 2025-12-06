<!DOCTYPE html>
<html>
<head>
    <title>Services</title>
</head>
<body>

<div class=" flex">
    <h1>All Services</h1>

<a href="{{ route('admin.services.create') }}">Add New Service</a>
</div>


<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Intro</th>
        <th>Image</th>
    </tr>

    @foreach($services as $service)
        <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->title }}</td>
            <td>{{ $service->intro }}</td>
            <td>
                @if($service->image)
                    <img src="{{ asset('storage/'.$service->image) }}" width="80">
                @endif
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>