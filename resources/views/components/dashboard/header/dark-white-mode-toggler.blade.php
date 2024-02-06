<button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
    <x-s-v-g-s.mode id="theme-toggle-dark-icon"/>
    <x-s-v-g-s.mode id="theme-toggle-light-icon" :dark=false/>
</button>
<div id="tooltip-toggle" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
      Toggle dark mode
      <div class="tooltip-arrow" data-popper-arrow></div>
</div>
