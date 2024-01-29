
@props(['path' => '#','content'=> "Dashboard"])


<li>
    <a href="{{ $path }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">{{ $content }}</a>
</li>