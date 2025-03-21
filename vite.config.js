import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'public/home/css/main.css',
                'public/home/css/auth.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
