<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dojo-Sync | Admin Dashboard</title>
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
        <i class="fa-solid fa-shield-halved text-brand-dark text-xl"></i>
      </div>
      <div>
        <h1 class="text-xl font-bold text-brand-yellow leading-tight">Dojo-Sync</h1>
        <p class="text-[10px] text-gray-400">Admin Panel</p>
      </div>
    </div>

    <nav class="flex-1 px-4 space-y-2 mt-4">
      <a href="#" class="flex items-center gap-3 px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg shadow-md">
        <i class="fa-solid fa-gauge-high w-5"></i> Dashboard
      </a>
      <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
        <i class="fa-solid fa-users-gear w-5"></i> User Management
      </a>
      <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
        <i class="fa-solid fa-database w-5"></i> System Archives
      </a>
      <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
        <i class="fa-solid fa-clipboard-check w-5"></i> Full Audit Logs
      </a>
      <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:text-brand-yellow hover:bg-gray-800 rounded-lg transition">
        <i class="fa-solid fa-sliders w-5"></i> Configuration
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
        <span class="hidden md:block text-gray-400 text-sm tracking-wide">Overview | SYSTEM ADMIN</span>
      </div>

      <div class="flex items-center gap-4">
        <button class="w-8 h-8 flex items-center justify-center bg-brand-yellow text-brand-dark rounded hover:opacity-80 transition"><i class="fa-solid fa-bell"></i></button>
        <div class="hidden md:flex items-center gap-2 ml-4">
          <span class="text-sm font-semibold text-brand-yellow">Super Admin</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </div>
        <div class="w-8 h-8 bg-gray-700 border border-brand-yellow rounded text-brand-yellow flex items-center justify-center font-bold ml-2">
          <i class="fa-solid fa-user-shield"></i>
        </div>
      </div>
    </header>

    <div class="flex-1 bg-white md:rounded-tl-3xl overflow-y-auto p-4 md:p-8">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold text-black mb-6">System Overview</h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
          <div class="bg-gray-100 p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="flex justify-between items-start">
              <div>
                <p class="text-xs font-bold text-gray-500 uppercase">Total Users</p>
                <h3 class="text-3xl font-bold text-brand-dark mt-2">124</h3>
              </div>
              <div class="p-2 bg-blue-100 text-brand-blue rounded-lg"><i class="fa-solid fa-users"></i></div>
            </div>
          </div>
          <div class="bg-gray-100 p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="flex justify-between items-start">
              <div>
                <p class="text-xs font-bold text-gray-500 uppercase">Active Sessions</p>
                <h3 class="text-3xl font-bold text-brand-dark mt-2">18</h3>
              </div>
              <div class="p-2 bg-green-100 text-green-600 rounded-lg"><i class="fa-solid fa-signal"></i></div>
            </div>
          </div>
          <div class="bg-gray-100 p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="flex justify-between items-start">
              <div>
                <p class="text-xs font-bold text-gray-500 uppercase">Pending Approvals</p>
                <h3 class="text-3xl font-bold text-brand-dark mt-2">5</h3>
              </div>
              <div class="p-2 bg-yellow-100 text-yellow-700 rounded-lg"><i class="fa-solid fa-user-clock"></i></div>
            </div>
          </div>
          <div class="bg-gray-100 p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="flex justify-between items-start">
              <div>
                <p class="text-xs font-bold text-gray-500 uppercase">System Health</p>
                <h3 class="text-3xl font-bold text-brand-dark mt-2">98%</h3>
              </div>
              <div class="p-2 bg-purple-100 text-purple-600 rounded-lg"><i class="fa-solid fa-server"></i></div>
            </div>
          </div>
        </div>

        <div class="bg-gray-50 border border-gray-200 rounded-xl p-8 flex flex-col items-center justify-center text-center h-64">
          <i class="fa-solid fa-chart-pie text-4xl text-gray-300 mb-4"></i>
          <h3 class="text-lg font-bold text-gray-600">Administrative Analytics</h3>
          <p class="text-sm text-gray-400">Detailed system reports will be displayed here.</p>
        </div>
      </div>
    </div>
  </main>

  <div id="mobileSidebar" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden" onclick="toggleSidebar()">
    <div class="w-64 h-full bg-brand-dark p-4 pt-10 relative" onclick="event.stopPropagation()">
      <button class="absolute top-4 right-4 text-white text-xl" onclick="toggleSidebar()"><i class="fa-solid fa-xmark"></i></button>
      <div class="flex items-center gap-3 mb-8 px-2">
        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-brand-dark"><i class="fa-solid fa-shield-halved"></i></div>
        <h1 class="text-xl font-bold text-brand-yellow">Dojo-Sync</h1>
      </div>
      <nav class="space-y-2">
        <a href="#" class="block px-4 py-3 bg-brand-yellow text-brand-dark font-bold rounded-lg">Dashboard</a>
        <a href="#" class="block px-4 py-3 text-gray-400">User Management</a>
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