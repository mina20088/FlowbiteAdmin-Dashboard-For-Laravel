<div class="absolute bottom-0 left-0 justify-center hidden w-full p-4 space-x-4 bg-white lg:flex dark:bg-gray-800"
    sidebar-bottom-menu>

    <x-dashboard.sidebar.item content="" data-tooltip-target="settings">
        <x-s-v-g-s.settings-2 class="w-6 h-6" />
        <x-dashboard.tooltip id="settings" content="settings" />
    </x-dashboard.sidebar.item>

    <x-dashboard.sidebar.item content="" path="https://flowbite-admin-dashboard.vercel.app/settings/"
        data-tooltip-target="page-settings">
        <x-s-v-g-s.settings-3 class="w-6 h-6" />
        <x-dashboard.tooltip id="page-settings" content="Page Settings" />
    </x-dashboard.sidebar.item>
    @include('components.dashboard.sidebar.partials.__sidebar-countrys-dropdown')
</div>