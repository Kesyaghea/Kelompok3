<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>    
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Detail Produk</h1>
        <div class="bg-white shadow-md rounded-lg overflow-hidden flex">
            <div class="w-1/2">
                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-contain">
            </div>
            <div class="w-1/2 p-4">
                <h2 class="text-xl font-bold">{{ $product->name }}</h2>
                <p class="text-gray-700">{{ $product->description }}</p>
                <p class="text-gray-900 font-bold">Rp {{ number_format($product->price, 2) }}</p>
                <p class="text-gray-700">Stok: {{ $product->stock }}</p>
                <a href="{{ route('products.index') }}" class="text-blue-500 mt-4 inline-block">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
