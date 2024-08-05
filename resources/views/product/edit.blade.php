<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <title>Edit Produk</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Edit Produk</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Nama:</label>
                <input type="text" name="name" value="{{ $product->name }}" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Deskripsi:</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded mt-1">{{ $product->description }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Harga:</label>
                <input type="text" name="price" value="{{ $product->price }}" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Stok:</label>
                <input type="text" name="stock" value="{{ $product->stock }}" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Gambar:</label>
                <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded mt-1">
                @if($product->image)
                    <p class="text-sm text-gray-500 mt-1">Gambar saat ini: <a href="{{ $product->image }}" target="_blank" class="text-blue-500 underline">{{ $product->image }}</a></p>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Kategori:</label>
                <select name="category_id" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>            
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
