const { colors } = require("laravel-mix/src/Log");

module.exports = {
    content: [
        "./resources/**/*.{blade.php,js}",
        "./node_modules/flowbite/**/*.js",
        "./vendor/wire-elements/modal/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
    ],

    safelist: [
        "sm:max-w-sm",
        "sm:max-w-md",
        "sm:max-w-lg",
        "sm:max-w-xl",
        "sm:max-w-2xl",
        "sm:max-w-3xl",
        "sm:max-w-4xl",
        "sm:max-w-5xl",
        "sm:max-w-6xl",
        "sm:max-w-7xl",
        "md:max-w-lg",
        "md:max-w-xl",
        "lg:max-w-2xl",
        "lg:max-w-3xl",
        "xl:max-w-4xl",
        "xl:max-w-5xl",
        "2xl:max-w-6xl",
        "2xl:max-w-7xl'",
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
            width: {
                "350px": "350px",
                "600px": "600px",
            },
            height: {
                "420px": "420px",
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
