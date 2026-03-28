@props([
  'variant' => 'dark', // dark | light
  'size' => 'md',      // sm | md | lg
])

@php
  $sizes = [
    'sm' => 'h-8',
    'md' => 'h-12',
    'lg' => 'h-14',
  ];
  $class = $sizes[$size] ?? $sizes['md'];
@endphp

<div class="flex items-center gap-3 select-none">
    <div class="{{ $class }} aspect-[3/1] rounded-md bg-blue-600 flex items-center justify-center px-4">
        <span class="text-white font-bold tracking-widest text-sm">LITUS</span>
    </div>
    <span class="font-bold tracking-wide {{ $variant === 'light' ? 'text-white' : 'text-gray-900' }}">
        Group
    </span>
</div>

