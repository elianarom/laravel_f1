/** @type {import('tailwindcss').Config} */

const default_theme = require('tailwindcss/defaultTheme')

export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
