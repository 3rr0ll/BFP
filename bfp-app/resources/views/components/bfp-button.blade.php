@props([
    'href' => null,
    'color' => 'blue',
    'border' => null,
])

@php
    $baseClasses = 'px-4 sm:px-6 py-2.5 sm:py-3 rounded-lg font-medium text-sm sm:text-base text-center transition-all duration-200 w-full';
    
    $colorClasses = match($color) {
        'blue' => 'bg-blue-600 text-white hover:bg-blue-700 shadow-md hover:shadow-lg',
        'white' => 'bg-white text-blue-600 hover:bg-blue-50',
        default => 'bg-blue-600 text-white hover:bg-blue-700',
    };
    
    $borderClasses = $border ? match($border) {
        'blue' => 'border-2 border-blue-600',
        default => '',
    } : '';
    
    $classes = trim("$baseClasses $colorClasses $borderClasses");
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif

