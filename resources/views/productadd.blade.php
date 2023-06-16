<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product Add') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.productsave')}}" method="POST">
                        @csrf
                        <div class=grid-cols-2">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label><br>
                            <input name="name" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div><br>
                        <div class=grid-cols-2">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label><br>
                            <input name="size" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div><br>
                        <div class=grid-cols-2">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Materials</label><br>
                            <textarea  id="message" name="materials" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div><br>
                        <div class=grid-cols-2">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Connections</label><br>
                            <input name="connections" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div><br>
                        <div class=grid-cols-2">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Characteristic</label><br>
                            <input name="characteristic" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div><br>
                        <div class=grid-cols-2">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Process Temperature</label><br>
                            <input name="process_temperature" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div><br>
                        <div class=grid-cols-2">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Design Standard</label><br>
                            <input name="design_standard" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div><br>
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Select</label>
                        <select name="cat_name" id="select" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach($categorys as $category)
                            <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                            @endforeach
                        </select><br>
                        <div class=grid-cols-2">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label><br>
                            <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
                        </div><br>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Ekle
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

