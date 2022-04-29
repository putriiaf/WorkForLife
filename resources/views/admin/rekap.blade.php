@extends('layout.layout')

@section('content')

<div class="flex flex-wrap font-montserrat" id="tabs-id">
    <div class="w-full">
        <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a class="text-sm font-bold px-5 py-3 border-b-4 border-[#123C69] block-1 leading-normal text-dongker bg-white" onclick="changeAtiveTab(event,'tab-perusahaan')">
                Perusahaan
                </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a class="text-sm font-bold px-5 py-3 border-b-4 leading-normal text-dongker bg-white" onclick="changeAtiveTab(event,'tab-loker')">
                    Loker
                </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a class="text-sm font-bold px-5 py-3 border-b-4 leading-normal text-dongker bg-white" onclick="changeAtiveTab(event,'tab-post')">
                    Post
                </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a class="text-sm font-bold px-5 py-3 border-b-4 leading-normal text-dongker bg-white" onclick="changeAtiveTab(event,'tab-report')">
                    Report
                </a>
            </li>
        </ul>
        <div class="relative flex flex-col min-w-0 break-words bg-[#F6F6F6] mb-6 mx-32 shadow-lg rounded">
            <div class="tab-content tab-space">
                <div class="block" id="tab-perusahaan">
                    <div class="font-montserrat">
                        <div class="mx-16 my-10">
                            <h1 class="text-3xl font-bold">Perusahaan</h1>
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
                                        <th scope="col" class="px-6 py-3">
                                            Aksi
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
                </div>
                <div class="hidden" id="tab-loker">
                    <div class="font-montserrat">
                        <div class="mx-16 my-10">
                            <h1 class="text-3xl font-bold">Loker</h1>
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
                <div class="hidden" id="tab-post">
                    <div class="font-montserrat">
                        <div class="mx-16 my-10">
                            <h1 class="text-3xl font-bold">Post</h1>
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
                <div class="hidden" id="tab-report">
                    <div class="font-montserrat">
                        <div class="mx-16 my-10">
                            <h1 class="text-3xl font-bold">Report</h1>
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
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function changeAtiveTab(event,tabID){
      let element = event.target;
      while(element.nodeName !== "A"){
        element = element.parentNode;
      }
      ulElement = element.parentNode.parentNode;
      aElements = ulElement.querySelectorAll("li > a");
      tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
      for(let i = 0 ; i < aElements.length; i++){
        aElements[i].classList.remove("border-[#123C69]");
        aElements[i].classList.add("text-dongker");
        tabContents[i].classList.add("hidden");
        tabContents[i].classList.remove("block");
      }
      element.classList.add("text-dongker");
      element.classList.add("border-[#123C69]");
      document.getElementById(tabID).classList.remove("hidden");
      document.getElementById(tabID).classList.add("block");
    }
  </script>

@endsection