import { defineConfig, normalizePath } from 'vite';
import {resolve} from 'path';
import laravel from 'laravel-vite-plugin';
const path = require('path')
 
export default defineConfig({
    resolve: {
        alias: {
            '@': normalizePath(resolve(__dirname, 'resource')),
            '~bootstrap': resolve(__dirname, 'node_modules/bootstrap'),
            '~bootstrap-icons': resolve(__dirname, 'node_modules/bootstrap-icons'),
            '~perfect-scrollbar': resolve(__dirname, 'node_modules/perfect-scrollbar'),
            '~@fontsource': resolve(__dirname, 'node_modules/@fontsource'),
        }
    },
    plugins: [
        laravel({
            input: [
                "resources/sass/bootstrap.scss",
                "resources/sass/themes/dark/app-dark.scss",
                "resources/js/app.js",
                "resources/css/app.css",
                "resources/sass/app.scss",
                "resources/sass/pages/auth.scss"
            ],
            refresh: true
        }),
    ],
});