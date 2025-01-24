module.exports = {
  mode: "jit",
  content: [
    './public/*.html',
    './public/**/*.html',
    './public/**/*.js',
    './public/**/**/*.html',
    './public/**/*.php',
    '!./node_modules/**/*',  // Exclure le dossier node_modules
  ],
  theme: {
    extend: {
      colors: {
        black: "#121213",
        'black-gray': "#414141",
        white: "#EAEAEA",
        violet: "#1C161E",
        yellow: "#EFE3C8",
        brown: "#704341",
        "yellow-transparent": "rgba(239, 227, 200, 0.7)",
      },
      fontFamily: {
        rosarivo: ["Rosarivo", "serif"],
        opensans: ["Open Sans", "sans-serif"],
        rosario: ["Rosario", "sans-serif"],
        inter: ["Inter", "sans-serif"],
      },
      boxShadow: {
        sm: "1px 1px 2px rgba(0, 0, 0, 0.5)",
        DEFAULT: "2px 2px 4px rgba(0, 0, 0, 0.5)",
        lg: "3px 3px 6px rgba(0, 0, 0, 0.5)",
        "3xl": "0 35px 60px -15px rgba(0, 0, 0, 0.6)",
        headering: "-1px 11px 23px 6px rgba(0, 0, 0, 0.4)", 
      },
      textShadow: {
        'xl': '2px 2px 4px rgba(0, 0, 0, 0.8)',
      },
    },
  },
  plugins: [
    require("tailwindcss-textshadow"), //Donne une ombre aux textes extensions
    require('tailwind-scrollbar-hide'), // Cache les barres de scroll
  ],
};