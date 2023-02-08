/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      maxWidth: {
        'max': '1520px',
      },
      spacing: {
        '12rem': '12rem',
        '26rem': '26rem',
        '36rem': '36rem',
        '60rem': '60rem',
        '23%': '23%',
        '30%': '30%',
        '70%': '70%',
      },
      fontFamily: {
        display: ["Baloo 2", "cursive"],
      },
      colors: {
        'orange': '#F87C56',
        'blue': '#0092BD',
        'gray': '#EBEBEB',
        'gray-grass': '#a1a1a1',
        'white': '#FFFFFF',
        'black': '#000000',
      },
    },

  },
  plugins: [],
}
