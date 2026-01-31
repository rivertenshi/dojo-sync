<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo-Sync | Coach Dashboard</title>
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
                <i class="fa-solid fa-jedi text-brand-dark text-xl"></i>
            </div>
            <div>
                <h1 class="text-xl font-bold text-brand-yellow leading-tight">Dojo-Sync</h1>
                <p class="text-[10px] text-gray-400">UST Women's Judo Team</p>
            </div>
        </div>

        <nav class="flex-1 px-4 space-y-2 mt-4">
            <a href="#" class="flex items-center gap-3 px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg shadow-md">
                <i class="fa-solid fa-tv w-5"></i> Dashboard
            </a>
            <a href="event_management.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-regular fa-calendar w-5"></i> Event Schedules
            </a>
            <a href="training_management.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-dumbbell w-5"></i> Training Programs
            </a>
            <a href="record_management_dash.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-flag-checkered w-5"></i> Track Records
            </a>
            <a href="audit_logs.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-file-contract w-5"></i> Audit Logs
            </a>
            <a href="settings.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-gear w-5"></i> Settings
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
                <span class="hidden md:block text-gray-400 text-sm tracking-wide">Dashboard | COACH</span>
            </div>

            <div class="flex items-center gap-4">
                <button class="w-8 h-8 flex items-center justify-center bg-brand-yellow text-brand-dark rounded hover:opacity-80 transition"><i class="fa-solid fa-magnifying-glass"></i></button>
                <button class="w-8 h-8 flex items-center justify-center bg-brand-yellow text-brand-dark rounded hover:opacity-80 transition"><i class="fa-solid fa-bell"></i></button>

                <div class="hidden md:flex items-center gap-2 ml-4">
                    <span class="text-sm font-semibold">Coach Ryu</span>
                    <i class="fa-solid fa-chevron-down text-xs"></i>
                </div>
                <div class="w-8 h-8 bg-brand-yellow rounded text-brand-dark flex items-center justify-center font-bold ml-2">
                    <i class="fa-regular fa-user"></i>
                </div>
            </div>
        </header>

        <div class="flex-1 bg-white md:rounded-tl-3xl overflow-y-auto p-4 md:p-8">
            <div class="max-w-7xl mx-auto">

                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-black">Team Overview</h2>
                    <button class="bg-brand-dark text-white px-4 py-2 rounded-lg text-sm flex items-center gap-2 hover:bg-gray-800">
                        <i class="fa-solid fa-plus"></i> Quick Action
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-gray-200 p-5 rounded-xl border border-gray-300">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 bg-brand-blue rounded-lg flex items-center justify-center text-white"><i class="fa-regular fa-calendar"></i></div>
                            <div>
                                <h3 class="font-bold text-lg">Next Event</h3>
                                <p class="text-xs text-gray-500">UAAP Season 87</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Starts in <span class="font-bold text-brand-dark">5 Days</span></p>
                        <div class="w-full bg-gray-300 h-2 rounded-full overflow-hidden">
                            <div class="bg-brand-yellow h-full w-3/4"></div>
                        </div>
                    </div>

                    <div class="bg-gray-200 p-5 rounded-xl border border-gray-300">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 bg-brand-yellow text-brand-dark rounded-lg flex items-center justify-center"><i class="fa-solid fa-dumbbell"></i></div>
                            <div>
                                <h3 class="font-bold text-lg">Active Training</h3>
                                <p class="text-xs text-gray-500">Morning Session</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600">18/20 Athletes Checked In</p>
                        <p class="text-xs text-green-600 mt-1"><i class="fa-solid fa-arrow-trend-up"></i> 90% Attendance</p>
                    </div>

                    <div class="bg-gray-200 p-5 rounded-xl border border-gray-300">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 bg-brand-dark text-white rounded-lg flex items-center justify-center"><i class="fa-solid fa-medal"></i></div>
                            <div>
                                <h3 class="font-bold text-lg">Performance</h3>
                                <p class="text-xs text-gray-500">Last Evaluation</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600">Team avg increased by 5%</p>
                        <a href="#" class="text-xs text-brand-blue hover:underline mt-1 block">View Analytics</a>
                    </div>
                </div>

                <div class="bg-gray-50 border border-gray-200 rounded-xl p-6">
                    <h3 class="font-bold text-gray-700 mb-4">Recent Activities</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between border-b border-gray-200 pb-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                                <div>
                                    <p class="text-sm font-bold">New Training Created</p>
                                    <p class="text-xs text-gray-500">Conditioning 101</p>
                                </div>
                            </div>
                            <span class="text-xs text-gray-400">2 hrs ago</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-gray-200 pb-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                                <div>
                                    <p class="text-sm font-bold">Event Updated</p>
                                    <p class="text-xs text-gray-500">Change of venue for Regionals</p>
                                </div>
                            </div>
                            <span class="text-xs text-gray-400">5 hrs ago</span>
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
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-brand-dark"><i class="fa-solid fa-jedi"></i></div>
                <h1 class="text-xl font-bold text-brand-yellow">Dojo-Sync</h1>
            </div>
            <nav class="space-y-2">
                <a href="#" class="block px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg">Dashboard</a>
                <a href="#" class="block px-4 py-3 text-gray-400">Event Schedules</a>
                <a href="#" class="block px-4 py-3 text-gray-400">Training Programs</a>
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