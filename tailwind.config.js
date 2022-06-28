const { colors } = require("laravel-mix/src/Log");

module.exports = {
    content: [
        "./resources/**/*.{blade.php,js}",
        "./node_modules/flowbite/**/*.js",
        "./vendor/wire-elements/modal/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
    ],

    theme: {
        extend: {
            animation: {
                tilt: "tilt 10s infinite linear",
            },
            keyframes: {
                tilt: {
                    "0%, 50%, 100%": {
                        transform: "rotate(0deg)",
                    },
                    "25%": {
                        transform: "rotate(1deg)",
                    },
                    "75%": {
                        transform: "rotate(-1deg)",
                    },
                },
            },
            fontFamily: {
                poppins: "'Poppins', sans-serif",
            },
            colors: {
                black: "#121316",
                liteBlack: "#191A1E",
                liteGray: "#B5B3BC",
                pink: {
                    50: "#F7E9FC",
                    75: "#DFA4F4",
                    100: "#D27EF0",
                    200: "#BF47E9",
                    300: "#B221E5",
                    400: "#7D17A0",
                    500: "#6D148C",
                },
                purple: {
                    50: "#EFE8FC",
                    75: "#BCA2F3",
                    100: "#A07BEE",
                    200: "#7742E6",
                    300: "#5B1BE1",
                    400: "#40139E",
                    500: "#381089",
                },
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
