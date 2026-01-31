<?php
// MOCK DATA: Simulating Training Programs data
$programs = [
    ["title" => "Morning Kata Mastery", "difficulty" => "Beginner", "schedule" => "Mon, Wed, Fri (6:00 AM)"],
    ["title" => "Advanced Kumite Drills", "difficulty" => "Advanced", "schedule" => "Tue, Thu (7:00 PM)"],
    ["title" => "Judo Throwing Tech", "difficulty" => "Intermediate", "schedule" => "Sat (9:00 AM)"],
    ["title" => "Strength & Conditioning", "difficulty" => "All Levels", "schedule" => "Daily (5:00 PM)"],
    ["title" => "Competition Prep", "difficulty" => "Elite", "schedule" => "Mon-Fri (8:00 PM)"],
];

$totalPrograms = count($programs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo-Sync | Training Programs</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#1e1e1e', // Main dark background
                            card: '#e5e7eb', // Light grey card bg
                            yellow: '#facc15', // The bright yellow accent
                            blue: '#1d4ed8', // The blue icon bg
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom scrollbar for a cleaner look */
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
            <a href="training_management.php" class="flex items-center gap-3 px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg shadow-md">
                <i class="fa-solid fa-dumbbell w-5"></i> Training Programs
            </a>
            <a href="record_management_dash.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-flag-checkered w-5"></i> Track Records
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-file-contract w-5"></i> Audit Logs
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-gear w-5"></i> Settings
            </a>
        </nav>
    </aside>

    <main class="flex-1 flex flex-col h-full relative">

        <header class="h-16 flex items-center justify-between px-6 bg-brand-dark text-white shrink-0">
            <div class="flex items-center gap-4">
                <button id="mobileMenuBtn" class="md:hidden text-brand-yellow text-xl">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="md:hidden flex items-center gap-2">
                    <h1 class="font-bold text-brand-yellow">Dojo-Sync</h1>
                </div>
                <span class="hidden md:block text-gray-400 text-sm tracking-wide">Manage Training | COACH</span>
            </div>

            <div class="flex items-center gap-4">
                <button class="w-8 h-8 flex items-center justify-center bg-brand-yellow text-brand-dark rounded hover:opacity-80 transition"><i class="fa-solid fa-magnifying-glass"></i></button>
                <button class="w-8 h-8 flex items-center justify-center bg-brand-yellow text-brand-dark rounded hover:opacity-80 transition"><i class="fa-solid fa-bell"></i></button>

                <div class="hidden md:flex items-center gap-2 ml-4">
                    <span class="text-sm font-semibold">Admin</span>
                    <i class="fa-solid fa-chevron-down text-xs"></i>
                </div>
                <div class="w-8 h-8 bg-brand-yellow rounded text-brand-dark flex items-center justify-center font-bold ml-2">
                    <i class="fa-regular fa-user"></i>
                </div>
            </div>
        </header>

        <div class="flex-1 bg-white md:rounded-tl-3xl overflow-y-auto p-4 md:p-8">

            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-black mb-4 md:mb-0">Training Programs</h2>
                    <div class="flex gap-3 text-brand-blue text-lg">
                        <a href="training_details.php" title="Create New" class="hover:opacity-70"><i class="fa-regular fa-square-plus text-xl"></i></a>
                    </div>
                </div>

                <div class="flex flex-col-reverse md:grid md:grid-cols-3 gap-8">

                    <div class="md:col-span-2 space-y-4">
                        <?php foreach ($programs as $prog): ?>
                            <div class="bg-gray-200 p-4 rounded-lg flex justify-between items-start shadow-sm hover:shadow-md transition">
                                <div class="flex-1">
                                    <div class="flex items-center gap-3">
                                        <h3 class="font-bold text-lg text-black"><?php echo $prog['title']; ?></h3>
                                        <span class="text-[10px] uppercase font-bold px-2 py-0.5 rounded bg-gray-300 text-gray-600">
                                            <?php echo $prog['difficulty']; ?>
                                        </span>
                                    </div>
                                    <p class="text-gray-600 text-sm mt-1">
                                        <i class="fa-regular fa-clock mr-1 text-xs"></i> <?php echo $prog['schedule']; ?>
                                    </p>
                                </div>
                                <div class="flex gap-3 text-brand-blue ml-4">
                                    <a href="training_details.php" class="hover:text-blue-800"><i class="fa-solid fa-pen"></i></a>
                                    <button class="hover:text-red-600"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="md:col-start-3 md:row-start-1 flex flex-col gap-6 order-first md:order-none mb-6 md:mb-0">

                        <div class="bg-gray-200 p-6 rounded-xl flex items-center justify-center gap-6 shadow-sm">
                            <div class="w-16 h-12 bg-red-600 rounded-lg flex items-center justify-center text-white text-2xl shadow-lg">
                                <i class="fa-solid fa-dumbbell"></i>
                            </div>
                            <div class="text-center">
                                <span class="block text-4xl font-bold text-black"><?php echo $totalPrograms; ?></span>
                                <span class="text-gray-600 text-sm">Active Programs</span>
                            </div>
                        </div>

                        <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm">
                            <h4 class="font-bold text-gray-700 mb-4 flex items-center gap-2">
                                <i class="fa-solid fa-filter text-brand-yellow"></i> Filter Programs
                            </h4>

                            <div class="space-y-3">
                                <div>
                                    <label class="text-xs font-bold text-gray-500 uppercase">Keywords</label>
                                    <div class="flex items-center bg-gray-100 rounded-lg px-3 py-2 mt-1">
                                        <i class="fa-solid fa-magnifying-glass text-gray-400 mr-2 text-sm"></i>
                                        <input type="text" placeholder="Search..." class="bg-transparent w-full text-sm outline-none">
                                    </div>
                                </div>

                                <div>
                                    <label class="text-xs font-bold text-gray-500 uppercase">Difficulty</label>
                                    <select class="w-full bg-gray-100 text-sm p-2 rounded-lg mt-1 outline-none">
                                        <option>All Levels</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-4 flex gap-2">
                                <button class="flex-1 bg-brand-dark text-white py-2 rounded-lg text-sm font-bold hover:bg-gray-800 transition">
                                    Apply
                                </button>
                                <button class="px-3 py-2 text-gray-500 text-sm hover:text-red-500">
                                    Clear
                                </button>
                            </div>
                        </div>

                        <a href="training_details.php" class="w-full bg-brand-yellow py-3 rounded-lg font-bold text-brand-dark shadow-md hover:bg-yellow-400 transition flex items-center justify-center gap-2">
                            <i class="fa-solid fa-plus"></i> Create Program
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="mobileSidebar" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden" onclick="toggleSidebar()">
        <div class="w-64 h-full bg-brand-dark p-4 pt-10 relative" onclick="event.stopPropagation()">
            <button class="absolute top-4 right-4 text-white text-xl" onclick="toggleSidebar()"><i class="fa-solid fa-xmark"></i></button>

            <div class="flex items-center gap-3 mb-8 px-2">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-brand-dark">
                    <i class="fa-solid fa-jedi"></i>
                </div>
                <h1 class="text-xl font-bold text-brand-yellow">Dojo-Sync</h1>
            </div>

            <nav class="space-y-2">
                <a href="#" class="block px-4 py-3 text-gray-400">Dashboard</a>
                <a href="event_management.php" class="block px-4 py-3 text-gray-400">Event Schedule</a>
                <a href="#" class="block px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg">Training Programs</a>
                <a href="#" class="block px-4 py-3 text-gray-400">Track Records</a>
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