<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <!-- Remix Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vite -->
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-300">

<!-- HEADER -->
<header class="fixed top-0 left-0 w-full z-50 bg-pink-950 flex justify-between items-center px-6 md:px-20 py-4 shadow-2xl">
  <h1 class="text-green-500 font-bold text-2xl">Dashboard</h1>
  
  <nav class="hidden md:flex space-x-8 text-white">
    <a href="" class="hover:text-green-500">Home</a>
    <a href="" class="hover:text-green-500">Dashboard</a>
    <a href="" class="hover:text-green-500">Orders</a>
    <a href="" class="hover:text-green-500">Menu</a>
    <a href="" class="hover:text-green-500">Users</a>
  </nav>
  <a href="#" class="md:text lg:text-lg text-base ml-auto mr-6 text-white"><i class="hover:text-green-500 transition duration-150 ri-menu-fill md:hidden   " id="menubtn"></i></a>
  
  <a href="" class="text-white hover:text-green-500">
    Logout <i class="ri-logout-circle-line"></i>
  </a>
  
</header>

<!-- MAIN WRAPPER -->
<div class="flex pt-16 min-h-screen">

  <!-- SIDEBAR -->
  <aside class="w-64 bg-pink-950 text-white p-6  md:flex flex-col justify-between fixed md:relative h-screen " id="sidebar">

    <!-- Admin Info -->
    <div>
      <div class="flex items-center gap-3 mb-8">
        <a href="#"><i class="hover:text-green-500 transition duration-150 ri-close-line md:hidden absolute right-7 top-2" id="close-btn"></i></a>
        <img src="{{ asset('images/admin.png') }}" class="w-14 h-14 rounded-full border-2 p-1" alt="Admin">
        <p>Welcome <span class="text-green-500 font-semibold">Admin</span></p>
      </div>

      <!-- Navigation -->
      <nav class="flex flex-col space-y-4 relative">
        <a href="" class="hover:text-green-500">Home</a>
        <a href="orders" class="hover:text-green-500">Orders</a>
        <div id="orders" class="hidden">
          <a href="">Add Product</a>
        </div>
        <a href="" class="hover:text-green-500">Menu</a>
        <a href="" class="hover:text-green-500 mb-4">Users</a>
      </nav>
    </div>

    <!-- Logout -->
    <a href="" class="hover:text-green-500 mt-16">
      Logout <i class="ri-logout-circle-line"></i>
    </a>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="flex-1 p-6 md:ml-64">

    <!-- DASHBOARD CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">

      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500">Total Users</h3>
        <p class="text-3xl font-bold md:text-xl">1,245</p>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500">Total Orders</h3>
        <p class="text-3xl font-bold md:text-xl">354</p>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500">Revenue</h3>
        <p class="text-3xl font-bold md:text-xl">$12,430</p>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500">Reviews</h3>
        <p class="text-3xl font-bold md:text-xl">87</p>
      </div>

    </div>

    <!-- ORDERS TABLE -->
    <div class="bg-white rounded-lg shadow overflow-x-auto">
      <table class="w-full text-left">
        <thead class="bg-gray-100">
          <tr>
            <th class="p-4">Order ID</th>
            <th class="p-4">Customer</th>
            <th class="p-4">Status</th>
            <th class="p-4">Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t hover:bg-gray-50">
            <td class="p-4">#001</td>
            <td class="p-4">John</td>
            <td class="p-4 text-green-600">Completed</td>
            <td class="p-4">$120</td>
          </tr>
          <tr class="border-t hover:bg-gray-50">
            <td class="p-4">#002</td>
            <td class="p-4">Jane</td>
            <td class="p-4 text-yellow-500">Pending</td>
            <td class="p-4">$90</td>
          </tr>
          <tr class="border-t hover:bg-gray-50">
            <td class="p-4">#003</td>
            <td class="p-4">Alice</td>
            <td class="p-4 text-blue-500">Processing</td>
            <td class="p-4">$75</td>
          </tr>
        </tbody>
      </table>
    </div>

  </main>
</div>

<!-- FOOTER -->
<footer class="bg-pink-950 text-white text-center py-6">
  <p>© 2025 <span class="text-green-500 font-semibold">FABRIO DINE</span>. All Rights Reserved.</p>

  <div class="flex justify-center gap-6 mt-4 text-2xl">
    <a href="#" class="hover:text-green-500"><i class="ri-facebook-fill"></i></a>
    <a href="#" class="hover:text-green-500"><i class="ri-instagram-fill"></i></a>
    <a href="#" class="hover:text-green-500"><i class="ri-twitter-x-line"></i></a>
  </div>
</footer>


<script>
  const sidebar=document.getElementById("sidebar");
  const close=document.getElementById("close-btn");
  const menu=document.getElementById("menu-btn");
  

  close.addEventListener("click",function(e){
    e.preventDefault();
    sidebar.classList.toggle("hidden");
  });

  menu.addEventListener("click",function(e){
    e.preventDefault();
    sidebar.classList.add("translate-x-64");

  });

</script>
</body>
</html>
