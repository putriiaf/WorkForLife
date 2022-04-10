<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Profile</title>
</head>
<body>
-->
@extends('layout.layout')

@section('content')
<section class="flex item-center justify-center my-20 mx-10">

	<div class="flex-shrink-0 w-44 mb-6 h-44 sm:mb-0">
		<img src="{{ asset('img/avatar.png') }}" alt="" class="object-cover object-center w-full h-full rounded-full bg-white">
	</div>
	<div class="flex flex-col space-y-4 pl-5 mt-3">
		<div>
            <h4 class="text-lg mb-1">HALO,</h4>
			<h2 class="text-4xl font-medium mb-1">Anung</h2>
			<span class="text-md text">CEO in Pt Maju jaya</span>
		</div>
        <div>
            <button class="px-3 py-1 rounded-full bg-[#E84A5F] text-white font-bold border-[#E84A5F] hover:bg-[#E84A5F]/75 border-[#E84A5F]/75">UPDATE PROFIL</button>
        </div>

</section>

<div class="flex flex-wrap font-montserrat" id="tabs-id">
  <div class="w-full">
    <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-sm font-bold px-5 py-3 border-b-4 border-[#123C69] block-1 leading-normal text-dongker bg-white" onclick="changeAtiveTab(event,'tab-profile')">
           Informasi Diri
        </a>
      </li>
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-sm font-bold px-5 py-3 border-b-4 leading-normal text-dongker bg-white" onclick="changeAtiveTab(event,'tab-settings')">
           Postingan Saya
        </a>
      </li>
    </ul>
    <div class="relative flex flex-col min-w-0 break-words bg-[#F6F6F6] mb-6 mx-32 shadow-lg rounded">
      <div class="px-4 py-5 flex-auto">
        <div class="tab-content tab-space">
          <div class="block" id="tab-profile">
            <div class="mx-auto">
                <form>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                    Nama
                                </label>
                                <input type="text" id="disabled-input-2" class="bg-white border border-white text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 p-2.5" value="Anung" disabled readonly>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                    Nomor Telepon
                                </label>
                                <input type="text" id="disabled-input-2" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="0858585885858" disabled readonly>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                    Jenis Kelamin
                                </label>
                                <input type="text" id="disabled-input-2" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="Laki - Laki" disabled readonly>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                    Email
                                </label>
                                <input type="text" id="disabled-input-2" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="anung@gmail.com" disabled readonly>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                    Posisi
                                </label>
                                <input type="text" id="disabled-input-2" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="CEO" disabled readonly>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block text-blueGray-600 text-sm font-bold mb-2" htmlfor="grid-password">
                                    Perusahaan
                                </label>
                                <input type="text" id="disabled-input-2" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="PT Maju Jaya" disabled readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="hidden" id="tab-settings">
            <!-- component -->
            <div class="flex bg-white shadow-lg rounded-xl mx-4 md:mx-auto max-w-md md:max-w-2xl "><!--horizantil margin is just for display-->
                <div class="flex items-start px-4 py-6">
                    <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="{{ asset('img/avatar.png') }}" alt="avatar">
                        <div class="">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams </h2>
                            </div>
                            <p class="text-gray-700">12 April 2022</p>
                            <h6 class="mt-3 font-extrabold">Judul</h6>
                            <p class="mt-1 text-gray-700 text-sm">
                                Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                            </p>
                        </div>
                </div>
            </div>
        </div>
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
<!--
</body>
</html>
-->