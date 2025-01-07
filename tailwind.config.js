import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'widescreen': { 'raw': '(min-aspect-ratio: 3/2)' },
                'tallscreen': { 'raw': '(min-aspect-ratio: 13/20)' },
              },
              keyframes: {
                'open-menu': {
                  '0%': { transform: 'scaleY(0)' },
                  '80%': { transform: 'scaleY(1.2)' },
                  '100%': { transform: 'scaleY(1)' },
                },
              },
              animation: {
                'open-menu': 'open-menu 0.5s ease-in-out forwards',
              }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
    darkMode:['class'],
    
};
