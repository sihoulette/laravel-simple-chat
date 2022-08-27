<template>
    <div class="sidebar-header flex items-center px-2 py-3 bg-white dark:bg-gray-800 border-r border-b border-grey-lighter">
        <SettingsDropdown></SettingsDropdown>
        <form class="w-full">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <font-awesome-icon class="text-gray-500 dark:text-gray-400" icon="fa-solid fa-magnifying-glass" />
                </div>
                <input type="search" id="default-search" class="block p-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>
            </div>
        </form>
    </div>
    <div class="sidebar-main h-full border-r border-grey-lighter overflow-y-auto">
        <div class="main-content mb-[4rem]">
            <div class="contact flex mb-2 bg-blue">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-green bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=d5849d81af587a09dbcf3f11f6fa122f);"></span>
                <div class="contact__content w-full p-2 border-b border-blue text-sm">
                    <div class="contact__name flex justify-between w-full text-white leading-none font-semibold">
                        Theresita Swann
                        <span class="text-xs font-normal text-blue-lightest">
                <svg class="inline-block w-3 w-3 text-blue fill-current" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                <svg class="inline-block w-3 w-3 text-blue fill-current -ml-2 mr-1" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                15:35
              </span>
                    </div>
                    <p class="contact__message text-blue-lightest">
                        It's https://www.getsjabloon.com ❤️❤️❤️
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-green bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="">FF</span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Frank Forrey
                        <span class="text-xs font-normal text-grey-darker">
                12:49
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        Are you ghosting me? ?
                        <span class="absolute pin-r pin-b flex w-4 h-4 justify-center items-center text-xs font-medium text-blue-lightest bg-blue rounded-full">9</span>
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-green bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1505806985939-d50038b76168?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=e4ed2f81507e77783f51f7738396d9cb)"></span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Celestyna Treverton
                        <span class="text-xs font-normal text-grey-darker">
                <svg class="inline-block w-3 w-3 text-blue fill-current" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                <svg class="inline-block w-3 w-3 text-blue fill-current -ml-2 mr-1" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                11:19
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        LOOOOLLLLLLL ????
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-green bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1506803682981-6e718a9dd3ee?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=c3a31eeb7efb4d533647e3cad1de9257)"></span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Vance Klingelhofer
                        <span class="text-xs font-normal text-grey-darker">
                Sat
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        You free for brunch tomorrow? ?
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-yellow-dark bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="">BE</span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Bekki Eggleston ☀️
                        <span class="text-xs font-normal text-grey-darker">
                Sat
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        Such a crazy story, right?! ?
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-yellow-dark bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1509460913899-515f1df34fea?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=3f295ad36e97b56caa7fc3db6deef987)"></span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Kurt Mendis
                        <span class="text-xs font-normal text-grey-darker">
                Thu
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        I know!!! I can't believe it's real!
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-yellow-dark bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1498529381350-89c2e7ccc430?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=f6143f1f2142185de1e1e3d955f729ec)"></span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Cassandry
                        <span class="text-xs font-normal text-grey-darker">
                <svg class="inline-block w-3 w-3 text-blue fill-current" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                <svg class="inline-block w-3 w-3 text-blue fill-current -ml-2 mr-1" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                Wed
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        I'm not sure about that. What do you think of off-white?
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-green bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1505806985939-d50038b76168?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=e4ed2f81507e77783f51f7738396d9cb)"></span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Celestyna Treverton
                        <span class="text-xs font-normal text-grey-darker">
                <svg class="inline-block w-3 w-3 text-blue fill-current" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                <svg class="inline-block w-3 w-3 text-blue fill-current -ml-2 mr-1" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                11:19
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        LOOOOLLLLLLL ????
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-green bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1506803682981-6e718a9dd3ee?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=c3a31eeb7efb4d533647e3cad1de9257)"></span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Vance Klingelhofer
                        <span class="text-xs font-normal text-grey-darker">
                Sat
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        You free for brunch tomorrow? ?
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-yellow-dark bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="">BE</span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Bekki Eggleston ☀️
                        <span class="text-xs font-normal text-grey-darker">
                Sat
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        Such a crazy story, right?! ?
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-yellow-dark bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1509460913899-515f1df34fea?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=3f295ad36e97b56caa7fc3db6deef987)"></span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Kurt Mendis
                        <span class="text-xs font-normal text-grey-darker">
                Thu
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        I know!!! I can't believe it's real!
                    </p>
                </div>
            </div>

            <div class="contact flex mb-2">
                <span class="contact__avatar w-12 h-12 mt-2 mb-2 ml-2 flex flex-no-shrink justify-center items-center bg-yellow-dark bg-center bg-no-repeat bg-cover text-xl text-white font-semibold uppercase text-center rounded-full" style="background-image: url(https://images.unsplash.com/photo-1498529381350-89c2e7ccc430?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=f6143f1f2142185de1e1e3d955f729ec)"></span>
                <div class="contact__content w-full p-2 border-b border-grey-lighter text-sm">
                    <div class="contact__name flex justify-between w-full text-black leading-none font-semibold">
                        Cassandry
                        <span class="text-xs font-normal text-grey-darker">
                <svg class="inline-block w-3 w-3 text-blue fill-current" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                <svg class="inline-block w-3 w-3 text-blue fill-current -ml-2 mr-1" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="icon-shape"> <polygon id="Path-126" points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon> </g> </g> </svg>
                Wed
              </span>
                    </div>
                    <p class="relative pr-6 contact__message text-grey-dark">
                        I'm not sure about that. What do you think of off-white?
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import SettingsDropdown from './../dropdowns/settings.vue';

export default {
    name: "Sidebar",
    components: { SettingsDropdown },
    data() {
        return {

        };
    },
    methods: {

    }
};
</script>
