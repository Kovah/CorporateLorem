const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
    './templates/index.html',
  ],
  theme: {
    extend: {
      colors: {
        orange: colors.orange,
        gray: colors.warmGray
      }
    }
  },
  variants: {},
  plugins: [],
}
