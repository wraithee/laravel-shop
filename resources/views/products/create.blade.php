@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto mt-8 p-6 bg-white shadow-xl rounded-xl">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6 border-b pb-3">Добавить новый товар</h1>

        {{-- Отображение ошибок валидации --}}
        @if($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg" role="alert">
                <ul class="list-disc list-inside space-y-1">
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('products.store') }}" class="space-y-6">
            @csrf

            {{-- Поле Название --}}
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Название:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('name') ring-2 ring-red-500 @enderror">
                @error('name')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Поле Цена --}}
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Цена:</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('price') ring-2 ring-red-500 @enderror">
                @error('price')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Поле Категория --}}
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Категория:</label>
                <select name="category_id" id="category_id"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('category_id') ring-2 ring-red-500 @enderror">
                    <option value="">— Без категории —</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Поле Описание --}}
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Описание:</label>
                <textarea name="description" id="description" rows="4"
                          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('description') ring-2 ring-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')
                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Кнопка Сохранить --}}
            <div class="pt-4 flex justify-between items-center">
                <button type="submit"
                        class="px-5 py-2 text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 font-semibold rounded-lg shadow-md transition duration-150 ease-in-out">
                    💾 Сохранить
                </button>
                <a href="{{ route('products.index') }}" class="text-sm text-indigo-600 hover:text-indigo-800">
                    ← К списку товаров
                </a>
            </div>
        </form>
    </div>
@endsection
