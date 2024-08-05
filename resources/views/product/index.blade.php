<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Daftar Produk</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Daftar Produk</h1>
        <div class="flex justify-between mb-6">
            <a href="{{ route('products.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">Tambah Produk</a>
            <a href="{{ route('categories.index') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded shadow">Lihat Kategori</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Gambar</th>
                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Nama Produk</th>
                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Deskripsi</th>
                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Harga</th>
                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Stok</th>
                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 border-b">
                                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover rounded-lg shadow">
                            </td>
                            <td class="py-4 px-6 border-b text-gray-700">{{ $product->name }}</td>
                            <td class="py-4 px-6 border-b text-gray-700">{{ $product->description }}</td>
                            <td class="py-4 px-6 border-b text-gray-700">Rp {{ number_format($product->price, 2) }}</td>
                            <td class="py-4 px-6 border-b text-gray-700">{{ $product->stock }}</td>
                            <td class="py-4 px-6 border-b">
                                <div class="flex space-x-2">
                                    <a href="{{ route('products.show', $product->id) }}" class="text-white bg-blue-500 hover:bg-blue-700 py-1 px-3 rounded mt-4">Lihat</a>
                                    <!--<button type="submit" class="text-white bg-red-500 hover:bg-red-700 py-1 px-3 rounded mt-4">Hapus</button>-->

                                    <a href="{{ route('products.edit', $product->id) }}" class="text-white bg-orange-500 hover:bg-orange-700 py-1 px-3 rounded mt-4">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white bg-red-500 hover:bg-red-700 py-1 px-3 rounded mt-4">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
