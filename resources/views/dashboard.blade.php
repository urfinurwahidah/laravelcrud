<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <title>Dashboard</title>
</head>
<body class="bg-gray-100">
    <!-- Container utama -->
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-green-100 text-black flex flex-col">
            <!-- Logo/Brand -->
            <div class="flex items-center justify-start h-16 bg-green-300 px-4">
                <img class="w-12 h-12 mr-2" src="asset/img/lg.png" alt="logo">
                <span class="text-l font-semibold">Kementerian Agama Kota Pekalongan</span>
            </div>
            <!-- Menu Links -->
            <nav class="flex-1 px-4 py-6">
                <ul class="space-y-2">
                    <li>
                        <a href="#dashboard" class="flex items-center p-2 text-black hover:bg-green-200 rounded-lg">
                            <span class="material-icons-outlined">dashboard</span>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#surat-masuk" class="flex items-center p-2 text-black hover:bg-green-200 rounded-lg">
                            <span class="material-icons-outlined">description</span>
                            <span class="ml-3">Surat Masuk</span>
                        </a>
                    </li>
                    <li>
                        <a href="#arsip" class="flex items-center p-2 text-black hover:bg-green-200 rounded-lg">
                            <span class="material-icons-outlined">archive</span>
                            <span class="ml-3">Arsip</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Logout Button -->
            <button class="w-full px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 flex items-center justify-center">
                <span class="material-icons-outlined mr-2">logout</span>
                Logout
            </button>
        </div>
         <!-- Main Content -->
         <div class="flex-1 p-8 bg-green-50">
            <!-- Header -->
            <header class="bg-green-600 text-white py-4 mb-6 shadow-md rounded-lg">
                <div class="container mx-auto flex justify-between items-center px-6">
                    <h1 class="text-2xl font-bold">Dashboard</h1>
                </div>
            </header>

            <!-- Dashboard Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-green-500">
                    <div class="flex items-center">
                        <span class="material-icons-outlined text-green-500 text-4xl">people</span>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold">Total Pengguna</h3>
                            <p class="text-2xl font-bold">1,250</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-blue-500">
                    <div class="flex items-center">
                        <span class="material-icons-outlined text-blue-500 text-4xl">inbox</span>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold">Surat Masuk</h3>
                            <p class="text-2xl font-bold">340</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-yellow-500">
                    <div class="flex items-center">
                        <span class="material-icons-outlined text-yellow-500 text-4xl">archive</span>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold">Arsip</h3>
                            <p class="text-2xl font-bold">560</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-red-500">
                    <div class="flex items-center">
                        <span class="material-icons-outlined text-red-500 text-4xl">report</span>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold">Laporan Bulanan</h3>
                            <p class="text-2xl font-bold">12</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-4">Laporan Surat Masuk Per Bulan</h2>
                <!-- Placeholder for Bar Chart -->
                <div id="chart" class="h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                    <p class="text-gray-600">Bar Chart goes here (Use a chart library like Chart.js)</p>
                </div>
    </div>
</body>
</html>
