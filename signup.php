<?php
// Signup
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo-Sync | Sign Up</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            black: '#121212',   // The very dark background
                            dark: '#1e1e1e',    // The card background
                            yellow: '#fbbf24',  // The bright yellow accent
                            input: '#ffffff',   // White input fields
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'], 
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-brand-black max-sm:bg-brand-dark text-white font-sans h-screen flex items-center justify-center overflow-hidden">

    <div class="bg-brand-dark w-full max-w-lg rounded-3xl p-8 md:p-12 shadow-2xl md:border border-gray-800 relative">
        
        <div class="flex items-center gap-3 mb-12">
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center overflow-hidden border-2 border-brand-yellow">
                <i class="fa-solid fa-jedi text-brand-dark text-2xl"></i>
            </div>
            <div>
                <h1 class="text-2xl font-black text-brand-yellow tracking-wide leading-none" style="font-family: 'Arial Black', sans-serif;">Dojo-Sync</h1>
                <p class="text-xs text-gray-300 font-medium tracking-wide">UST Women's Judo Team</p>
            </div>
        </div>
        

        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-brand-yellow tracking-wide">Sign up</h2>
        </div>

        <form action="#" method="POST" class="space-y-6">

            <div>
                <label for="email" class="block text-gray-300 text-sm mb-2 pl-2">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full bg-white text-gray-900 rounded-full py-3 px-6 focus:outline-none focus:ring-4 focus:ring-yellow-500/50 transition-all shadow-inner"
                    autocomplete="off">
            </div>
            
            <div>
                <label for="username" class="block text-gray-300 text-sm mb-2 pl-2">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full bg-white text-gray-900 rounded-full py-3 px-6 focus:outline-none focus:ring-4 focus:ring-yellow-500/50 transition-all shadow-inner"
                    autocomplete="off">
            </div>

            <div>
                <label for="password" class="block text-gray-300 text-sm mb-2 pl-2">Password</label>
                <input type="password" id="password" name="password" required oninput="validatePassword()"
                    class="w-full bg-white text-gray-900 rounded-full py-3 px-6 focus:outline-none focus:ring-4 focus:ring-yellow-500/50 transition-all shadow-inner">
            </div>

            <div>
                <label for="password2" class="block text-gray-300 text-sm mb-2 pl-2">Confirm password</label>
                <input type="password" id="confirm_password" name="confirm_password" required oninput="validatePassword()"
                    class="w-full bg-white text-gray-900 rounded-full py-3 px-6 focus:outline-none focus:ring-4 focus:ring-yellow-500/50 transition-all shadow-inner">
            </div>


            <div class="pt-4">
                <button type="submit" 
                    class="w-full bg-brand-yellow text-gray-900 font-bold rounded-full py-3 hover:bg-yellow-400 hover:shadow-lg hover:scale-[1.02] transition-all duration-200 text-lg">
                   Sign up
                </button>
            </div>

        </form>
    </div>

    <script>
        function validatePassword() {
            var password = document.getElementById("password");
            var confirm_password = document.getElementById("confirm_password");

            if(password.value != confirm_password.value) {
                // Error alert for password
                confirm_password.setCustomValidity("Passwords do not match.");
            } else {
                // Clear error
                confirm_password.setCustomValidity('');
            }
        }
    </script>
</body>
</html>