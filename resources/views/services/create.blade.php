<!DOCTYPE html>
<html>
<head>
    <title>Add Service</title>
</head>
<body>

<h1>Add Service</h1>

<form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Title:</label>
    <input type="text" name="title">

    <label>Intro:</label>
    <textarea name="intro"></textarea>

    <label>Image:</label>
    <input type="file" name="image">

    <button type="submit">Save</button>
</form>

</body>
</html>