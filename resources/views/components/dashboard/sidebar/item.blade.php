
@props([
    'path'=> 'https://flowbite-admin-dashboard.vercel.app/',
    'content' => 'Dashboard',
])


<a href="{{ $path }}" {{$attributes->merge(['class' =>'flex p-2 items-center text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700'])}}>
   {{ $slot }}
    <span class="ml-3" sidebar-toggle-item>{{ $content }}</span>
</a>