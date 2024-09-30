@props(['active' => false, 'icon' => ''])

<a {{ $attributes }} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300' }}">
    <i data-acorn-icon="{{ $icon }}" class="icon" data-acorn-size="18"></i>
    <span class="label">{{ $slot }}</span>
</a>
