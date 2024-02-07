<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">
                    {{-- search --}}
                    <li>
                        <x-dashboard.sidebar.mobile-search-form />
                    </li>

                    {{-- dashboard --}}
                    <li>
                        <x-dashboard.sidebar.item class="items-start">
                            <x-s-v-g-s.dashboard class="w-6 h-6" />
                        </x-dashboard.sidebar.item>
                    </li>

                    {{-- layout dropdown --}}
                    <li>
                        <x-dashboard.sidebar.drop-down-button controls='layout'>
                            <x-s-v-g-s.layouts
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.drop-down-button>
                        <x-dashboard.sidebar.drop-down-wrapper controls='layout'>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/layouts/stacked/" content="Stacked" />
                    </li>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/layouts/sidebar/" content="Sidebar" />
                    </li>
                    </x-dashboard.sidebar.drop-down-wrapper>
                    </li>

                    {{-- crud dropdown --}}
                    <li>
                        <x-dashboard.sidebar.drop-down-button content="CRUD" controls='crud'>
                            <x-s-v-g-s.crud
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.drop-down-button>
                        <x-dashboard.sidebar.drop-down-wrapper controls="crud">
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/crud/products/" content="Products" />
                    </li>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/crud/users/" content="Users" />
                    </li>
                    </x-dashboard.sidebar.drop-down-wrapper>
                    </li>

                    {{-- Settings --}}
                    <li>
                        <x-dashboard.sidebar.item path="https://flowbite-admin-dashboard.vercel.app/settings/"
                            content="Settings">
                            <x-s-v-g-s.settings-3 class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>

                    {{-- pages dropdown --}}
                    <li>
                        <x-dashboard.sidebar.drop-down-button content="Pages" controls='pages'>
                            <x-s-v-g-s.pages class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"/>
                        </x-dashboard.sidebar.drop-down-button>
                        <x-dashboard.sidebar.drop-down-wrapper controls="pages">
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/pages/pricing/" content="Pricing" />
                    </li>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/pages/maintenance/"
                            content="Maintenance" />
                    </li>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/pages/404/" content="404 Not found" />
                    </li>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/pages/500/" content="500 server error" />
                    </li>
                    </x-dashboard.sidebar.drop-down-wrapper>
                    </li>


                    {{-- Authentication dropdown --}}
                    <li>
                        <x-dashboard.sidebar.drop-down-button content="Authentication" controls='Authentication'>
                            <x-s-v-g-s.lock class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"/>
                        </x-dashboard.sidebar.drop-down-button>
                        <x-dashboard.sidebar.drop-down-wrapper controls="Authentication">
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/authentication/sign-in/"
                            content="Signin" />
                    </li>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/authentication/sign-up/"
                            content="Signup" />
                    </li>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/authentication/reset-password/"
                            content="Reset password" />
                    </li>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/authentication/forgot-password/"
                            content="Forgot password" />
                    </li>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/authentication/profile-lock/"
                            content="Profile lock" />
                    </li>
                    </x-dashboard.sidebar.drop-down-wrapper>
                    </li>

                    {{-- Playground dropdown --}}
                    <li>
                        <x-dashboard.sidebar.drop-down-button content="Playground" controls='playground'>
                            <x-s-v-g-s.mouse class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"/>
                        </x-dashboard.sidebar.drop-down-button>
                        <x-dashboard.sidebar.drop-down-wrapper controls='playground'>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/playground/stacked/" content="Stacked" />
                    </li>
                    <li>
                        <x-dashboard.sidebar.item class="pl-11"
                            path="https://flowbite-admin-dashboard.vercel.app/playground/sidebar/" content="Sidebar" />
                    </li>
                    </x-dashboard.sidebar.drop-down-wrapper>
                    </li>
                </ul>
                <div class="pt-2 space-y-2">

                    {{-- GitHub Repository --}}
                    <x-dashboard.sidebar.item path="https://github.com/themesberg/flowbite-admin-dashboard"
                        content="GitHub Repository">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path
                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                        </svg>
                    </x-dashboard.sidebar.item>

                    {{-- Flowbite Docs --}}
                    <x-dashboard.sidebar.item path="https://flowbite.com/docs/getting-started/introduction/"
                        content="Flowbite Docs">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                            <path fill-rule="evenodd"
                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </x-dashboard.sidebar.item>

                    {{-- Components --}}
                    <x-dashboard.sidebar.item path="https://flowbite.com/docs/components/alerts/" content="Components">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                            </path>
                        </svg>
                    </x-dashboard.sidebar.item>

                    {{-- Support --}}
                    <x-dashboard.sidebar.item path="https://github.com/themesberg/flowbite-admin-dashboard/issues"
                        content="Support">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </x-dashboard.sidebar.item>
                </div>
            </div>
        </div>
        @include('components.dashboard.sidebar.partials.__sidebar-fotter')
    </div>
</aside>