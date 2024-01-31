
@props([
    'path'=> 'https://flowbite-admin-dashboard.vercel.app/',
    'content' => 'Dashboard',
    'isSingleItem' =>true
])


<a href="{{ $path }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
    @if($isSingleItem)
      <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
    @endif
    <span class="ml-3" sidebar-toggle-item>{{ $content }}</span>
</a>