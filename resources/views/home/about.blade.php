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

  <section class="about-section p-15 pt-30 md:flex md:flex-row  md:justify-between md:gap-8 text-justify  flex  flex-col-reverse">
    <div class="md:w-1/2 w-full flex flex-col justify-center">
      <h2 class="text-green-500 text-4xl md:text-5xl font-bold pt-7 after-[''] after:w-66 md:after:w-88 after:h-2 after:block after:bg-green-500 after:m-left after:mt-4">About Fabrio Dine</h2>
      <p class="text-white md:text-xl  text-semibold mt-2  ">Bringing great food closer to you. Fabrio Dine helps you discover your favorite meals and order them with ease. More than just a platform, we’re here to make every meal choice simple and satisfying.</p>

    </div>
    <div class="md:w-1/2 w-full">
      <img src="./home/images/Home.png" class="rounded-2xl" alt="">
    </div>

  </section>

  <section class="about-section p-15 pt-6 md:flex md:flex-row-reverse  md:justify-between md:gap-8 text-justify  flex  flex-col-reverse">
    <div class="md:w-1/2 w-full flex flex-col justify-center">
      <h2 class="text-green-500 text-4xl font-bold pt-7 md:text-5xl after-[''] after:w-28 md:after:w-42 after:h-2 after:block after:bg-green-500 after:m-left after:mt-4">Our Story</h2>
      <p class="text-white md:text-xl  text-semibold mt-2  ">Fabrio Dine was born from a simple idea: everyone deserves access to delicious, quality food delivered right to their doorstep. What started as a small operation with a handful of restaurants has grown into a thriving platform connecting thousands of customers with their favorite local eateries.

        We believe that great food brings people together, and our mission is to make those moments easier and more enjoyable. Whether you're craving comfort food after a long day, hosting a dinner party, or exploring new cuisines, we're here to deliver happiness, one meal at a time.

        Our team works tirelessly to ensure every order meets our high standards.</p>

    </div>
    <div class="md:w-1/2 w-full">
      <img src="./home/images/why.jpg" class="rounded-2xl" alt="">
    </div>

  </section>

  <section class="team-section p-15 pt-6 ">
    <div class="text-center">
      <h2 class="text-green-500 text-4xl md:text-5xl font-bold pt-7 after-[''] after:w-28 md:after:w-40 after:h-2 after:block after:bg-green-500 after:m-auto after:mt-4">Our Team</h2>
      <p class="text-white md:text-xl  text-semibold mt-2  ">Meet the talented team behind every delicious dish at Fabrio Dine.</p>

    </div>
   <div class="chefs grid grid-cols-1 gap-10 md:grid md:grid-cols-3 md:gap-10 lg:grid lg:grid-cols-5 lg:gap-10 mt-6">

    <div class="chef  rounded-lg  bg-pink-950 p-2 hover:-translate-y-2 transition duration-150">

        <img src="/home/images/Chef11.png" class="rounded-lg   " alt="">
        <div class="text-center p-4">
          <h2 class=" text-green-500 font-bold text-xl ">Indian Delights</h2>
        <p class=" text-[#d2b475] text-base md:text-lg font-semibold     rounded-full ">6 items</p>
        </div>
    </div>

     <div class="chef  rounded-lg  bg-pink-950 p-2 hover:-translate-y-2 transition duration-150">

        <img src="/home/images/Chef11.png" class="rounded-lg   " alt="">
        <div class="text-center p-4">
          <h2 class=" text-green-500 font-bold text-xl ">Indian Delights</h2>
        <p class=" text-[#d2b475] text-base md:text-lg font-semibold     rounded-full ">6 items</p>
        </div>
    </div>

    <div class="chef  rounded-lg  bg-pink-950 p-2 hover:-translate-y-2 transition duration-150">

        <img src="/home/images/Chef11.png" class="rounded-lg   " alt="">
        <div class="text-center p-4">
          <h2 class=" text-green-500 font-bold text-xl ">Indian Delights</h2>
        <p class=" text-[#d2b475] text-base md:text-lg font-semibold     rounded-full ">6 items</p>
        </div>
    </div>

     <div class="chef  rounded-lg  bg-pink-950 p-2 hover:-translate-y-2 transition duration-150">

        <img src="/home/images/Chef11.png" class="rounded-lg   " alt="">
        <div class="text-center p-4">
          <h2 class=" text-green-500 font-bold text-xl ">Indian Delights</h2>
        <p class=" text-[#d2b475] text-base md:text-lg font-semibold     rounded-full ">6 items</p>
        </div>
    </div>
 
    <div class="chef  rounded-lg  bg-pink-950 p-2 hover:-translate-y-2 transition duration-150">

        <img src="/home/images/Chef11.png" class="rounded-lg   " alt="">
        <div class="text-center p-4">
          <h2 class=" text-green-500 font-bold text-xl ">Indian Delights</h2>
        <p class=" text-[#d2b475] text-base md:text-lg font-semibold     rounded-full ">6 items</p>
        </div>
    </div>
 

  </section>


  <section class=" p-15 pt-6  ">
    <div class="text bg-[#1b1917] p-7 rounded-2xl text-white  min-h-60 flex flex-col justify-center items-center">
      <h1 class="text-xl md:text-2xl font-bold text-center">Ready to Exprerience the <span class="text-green-500">FabrioDine</span> Difference? </h1>
      <p class="mt-4 text-center md:text-lg text-[#d2b475]">Join thousands of happy customers enjoying seamless ordering and delightful deliveries. Your next meal is just a tap away!</p>
      <div class="buttons mt-4 flex flex-row justify-center items-center gap-5">
        <a href="" class="bg-white rounded-xl  p-1 pl-4 pr-4 md:p-1 md:pl-6 md:pr-6 font-medium text-medium text-pink-950 transition duration-150 "><i class="ri-restaurant-2-fill"></i></a>
      </div>
    </div>

  </section>

  @include('home.footer')
  <script src="home/js/all.js"></script>
</body>

</html>