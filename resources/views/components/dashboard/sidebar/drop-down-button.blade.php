

{{-- 
  Controls proparty must be passed to this component to make every button dropdown sperated from other dropdows buttons 
  same component controls prop must be passed to the dropdown related to the button 
  component name (drop-down-warapper) the controls prop can be string like the name button
  ex:

    <x-dashboard.sidebar.drop-down-button content="CRUD" :controls="2">
        your content...
    </x-dashboard.sidebar.drop-down-button>

    <x-dashboard.sidebar.drop-down-wrapper :controls="2">
         drop down list items...
    </x-dashboard.sidebar.drop-down-wrapper>
    
--}}


@props([
    'controls',
    'content' => 'Layouts'
])
<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-layouts-{{ $controls }}" data-collapse-toggle="dropdown-layouts-{{ $controls }}">
    {{ $slot }}
    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ $content }}</span>
    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</button>