
@props([
    'path'=>'#',
    'image'=> '/images/users/bonnie-green.png',
    'created_at' => "",
])

<a href="{{ $path }}" class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
    <div class="flex-shrink-0">
      <img class="rounded-full w-11 h-11" src="{{ $image }}" alt="Jese image">
      {{ $svgs }}
    </div>
    <div class="w-full pl-3">
        <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
           {{ $slot }}
        </div>
        <div class="text-xs font-medium text-primary-700 dark:text-primary-400">{{ $created_at }}</div>
    </div>
  </a>