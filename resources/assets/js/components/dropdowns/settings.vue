<template>
    <div class="relative">
        <div id="settingsButton"
             role="button"
             data-dropdown-toggle="settingsDropdown"
             class="
                inline-flex items-center p-2 mr-2
                text-sm font-medium text-center
                text-gray-900 bg-white rounded-lg hover:bg-gray-100
                focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600
             ">
            <font-awesome-icon icon="fa-solid fa-bars" size="xl" />
        </div>
        <div id="settingsDropdown"
             class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 hidden">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="settingsButton">
                <li>
                    <a href="#" class="flex items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <font-awesome-icon icon="fa-solid fa-user" />
                        <span class="ml-2">Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <font-awesome-icon icon="fa-solid fa-gear" />
                        <span class="ml-2">Settings</span>
                    </a>
                </li>
            </ul>
            <div class="py-1">
                <a href="#" class="flex items-center py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                    <font-awesome-icon icon="fa-solid fa-arrow-right-from-bracket" />
                    <span class="ml-2">Logout</span>
                </a>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "SettingsDropdown",
    data() {
        return {
            dropdown: null
        }
    },
    mounted() {
        this.dropdown = (() => {
            const targetEl = document.getElementById('settingsDropdown');
            const triggerEl = document.getElementById('settingsButton');

            return new Dropdown(targetEl, triggerEl, {
                placement: 'bottom',
                onHide: () => {
                    console.log('dropdown has been hidden');
                },
                onShow: () => {
                    console.log('dropdown has been shown');
                }
            });
        })()
    },
    methods: {

    }
}
</script>
