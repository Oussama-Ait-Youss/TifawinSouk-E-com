<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>TifawinSouk - Inventory</title>
</head>
<body>
    
<div class="p-8 bg-gray-50 min-h-screen">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Product Catalog</h1>
            <p class="text-sm text-gray-600">Manage and organize your souk inventory</p>
        </div>
        <a href="#" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-lg shadow-sm transition-all">
            + Add New Product
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Stock</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-4 text-xs font-semibold text-gray-500 uppercase tracking-wider text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($products as $product)
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-6 py-4">
                        <div class="font-semibold text-gray-900">{{ $product->name }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm font-medium text-gray-700">
                            {{ number_format($product->price, 2) }} <span class="text-xs text-gray-400">DH</span>
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        @if($product->stock > 0)
                            <span class="px-2 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-md border border-emerald-100">
                                {{ $product->stock }} in stock
                            </span>
                        @else
                            <span class="px-2 py-1 bg-red-50 text-red-700 text-xs font-bold rounded-md border border-red-100">
                                Out of stock
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-sm text-gray-600 line-clamp-1 max-w-xs">
                            {{ $product->description ?? 'No description provided' }}
                        </p>
                    </td>
                    <td class="px-6 py-4 text-right space-x-2">
                        <button class="text-sm font-medium text-indigo-600 hover:text-indigo-900">Edit</button>
                        <button class="text-sm font-medium text-red-600 hover:text-red-900">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>