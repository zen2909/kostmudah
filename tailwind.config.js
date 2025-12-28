/** @type {import('tailwindcss').Config} */
import twElements from "tw-elements/plugin.cjs";
import flowbite from "flowbite/plugin";

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
            fontFamily: {
                sans: ["Noto Sans", "ui-sans-serif", "system-ui"],
                inter: ["Inter", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
                nunito: ["Nunito", "sans-serif"],
            },
        },
    },

    plugins: [twElements, flowbite],
};
