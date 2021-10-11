const { fontFamily } = require("tailwindcss/defaultTheme");

module.exports = {
  purge: ["./**/*.php", "./**/save.js"],
  mode: "jit",
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        sans: ["Lota Grotesque", ...fontFamily.sans],
      },
      colors: {
        highlight: "#D5866D",
      },
      backgroundImage: {
        "footer-bg": "url('/themes/steinerskolan/assets/img/footer-bg.png')",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
