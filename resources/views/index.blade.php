<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('https://workforlife.herokuapp.com/css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>WorkForLife</title>
</head>
<body>
-->

@extends('layout.layout')

<!--  Hero -->
@section('content')
<section class="relative pt-10 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-20 md:px-12 px-4">
    <div class="md:flex-1 md:mr-40">
      <h1 class="font-montserrat text-5xl font-extrabold mb-7">Mulai <span class="text-pingki">Karirmu</span> Disini</h1>
      <p class="font-montserrat font-light mb-7 max-w-xl">
      Dapatkan pekerjaan yang cocok untukmu, cari tahu lebih lewat pengalaman orang lain, dan apply lewat WorkForLife!
      </p>
      <div>
  	    <form class="font-montserrat flex">
		    <button class="px-8 rounded-lg bg-[#E84A5F]  text-white font-bold p-4  border-[#E84A5F] hover:bg-[#E84A5F]/75 border-[#E84A5F]/75">Cek Sekarang</button>
	    </form>
      </div>
    </div>
    <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
      <img src="{{ asset('img/depan.png') }}" alt="Gambar" />
    </div>
  </section>

  <div class="font-montserrat sm:max-w-3xl pt-8 rounded-xl bg-[#F2F6FB] mx-4 sm:mx-8 md:mx-auto">
    <div class="w-11/12 sm:w-2/3 mx-auto mb-6">
      <h1 class="focus:outline-none xl:text-xl text-lg text-center text-gray-800 font-extrabold pt-2">Perusahaan Terpercaya</h1>
    </div>
    <div class="sm:py-6 px-8 sm:24 flex flex-wrap items-center">
      <div
        class="w-1/3 sm:w-1/6 flex justify-center xl:pb-10 pb-16 items-center inset-0 transform  hover:scale-75 transition duration-300 contrast-75 hover:contrast-100 drop-shadow-xl">
        <img class="focus:outline-none w-12 sm:w-16 " src="https://seeklogo.com/images/G/gojek-logo-D6E639C020-seeklogo.com.png"
          alt="Gojek" role="img" />
      </div>
      <div
        class="w-1/3 sm:w-1/6 flex justify-center xl:pb-10 pb-16 items-center inset-0 transform  hover:scale-75 transition duration-300 contrast-75 hover:contrast-100 drop-shadow-xl ">
        <img class="focus:outline-none w-12 sm:w-20" src="{{asset('img/traveloka.png')}}"
          alt="Traveloka" role="img" />
      </div>
      <div
        class="w-1/3 sm:w-1/6 flex justify-center xl:pb-10 pb-16 items-center inset-0 transform  hover:scale-75 transition duration-300 contrast-75 hover:contrast-100 drop-shadow-xl">
        <img class="focus:outline-none w-12 sm:w-16" src="https://seeklogo.com/images/B/blibli-com-logo-CEA6EEEC52-seeklogo.com.png"
          alt="Blibli" role="img" />
      </div>
      <div
        class="w-1/3 sm:w-1/6 flex justify-center xl:pb-10 pb-16 items-center inset-0 transform  hover:scale-75 transition duration-300 contrast-75 hover:contrast-100 drop-shadow-xl">
        <img class="focus:outline-none w-12 sm:w-16" src="https://seeklogo.com/images/G/goto-logo-E7E408295D-seeklogo.com.png"
          alt="Goto" role="img" />
      </div>
      <div
        class="w-1/3 sm:w-1/6 flex justify-center xl:pb-10 pb-16 items-center inset-0 transform  hover:scale-75 transition duration-300 contrast-75 hover:contrast-100 drop-shadow-xl">
        <img class="focus:outline-none w-12 sm:w-16" src="https://seeklogo.com/images/T/tokopedia-logo-40654CCDD6-seeklogo.com.png"
          alt="Tokopedia" role="img" />
      </div>
      <div
        class="w-1/3 sm:w-1/6 flex justify-center xl:pb-10 pb-16 items-center inset-0 transform  hover:scale-75 transition duration-300 contrast-75 hover:contrast-100 drop-shadow-xl">
        <img class="focus:outline-none w-12 sm:w-16" src="https://seeklogo.com/images/H/halodoc-logo-5A7C52DE38-seeklogo.com.png"
          alt="Halodoc" role="img" />
      </div>
    </div>
  </div>

  <!-- Loker Terbaru -->
<section class="relative bg-[#123C69]">
    <div class="pt-28 max-h-7">
        <p class="font-montserrat font-bold pt-5 text-white text-center text-5xl sm:text-4xl">Beberapa Lowongan Terbaru</p>
    </div>
  <div class="flex items-center justify-center h-screen">
   <div class="font-montserrat bg-white font-semibold text-center rounded-xl border shadow-lg px-10 py-5 max-w-xs md:m-10">
     <img class="mb-3 w-32 h-32 rounded-lg mx-auto" src="{{ asset('img/gojek.png') }}" alt="logo">
     <h2 class="text-md"> Product Designer </h1>
     <h1 class="text-lg font-bold"> Rp.8.000.000 </h3>
     <button class="bg-[#123C69] px-8 py-2 mt-8 rounded-xl text-gray-100 font-semibold uppercase tracking-wide hover:bg-[#123C69]/70">Lihat Detail</button>
   </div>

   <div class="font-montserrat bg-white font-semibold text-center rounded-xl border shadow-lg px-10 py-5 max-w-xs md:m-10">
     <img class="mb-3 w-32 h-32 rounded-lg mx-auto" src="{{ asset('img/gojek.png') }}" alt="logo">
     <h2 class="text-md"> Product Designer </h1>
     <h1 class="text-lg font-bold"> Rp.8.000.000 </h3>
     <button class="bg-[#123C69] px-8 py-2 mt-8 rounded-xl text-gray-100 font-semibold uppercase tracking-wide hover:bg-[#123C69]/70">Lihat Detail</button>
   </div>

   <div class="font-montserrat bg-white font-semibold text-center rounded-xl border shadow-lg px-10 py-5 max-w-xs md:m-10">
     <img class="mb-3 w-32 h-32 rounded-lg mx-auto" src="{{ asset('img/gojek.png') }}" alt="logo">
     <h2 class="text-md"> Product Designer </h1>
     <h1 class="text-lg font-bold"> Rp.8.000.000 </h3>
     <button class="bg-[#123C69] px-8 py-2 mt-8 rounded-xl text-gray-100 font-semibold uppercase tracking-wide hover:bg-[#123C69]/70">Lihat Detail</button>
   </div>

 </div>
</section>
  

<!-- Features -->
<section class="bg-white mt-10">
  <div class="container font-montserrat px-6 py-10 mx-auto">
    <h1 class="text-3xl text-center font-bold capitalize lg:text-4xl">Kenapa Harus WorkForLife?</h1>

    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2">
      <div class="p-6">
        <div class="md:flex md:items-start md:-mx-4">
          <span class="inline-block px-2 py-5 rounded-xl md:mx-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-24 pb-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
          </span>

          <div class="pt-3 mt-4 md:mx-4 md:mt-0">
            <h1 class="text-2xl font-bold text-pingki capitaliz">AMAN DAN TERPERCAYA</h1>

            <p class="mt-3">
              Perusahaan di Work For Life sudah melewati proses verifikasi dan dijamin kredibilitasnya
            </p>
          </div>
        </div>
      </div>

      <div class="p-6">
        <div class="md:flex md:items-start md:-mx-4">
          <span class="inline-block px-2 py-5 rounded-xl md:mx-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-24 pb-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </span>

          <div class="pt-3 mt-4 md:mx-4 md:mt-0">
            <h1 class="text-2xl font-bold text-pingki capitaliz">LOKER BERVARIASI</h1>

            <p class="mt-3">
              Jenis lowongan bervariasi berdasarkan bidang, lokasi, dan kualifikasi
            </p>
          </div>
        </div>
      </div>

      <div class="p-6">
        <div class="md:flex md:items-start md:-mx-4">
          <span class="inline-block px-2 py-5 rounded-xl md:mx-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-24 pb-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
          </svg>
          </span>

          <div class="pt-3 mt-4 md:mx-4 md:mt-0">
            <h1 class="text-2xl font-bold text-pingki capitaliz">SELALU UP TO DATE</h1>

            <p class="mt-3">
              Lowongan kerja selalu diurutkan dari yang paling terbaru dan diupdate
            </p>
          </div>
        </div>
      </div>

      <div class="p-6">
        <div class="md:flex md:items-start md:-mx-4">
          <span class="inline-block px-2 py-5 rounded-xl md:mx-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-24 pb-5" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
            <path d="M12 7l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25"></path>
            <path d="M12.5 16.5l2 2"></path>
            <path d="M15 14l2 2"></path>
          </svg>
          </span>

        <div class="pt-3 mt-4 md:mx-4 md:mt-0">
          <h1 class="text-2xl font-bold text-pingki capitaliz">SHARING IS HELPING</h1>

          <p class="mt-3">
            Fitur forum membantu kamu untuk memahami karir dan menambah wawasan
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- Testimoni -->
{{-- <section>
  <div>
    <h2 class="bg-100% text-center text-5xl mt-10">
      Testi
    </h2>
  </div>
</section>
@endsection --}}

<!--
</body>
</html>
-->