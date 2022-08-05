import * as VueRouter from 'vue-router';

// Import configs
import landingCfg from './configs/landing';

// Route options
const routeOptions = [
    { path: '/', name: 'HomePage', meta: { config: landingCfg } }
]

// Map route options
const routes = routeOptions.map(route => {
    return {
        ...route,
        component: () => {
            if (typeof route.meta === 'object'
                && typeof route.meta.config === 'object'
                && typeof route.meta.config.view === 'object'
                && typeof route.meta.config.view.path === 'string'
            ) {
                return import(`./views/${route.meta.config.view.path}/${route.name}.vue`);
            }

            return import(`./views/${route.name}.vue`);
        }
    }
});

// Create router
const router = VueRouter.createRouter({
    mode: 'history',
    history: VueRouter.createWebHistory(),
    routes: routes
});

export default router;
