@props([
    'src',
    'alt',
    'width' => '400',    // default width in pixels
    'height' => '300',   // default height in pixels
    'aspect' => null,    // optional aspect ratio
    'rounded' => false,
    'class' => ''
])

@php
    // Convert dimensions to tailwind classes
    $widthClass = 'w-[' . $width . 'px]';
    $heightClass = 'h-[' . $height . 'px]';
    
    // Aspect ratio options
    $aspectRatios = [
        '1/1' => 'aspect-square',
        '16/9' => 'aspect-video',
        '4/3' => 'aspect-4/3',
        '3/2' => 'aspect-3/2'
    ];

    // Responsive classes for different screen sizes
    $responsiveClasses = 'max-w-full'; // Ensure image doesn't overflow container
@endphp

<div class="relative overflow-hidden {{ $aspect ? $aspectRatios[$aspect] : '' }} {{ $rounded ? 'rounded-lg' : '' }} {{ $class }}">
    <img 
        src="{{ $src }}" 
        alt="{{ $alt }}"
        class="{{ $widthClass }} {{ $heightClass }} {{ $responsiveClasses }} object-cover"
        style="object-position: center;"
        loading="lazy"
    >
</div> 