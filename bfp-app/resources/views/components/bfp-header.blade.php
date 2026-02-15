@props([])

<header class="w-full py-3 sm:py-4 px-4 sm:px-6 mb-4 sm:mb-6 md:mb-8">
    <nav class="max-w-7xl mx-auto flex items-center justify-between">
        <div class="flex items-center space-x-1 sm:space-x-2">
            <span class="text-lg sm:text-xl md:text-2xl font-bold text-blue-900">BFP</span>
            <span class="text-xs sm:text-sm md:text-base text-blue-700 hidden xs:inline">Online Portal</span>
        </div>
        <div class="flex items-center space-x-2 sm:space-x-4">
            <a href="{{ route('login') }}" class="text-xs sm:text-sm md:text-base text-blue-700 hover:text-blue-900 font-medium px-2 py-1 sm:px-0">Login</a>
            <a href="{{ route('register') }}" class="text-xs sm:text-sm md:text-base text-blue-700 hover:text-blue-900 font-medium px-2 py-1 sm:px-0">Register</a>
        </div>
    </nav>
</header>

