@props(['active' => false])

<a {{ $attributes }}
  class="{{ $active ? 'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }} block rounded py-2 px-3 md:p-0"
  aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
