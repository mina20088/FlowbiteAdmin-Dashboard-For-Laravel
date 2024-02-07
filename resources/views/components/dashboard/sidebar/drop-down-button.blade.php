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
<button type="button"
    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
    aria-controls="dropdown-layouts-{{ $controls }}" data-collapse-toggle="dropdown-layouts-{{ $controls }}">
    {{ $slot }}
    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ $content }}</span>
    <x-s-v-g-s.arrow-down sidebar-toggle-item class="w-6 h-6"/>
</button>