/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './components/**/*.{js,vue,ts}',
        './layouts/**/*.vue',
        './pages/**/*.vue',
        './plugins/**/*.{js,ts}',
        './nuxt.config.{js,ts}',
        './error.vue',
    ],
    theme: {
        container: {
            center: true,
            padding: "1rem",
        },
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1200px",
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            white: "#FFFFFF",
            black: {
                DEFAULT: "#2f2f2f",
                light: "#778ca3",
            },
            primary: "#747ed1",
            success: "#47be7d",
        },
        fontFamily: {
            nunito: ["Nunito, sans-serif"],
        },
        extend: {
            animation: {
                typing: "typing 5s infinite steps(118)",
            },
            keyframes: {
                typing: {
                    "0%": {
                        width: "0",
                    },
                    "80%": {
                        width: "118ch",
                    },
                    "100%": {
                        width: "118ch",
                    },
                },
            },
        },
    },
    plugins: [],
};
