/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      spacing: {
        '26rem': '26rem',
        '36rem': '36rem',
        '60rem': '60rem',
        '30%': '30%',
      }
    },
    fontFamily: {
      display: ["Baloo 2", "cursive"],
    },
      maxWidth: {
        'max': '1512px',
      },
      listStyleType: {
        square: 'square',
      }
    },
    colors: {
      'orange': '#F87C56',
      'blue': '#0092BD',
      'gray': '#EBEBEB',
      'gray-grass':'#a1a1a1',
      'white': '#FFFFFF',
      'black': '#000000',
    },
  },
  plugins: [],
}
