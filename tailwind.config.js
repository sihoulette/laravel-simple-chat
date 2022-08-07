const plugin = require("tailwindcss/plugin");
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/assets/js/*.{vue,js,ts,jsx,tsx}",
        "./resources/assets/js/**/*.{vue,js,ts,jsx,tsx}",
    ],
    theme: {
        colors: {
            ...colors,
        },
        extend: {},
    },
    plugins: [
        require("@tailwindcss/forms"),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}
