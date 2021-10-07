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
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
