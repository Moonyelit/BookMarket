/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./FRONT-END/HTML/*.html", "./FRONT-END/PHP/**/*.php"],
  theme: {
    extend: {
      colors: {
        black: "#121213",
        white: "#EAEAEA",
        violet: "#1C161E",
        yellow: "#EFE3C8",
        brown: "#704341",
        "yellow-transparent": "rgba(239, 227, 200, 0.7)", // Jaune transparent à 70%
      },
      fontFamily: {
        rosarivo: ["Rosarivo", "serif"],
        opensans: ["Open Sans", "sans-serif"],
        rosario: ["Rosario", "sans-serif"],
        inter: ["Inter", "sans-serif"],
      },
    },
  },
  plugins: [],
}
