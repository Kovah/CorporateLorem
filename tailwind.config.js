const colors = require('tailwindcss/colors');

module.exports = {
  content: [
    './templates/index.html',
  ],
  theme: {
    extend: {
      colors: {
        orange: colors.orange,
        gray: colors.stone
      }
    }
  }
}
