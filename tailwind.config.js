/** @type {import('tailwindcss').Config} */
import twElements from "tw-elements/plugin.cjs";
import flowbite from "flowbite/plugin";
import scrollbarHide from "tailwind-scrollbar-hide";

export default {
    content: [
        // Laravel Blade
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",

        // TW Elements
        "./node_modules/tw-elements/js/**/*.js",

        // Material Tailwind
        "./node_modules/@material-tailwind/html/**/*.js",

        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            
        },
    },

    plugins: [twElements, flowbite, scrollbarHide,],
};
