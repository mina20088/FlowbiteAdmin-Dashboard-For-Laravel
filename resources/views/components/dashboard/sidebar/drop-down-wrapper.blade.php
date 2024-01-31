
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
])

<ul id="dropdown-layouts-{{ $controls }}" class="hidden py-2 space-y-2">
    {{ $slot }}
</ul>