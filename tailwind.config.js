/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './resources/views/**/*.blade.php',
    './src/**/*.{html,js}',
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: ['tw-elements/dist/plugin'],
}
