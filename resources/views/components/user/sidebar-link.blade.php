@props(['active'])

<li>
    <a {{ $attributes }}
        class="flex items-center justify-between px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-500 {{ $active ? 'bg-gray-300 dark:bg-gray-500' : 'bg-gray-100 dark:bg-gray-700' }}"
        aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
</li>
