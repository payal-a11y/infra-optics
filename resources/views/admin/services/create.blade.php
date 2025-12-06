@extends('admin.layout')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Add Service</title>
</head>
<body>

<h1 class=" text-2xl">Add Service</h1>

<form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col bg-white p-[40px] mt-[20px]">
    @csrf

    <label class=" font-medium">Title:</label>
    <input class="bg-sky-50 h-[30px] mb-[20px]" type="text" name="title">

    <label class="font-medium">Intro:</label>
    <textarea class="bg-sky-50 mb-5" name="intro"></textarea>

    <label class=" font-medium">Image:</label>
    <input type="file" name="image">

    <button class=" bg-red-700 w-fit text-white px-5 py-2 mt-5 rounded-xl" type="submit">Save</button>
</form>

</body>
</html>
@endsection
