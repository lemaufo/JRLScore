import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: "#2672EF",  // Azul principal (botón)
                secondary: "#246ADC", // Azul de borde en focus
                dark: "#1F5BCC", // Azul más oscuro para hover
                lightGray: "#F3F4F6", // Un gris claro opcional
              },
              
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],

    // darkMode: 'class'
};
