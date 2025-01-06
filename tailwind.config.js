/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./FRONT-END/**/*.{html,php,js}"],
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
      boxShadow: {
        '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.6)',
      }
    },
  },
  plugins: [],
}
