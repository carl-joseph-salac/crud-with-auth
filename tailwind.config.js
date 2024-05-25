/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                xxs: { max: "380px" },
            },
        },
    },
    plugins: [require("daisyui")],
};
