@extends('layout.layout')

@section('content')

<div class="font-montserrat">
    <div class="mx-16 my-10">
        <h1 class="text-3xl font-bold">Hai Min</h1>
    </div>
    <div class="flex justify-end mx-20 mb-2">
        <a href="/" class="text-white bg-dongker py-2 px-5 rounded-lg">Tambah</a>
    </div>
    <div class="relative flex justify-center mx-16 overflow-x-auto border shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    1
                </th>
                <td class="px-6 py-4">
                    Sliver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-5 py-4 text-right space-x-5">
                    <a href="#" class="font-medium text-dongker">Edit</a>
                    <a href="#" class="font-medium text-dongker">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>

@endsection