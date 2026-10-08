@props(['active' => false])

<a {{ $attributes->class([
    'rounded-md px-4 py-2 text-sm font-medium transition',
    'bg-slate-800 text-white' => $active,
    'text-gray-300 hover:bg-slate-800 hover:text-white' => ! $active,
]) }}
    aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>
