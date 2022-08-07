<template>
    <component :is="layout">
        <slot />
    </component>
</template>

<script>
import { useRoute } from 'vue-router';
import { shallowRef, watch } from 'vue';

import DefaultLayout from '../layouts/DefaultLayout.vue';

export default {
    name: 'AppLayout',
    setup () {
        const route = useRoute();
        const layout = shallowRef(DefaultLayout);
        watch(
            () => route.meta,
            async (meta) => {
                try {
                    const component = await import(`../layouts/${meta.config.layout.name}.vue`)
                    layout.value = component?.default || DefaultLayout
                } catch (e) {
                    layout.value = DefaultLayout
                }
            },
        )
        return { layout }
    }
}
</script>
