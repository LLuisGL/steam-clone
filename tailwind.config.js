/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        motiva:['"Motiva Sans"', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
