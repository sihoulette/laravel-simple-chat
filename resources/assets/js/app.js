import './bootstrap';
import 'flowbite';

import { createApp } from 'vue';

import App from './base/App.vue';

import store from './store';
import router from './router';

// Import mixins
import apiMixin from './mixins/api.js';

// Import components
import FontAwesomeIcon from './packages/fontawesome';
import AppLayout from './base/AppLayout.vue';

// Create application
const app = createApp(App)
app.use(store)
    .use(router)
    .component('font-awesome-icon', FontAwesomeIcon)
    .component('AppLayout', AppLayout)
    .mixin(apiMixin)
    .mount('#app');
