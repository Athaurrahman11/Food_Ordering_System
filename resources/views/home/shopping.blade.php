<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite('resources/css/app.css')
</head>

<body class="bg-black">
  @include('home.header')

  <section class="menu-section p-28 pt-22">

    <div class="text-white text-center ">
      <h3 class="text-5xl md:text-5xl font-bold after-[''] after:w-68 after:h-2 after:block after:bg-green-500 after:m-auto after:mt-4">Choose Your <span class="text-green-500">Meal</span> </h3>
      <p class="text-base text-center pt-3 md:text-lg pb-4">Quality food, every time</p>
    </div>

    <div class="dish-items grid grid-cols-1 gap-10 md:grid md:grid-cols-3 md:gap-10 lg:grid lg:grid-cols-4 lg:gap-10">

      <div class="dish-item h-[450px] md:h-[400px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Home.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">

          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">6 items</p>
          <h2 class="text-white bg-green-500 w-full block rounded-b-lg   p-2 md:text-lg font-semibold transision duration-200 ">Indian Delights</h2>
        </div>
      </div>



      <div class="dish-item h-[450px] md:h-[400px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Home.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">

          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">6 items</p>
          <h2 class="text-white bg-green-500 w-full block rounded-b-lg   p-2 md:text-lg font-semibold transision duration-200 ">Indian Delights</h2>
        </div>
      </div>

      <div class="dish-item h-[450px] md:h-[400px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Home.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">

          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">6 items</p>
          <h2 class="text-white bg-green-500 w-full block rounded-b-lg   p-2 md:text-lg font-semibold transision duration-200 ">Indian Delights</h2>
        </div>
      </div>

      <div class="dish-item h-[450px] md:h-[400px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Home.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">

          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">6 items</p>
          <h2 class="text-white bg-green-500 w-full block rounded-b-lg   p-2 md:text-lg font-semibold transision duration-200 ">Indian Delights</h2>
        </div>
      </div>








    </div>
  </section>

  <section class="category p-28 pt-10">
    <div class="btn flex flex-col md:flex-row md:justify-between gap-6">

      <!-- Category Buttons -->
      <div class="category-btns text-white flex flex-wrap justify-center md:justify-between items-center gap-4 sm:gap-6 md:gap-12">
        <button class="bg-pink-950 p-2 px-2 sm:px-8 md:px-6 rounded-lg hover:cursor-pointer hover:text-green-500 transition duration-150 text-base md:text-lg font-semibold">All</button>
        <button class="bg-pink-950 p-2 px-2 sm:px-8 md:px-6 rounded-lg hover:cursor-pointer hover:text-green-500 transition duration-150 text-base md:text-lg font-semibold">Pizza</button>
        <button class="bg-pink-950 p-2 px-2 sm:px-8 md:px-6 rounded-lg hover:cursor-pointer hover:text-green-500 transition duration-150 text-base md:text-lg font-semibold">Burger</button>
        <button class="bg-pink-950 p-2 px-2 sm:px-8 md:px-6 rounded-lg hover:cursor-pointer hover:text-green-500 transition duration-150 text-base md:text-lg font-semibold">Burger</button>
        <button class="bg-pink-950 p-2 px-2 sm:px-8 md:px-6 rounded-lg hover:cursor-pointer hover:text-green-500 transition duration-150 text-base md:text-lg font-semibold">Burger</button>
      </div>

      <!-- Search -->
      <div class="search flex flex-row justify-center md:justify-end items-center gap-4 sm:gap-6 md:gap-12">
        <input
          type="text"
          class="bg-white p-1.5 rounded-xl w-40 sm:w-48 md:w-64">
        <button class="bg-pink-950 text-white p-2 px-6 sm:px-8 md:px-12 rounded-lg hover:cursor-pointer hover:text-green-500 transition duration-150 text-base md:text-lg font-semibold">
          Search
        </button>
      </div>

    </div>

    <div class="dish-items grid grid-cols-1 gap-10 md:grid md:grid-cols-3 md:gap-10 lg:grid lg:grid-cols-4 lg:gap-7 mt-6">

      <div class="dish-item h-[450px] md:h-[320px] lg:h-[320px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Dessert_Menu.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">
          <h2 class=" text-green-500 font-bold text-xl bg-green-900 p-1">Indian Delights</h2>
          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">600 Rs.</p>
          <a href="" class="text-red-500 bg-white w-full block rounded-b-lg hover:bg-green-500 hover:text-white p-2 md:text-lg font-semibold transision duration-200 ">Order Now</a>
        </div>

      </div>


      <div class="dish-item h-[450px] md:h-[320px] lg:h-[320px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Dessert_Menu.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">
          <h2 class=" text-green-500 font-bold text-xl bg-green-900 p-1">Indian Delights</h2>
          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">600 Rs.</p>
          <a href="" class="text-red-500 bg-white w-full block rounded-b-lg hover:bg-green-500 hover:text-white p-2 md:text-lg font-semibold transision duration-200 ">Order Now</a>
        </div>

      </div>


      <div class="dish-item h-[450px] md:h-[320px] lg:h-[320px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Dessert_Menu.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">
          <h2 class=" text-green-500 font-bold text-xl bg-green-900 p-1">Indian Delights</h2>
          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">600 Rs.</p>
          <a href="" class="text-red-500 bg-white w-full block rounded-b-lg hover:bg-green-500 hover:text-white p-2 md:text-lg font-semibold transision duration-200 ">Order Now</a>
        </div>

      </div>

      <div class="dish-item h-[450px] md:h-[320px] lg:h-[320px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Dessert_Menu.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">
          <h2 class=" text-green-500 font-bold text-xl bg-green-900 p-1">Indian Delights</h2>
          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">600 Rs.</p>
          <a href="" class="text-red-500 bg-white w-full block rounded-b-lg hover:bg-green-500 hover:text-white p-2 md:text-lg font-semibold transision duration-200 ">Order Now</a>
        </div>

      </div>

      <div class="dish-item h-[450px] md:h-[320px] lg:h-[320px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Dessert_Menu.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">
          <h2 class=" text-green-500 font-bold text-xl bg-green-900 p-1">Indian Delights</h2>
          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">600 Rs.</p>
          <a href="" class="text-red-500 bg-white w-full block rounded-b-lg hover:bg-green-500 hover:text-white p-2 md:text-lg font-semibold transision duration-200 ">Order Now</a>
        </div>

      </div>

      <div class="dish-item h-[450px] md:h-[320px] lg:h-[320px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Dessert_Menu.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">
          <h2 class=" text-green-500 font-bold text-xl bg-green-900 p-1">Indian Delights</h2>
          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">600 Rs.</p>
          <a href="" class="text-red-500 bg-white w-full block rounded-b-lg hover:bg-green-500 hover:text-white p-2 md:text-lg font-semibold transision duration-200 ">Order Now</a>
        </div>

      </div>

      <div class="dish-item h-[450px] md:h-[320px] lg:h-[320px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Dessert_Menu.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">
          <h2 class=" text-green-500 font-bold text-xl bg-green-900 p-1">Indian Delights</h2>
          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">600 Rs.</p>
          <a href="" class="text-red-500 bg-white w-full block rounded-b-lg hover:bg-green-500 hover:text-white p-2 md:text-lg font-semibold transision duration-200 ">Order Now</a>
        </div>

      </div>

      <div class="dish-item h-[450px] md:h-[320px] lg:h-[320px] rounded-lg relative ">
        <div class="overflow-hidden h-[80%] rounded-lg ">
          <img src="/home/images/Dessert_Menu.png" class="h-[100%] object-cover rounded-lg  hover:scale-105 transision duration-200" alt="">
        </div>
        <div class="text-center ">
          <h2 class=" text-green-500 font-bold text-xl bg-green-900 p-1">Indian Delights</h2>
          <p class=" text-[#d2b475] text-base md:text-lg font-semibold   bg-green-900 absolute top-2 right-2 rounded-full p-2 pr-4 pl-4">600 Rs.</p>
          <a href="" class="text-red-500 bg-white w-full block rounded-b-lg hover:bg-green-500 hover:text-white p-2 md:text-lg font-semibold transision duration-200 ">Order Now</a>
        </div>

      </div>



    </div>





  </section>

  @include('home.footer')
  <script src="home/js/all.js"></script>
</body>

</html>