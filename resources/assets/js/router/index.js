import * as VueRouter from 'vue-router';

// Import configs
import authCfg from './configs/auth';
import landingCfg from './configs/landing';
import messengerCfg from './configs/messenger';

// Route options
const routeOptions = [
    // Landing route
    { path: '/', name: 'HomePage', meta: { config: landingCfg } },
    // Auth routes
    { path: '/register', name: 'RegisterPage', meta: { config: authCfg } },
    { path: '/login', name: 'LoginPage', meta: { config: authCfg } },
    { path: '/forgot', name: 'ForgotPassPage', meta: { config: authCfg } },
    // Messenger routes
    { path: '/messages', name: 'MessagesPage', meta: { config: messengerCfg } },
];

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
