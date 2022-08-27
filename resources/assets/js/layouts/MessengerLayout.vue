<template>
    <div class="messenger relative flex h-screen overflow-hidden">
        <div class="messenger-sidebar relative w-full sm:w-2/5">
            <Sidebar></Sidebar>
        </div>
        <div class="messenger-chat relative hidden sm:block sm:w-full">
            <router-view />
        </div>
    </div>
</template>

<script>
import Sidebar from "./../components/navbars/sidebar.vue";

export default {
    name: "MessengerLayout",
    components: { Sidebar }
};
</script>
