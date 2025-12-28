 <header class="fixed bg-pink-950 flex justify-between items-center p-6 pr-20 pl-20 md:pr-28 md:pl-33 shadow-2xl w-full  z-50">
      <div id="title">
        <h1 class="text-green-500 font-bold text-2xl">FABRIO DINE</h1>
      </div>

      <!-- Navigation -->
      <nav id="menu" class="fixed top-0 left-0 h-screen md:h-0 w-62  md:w-fit bg-pink-950 text-white transform -translate-x-full md:translate-x-0 md:static md:flex md:flex-row md:justify-between md:items-center md:space-x-8 p-11 md:p-0 transition-transform duration-150 ease-linear z-5">
        <a href="#"><i class="hover:text-green-500 transition duration-150 ri-close-line md:hidden absolute right-7 top-7" id="close-btn"></i></a>
        <a href="{{ uri('/') }}" class="block mt-6 md:mt-0 hover:text-green-500 transition duration-150 relative after:content-['']  after:h-[1.5px] after:bg-green-500 after:block after:w-auto after:opacity-0 after:transition after:duration-150 after:ease-in-out hover:after:opacity-100" id="home">Home</a>
        <a href="{{{ uri('/shopping') }}}" class="block mt-6 md:mt-0 hover:text-green-500 transition duration-150 relative after:content-['']  after:h-[1.5px] after:bg-green-500 after:block after:w-auto after:opacity-0 after:transition after:duration-150 after:ease-in-out hover:after:opacity-100" >Shop</a>
        <a href="{{ uri('about') }}" class="block mt-6 md:mt-0 hover:text-green-500 transition duration-150 relative after:content-['']  after:h-[1.5px] after:bg-green-500 after:block after:w-auto after:opacity-0 after:transition after:duration-150 after:ease-in-out hover:after:opacity-100" >About</a>
        <a href="{{ uri('contact') }}" class="block mt-6 md:mt-0 hover:text-green-500 transition duration-150 relative after:content-['']  after:h-[1.5px] after:bg-green-500 after:block after:w-auto after:opacity-0 after:transition after:duration-150 after:ease-in-out hover:after:opacity-100" >Contact</a>
      </nav>

      <!-- Icons -->
      <div id="icons" class="flex space-x-6 text-white text-xl">
        <a href="#"><i class="hover:text-green-500 transition duration-150 ri-login-circle-fill"></i></a>
        <a href="#"><i class="hover:text-green-500 transition duration-150 ri-user-add-line"></i></a>
        <a href="#"><i class="hover:text-green-500 transition duration-150 ri-shopping-cart-2-line"></i></a>
        <a href="#"><i class="hover:text-green-500 transition duration-150 ri-menu-fill md:hidden " id="menubtn"></i></a>
      </div>
    </header>
    