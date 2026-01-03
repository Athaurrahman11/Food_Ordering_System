<div class="p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- New Clients -->
                    <div class="bg-gray-800 rounded-lg p-6 border-l-4 border-pink-600">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-sm">New Clients</p>
                                <p class="text-3xl font-bold text-white mt-2">27</p>
                            </div>
                            <div class="bg-pink-600 bg-opacity-20 p-3 rounded">
                                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.856-1.487M15 10a3 3 0 11-6 0 3 3 0 016 0zM12 14a8 8 0 00-8 8v2h16v-2a8 8 0 00-8-8z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 bg-gray-700 rounded-full h-2">
                            <div class="bg-pink-600 h-2 rounded-full" style="width: 30%"></div>
                        </div>
                    </div>

                    <!-- New Projects -->
                    <div class="bg-gray-800 rounded-lg p-6 border-l-4 border-blue-600">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-sm">New Projects</p>
                                <p class="text-3xl font-bold text-white mt-2">375</p>
                            </div>
                            <div class="bg-blue-600 bg-opacity-20 p-3 rounded">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 bg-gray-700 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 70%"></div>
                        </div>
                    </div>

                    <!-- New Invoices -->
                    <div class="bg-gray-800 rounded-lg p-6 border-l-4 border-green-600">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-sm">New Invoices</p>
                                <p class="text-3xl font-bold text-white mt-2">140</p>
                            </div>
                            <div class="bg-green-600 bg-opacity-20 p-3 rounded">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 bg-gray-700 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 55%"></div>
                        </div>
                    </div>

                    <!-- All Projects -->
                    <div class="bg-gray-800 rounded-lg p-6 border-l-4 border-yellow-600">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-sm">All Projects</p>
                                <p class="text-3xl font-bold text-white mt-2">41</p>
                            </div>
                            <div class="bg-yellow-600 bg-opacity-20 p-3 rounded">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 bg-gray-700 rounded-full h-2">
                            <div class="bg-yellow-600 h-2 rounded-full" style="width: 35%"></div>
                        </div>
                    </div>
                </div>

                <!-- Charts Row -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <div class="bg-gray-800 rounded-lg p-6">
                        <h3 class="text-white font-semibold mb-4">Bar Chart 1</h3>
                        <canvas id="barChart1"></canvas>
                    </div>
                    <div class="bg-gray-800 rounded-lg p-6">
                        <h3 class="text-white font-semibold mb-4">Bar Chart 2</h3>
                        <canvas id="barChart2"></canvas>
                    </div>
                    <div class="bg-gray-800 rounded-lg p-6">
                        <h3 class="text-white font-semibold mb-4">Line Chart</h3>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>

                <!-- Pie Charts -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gray-800 rounded-lg p-6">
                        <h3 class="text-white font-semibold mb-4">Credit Sales</h3>
                        <canvas id="pieChart1"></canvas>
                        <div class="text-center mt-4">
                            <p class="text-2xl font-bold text-pink-600">$2,145</p>
                            <p class="text-gray-400 text-sm">Sales</p>
                        </div>
                    </div>
                    <div class="bg-gray-800 rounded-lg p-6">
                        <h3 class="text-white font-semibold mb-4">Channel Sales</h3>
                        <canvas id="pieChart2"></canvas>
                        <div class="text-center mt-4">
                            <p class="text-2xl font-bold text-blue-600">$7,784</p>
                            <p class="text-gray-400 text-sm">Sales</p>
                        </div>
                    </div>
                    <div class="bg-gray-800 rounded-lg p-6">
                        <h3 class="text-white font-semibold mb-4">Direct Sales</h3>
                        <canvas id="pieChart3"></canvas>
                        <div class="text-center mt-4">
                            <p class="text-2xl font-bold text-green-600">$4,957</p>
                            <p class="text-gray-400 text-sm">Sales</p>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="text-center text-gray-500 text-sm mt-12 py-6 border-t border-gray-700">
                    <p>&copy; 2024 Your Company. All rights reserved.</p>
                </footer>
            </div>