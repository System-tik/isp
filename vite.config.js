import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import tailwindcss from "tailwindcss";
import autoprefixer from "autoprefixer";

export default defineConfig({
    plugins: [
        vue({
            // This is needed, or else Vite will try to find image paths (which it wont be able to find because this will be called on the web, not directly)
            // For example <img src="/images/logo.png"> will not work without the code below
            template: {
                transformAssetUrls: {
                    includeAbsolute: false,
                },
            },
        }),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
            postcss: [tailwindcss(), autoprefixer()],
            output: [
                'public/js/app.js',
            ]
        }),
    ],
});
