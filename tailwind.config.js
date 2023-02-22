const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#18273F",
                secondary: "#19304E",
                new: "#A3C0E2",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("tailwind-scrollbar-hide"),
    ],
};
