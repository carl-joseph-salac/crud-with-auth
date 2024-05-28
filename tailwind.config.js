/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            screens: {
                xxs: { max: "380px" },
            },
        },
    },
    plugins: [require("daisyui"), require("flowbite/plugin")],
    darkMode: "class",
};
