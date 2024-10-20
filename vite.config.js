import { v4wp } from '@kucrut/vite-for-wp';
import { wp_scripts } from '@kucrut/vite-for-wp/plugins';
import react from '@vitejs/plugin-react';
import { resolve } from 'path';

export default {
	plugins: [
		v4wp( {
			input: 'main.ts',
			outDir: 'dist/js',
		} ),
		wp_scripts(),
		react( {
			jsxRuntime: 'classic',
		} ),
	],
    resolve: {
        alias: {
            '@': resolve(__dirname, './'),
            '@Assets': resolve(__dirname, './assets'),
            '@Views': resolve(__dirname, './views'),
        },
    },
};