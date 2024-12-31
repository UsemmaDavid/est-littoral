@props(['active' => false])

<a class="{{ $active ? 'bg-blue-700 text-white': 'text-blue-600 hover:bg-blue-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>