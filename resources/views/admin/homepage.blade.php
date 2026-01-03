<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css','resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
</head>
<body class="bg-gray-900 text-gray-100">
    <!-- Header/Navbar -->
    @include('admin.header')

    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('admin.sidebar')

        <!-- Main Content -->
        <main class="flex-1 overflow-auto">
            <!-- Page Header -->
            <div class="bg-gray-800 border-b border-gray-700 p-6">
                <h2 class="text-3xl font-bold text-white">Dashboard</h2>
            </div>

            <!-- Content -->
            @include('admin.home')
        </main>
    </div>

    <script>
        // Dropdown toggle
        function toggleDropdown(btn) {
            const icon = btn.querySelector('svg');
            const submenu = btn.nextElementSibling;
            submenu.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }

        // Chart configurations
        const chartConfig = {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    labels: { color: '#9ca3af' }
                }
            },
            scales: {
                y: { ticks: { color: '#9ca3af' }, grid: { color: '#374151' } },
                x: { ticks: { color: '#9ca3af' }, grid: { color: '#374151' } }
            }
        };

        // Bar Charts
        new Chart(document.getElementById('barChart1'), {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Sales',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: '#ec4899'
                }]
            },
            options: chartConfig
        });

        new Chart(document.getElementById('barChart2'), {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Revenue',
                    data: [8, 12, 10, 15, 7],
                    backgroundColor: '#3b82f6'
                }]
            },
            options: chartConfig
        });

        // Line Chart
        new Chart(document.getElementById('lineChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Trend',
                    data: [10, 20, 15, 25, 30],
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    tension: 0.4
                }]
            },
            options: chartConfig
        });

        // Pie Charts
        const pieChartConfig = {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: { labels: { color: '#9ca3af' } }
            }
        };

        new Chart(document.getElementById('pieChart1'), {
            type: 'doughnut',
            data: {
                labels: ['Category A', 'Category B', 'Category C'],
                datasets: [{
                    data: [30, 25, 45],
                    backgroundColor: ['#ec4899', '#f97316', '#8b5cf6']
                }]
            },
            options: pieChartConfig
        });

        new Chart(document.getElementById('pieChart2'), {
            type: 'doughnut',
            data: {
                labels: ['Category A', 'Category B', 'Category C'],
                datasets: [{
                    data: [40, 35, 25],
                    backgroundColor: ['#3b82f6', '#06b6d4', '#6366f1']
                }]
            },
            options: pieChartConfig
        });

        new Chart(document.getElementById('pieChart3'), {
            type: 'doughnut',
            data: {
                labels: ['Category A', 'Category B', 'Category C'],
                datasets: [{
                    data: [50, 30, 20],
                    backgroundColor: ['#10b981', '#14b8a6', '#84cc16']
                }]
            },
            options: pieChartConfig
        });
    </script>
</body>
</html>