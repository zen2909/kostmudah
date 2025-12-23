/** @type {import('tailwindcss').Config} */
import twElements from "tw-elements/plugin.cjs";

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Noto Sans"', "ui-sans-serif", "system-ui"],
            },
        },
    },
    plugins: [twElements],
};
