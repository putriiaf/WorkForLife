<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>WorkForLife</title>
</head>
<body>
<!--  Hero -->
<section class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-20 md:px-12 px-4">
    <div class="md:flex-1 md:mr-40">
      <h1 class="font-montserrat text-5xl font-bold mb-7">Mulai <span class="text-pingki">Karirmu</span> Disini</h1>
      <p class="font-montserrat font-light mb-7 max-w-xl">
      Dapatkan pekerjaan yang cocok untukmu, cari tahu lebih lewat pengalaman orang lain, dan apply lewat WorkForLife!
      </p>
      <div>
  	    <form class="font-montserrat flex">
    	    <input class="rounded-l-lg p-4 pr-44 border-t mr-0 border-b border-l border-gray-200 bg-white shadow-xl" placeholder="Temukan pekerjaan atau perusahaan.."/>
		      <button class="px-8 rounded-r-lg bg-[#E84A5F]  text-white font-bold p-4  border-[#E84A5F] hover:bg-[#E84A5F]/75 border-[#E84A5F]/75">Cari</button>
	      </form>
      </div>
    </div>
    <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
      <img src="{{ asset('img/depan.png') }}" alt="Gambar" />
    </div>
  </section>

<section class = "md:mt-0 flex flex-col justify-center lg-px-20 md:px-12 px-4 bg-teal-200">
    Mitra Kami
</section>


  <!-- Loker Terbaru -->
<section>
  <div class="flex items-center justify-center h-screen bg-[#123C69]">
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
                <h1 class="text-3xl text-center font-semibold capitalize lg:text-4xl">Kenapa WorkForLife ?</h1>

                <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2">
                    <div class="p-6 border rounded-xl border-r-gray-200">
                        <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-2xl font-medium text-gray-700 capitaliz">Copy & paste components</h1>

                                <p class="mt-3 text-gray-500">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border rounded-xl border-r-gray-200 dark:border-gray-700">
                        <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-2xl font-medium text-gray-700 capitali">Zero Configrations</h1>

                                <p class="mt-3 text-gray-500 dark:text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border rounded-xl border-r-gray-200 dark:border-gray-700">
                        <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-2xl font-medium text-gray-700 capitaliz">elegant Dark Mode</h1>

                                <p class="mt-3 text-gray-500 dark:text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border rounded-xl border-r-gray-200 dark:border-gray-700">
                        <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-2xl font-medium text-gray-700 capitaliz">Simple & clean designs</h1>

                                <p class="mt-3 text-gray-500 dark:text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- Testimoni -->
<section>
  <div>
    <h2 class="bg-100% text-center text-5xl mt-10">
      Testi
    </h2>
  </div>
</section>


</body>
</html>