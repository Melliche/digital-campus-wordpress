/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      boxShadow: {
        'bxsh': '0px 0px 36.5px 36.5px rgba(0, 0, 0, 0.08)',
      },
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
      listStyleType: {
        square: 'square',
        hyphen: "-",
      },
      colors: {
        'orange': '#F87C56',
        'blue': '#0092BD',
        'grey': '#EBEBEB',
        'gray-grass': '#a1a1a1',
        'white': '#FFFFFF',
        'black': '#000000',
      },
    },
  },
  plugins: [],
}
