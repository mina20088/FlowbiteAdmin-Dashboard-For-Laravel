<div
  class="z-20 z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:divide-gray-600 dark:bg-gray-700"
  id="notification-dropdown">
  <div
    class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    Notifications
  </div>
  <div>
    <x-dashboard.header.notification-drop-down-items created_at="10 minutes ago">
      <x-slot:svgs>
        <div
          class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-primary-700 dark:border-gray-700">
          <x-s-v-g-s.messages class="w-3 h-3 text-white" />
        </div>
      </x-slot:svgs>
      <p>New Message Was created ny <strong>Mina Remon</strong></p>
    </x-dashboard.header.notification-drop-down-items>


    <x-dashboard.header.notification-drop-down-items created_at="10 minutes ago">
      <x-slot:svgs>
        <div
          class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-black dark:border-gray-700">
          <x-s-v-g-s.folow class="w-3 h-3 text-white" />
        </div>
      </x-slot:svgs>
      <span class="font-semibold text-gray-900 dark:text-white">Jese leos
      </span> and
      <span class="font-medium text-gray-900 dark:text-white">5 others</span> started following you
    </x-dashboard.header.notification-drop-down-items>


    <x-dashboard.header.notification-drop-down-items created_at="44 minutes ago">
      <x-slot:svgs>
        <div
          class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-red-500 dark:border-gray-700">
          <x-s-v-g-s.hart class="w-3 h-3 text-white" />
        </div>
      </x-slot:svgs>
      <span class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span> and <span
        class="font-medium text-gray-900 dark:text-white">141 others</span> love your story. See it and view more
      stories.
    </x-dashboard.header.notification-drop-down-items>


    <x-dashboard.header.notification-drop-down-items created_at="1 hour ago">
      <x-slot:svgs>
        <div
          class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-green-400 dark:border-gray-700">
          <x-s-v-g-s.comment class="w-3 h-3 text-white" />
        </div>
      </x-slot:svgs>
      <span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you in a comment:
      <span class="font-medium text-primary-700 dark:text-primary-500">@bonnie.green</span> what do you say?
    </x-dashboard.header.notification-drop-down-items>


    <x-dashboard.header.notification-drop-down-items created_at="3 hours ago">
      <x-slot:svgs>
        <div
          class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-purple-500 dark:border-gray-700">
          <x-s-v-g-s.camera class="w-3 h-3 text-white" />
        </div>
      </x-slot:svgs>
      <span class="font-semibold text-gray-900 dark:text-white">Robert Brown</span> posted a new video: Glassmorphism -
      learn how to implement the new design trend

    </x-dashboard.header.notification-drop-down-items>

  </div>

  <a href="#"
    class="block py-2 text-base font-normal text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-700 dark:text-white dark:hover:underline">
    <div class="inline-flex items-center ">
      <x-s-v-g-s.eye class="w-5 h-5 mr-2" />
      View all
    </div>
  </a>
</div>