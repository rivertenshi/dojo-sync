<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo-Sync | Athlete Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#1e1e1e',
                            card: '#e5e7eb',
                            yellow: '#facc15',
                            blue: '#1d4ed8',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: #555;
            border-radius: 4px;
        }
    </style>
</head>

<body class="bg-brand-dark text-gray-800 font-sans h-screen flex overflow-hidden">

    <aside class="hidden md:flex flex-col w-64 h-full bg-brand-dark text-white border-r border-gray-700">
        <div class="p-6 flex items-center gap-3">
            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center overflow-hidden">
                <i class="fa-solid fa-medal text-brand-dark text-xl"></i>
            </div>
            <div>
                <h1 class="text-xl font-bold text-brand-yellow leading-tight">Dojo-Sync</h1>
                <p class="text-[10px] text-gray-400">Athlete Portal</p>
            </div>
        </div>

        <nav class="flex-1 px-4 space-y-2 mt-4">
            <a href="#" class="flex items-center gap-3 px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg shadow-md">
                <i class="fa-solid fa-house w-5"></i> My Hub
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-regular fa-calendar-check w-5"></i> Event Schedules
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-dumbbell w-5"></i> Training Programs
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-chart-line w-5"></i> My Records
            </a>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col h-full relative">

        <header class="h-16 flex items-center justify-between px-6 bg-brand-dark text-white shrink-0">
            <div class="flex items-center gap-4">
                <button id="mobileMenuBtn" class="md:hidden text-brand-yellow text-xl"><i class="fa-solid fa-bars"></i></button>
                <div class="md:hidden flex items-center gap-2">
                    <h1 class="font-bold text-brand-yellow">Dojo-Sync</h1>
                </div>
                <span class="hidden md:block text-gray-400 text-sm tracking-wide">My Hub | ATHLETE</span>
            </div>

            <div class="flex items-center gap-4">
                <button class="w-8 h-8 flex items-center justify-center bg-brand-yellow text-brand-dark rounded hover:opacity-80 transition"><i class="fa-solid fa-bell"></i></button>
                <div class="hidden md:flex items-center gap-2 ml-4">
                    <span class="text-sm font-semibold">Athlete Name</span>
                    <i class="fa-solid fa-chevron-down text-xs"></i>
                </div>
                <div class="w-8 h-8 bg-brand-yellow rounded-full flex items-center justify-center border-2 border-white overflow-hidden ml-2">
                    <img src="https://via.placeholder.com/32" alt="Avatar" class="w-full h-full object-cover">
                </div>
            </div>
        </header>

        <div class="flex-1 bg-white md:rounded-tl-3xl overflow-y-auto p-4 md:p-8">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-2xl font-bold text-black mb-6">Welcome Back, Athlete!</h2>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    <div class="lg:col-span-2 space-y-6">

                        <div class="bg-brand-dark text-white p-6 rounded-xl shadow-lg relative overflow-hidden">
                            <div class="absolute right-0 top-0 w-32 h-32 bg-brand-yellow opacity-10 rounded-full translate-x-10 -translate-y-10"></div>
                            <h3 class="text-gray-400 text-sm uppercase font-bold mb-2">Up Next</h3>
                            <h2 class="text-2xl font-bold text-brand-yellow mb-1">Advanced Sparring</h2>
                            <p class="text-sm text-gray-300 mb-4"><i class="fa-regular fa-clock"></i> Today, 4:00 PM - 6:00 PM</p>
                            <button class="bg-brand-yellow text-brand-dark px-4 py-2 rounded-lg font-bold text-sm hover:bg-yellow-400">View Details</button>
                        </div>

                        <div class="bg-gray-50 border border-gray-200 rounded-xl p-6">
                            <h3 class="font-bold text-gray-700 mb-4">Your Week</h3>
                            <div class="grid grid-cols-5 gap-2 text-center">
                                <div class="bg-gray-200 p-2 rounded">
                                    <span class="block text-xs text-gray-500">Mon</span>
                                    <span class="font-bold text-gray-800">12</span>
                                    <div class="mt-2 w-2 h-2 bg-brand-blue rounded-full mx-auto"></div>
                                </div>
                                <div class="bg-brand-yellow text-brand-dark p-2 rounded shadow-sm">
                                    <span class="block text-xs opacity-70">Tue</span>
                                    <span class="font-bold">13</span>
                                    <div class="mt-2 w-2 h-2 bg-brand-dark rounded-full mx-auto"></div>
                                </div>
                                <div class="bg-gray-200 p-2 rounded">
                                    <span class="block text-xs text-gray-500">Wed</span>
                                    <span class="font-bold text-gray-800">14</span>
                                    <div class="mt-2 w-2 h-2 bg-brand-blue rounded-full mx-auto"></div>
                                </div>
                                <div class="bg-gray-200 p-2 rounded">
                                    <span class="block text-xs text-gray-500">Thu</span>
                                    <span class="font-bold text-gray-800">15</span>
                                </div>
                                <div class="bg-gray-200 p-2 rounded">
                                    <span class="block text-xs text-gray-500">Fri</span>
                                    <span class="font-bold text-gray-800">16</span>
                                    <div class="mt-2 w-2 h-2 bg-red-500 rounded-full mx-auto"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="space-y-6">
                        <div class="bg-gray-100 p-6 rounded-xl border border-gray-200">
                            <h3 class="font-bold text-gray-700 mb-4">Personal Bests</h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="text-gray-500">Attendance</span>
                                        <span class="font-bold text-green-600">95%</span>
                                    </div>
                                    <div class="w-full bg-gray-300 h-2 rounded-full">
                                        <div class="bg-green-600 h-full w-[95%] rounded-full"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="text-gray-500">Win Rate</span>
                                        <span class="font-bold text-brand-blue">60%</span>
                                    </div>
                                    <div class="w-full bg-gray-300 h-2 rounded-full">
                                        <div class="bg-brand-blue h-full w-[60%] rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-blue-50 p-6 rounded-xl border border-blue-100">
                            <h3 class="font-bold text-blue-800 mb-2">Announcements</h3>
                            <p class="text-xs text-blue-600 mb-2">Remember to submit your physical exam results by Friday.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <div id="mobileSidebar" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden" onclick="toggleSidebar()">
        <div class="w-64 h-full bg-brand-dark p-4 pt-10 relative" onclick="event.stopPropagation()">
            <button class="absolute top-4 right-4 text-white text-xl" onclick="toggleSidebar()"><i class="fa-solid fa-xmark"></i></button>
            <div class="flex items-center gap-3 mb-8 px-2">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-brand-dark"><i class="fa-solid fa-medal"></i></div>
                <h1 class="text-xl font-bold text-brand-yellow">Dojo-Sync</h1>
            </div>
            <nav class="space-y-2">
                <a href="#" class="block px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg">My Hub</a>
                <a href="#" class="block px-4 py-3 text-gray-400">Event Schedules</a>
                <a href="#" class="block px-4 py-3 text-gray-400">Training Programs</a>
                <a href="#" class="block px-4 py-3 text-gray-400">My Records</a>
            </nav>
        </div>
    </div>
    <script>
        const menuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('mobileSidebar');

        function toggleSidebar() {
            sidebar.classList.toggle('hidden');
        }
        menuBtn.addEventListener('click', toggleSidebar);
    </script>
</body>

</html>