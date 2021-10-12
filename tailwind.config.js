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
        schoolGreen: "#0F3A00",
      },
      backgroundImage: {
        "footer-bg":
          "url('http://159.89.96.200/wp-content/themes/steinerskolan/assets/img/footer-bg.png')",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
