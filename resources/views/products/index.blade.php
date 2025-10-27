@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">📦 Все продукты</h1>
            <a href="{{ route('products.create') }}"
               class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition">
                ➕ Добавить товар
            </a>
        </div>

        @if($products->isEmpty())
            <div class="bg-blue-50 text-blue-700 p-4 rounded-md">
                Пока нет товаров 😔
            </div>
        @else
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full border-collapse">
                    <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">#</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Название</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Цена</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Категория</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Статус</th>
                        <th class="py-3 px-4 text-right text-sm font-semibold text-gray-700">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-4 text-sm text-gray-600">{{ $product->id }}</td>
                            <td class="py-3 px-4 text-sm text-gray-900 font-medium">{{ $product->name }}</td>
                            <td class="py-3 px-4 text-sm text-gray-800">{{ number_format($product->price, 2, ',', ' ') }} $</td>
                            <td class="py-3 px-4 text-sm text-gray-600">{{ $product->category->name ?? 'Без категории' }}</td>
                            <td class="ml-2 font-semibold text-sm {{ $product->isNew() ? 'text-green-500' : '' }}">
                                {{ $product->isNew() ? 'Новинка' : '' }}
                            </td>
                            <td class="py-3 px-4 text-right space-x-2">
                                <a href="{{ route('products.edit', $product->id) }}"
                                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm px-3 py-1.5 rounded transition">
                                    ✏️ Изменить
                                </a>

                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline"
                                      onsubmit="return confirm('Удалить {{ $product->name }}?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white text-sm px-3 py-1.5 rounded transition">
                                        🗑️ Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
