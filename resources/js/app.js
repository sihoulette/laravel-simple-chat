import './bootstrap';

import { createApp } from 'vue';

import App from './base/App.vue';
import AppLayout from './base/AppLayout.vue';
import router from './router.js';

// Create application
const app = createApp(App);
app.use(router)
    .component('AppLayout', AppLayout)
    .mount('#app');
