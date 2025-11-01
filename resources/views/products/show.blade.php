<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 text-center leading-tight">
            Страница товара
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2 class="py-3 px-4 text-3xl text-gray-200 text-center font-medium">{{$product->name}}</h2>
            </div>

            <h2 class="py-3 px-4 text-sm text-gray-200 text-center font-medium">{{$product->category->name ?? 'Без категории'}}</h2>

            <div class="p-6 text-gray-900 dark:text-gray-100 object-center object-scale-down">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ __('Изображение не найдено') }}"
                 class="py-3 px-4 text-sm text-gray-200 text-center font-medium rounded h-auto max-w-full object-contain">
            </div>

            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2 class="py-3 px-4 text-2xl text-gray-200 text-center font-medium">{{$product->price}}$</h2>
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2 class="py-3 px-4 text-xl text-gray-200 text-center font-medium">{{$product->description}}</h2>
            </div>

        </div>
    </div>
</x-app-layout>
