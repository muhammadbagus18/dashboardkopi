<!-- resources/views/product/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Tombol Add Product -->
                    <a href="{{ route('product.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Add Product
                    </a>
                </div>
                <!-- Your products table or content goes here -->
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">ID</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">Name</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">Price</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">Description</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">Stock</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">Image</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through products -->
                        @foreach ($products as $product)
                        <tr>
                            <td class="px-6 py-4 border-b border-gray-200">{{ $product->id }}</td>
                            <td class="px-6 py-4 border-b border-gray-200">{{ $product->name }}</td>
                            <td class="px-6 py-4 border-b border-gray-200">{{ $product->price }}</td>
                            <td class="px-6 py-4 border-b border-gray-200">{{ $product->description }}</td>
                            <td class="px-6 py-4 border-b border-gray-200">{{ $product->stock }}</td>
                            <td class="px-6 py-4 border-b border-gray-200">{{ $product->image }}</td>
                            <td class="px-6 py-4 border-b border-gray-200">
                                <a href="{{ route('product.edit', $product) }}" class="text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('product.destroy', $product) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline ml-4" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
