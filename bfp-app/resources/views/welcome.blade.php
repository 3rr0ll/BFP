<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BFP Online Certification Portal</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=inter:400,500,700" rel="stylesheet" />
        <!-- Tailwind CSS (CDN or Vite) -->
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            html, body {
                min-height: 100vh;
            }
            body {
                background: linear-gradient(135deg, #e1eaff 0%, #f6faff 100%);
                color: #153766;
            }
        </style>
    </head>
    <body class="flex flex-col items-center justify-center min-h-screen font-sans antialiased px-4 sm:px-6 lg:px-8">
        
        <!-- Header Component -->
        <x-bfp-header />

        <!-- Main Content -->
        <main class="w-full max-w-xl bg-white/90 rounded-lg shadow-xl p-6 sm:p-8 md:p-10 flex flex-col items-center">
            <!-- Logo/Brand Component -->
            <x-bfp-logo class="mb-4 sm:mb-6 h-16 w-16 sm:h-20 sm:w-20 md:h-24 md:w-24" />
            <h1 class="text-xl sm:text-2xl md:text-3xl font-semibold text-blue-900 mb-2 text-center">
                Bureau of Fire Protection
            </h1>
            <h2 class="text-base sm:text-lg md:text-xl text-blue-700 mb-4 sm:mb-6 text-center font-medium">Online Certification Portal</h2>
            <p class="mb-6 sm:mb-8 text-sm sm:text-base text-center text-blue-900/70 leading-relaxed px-2">
                Securely apply for and manage your BFP certificates online.
                <br class="hidden sm:block">
                <span class="sm:hidden"> </span>
                Fast. Convenient. Reliable.
            </p>
            <div class="flex flex-col space-y-3 w-full max-w-xs sm:max-w-sm">
                <x-bfp-button :href="route('login')" color="blue">
                    Login
                </x-bfp-button>
                <x-bfp-button :href="route('register')" color="white" border="blue">
                    Register
                </x-bfp-button>
            </div>

            <div class="mt-6 sm:mt-8 text-xs sm:text-sm text-center text-blue-800/70 px-4">
                Need help? <a href="#" class="text-blue-600 underline hover:text-blue-800">Contact Support</a>
            </div>
        </main>
        
        <!-- Footer Component -->
        <x-bfp-footer />

    </body>
</html>
