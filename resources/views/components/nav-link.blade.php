@props([
    'active' => false,
    // 'type' => 'a'
])

{{-- @if ('type' === 'a') --}}
<<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
    {{-- @else
<button {{ $attributes->class([
    'rounded-md px-4 py-2 text-sm font-medium transition',
    'bg-slate-800 text-white' => $active,
    'text-gray-300 hover:bg-slate-800 hover:text-white' => ! $active,
]) }}
    aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</button>
@endif --}}
