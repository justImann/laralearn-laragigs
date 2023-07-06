/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/preline/dist/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#0C4A6E",
                secondary: "#66D776",
                info: "#1466D1",
                warning: "#FFC700",
                danger: "#DD2E3D",
            },
        },
    },
    plugins: [require("preline/plugin", "flowbite/plugin")],
};
