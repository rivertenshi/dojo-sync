<?php
// MOCK DATA: Simulating data you might get from a database
$events = [
    ["title" => "Title", "desc" => "Short description about ..", "date" => "Nov 28, 2025"],
    ["title" => "Title", "desc" => "Short description about ..", "date" => "Nov 28, 2025"],
    ["title" => "Title", "desc" => "Short description about ..", "date" => "Nov 28, 2025"],
    ["title" => "Title", "desc" => "Short description about ..", "date" => "Nov 28, 2025"],
    ["title" => "Title", "desc" => "Short description about ..", "date" => "Nov 28, 2025"],
];

// Calculate total events dynamically
$totalEvents = count($events) + 7; // Adding 7 just to match the "12" in your mockup
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo-Sync | Event Schedule</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#1e1e1e',    // Main dark background
                            card: '#e5e7eb',    // Light grey card bg
                            yellow: '#facc15',  // The bright yellow accent
                            blue: '#1d4ed8',    // The blue icon bg
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Custom scrollbar for a cleaner look */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-thumb { background: #555; border-radius: 4px; }
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
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-tv w-5"></i> Dashboard
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg shadow-md">
                <i class="fa-regular fa-calendar w-5"></i> Event Schedules
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-dumbbell w-5"></i> Training Programs
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
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
                <span class="hidden md:block text-gray-400 text-sm tracking-wide">Manage Events | COACH</span>
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
                    <h2 class="text-2xl font-bold text-black mb-4 md:mb-0">Event Schedule</h2>
                    <div class="flex gap-3 text-brand-blue text-lg">
                        <i class="fa-solid fa-download cursor-pointer hover:opacity-70"></i>
                        <i class="fa-solid fa-magnifying-glass cursor-pointer hover:opacity-70"></i>
                        <i class="fa-solid fa-filter cursor-pointer hover:opacity-70"></i>
                        <i class="fa-regular fa-square-plus cursor-pointer hover:opacity-70"></i>
                    </div>
                </div>

                <div class="flex flex-col-reverse md:grid md:grid-cols-3 gap-8">
                    
                    <div class="md:col-span-2 space-y-4">
                        <?php foreach($events as $event): ?>
                        <div class="bg-gray-200 p-4 rounded-lg flex justify-between items-start shadow-sm hover:shadow-md transition">
                            <div>
                                <h3 class="font-bold text-lg text-black"><?php echo $event['title']; ?></h3>
                                <p class="text-gray-600 text-sm mt-1"><?php echo $event['desc']; ?></p>
                                <p class="text-gray-500 text-xs mt-2">Date: <?php echo $event['date']; ?></p>
                            </div>
                            <div class="flex gap-3 text-brand-blue">
                                <button class="hover:text-blue-800"><i class="fa-solid fa-pen"></i></button>
                                <button class="hover:text-red-600"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="md:col-start-3 md:row-start-1 flex flex-col gap-6 order-first md:order-none mb-6 md:mb-0">
                        
                        <div class="bg-gray-200 p-6 rounded-xl flex items-center justify-center gap-6 shadow-sm">
                            <div class="w-16 h-12 bg-blue-700 rounded-lg flex items-center justify-center text-white text-2xl shadow-lg">
                                <i class="fa-regular fa-calendar-check"></i>
                            </div>
                            <div class="text-center">
                                <span class="block text-4xl font-bold text-black"><?php echo $totalEvents; ?></span>
                                <span class="text-gray-600 text-sm">Total Events</span>
                            </div>
                        </div>

                        <div class="hidden md:block bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex justify-between items-center mb-4">
                                <h4 class="font-bold">October 2020</h4> <div class="text-xs text-gray-500 space-x-2">
                                    <i class="fa-solid fa-chevron-left cursor-pointer"></i>
                                    <i class="fa-solid fa-chevron-right cursor-pointer"></i>
                                </div>
                            </div>
                            <div class="grid grid-cols-7 text-center text-xs text-gray-500 gap-y-3">
                                <span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span><span>Su</span>
                                <span></span><span></span><span></span><span>1</span><span>2</span><span>3</span><span>4</span>
                                <span>5</span><span>6</span><span>7</span><span class="bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center mx-auto">8</span><span>9</span><span>10</span><span>11</span>
                                <span>12</span><span>13</span><span>14</span><span>15</span><span>16</span><span>17</span><span>18</span>
                                <span>19</span><span>20</span><span>21</span><span>22</span><span>23</span><span>24</span><span>25</span>
                                <span>26</span><span>27</span><span>28</span><span>29</span><span>30</span><span>31</span>
                            </div>
                            <div class="flex items-center gap-2 mt-4 text-xs font-bold">
                                <span class="w-2 h-2 rounded-full bg-red-500"></span> Event
                            </div>
                        </div>

                        <button class="w-full bg-brand-yellow py-3 rounded-lg font-bold text-brand-dark shadow-md hover:bg-yellow-400 transition flex items-center justify-center gap-2">
                            <i class="fa-regular fa-file-lines"></i> Generate Report
                        </button>

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
                <a href="#" class="block px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg">Event Schedule</a>
                <a href="#" class="block px-4 py-3 text-gray-400">Training Programs</a>
                <a href="#" class="block px-4 py-3 text-gray-400">Track Records</a>
                <a href="#" class="block px-4 py-3 text-gray-400">Audit Logs</a>
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