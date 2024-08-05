<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Daftar Kategori</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Daftar Kategori</h1>
        
        <!-- Tombol Kembali ke Halaman Produk dan Tambah Kategori -->
        <div class="flex justify-between mb-6">
            <a href="{{ route('products.index') }}" class="bg-green-500 text-white px-4 py-2 rounded">Kembali ke Produk</a>
            <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Kategori</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @foreach ($categories as $category)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">{{ $category->name }}</h2>
                        <p class="text-gray-700">{{ $category->description }}</p>
                        <div class="flex justify-between mt-4">
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-yellow-500">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
