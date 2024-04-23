import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        })
    ],
  server: {
    https: true,
    hmr: {
        host: 'localhost'
        // host: '127.0.0.1'
        // host: 'ff38ff51-10d1-4397-801a-ce53bd0c1e6b-00-13gls7ei7dqee.sisko.replit.dev'
    },
  }
});
