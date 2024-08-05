<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Edit Kategori</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Nama Kategori:</label>
                <input type="text" name="name" value="{{ $category->name }}" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Deskripsi:</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded mt-1">{{ $category->description }}</textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                <a href="{{ route('categories.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
