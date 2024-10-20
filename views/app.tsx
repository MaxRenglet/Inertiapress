import axios from 'axios';
import { createRoot } from 'react-dom/client';

import { createInertiaApp } from '@inertiajs/react';

declare const window : {axios : any; nonce: string}

window.axios = axios;
window.axios.defaults.headers.common['X-WP-Nonce'] = window.nonce;

createInertiaApp({
	resolve: (name) => {
		const pages = import.meta.glob('./Pages/**/*.tsx', { eager: true });
		return pages[`./Pages/${name}.tsx`];
	},
	setup({ el, App, props }) {
		createRoot(el).render(<App {...props} />);
	},
});
