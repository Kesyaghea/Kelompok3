<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Tambah Produk</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Nama:</label>
                <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Deskripsi:</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded mt-1"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Harga:</label>
                <input type="text" name="price" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Stok:</label>
                <input type="text" name="stock" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Gambar:</label>
                <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Kategori:</label>
                <select name="category_id" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
