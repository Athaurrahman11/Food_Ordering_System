<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cart Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite('resources/css/app.css')
</head>

<body class="bg-black">
  @include('home.header')
  <div class="max-w-7xl mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-28">

      <div class="lg:col-span-2 space-y-6">

        <div class="bg-white rounded-2xl p-4 flex items-center gap-4 shadow-sm relative">
          <img src="home/images/Home.png" class="w-20 h-20 rounded-xl object-cover" />

          <div class="flex-1 ">
            <a href="" class="absolute  right-2 top-0 p-2 hover:text-green-500 transition duration-100"><i class="ri-delete-bin-line"></i></a>
            <h2 class="font-semibold text-lg">Truffle Mushroom Risotto</h2>
            <p class="text-sm text-gray-500">
              Creamy arborio rice with wild mushrooms and truffle oil
            </p>
            <p class="text-green-500 font-semibold mt-2">$37.98</p>
          </div>

          <div class="flex items-center bg-gray-100 rounded-full px-3 py-1">
            <button class="px-2 text-lg   hover:text-white hover:bg-green-500 rounded-4xl hover:rounded-4xl transition duration-150 cursor-pointer">−</button>
            <span class="px-3 font-medium ">2</span>
            <button class="px-2 text-lg hover:text-white hover:bg-green-500 rounded-4xl hover:rounded-4xl  transition duration-150 cursor-pointer">+</button>
          </div>
        </div>

        


      </div>

      <div class="bg-white rounded-2xl p-6 shadow-sm h-fit">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 flex items-center justify-center rounded-full bg-orange-100 text-orange-500">
            🛍️
          </div>
          <div>
            <h2 class="font-semibold text-lg">Order Summary</h2>
            <p class="text-sm text-gray-500">6 items in cart</p>
          </div>
        </div>

        <div class="space-y-4 text-sm">
          <div class="flex justify-between">
            <span>Subtotal</span>
            <span>$89.94</span>
          </div>
          <div class="flex justify-between">
            <span>Delivery</span>
            <span class="text-green-500 font-medium">Free</span>
          </div>
        </div>

        <div class="flex mt-6 gap-2">
          <input
            type="text"
            placeholder="Promo code"
            class="flex-1 rounded-full px-4 py-2 bg-gray-100 outline-none"
          />
          <button class="px-4 py-2 rounded-full border font-medium">
            Apply
          </button>
        </div>

        <hr class="my-6" />

        <div class="flex justify-between items-center mb-6">
          <span class="font-semibold">Total</span>
          <span class="text-pink-950 font-bold text-xl">$89.94</span>
        </div>

        <button class="w-full hover:bg-green-500 text-white py-3 rounded-full font-semibold  transition">
          Proceed to Checkout
        </button>

        <p class="text-center text-xs text-gray-500 mt-4">
          Free delivery on orders over $50
        </p>
      </div>

    </div>
  </div>

  @include('home.footer')
</body>
</html>
