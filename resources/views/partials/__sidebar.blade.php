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
                            <x-s-v-g-s.settings-3
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>

                    {{-- pages dropdown --}}
                    <li>
                        <x-dashboard.sidebar.drop-down-button content="Pages" controls='pages'>
                            <x-s-v-g-s.pages
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
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
                            <x-s-v-g-s.lock
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
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
                            <x-s-v-g-s.mouse
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
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
                        <x-s-v-g-s.github />
                    </x-dashboard.sidebar.item>

                    {{-- Flowbite Docs --}}
                    <x-dashboard.sidebar.item path="https://flowbite.com/docs/getting-started/introduction/"
                        content="Flowbite Docs">
                        <x-s-v-g-s.docs />
                    </x-dashboard.sidebar.item>

                    {{-- Components --}}
                    <x-dashboard.sidebar.item path="https://flowbite.com/docs/components/alerts/" content="Components">
                        <x-s-v-g-s.components/>
                    </x-dashboard.sidebar.item>

                    {{-- Support --}}
                    <x-dashboard.sidebar.item path="https://github.com/themesberg/flowbite-admin-dashboard/issues"
                        content="Support">
                        <x-s-v-g-s.support/>
                    </x-dashboard.sidebar.item>
                </div>
            </div>
        </div>
        @include('components.dashboard.sidebar.partials.__sidebar-fotter')
    </div>
</aside>