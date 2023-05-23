/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                laravel: "#ef3b2d",
            },
        },
    },
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#67CBA0",

                    secondary: "#7B92B2",

                    accent: "#6366f1",

                    neutral: "#181A2A",

                    "base-100": "#FFFFFF",

                    info: "#0091F9",

                    success: "#64BF4E",

                    warning: "#EFDA17",

                    error: "#FF5A35",
                },
            },
        ],
    },
    plugins: [require("daisyui")],
};
