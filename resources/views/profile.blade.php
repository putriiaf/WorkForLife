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
<section class="flex item-center justify-center my-20 mx-10">

	<div class="flex-shrink-0 w-44 mb-6 h-44 sm:mb-0">
		<img src="https://source.unsplash.com/100x100/?portrait?1" alt="" class="object-cover object-center w-full h-full rounded-full bg-white">
	</div>
	<div class="flex flex-col space-y-4 pl-5 mt-3">
		<div>
            <h4 class="text-lg mb-1">HALO,</h4>
			<h2 class="text-4xl font-medium mb-1">Leroy Jenkins</h2>
			<span class="text-md text">General manager in Pt Maju jaya</span>
		</div>
        <div>
            <button class="px-3 py-1 rounded-full bg-[#E84A5F] text-white font-bold border-[#E84A5F] hover:bg-[#E84A5F]/75 border-[#E84A5F]/75">UPDATE PROFIL</button>
        </div>

</section>

<section class="flex item-center justify-center">
<div class="mt-4 px-32 rounded">
<!-- Tabs -->
    <ul id="tabs" class="inline-flex w-full px-5 pt-2 space-x-60">
        <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-50"><a id="default-tab" href="#first">All</a></li>
        <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Clothes</a></li>
    </ul>

<!-- Tab Contents -->
    <div id="tab-contents" class="flex h-screen w-max p-6 bg-[#123C69]">
        <div id="first" class="p-4">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </div>

        </div>
        <div id="second" class="hidden p-4">
            Second tab
        </div>
    </div>
</div>
</section>

<script>
let tabsContainer = document.querySelector("#tabs");

let tabTogglers = tabsContainer.querySelectorAll("a");
console.log(tabTogglers);

tabTogglers.forEach(function(toggler) {
  toggler.addEventListener("click", function(e) {
    e.preventDefault();

    let tabName = this.getAttribute("href");

    let tabContents = document.querySelector("#tab-contents");

    for (let i = 0; i < tabContents.children.length; i++) {

      tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
      if ("#" + tabContents.children[i].id === tabName) {
        continue;
      }
      tabContents.children[i].classList.add("hidden");

    }
    e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px", "opacity-100");
  });
});

document.getElementById("default-tab").click();

</script>
</section>
</body>
</html>