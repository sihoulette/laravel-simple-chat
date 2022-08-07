import './bootstrap';

import { createApp } from 'vue';

import App from './base/App.vue';
import AppLayout from './base/AppLayout.vue';
import router from './router.js';

import apiMixin from './mixins/api.js';
import authMixin from './mixins/auth.js';

// Create application
const app = createApp(App);
app.use(router)
    .component('AppLayout', AppLayout)
    .mixin(apiMixin)
    .mixin(authMixin)
    .mount('#app');
