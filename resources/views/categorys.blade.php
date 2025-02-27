<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                <a href="{{ route('admin.categoryadd')}}">New Add </a>
            </button>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ..
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                   Fast
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categorys as $category)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$category-> id }}
                                    </td>
                                    <td class="px-6 py-3">{{$category-> cat_name}}</td>

                                    <td class="px-6 py-4">
                                        <a href="{{ route('admin.categoryupdate',['id'=>$category->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="{{ route('admin.categoryDeletePost',['id'=>$category->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

