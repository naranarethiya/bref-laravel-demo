<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
<h2>Upload an Image</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <button type="submit">Upload</button>
</form>
</body>
</html>
