<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            📦 Список
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-100">Все продукты</h1>
                <a href="{{ route('products.create') }}"
                   class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition">
                    ➕ Добавить товар
                </a>
            </div>

            @if($products->isEmpty())
                <div class="bg-blue-50 text-red-900 p-4 rounded-md">
                    Список товаров пуст
                </div>
            @else
                <div class="overflow-x-auto bg-gray-800 shadow-md rounded-lg">
                    <table class="min-w-full divide-y">
                        <thead class="bg-gray-900">
                        <tr>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-gray-200">#</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-gray-200">Изображение</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-gray-200">Название</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-gray-200">Цена</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-gray-200">Категория</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-gray-200">Статус</th>
                            <th class="py-3 px-4 text-right text-sm font-semibold text-gray-200">Действия</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y">
                        @foreach($products as $product)
                            <tr class="hover:bg-gray-700">
                                <td class="py-3 px-4 text-sm text-gray-300">{{ $product->id }}</td>
                                <td class="py-3 px-4 text-sm text-gray-300">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ __('Изображение не найдено') }}" class="h-auto max-w-full object-contain py-3 px-4 rounded">
                                </td>
                                <td class="py-3 px-4 text-sm text-gray-200 font-medium">{{ $product->name }}</td>
                                <td class="py-3 px-4 text-sm text-gray-200">{{ number_format($product->price, 2, ',', ' ') }} $</td>
                                <td class="py-3 px-4 text-sm text-gray-200">{{ $product->category->name ?? 'Без категории' }}</td>
                                <td class="py-3 px-4 text-sm">
                                    @if(method_exists($product, 'isNew') && $product->isNew())
                                        <span class="text-green-500 font-semibold text-sm">Новинка</span>
                                    @else
                                        <span class="text-gray-500 text-sm">В наличии</span>
                                    @endif
                                </td>
                                <td class="py-3 px-4 text-right space-x-2">
                                    <div class="py-1 px-1">
                                        <a href="{{ route('products.show', $product->id) }}"
                                            class="inline-block bg-green-600 hover:bg-green-700 text-white text-sm px-3 py-1.5 rounded transition">
                                            ↪️ Перейти
                                        </a>
                                    </div>

                                    <div class="py-1 px-1">
                                        <a href="{{ route('products.edit', $product->id) }}"
                                           class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm px-3 py-1.5 rounded transition">
                                            ✏️ Изменить
                                        </a>
                                    </div>

                                    <div class="py-1 px-1">
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline"
                                          onsubmit="return confirm('Удалить {{ addslashes($product->name) }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="bg-red-600 hover:bg-red-700 text-white text-sm px-3 py-1.5 rounded transition">
                                            🗑️ Удалить
                                        </button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
