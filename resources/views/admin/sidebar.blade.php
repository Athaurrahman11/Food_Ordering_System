<aside class="w-64 bg-gray-800 border-r border-gray-700 overflow-y-auto">
            <!-- User Profile -->
            <div class="p-6 border-b border-gray-700">
                <div class="flex items-center gap-3">
                    <img src="https://via.placeholder.com/50" alt="Avatar" class="w-12 h-12 rounded-full">
                    <div>
                        <h3 class="font-semibold text-white">Mark Stephen</h3>
                        <p class="text-xs text-gray-400">Web Designer</p>
                    </div>
                </div>
            </div>

            <!-- Main Menu -->
            <nav class="p-6">
                <h4 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-4">Main</h4>
                <ul class="space-y-2 mb-8">
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-gray-700 text-gray-300 hover:text-pink-600 transition">Home</a></li>
                    <li>
                        <button class="w-full text-left px-4 py-2 rounded hover:bg-gray-700 text-gray-300 hover:text-pink-600 transition" onclick="toggleDropdown(this)">
                            <div class="flex justify-between items-center">
                                <span>Category</span>
                                <svg class="w-4 h-4 transition transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </div>
                        </button>
                        <ul class="hidden pl-4 mt-2 space-y-1">
                            <li><a href="{{ uri('addcategory') }}" class="block px-4 py-2 text-sm rounded hover:bg-gray-700 text-gray-400 hover:text-pink-600 transition">Add Category</a></li>
                            <li><a href="{{ uri('view_category') }}" class="block px-4 py-2 text-sm rounded hover:bg-gray-700 text-gray-400 hover:text-pink-600 transition">View Category</a></li>
                        </ul>
                    </li>
                    <li>
                        <button class="w-full text-left px-4 py-2 rounded hover:bg-gray-700 text-gray-300 hover:text-pink-600 transition" onclick="toggleDropdown(this)">
                            <div class="flex justify-between items-center">
                                <span>Food</span>
                                <svg class="w-4 h-4 transition transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </div>
                        </button>
                        <ul class="hidden pl-4 mt-2 space-y-1">
                            <li><a href="{{ uri('add_food') }}" class="block px-4 py-2 text-sm rounded hover:bg-gray-700 text-gray-400 hover:text-pink-600 transition">Add Food</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm rounded hover:bg-gray-700 text-gray-400 hover:text-pink-600 transition">View Food</a></li>
                        </ul>
                    </li>
                    <li>
                        <button class="w-full text-left px-4 py-2 rounded hover:bg-gray-700 text-gray-300 hover:text-pink-600 transition" onclick="toggleDropdown(this)">
                            <div class="flex justify-between items-center">
                                <span>Orders</span>
                                <svg class="w-4 h-4 transition transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </div>
                        </button>
                        <ul class="hidden pl-4 mt-2 space-y-1">
                            <li><a href="#" class="block px-4 py-2 text-sm rounded hover:bg-gray-700 text-gray-400 hover:text-pink-600 transition">View Orders</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm rounded hover:bg-gray-700 text-gray-400 hover:text-pink-600 transition">View Food</a></li>
                        </ul>
                    </li>
                </ul>

                <h4 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-4">Extras</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-gray-700 text-gray-300 hover:text-pink-600 transition">Logout</a></li>
                </ul>
            </nav>
        </aside>