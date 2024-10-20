/* eslint-disable no-undef */
module.exports = {
	env: {
		browser: true,
		es2021: true,
		node: true,
	},
	root: true,
	extends: [
		'eslint:recommended',
		'plugin:@typescript-eslint/recommended',
		'plugin:react/recommended',
		'plugin:tailwindcss/recommended',
		'plugin:storybook/recommended',
		'plugin:jsx-a11y/recommended',
	],
	parser: '@typescript-eslint/parser',
	parserOptions: {
		ecmaVersion: 'latest',
		sourceType: 'module',
		ecmaFeatures: {
			jsx: true,
		},
	},
	settings: {
		react: {
			version: 'detect',
		},
	},
	plugins: ['@typescript-eslint', 'react', 'prettier', 'jsx-a11y'],
	ignorePatterns: ['**/dist/**/*.js', '**/dist/**/*.css'],
	rules: {
		'no-mixed-spaces-and-tabs': 0, // disable rule
		'react/react-in-jsx-scope': 'off',
		'@typescript-eslint/no-explicit-any': 'off',
		'@typescript-eslint/ban-ts-comment': 'error',
		'react/jsx-first-prop-new-line': 0,
		'tailwindcss/no-contradicting-classname': 'off',
		'react/prop-types': 'off',
		'no-console': 'warn',
		'react/jsx-max-props-per-line': [
			1,
			{
				maximum: 20,
			},
		],
		'tailwindcss/no-custom-classname': [
			'error',
			{
				whitelist: [
					'(.*)no-scrollbar(.*)',
					'draggableElement',
					'(.*)minos-(.*)',
					'minos-(.*)',
					'(.*)minos_(.*)',
					'minos_(.*)',
					'col-start-(.*)',
					'col-end-(.*)',
					'grid-cols-container',
					'(.*)accordion-(.*)',
					'm_(.*)',
					'(.*)m_(.*)',
				],
			},
		],
	},
};
