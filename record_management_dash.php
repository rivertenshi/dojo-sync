<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo-Sync | Track Records</title>
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
            <a href="dashboard_coach.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-tv w-5"></i> Dashboard
            </a>
            <a href="event_management.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-regular fa-calendar w-5"></i> Event Schedules
            </a>
            <a href="training_management.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-dumbbell w-5"></i> Training Programs
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg shadow-md">
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
                <span class="hidden md:block text-gray-400 text-sm tracking-wide">Track Records | COACH</span>
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
                    <h2 class="text-2xl font-bold text-black tracking-tight">Manage Tracking Dashboard</h2>
                    <button class="text-brand-blue hover:text-blue-700 transition text-lg p-2" title="Download Report">
                        <i class="fa-solid fa-download"></i>
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                    <div class="bg-gray-200 rounded-xl p-6 h-44 flex flex-col justify-between hover:shadow-md transition duration-300 relative group">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Athlete Profiles</h3>
                            <p class="text-gray-600 mt-1 text-xs">Manage roster, bio-data, and weight classes.</p>
                        </div>
                        <div class="flex justify-end z-10">
                            <a href="#" class="bg-brand-yellow text-brand-dark text-sm font-bold py-1.5 px-6 rounded-lg shadow-sm hover:bg-yellow-400 transition">
                                Manage
                            </a>
                        </div>
                        <div class="absolute top-4 right-4 text-gray-400 text-5xl opacity-10 group-hover:opacity-20 transition">
                            <i class="fa-solid fa-users"></i>
                        </div>
                    </div>

                    <div class="bg-gray-200 rounded-xl p-6 h-44 flex flex-col justify-between hover:shadow-md transition duration-300 relative group">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Performance Data</h3>
                            <p class="text-gray-600 mt-1 text-xs">View training statistics and match outcomes.</p>
                        </div>
                        <div class="flex justify-end z-10">
                            <a href="#" class="bg-brand-yellow text-brand-dark text-sm font-bold py-1.5 px-6 rounded-lg shadow-sm hover:bg-yellow-400 transition">
                                Manage
                            </a>
                        </div>
                        <div class="absolute top-4 right-4 text-gray-400 text-5xl opacity-10 group-hover:opacity-20 transition">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                    </div>

                    <div class="bg-gray-200 rounded-xl p-6 h-44 flex flex-col justify-between hover:shadow-md transition duration-300 relative group">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Medical Records</h3>
                            <p class="text-gray-600 mt-1 text-xs">Track injuries, recovery status, and physicals.</p>
                        </div>
                        <div class="flex justify-end z-10">
                            <a href="#" class="bg-brand-yellow text-brand-dark text-sm font-bold py-1.5 px-6 rounded-lg shadow-sm hover:bg-yellow-400 transition">
                                Manage
                            </a>
                        </div>
                        <div class="absolute top-4 right-4 text-gray-400 text-5xl opacity-10 group-hover:opacity-20 transition">
                            <i class="fa-solid fa-notes-medical"></i>
                        </div>
                    </div>

                    <div class="bg-gray-200 rounded-xl p-6 h-44 flex flex-col justify-between hover:shadow-md transition duration-300 relative group">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Archives</h3>
                            <p class="text-gray-600 mt-1 text-xs">Access past seasons and alumni records.</p>
                        </div>
                        <div class="flex justify-end z-10">
                            <a href="#" class="bg-brand-yellow text-brand-dark text-sm font-bold py-1.5 px-6 rounded-lg shadow-sm hover:bg-yellow-400 transition">
                                Manage
                            </a>
                        </div>
                        <div class="absolute top-4 right-4 text-gray-400 text-5xl opacity-10 group-hover:opacity-20 transition">
                            <i class="fa-solid fa-box-archive"></i>
                        </div>
                    </div>

                    <div class="md:col-span-2 lg:col-span-2 bg-gray-200 rounded-xl p-6 h-44 flex flex-col justify-between hover:shadow-md transition duration-300 relative group">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Attendance</h3>
                            <p class="text-gray-600 mt-1 text-xs">Monitor daily training logs and event participation.</p>
                        </div>
                        <div class="flex justify-end z-10">
                            <a href="#" class="bg-brand-yellow text-brand-dark text-sm font-bold py-1.5 px-6 rounded-lg shadow-sm hover:bg-yellow-400 transition">
                                Manage
                            </a>
                        </div>
                        <div class="absolute top-4 right-4 text-gray-400 text-5xl opacity-10 group-hover:opacity-20 transition">
                            <i class="fa-solid fa-clipboard-user"></i>
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
                <a href="dashboard_coach.php" class="block px-4 py-3 text-gray-400">Dashboard</a>
                <a href="event_management.php" class="block px-4 py-3 text-gray-400">Event Schedules</a>
                <a href="training_management.php" class="block px-4 py-3 text-gray-400">Training Programs</a>
                <a href="#" class="block px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg">Track Records</a>
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