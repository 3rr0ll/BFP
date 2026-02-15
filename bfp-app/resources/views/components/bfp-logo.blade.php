@props([])

<div {{ $attributes->merge(['class' => 'flex items-center justify-center']) }}>
    <svg viewBox="0 0 100 100" class="w-full h-full" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- BFP Shield/Logo Design -->
        <path d="M50 10 L20 25 L20 50 Q20 70 35 80 L50 90 L65 80 Q80 70 80 50 L80 25 Z" 
              fill="#153766" 
              stroke="#1e40af" 
              stroke-width="2"/>
        <path d="M50 30 L35 37 L35 50 Q35 60 42 65 L50 70 L58 65 Q65 60 65 50 L65 37 Z" 
              fill="#ffffff"/>
        <text x="50" y="55" font-family="Arial, sans-serif" font-size="20" font-weight="bold" 
              fill="#153766" text-anchor="middle">BFP</text>
    </svg>
</div>

