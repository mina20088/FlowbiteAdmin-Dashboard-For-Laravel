
{{-- 
    this is a tooltip the props id must be the same as the one added to the data-tooltip-target attribute
    ex:
    <x-dashboard.sidebar.item class="items-start" content="" data-tooltip-target="settings">
       ...
        <x-dashboard.tooltip id="settings" content="settings"/>
    </x-dashboard.sidebar.item>
 --}}

@props(['id' => '' , 'content'=> ''])

<div id="{{ $id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
    {{ $content }}
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>