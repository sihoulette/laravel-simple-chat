import { defineConfig, loadEnv } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default ({ mode }) => {
    // Load app-level env vars to node-level env vars.
    process.env = {...process.env, ...loadEnv(mode, process.cwd())};

    return defineConfig({
        plugins: [
            vue(),
            laravel({
                input: [
                    'resources/assets/sass/app.scss',
                    'resources/assets/js/app.js'
                ],
                refresh: true,
            })
        ],
    })
}

