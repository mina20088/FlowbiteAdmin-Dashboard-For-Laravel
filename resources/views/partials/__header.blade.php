<nav class="fixed z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">

            <x-dashboard.header.sidebar-toggler-button/>

            <x-dashboard.header.logo/>
            
            <x-dashboard.header.search-form/>

        </div>
        <div class="flex items-center">
           <x-dashboard.header.star/>
            <!-- Search mobile -->
            <x-dashboard.header.mobile-search/>
            <!-- Notifications -->
            <x-dashboard.header.notification-button/>
            <!-- Dropdown menu -->
            <x-dashboard.header.notification-drop-down/>
            <!-- Apps -->
            <x-dashboard.header.apps-button/>
            <!-- Dropdown menu -->
            <x-dashboard.header.apps-drop-down/>
            
            <x-dashboard.header.dark-white-mode-toggler/>

            <!-- Profile -->
            <div class="flex items-center ml-3">
              <x-dashboard.header.user-menu-avatar/>
              <!-- Dropdown menu -->
              <x-dashboard.header.user-menu-drop-down/>
            </div>
          </div>
      </div>
    </div>
</nav>
