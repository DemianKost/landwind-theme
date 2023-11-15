/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./template-parts/**/*.{html,js,php}",
    "./templates/**/*.{html,js,php}",
    "./css/**/*.{html,js,php}",
    "./js/**/*.{html,js,php}",
    "./*.{php,html,js}"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

