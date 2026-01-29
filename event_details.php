<?php
// MOCK DATA: Placeholder data as requested
$event = [
    "title" => "Title of Event", // Generic placeholder
    "date" => "", // Empty for placeholder look
    "start_time" => "",
    "end_time" => "",
    "location" => "",
    "description" => "",
    "participants" => "",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo-Sync | Event Details</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#1e1e1e',
                            yellow: '#facc15', 
                            blue: '#1d4ed8',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-brand-dark text-gray-800 font-sans h-screen flex overflow-hidden">

    <aside class="hidden md:flex flex-col w-64 h-full bg-brand-dark text-white border-r border-gray-700 shrink-0">
        <div class="p-6 flex items-center gap-3">
            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center overflow-hidden text-brand-dark">
                <i class="fa-solid fa-jedi text-xl"></i>
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

    <main class="flex-1 flex flex-col h-full relative bg-brand-dark">
        
        <header class="h-16 flex items-center justify-between px-6 bg-brand-dark text-white shrink-0 md:hidden">
            <div class="flex items-center gap-4">
                <button id="mobileMenuBtn" class="text-brand-yellow text-xl"><i class="fa-solid fa-bars"></i></button>
                <div class="flex items-center gap-2">
                     <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center text-brand-dark text-xs"><i class="fa-solid fa-jedi"></i></div>
                     <h1 class="font-bold text-brand-yellow">Dojo-Sync</h1>
                </div>
            </div>
            <div class="w-8 h-8 bg-brand-yellow rounded text-brand-dark flex items-center justify-center font-bold">
                <i class="fa-regular fa-user"></i>
            </div>
        </header>

        <div class="hidden md:flex justify-between items-center px-8 py-4 text-gray-400 text-sm bg-brand-dark shrink-0">
            <span>Event details | COACH</span>
            <div class="flex items-center gap-4">
                 <button class="w-8 h-8 flex items-center justify-center bg-brand-yellow text-brand-dark rounded"><i class="fa-solid fa-magnifying-glass"></i></button>
                 <button class="w-8 h-8 flex items-center justify-center bg-brand-yellow text-brand-dark rounded"><i class="fa-solid fa-bell"></i></button>
                 <div class="flex items-center gap-2">
                    <span>Admin</span> <i class="fa-solid fa-chevron-down text-xs"></i>
                    <div class="w-8 h-8 bg-brand-yellow rounded text-brand-dark flex items-center justify-center font-bold ml-2">
                        <i class="fa-regular fa-user"></i>
                    </div>
                 </div>
            </div>
        </div>

        <div class="flex-1 bg-white md:rounded-tl-3xl overflow-y-auto p-4 md:p-8">
            <form action="save_event.php" method="POST" class="max-w-6xl mx-auto pb-10">
                
                <div class="flex justify-between items-start mb-6">
                    <h2 class="text-3xl font-extrabold text-black">Title of Event</h2>
                    
                    <div class="flex gap-3 text-brand-blue text-xl shrink-0 ml-4">
                        <button type="button" class="hover:text-blue-800"><i class="fa-solid fa-pen"></i></button>
                        <button type="button" class="hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6">

                    <div class="md:col-start-1 md:row-span-3">
                        <label class="block text-xs font-bold text-gray-500 mb-2 uppercase">Photo</label>
                        <div class="bg-gray-300 w-full h-64 md:h-full min-h-[250px] rounded-lg flex items-center justify-center text-gray-500 relative group cursor-pointer hover:bg-gray-400 transition">
                            <span class="text-sm">Change Photo</span>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                                <i class="fa-regular fa-image text-4xl text-white"></i>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-start-2">
                        <label class="block text-xs font-bold text-gray-500 mb-2 uppercase">Date</label>
                        <div class="relative">
                             <input type="date" name="date" class="w-full bg-gray-200 rounded p-3 outline-none focus:ring-2 focus:ring-brand-yellow text-gray-700">
                        </div>
                    </div>

                    <div class="md:col-start-2">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 mb-2 uppercase">Start Time</label>
                                <input type="time" name="start_time" class="w-full bg-gray-200 rounded p-3 outline-none focus:ring-2 focus:ring-brand-yellow text-gray-700">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 mb-2 uppercase">End Time</label>
                                <input type="time" name="end_time" class="w-full bg-gray-200 rounded p-3 outline-none focus:ring-2 focus:ring-brand-yellow text-gray-700">
                            </div>
                        </div>
                    </div>

                    <div class="md:col-start-2">
                        <label class="block text-xs font-bold text-gray-500 mb-2 uppercase">Location</label>
                        <div class="w-full h-48 bg-gray-100 rounded-lg overflow-hidden relative border border-gray-300">
                             <img src="https://mt1.google.com/vt/lyrs=m&x=1325&y=3143&z=13" class="w-full h-full object-cover opacity-60" alt="Map">
                             <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                                 <i class="fa-solid fa-location-dot text-red-500 text-3xl drop-shadow-md"></i>
                             </div>
                        </div>
                    </div>

                    <div class="md:col-start-1">
                        <label class="block text-xs font-bold text-gray-500 mb-2 uppercase">Description</label>
                        <textarea name="description" rows="4" class="w-full bg-gray-200 rounded-lg p-3 outline-none focus:ring-2 focus:ring-brand-yellow resize-none"></textarea>
                    </div>

                    <div class="md:col-start-1">
                        <label class="block text-xs font-bold text-gray-500 mb-2 uppercase">Participants</label>
                        <textarea name="participants" rows="4" class="w-full bg-gray-200 rounded-lg p-3 outline-none focus:ring-2 focus:ring-brand-yellow resize-none"></textarea>
                    </div>

                    <div class="md:col-start-2 flex items-end justify-end gap-4 mt-4">
                        <button type="button" class="flex-1 md:flex-none px-8 py-3 bg-gray-300 text-gray-700 font-bold rounded-lg hover:bg-gray-400 transition">Cancel</button>
                        <button type="submit" class="flex-1 md:flex-none px-8 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg shadow-md hover:bg-yellow-400 transition">Save</button>
                    </div>

                </div>
            </form>
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
                <a href="index.php" class="block px-4 py-3 text-gray-400">Back to List</a>
                <a href="#" class="block px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg">Event Details</a>
            </nav>
        </div>
    </div>

    <script>
        const menuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('mobileSidebar');
        function toggleSidebar() { sidebar.classList.toggle('hidden'); }
        menuBtn.addEventListener('click', toggleSidebar);
    </script>
</body>
</html>