<template>
    <div id="app">
        <AppLayout>
            <router-view />
        </AppLayout>
    </div>
</template>

<script>
import AppLayout from './AppLayout.vue';
export default {
    name: 'App',
    components: { AppLayout }
}
</script>
